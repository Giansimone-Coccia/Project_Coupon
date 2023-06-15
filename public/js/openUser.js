window.addEventListener('DOMContentLoaded', function () { // l'evento 'pageshow' viene attivato quando la pagina viene mostrata o ripristinata, mentre l'evento 'DOMContentLoaded' viene attivato quando il documento HTML è completamente caricato e pronto per essere manipolato tramite JavaScript.
    var containers = document.getElementsByClassName('coupon-no-flex');

    Array.from(containers).forEach(function (container) {
        var question = container.querySelector('.open-coupon');
        var answer = container.querySelector('.coupon-riscattati');

        question.addEventListener('click', function () {
            answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
        });
    });
});


