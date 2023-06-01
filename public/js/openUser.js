window.addEventListener('DOMContentLoaded', function () {
    var containers = document.getElementsByClassName('coupon');

    Array.from(containers).forEach(function (container) {
        var question = container.querySelector('.coupon');
        var answer = container.querySelector('.card-body');

        question.addEventListener('click', function () {
            answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
        });
    });
});


