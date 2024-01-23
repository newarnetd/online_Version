<?php
include("otherPrincipale.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $id_clicked = $_POST['value'];
    global $DB;
    global $my_id;
    $sql = "DELETE FROM invitations WHERE invitationId = ? LIMIT 1";
    $result = $DB->save($sql, [$id_clicked]);
    if($result)
    {
        echo 'true';
    }
}
?>