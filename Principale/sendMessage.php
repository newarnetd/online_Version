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
    if( !empty($_POST['message']))
    {
        $postMessage = nettoyerDonnee($_POST['message']);
        $messageposted = true;
        
    }
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
        $message = encrypt($postMessage,$key);
        $postimage = encrypt($myimage,$key);
        global $DB;
        global $my_id;
        $userid = nettoyerDonnee(decrypt($_POST['u'],$key));
        $query = "select * from message where (owner = ? AND userid = ?) || (userid = ? && owner = ?) limit 1";
		$data = $DB->read($query,[$my_id,$userid,$my_id,$userid]);
        if(is_array($data)){
            $messageid = $data[0]['messageid'];
        }else{
            $messageid = create_userid();
        }
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO message (owner,userid,messageid,message,image,has_image,date) value(?,?,?,?,?,?,?)";
        $data = $DB->save($query,[$my_id,$userid,$messageid,$message,$postimage,$has_image,$date,]);
        echo "true";
    }else if($messageposted && $videposted)
    {
        $has_video = $has_video;
        $message = encrypt($postMessage,$key);
        $postvideo = encrypt($myvideo,$key);
        global $DB;
        global $my_id;
        $userid = nettoyerDonnee(decrypt($_POST['u'],$key));
        $query = "select * from message where (owner = ? AND userid = ?) || (userid = ? && owner = ?) limit 1";
		$data = $DB->read($query,[$my_id,$userid,$my_id,$userid]);
        if(is_array($data)){
            $messageid = $data[0]['messageid'];
        }else{
            $messageid = create_userid();
        }
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO message (owner,userid,messageid,message,video,has_video,date) value(?,?,?,?,?,?,?)";
        $data = $DB->save($query,[$my_id,$userid,$messageid,$message,$postvideo,$has_video,$date,]);
        echo "true";
    }else if($messageposted && $documentposted)
    {
        $has_document = $has_document;
        $message = encrypt($postMessage,$key);
        $postdocument = encrypt($mydocument,$key);
        $message = encrypt($postMessage,$key);
        global $DB;
        global $my_id;$userid = nettoyerDonnee(decrypt($_POST['u'],$key));
        $query = "select * from message where (owner = ? AND userid = ?) || (userid = ? && owner = ?) limit 1";
		$data = $DB->read($query,[$my_id,$userid,$my_id,$userid]);
        if(is_array($data)){
            $messageid = $data[0]['messageid'];
        }else{
            $messageid = create_userid();
        }
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO message (owner,userid,messageid,message,document,has_document,date) value(?,?,?,?,?,?,?)";
        $data = $DB->save($query,[$my_id,$userid,$messageid,$message,$postdocument,$has_document,$date,]);
        echo "true";
    }else if($messageposted)
    {
        $message = encrypt($postMessage,$key);
        global $DB;
        global $my_id;
        $userid = nettoyerDonnee(decrypt($_POST['u'],$key));
        $query = "select * from message where (owner = ? AND userid = ?) OR (userid = ? AND owner = ?) limit 1";
		$data = $DB->read($query,[$my_id,$userid,$my_id,$userid]);
        if(($data)){
            $messageid = $data[0]['messageid'];
        }else{
            $messageid = create_userid();
        }
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO message (owner,userid,messageid,message,date) value(?,?,?,?,?)";
        $data = $DB->save($query,[$my_id,$userid,$messageid,$message,$date]);
        echo "true";
        
    }else if($imageposted)
    {
        $has_image =  $has_image;
        $postimage = encrypt($myimage,$key);
        global $DB;
        global $my_id;$userid = nettoyerDonnee(decrypt($_POST['u'],$key));
        $query = "select * from message where (owner = ? AND userid = ?) || (userid = ? && owner = ?) limit 1";
		$data = $DB->read($query,[$my_id,$userid,$my_id,$userid]);
        if(is_array($data)){
            $messageid = $data[0]['messageid'];
        }else{
            $messageid = create_userid();
        }
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO message (owner,userid,messageid,image,date,has_image) value(?,?,?,?,?,?)";
        $data = $DB->save($query,[$my_id,$userid,$messageid,$postimage,$date,$has_image]);
        echo "true";
        
    }else if($videposted)
    {
        $has_video = $has_video;
        $postvideo = encrypt($myvideo,$key);
        global $DB;
        global $my_id;$userid = nettoyerDonnee(decrypt($_POST['u'],$key));
        $query = "select * from message where (owner = ? AND userid = ?) || (userid = ? && owner = ?) limit 1";
		$data = $DB->read($query,[$my_id,$userid,$my_id,$userid]);
        if(is_array($data)){
            $messageid = $data[0]['messageid'];
        }else{
            $messageid = create_userid();
        }
        
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO message (owner,userid,messageid,video,date,has_video) value(?,?,?,?,?,?)";
        $data = $DB->save($query,[$my_id,$userid,$messageid,$postvideo,$date,$has_video]);
        echo "true";
    }else if($documentposted)
    {
        $has_document = $has_document;
        $message = encrypt($postMessage,$key);
        $postdocument = encrypt($mydocument,$key);
        $message = encrypt($postMessage,$key);
        global $DB;
        global $my_id;$userid = nettoyerDonnee(decrypt($_POST['u'],$key));
        $query = "select * from message where (owner = ? AND userid = ?) || (userid = ? && owner = ?) limit 1";
		$data = $DB->read($query,[$my_id,$userid,$my_id,$userid]);
        if(is_array($data)){
            $messageid = $data[0]['messageid'];
        }else{
            $messageid = create_userid();
        }
        
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO message (owner,userid,messageid,document,has_document,date) value(?,?,?,?,?,?)";
        $data = $DB->save($query,[$my_id,$userid,$messageid,$postdocument,$has_document,$date]);
        echo "true";
    }
}
?>
