(function ($) {
    
    "use strict";

    $("form").attr("autocomplete", "off");

    $(".scroll-top").hide();
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 300) {
            $(".scroll-top").fadeIn();
        } else {
            $(".scroll-top").fadeOut();
        }
    });
    $(".scroll-top").on("click", function () {
        $("html, body").animate(
            {
                scrollTop: 0,
            },
            700
        );
    });

    new WOW().init();

    $(".video-button").magnificPopup({
        type: "iframe",
        gallery: {
            enabled: true,
        },
    });

    const propertyGalleryItems = $(".property-photo-gallery .magnific");

    propertyGalleryItems.magnificPopup({
        type: "image",
        gallery: {
            enabled: true,
            navigateByImgClick: false,
        },
        callbacks: {
            open: function () {
                $(document)
                    .off("click.propertyGalleryZoom")
                    .on("click.propertyGalleryZoom", ".mfp-img", function (event) {
                        event.preventDefault();
                        event.stopPropagation();

                        const image = $(this);
                        const imageBounds = this.getBoundingClientRect();
                        const originX = ((event.clientX - imageBounds.left) / imageBounds.width) * 100;
                        const originY = ((event.clientY - imageBounds.top) / imageBounds.height) * 100;

                        if (!image.hasClass("is-zoomed")) {
                            image.css("transform-origin", `${originX}% ${originY}%`);
                        }

                        image.toggleClass("is-zoomed");
                    });
            },
            change: function () {
                $(".mfp-img").removeClass("is-zoomed").css("transform-origin", "");
            },
            close: function () {
                $(document).off("click.propertyGalleryZoom");
            },
        },
    });

    $(".property-gallery-trigger").on("click", function (event) {
        event.preventDefault();
        propertyGalleryItems.first().trigger("click");
    });
    
    jQuery(".mean-menu").meanmenu({
        meanScreenWidth: "991",
    });

    $(document).ready(function () {
        $('#datatable').DataTable();
    });

    tinymce.init({
        selector: '.editor',
        height: 300,
        promotion: false,
        branding: false,
    });

    $('.select2').select2();

    $(".property-carousel").each(function () {
        const itemCount = $(this).children().length;

        $(this).owlCarousel({
            loop: itemCount > 3,
            autoplay: itemCount > 1,
            autoplayHoverPause: true,
            autoplayTimeout: 5000,
            smartSpeed: 700,
            margin: 24,
            nav: itemCount > 1,
            dots: false,
            navText: [
                "<i class='fa fa-chevron-left'></i>",
                "<i class='fa fa-chevron-right'></i>",
            ],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 3
                },
            },
        });
    });

    $(".testimonial-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        autoplaySpeed: 1500,
        smartSpeed: 1500,
        margin: 30,
        nav: false,
        animateIn: "fadeIn",
        animateOut: "fadeOut",
        navText: [
            "<i class='fa fa-caret-left'></i>",
            "<i class='fa fa-caret-right'></i>",
        ],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1,
            },
            992: {
                items: 1,
            },
        },
    });

})(jQuery);
