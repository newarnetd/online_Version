<?php
 $key="07c2870e0e749bb82b00cc03e166aafb";
 $DB = new Database();
 $limite = 15;
$servername = "localhost";
$username = "root";
$password = "";
$database = "newarnet";
$conn = new mysqli($servername, $username, $password, $database);
function encrypt($data, $key) {
    $iv = random_bytes(16);
    $encryptedData = openssl_encrypt($data, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
    $encryptedData = $iv . $encryptedData;
    return base64_encode($encryptedData);
}


function decrypt($encryptedData, $key) {
    $encryptedData = base64_decode($encryptedData);
    $iv = substr($encryptedData, 0, 16);
    $encryptedData = substr($encryptedData, 16);

    $paddedIV = str_pad($iv, 16, "\0");

    $decryptedData = openssl_decrypt($encryptedData, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $paddedIV);
    return htmlspecialchars($decryptedData);
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
function verificationSession()
{
    
    if(isset($_SESSION['ownerConnected']) && $_SESSION['ownerConnected'] !== null)
    {
        global $key;
        authentification(decrypt($_SESSION['ownerConnected'],$key));
        header("Location:Principale/accueil.php");
    }
    
}

function userdetail($id)
{
    
}
function authentification($id)
{
    $query = "SELECT * FROM users WHERE userid = ? LIMIT 1";
    $DB = new Database();
    $result = $DB->read($query, [$id]);  

    if(is_array($result) && !empty($result))
    {
        set_online($id);
        
    }
    else
    {
        header("Location: ../");
        exit;
    }
}
function set_online($id){
	$online = time();
    $DB = new Database();
    $query = "SELECT * FROM users where userid = ? limit 1";
    $result = $DB->read($query,[$id]);  
    $result = $result[0];
	$query = "UPDATE users SET enligne = ? WHERE userid = ?";
	$DB = new Database();
	$DB->save($query,[$online,$id]);

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
function nettoyerNomFichier($filename) {
    $cleaned_filename = preg_replace("/[^a-zA-Z0-9]+/", "", $filename);
    $cleaned_filename = $cleaned_filename . "_" . time();
    return $cleaned_filename;
}
function resize_image($source, $width = 512, $height = 512) {
    $source_image = imagecreatefromjpeg($source);
    if ($source_image === false) {
        echo "Erreur lors de la création de l'image à partir de JPEG.";
        return false;
    }
    $source_width = imagesx($source_image);
    $source_height = imagesy($source_image);
    $ratio = $source_width / $source_height;

    if ($width / $height > $ratio) {
        $new_width = $height * $ratio;
        $new_height = $height;
    } else {
        $new_width = $width;
        $new_height = $width / $ratio;
    }
    $new_image = imagecreatetruecolor($new_width, $new_height);
    imagecopyresampled($new_image, $source_image, 0, 0, 0, 0, $new_width, $new_height, $source_width, $source_height);
    imagedestroy($source_image);
    return $new_image;
}


function limiterChaine($chaine, $limite) 
{
    if (strlen($chaine) > $limite) {
        $chaine = substr($chaine, 0, $limite - 3) . '...';
    }

    return $chaine;
}
function getFriends($id, $type)
{
    global $DB;

    $sql = "SELECT * FROM relations WHERE user = ? AND type = ? LIMIT 1";
    $result = $DB->read($sql, [$id, $type]);

    if ($result) {
        return $result;
    } else {
        return getRandomFriendsList($id);
    }
}

function getRandomFriendsList($id)
{
    global $DB;
    global $limite;
    $sql = "SELECT * FROM users WHERE userid != ? ORDER BY RAND() LIMIT $limite";
    $result = $DB->read($sql, [$id]);

    return $result;
}

function getRandomFriendsList_prefere($id, $sexe)
{
    global $DB;
    global $key;
    global $limite;
    $sql = "SELECT * FROM users WHERE userid != ? ORDER BY RAND() LIMIT $limite";
    $randomUsers = $DB->read($sql, [$id]);
    foreach ($randomUsers as &$user) {
        $user['sexe'] = decrypt($user['sexe'], $key);
    }
    $filteredUsers = array_filter($randomUsers, function ($user) use ($sexe) {
        return $user['sexe'] != $sexe;
    });
    $finalResult = array_slice($filteredUsers, 0, $limite);

    return $finalResult;
}
function Mesinvitations($id)
{
    global $DB;
    global $limite;
    $sql = "SELECT * FROM invitations WHERE owner = ? LIMIT  $limite";
    $result = $DB->read($sql, [$id]);

    return $result;
}
?>