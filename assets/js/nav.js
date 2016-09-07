$(document).ready(function () {
    $("#mobile-navigation").click(function (e) {
        var target = e.target;
        var classes = $(target).attr('class');
        var toggleClass = "visible-menu-block";

        // traverse up and down the menu
        if ((classes !== undefined) && (classes.indexOf("has-children") !== -1)) {
            var targetMenuList = $(target).children("ul");
            var currentMenuList = $("." + toggleClass);

            currentMenuList.toggleClass(toggleClass);
            $("#mobile-navigation").append(targetMenuList.clone().toggleClass(toggleClass));
        } else if ((classes !== undefined) && (classes.indexOf("back") !== -1)) {
            classes = classes.replace("back", "").trim();

            targetMenuList = $("ul." + classes);
            currentMenuList = $("ul." + toggleClass);

            currentMenuList.remove();
            targetMenuList.toggleClass(toggleClass)
        } else {
            target.click();
        }
    });
});