window.addEventListener('DOMContentLoaded', function () {
    var containers = document.getElementsByClassName('card');

    Array.from(containers).forEach(function (container) {
        var question = container.querySelector('.open-faq');
        var answer = container.querySelector('.card-body');

        question.addEventListener('click', function () {
            answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
        });
    });

    Array.from(containers).forEach(function (container) {
        var modify_button = container.querySelector('#pulsante_modifica');
        var delete_button = container.querySelector('#pulsante_elimina');

        modify_button.addEventListener('click', function (event) {
            event.stopPropagation();
        });

        delete_button.addEventListener('click', function (event) {
            event.stopPropagation();
        });
    });
});


