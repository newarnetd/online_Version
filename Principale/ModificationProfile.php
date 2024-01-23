<?php
include("otherPrincipale.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $ver_profile = 0;
    $ver_couverture = 0;
    define('MAX_IMAGE_SIZE', 10 * 1024 * 1024);

    if (isset($_FILES['ProfilePhoto']['name']) && !empty($_FILES['ProfilePhoto']['name'])) {
        if ($_FILES['ProfilePhoto']['size'] > MAX_IMAGE_SIZE) {
            echo "La taille de l'image ne doit pas dépasser 5MB.";
        } else {
            $folder = "../NewaRnautes/Profile/" . decrypt($_SESSION['ownerConnected'], $key) . "/";
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
                file_put_contents($folder . "index.php", "");
            }

            global $image_class;
            $image_class = new Image();
            $myimage = $folder . $image_class->generate_filename(15) . ".jpg";
            move_uploaded_file($_FILES['ProfilePhoto']['tmp_name'], $myimage);
            $image_class->resize_image($myimage, $myimage, 512, 512);
            $ver_profile = 1;
        }
    } elseif (isset($_FILES['couvertureImage']['name']) && !empty($_FILES['couvertureImage']['name'])) {
        if ($_FILES['couvertureImage']['size'] > MAX_IMAGE_SIZE) {
            echo "La taille de l'image ne doit pas dépasser 5MB.";
        } else {
            $folder = "../NewaRnautes/Profile/" . decrypt($_SESSION['ownerConnected'], $key) . "/";
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
                file_put_contents($folder . "index.php", "");
            }

            global $image_class;
            $image_class = new Image();
            $myimage = $folder . $image_class->generate_filename(15) . ".jpg";
            move_uploaded_file($_FILES['couvertureImage']['tmp_name'], $myimage);
            $image_class->resize_image($myimage, $myimage, 512, 512);
            $ver_couverture = 1;
        }
    }

    if ($ver_profile > 0 || $ver_couverture > 0) {
        $myimage = encrypt($myimage, $key);

        if ($ver_profile > 0) {
            $query = "UPDATE users SET ver_profile = ?, profile = ? WHERE userid = ? LIMIT 1";
            $data = $DB->save($query, [$ver_profile, $myimage, $my_id]);

            $has_image = 1;
            $poste = encrypt("récemment mis à jour sa photo de profil",$key);
            $postid = create_userid();
            $integrite = encrypt(nettoyerDonnee("À tous les NewaRnautes"),$key);
            $date = date("Y-m-d H:i:s");
            $query = "INSERT INTO posts (userid,postid,message_poste,image,integrite,date,has_image) value(?,?,?,?,?,?,?)";
            $data = $DB->save($query,[$my_id,$postid,$poste,$myimage,$integrite,$date,$has_image]);
            echo "true";
        }

        if ($ver_couverture > 0) {
            $query = "UPDATE users SET ver_couverture = ?, couverture = ? WHERE userid = ? LIMIT 1";
            $data = $DB->save($query, [$ver_couverture, $myimage, $my_id]);
            $has_image = 1;
            $poste = encrypt("récemment mis à jour sa photo de profilcouverture");
            $integrite = encrypt(nettoyerDonnee("À tous les NewaRnautes"),$key);
            $date = date("Y-m-d H:i:s");
            $query = "INSERT INTO posts (userid,postid,message_poste,image,integrite,date,has_image) value(?,?,?,?,?,?,?)";
            $data = $DB->save($query,[$my_id,$postid,$poste,$myimage,$integrite,$date,$has_image]);
            echo "true";
        }
    }
}
?>
