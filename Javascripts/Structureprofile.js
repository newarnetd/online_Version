function Actualités(event)
{
    let value = event.currentTarget;
    let OptionsBtn = document.querySelectorAll(".optionHome");
    let MereSlides = document.querySelector(".swiper.mySwiper.other .swiper-wrapper.ProfileSesionSide");
    OptionsBtn.forEach(option =>{
        option.classList.remove('active');
    })
    value.classList.add('active');
    if(value.id =="actus")
    {
        MereSlides.style.transform = 'translateX(0%)';
    }else if(value.id =="amis")
    {
        MereSlides.style.transform = 'translateX(-100%)';

    }else if(value.id =="suivis")
    {
        MereSlides.style.transform = 'translateX(-200%)';

    }else if(value.id =="Edite")
    {
        MereSlides.style.transform = 'translateX(-300%)';
    }
}
function PasswordSetting()
{
    let MereSlides = document.querySelector(".swiper.mySwiper.other .swiper-wrapper.ProfileSesionSide");
    MereSlides.style.transform = 'translateX(-400%)';   
}
function ParametreAutre()
{
    let MereSlides = document.querySelector(".swiper.mySwiper.other .swiper-wrapper.ProfileSesionSide");
    MereSlides.style.transform = 'translateX(-500%)';   
}
function Generer(event) {
    const length = 20; 
    const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?"; 
    let password = "";

    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * charset.length);
        password += charset.charAt(randomIndex);
    }
    textRegenerateInput(document.getElementById("passwordInputMob"), password);
    textRegenerateInput(document.getElementById("passMotdepasseMobile"), password);
}