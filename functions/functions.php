<?php
function encrypt($data, $key) {
    if (empty($data) || empty($key)) {
        throw new InvalidArgumentException("Les données et la clé ne peuvent pas être vides.");
    }
    $iv = random_bytes(16);
    $encryptedData = openssl_encrypt($data, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
    if ($encryptedData === false) {
        throw new RuntimeException("Échec du chiffrement OpenSSL.");
    }
    $encryptedData = $iv . $encryptedData;
    return base64_encode($encryptedData);
}

function decrypt($encryptedData, $key) {
    if (empty($encryptedData) || empty($key)) {
        throw new InvalidArgumentException("Les données chiffrées et la clé ne peuvent pas être vides.");
    }
    $encryptedData = base64_decode($encryptedData);
    $iv = substr($encryptedData, 0, 16);
    $encryptedData = substr($encryptedData, 16);
    $decryptedData = openssl_decrypt($encryptedData, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);

    if ($decryptedData === false) {
        throw new RuntimeException("Échec du déchiffrement OpenSSL.");
    }
    return rtrim(htmlspecialchars($decryptedData), "\0");
}

function create_userid()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $length = rand(10, 20);

    $userid = '';
    $charactersLength = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $charactersLength - 1);
        $userid .= $characters[$randomIndex];
    }
    return $userid;
}

function authentification($id)
{
    if(is_numeric($id))
    {
        $id = esc($id);
        $query = "SELECT * FROM users where userid = ? limit 1";
        $DB = new Database();
	    $result = $DB->read($query,[$id]);  
        if(!is_array($result))
        {
            header("Location:../");
            exit;
        }else{
            if(isset($id)){
                set_online($id);
            }
        }

    }else{
        header("Location:../");
        exit;
    }
}

function set_online($id){
	if(!is_numeric($id)){
		return;
	}
	$online = time();
    $DB = new Database();
    $query = "SELECT * FROM users where userid = ? limit 1";
    $result = $DB->read($query,[$id]);  
    $result = $result[0];
    $date =$result["date_d'inscription"];
	$query = "UPDATE users SET enligne = ?, `date_d'inscription` = ? WHERE userid = ?";
	$DB = new Database();
	$DB->save($query,[$online,$date,$id]);

}
function calculerTempsEcoule($heureDebut)
{
    if (!strtotime($heureDebut)) {
        throw new InvalidArgumentException("Format de date de début non valide.");
    }
    $dateDebut = new DateTime($heureDebut);
    $dateActuelle = new DateTime();
    $tempsEcoule = $dateActuelle->diff($dateDebut);
    $tempsEcouleString = '';
    if ($tempsEcoule->y > 0) $tempsEcouleString .= $tempsEcoule->y . ' an(s) ';
    if ($tempsEcoule->m > 0) $tempsEcouleString .= $tempsEcoule->m . ' mois ';
    if ($tempsEcoule->d > 0) $tempsEcouleString .= $tempsEcoule->d . ' jour(s) ';
    if ($tempsEcoule->h > 0) $tempsEcouleString .= $tempsEcoule->h . ' heure(s) ';
    if ($tempsEcoule->i > 0) $tempsEcouleString .= $tempsEcoule->i . ' minute(s) ';
    if ($tempsEcoule->s > 0) $tempsEcouleString .= $tempsEcoule->s . ' seconde(s) ';
    $tempsEcouleString = rtrim($tempsEcouleString);
    return $tempsEcouleString;
}

function nettoyerDonnee($valeur)
{
    $valeur = trim($valeur);
    $valeur = htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8');
    if (!is_numeric($valeur)) {
        $valeur = addslashes($valeur);
    }
    return $valeur;
}
function recadrerImage($cheminImage)
{
    list($largeurOrig, $hauteurOrig) = getimagesize($cheminImage);
    $nouvelleLargeur = 512;
    $nouvelleHauteur = 512;
    $ratioOrig = $largeurOrig / $hauteurOrig;
    if ($ratioOrig > 1) {
        $nouvelleHauteur = $nouvelleLargeur / $ratioOrig;
    } else {
        $nouvelleLargeur = $nouvelleHauteur * $ratioOrig;
    }
    $imageOrig = imagecreatefromjpeg($cheminImage);
    $imageRecadree = imagecreatetruecolor($nouvelleLargeur, $nouvelleHauteur);
    imagecopyresampled(
        $imageRecadree, 
        $imageOrig,     
        0,             
        0,              
        0,              
        0,              
        $nouvelleLargeur,
        $nouvelleHauteur,
        $largeurOrig,
        $hauteurOrig  
    );

    ob_start();
    imagejpeg($imageRecadree, NULL);
    $imageData = ob_get_clean();
    imagedestroy($imageOrig);
    imagedestroy($imageRecadree);
    return $imageData;
}

?>