$(document).ready(function () {
    $("#mobile-navigation").click(function (e) {
        var target = e.target;
        var classes = $(target).attr('class');
        var toggleClass = "visible";
        var root = $("#mobile-navigation");
        var mainMenu = $(".main-menu");
        var currentMenu = $(".visible");

        /*
        traverse up and down the menu:
        remove visible-menu-block from current menu and
        clone target menu and append to root of mobile navigation structure
        */
        if ((classes !== undefined) && (classes.indexOf("has-children") !== -1)) {
            var targetMenu = $(target).children("ul");

            if (isMainMenu()) {
                $(currentMenu).toggleClass(toggleClass);
            } else {
                $(currentMenu).remove();
            }
            $(root).append(targetMenu.clone().toggleClass(toggleClass));

        } else if ((classes !== undefined) && (classes.indexOf("menu-icon-navigation") !== -1)) {
            var targetClass = $(".visible").attr('class').replace("visible","").trim();
            var targetMenu = $(".main-menu").find("ul." + targetClass).parent().parent();

            console.log(targetClass);
            console.log(targetMenu);

            if (targetMenu.attr('class') === "main-menu") {
                $(currentMenu).remove();
                $(mainMenu).toggleClass(toggleClass)
            } else {
                $(currentMenu).remove();
                $(root).append(targetMenu.clone().toggleClass(toggleClass));
            }

        } else {
            target.click();
        }

        function isMainMenu () {
            return ($(".main-menu.visible").length) ? true : false
        }

        function menuIconBackNavigation () {
            $(".menu-icon-navigation").attr("src", "/assets/img/mobile-menu-back-icon.png");
        }

        function menuIconHamburger () {
            $(".menu-icon-navigation").attr("src", "/assets/img/mobile-menu-back-icon.png");
        }

        $(function toggleIconBackNavigation () {
            if (!isMainMenu()) menuIconHamburger()
        });
    });
});