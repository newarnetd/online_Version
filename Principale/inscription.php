<?php
session_start();
include("../connectionsBD/connexion.php");
include("../class/Message.php");
include("../class/post.php");
include("../class/user.php");
include("../functions/functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    $query = "SELECT email, tel FROM users WHERE email = ? OR tel = ?";

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("ss", $email, $tel);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $decryptedEmail = decrypt($row['email'], $key);
            $decryptedTel = decrypt($row['tel'], $key);

            if ($decryptedEmail === $email) {
                $stmt->close();
                $conn->close();
                echo "L'email est déjà enregistré.";
                die;
            } elseif ($decryptedTel === $tel) {
                $stmt->close();
                $conn->close();
                echo "Ce numéro de téléphone est déjà enregistré.";
                die;
            }
        }
        $stmt->close();
    } else {
        die("Erreur lors de la préparation de la requête : " . $conn->error);
    }

    $conn->close();
    $DB = new Database();
    $nom = encrypt(nettoyerDonnee(ucfirst($_POST['nom'])), $key);
    $prenom = encrypt(nettoyerDonnee(ucfirst($_POST['prenom'])), $key);
    $numero = encrypt(nettoyerDonnee($_POST['tel']), $key);
    $password = encrypt(nettoyerDonnee($_POST['password']), $key);
    $jour = encrypt(nettoyerDonnee($_POST['jour']), $key);
    $email = encrypt(nettoyerDonnee($_POST['email']), $key);
    $mois = encrypt(nettoyerDonnee($_POST['mois']), $key);
    $annee = encrypt(nettoyerDonnee($_POST['annee']), $key);
    $centre_interet = encrypt(nettoyerDonnee($_POST['centre_interet']), $key);
    $genre = encrypt(nettoyerDonnee($_POST['genre']), $key);
    $userid = create_userid();
    $dateActuelle = encrypt(date("Y-m-d H:i:s"), $key);
    $query = "INSERT INTO users (userid, nom, prenom, email, password, tel, sexe, jour, mois, annee, preference, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $DB->save($query, [$userid, $nom, $prenom, $email, $password, $numero, $genre, $jour, $mois, $annee, $centre_interet, $dateActuelle]);
    $nom = nettoyerDonnee(ucfirst($_POST['nom']));
    $prenom = nettoyerDonnee(ucfirst($_POST['prenom']));
    $userid = encrypt($userid, $key);
    $query = "INSERT INTO rechercher (userid, nom, prenom) VALUES (?, ?, ?)";
    $data = $DB->save($query, [$userid, $nom, $prenom]);

    echo $data ? "true" : "false";
}
?>
