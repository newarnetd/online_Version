<?php
session_start();
include("../connectionsBD/connexion.php");
include("../class/Message.php");
include("../class/post.php");
include("../class/user.php");
include("../functions/functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
        $query = "SELECT email, tel FROM users";
        $isEmailFound = false;
        $isTelFound = false;
        if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }
        if ($stmt = $conn->prepare($query)) {
            $stmt->execute();
            $result = $stmt->get_result();
    
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $decryptedEmail = decrypt($row['email'], $key);
                    $decryptedTel = decrypt($row['tel'], $key);
    
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
    
                    if ($decryptedEmail === $email) {
                        $isEmailFound = true;
                        break;
                    } elseif ($decryptedTel === $tel) {
                        $isTelFound = true;
                        break;
                    }
                }
            }
    
            $stmt->close();
        } else {
            echo "Erreur lors de la préparation de la requête : " . $conn->error;
        }
    
        $conn->close();
    
        if ($isEmailFound) {
            echo "L'email est déjà enregistré.";
            die;
        } elseif ($isTelFound) {
            echo "Le numéro de téléphone est déjà enregistré.";
            die;
        } else {
            
            $DB = new Database();
            $nom =  encrypt(nettoyerDonnee(ucfirst($_POST['nom'])),$key);
            $prenom = encrypt(nettoyerDonnee(ucfirst($_POST['prenom'])),$key);
            $numero =  encrypt(nettoyerDonnee($_POST['tel']),$key);
            $password = encrypt(nettoyerDonnee($_POST['password']),$key);
            $jour = encrypt(nettoyerDonnee($_POST['jour']),$key);
            $email = encrypt(nettoyerDonnee($_POST['email']),$key);
            $mois = encrypt(nettoyerDonnee($_POST['mois']),$key);
            $annee=  encrypt(nettoyerDonnee($_POST['annee']),$key);
            $centre_interet=  encrypt(nettoyerDonnee($_POST['centre_interet']),$key);
            $genre = encrypt(nettoyerDonnee($_POST['genre']),$key);
            $userid = create_userid();
            $dateActuelle = encrypt(date("Y-m-d H:i:s"),$key);
            $BD = new Database();
            $query = "INSERT INTO users (userid,nom,prenom,email,password,tel,sexe,jour,mois,annee,preference,date) value(?,?,?,?,?,?,?,?,?,?,?,?)";
            $data = $BD->save($query,[$userid,$nom,$prenom,$email,$password,$numero,$genre,$jour,$mois,$annee,$centre_interet,$dateActuelle]);
            if($data)
            {
                echo "true";
            }else{
                echo "false";
            }
        }
}
?>
