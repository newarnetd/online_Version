<?php
include("otherPrincipale.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") 
{
    if (!empty($_POST['Profession'])) {
        $sennEplazaNotif = encrypt(nettoyerDonnee($_POST['vue_eplaza']), $key);
        $get_post = encrypt(nettoyerDonnee($_POST['vues']), $key);
        $get_profile = encrypt(nettoyerDonnee($_POST['profile']), $key);
        $get_online = encrypt(nettoyerDonnee($_POST['online']), $key);
        $statutMatrimonial = encrypt(nettoyerDonnee($_POST['statutMatrimonial']), $key);
        $email = encrypt(nettoyerDonnee($_POST['email']), $key);
        $bio = encrypt(nettoyerDonnee($_POST['bio']), $key);
        $Profession = encrypt(nettoyerDonnee($_POST['Profession']), $key);
        $nom = ucfirst($_POST['nom']);
        $prenom = ucfirst($_POST['prenom']);
        $nom = encrypt(nettoyerDonnee($nom), $key);
        $prenom = encrypt(nettoyerDonnee($prenom), $key);
        global $DB;
        global $my_id;
        $query = "UPDATE users SET nom = ?, email = ?, prenom = ?, not_ePlaza = ?, voir_profile = ?, statut_marital = ?, bio = ?, profession = ?, seenOnline = ?, seenPost = ? WHERE userid = ? LIMIT 1";
        $params = [$nom, $email, $prenom, $sennEplazaNotif, $get_profile, $statutMatrimonial, $bio, $Profession, $get_online, $get_post,$my_id];
        $DB->save($query, $params);
        echo "true";
   }else{
    echo"Avant tout, dites-nous votre profession quotidienne.";
   }
}
?>
