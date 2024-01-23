<?php
include("otherPrincipale.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    
    define('MAX_IMAGE_SIZE', 10 * 1024 * 1024);
    define('MAX_VIDEO_SIZE', 50 * 1024 * 1024);
    define('MAX_DOC_SIZE', 50 * 1024 * 1024);

    
    $has_image = false;
    $has_video = false;
    $has_document = false;

    $messageposted = false;
    $imageposted = false;
    $videposted = false;
    $documentposted = false;

    if (!empty($_POST['message'])) {
        $postMessage = nettoyerDonnee($_POST['message']);
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
            echo "La taille de la vidéo ne doit pas dépasser 50MB.";
        } else {
            // Traitement de la vidéo
            $folder = "../NewaRnautes/videos/" . decrypt($_SESSION['ownerConnected'], $key) . "/";
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
                file_put_contents($folder . "index.php", "");
            }
            $image_class = new Image();
            $myvideo = $folder . $image_class->generate_filename(15) . ".MP4";
            move_uploaded_file($_FILES['video']['tmp_name'], $myvideo);
            $has_video = 1;
            $videposted = true;
        }
    }

    if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
        if ($_FILES['image']['size'] > MAX_IMAGE_SIZE) {
            echo "La taille de l'image ne doit pas dépasser 10MB.";
        } else {
            
            $folder = "../NewaRnautes/Images/" . decrypt($_SESSION['ownerConnected'], $key) . "/";
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
                file_put_contents($folder . "index.php", "");
            }
            $image_class = new Image();
            $myimage = $folder . $image_class->generate_filename(15) . ".jpg";
            move_uploaded_file($_FILES['image']['tmp_name'], $myimage);
            $image_class->resize_image($myimage, $myimage, 512, 512);
            $has_image = 1;
            $imageposted = true;
        }
    }

    
        $groupeid = decrypt(nettoyerDonnee($_POST['u']),$key);
        $messageid = create_userid();
        $date = date("Y-m-d H:i:s");
        if($messageposted && $imageposted)
        {
            $message = encrypt($postMessage,$key);
            $postimage = encrypt($myimage, $key);
            $query = "INSERT INTO messagegroupe (messageid,owner,image, has_image, date, groupeid,message) VALUES (?,?,?,?,?,?,?)";
            $data = $DB->save($query, [$messageid,$my_id,$postimage, $has_image, $date, $groupeid,$message]);
        }elseif($messageposted && $videposted)
        {   $message = encrypt($postMessage,$key);
            $postdocument = encrypt($mydocument, $key);
            $query = "INSERT INTO messagegroupe (messageid,owner,document, has_document, date, groupeid,message) VALUES (?,?,?,?,?,?,?)";
            $data = $DB->save($query, [$messageid,$my_id,$postdocument, $has_document, $date, $groupeid,$message]);
        }elseif($messageposted && $documentposted)
        {   $message = encrypt($postMessage,$key);
            $postdocument = encrypt($mydocument, $key);
            $query = "INSERT INTO messagegroupe (messageid,owner,document, has_document, date, groupeid,message) VALUES (?,?,?,?,?,?,?)";
            $data = $DB->save($query, [$messageid,$my_id,$postdocument, $has_document, $date, $groupeid,$message]);
        }
        elseif($imageposted) {
            $postimage = encrypt($myimage, $key);
            $query = "INSERT INTO messagegroupe (messageid,owner,image, has_image, date, groupeid) VALUES (?, ?, ?, ?, ?,?)";
            $data = $DB->save($query, [$messageid,$my_id,$postimage, $has_image, $date, $groupeid]);
        } elseif ($videposted) {
            $postvideo = encrypt($myvideo, $key);
            $query = "INSERT INTO messagegroupe (messageid,owner,video, has_video, date, groupeid) VALUES (?, ?, ?, ?, ?,?)";
            $data = $DB->save($query, [$messageid,$my_id,$postvideo, $has_video, $date, $groupeid]);
        } elseif ($documentposted) {
            $postdocument = encrypt($mydocument, $key);
            $query = "INSERT INTO messagegroupe (messageid,owner,document, has_document, date, groupeid) VALUES (?, ?, ?, ?, ?,?)";
            $data = $DB->save($query, [$messageid,$my_id,$postdocument, $has_document, $date, $groupeid]);
        } elseif($messageposted)
        {
            $message = encrypt($postMessage, $key);
            $query = "INSERT INTO messagegroupe (messageid, message, owner, date, groupeid) VALUES (?, ?, ?, ?, ?)";
            $data = $DB->save($query, [$messageid, $message, $my_id, $date, $groupeid]);
        }

        
        $dataGroupe = detailGroupe($groupeid);
        $membres = json_decode($dataGroupe['membres'], true);
        foreach ($membres as $IdsMembres) {
            $id = $IdsMembres['userid'];
            if($id == $my_id)
            {
                $query = "INSERT INTO groupeseen (messageid, groupeId, userid,seen) VALUES (?, ?, ?,?)";
                $data = $DB->save($query, [$messageid, $groupeid, $id,1]);     
            }else{
                $query = "INSERT INTO groupeseen (messageid, groupeId, userid) VALUES (?, ?, ?)";
            $data = $DB->save($query, [$messageid, $groupeid, $id]);
            }
        }

        echo "true";
    
}
?>
