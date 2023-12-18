document.body.addEventListener('keydown', function (event) {
    if (event.key === 'Tab' || event.key === 'Enter') {
        event.preventDefault();
    }
});
const forms = document.querySelectorAll('form');
forms.forEach(form => {
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    });
});

