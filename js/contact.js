/**
 * Created by LK on 02.06.2017.
 */
$(document).ready(function () {

    function close_accordion_section() {
        $(' .js-show-menu').removeClass('active');
        $('.nav__list').slideUp(300).removeClass('open');
    }


    $('.js-show-menu').click(function (e) {


        if ($(e.target).is('.active')) {
            close_accordion_section();
        } else {
            close_accordion_section();

            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $(".nav__list").slideDown(300).addClass('open');
        }

        e.preventDefault();

    });

});
$( window ).resize(function() {

    $(".nav__list").css("display", "flex");
});