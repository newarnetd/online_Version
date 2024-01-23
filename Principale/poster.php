<?php
include("otherPrincipale.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") 
{
   define('MAX_IMAGE_SIZE', 10 * 1024 * 1024);
   define('MAX_VIDEO_SIZE', 50 * 1024 * 1024);
   define('MAX_DOC_SIZE', 50 * 1024 * 1024);

   $img_nb = false;
   $vid_nb = false;
   $doc_nb = false;
   $vidFileName = false;
   $docFileName = false;
   $imgFileName = false;
   $imageposted = false;
   $videposted = false;
   $documentposted = false;
   $messageposted = false;
    if( !empty($_POST['poste']))
    {
        $postMessage = nettoyerDonnee($_POST['poste']);
        $messageposted = true;
        
    }
   if (isset($_FILES['document']['name']) && !empty($_FILES['document']['name'])) {
    if ($_FILES['document']['size'] > MAX_DOC_SIZE) {
        echo "La taille du document ne doit pas dépasser 50MB.<br>";
    } else {
        $folder = "../NewaRnautes/documents/" . decrypt($_SESSION['ownerConnected'], $key) . "/";
        
        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
            file_put_contents($folder . "index.php", "");
        }
        $originalFileName = $_FILES['document']['name'];
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $uniqueFileName = uniqid('NewaRnet_document_', true); 
        $mydocument = $folder . $uniqueFileName . "." . $fileExtension;
        move_uploaded_file($_FILES['document']['tmp_name'], $mydocument);
        $has_document = 1;
        $documentposted = true;
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
        move_uploaded_file($_FILES['video']['tmp_name'], $myvideo);
        $has_video = 1;
        $videposted = true;
       }
   }
   
   if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) 
   {
        if ($_FILES['image']['size'] > MAX_IMAGE_SIZE) 
        {
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
            $imageposted = true;
        }
    }

   
    if($messageposted && $imageposted)
    {
        $has_image =  $has_image;
        $poste = encrypt($postMessage,$key);
        $postimage = encrypt($myimage,$key);
        global $DB;
        global $my_id;
        $postid = create_userid();
        $integrite = encrypt(nettoyerDonnee($_POST['integrite']),$key);
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO posts (userid,postid,message_poste,image,integrite,date,has_image) value(?,?,?,?,?,?,?)";
        $data = $DB->save($query,[$my_id,$postid,$poste,$postimage,$integrite,$date,$has_image]);
        echo "true";
    }else if($messageposted && $videposted)
    {
        $has_video = $has_video;
        $poste = encrypt($postMessage,$key);
        $postvideo = encrypt($myvideo,$key);
        global $DB;
        global $my_id;
        $postid = create_userid();
        $integrite = encrypt(nettoyerDonnee($_POST['integrite']),$key);
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO posts (userid,postid,message_poste,video,integrite,date,has_video) value(?,?,?,?,?,?,?)";
        $data = $DB->save($query,[$my_id,$postid,$poste,$postvideo,$integrite,$date,$has_video]);
        echo "true";
    }else if($messageposted && $documentposted)
    {
        $has_document = $has_document;
        $poste = encrypt($postMessage,$key);
        $postdocument = encrypt($mydocument,$key);
        $poste = encrypt($postMessage,$key);
        global $DB;
        global $my_id;
        $postid = create_userid();
        $integrite = encrypt(nettoyerDonnee($_POST['integrite']),$key);
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO posts (userid,postid,message_poste,document,integrite,date,has_document) value(?,?,?,?,?,?,?)";
        $data = $DB->save($query,[$my_id,$postid,$poste,$postdocument,$integrite,$date,$has_document]);
        echo "true";
    }else if($messageposted)
    {
        $poste = encrypt($postMessage,$key);
        global $DB;
        global $my_id;
        $postid = create_userid();
        $integrite = encrypt(nettoyerDonnee($_POST['integrite']),$key);
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO posts (userid,postid,message_poste,integrite,date) value(?,?,?,?,?)";
        $data = $DB->save($query,[$my_id,$postid,$poste,$integrite,$date]);
        echo "true";
        
    }else if($imageposted)
    {
        $has_image =  $has_image;
        $postimage = encrypt($myimage,$key);
        global $DB;
        global $my_id;
        $postid = create_userid();
        $integrite = encrypt(nettoyerDonnee($_POST['integrite']),$key);
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO posts (userid,postid,image,integrite,date,has_image) value(?,?,?,?,?,?,?)";
        $data = $DB->save($query,[$my_id,$postid,$postimage,$integrite,$date,$has_image]);
        echo "true";
        
    }else if($videposted)
    {
        $has_video = $has_video;
        $postvideo = encrypt($myvideo,$key);
        global $DB;
        global $my_id;
        $postid = create_userid();
        $integrite = encrypt(nettoyerDonnee($_POST['integrite']),$key);
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO posts (userid,postid,video,integrite,date,has_video) value(?,?,?,?,?,?)";
        $data = $DB->save($query,[$my_id,$postid,$postvideo,$integrite,$date,$has_video]);
        echo "true";
    }else if($documentposted)
    {
        $has_document = $has_document;
        $postdocument = encrypt($mydocument,$key);
        global $DB;
        global $my_id;
        $postid = create_userid();
        $integrite = encrypt(nettoyerDonnee($_POST['integrite']),$key);
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO posts (userid,postid,document,integrite,date,has_document) value(?,?,?,?,?,?)";
        $data = $DB->save($query,[$my_id,$postid,$postdocument,$integrite,$date,$has_document]);
        echo "true";
    }
}
?>
