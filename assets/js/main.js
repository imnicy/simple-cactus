
$(document).ready(function () {
    $("#menu > #nav").show();
    $("#menu-icon, #menu-icon-tablet").click(function () {
        if ($('#menu').css('visibility') == 'hidden') {
            $('#menu').css('visibility', 'visible');
            $('#menu-icon, #menu-icon-tablet').addClass('active');

            var topDistance = $("#menu > #nav").offset().top;

            if ($('#menu').css('visibility') != 'hidden' && topDistance < 50) {
                $("#menu > #nav").show();
            } else if ($('#menu').css('visibility') != 'hidden' && topDistance > 100) {
                $("#menu > #nav").hide();
            }
            return false;
        } else {
            $('#menu').css('visibility', 'hidden');
            $('#menu-icon, #menu-icon-tablet').removeClass('active');
            return false;
        }
    });

    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
    $("#header #nav ul .icon").click(function () {
        $("#header #nav ul").toggleClass("responsive");
    });
});
