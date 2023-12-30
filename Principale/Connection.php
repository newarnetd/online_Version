<?php
session_start();
include("../connectionsBD/connexion.php");
include("../class/Message.php");
include("../class/post.php");
include("../class/user.php");
include("../functions/functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    if (!empty($_POST['Info_one']) && !empty($_POST['Info_two'])) {

      
        $conn = new mysqli($servername, $username, $password, $database);
        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }
    
        $query = "SELECT userid, email, password, preference FROM users";
    
        $isUserFound = false;
    
        if ($stmt = $conn->prepare($query)) {
    
            $stmt->execute();
    
            $result = $stmt->get_result();
    
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $decryptedEmail = decrypt($row['email'], $key);
                    $decryptedPassword = decrypt($row['password'], $key);
    
                    $email = nettoyerDonnee($_POST['Info_one']);
                    $password = nettoyerDonnee($_POST['Info_two']);
    
                    if ($decryptedEmail === $email && $decryptedPassword === $password) {
                        $isUserFound = true;
                        $_SESSION['ownerConnected'] = encrypt($row['userid'],$key);
                        $_SESSION['preference'] = encrypt($row['preference'],$key);
                        $_SESSION['temps_de_connexion'] = time();
                        break;
                    }
                }
            }
    
            $stmt->close();
        } else {
            echo "Erreur lors de la préparation de la requête : " . $conn->error;
        }
        $conn->close();
    
        if ($isUserFound) {
            echo "true";
            die;
        } else {
            echo "Pas de correspondance trouvée.";
            die;
        }
    } else {
        echo "Merci de compléter tous les champs.";
        die;
    }
    
}
?>