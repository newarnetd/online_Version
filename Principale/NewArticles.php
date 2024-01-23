<?php
include("otherPrincipale.php");
function uploadImage($DB, $my_id, $key)
{
    define('MAX_IMAGE_SIZE', 10 * 1024 * 1024);

    if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
        if ($_FILES['image']['size'] > MAX_IMAGE_SIZE) {
            echo "La taille de l'image ne doit pas dépasser 10MB."; 
            return false;
        }

        $folder = "../NewaRnautes/eplaza/" . decrypt($_SESSION['ownerConnected'], $key) . "/";

        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
            file_put_contents($folder . "index.php", "");
        }

        $image_class = new Image();
        $myimage = $folder . $image_class->generate_filename(15) . ".jpg";
        move_uploaded_file($_FILES['image']['tmp_name'], $myimage);
        $image_class->resize_image($myimage, $myimage, 512, 512);

        return $myimage;
    }

    return false;
}

if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['prix']) && isset($_POST['nom']) && isset($_POST['description']) && isset($_FILES['image'])) {
    global $my_id, $key;
    
    $myimage = uploadImage($DB, $my_id, $key);

    if ($myimage !== false) {
        $nom = nettoyerNomFichier($_POST['nom']);
        $prix = nettoyerNomFichier($_POST['prix']);
        $desc = nettoyerNomFichier($_POST['description']);
        $boutiqueidDate = detailBoutiue($my_id);

        if ($boutiqueidDate) {
            $boutiqueId = $boutiqueidDate['boutiqueId'];
            $date = date("Y-m-d H:i:s");
            $Articles_id = create_userid();
            $query = "INSERT INTO articles (boutiqueid, nom, prix, description, image, date, artcileid,owner) VALUES (?, ?, ?, ?, ?, ?, ?,?)";
            $result = $DB->save($query, [$boutiqueId, $nom, $prix, $desc, $myimage, $date, $Articles_id,$my_id]);

            if ($result) {
                echo "true";
            }
        } else {
            echo "Vous devez avoir une boutique. Vos produits de promotion doivent être stockés.";
        }
    } else {
        echo "Assurez-vous de remplir tous les champs et de sélectionner une image.";
    }
} else {
    echo "Requête invalide.";
}
?>
