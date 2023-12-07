document.body.addEventListener('keydown', function (event) {
    if (event.key === 'Tab' || event.key === 'Enter') {
        event.preventDefault();
    }
});
