document.addEventListener('DOMContentLoaded', () => {
    const colorBlanche1 = localStorage.getItem('--color-blanche-1') || '#243639';
    const colorBlanche2 = localStorage.getItem('--color-blanche-2') || '#08141a';
    const colorText = localStorage.getItem('--color-text') || '#FFF';
    let colorJauneText = localStorage.getItem('--color-jaune-text');

    applyColors(colorBlanche1, colorBlanche2, colorText, colorJauneText);
});

function sunFunction() {
    applyColors('#243639', '#08141a', '#FFFFFF', 'rgb(255, 210, 121)');
}

function darkFunction() {
    applyColors('#ffffff', '#e8e8e8', '#100f0f', '#BDBDBD');
}

function applyColors(colorBlanche1, colorBlanche2, colorText,colorJauneText) {
    document.documentElement.style.setProperty('--color-blanche-1', colorBlanche1);
    document.documentElement.style.setProperty('--color-blanche-2', colorBlanche2);
    document.documentElement.style.setProperty('--color-text', colorText);
    document.documentElement.style.setProperty('--color-jaune-text', colorJauneText);

    localStorage.setItem('--color-blanche-1', colorBlanche1);
    localStorage.setItem('--color-blanche-2', colorBlanche2);
    localStorage.setItem('--color-text', colorText);
    localStorage.setItem('--color-jaune-text', colorJauneText);
}
