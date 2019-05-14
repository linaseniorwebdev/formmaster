
(function($) {
    "use strict";

    /*================================
    Preloader
    ==================================*/
    let $preloader = $('#preloader');
    if ($preloader.length) {
        $(window).on('load', function() {
            $preloader.fadeOut('slow', function() { $(this).remove(); });
        });
    }

    /*================================
    sidebar collapsing
    ==================================*/
    let $nav_btn = $('.nav-btn');
    if ($nav_btn.length) {
        $nav_btn.on('click', function() {
            $('.page-container').toggleClass('sbar_collapsed');
        });
    }

    /*================================
    Start Footer resizer
    ==================================*/
    var e = function() {
        var e = (window.innerHeight > 0 ? window.innerHeight : this.screen.height) - 5;
        (e -= 67) < 1 && (e = 1), e > 67 && $(".main-content").css("min-height", e + "px")
    };
    $(window).ready(e); $(window).on("resize", e);

    /*================================
    sidebar menu
    ==================================*/
    let $menu = $("#menu");
    if ($menu.length) {
        $menu.metisMenu();
    }

    /*================================
    slimscroll activation
    ==================================*/
    let $menu_inner = $('.menu-inner');
    if ($menu_inner.length) {
        $menu_inner.slimScroll({
            height: 'auto'
        });
    }

    let $nofity_list = $('.nofity-list');
    if ($nofity_list.length) {
        $nofity_list.slimScroll({
            height: '435px'
        });
    }

    let $timeline_area = $('.timeline-area');
    if ($timeline_area.length) {
        $timeline_area.slimScroll({
            height: '500px'
        });
    }

    let $recent_activity = $('.recent-activity');
    if ($recent_activity.length) {
        $recent_activity.slimScroll({
            height: 'calc(100vh - 114px)'
        });
    }

    let $settings_list = $('.settings-list');
    if ($settings_list.length) {
        $settings_list.slimScroll({
            height: 'calc(100vh - 158px)'
        });
    }

    /*================================
    stickey Header
    ==================================*/
    let $sticky_header = $('#sticky-header');
    $(window).on('scroll', function() {
        let scroll = $(window).scrollTop(),
            mainHeader = $sticky_header,
            mainHeaderHeight = mainHeader.innerHeight();

        // console.log(mainHeader.innerHeight());
        if (scroll > 1) {
            $sticky_header.addClass("sticky-menu");
        } else {
            $sticky_header.removeClass("sticky-menu");
        }
    });

    /*================================
    form bootstrap validation
    ==================================*/
    $('[data-toggle="popover"]').popover();

    /*------------- Start form Validation -------------*/
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        let forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        let validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);

    /*================================
    datatable active
    ==================================*/
    let $datatable = $('#dataTable');
    if ($datatable.length) {
        $datatable.DataTable({
            responsive: true
        });
    }

    let $datatable2 = $('#dataTable2');
    if ($datatable2.length) {
        $datatable2.DataTable({
            responsive: true
        });
    }

    let $datatable3 = $('#dataTable3');
    if ($datatable3.length) {
        $datatable3.DataTable({
            responsive: true
        });
    }


    /*================================
    Slicknav mobile menu
    ==================================*/
    $('ul#nav_menu').slicknav({
        prependTo: "#mobile_menu"
    });

    /*================================
    login form
    ==================================*/
    $('.form-gp input').on('focus', function() {
        $(this).parent('.form-gp').addClass('focused');
    });
    $('.form-gp input').on('focusout', function() {
        if ($(this).val().length === 0) {
            $(this).parent('.form-gp').removeClass('focused');
        }
    });

    /*================================
    slider-area background setting
    ==================================*/
    $('.settings-btn, .offset-close').on('click', function() {
        $('.offset-area').toggleClass('show_hide');
        $('.settings-btn').toggleClass('active');
    });

    /*================================
    Owl Carousel
    ==================================*/
    function slider_area() {
        let $testimonial_carousel = $('.testimonial-carousel');
        if ($testimonial_carousel.length) {
            let owl = $testimonial_carousel.owlCarousel({
                margin: 50,
                loop: true,
                autoplay: false,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    450: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1000: {
                        items: 2
                    },
                    1360: {
                        items: 1
                    },
                    1600: {
                        items: 2
                    }
                }
            });
        }
    }
    slider_area();

    /*================================
    Fullscreen Page
    ==================================*/

    if ($('#full-view').length) {

        var requestFullscreen = function(ele) {
            if (ele.requestFullscreen) {
                ele.requestFullscreen();
            } else if (ele.webkitRequestFullscreen) {
                ele.webkitRequestFullscreen();
            } else if (ele.mozRequestFullScreen) {
                ele.mozRequestFullScreen();
            } else if (ele.msRequestFullscreen) {
                ele.msRequestFullscreen();
            } else {
                console.log('Fullscreen API is not supported.');
            }
        };

        var exitFullscreen = function() {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            } else {
                console.log('Fullscreen API is not supported.');
            }
        };

        var fsDocButton = document.getElementById('full-view');
        var fsExitDocButton = document.getElementById('full-view-exit');

        fsDocButton.addEventListener('click', function(e) {
            e.preventDefault();
            requestFullscreen(document.documentElement);
            $('body').addClass('expanded');
        });

        fsExitDocButton.addEventListener('click', function(e) {
            e.preventDefault();
            exitFullscreen();
            $('body').removeClass('expanded');
        });
    }

})(jQuery);