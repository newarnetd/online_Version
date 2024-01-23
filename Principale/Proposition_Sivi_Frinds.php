<?php
$nom_decrypte = decrypt($USERS_ROW['nom'], $key);
$prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'],$key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$couverture = ($USERS_ROW['ver_couverture'] !== 0) ? decrypt($USERS_ROW['couverture'],$key) : '../images/placeholder.jpg';
$suivi = $USERS_ROW['suivi'];
$nom_comple_friends = limiterChaine($nom_comple_friends,13);
if($suivi != 0)
{
  $suivi = $suivi ." "."suivi(s)";
}else{
  $suivi = "@" .$prenom_decrypte;
}
$Friendid = encrypt($USERS_ROW['userid'],$key);
$link = "Profile.php?&&y=". $Friendid;
?>
<div class="swiper-slide profilePhoto" style="background-image: url('<?php echo $profile ?>') !important;background-repeat: no-repeat;cursor:pointer;background-size: cover;background-position: 100%;">
                            <div class="headerSide">
                              <div class="divText">
                                <div class="identiteUse">
                                    <a href="<?php echo $link ?>" class="photoamis">
                                          <img src="<?php echo $couverture ?>"/>
                                        </a>
                                        <a href="<?php echo $link ?>" class="nomamis">
                                          <h3><?php echo $nom_comple_friends ?></h3>
                                          <p><small>NewaRnaute </small></p>
                                        </a>
                                    </div>
                                    <span owner="<?php echo $Friendid ?>"onclick="OtherFontionAdd(event)">Ajouter</span>
                                </div>
                              </div>
                            </div>