$(document).ready(function () {
    // collapse and uncollapse sticky footer
    $('.show_sticky-footer').on('click', function () {
        $('.sticky-footer .content').toggleClass('active');
    });

    // partners slider at home page
    $('.partners .slider').slick({
        loop: true,
        arrows: true,
        dots: false,
        slidesToShow: 5,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }

            }]
    });
});