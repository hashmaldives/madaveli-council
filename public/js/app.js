
/*
        HEADER SETTINGS
*/
$(document).ready(function() {
    if ($('.header').hasClass('header-fixed')) {
        $('.mainContainer').addClass("has-fixed-header");
        $('.page-container').addClass("has-fixed-header");
    }
    if ($('.header').hasClass('header-stylefour')) {
        $('.mainContainer').addClass("has-topbar");
        $('.page-container').addClass("has-topbar");
    }

    if ($('.header').hasClass('shrink-on-scroll')) {
        $('.header').addClass("shrinkable");
    }
    if ($('.header').hasClass('shrinkable')) {

        $(window).scroll(function() {
            if ($(window).scrollTop() >= 200) {
                $('.header').addClass('scrolled');
                $('.offCanvasToggler').addClass('scrolled');
                $(".navigation-container").addClass("scrolled");
                $(".navigation-container").addClass("is-sticky-top");
                $(".navbar-logo-container").addClass("visible");
            } else {
                $('.header').removeClass('scrolled');
                $('.offCanvasToggler').removeClass('scrolled');
                $(".navigation-container").removeClass("scrolled");
                $(".navigation-container").removeClass("is-sticky-top");
                $(".navbar-logo-container").removeClass("visible");
            }
        });

    }
    // $(window).scroll(function() {
    //     if ($(window).scrollTop() >= 135) {
    //         $('.offCanvasToggler').addClass('scrolled');
    //     } else {
    //         $('.offCanvasToggler').removeClass('scrolled');
    //     }
    // });
});


$(document).ready(function() {

    // var distance = $('.nav').offset().top;

    // $(window).scroll(function() {
    //     if ( $(this).scrollTop() >= distance ) {
    //         console.log('is in top');
    //     } else {
    //         console.log('is not in top');
    //     }
    // });

    // var distance = $('.navigation-container').offset().top,
    // $window = $(window);

    // $window.scroll(function() {
    //     if ( $window.scrollTop() >= distance ) {
    //         $(".navigation-container").addClass("is-sticky-top");
    //         $(".navbar-logo-container").addClass("visible");
    //         $(".navigation-container").addClass("scrolled");
    //     } else {
    //         $(".navigation-container").removeClass("is-sticky-top");
    //         $(".navbar-logo-container").removeClass("visible");
    //         $(".navigation-container").removeClass("scrolled");
    //     }
    // });

    // $(".slideSearchTrigger").on("click", function() {
    //     $(".slide-search-form").toggleClass("active");
    //     //$(".megaSearchTrigger").parent().toggleClass("dropdown show");
    //     $(".slide-search-input").select();
    // });

    $(".megaSearchTrigger").on("click", function() {
        $(".mega-search").toggleClass("active");
        $(".megaSearchTrigger").parent().toggleClass("dropdown show");
        $(".mega-search-input").select();
    });

});


/*
        / HEADER SETTINGS
*/



/*
        OFF CANVAS MENU
*/
$(document).ready(function() {
    // var offCanvasHeight = function() {
    //     $(".offCanvas").css({
    //         "max-height": document.documentElement.clientHeight
    //     });
    // }

    // offCanvasHeight();

    // $(window).resize(function() {
    //     offCanvasHeight();
    // });

    // $(".offCanvasToggler, .overlay").on("click", function() {
    //     $(".offcanvas-wrapper").toggleClass("active");

    // });

    $(".mobileSearchToggler").on("click", function() {
        $(".offcanvas-wrapper").toggleClass("active");
        $(".offcanvas-search-form").select();
    });

    $(".megaSearchTrigger").on("click", function() {
        $(".mega-search").toggleClass("active");
        $(".megaSearchTrigger").parent().toggleClass("dropdown show");
        $(".mega-search-input").select();
    });

});



// $(document).ready(function() {

//     function toggleSidebar() {
//       $(".navbar-toggle-button").toggleClass("active");
//       $(".offCanvasToggler").toggleClass("active");
//       $("body").toggleClass("offcanvas-active");
//       $(".main-content").toggleClass("active");
//       $(".offCanvas").toggleClass("active");
//       $(".nav-item").toggleClass("visible");
//     }

