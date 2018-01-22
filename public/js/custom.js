! function(e) {
    "use strict";
    jQuery(window).load(function() {
        jQuery("body").addClass("loaded")
    }), jQuery("html").niceScroll({
        scrollspeed: 60,
        mousescrollstep: 38,
        cursorwidth: 6,
        cursorborder: 0,
        cursorcolor: "#6c6c6c",
        autohidemode: !1,
        zindex: 9999999,
        horizrailenabled: !1,
        cursorborderradius: 0
    }), jQuery("a.open_close").on("click", function() {
        jQuery("#main-menu").toggleClass("show"), jQuery(".layer").toggleClass("layer-is-visible")
    }), jQuery("a.show-submenu").on("click", function() {
        jQuery(this).next().toggleClass("show_normal")
    }), jQuery("a.show-submenu-mega").on("click", function() {
        jQuery(this).next().toggleClass("show_mega")
    }), jQuery(window).width() <= 600 && jQuery("a.open_close").on("click", function() {
        jQuery(".np-toggle-switch").removeClass("active")
    }), jQuery(window).on("scroll", function() {
        jQuery(this).scrollTop() > 100 ? jQuery(".go-up").css("right", "20px") : jQuery(".go-up").css("right", "-60px")
    }), jQuery(".go-up").on("click", function() {
        return jQuery("html,body").animate({
            scrollTop: 0
        }, 500), !1
    }), jQuery(".remove-recipe-col").on("click", function() {
        return jQuery(this).parent().remove(), !1
    });

}(jQuery);