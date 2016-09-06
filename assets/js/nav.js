$(document).ready(function () {
    $(".back").click(function () {
        var parent = $(this).parent();
        var previousParent = parent.parent();
        var showPreviousMenu = previousParent.children("input");

        showPreviousMenu.click();

        console.log(this, 'parent');
        console.log(previousParent, 'previous parent');
    })
});