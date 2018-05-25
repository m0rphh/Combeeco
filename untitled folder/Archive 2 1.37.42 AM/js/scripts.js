$(document).ready(function () {


var stickyNavTop = $('.stick').offset().top;
var stickyOriginal = $('.stick');

var stickyClone = stickyOriginal.clone().addClass('sticky');


// our function that decides weather the navigation bar should have "fixed" css position or not.
var stickyNav = function () {
    var scrollTop = $(window).scrollTop(); // our current vertical position from the top

    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
    // otherwise change it back to relative
    if (scrollTop > stickyNavTop) {
        $('.top-menu').addClass('fixed');
        $('.main-navigation').addClass('onFixed');
        $('.language-menu').addClass('onFixed');
        $('.site-logo').addClass('onFixed');
        $('#logo-white').attr('src', 'img/comeeco_logo.svg');
        $('#menu-opener').addClass('onFixed');
        $('#menu-opener').css({'color': '#333'});
        $("#menu-opener").attr('src', 'img/menu_black.svg');
        $("#menu-opener").css({ 'top': '25px' });
        if($(window).width() < 545) {
            $("#menu-opener").css({'top': '20px'});
        }
    } else {
        $('.top-menu').removeClass('fixed');
        $('.main-navigation').removeClass('onFixed');
        $('.language-menu').removeClass('onFixed');
        $('#menu-opener').removeClass('onFixed');
        $('.site-logo').removeClass('onFixed');
        $('#logo-white').attr('src', 'img/logo-white.svg');
        $('#menu-opener').css({ 'color': '#fff' });
        $("#menu-opener").attr('src', 'img/menu.svg');
        // if ($(window).width() > 545) {
        //     $("#menu-opener").css({ 'top': '50px' });
        // }
        $("#menu-opener").css({ 'top': '30px' });
    }

};

stickyNav();
// and run it again every time you scroll
$(window).scroll(function () {
    stickyNav();
});


// SIDE MENU

    // $('#menu-holder').remove();
    if($(window).width() < 991) {
        $('#menu-holder').remove();
    }
    if($(window).width() > 991) {
        $('#menu-holder2').remove();
    }


$('#menu').multilevelpushmenu({
    menuWidth: 340,
    mode: 'cover',
    collapsed: true,
    direction: 'rtl',
    preventItemClick: false,
    preventGroupItemClick: false,
});

    $("#menu-opener").click(function () {

        // alert("Second handler for .toggle() called.");
        $('#menu').multilevelpushmenu('expand');
        $(this).hide();
        $('#closed-menu').show();
    });
    $("#closed-menu").click(function () {
        $('#menu').multilevelpushmenu('collapse');
        $(this).hide();
        $('#menu-opener').show();
    });






    $('#first-form').click(function () {
        $('#first-form-child').slideToggle();
        // $('.first-form-child').hide();
        $(this).find('i').toggleClass('fa-minus');
        $('#input-name').focus();
    });

    $('#second-form').click(function () {
        $('#second-form-child').slideToggle();
        $(this).find('i').toggleClass('fa-minus');
        $('#input-name-2').focus();

    });


    $('.icon-facebook').hover(function () {
        $(this).attr('src', 'img/footer-facebook-icon-hover.svg');
    }, function () {
        $(this).attr('src', 'img/footer-facebook-icon.svg');
     });
    $('.icon-twitter').hover(function () {
        $(this).attr('src', 'img/footer-twitter-icon-hover.svg');
    }, function () {
        $(this).attr('src', 'img/footer-twitter-icon.svg');
     });
    $('.icon-xnk').hover(function () {
        $(this).attr('src', 'img/footer-xnk-icon-hover.svg');
    }, function () {
        $(this).attr('src', 'img/footer-xnk-icon.svg');
     });
    $('.icon-linkedin').hover(function () {
        $(this).attr('src', 'img/footer-linkedin-icon-hover.svg');
    }, function () {
        $(this).attr('src', 'img/footer-linkedin-icon.svg');
     });


// END
});