/**
 * Created by LK on 02.06.2017.
 */
$(document).ready(function () {
    function openNav() {
        $(".nav").css("width", "250px");
    }

    function closeNav() {
        $(".nav").css("width", 0);
    }

    function close_accordion_section() {
        $('.nav__section .js-accordion-btn').removeClass('active');
        $('.nav__section .nav__list').slideUp(300).removeClass('open');
    }

    $(".js-show-menu").click(openNav);
    $(".js-close-menu").click(closeNav);


    $('.js-accordion-btn').click(function (e) {


        if ($(e.target).is('.active')) {
            close_accordion_section();
        } else {
            close_accordion_section();

            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $(this).next().slideDown(300).addClass('open');
        }

        e.preventDefault();

    });

});