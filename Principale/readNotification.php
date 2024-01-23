<?php
include("otherPrincipale.php");
if($_SERVER['REQUEST_METHOD'] === "POST") 
{
     global $limiteost;
     global $DB;
    global $my_id;
    $query = "SELECT * FROM notifications  WHERE  (userid = ?) LIMIT $limiteost";
    $data = $DB->read($query,[$my_id]);
    if($data)
    {
        foreach($data as $data_notif)
        {
            global $key;
            global $user;
            $USERS_ROW =  $user->get_user($data_notif['owner']);
            if(decrypt($data_notif['type'],$key) === 'story')
            {
                exit;
            }
            include("Int_notifications.php");
        }
    }else{
        echo "<div class='textCent' style='margin-top:40px'>Vous n'avez aucune notification actuellement.</div>";
    }
    
}
?>