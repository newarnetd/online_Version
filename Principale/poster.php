<?php
include("otherPrincipale.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") 
{
   define('MAX_IMAGE_SIZE', 10 * 1024 * 1024); // 5MB
   define('MAX_VIDEO_SIZE', 50 * 1024 * 1024); // 15MB
   define('MAX_DOC_SIZE', 50 * 1024 * 1024); // 10MB

   $img_nb = false;
   $vid_nb = false;
   $doc_nb = false;
   $vidFileName = false;
   $docFileName = false;
   $imgFileName = false;
   $imageposted = false;
   $videposted = false;
   $documentposted = false;
   $nowpost = false;

   if (isset($_FILES['document']['name']) && !empty($_FILES['document']['name'])) {
       if ($_FILES['document']['size'] > MAX_DOC_SIZE) {
           echo "La taille du document ne doit pas dépasser 10MB.<br>";
       } else {
        $folder = "../NewaRnautes/documents/" . decrypt($_SESSION['ownerConnected'],$key) . "/";
        if(!file_exists($folder))
        {
            mkdir($folder,0777,true);
            file_put_contents($folder . "index.php", "");
        }
        global $image_class;
        $image_class = new Image();
        $mydocument = $folder . $image_class->generate_filename(15) . ".PDF";
        move_uploaded_file($_FILES['document']['tmp_name'], $mydocument);
        $has_document = 1;
       }
   }

   if (isset($_FILES['video']['name']) && !empty($_FILES['video']['name'])) {
       if ($_FILES['video']['size'] > MAX_VIDEO_SIZE) {
           echo "La taille de la vidéo ne doit pas dépasser 15MB.";
       } else {
        $folder = "../NewaRnautes/videos/" . decrypt($_SESSION['ownerConnected'],$key) . "/";
        if(!file_exists($folder))
        {
            mkdir($folder,0777,true);
            file_put_contents($folder . "index.php", "");
        }
        global $image_class;
        $image_class = new Image();
        $myvideo = $folder . $image_class->generate_filename(15) . ".MP4";
        move_uploaded_file($_FILES['image']['tmp_name'], $myvideo);
        $has_video = 1;
       }
   }
   
   if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
    if ($_FILES['image']['size'] > MAX_IMAGE_SIZE) {
        echo "La taille de l'image ne doit pas dépasser 5MB.";
    } else {   
        $folder = "../NewaRnautes/Images/" . decrypt($_SESSION['ownerConnected'],$key) . "/";
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
        $has_image = 1;
    }
}

   

}
?>
