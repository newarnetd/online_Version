document.addEventListener('DOMContentLoaded', () => {
    const colorBlanche1 = localStorage.getItem('--color-blanche-1') || '#ffffff';
    const colorBlanche2 = localStorage.getItem('--color-blanche-2') || '#e8e8e8';
    const colorText = localStorage.getItem('--color-text') || '#100f0f';
    let colorJauneText = localStorage.getItem('--color-jaune-text');
    let textTitre = localStorage.getItem('--color-titre');

    applyColors(colorBlanche1, colorBlanche2, colorText, colorJauneText,textTitre,textTitre);
    suipperSlide();
});
function sunFunction() {
    applyColors('#243639', '#08141a', '#FFFFFF', 'rgb(255, 210, 121)','#BDBDBD');
}

function darkFunction() {
    applyColors('#ffffff', '#e8e8e8', '#100f0f', '#BDBDBD','#0d876f');
}
function applyColors(colorBlanche1, colorBlanche2, colorText,colorJauneText,textTitre) {
    document.documentElement.style.setProperty('--color-blanche-1', colorBlanche1);
    document.documentElement.style.setProperty('--color-blanche-2', colorBlanche2);
    document.documentElement.style.setProperty('--color-text', colorText);
    document.documentElement.style.setProperty('--color-jaune-text', colorJauneText);
    document.documentElement.style.setProperty('--color-titre', textTitre);

    localStorage.setItem('--color-blanche-1', colorBlanche1);
    localStorage.setItem('--color-blanche-2', colorBlanche2);
    localStorage.setItem('--color-text', colorText);
    localStorage.setItem('--color-jaune-text', colorJauneText);
    localStorage.setItem('--color-titre', textTitre);
}
