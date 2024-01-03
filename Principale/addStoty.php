<?php
include("otherPrincipale.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") 
{
    $query = "SELECT * FROM story WHERE userid = ? LIMIT 1";
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
     }else{
         echo"Sélectionner une image";
     }
 
     if($imageposted)
     {
         $status =  $status;
         global $DB;
         global $my_id;
         $postimage = encrypt($myimage,$key);
         $postid = encrypt(create_userid(),$key);
         $temps_defini = encrypt(nettoyerDonnee($_POST['temps']),$key);
         $date = encrypt(date("Y-m-d H:i:s"),$key);
         $query = "INSERT INTO story (userid,postid,image,date,temps_defini,status) value(?,?,?,?,?,?)";
         $data = $DB->save($query,[$my_id,$postid,$postimage,$date,$temps_defini,$status]);
         $type = "story";
         $recepteur = "";
         notification($recepteur,$my_id,$type);
         echo "true";
         
     }
}else{
    echo"Suite à notre insuffisance de stockage limité, NewaRnet vous accorde l'accès à poster uniquement une photo.";
}
  
}
?>