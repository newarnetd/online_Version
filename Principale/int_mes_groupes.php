<?php
$nom = decrypt($dataGroupe['nom'], $key);
$nom = ucfirst($nom);
$membres = json_decode($dataGroupe['membres'], true);
$NumberMembres = count($membres);
$link =base64_encode($ROW['groupe']);
$type = base64_encode("groupe");
$profile = decrypt($dataGroupe['profil'], $key);
$link = "message.php?y=$type&x=$link"; 
?>
<a href="<?php echo $link ?>" class="voirgroupe">
  <div class="photoamis">
    <img src="<?php echo $profile?>" style="width=100%,height:100%;border-radius:50%"/>
  </div>
  <div class="nomamis">
    <h3><?php echo $nom ?></h3>
    <p><small><?php echo $NumberMembres ?> <?php echo ($NumberMembres === 1) ? 'Membre' : 'Membres'; ?></small></p>
  </div>
  <div class="iconeamis"></div>
  <!-- <div class="iconeamis group">12</div> -->
</a>
