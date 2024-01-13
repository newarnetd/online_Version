function creationGroupeVerification(event) {
    let mere = event.currentTarget.closest('.swiper-slide.principale.MobileStyle');
    let inputCheckboxes = mere.querySelectorAll("input[type='checkbox']");
    var selectedMembers = [];

    inputCheckboxes.forEach(input => {
        if (input.checked) {
            selectedMembers.push(input.value);
        }
    });

    let shouldDisplay = selectedMembers.length > 0;

    if (shouldDisplay) {
        document.querySelector(".swiper-slide.principale .CreatiomsuivantBoutonsGroupe").style.display = 'flex';
    } else {
        document.querySelector(".swiper-slide.principale .CreatiomsuivantBoutonsGroupe").style.display = 'none';
    }
}
