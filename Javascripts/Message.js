 function BoutonRecher()
 {
    document.querySelector(".iconsHeader.iconSearch").style.display='none';
 }

 function ActionUser(event) {
   var checkbox = event.target;

   let mere = event.target.closest('.swiper-slide.GestionMembre');
   let inputCheckboxes = mere.querySelectorAll("input[type='checkbox']");
   
   let shouldDisplay = Array.from(inputCheckboxes).some(input => input.checked);

   if (shouldDisplay) {
       document.querySelector(".swiper-slide.GestionMembre .InputDouble").style.display = 'flex';
   } else {
       document.querySelector(".swiper-slide.GestionMembre .InputDouble").style.display = 'none';
   }
}
 function Actionblocage(event) {
   var checkbox = event.target;

   let mere = event.target.closest('.swiper-slide.Blocage');
   let inputCheckboxes = mere.querySelectorAll("input[type='checkbox']");
   
   let shouldDisplay = Array.from(inputCheckboxes).some(input => input.checked);

   if (shouldDisplay) {
       document.querySelector(".swiper-slide.Blocage .InputDouble").style.display = 'flex';
   } else {
       document.querySelector(".swiper-slide.Blocage .InputDouble").style.display = 'none';
   }
}


