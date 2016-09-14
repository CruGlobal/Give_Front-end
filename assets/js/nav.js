$(document).ready(function () {
    var activeClass = 'mobile-menu-active';
    var slideTo = function(element){
        var mainMenu = $(".main-menu");

        element.children('ul').show();
        element.siblings().children('ul').hide();
        $('.' + activeClass).removeClass(activeClass);

        var level = element.parents('ul').length;
        mainMenu.css('left', (level * -100) + '%');
        element.addClass(activeClass);

        $(".menu-icon-navigation").attr('src', (level === 0) ? '/assets/img/mobile-menu-hamburger-icon.png' : '/assets/img/mobile-menu-back-icon.png');
    };

    $('.main-menu').click(function (e) {
        var target = $(e.target);

        if (target.hasClass('has-children')) {
            slideTo(target);
        }
    });

    $('.menu-icon-navigation').click(function (e) {
        var activeRoot = $('.' + activeClass);
        if(!activeRoot.length){ return; }

        slideTo(activeRoot.closest('ul').parent());
    });
});