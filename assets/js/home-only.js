jQuery(document).ready(function($) {

    $('.menu-main-menu-container ul').css('bottom', '4rem');

    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 500) {
            $(".menu-main-menu-container ul").css("bottom", "unset");
        } else {
            $(".menu-main-menu-container ul").css("bottom", "4rem");
        }

    });


});