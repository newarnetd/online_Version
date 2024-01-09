<?php
include("otherPrincipale.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $id_clicked = decrypt($_POST['value'],$key);
    global $DB;
    global $my_id;
    $sql = "SELECT * FROM invitations WHERE (userid =  ? AND  owner = ?) OR (owner = ? AND userid = ? ) LIMIT 1";
    $result = $DB->read($sql, [$id_clicked,$my_id,$id_clicked,$my_id]);
    if(($result)) 
    {
        $sql = "DELETE FROM invitations WHERE invitationId = ?";
        $DB->save($sql, [$result[0]['invitationId']]);
        echo "false";
    }else{
        $invitation_id = create_userid();
        $date = date("Y-m-d H:i:s");
        $sql = "INSERT INTO invitations (owner, userid, date,invitationId) VALUES (?, ?, ?,?)";
        $DB->save($sql, [$id_clicked, $my_id, $date,$invitation_id]);
        echo "true";
    }
}
?>
