function textRegenerate(containeur, text) {
    containeur.value = "";
    var duration = 50;
    var index = 0;
    var intervalId = setInterval(function() {
      var valeur = text.charAt(index);
  
      if (valeur !== '') {
        index++;
        containeur.value += valeur;
      } else {
        clearInterval(intervalId);
      }
    }, duration);
}
function CreateElement(Question,Mere) 
{
    
    function_encours = true;
    let newElement = document.createElement("div");
    newElement.style.width= '100%';
    newElement.innerHTML = `
    <div class="senderUser">
    <p>${Question}</p>
    </div>

    <div class="Nianda">
    <div class="userPhoto"><i class="fa-solid fa-robot"></i></div>
    <p >

                <div class="typing_container_animation">
                        <div class="typing-animation" style="--delay:0.2s"></div>
                        <div class="typing-animation"style="--delay:0.3s"></div>
                        <div class="typing-animation"style="--delay:0.4s"></div>
                    </div>
    </p>
    </div>
    `;
    Mere.appendChild(newElement);
    
        
}