<?php
include("otherPrincipale.php");
if($_SERVER['REQUEST_METHOD'] === "POST") 
{
    global $DB,$my_id;
    $query = "SELECT image FROM posts 
    WHERE userid = ? AND  has_image = 1";
    $data = $DB->read($query, [$my_id]);
    if($data)
    {
        $data = $data[0];
        foreach($data as $ROW)
        {
            print_r($ROW);
        }
    }else{
        echo "<div class='textCent'>Actuellement, vous n'avez aucune photo dans ton Album NewaRnet. Cependant, vous pouvez toujours en télécharger pour les partager avec vos amis.</div>";

    }
}
?>