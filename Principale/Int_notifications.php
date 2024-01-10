<?php
$nom_decrypte = decrypt($USERS_ROW['nom'], $key);
$prenom_decrypte = decrypt($USERS_ROW['prenom'], $key);
$sexe = decrypt($USERS_ROW['sexe'], $key);
$nom_comple_friends = $nom_decrypte . ' ' . $prenom_decrypte;
$profile = ($USERS_ROW['ver_profile'] !== 0) ? decrypt($USERS_ROW['profile'],$key) : ($sexe === "Femme" ? '../images/femme.jpg' : '../images/homme.jpg');
$nom_comple_friends = limiterChaine($nom_comple_friends,20);
$Friendid = encrypt($USERS_ROW['userid'],$key);
$date = decrypt($data_notif['date'],$key);
$type = $data_notif['type'];
$seen = $data_notif['seen'];
$id_notid = decrypt($data_notif['notif_id'],$key);
$emmeteur = decrypt($data_notif['userid'],$key);
$contentid = $data_notif['contentid'];
?>
<div class="cartecommentaire notification">
              <div class="imagePhoto">
                  <div class="photoEplaza"> <img src="<?php echo $profile ?>" alt=""></div>
                  <div class="DetailArtcle">
                    <h3><?php echo $nom_comple_friends ?></h3>
                    <small>ily 2j</small>
                  </div>
                </div>
                <p>Bonjour c'est correcter</p>
            </div>