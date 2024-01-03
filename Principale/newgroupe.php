<?php
include("otherPrincipale.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") 
{
   define('MAX_IMAGE_SIZE', 10 * 1024 * 1024);
   if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) 
   {
        if ($_FILES['image']['size'] > MAX_IMAGE_SIZE) 
        {
            echo "La taille de l'image ne doit pas dépasser 5MB.";
        } else {   
            $folder = "../NewaRnautes/Story/" . decrypt($_SESSION['ownerConnected'],$key) . "/";
            if(!file_exists($folder))
            {
                mkdir($folder,0777,true);
                file_put_contents($folder . "index.php", "");
            }
            global $image_class;
            $image_class = new Image();
            $myimage = $folder . $image_class->generate_filename(15) . ".jpg";
            move_uploaded_file($_FILES['image']['tmp_name'], $myimage);
            $image_class->resize_image($myimage,$myimage,512,512);
            $status = 1;
            $imageposted = true;
        }
    }

    if($imageposted)
    {
        $status =  $status;
        global $DB;
        global $my_id;
        $postimage = encrypt($myimage,$key);
        $groupid = encrypt(create_userid(),$key);
        $temps_defini = encrypt(nettoyerDonnee($_POST['temps']),$key);
        $integrite = encrypt(nettoyerDonnee($_POST['integrite']),$key);
        $date = encrypt(date("Y-m-d H:i:s"),$key);
        $query = "INSERT INTO posts (groupid,nom,membres) value(?,?,?,?,?,?)";
        $data = $DB->save($query,[$my_id,$groupid,$postimage,$date,$temps_defini,$status]);
        echo "true";
        
    }
}
?>