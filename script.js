document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.btn');

    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            button.classList.add('hover');
        });

        button.addEventListener('mouseleave', function() {
            button.classList.remove('hover');
        });
    });
});
