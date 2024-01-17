let ParentPrincipale = document.querySelector('.swiper-wrapper.primcipaleMobile');
let ParentInside = document.querySelector('.swiper-wrapper.principale');
let ParentSetting = document.querySelector('.swiper-wrapper.settingCompte');
let ParentCreationGroupe = document.querySelector('.swiper-wrapper.CreationGrouepe');
function HomePageMobile()
{
    ParentPrincipale.style.transform = 'translateX(0%)';
}
function SuivantGroupeCreationMobile()
{
   ParentCreationGroupe.style.transform = 'translateX(-100%)';
}
function RetourMessage()
{
   ParentPrincipale.style.transform = 'translateX(-100%)';
}
function SettinPageMobile()
{
   ParentSetting.style.transform = 'translateX(0%)';
}
function ParametrepageMobile()
{
   ParentSetting.style.transform = 'translateX(-100%)';
}
function ParametreCompteMobile()
{
   ParentSetting.style.transform = 'translateX(-200%)';
}
function DocumentationMobile()
{
   ParentSetting.style.transform = 'translateX(-300%)';
}
function NiandaMobile()
{
   ParentSetting.style.transform = 'translateX(-400%)';
}
function DeconnexionMobile()
{
   ParentSetting.style.transform = 'translateX(-500%)';
}
function MessagePageMobile()
{
    ParentPrincipale.style.transform = 'translateX(-100%)';
}
function Profile()
{
   ParentPrincipale.style.transform = 'translateX(-1500%)';
}
 function GroupesPageMobile()
 {
    ParentPrincipale.style.transform = 'translateX(-400%)';
 }
 function VoirAlbum()
 {
    ParentPrincipale.style.transform = 'translateX(-500%)';
 }
 function NotiPageMobile()
 {
    ParentPrincipale.style.transform = 'translateX(-200%)';
 }
 function RechergePageMobile()
 {
    ParentPrincipale.style.transform = 'translateX(-600%)';
 }
function MorePageMobile()
{
    ParentPrincipale.style.transform = 'translateX(-700%)';
}
function NewGroupeMobile()
{
   ParentPrincipale.style.transform = 'translateX(-800%)';
}
function VoiMonProfile()
{
   ParentPrincipale.style.transform = 'translateX(-900%)';
}
function NouvelleConversation()
{
   ParentPrincipale.style.transform = 'translateX(-900%)';
}
function StoryAdd()
{
   ParentPrincipale.style.transform = 'translateX(-1000%)';
}
function EditeProfile()
{
   ParentPrincipale.style.transform = 'translateX(-1100%)';
}
function EditeCouverture()
{
   ParentPrincipale.style.transform = 'translateX(-1200%)';
}
 function EditeInfos()
 {
   ParentPrincipale.style.transform = 'translateX(-1300%)';
 }
function plusOption(event)
{
   event.currentTarget.classList.toggle('active');
}
function ThemeMobile() {
   document.querySelector('.styleTheme').style.display = 'flex';
   document.querySelector('.styleTheme').addEventListener('click', (event) => {
      if (event.target.classList.contains('styleTheme')) {
         document.querySelector('.styleTheme').style.display = 'none';
      }
   });
}
function AddnameGroupe(event)
{
    let mere  = event.currentTarget.closest('.InputDouble');
    let Btn= mere.querySelector('.InputDouble .contentBtnName:nth-child(2)');
    if(event.target.value.trim() !== '')
    {
        Btn.style.display='flex';
    }else{
        Btn.style.display='none';
    }
}
function Message()
{
   ParentPrincipale.style.transform = 'translateX(-1400%)';
}