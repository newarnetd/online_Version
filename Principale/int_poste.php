<?php
$nom_decrypte = decrypt($OWNER['nom'], $key);
$prenom_decrypte = decrypt($OWNER['prenom'], $key);
$sexe = $OWNER['sexe'];
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($OWNER['ver_profile'] !== 0) ? decrypt($OWNER['profile'],$key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$suivi = $OWNER['suivi'];
$dawload = $all_droits = false;
$idpost = $data_poste['postid'];
$linkComment = "commentaire.php?%i= " .$idpost;
global $my_id;
if($suivi !== 0)
{
  $suivi = $suivi ."amis";
}else{
  $suivi = "@" .$prenom_decrypte;
}
$date = calcTemps(decrypt($data_poste['date'],$key));
if($data_poste['has_image'] !== 0)
{
  $dawload = true;
  $Image = decrypt($data_poste['image'],$key);
}

if($data_poste['userid'] === $my_id)
{
  $all_droits = true;
}
$likes_count = $data_poste['likes'];
?>
<div class="carterPoste">
                      <div class="blocHead">
                        <div class="left_userpost">
                          <div class="cartePhoto">
                            <img src="<?php echo $profile?>" class="userphoto" />
                          </div>
                          <div class="nameUser">
                            <h3><?php echo $nom_comple_friends ?></h3>
                            <small><?php echo $date ?>.<i class="fa-solid fa-earth-africa"></i
                            ></small>
                          </div>
                        </div>
                        <div class="rightmenu" onclick="OptionMorePost(event)">
                          <div class="iconDiv"><i class="fa-solid fa-ellipsis"></i></div>
                        </div>
                      </div>
                      <div class="corpPost">
                        <?=  $dawload ? "<img src='$Image' class='imagePost'/>" : ''?>
                        <div class="menuOptionPartager shareFiles">
                          <div class="menuchoix"onclick="partager('link', 'NewaRnet', 'okay')"><i class="fa-solid fa-share-nodes"></i><span>Partager sur d'autres réseaux sociaux</span></div>
                          <div class="menuchoix"><i class="fa-solid fa-share-from-square"></i> <span>Partager sur NewaRnet</span></div>
                          <div class="menuchoix"onclick="GroupeFriendsShare(event)"><i class="fa-solid fa-retweet"></i> <span>Partager comme message</span></div>
                          <div class="menuchoix"onclick="GroupeFriendsShare(event)"> <i class="fa-solid fa-share"></i> <span>Partager dans un groupe</span></div>
                      </div>
                      <!-- moreOptions -->
                      <div class="menuOptionPartager moreoption">
                        <?= $dawload ? '<div class="menuchoix"><i class="fa-solid fa-download"></i><span>Télécharger</span></div>' : ''; ?>
                        <?= $all_droits ? '<div class="menuchoix"><i class="fa-solid fa-trash"></i> <span>Supprimer</span></div>' : ''; ?>
                        <?= $all_droits ? '<div class="menuchoix"><i class="fa-solid fa-pen-to-square"></i> <span>Modifier</span></div>' : ''; ?>
                    </div>                    
                      <!-- Friends et Groupes Sharing -->
                      <div class="menuOptionPartager GroupeFrindsSelect">
                        <div class="InputDouble">
                          <div class="BoutonsAction" onclick="ReturnShare(event)"><i class="fa-solid fa-arrow-left"></i>Retourner</div>
                          <div class="BoutonsAction">Partager<i class="fa-solid fa-share"></i></div>
                        </div>
                        <div class="SearchMessage creationGroupe">
                          <i class="fa-solid fa-magnifying-glass"></i><input type="search" name="" id="" placeholder="Trouver un(e) Ami(e)">
                        </div>
                        <div class="conteneuramis">
                          <div class="photoamis">
                            <img src="../images/jobIcon.jpg"width="100%"height="100%"/></div>
                          <div class="nomamis">
                            <h3>arsene cirhuza</h3>
                            <p><small>86 ami(e)s en commun </small></p>
                          </div>
                          <div class="iconeamis"><input type="checkbox" name="" id=""onchange="VerificationChecked(event)"></div>
                      </div>
                      </div>
                      <!-- Friends et Groupes Sharing -->
                      </div>
                      <div class="bottomIocnsEmotion">
                        <div class="emotionIcons"y="<?php echo $idpost?>" onclick="likePost(event)">
                        <i class="fa-solid fa-thumbs-up"></i><span class="number"><?php echo ($likes_count ? $likes_count : ""); ?></span>
                        </div>
                        <a class="emotionIcons" href="<?php echo $linkComment?>">
                          <i class="fa-solid fa-comments"></i><span class="number"></span>
                        </a>
                        <div class="emotionIcons share" href="y=<?php echo $idpost?>" onclick="sharePost(event)">
                          <i class="fa-solid fa-share"></i>
                          <span class="number"></span>
                        </div>
                      </div>
                    </div>