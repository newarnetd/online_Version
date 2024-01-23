<?php
include("otherPrincipale.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") 
{
    $query = "SELECT * FROM boutique WHERE ownerid  = ? LIMIT 1";
    $data = $DB->read($query, [$my_id]);
    if (!$data)
{ 
    define('MAX_IMAGE_SIZE', 10 * 1024 * 1024);
    if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) 
    {
         if ($_FILES['image']['size'] > MAX_IMAGE_SIZE) 
         {
             echo "La taille de l'image ne doit pas dépasser 5MB.";
         } else {   
             $folder = "../NewaRnautes/BoutiqueImagesProfiles/" . decrypt($_SESSION['ownerConnected'],$key) . "/";
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
             $imageposted = true;
            }
        }else{
            echo"Sélectionner une image";
        }
        if($imageposted){
            global $my_id;
            $image = encrypt($myimage,$key);
            $boutiqueId = encrypt(create_userid(),$key);
            $nom = encrypt(nettoyerDonnee(ucfirst($_POST['nomBoutique'])),$key);
            $type = encrypt(nettoyerDonnee($_POST['type']),$key);
            $date = encrypt(date("Y-m-d H:i:s"),$key);
            $query = "INSERT INTO boutique (boutiqueId,ownerid,nom,type,date,profile) value(?,?,?,?,?,?)";
            $data = $DB->save($query,[$boutiqueId,$my_id,$nom,$type,$date,$image]);
            if($data)
            {
                echo "true";
            }
        }

    }else{
        echo"vous etes autorise a avoir uniqument une seule boutique pour l'instant pas plusier";
    }
}
?>