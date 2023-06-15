window.addEventListener('DOMContentLoaded', function () { //la funzione si attiva nel momento in cu è caricata tutta la pagina
    var containers = document.getElementsByClassName('card');

    Array.from(containers).forEach(function (container) {
        var question = container.querySelector('.open-faq');
        var answer = container.querySelector('.card-body');

        question.addEventListener('click', function () {
            answer.style.display = answer.style.display === 'none' ? 'block' : 'none';  //operatore ternario se answer.style.display === 'none' allora block altrimenti none
        });
    });
});


