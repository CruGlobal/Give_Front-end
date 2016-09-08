$(document).ready(function () {
    $("#mobile-navigation").click(function (e) {
        var topLevelNavIsVisible = true;
        var target = e.target;
        var classes = $(target).attr('class');
        var toggleClass = "visible-menu-block";

        /*
        traverse up and down the menu:
        remove visible-menu-block from current menu and
        clone target menu and append to root of mobile navigation structure
        */
        if ((classes !== undefined) && (classes.indexOf("has-children") !== -1)) {
            topLevelNavIsVisible = $("ul:not(:first-of-type)").length === 0;
            var targetMenuList = $(target).children("ul");
            var currentMenuList = $("." + toggleClass);

            topLevelNavIsVisible ? currentMenuList.toggleClass(toggleClass) : currentMenuList.remove();
            $("#mobile-navigation").append(targetMenuList.clone().toggleClass(toggleClass));
        } else if ((classes !== undefined) && (classes.indexOf("back") !== -1)) {
            classes = classes.replace("back", "").trim();

            targetMenuList = $("ul." + classes);
            currentMenuList = $("ul." + toggleClass);

            currentMenuList.remove();
            $("#mobile-navigation").append(targetMenuList.clone().toggleClass(toggleClass));
        } else {
            target.click();
        }
    });
});