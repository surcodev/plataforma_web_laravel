@once
    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cropperjs@1.6.2/dist/cropper.min.css">
        <link rel="stylesheet" href="{{ asset('dist-common/css/image-cropper.css') }}">
    @endpush

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/cropperjs@1.6.2/dist/cropper.min.js"></script>
        <script src="{{ asset('dist-common/js/image-cropper.js') }}"></script>
    @endpush
@endonce
