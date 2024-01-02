function textRegenerate(conteneur, text, champSaisi, options = {}) {
  const {
    duration = 50,
    displayStyle = "flex",
    onComplete = () => {
    }, 
  } = options;
  conteneur.value = "";
  let index = 0;
  const intervalId = setInterval(() => {
    const valeur = text.trim().charAt(index);
    requestAnimationFrame(() => {
      conteneur.value += valeur;
    });
    index++;
  } , duration);
}
function textRegenerateInput(conteneur, text) {
  duration = 50,
  conteneur.value = "";
  let index = 0;
  const intervalId = setInterval(() => {
    const valeur = text.trim().charAt(index);
    requestAnimationFrame(() => {
      conteneur.value += valeur;
    });
    index++;
  } , duration);
}

function CreateElement(Question, Mere) {
  function_encours = true;
  let newElement = document.createElement("div");
  newElement.style.width = '100%';
  newElement.innerHTML = `
      <div class="senderUser">
          <p>${Question}</p>
      </div>

      <div class="Nianda">
          <div class="userPhoto"><i class="fa-solid fa-robot"></i></div>
          <p class="response"></p>
      </div>
  `;
  Mere.appendChild(newElement);
  verifierQuestion(Question);
}

function verifierQuestion(key) {
  // JavaScript code for each question
  let questions = [
    "Que represente Nianda sur NewaRnete",
    "Qu'est-ce que NewaRnet?",
    "Objectifs de NewaRnet?",
    "Comment rejoindre NewaRnet?",
    "Fonctionnalités principales de NewaRnet?",
    "Personnaliser mon profil sur NewaRnet?",
    "Options de confidentialité sur NewaRnet?",
    "Groupes communautaires sur NewaRnet?",
    "Ajouter des amis sur NewaRnet?",
    "Options de messagerie sur NewaRnet?",
    "Fonctionnement des commentaires et likes sur NewaRnet?",
    "Histoire de la création de NewaRnet?",
    "Fondateur de NewaRnet?",
    "Valeurs fondamentales de NewaRnet?",
    "Évolution de NewaRnet au fil du temps?",
    "Dernières mises à jour sur NewaRnet?",
    "Événements communautaires sur NewaRnet?",
    "Contribuer à la communauté NewaRnet?",
    "Contacter le support de NewaRnet?",
    "Pourquoi NewaRnet utilise-t-il les couleurs panafricaines?",
    "Signification des couleurs rouge, verte et jaune sur NewaRnet?",
    "Comment les couleurs panafricaines symbolisent-elles l'unité sur NewaRnet?",
    "Autres significations derrière le choix de ces couleurs?",
    "Comment NewaRnet célèbre-t-il la diversité culturelle à travers ces couleurs?",
    "Fonctionne sur quels types d'appareils NewaRnet?",
    "Quels types de contenus puis-je partager sur NewaRnet?",
    "Est-ce que NewaRnet propose des fonctionnalités de streaming vidéo?",
    "Comment fonctionne le système de notifications sur NewaRnet?",
    "Existe-t-il une fonction de recherche avancée sur NewaRnet?",
    "Y a-t-il des options de personnalisation pour le fil d'actualité?",
    "Comment signaler du contenu inapproprié sur NewaRnet?",
    "NewaRnet propose-t-il des outils de modération de communauté?",
    "Peut-on planifier des événements sur NewaRnet?",
    "Comment fonctionne le système de recommandation d'amis sur NewaRnet?",
    "Est-ce que NewaRnet a une politique de protection des données?",
    "Quelles sont les options de personnalisation pour les profils utilisateurs?",
    "Y a-t-il une limite de caractères pour les publications sur NewaRnet?",
    "Comment fonctionne le système de trending topics sur NewaRnet?",
    "Est-ce que NewaRnet propose des fonctionnalités de traduction?",
    "Comment supprimer mon compte sur NewaRnet?",
    "Existe-t-il des programmes d'ambassadeurs ou d'influenceurs sur NewaRnet?",
    "Comment NewaRnet prévient-il le harcèlement en ligne?",
    "Y a-t-il des fonctionnalités de géolocalisation sur NewaRnet?",
    "Quelles sont les options de personnalisation pour les notifications?",
    "Est-ce que NewaRnet propose des filtres pour les photos?"
  ];
  
  let question1 = questions[0];
  let question2 = questions[1];
  let question3 = questions[2];
  let question4 = questions[3];
  let question5 = questions[4];
  let question6 = questions[5];
  let question7 = questions[6];
  let question8 = questions[7];
  let question9 = questions[8];
  let question10 = questions[9];
  let question11 = questions[10];
  let question12 = questions[11];
  let question13 = questions[12];
  let question14 = questions[13];
  let question15 = questions[14];
  let question16 = questions[15];
  let question17 = questions[16];
  let question18 = questions[17];
  let question19 = questions[18];
  let question20 = questions[19];
  let question21 = questions[20];
  let question22 = questions[21];
  let question23 = questions[22];
  let question24 = questions[23];
  let question25 = questions[24];
  let question26 = questions[25];
  let question27 = questions[26];
  let question28 = questions[27];
  let question29 = questions[28];
  let question30 = questions[29];
  let question31 = questions[30];
  let question32 = questions[31];
  let question33 = questions[32];
  let question34 = questions[33];
  let question35 = questions[34];
  let question36 = questions[35];
  let question37 = questions[36];
  let question38 = questions[37];
  let question39 = questions[38];
  let question40 = questions[39];
  let question41 = questions[40];
  let question42 = questions[41];
  let question43 = questions[42];
  let question44 = questions[43];
  
  if (question1 === key) {
      let text = " Nianda, votre assistante au sein de l'équipe NewaRnet. Mon rôle est de vous accompagner dans la découverte et l'utilisation optimale de notre plateforme. NewaRnet n'est pas seulement un nom, c'est une communauté dynamique où vous, en tant qu'utilisateur, occupez une place centrale. Nianda tire ses origines de l'Afrique de l'Ouest, symbolisant ainsi la richesse culturelle et la diversité qui caractérisent notre plateforme. En tant qu'assistante, je suis là pour répondre à vos questions, vous guider dans la navigation de NewaRnet, et vous aider à comprendre la structure qui soutient notre communauté. Si vous avez des interrogations sur les fonctionnalités de la plateforme, sur la manière de maximiser votre expérience, ou si vous souhaitez simplement en savoir plus sur notre communauté, n'hésitez pas à me solliciter. Je suis là pour vous fournir des informations claires et vous aider à tirer le meilleur parti de votre temps sur NewaRnet. Notre objectif est de créer un espace collaboratif où le partage de connaissances, les discussions animées et la découverte de nouvelles idées prospèrent. Votre participation active est essentielle pour faire de NewaRnet un lieu dynamique et stimulant. Bienvenue à bord, chers NewaRnautes. Ensemble, explorons les possibilités infinies de notre communauté.";
      var elementsResponse = document.querySelectorAll(".response");
      var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
      CreateResponse(dernierElementResponse, text);
  }else if (question2 === key) {
    let text = "Bienvenue sur NewaRnet, un réseau social innovant doté de multiples outils intégrés pour enrichir votre expérience en ligne. Parmi ces outils, nous avons NewaRnetPhoto, un espace dédié où les NewaRnautes peuvent exprimer leur créativité en éditant et en personnalisant leurs photos. Grâce à des fonctionnalités avancées de dessin à main levée, chaque utilisateur peut transformer ses clichés en véritables œuvres d'art. Mais ce n'est pas tout ! Explorez également ePlaza, notre marché en ligne intégré. Il offre une plateforme pour promouvoir et découvrir des articles d'occasion, favorisant ainsi une économie circulaire au sein de la communauté NewaRnet. NewaRnet va au-delà des simples réseaux sociaux en offrant une palette diversifiée d'outils, de services et d'opportunités. Que vous soyez passionné par la création artistique, la vente d'articles d'occasion, ou tout simplement la découverte de nouvelles possibilités, vous trouverez tout cela au sein de notre communauté dynamique. Explorez, créez, partagez, et faites de chaque instant sur NewaRnet une expérience unique. Bienvenue dans un réseau social qui va au-delà des attentes traditionnelles.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question3 === key) {
    let text = "Les principaux objectifs de NewaRnet sont d'encourager la collaboration et la créativité, de faciliter l'échange d'idées et de connaissances, de soutenir une économie circulaire grâce à ePlaza, et de célébrer la diversité au sein de sa communauté. L'objectif global est d'offrir une expérience en ligne personnalisée et enrichissante pour tous les utilisateurs.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question4 === key) {
    let text = "Rejoignez NewaRnet sur www.newarnet.com, inscrivez-vous, personnalisez votre profil, suivez des amis, participez aux discussions et explorez un nouveau monde social !";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question5 === key) {
    let text = "ePlaza pour la promotion en ligne, NewaRnetphoto pour la gestion visuelle, profils personnalisés, discussions interactives, et paramètres de sécurité.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question6 === key) {
    let text = `Pour personnaliser votre profil sur NewaRnet, cliquez sur votre photo de profil, sélectionnez "Modifier le profil", puis ajoutez une photo, partagez vos centres d'intérêt et ajustez vos paramètres pour une expérience personnalisée.`;
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question7 === key) {
    let text = "Sur NewaRnet, vous pouvez gérer vos options de confidentialité en accédant aux paramètres de compte. Définissez la visibilité de votre profil, contrôlez qui peut voir vos publications, gérez les demandes d'amis, et ajustez les paramètres de notification pour une expérience en ligne sécurisée et adaptée à vos préférences.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question8 === key) {
    let text = "Sur NewaRnet, explorez une variété de groupes communautaires en rejoignant des discussions spécifiques à vos intérêts. Recherchez des groupes pertinents, engagez-vous avec d'autres membres partageant les mêmes passions, et créez des liens au sein de communautés dynamiques pour enrichir votre expérience sur la plateforme.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question9 === key) {
    let text = `Pour ajouter des amis sur NewaRnet, recherchez leurs profils, puis cliquez sur le bouton "Ajouter un ami" ou une option similaire sur leur page. Attendez leur approbation, et une fois accepté, vous pourrez voir leurs publications, interagir avec eux et renforcer vos connexions sur la plateforme.`;
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question10 === key) {
    let text = "Sur NewaRnet, profitez d'options de messagerie conviviales. Envoyez des messages instantanés à vos amis, créez des discussions de groupe pour des conversations collaboratives, et partagez du contenu directement. Gérez vos paramètres de messagerie pour personnaliser vos préférences et garantir une expérience de communication adaptée à vos besoins.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question11 === key) {
    let text = `Sur NewaRnet, le fonctionnement des commentaires et des likes est simple et interactif. Lorsque vous parcourez les publications, vous pouvez exprimer votre approbation en cliquant sur le bouton "Like". De plus, vous pouvez laisser des commentaires pour engager une conversation ou partager vos réflexions. Ces interactions favorisent l'engagement communautaire, renforcent les connexions et contribuent à créer une expérience sociale dynamique sur la plateforme.`;
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question12 === key) {
    let text = `C'est l'épopée fascinante de la naissance de NewaRnet ! Issu de l'acronyme New African Revolution Network, ce récit rédigé en anglais célèbre la brillante performance africaine et incarne l'amour profond pour notre continent. Il démontre avec éclat que nous, en tant qu'Africains, sommes capables de prendre d'assaut des sujets audacieux et de les concrétiser avec brio. Plongez dans l'univers inspirant de ce texte, porté par la passion et l'audace du jeune Jean-Luc Kashindi, et découvrez comment il a contribué à élever les horizons de l'Afrique avec ses idées novatrices.En outre, cette initiative est métamorphosée avec une esthétique unique – il a coloré sa plateforme aux nuances vibrantes des trois couleurs panafricaines : le rouge, le jaune et le vert. Cette fusion audacieuse de couleurs n'est pas simplement esthétique, mais elle incarne aussi un symbole puissant de l'unité, de la diversité et de la force de l'Afrique. L'histoire captivante de la création de NewaRnet révèle non seulement une performance exceptionnelle, mais aussi une créativité visionnaire qui élève l'essence même de notre continent. Découvrez comment ce génie, tel un artiste avec sa palette, a donné vie à une plateforme qui respire la richesse culturelle et la vitalité panafricaine. C'est l'heure de l'Afrique, c'est le moment de briller `;
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question13 === key) {
    let text = "Jean-Luc Kashindi, dès sa première année en tant que bidouilleur passionné, a toujours été animé par l'excitation des programmes informatiques. Sa passion pour la programmation l'a conduit à concevoir l'idée novatrice de rassembler ses camarades de l'université à travers un trombinoscope. Lorsqu'il a présenté cette idée à la direction académique, cela a été accueilli avec une immense joie et une fierté interuniversitaire. La plateforme a ainsi pris vie, symbolisant non seulement l'ingéniosité individuelle de Jean-Luc, mais également le potentiel collaboratif et novateur de la communauté étudiante. C'est ainsi qu'a commencé l'aventure passionnante de NewaRnet, portée par la vision audacieuse de son fondateur.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question14 === key) {
    let text = "Innovation collaborative, inclusivité visuelle, profils personnalisés authentiques, discussions interactives et paramètres de sécurité renforcés, définissent les valeurs fondamentales de NewaRnet pour une expérience en ligne novatrice, transparente et sécurisée.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question15 === key) {
    let text = "L'équipe de NewaRnet est déterminée et extrêmement créative, travaillant sans relâche jour et nuit pour améliorer constamment leur plateforme. Leur engagement infatigable se reflète dans leurs efforts inlassables visant à repousser les limites de la créativité et de l'innovation. Cette détermination à élever continuellement la plateforme témoigne de leur passion pour offrir une expérience exceptionnelle aux utilisateurs. Suivez avec enthousiasme l'évolution de NewaRnet, portée par cette équipe dynamique et dévouée.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question16 === key) {
    let text = " NewaRnet brille par ses événements communautaires stimulants qui unissent ses membres dans un esprit de partage et de collaboration. Des discussions en ligne interactives aux webinaires éducatifs en passant par des concours créatifs, la plateforme offre une diversité d'événements visant à renforcer la communauté. Restez à l'affût des annonces officielles sur le site web, les blogs et les réseaux sociaux de NewaRnet pour découvrir les derniers événements communautaires passionnants. Ces occasions offrent non seulement des moments d'apprentissage, mais aussi une opportunité précieuse pour les membres de s'engager, de partager des idées et de participer à une communauté dynamique et créative.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question17 === key) {
    let text = "Contactez directement l'équipe de NewaRnet, explorez le code source s'il est disponible, participez aux événements communautaires, proposez des idées, suivez les directives de contribution, partagez vos compétences et restez informé pour contribuer efficacement à la communauté.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question18 === key) {
    let text = "Pour contacter le support de NewaRnet, veuillez consulter leur site web officiel où vous devriez trouver des informations de contact telles qu'une adresse e-mail, un formulaire de contact ou d'autres coordonnées. Vous pouvez également vérifier les réseaux sociaux de NewaRnet pour obtenir des informations sur la manière de contacter leur support.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question19 ===key) {
    let text = "NewaRnet utilise les couleurs panafricaines (rouge, jaune et vert) pour symboliser l'unité, la diversité culturelle, la fierté continentale et renforcer sa connexion avec la communauté.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question20 ===key) {
    let text = "Les couleurs rouge, verte et jaune sur NewaRnet symbolisent la passion et la détermination (rouge), la croissance et l'espoir (vert), ainsi que la lumière de la vérité et la richesse culturelle (jaune) dans le contexte panafricain.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question21 === key) {
    let text = "Les couleurs panafricaines sur NewaRnet symbolisent l'unité par la passion et la détermination (rouge), la diversité culturelle et la vérité (jaune), ainsi que la croissance et l'espoir collectifs (vert).";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question22 === key) {
    let text = "Les couleurs panafricaines sur NewaRnet incarnent l'unité en symbolisant la passion et la détermination (rouge), la richesse culturelle et la vérité (jaune), ainsi que la croissance et l'espoir collectifs (vert).";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question23 === key) {
    let text = "Les couleurs panafricaines sur NewaRnet, rouge pour la détermination, jaune pour la richesse culturelle et l'espoir, et vert pour la croissance, symbolisent l'unité en évoquant la force collective, la quête de vérité, la diversité, et l'aspiration à la prospérité.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question24 == key) {
    let text = "NewaRnet célèbre la diversité culturelle à travers les couleurs panafricaines en symbolisant la richesse des traditions individuelles, la reconnaissance des différentes cultures (jaune), et l'espoir partagé pour un avenir culturellement riche (vert).";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question25 === key) {
    let text = "NewaRnet s'adapte à toutes les nuances technologiques de notre époque, embrassant l'ensemble du spectre des appareils modernes. Que vous soyez un explorateur numérique sur votre smartphone, un visionnaire sur votre tablette, ou un innovateur sur votre ordinateur, NewaRnet tisse une expérience harmonieuse sur chaque écran, transformant chaque interaction en une aventure numérique inoubliable.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question26 === key) {
    let text = "Sur NewaRnet, partagez librement vos idées à travers des publications textuelles, des images visuelles captivantes, des vidéos inspirantes, des liens vers des articles pertinents, des annonces d'événements, et des documents informatifs. Exprimez-vous au travers d'une variété de contenus, en tissant une histoire visuelle et textuelle unique au sein de la communauté.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question27 === key) {
    let text = "Oui, NewaRnet propose des fonctionnalités de streaming vidéo. Votre équipe est en train de mettre en place ce système, ce qui devrait enrichir considérablement l'expérience des utilisateurs sur la plateforme. C'est une excellente initiative pour favoriser l'interaction et le partage de contenu visuel en temps réel.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question28 === key) {
    let text = "Le système de notifications sur NewaRnet fonctionne en alertant les utilisateurs des activités pertinentes, comme les mentions, les commentaires, les réponses, et les interactions. Vous pouvez personnaliser vos préférences de notification dans les paramètres du compte pour rester informé en temps réel des actions importantes au sein de la plateforme.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question29 === key) {
    let text = "Oui, NewaRnet propose une fonction de recherche avancée qui permet aux utilisateurs de préciser leurs requêtes en utilisant des filtres et des critères avancés pour trouver des contenus spécifiques au sein de la plateforme.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question30 === key) {
    let text = "Oui, sur NewaRnet, vous pouvez personnaliser votre fil d'actualité en utilisant des options de filtrage et de personnalisation. Cela peut inclure la possibilité de suivre des sujets spécifiques, des utilisateurs, ou des catégories de contenu. Vous pourriez également avoir des options pour ajuster les préférences de notification liées à votre fil d'actualité, vous permettant ainsi de recevoir des mises à jour pertinentes en fonction de vos intérêts. Pour des détails précis sur les options de personnalisation du fil d'actualité sur NewaRnet, je vous recommande de consulter les paramètres de votre compte ou la documentation officielle de la plateforme.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question31 === key) {
    let text = "Pour signaler du contenu inapproprié sur NewaRnet, repérez le contenu, utilisez les options de signalisation près du contenu, sélectionnez le type de problème, fournissez des détails, et envoyez le signalement conformément aux instructions de la plateforme.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question32 === key) {
    let text = "Oui, NewaRnet propose des outils de modération de communauté pour aider à maintenir un environnement en ligne sûr et respectueux. Ces outils peuvent inclure des fonctionnalités telles que la gestion des rapports de contenu inapproprié, des options de blocage ou de signalement d'utilisateurs, et d'autres mécanismes permettant aux administrateurs de la communauté de prendre des mesures appropriées en cas de violation des règles. Pour des détails spécifiques sur les outils de modération de communauté sur NewaRnet, je vous recommande de consulter la documentation officielle de la plateforme ou de contacter le support technique.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question33 === key) {
    let text = "Oui, sur NewaRnet, vous pouvez planifier des événements.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question34 === key) {
    let text = "Le fonctionnement spécifique du système de recommandation d'amis sur NewaRnet peut varier, mais généralement, il s'appuie sur des algorithmes qui analysent les activités, les intérêts et les connexions des utilisateurs pour suggérer des amitiés potentielles. Cela peut inclure la prise en compte des personnes avec lesquelles vous partagez des interactions fréquentes, des centres d'intérêt similaires, ou des connexions mutuelles. Pour des détails précis sur le fonctionnement du système de recommandation d'amis sur NewaRnet, je vous suggère de consulter la documentation officielle de la plateforme ou les paramètres associés à la gestion des amis. Ces informations peuvent fournir des insights spécifiques sur la manière dont NewaRnet gère ses recommandations d'amis.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question35 === key) {
    let text = "Oui, en général, les plateformes comme NewaRnet ont des politiques de protection des données pour garantir la confidentialité et la sécurité des informations personnelles de leurs utilisateurs. Ces politiques détaillent souvent la manière dont les données sont collectées, stockées, utilisées et partagées. Pour obtenir des informations spécifiques sur la politique de protection des données de NewaRnet, je vous recommande de consulter la politique de confidentialité officielle de la plateforme. Cette documentation devrait fournir des détails précis sur la manière dont NewaRnet gère les données personnelles de ses utilisateurs. Vous pouvez généralement trouver un lien vers la politique de confidentialité dans les paramètres de votre compte ou sur le site web officiel de la plateforme.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question36 === key) {
    let text = "Les options de personnalisation des profils sur NewaRnet comprennent la photo de profil, les informations personnelles, les centres d'intérêt, le statut, les liens, les paramètres de confidentialité, et éventuellement des thèmes ou des couleurs.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question37 === key) {
    let text = "La limite de caractères pour les publications sur NewaRnet peut varier en fonction des paramètres spécifiques de la plateforme. Généralement, les réseaux sociaux et les plateformes de partage de contenu imposent des limites pour assurer la lisibilité et l'expérience utilisateur. Pour connaître la limite exacte de caractères sur NewaRnet, je vous recommande de consulter les directives spécifiques de la plateforme dans sa documentation officielle ou dans les sections d'aide. Vous devriez pouvoir trouver cette information dans les règles de publication ou les paramètres de texte lors de la création d'une publication.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question38 === key) {
    let text = "Le système de trending topics sur NewaRnet analyse les interactions des utilisateurs, identifie les sujets populaires générant un fort engagement, les met en avant fréquemment dans la section des trending topics, et peut personnaliser ces tendances en fonction des intérêts individuels des utilisateurs.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question39 === key) {
    let text = "Actuellement, les fonctionnalités de traduction ne sont pas disponibles sur NewaRnet, mais l'équipe travaille sur leur intégration.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question40 === key) {
    let text = "Merci de nous avoir contactés à ce sujet. Nous en discuterons plus tard. Merci.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question41 === key) {
    let text = "Actuellement, je ne suis pas disponible. Merci de comprendre.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question42 === key) {
    let text = "J'ai plusieurs demandes de la part des Newarnautes, mais je ne suis pas disponible pour vous répondre actuellement. Peut-être plus tard. Je dois répondre aux autres Newarnautes. Merci de votre compréhension.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question43 === key) {
    let text = "Actuellement, je ne suis pas disponible. Merci de comprendre.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }else if (question44 === key) {
    let text = "J'ai plusieurs demandes de la part des Newarnautes, mais je ne suis pas disponible pour vous répondre actuellement. Peut-être plus tard. Je dois répondre aux autres Newarnautes. Merci de votre compréhension.";
    var elementsResponse = document.querySelectorAll(".response");
    var dernierElementResponse = elementsResponse[elementsResponse.length - 1];
    CreateResponse(dernierElementResponse, text); 
  }
}

function CreateResponse(containeur, text) {
  var duration = 50;
  var index = 0;
  var intervalId = setInterval(function() {
      var valeur = text.charAt(index);
      if (valeur !== '') {
          index++;
          containeur.textContent += valeur;
      } else {
          clearInterval(intervalId);
      }
  }, duration);
}

