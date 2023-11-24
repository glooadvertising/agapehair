AOS.init();


jQuery(document).ready(function($) {

    if ( $('body').hasClass('home') ) {
        // && $(window).width() < 736

        $('.menu-main-menu-container ul').css('bottom', '4rem');

        $(window).scroll(function() {    
            var scroll = $(window).scrollTop();
        
            if (scroll >= 500) {
                $(".menu-main-menu-container ul").css("bottom", "unset");
            } else {
                $(".menu-main-menu-container ul").css("bottom", "4rem");
            }
    
        });
    
    }
    
    $('.show-form').click(function() {
        $('#contact').css('display', 'flex');
    });

    $('.hamburger-wrapper').click(function() {
        $('.hamburger').toggleClass('hamburger-clicked');
        $('.menu-wrapper .menu-main-menu-container').toggleClass('menu-visible');
    });

    $('.show-form').click(function() {
        $('.hamburger').toggleClass('hamburger-clicked');
        $('.menu-wrapper .menu-main-menu-container').toggleClass('menu-visible');
    });



});

