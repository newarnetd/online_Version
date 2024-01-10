<?php
include("otherPrincipale.php");
if($_SERVER['REQUEST_METHOD'] === "POST") 
{
     global $limiteost;
     global $DB;
    global $my_id;
    $query = "SELECT * FROM notifications  WHERE  (owner  = ?) LIMIT $limiteost";
    $data = $DB->read($query,[$my_id]);
    if($data)
    {
        foreach($data as $data_notif)
        {
            global $key;
            global $user;
            $USERS_ROW =  $user->get_user($data_notif['userid']);
            include("Int_notifications.php");
        }
    }
    
}
?>