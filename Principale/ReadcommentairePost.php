<?php
include("otherPrincipale.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $DB, $key, $my_id;
    $postid = $_POST['value'];
    $sql= "SELECT * FROM commentaire WHERE postid = ? LIMIT 1";
    $result = $DB->read($sql, [$postid]);
    if($result)
    {
        foreach($result as $_ROW)
        {
            $USERS_ROW =  $user->get_user($_ROW['owner']);
            include("int_commentaire.php");
        }
    }else{
        echo"<div style='width:100%;display:block'>
        <div class='textCent' style='margin-top:50px'>À l'heure actuelle, aucun commentaire n'a été formulé sous cette publication</div>
        <div style='margin-top:30px;font-size:90px;display:flex;align-items:center;justify-content:center;'>
            <i class='fa-solid fa-comment-dots'></i>
        </div>
        </div>";
    }

}
?>