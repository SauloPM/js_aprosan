$(document).ready(function() {

    // WOW
    new WOW().init(); 

    // Spinner
    hideSpinner();

    // Top Button
    showTopButton();

    // Smooth Scrolling Links
    $(".smooth-scrolling").click(function (event) {
        event.preventDefault();
        var target = $(this).attr("href");
        $("html, body").animate({ scrollTop: $(target).offset().top }, 800, function () {
            window.location.hash = target;
        });
    });

});

$(document).scroll(function() {
    showTopButton();
});

// ─────────────── //
//     SPINNER     //
// ─────────────── //

// Spinner hidding
function hideSpinner () {
    $("#preloader .spinner").fadeOut(500, function () {
        $("#preloader").delay(500).fadeOut(500);
        setTimeout(function () { $("body").css("overflow", "visible"); }, 500);
    });
}

// ────────────────── //
//     TOP BUTTON     //
// ────────────────── //

// Top button revealing
function showTopButton () {
    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150)
        $(".top-button").css("opacity", "1");
    else
        $(".top-button").css("opacity", "0");
}