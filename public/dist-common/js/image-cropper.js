(function () {
    'use strict';

    const SELECTOR = '[data-image-cropper]';
    const ALLOWED_TYPES = ['image/jpeg', 'image/png', 'image/webp'];
    const DEFAULT_MAX_SIZE = 15 * 1024 * 1024;
    const initializedFields = new WeakSet();
    let sharedModal = null;

    class GlobalImageCropperModal {
        constructor() {
            this.owner = null;
            this.element = this.createElement();
            this.title = this.element.querySelector('[data-cropper-modal-title]');
            this.image = this.element.querySelector('[data-cropper-modal-image]');
            this.applyButton = this.element.querySelector('[data-cropper-modal-apply]');
            this.modal = this.createModalInstance();

            this.element.addEventListener('shown.bs.modal', () => {
                this.owner?.createCropper(this.image);
            });

            this.element.addEventListener('hidden.bs.modal', () => {
                this.owner?.closeCropper();
                this.owner = null;
                this.image.removeAttribute('src');
            });

            this.element.addEventListener('show.bs.modal', () => {
                requestAnimationFrame(() => {
                    document.querySelector('.modal-backdrop:last-of-type')
                        ?.classList.add('global-image-cropper-backdrop');
                });
            });

            this.applyButton.addEventListener('click', () => {
                this.owner?.applyCrop();
            });
        }

        createElement() {
            const element = document.createElement('div');
            element.className = 'modal fade global-image-cropper-modal';
            element.tabIndex = -1;
            element.setAttribute('aria-hidden', 'true');
            element.innerHTML = `
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" data-cropper-modal-title>Recortar imagen</h5>
                            <button type="button" class="btn-close close" data-bs-dismiss="modal" data-dismiss="modal" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="global-image-cropper-stage">
                                <img data-cropper-modal-image alt="Imagen para recortar">
                            </div>
                            <small class="text-muted d-block mt-2">
                                Arrastra la imagen y usa la rueda del mouse o gestos táctiles para ajustar el encuadre.
                            </small>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" data-cropper-modal-apply>Usar este recorte</button>
                        </div>
                    </div>
                </div>
            `;
            document.body.appendChild(element);

            return element;
        }

        createModalInstance() {
            if (typeof bootstrap !== 'undefined' && typeof bootstrap.Modal !== 'undefined') {
                const modal = typeof bootstrap.Modal.getOrCreateInstance === 'function'
                    ? bootstrap.Modal.getOrCreateInstance(this.element)
                    : new bootstrap.Modal(this.element);

                return {
                    show: () => modal.show(),
                    hide: () => modal.hide(),
                };
            }

            if (typeof window.jQuery !== 'undefined' && typeof window.jQuery.fn.modal !== 'undefined') {
                return {
                    show: () => window.jQuery(this.element).modal('show'),
                    hide: () => window.jQuery(this.element).modal('hide'),
                };
            }

            return null;
        }

        open(owner, sourceUrl, title) {
            if (!this.modal) {
                owner?.showError('No se pudo cargar el editor de imágenes. Recarga la página e intenta nuevamente.');
                return;
            }

            this.owner = owner;
            this.title.textContent = title;
            this.image.src = sourceUrl;
            this.modal.show();
        }

        hide() {
            this.modal.hide();
        }
    }

    class ImageCropperField {
        constructor(element, modal) {
            this.element = element;
            this.modal = modal;
            this.sourceInput = this.find(element.dataset.sourceInput);
            this.uploadInput = this.find(element.dataset.uploadInput);
            this.preview = this.find(element.dataset.previewImage);
            this.previewWrapper = this.find(element.dataset.previewWrapper);
            this.recropButton = this.find(element.dataset.recropButton);
            this.error = this.find(element.dataset.error);
            this.form = this.find(element.dataset.form);

            this.aspectRatio = this.numberValue('aspectRatio', 1);
            this.width = this.numberValue('outputWidth', this.numberValue('width', 800));
            this.height = this.numberValue('outputHeight', this.numberValue('height', 800));
            this.quality = this.numberValue('quality', 0.84);
            this.fillColor = element.dataset.fillColor || '#ffffff';
            this.maxSize = this.numberValue('maxSize', DEFAULT_MAX_SIZE);
            this.fileName = element.dataset.fileName || 'image.webp';
            this.title = element.dataset.title || 'Recortar imagen';
            this.required = element.dataset.required === 'true';
            this.requiredMessage = element.dataset.requiredMessage || 'Selecciona y recorta la imagen antes de guardar.';
            this.committedOriginalUrl = element.dataset.initialSource || '';
            this.committedOriginalIsObjectUrl = false;
            this.pendingSourceUrl = '';
            this.previewUrl = '';
            this.cropper = null;
            this.cropApplied = false;

            if (!this.sourceInput || !this.uploadInput || !this.preview) {
                return;
            }

            this.bindEvents();
        }

        find(selector) {
            return selector ? document.querySelector(selector) : null;
        }

        numberValue(key, fallback) {
            const value = Number(this.element.dataset[key]);
            return Number.isFinite(value) && value > 0 ? value : fallback;
        }

        bindEvents() {
            this.sourceInput.addEventListener('change', () => this.handleFile());
            this.recropButton?.addEventListener('click', () => this.open(this.committedOriginalUrl));

            if (this.required && this.form) {
                this.form.addEventListener('submit', (event) => {
                    if (this.uploadInput.files.length) {
                        return;
                    }

                    event.preventDefault();
                    this.showError(this.requiredMessage);
                    this.sourceInput.scrollIntoView({ behavior: 'smooth', block: 'center' });
                });
            }
        }

        handleFile() {
            const file = this.sourceInput.files[0];
            this.clearError();

            if (!file) {
                return;
            }

            if (!ALLOWED_TYPES.includes(file.type)) {
                this.sourceInput.value = '';
                this.showError('Selecciona una imagen JPG, PNG o WebP.');
                return;
            }

            if (file.size > this.maxSize) {
                this.sourceInput.value = '';
                this.showError(`La imagen original no debe superar los ${Math.round(this.maxSize / 1024 / 1024)} MB.`);
                return;
            }

            this.revokePendingSource();
            this.pendingSourceUrl = URL.createObjectURL(file);
            this.open(this.pendingSourceUrl);
        }

        open(sourceUrl) {
            if (!sourceUrl) {
                return;
            }

            if (typeof Cropper === 'undefined') {
                this.showError('No se pudo cargar el editor de imágenes. Recarga la página e intenta nuevamente.');
                return;
            }

            this.cropApplied = false;
            this.modal.open(this, sourceUrl, this.title);
        }

        createCropper(image) {
            this.destroyCropper();
            this.cropper = new Cropper(image, {
                aspectRatio: this.aspectRatio,
                viewMode: 1,
                dragMode: 'none',
                autoCropArea: 1,
                cropBoxMovable: true,
                cropBoxResizable: true,
                toggleDragModeOnDblclick: false,
                responsive: true,
                background: false,
                checkOrientation: true,
            });
        }

        applyCrop() {
            if (!this.cropper) {
                return;
            }

            const canvas = this.cropper.getCroppedCanvas({
                width: this.width,
                height: this.height,
                imageSmoothingEnabled: true,
                imageSmoothingQuality: 'high',
                fillColor: this.fillColor,
            });

            canvas.toBlob((blob) => {
                if (!blob) {
                    this.showError('No se pudo procesar la imagen. Intenta con otro archivo.');
                    return;
                }

                if (typeof DataTransfer === 'undefined') {
                    this.showError('Tu navegador no permite preparar la imagen recortada. Actualízalo e intenta nuevamente.');
                    return;
                }

                const croppedFile = new File([blob], this.fileName, {
                    type: 'image/webp',
                    lastModified: Date.now(),
                });
                const transfer = new DataTransfer();
                transfer.items.add(croppedFile);
                this.uploadInput.files = transfer.files;

                this.revokePreview();
                this.previewUrl = URL.createObjectURL(blob);

                if (this.pendingSourceUrl) {
                    this.revokeCommittedOriginal();
                    this.committedOriginalUrl = this.pendingSourceUrl;
                    this.committedOriginalIsObjectUrl = true;
                    this.pendingSourceUrl = '';
                }

                this.preview.src = this.previewUrl;
                this.previewWrapper?.classList.remove('d-none');
                this.cropApplied = true;
                this.clearError();
                this.modal.hide();
            }, 'image/webp', this.quality);
        }

        closeCropper() {
            this.destroyCropper();
            this.sourceInput.value = '';

            if (!this.cropApplied) {
                this.revokePendingSource();
            }
        }

        destroyCropper() {
            this.cropper?.destroy();
            this.cropper = null;
        }

        revokePendingSource() {
            if (!this.pendingSourceUrl) {
                return;
            }

            URL.revokeObjectURL(this.pendingSourceUrl);
            this.pendingSourceUrl = '';
        }

        revokePreview() {
            if (!this.previewUrl) {
                return;
            }

            URL.revokeObjectURL(this.previewUrl);
            this.previewUrl = '';
        }

        revokeCommittedOriginal() {
            if (!this.committedOriginalUrl || !this.committedOriginalIsObjectUrl) {
                return;
            }

            URL.revokeObjectURL(this.committedOriginalUrl);
            this.committedOriginalUrl = '';
            this.committedOriginalIsObjectUrl = false;
        }

        showError(message) {
            if (!this.error) {
                return;
            }

            this.error.textContent = message;
            this.error.classList.remove('d-none');
        }

        clearError() {
            if (!this.error) {
                return;
            }

            this.error.textContent = '';
            this.error.classList.add('d-none');
        }
    }

    function initialize(root = document) {
        const scope = root && typeof root.querySelectorAll === 'function'
            ? root
            : document;
        const fields = scope.querySelectorAll(SELECTOR);

        if (!fields.length) {
            return;
        }

        sharedModal ??= new GlobalImageCropperModal();
        fields.forEach((field) => {
            if (initializedFields.has(field)) {
                return;
            }

            new ImageCropperField(field, sharedModal);
            initializedFields.add(field);
        });
    }

    window.AppImageCropper = Object.freeze({
        init: initialize,
    });

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => initialize());
    } else {
        initialize();
    }
})();
