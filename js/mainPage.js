/**
 * Created by LK on 02.06.2017.
 */
$(document).ready(function () {

    function closeAccordionSection() {
        $(' .js-show-menu').removeClass('active');
        $('.nav__list').slideUp(300).removeClass('open');
    }


    $('.js-show-menu').click(function (e) {


        if ($(e.target).is('.active')) {
            closeAccordionSection();
        } else {
            closeAccordionSection();

            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $(".nav__list").slideDown(300).addClass('open');
        }

        e.preventDefault();

    });
    $( window ).resize(function() {

        $(".nav__list").css("display", "flex");
    });
});

