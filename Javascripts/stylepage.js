document.addEventListener('DOMContentLoaded', () => {
    const colorBlanche1 = localStorage.getItem('--color-blanche-1') || '#243639';
    const colorBlanche2 = localStorage.getItem('--color-blanche-2') || '#08141a';
    const colorText = localStorage.getItem('--color-text') || '#FFF';
    const colorTextNewarnet = localStorage.getItem('--color-titre_newarnet') || '#BDBDBD';
    applyColors(colorBlanche1, colorBlanche2, colorText, colorTextNewarnet);
});
function sunFunction() {
    applyColors('#243639', '#08141a', '#FFF', '#BDBDBD');
}
function darkFunction() {
    applyColors('#ffffff', '#ebebeb', '#100f0f', 'rgba(28, 162, 140, 0.829)');
}
function applyColors(colorBlanche1, colorBlanche2, colorText, colorTextNewarnet){
    document.documentElement.style.setProperty('--color-blanche-1', colorBlanche1);
    document.documentElement.style.setProperty('--color-blanche-2', colorBlanche2);
    document.documentElement.style.setProperty('--color-text', colorText);
    document.documentElement.style.setProperty('--color-titre_newarnet', colorTextNewarnet);
    document.documentElement.style.setProperty('--color-titre_newarnet', colorBordure);

    localStorage.setItem('--color-blanche-1', colorBlanche1);
    localStorage.setItem('--color-blanche-2', colorBlanche2);
    localStorage.setItem('--color-text', colorText);
    localStorage.setItem('--color-titre_newarnet', colorTextNewarnet);
}
function applyColors(colorBlanche1, colorBlanche2, colorText, colorTextNewarnet) {
    document.documentElement.style.setProperty('--color-blanche-1', colorBlanche1);
    document.documentElement.style.setProperty('--color-blanche-2', colorBlanche2);
    document.documentElement.style.setProperty('--color-text', colorText);
    document.documentElement.style.setProperty('--color-titre_newarnet', colorTextNewarnet);
    localStorage.setItem('--color-blanche-1', colorBlanche1);
    localStorage.setItem('--color-blanche-2', colorBlanche2);
    localStorage.setItem('--color-text', colorText);
    localStorage.setItem('--color-titre_newarnet', colorTextNewarnet);
}
