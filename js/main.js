const desktop = window.matchMedia("(min-width: 950px)");
//reusable menu funtion


// not entire certain how I want to handle image / word swap for mobile.
jQuery(document).ready(function ($) {
   //make top window for banner shrink on scroll
    if (desktop.matches){
        $(window).scroll(function () {
            let scrollTop = $(window).scrollTop();
            let titleHeight = $('.banner-title').css("height");
            // console.log(scrollTop);
            if (scrollTop > 150) {
                $('.banner-title').animate({ height: '20px' }, 1000);
                $('.service-banner-text').css({display: 'none'});
                 } 
        })
    }
    $('.services-card').click(function () {
        if (!desktop.matches) {
            const height = $(this).css('height');
            if (height == '75px') {
                $(this).animate({ height: '550px' }, 500);
                $(this).removeClass("services-card-not-selected"); //only way to effectivly change opacity
                $(this).addClass("services-card-selected");
            } else {
                $(this).animate({ height: '75px' }, 500);
                $(this).removeClass("services-card-selected");
                $(this).addClass("services-card-not-selected");
            }
        } else {
            const height = $(this).css('height');
            if (height == '100px') {
                $(this).animate({ height: '680px' }, 500);
                $(this).removeClass("services-card-not-selected");
                $(this).addClass("services-card-selected");
            } else {
                $(this).animate({ height: '100px' }, 500);
                $(this).removeClass("services-card-selected");
                $(this).addClass("services-card-not-selected");
            }
        }

    })
    $(".service-banner-text").fadeIn(2000);
    $(".page-banner-text").fadeIn(2000);
    $(".hamburger").click(function() {
      burger();
    })
    
})
function burger() {
    jQuery(".hamburger").toggleClass("is-active");
    const opacity = jQuery("#menu-open").css('opacity');
    if (opacity == '0') {
        jQuery('#menu-open').animate({ opacity: '1' }, 200);
        jQuery('#menu-open').css({ pointerEvents: 'auto' });
    } else {
        jQuery('#menu-open').animate({ opacity: '' }, 200);
        jQuery('#menu-open').css({ pointerEvents: 'none' });
    }
}