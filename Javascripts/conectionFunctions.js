function PasswordToggle(event) {
    const eyeInput = event.target;
    const parentContainer = eyeInput.closest(".containeurInputStyle.password");
    const eye = parentContainer.querySelector(".fa-solid.fa-eye");
    const eyeslash = parentContainer.querySelector(".fa-solid.fa-eye-slash");
    const inputPassword = parentContainer.querySelector("input");

    if (eyeInput.id === "eye-slash") {
        eyeInput.style.display = "none";
        eye.style.display = "flex";
    } else {
        eyeslash.style.display = "flex";
        eyeInput.style.display = "none";
    }

    inputPassword.type = inputPassword.type === "password" ? "text" : "password";
}

function generateStrongPassword(event) {
    const length = 20; 
    const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?"; 
    let password = "";

    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * charset.length);
        password += charset.charAt(randomIndex);
    }

    textRegenerateInput(document.getElementById("passMotdepasse"), password);
    textRegenerateInput(document.getElementById("passMotdepasseMobile"), password);
    textRegenerateInput(document.getElementById("passwordInputDesk"), password);
    textRegenerateInput(document.getElementById("passwordInputMob"), password);
}
function selectGenre(event)
{
    let mere = event.target.closest(".InputDouble");
    if(event.target.id == "Homme")
    {
        mere.querySelector(".InputDouble i.fa-solid.fa-person").style.display="flex";
        mere.querySelector(".InputDouble i.fa-solid.fa-person-dress").style.display="none";
    }else{
        mere.querySelector(".InputDouble i.fa-solid.fa-person").style.display="none";
        mere.querySelector(".InputDouble i.fa-solid.fa-person-dress").style.display="flex";
    }
}
function capierPassword(event)
{
    event.target.style.display = "none";
    let text = event.target.closest(".InputDouble").querySelector("#passMotdepasse").value;
    event.target.closest(".InputDouble").querySelector(".fa-solid.fa-check").style.display = "flex";
    copierDansPressePapier(text);
}
function capierPasswordMobile(event)
{
    event.target.style.display = "none";
    let text = event.target.closest(".InputDouble").querySelector("#passMotdepasseMobile").value;
    event.target.closest(".InputDouble").querySelector(".fa-solid.fa-check").style.display = "flex";
    copierDansPressePapier(text);
}
function copierDansPressePapier(texte) {
    var textarea = document.createElement('textarea');
    textarea.value = texte;
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand('copy');
    document.body.removeChild(textarea);
  }

  
