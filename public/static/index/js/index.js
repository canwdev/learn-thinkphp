$(document).ready(function () {
    $(".news-owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: false,
        nav: true,
        navText: ['<i class="icon iconfont icon-arrowleft"></i>',
            '<i class="icon iconfont icon-arrowright"></i>'
        ]
        // autoplayTimeout: 6000,
        // animateIn: 'fadeIn',
        // animateOut: 'fadeOut',
    });

    $(".partner-owl-carousel").owlCarousel({
        items: 5,
        loop: true,
        autoplay: false,
        nav: true,
        navText: ['<i class="icon iconfont icon-arrowleft"></i>',
            '<i class="icon iconfont icon-arrowright"></i>'
        ]
    });
});
