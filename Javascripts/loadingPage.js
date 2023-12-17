document.addEventListener('DOMContentLoaded', () => {
    const colorBlanche1 = localStorage.getItem('--color-blanche-1') || '#243639';
    const colorBlanche2 = localStorage.getItem('--color-blanche-2') || '#08141a';
    const colorText = localStorage.getItem('--color-text') || '#FFF';
    const colorTextNewarnet = localStorage.getItem('--color-titre_newarnet') || '#BDBDBD';
    applyColors(colorBlanche1, colorBlanche2, colorText, colorTextNewarnet);
    
});