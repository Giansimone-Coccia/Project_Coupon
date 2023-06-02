window.addEventListener('DOMContentLoaded', function () {
    var containers = document.getElementsByClassName('coupon-no-flex');

    Array.from(containers).forEach(function (container) {
        var question = container.querySelector('.open-coupon');
        var answer = container.querySelector('.coupon-riscattati');

        question.addEventListener('click', function () {
            answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
        });
    });
});