//     $(".offCanvasToggler, .overlay").on("click tap", function() {
//       toggleSidebar();
//     });

//     $(document).keyup(function(e) {
//       if (e.keyCode === 27) {
//         toggleSidebar();
//       }
//     });

//   });

$(document).ready(function() {
    var offCanvasHeight = function() {
        $(".offCanvas").css({
            "max-height": document.documentElement.clientHeight
        });
    }

    offCanvasHeight();

    $(window).resize(function() {
        offCanvasHeight();
    });

    $(".offCanvasToggler, .overlay").on("click", function() {
        $(".offcanvas-wrapper").toggleClass("active");

    });

    $(".mobileSearchToggler").on("click", function() {
        $(".offcanvas-wrapper").toggleClass("active");
        $(".offcanvas-search-form").select();
    });

    $(".megaSearchTrigger").on("click", function() {
        $(".mega-search").toggleClass("active");
        $(".megaSearchTrigger").parent().toggleClass("dropdown show");
        $(".mega-search-input").select();
    });

});

/*
    / END OFF CANVAS MENU
*/


/*
    Multi Level dropdowns
*/
$(document).ready(function() {

    $(function() {
        // ------------------------------------------------------- //
        // Multi Level dropdowns
        // ------------------------------------------------------ //
        $("ul.dropdown-menu .dropdown-toggle").on("click", function(event) {
            event.preventDefault();
            event.stopPropagation();

            $(this).siblings().toggleClass("show");

            $(this).parent().toggleClass("open");

            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
            });

        });
    });

    /*-------------------------------------------------------
                ENABLING DROPDOWN INSIDE A MEGAMENU
    ------------------------------------------------------ */
    $('.dropdown-menu .dropdown-submenu a').click(function(e) {
        $(this).parent('.dropdown-submenu').toggleClass('open');
        e.stopPropagation();
    });

});

/*
    / Multi Level dropdowns
*/



/*
    Multi Level dropdowns
*/
$(document).ready(function() {
    if ($('.top-ribbon').hasClass('fixed')) {

        $(window).scroll(function() {
            if ($(window).scrollTop() >= 200) {
                $('.top-ribbon').addClass('scrolled');
                $('.header').addClass('scrolled');
            } else {
                $('.top-ribbon').removeClass('scrolled');
                $('.header').removeClass('scrolled');
            }
        });

    }

});
/*
    Multi Level dropdowns
*/


$(document).ready(function() {


    (function($) {

        $.fn.visible = function(partial) {

            var $t = $(this),
                $w = $(window),
                viewTop = $w.scrollTop(),
                viewBottom = viewTop + $w.height(),
                _top = $t.offset().top,
                _bottom = _top + $t.height(),
                compareTop = partial === true ? _bottom : _top,
                compareBottom = partial === true ? _top : _bottom;

            return ((compareBottom <= viewBottom - 100) && (compareTop >= viewTop));

        };

    })($);

    var win = $(window);

    var allMods = $(".animateSlideInUp");

    allMods.each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("already-visible");
        }
    });

    win.scroll(function(event) {

        allMods.each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("slideInUp");
            }
        });

    });

    var slideInRight = $(".animateSlideInRight");

    slideInRight.each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("already-visible");
        }
    });

    win.scroll(function(event) {

        slideInRight.each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("slideInRight");
            }
        });

    });

    var slideInLeft = $(".animateSlideInLeft");

    slideInLeft.each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            el.addClass("already-visible");
        }
    });

    win.scroll(function(event) {

        slideInLeft.each(function(i, el) {
            var el = $(el);
            if (el.visible(true)) {
                el.addClass("slideInLeft");
            }
        });

    });

});

/*
    DROPDOWN RIGHT TRIGGER
*/
$(document).ready(function() {

    if ($(".menu-item").hasClass("dropdown-right")) {
        $(".dropdown-right").children(".dropdown-menu").addClass("dropdown-menu-right");
    }

});

/*
   / DROPDOWN RIGHT TRIGGER
*/

$(document).ready(function() {

    

});



