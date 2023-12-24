function PosteFile(event)
{
    let value = event.currentTarget;
    let OptionsBtn = document.querySelectorAll(".optionHome");
    let MereSlides = document.querySelector(".swiper.mySwiper.other .swiper-wrapper.homeSessionPost.slidpost");
    OptionsBtn.forEach(option =>{
        option.classList.remove('active');
    })
    value.classList.add('active');
    if(value.id =="image")
    {
        MereSlides.style.transform = 'translateX(0%)';
    }else if(value.id =="videos")
    {
        MereSlides.style.transform = 'translateX(-100%)';

    }else if(value.id =="document")
    {
        MereSlides.style.transform = 'translateX(-200%)';

    }
}
function FilActualite(event)
{
    let value = event.currentTarget;
    let OptionsBtn = document.querySelectorAll(".optionHome");
    let MereSlides = document.querySelector(".swiper.mySwiper.other .swiper-wrapper.homeSessionPost");
    OptionsBtn.forEach(option =>{
        option.classList.remove('active');
    })
    value.classList.add('active');
    if(value.id =="actualite")
    {
        MereSlides.style.transform = 'translateX(0%)';
    }else if(value.id =="videos")
    {
        MereSlides.style.transform = 'translateX(-100%)';

    }else if(value.id =="Statut")
    {
        MereSlides.style.transform = 'translateX(-200%)';

    }else if(value.id =="Livres")
    {
        MereSlides.style.transform = 'translateX(-300%)';
    }
}
function ShowStatut(event)
{
    let MereSlides = document.querySelector(".swiper-wrapper.ScrollPart");
    MereSlides.style.transform = 'translateX(-100%)';
}
function BackSatutus()
{
    let MereSlides = document.querySelector(".swiper-wrapper.ScrollPart");
    MereSlides.style.transform = 'translateX(0%)';
}
function PostWidthInage()
{
    let MereSlides = document.querySelector(".swiper.mySwiper.other .swiper-wrapper.homeSessionPost");
        MereSlides.style.transform = 'translateX(-400%)';
        document.querySelector(".menuHomeChoix").style.display='none';
        document.querySelector(".FormPost").style.display='none';
}
function PosteChamps(event)
{
    if(event.target.value.trim() != '')
    {
        let MereSlides = document.querySelector(".swiper.mySwiper.other .swiper-wrapper.homeSessionPost");
        MereSlides.style.transform = 'translateX(-400%)';
        document.querySelector(".menuHomeChoix").style.display='none';
        document.querySelector(".FormPost").style.display='none';
    }else{
        event.target.value = '';
        RetunBackCreatePoste();
    }
}
function RetunBackCreatePoste()
{
    
    let MereSlides = document.querySelector(".swiper.mySwiper.other .swiper-wrapper.homeSessionPost");
    MereSlides.style.transform = 'translateX(0%)';
    document.querySelector(".menuHomeChoix").style.display='flex';
    document.querySelector(".FormPost").style.display='block';   
}
function documentFormat(event)
{
    
    let value = event.currentTarget;
    let OptionsBtn = document.querySelectorAll(".swiper-slide.boook .menuHomeChoix .optionHome");
    let MereSlidesBook = document.querySelector(".swiper-wrapper.document");
    OptionsBtn.forEach(option =>{
        option.classList.remove('active');
    })
    value.classList.add('active');
    if(value.id == "photoBook")
    {
        MereSlidesBook.style.transform = 'translateX(0%)';
    }else if(value.id =="pdf"){
        MereSlidesBook.style.transform = 'translateX(-100%)';
    }
}
function MenuUserPost(event)
{
    let value = event.currentTarget;
    value.classList.toggle('active');
}