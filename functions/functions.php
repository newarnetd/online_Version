<?php
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

    $length = rand(4,19);
    $number = "";
    for ($i=0; $i < $length; $i++) { 
        # code...
        $new_rand = rand(0,9);

        $number = $number . $new_rand;
    }
    return $number;
}
function identifiant_unique($length) {

    $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','-','_','!','@','#','$','%','^','&','*','(',')','[',']','{','}',';',':','<','>',',','.','/','?','|','+','=','~','`','\'','"','\\','/','*','_','|','<','>',':','!','@','#','$','%','^','&','.',',','?',';');    
    $text = "";

    $length = rand(4,$length);

    for($i=0;$i<$length;$i++) {

        $random = rand(0,63);
        
        $text .= $array[$random];

    }

    return $text;
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
function calculerTempsEcoule($date) {
    $dateActuelle = new DateTime();
    $dateFournie = new DateTime($date);
    $intervalle = $dateActuelle->diff($dateFournie);

    $tempsEcoule = "";

    if ($intervalle->y > 0) {
        $tempsEcoule .= $intervalle->y . " an" . ($intervalle->y > 1 ? "s" : "") . " ";
    } elseif ($intervalle->m > 0) {
        $tempsEcoule .= $intervalle->m . " mois ";
    } elseif ($intervalle->d > 0) {
        $tempsEcoule .= $intervalle->d . " jour" . ($intervalle->d > 1 ? "s" : "") . " ";
    } elseif ($intervalle->h > 0) {
        $tempsEcoule .= $intervalle->h . " heure" . ($intervalle->h > 1 ? "s" : "") . " ";
    } elseif ($intervalle->i > 0) {
        $tempsEcoule .= $intervalle->i . " minute" . ($intervalle->i > 1 ? "s" : "") . " ";
    } else {
        $tempsEcoule = "À l'instant";
    }

    return $tempsEcoule;
}
function timedate($date) {
    $dateActuelle = new DateTime();
    $dateFournie = new DateTime($date);
    $intervalle = $dateActuelle->diff($dateFournie);

    $tempsEcoule = "";

    if ($intervalle->y > 0) {
        $tempsEcoule .= $intervalle->y . " a";
    } elseif ($intervalle->m > 0) {
        $tempsEcoule .= $intervalle->m . " m";
    } elseif ($intervalle->d > 0) {
        $tempsEcoule .= $intervalle->d . " j";
    } elseif ($intervalle->h > 0) {
        $tempsEcoule .= $intervalle->h . " h" ;
    } elseif ($intervalle->i > 0) {
        $tempsEcoule .= $intervalle->i . " min" ;
    } else {
        $tempsEcoule = "À l'instant";
    }
    return $tempsEcoule;
}
function storydate($dateActuelle,$date) {
    $dateFournie = new DateTime($date);
    $intervalle = $dateActuelle->diff($dateFournie);

    $tempsEcoule = "";

    if ($intervalle->d > 0) {
        $tempsEcoule .= $intervalle->d . " j";
    }else{
        $tempsEcoule = "non";
    }
    return $tempsEcoule;
}

function limiterCaracteres($chaine, $limite) {
    if (mb_strlen($chaine) <= $limite) {
        return $chaine;
    } else {
        $chaineLimitee = mb_substr($chaine, 0, $limite - 3) . "...";
        return $chaineLimitee;
    }
}
function removeUndesiredCharacters($filename)
{
    
    $forbiddenChars = ['<', '>', ':', '"', '/', '\\', '|', '?', '*', "'", '`', '$', '&', '!', '{', '}', '[', ']', '=', '+', '@', '#', '%', '^', '(', ')', ';', ',', '~'];

    $newName = str_replace($forbiddenChars, '', $filename);

    return $newName;
}

?>