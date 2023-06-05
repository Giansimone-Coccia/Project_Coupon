$(document).ready(function () {
    toggleElementVisibility();

    $(window).resize(function () {
        toggleElementVisibility();
    });
});

function toggleElementVisibility() {
    var logo = $('.logo');
    var searchbar = $('.search');
    if ($(window).width() < 975) { // Larghezza desiderata per nascondere l'elemento
        logo.hide();
    } else {
        logo.show();
    }

    if ($(window).width() < 700) { // Larghezza desiderata per nascondere l'elemento
        searchbar.hide();
    } else {
        searchbar.show();
    }
}

