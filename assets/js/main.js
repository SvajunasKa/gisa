
(function ($) {

    skel
            .breakpoints({
                xlarge: '(max-width: 1680px)',
                large: '(max-width: 1280px)',
                medium: '(max-width: 980px)',
                small: '(max-width: 736px)',
                xsmall: '(max-width: 480px)'
            });

    $(function () {

        var $window = $(window),
                $body = $('body'),
                $wrapper = $('#page-wrapper'),
                $banner = $('#banner'),
                $header = $('#header');

        // Disable animations/transitions until the page has loaded.
        $body.addClass('is-loading');

        $window.on('load', function () {
            window.setTimeout(function () {
                $body.removeClass('is-loading');
            }, 10);
        });

        // Mobile?
        if (skel.vars.mobile)
            $body.addClass('is-mobile');
        else
            skel
                    .on('-medium !medium', function () {
                        $body.removeClass('is-mobile');
                    })
                    .on('+medium', function () {
                        $body.addClass('is-mobile');
                    });

        // Fix: Placeholder polyfill.
        $('form').placeholder();

        // Prioritize "important" elements on medium.
        skel.on('+medium -medium', function () {
            $.prioritize(
                    '.important\\28 medium\\29',
                    skel.breakpoint('medium').active
                    );
        });

        // Scrolly.
        $('.scrolly')
                .scrolly({
                    speed: 1500,
                    offset: $header.outerHeight()
                });

        // Menu.
        $('#menu')
                .append('<a href="#menu" class="close"></a>')
                .appendTo($body)
                .panel({
                    delay: 500,
                    hideOnClick: true,
                    hideOnSwipe: true,
                    resetScroll: true,
                    resetForms: true,
                    side: 'right',
                    target: $body,
                    visibleClass: 'is-menu-visible'
                });

        // Header.
        if (skel.vars.IEVersion < 9)
            $header.removeClass('alt');

        if ($banner.length > 0
                && $header.hasClass('alt')) {

            $window.on('resize', function () {
                $window.trigger('scroll');
            });

            $banner.scrollex({
                bottom: $header.outerHeight() + 1,
                terminate: function () {
                    $header.removeClass('alt');
                },
                enter: function () {
                    $header.addClass('alt');
                },
                leave: function () {
                    $header.removeClass('alt');
                }
            });

        }

    });
    $("#button").click(function () {
        $('html, body').animate({
            scrollTop: $("#two").offset().top
        }, 2000);
    });
    $("#cont").click(function () {
        $('html, body').animate({
            scrollTop: $("#three").offset().top
        }, 2000);
    });

    // contact form ajax

    var form = $('#ajax-contact');

    // Get the messages div.
    var formMessages = $('#form-messages');

    // Set up an event listener for the contact form.
    $(form).submit(function (e) {
        // Stop the browser from submitting the form.
        e.preventDefault();

        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
                .done(function (response) {
                    $(formMessages).removeClass('error');
                    $(formMessages).addClass('success');

                    // Set the message text.
                    $(formMessages).text(response);


                    // Clear the form.
                    $('#name').val('');
                    $('#email').val('');
                    $('#message').val('');

                })
                .fail(function (data) {
                    $(formMessages).removeClass('success');
                    $(formMessages).addClass('error');

                    // Set the message text.
                    if (data.responseText !== '') {
                        $(formMessages).text(data.responseText);
                    } else {
                        $(formMessages).text('Atsiprašome, labai stengėmės, bet jūsų žinutės neišsiuntėme!');
                    }
                });
    });

})(jQuery);

function remelis1() {
    var elem2 = document.getElementById("wash");
    elem2.setAttribute("style", "box-shadow:7px 7px 9px #000; transition:0.5s ease-in-out");
}
function dingsta1() {
    var elem1 = document.getElementById("wash");
    elem1.setAttribute("style", "box-shadow:0px 0px 0px 0px #000; transition:0.5s ease-in-out");
}
function remelis2() {
    var elem2 = document.getElementById("spot");
    elem2.setAttribute("style", "box-shadow:7px 7px 9px #000; transition:0.5s ease-in-out");
}
function dingsta2() {
    var elem1 = document.getElementById("spot");
    elem1.setAttribute("style", "box-shadow:0px 0px 0px 0px #000; transition:0.5s ease-in-out");
}
function remelis3() {
    var elem2 = document.getElementById("scan");
    elem2.setAttribute("style", "box-shadow:7px 7px 9px #000; transition:0.5s ease-in-out");
}
function dingsta3() {
    var elem1 = document.getElementById("scan");
    elem1.setAttribute("style", "box-shadow:0px 0px 0px 0px #000; transition:0.5s ease-in-out");
}
function remelis4() {
    var elem2 = document.getElementById("martin");
    elem2.setAttribute("style", "box-shadow:7px 7px 9px #000; transition:0.5s ease-in-out");
}
function dingsta4() {
    var elem1 = document.getElementById("martin");
    elem1.setAttribute("style", "box-shadow:0px 0px 0px 0px #000; transition:0.5s ease-in-out");
}


// popup video
$(document).ready(function () {
    $(".show-modal").click(function () {
        var modal = $('<div class="modal size-m"></div>');

        modal.appendTo('body');

        var videoWidth = modal.width();
        var videoHeight = modal.height();
        var modalWidth = modal.outerWidth();
        var modalHeight = modal.outerHeight();

        var $this = $(this);
        var iframe = $("<iframe>").attr("src", $this.data("link"));
        iframe.css({
            width: videoWidth,
            height: videoHeight

        });
        modal.css({
            marginLeft: -modalWidth / 2,
            marginTop: -modalHeight / 2
        });

        iframe.appendTo(modal);

        var closeButton = $('<div class="modal-close">&#215;</div>');
        closeButton.appendTo(modal);
        closeButton.on('click', function () {
            $(this).parent().fadeOut(350, function () {
                $(this).detach();
            });
        });
    });
    
});
