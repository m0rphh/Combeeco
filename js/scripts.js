$(document).ready(function () {
    $('#menu').show();
    $('#kontaktLink').click(function (e) {
        e.preventDefault();
    });
    $(".login").click(function (e) {
        e.preventDefault();
        $('html,body').animate({
                scrollTop: $(".part-4").offset().top - 100
            },
            'slow');
    });
    // SIDE MENU

    // $('#menu-holder').remove();
    if ($(window).width() < 991) {
        $('#menu-holder').remove();

    }
    if ($(window).width() > 991) {
        $('#menu-holder2').remove();
    }
    // $('#kontaktLink').click(function () {
    //     $('#menu').multilevelpushmenu('expand', 1);
    // });


    $('#menu').multilevelpushmenu({
        menuWidth: 340,
        mode: 'cover',
        collapsed: true,
        direction: 'rtl',
        fullCollapse: true,
        onItemClick: function () {
            var e = arguments[0];
            console.log('you clicked on item');
            if ($(e.target).prop('tagName').toLowerCase() == 'input') {
                $(e.target).focus();
                $(e.target).val('focused');
                $(e.target).unbind('blur');
                $(e.target).blur(function () {
                    $(e.target).val('blured');
                });
            }
        },
        onMenuSwipe: function () {
            var e = arguments[0];
            if ($(e.target).prop('tagName').toLowerCase() == 'input') return false;
        },
        preventGroupItemClick: false,
        preventItemClick: false,

    });
    //HIDE KEYBOARD ON MOBILE
    var hideKeyboard = function () {
        document.activeElement.blur();
        $("input").blur();
    };
    if ($(window).width() < 991) {
        $('#first-form').click(function () {
            $(this).find('i').toggleClass('fa-minus');
            $('.form-holder').toggleClass('first-form-up');
            $('#first-form-child').toggle('slow');
            $('#input-name').focus();
            // $('.hide-text').hide('slow');
            if ($('#first-form-child').is(':hidden')) {
                hideKeyboard();
                $('.form-holder').removeClass('.first-form-up');
            } else {
                // $('.hide-text').toggle('slow');
            }
            if ($('#second-form-child').is(':hidden')) {} else {
                $('#second-form-child').toggle('hide');
                $('#second-form').find('i').toggleClass('fa-minus');
            }
        });
        $('#second-form').click(function () {
            $(this).find('i').toggleClass('fa-minus');
            $('#second-form-child').toggle('slow');
            $('.form-holder').toggleClass('second-form-up');
            $('#input-name-2').focus();
            // $('.hide-text').toggle('slow');
            if ($('#second-form-child').is(':hidden')) {
                $('.form-holder').removeClass('.second-form-up');
            } else {
                $('#first-form').find('i').toggleClass('fa-minus');
            }
        });

    }
    if ($(window).width() > 991) {
        $('#first-form').click(function () {
            $(this).find('i').toggleClass('fa-minus');
            $('#first-form-child').toggle('slow');
            $('#input-name').focus();
            // $('.hide-text').hide('slow');
            if ($('#first-form-child').is(':hidden')) {
                hideKeyboard();
            } else {
                // $('.hide-text').toggle('slow');
            }
            if ($('#second-form-child').is(':hidden')) {} else {
                $('#second-form-child').toggle('hide');
                $('#second-form').find('i').toggleClass('fa-minus');
            }
        });
        $('#second-form').click(function () {
            $(this).find('i').toggleClass('fa-minus');
            $('#second-form-child').toggle('slow');
            $('#input-name-2').focus();
            // $('.hide-text').toggle('slow');
            if ($('#first-form-child').is(':hidden')) {

            } else {
                $('#first-form-child').toggle('hide');
                $('#first-form').find('i').toggleClass('fa-minus');
            }
        });
    }



    $("#menu-opener").click(function () {
        $('#menu').multilevelpushmenu('expand');
    });
    $("#closed-menu").click(function () {
        $('#menu').multilevelpushmenu('collapse');
    });

    $('#first-form-child').find('input').click(function () {
        $(this).focus();
    });
    $('#first-form-child').find('textarea').click(function () {
        $(this).focus();
    });
    $('#second-form-child').find('input').click(function () {
        $(this).focus();
    });

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
            $('#menu-opener').css({
                'color': '#333'
            });
            $("#menu-opener").attr('src', 'img/menu_black.svg');
            $("#menu-opener").css({
                'top': '20px'
            });
            if ($(window).width() < 545) {
                $("#menu-opener").css({
                    'top': '20px'
                });
            }
        } else {
            $('.top-menu').removeClass('fixed');
            $('.main-navigation').removeClass('onFixed');
            $('.language-menu').removeClass('onFixed');
            $('#menu-opener').removeClass('onFixed');
            $('.site-logo').removeClass('onFixed');
            $('#logo-white').attr('src', 'img/logo-white.svg');
            $('#menu-opener').css({
                'color': '#fff'
            });
            $("#menu-opener").attr('src', 'img/menu.svg');
            // if ($(window).width() > 545) {
            //     $("#menu-opener").css({ 'top': '50px' });
            // }
            $("#menu-opener").css({
                'top': '20px'
            });
        }

    };

    stickyNav();
    // and run it again every time you scroll
    $(window).scroll(function () {
        stickyNav();
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