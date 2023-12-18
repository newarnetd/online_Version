document.addEventListener('DOMContentLoaded', () => {
    const colorBlanche1 = localStorage.getItem('--color-blanche-1') || '#243639';
    const colorBlanche2 = localStorage.getItem('--color-blanche-2') || '#08141a';
    const colorText = localStorage.getItem('--color-text') || '#FFF';
    const colorTextNewarnet = localStorage.getItem('--color-titre_newarnet') || '#BDBDBD';
    const colorjaunetext = localStorage.getItem('--color-jaune-text') || 'rgb(255, 210, 121)';
    applyColors(colorBlanche1, colorBlanche2, colorText, colorTextNewarnet, colorjaunetext);
});

function sunFunction() {
    applyColors('#243639', '#08141a', '#FFFFFF', '#BDBDBD', 'rgb(255, 210, 121)');
}

function darkFunction() {
    applyColors('#ffffff', '#e8e8e8', '#100f0f', 'rgba(39, 171, 142, 0.861)', '#BDBDBD');
}

function applyColors(colorBlanche1, colorBlanche2, colorText, colorTextNewarnet, colorjaunetext)
 {
    document.documentElement.style.setProperty('--color-blanche-1', colorBlanche1);
    document.documentElement.style.setProperty('--color-blanche-2', colorBlanche2);
    document.documentElement.style.setProperty('--color-text', colorText);
    document.documentElement.style.setProperty('--color-titre_newarnet', colorTextNewarnet);
    document.documentElement.style.setProperty('--color-jaune-text',colorjaunetext);

    localStorage.setItem('--color-blanche-1', colorBlanche1);
    localStorage.setItem('--color-blanche-2', colorBlanche2);
    localStorage.setItem('--color-text', colorText);
    localStorage.setItem('--color-titre_newarnet', colorTextNewarnet);
    localStorage.setItem('--color-jaune-text', colorjaunetext);
}
