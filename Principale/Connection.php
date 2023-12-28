<?php
include("otherPrincipale.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty(trim($_POST['Info_one'])) && !empty(trim($_POST['Info_two']))) {
        $email = nettoyerDonnee($_POST['Info_one']);
        $password = nettoyerDonnee($_POST['Info_two']);
        $DB = new Database();
        $query = "SELECT * FROM  users";
        $data = $DB->read($query);
        print_r($data);
    } else {
        echo "Veuillez prendre le temps de vérifier si au moins l'un de vos champs est vide.";
    }
}
?>
