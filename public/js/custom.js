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
    }), jQuery(".tp-banner").length && jQuery(".tp-banner").revolution({
        delay: 5e3,
        startwidth: 1170,
        startheight: 700,
        hideThumbs: 10,
        fullWidth: "off",
        fullScreen: "off"
    }), jQuery(".tp-banner-2").length && jQuery(".tp-banner-2").revolution({
        delay: 5e3,
        startwidth: 1170,
        startheight: 500,
        hideThumbs: 10,
        fullWidth: "off",
        fullScreen: "off"
    }), jQuery(".remove-recipe-col").on("click", function() {
        return jQuery(this).parent().remove(), !1
    }), jQuery(function() {
        var e = jQuery("#check-also-box");
        if (e.length > 0) {
            var r = jQuery("#the-post").outerHeight(),
                o = !1;
            jQuery(window).scroll(function() {
                o || (jQuery(document).scrollTop() > r ? e.addClass("show-check-also") : e.removeClass("show-check-also"))
            })
        }
        jQuery("#check-also-close").click(function() {
            return e.removeClass("show-check-also"), o = !0, !1
        })
    });
    var r = jQuery("#the-post");
    r.length > 0 && r.imagesLoaded(function() {
        var e = r.height(),
            o = jQuery(window).height();
        jQuery(window).scroll(function() {
            var i = 0,
                s = r.offset().top,
                t = jQuery(window).scrollTop();
            t > s && (i = 100 * (t - s) / (e - o)), jQuery("#reading-position-indicator").css("width", i + "%")
        })
    }), jQuery("head").append("<script src='/js/switcher.min.js'><\/script>")
}(jQuery);