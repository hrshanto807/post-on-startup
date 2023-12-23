(function ($) {
    $('#icon').click(function () {
        $('.pos-primary-menu ul,.pos-header-button').slideToggle();

    });
    $(window).resize(function () {
        let windowSize = $(window).width();
        if (windowSize > 600) {
            $('.pos-primary-menu ul,.pos-header-button').removeAttr('style');
        }
    });
    $('.pos-all-single-atuhors-area').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1,
                margin: 10,

            },
            600: {
                items: 1,
                margin: 20,

            },
            1000: {
                items: 4,
            }
        },
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
    });
    $('.pos-testimonial-content-area').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        items: 1,
        navText: ['<i class="fa-solid fa-arrow-left-long"></i>', '<i class="fa-solid fa-arrow-right-long"></i>'],
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
    });
    // ------------------------------------
    $('#icon-2').click(function () {
        $('.pos-secondary-menu ul').slideToggle();

    });
    $(window).resize(function () {
        let windowSize = $(window).width();
        if (windowSize > 600) {
            $('.pos-secondary-menu ul').removeAttr('style');
        }
    });

    $('.all-brand-single-img').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 4,
                margin: 10,

            },
            600: {
                items: 5,
                margin: 20,

            },
            1000: {
                items: 5,
                margin: 90,
            }
        },

    });
    $(".menu-toggle").on("click", function () {
        $(this).toggleClass("is-active");
    });
    // acrol top to bototm
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });


})(jQuery);