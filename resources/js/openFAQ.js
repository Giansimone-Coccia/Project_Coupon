window.addEventListener('DOMContentLoaded', function() {
        
        var containers = document.getElementsByClassName('card');

        Array.from(containers).forEach(function (container) {
            var question = container.querySelector('.open-faq');
            var answer = container.querySelector('.card-body');

            question.addEventListener('click', function () {
                answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
            });
        });
    });


