<?php
include("otherPrincipale.php");
if($_SERVER['REQUEST_METHOD'] === "POST") 
{
     global $limiteost;
     global $DB;
    global $my_id;
    $query = "SELECT * FROM posts  WHERE  ((userid = ?)) LIMIT $limiteost";
    $data = $DB->read($query,[$my_id]);
    if($data)
    {
        foreach($data as $data_poste)
        {
            global $key;
            global $user;
            $OWNER =  $user->get_user($data_poste['userid']);
            include("int_poste.php");
        }
    }
    
}
?>