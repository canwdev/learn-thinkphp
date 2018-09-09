// js-menu-toggle
$(document).ready(function () {
    $('.js-nav-toggle').click(
        function () {
            $(this).toggleClass('active');
            $('.header-nav').slideToggle(300);
        }
    )

})

// nav添加active
$(function () {
    var navId = $('#idNav').attr('data-nav');
    $('.header-nav>li').eq(navId).addClass('active');
})


// jquery 锚点平滑滚动
// $(function () {
//     var offset = 100;
//     $('a[href*=#],area[href*=#]').click(function () {
//         if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
//             var $target = $(this.hash);
//             $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
//             if ($target.length) {
//                 var targetOffset = $target.offset().top;
//                 $('html,body').animate({
//                         scrollTop: targetOffset - offset
//                     }, 500);
//                 return false;
//             }
//         }
//     });
// })

// 微信二维码弹出层
// $('.js-weixin').click(function () {
//     layer.open({
//         type: 1,
//         title: false,
//         closeBtn: 1,
//         shadeClose: true,
//         skin: 'jswx',
//         content: '<img style="width:300px" src="https://box.kancloud.cn/2016-07-08_577f8c8e89111.jpg">'
//     });
// })



$(document).ready(function () {
    // createCanvas()
})

function createCanvas() {
    $('.jumbotron').prepend('<div id="particles-js22"></div>');
    particlesJS('particles-js22', {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 5,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 3,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "repulse"
                    // "mode": "grab"
                    // "mode": "repulse"
                    // "mode": "bubble"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true,
        "config_demo": {
            "hide_card": false,
            "background_color": "#b61924",
            "background_image": "",
            "background_position": "50% 50%",
            "background_repeat": "no-repeat",
            "background_size": "cover"
        }
    });
}