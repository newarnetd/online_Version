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
        foreach($data as $ROW)
        {
            include("int_poste.php");
        }
    }
    
}
?>