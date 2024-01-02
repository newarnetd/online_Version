<?php
include("otherPrincipale.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $id_clicked = $_POST['value'];
    global $DB;
    global $my_id;
    $sql = "SELECT * FROM invitations WHERE invitationId = ? LIMIT 1";
    $result = $DB->read($sql, [$id_clicked]);
    $result = $result[0];
    $Emmeuteur = $result['userid'];
    $recepteur = $result['owner'];
    $sql = "SELECT amis FROM relations WHERE type='amis' AND userid = ? LIMIT 1";
    $result = $DB->read($sql, [$Emmeuteur]);
    if(($result)) 
    {
        $Amis = json_decode($result[0]['amis'],true);
        $user_ids = array_column($Amis, "userid");
        if(!in_array($id_clicked, $user_ids))
        {
                    $arr["userid"] = $id_clicked;
					$arr["date"] = date("Y-m-d H:i:s");
                    $arr["proposition"] = "ami";
					$Amis[] = $arr;
					$amis_string = json_encode($Amis);
                    $sql = "update relations set amis =  ? where type= ? && userid =  ? limit 1";
					$DB->save($sql,[$amis_string,'amis',$Emmeuteur]);
                    $sql = "DELETE FROM invitations WHERE owner = ? AND userid = ?";
                    $DB->save($sql, [$recepteur,$Emmeuteur]);
                    $sql = "UPDATE users SET amis = amis + 1 WHERE userid = ?";
                    $DB->save($sql,[$Emmeuteur]);
                    addFriends($recepteur,$Emmeuteur);
                    notification($recepteur,$Emmeuteur,'amis');
                    echo "true";

        }
}
}
?>
