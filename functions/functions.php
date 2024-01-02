<?php
$key="07c2870e0e749bb82b00cc03e166aafb";
$limite = 15;
$limiteost =  10;
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
function addFriends($recepteur,$Emmeuteur)
{
    
        global $DB;
        global $key;
        global $user;
        $USERS_ROW = $user->get_user($recepteur);
        $status =encrypt('actif',$key);
        $sql = "INSERT INTO amis (ownerid,amisid,status,sexe,preference) VALUES (?,?,?,?,?)";
        $DB->save($sql, [$Emmeuteur,$recepteur,$status,$USERS_ROW['sexe'],$USERS_ROW['preference']]);
}
function notification($recepteur,$Emmeuteur,$type)
{
    if($type === "amis")
    {
        global $DB;
        global $key;
        $notifId = create_userid();
        $date = encrypt(date("Y-m-d H:i:s"),$key);
        $sql = "INSERT INTO notifications (userid,notif_id,owner,date,type) VALUES (?,?,?,?,?)";
        $DB->save($sql, [$recepteur, $Emmeuteur, $date,$notifId,'amis']);
    }
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

function authentification($id)
{
    $query = "SELECT * FROM users WHERE userid = ? LIMIT 1";
    $DB = new Database();
    $result = $DB->read($query, [$id]);  

    if(($result) && !empty($result))
    {
        set_online($id);
        
    }
    else
    {
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Pragma: no-cache");
        header("Location:../");
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
function calcTemps($pasttime)
{
    $today = 0;
    $differenceFormat = '%y';
    $today = date("Y-m-d H:i:s"); 
    $datetime1 = date_create($pasttime);
    $datetime2 = date_create($today);
   
    $interval = date_diff($datetime1, $datetime2);
     $answerY = $interval->format($differenceFormat);
    
    $differenceFormat = '%m';
    $answerM = $interval->format($differenceFormat);
    
     $differenceFormat = '%d';
    $answer = $interval->format($differenceFormat);
      
    $differenceFormat = '%h';
    $answer2 = $interval->format($differenceFormat);
        
        if ($answerY >= 1) {
        
            return $answer . " Année";
             
        }else if ($answerM >= 1) {
        
            return $answer . " Mois ";
            return $answerM;
        
        }else if ($answer > 2) {
             
            return $answer . " d ";
            
        }else if ($answer == 2) {
        
            return $answer . " d ";
            
         }else if ($answer == 1) {
            
            return "1 j ";
                         
        }else {
            
            $differenceFormat = '%h';
            $answer = $interval->format($differenceFormat);
            
            $differenceFormat = '%i';
            $answer2 = $interval->format($differenceFormat);
            
                if (($answer < 24) && ($answer > 1)) {
                    
                    return $answer . " h";
                    
                }else if ($answer == 1){
                    
                    return "1h";
                    
                }else {
                
                    $differenceFormat = '%i';
                    $answer = $interval->format($differenceFormat);
                    
                        if (($answer < 60) && ($answer > 1)) {
                            
                            return $answer . " min";
                        
                        }else if ($answer == 1) { 
                        
                            return "une min";
                            
                        }else {
                            
                            $differenceFormat = '%s';
                            $answer = $interval->format($differenceFormat);
                            
                                if (($answer < 60) &&( $answer > 10)) {
                                    
                                    return $answer . " sec";
                                    
                                }else if ($answer < 10) {
                                    
                                    return "à l'instant";
                                    
                                }
                            
                        }
                        
                }
                
                
        }
                                

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
function limiterChaine($chaine, $limite) 
{
    if (mb_strlen($chaine) > $limite) {
        $chaine = mb_substr($chaine, 0, $limite - 3) . '...';
    }

    return $chaine;
}
function getFriends($id, $type)
{
    global $DB;

    $sql = "SELECT * FROM relations WHERE userid = ? AND type = ?  LIMIT 1";
    $result = $DB->read($sql, [$id, $type]);
    if ($result) {
        if(!empty($result['amis']))
        {
            return $result;
        }else{
            return getRandomFriendsList($id);
        }
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
function AddDatahyperSync($userid, $ownerid, $type)
{
    global $DB;
    global $limite;
    $validTypes = ["ajouter", "like", "suivre", "partager", "commenter", "profile", "photo"];
    if (!in_array($type, $validTypes)) {
        return false;
    }
    $score = in_array($type, ["ajouter", "like"]) ? 1 : (in_array($type, ["suivre", "partager", "commenter", "profile"]) ? 3 : (in_array($type, ["photo"]) ? 2 : 0));
    $date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO hypersync (ownerid, userid, type, date, score) VALUES (?, ?, ?, ?, ?)";
    $result = $DB->save($sql, [$ownerid, $userid, $type, $date, $score]);
    return $result;
}
function DeleteDatahyperSync($userid, $ownerid, $type)
{
    global $DB;
    $validTypes = ["ajouter", "like", "suivre", "partager", "commenter", "profile", "photo"];
    if (!in_array($type, $validTypes)) {
        return false; 
    }
    $sql = "DELETE FROM hypersync WHERE ownerid = ? AND userid = ? AND type = ?";
    $result = $DB->save($sql, [$ownerid, $userid, $type]);

    return $result;
}
function nettoyerNomFichier($nomFichier) {
    $infoFichier = pathinfo($nomFichier);
    $nomBase = $infoFichier['filename'];
    $extension = isset($infoFichier['extension']) ? '.' . $infoFichier['extension'] : '';
    $nomBase = str_replace(' ', '-', $nomBase);
    $nomBase = preg_replace('/[^a-zA-Z0-9-]/', '', $nomBase);
    $nomBase = strtolower($nomBase);
    $nomFichierNettoye = $nomBase . $extension;
    return $nomFichierNettoye;
}

function GetInvitations($ownerId)
{
    global $DB;
    global $limit;
    $sql = "SELECT * FROM invitations WHERE owner = ?";
    $result = $DB->read($sql, [$ownerId]);

    if ($result !== false) {
        $count = count($result);
        return $count;
    } else {
        return 0;
    }
}



?>