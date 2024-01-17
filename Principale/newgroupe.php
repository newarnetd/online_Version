<?php
include("otherPrincipale.php");

function createGroup($DB, $my_id, $userId, $key)
{
    $name = nettoyerNomFichier($_POST['name_groupe']);
    $groupe_id = create_userid();
    $date = encrypt(date("Y-m-d H:i:s"), $key);
    $query = "INSERT INTO Mesgroupes (groupe,userid,owner,date,nom) VALUES (?,?,?,?,?)";
    $DB->save($query, [$groupe_id, $userId, $my_id, $date,$name]);
    return $groupe_id;
}

function uploadImage($DB, $my_id, $key)
{
    define('MAX_IMAGE_SIZE', 10 * 1024 * 1024);

    if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
        if ($_FILES['image']['size'] > MAX_IMAGE_SIZE) {
            echo "La taille de l'image ne doit pas dépasser 5MB.";
            return false;
        }

        $folder = "../NewaRnautes/Profile_Groupes/" . decrypt($_SESSION['ownerConnected'], $key) . "/";

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

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $my_id, $key;
    if (isset($_POST['membre']) && is_array($_POST['membre'])) {
        $selectedMembers = $_POST['membre'];
        $members = [];

        foreach ($selectedMembers as $userId) {
            $groupe_id = createGroup($DB, $my_id, $userId, $key);
            $members[] = ['userid' => $userId];
        }

        $myimage = uploadImage($DB, $my_id, $key);
        $name = encrypt(nettoyerNomFichier($_POST['name_groupe']), $key);
        $date = encrypt(date("Y-m-d H:i:s"), $key);
        $postimage = encrypt($myimage, $key);
        $admins = ['userid' => $my_id];
        $members[] = ['userid' => $my_id];
        $query = "INSERT INTO groupes (groupid, nom, membres, admins, profil, owner, date) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $result = $DB->save($query, [$groupe_id, $name, json_encode($members), json_encode($admins), $postimage, $my_id, $date]);

        if ($result) {
            echo "true";
        }
    }
}
?>
