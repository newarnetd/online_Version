<?php
include("otherPrincipale.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $id_clicked = decrypt($_POST['value'],$key);
    global $DB;
    global $my_id;
    $sql = "SELECT amis FROM relations WHERE type='amis' AND userid = ? LIMIT 1";
    $result = $DB->read($sql, [$my_id]);
    if(($result)) 
    {
        $Amis = json_decode($result[0]['amis'],true);
        $user_ids = array_column($Amis, "userid");
        if(!in_array($id_clicked, $user_ids))
        {
                    $arr["userid"] = $id_clicked;
					$arr["date"] = date("Y-m-d H:i:s");
                    $arr["proposition"] = "attente";
					$Amis[] = $arr;
					$amis_string = json_encode($Amis);
                    $sql = "update relations set amis =  ? where type= ? && userid =  ? limit 1";
					$DB->save($sql,[$amis_string,'amis',$my_id]);
                    $date = date("Y-m-d H:i:s");
                    $invitation_id = create_userid();
                    $sql = "INSERT INTO invitations (owner, userid, date,invitationId) VALUES (?, ?, ?,?)";
                    $DB->save($sql, [$id_clicked, $my_id, $date,$invitation_id]);
                    AddDatahyperSync($my_id, $id_clicked, "ajouter");
                    echo "true";

        }else{
            $data = array_search($id_clicked, $user_ids);
            unset($Amis[$data]);
            $amis_string = json_encode($Amis);
            $sql = "update relations set amis =  ? where type= ? && userid =  ? limit 1";
            $DB->save($sql,[$amis_string,'amis',$my_id]);
            $sql = "DELETE FROM invitations WHERE owner = ? AND userid = ?";
            $DB->save($sql, [$id_clicked,$my_id]);
            DeleteDatahyperSync($my_id, $id_clicked, "ajouter");
            echo "false";
        }

    }else{
        $arr["userid"] = $id_clicked;
        $arr["date"] = date("Y-m-d H:i:s");
        $arr["proposition"] = "attente";
        $relations = json_encode([$arr]);
        $sql = "INSERT INTO relations (userid, amis, type) VALUES (?, ?, 'amis')";
        $DB->save($sql, [$my_id, $relations]);
        $date = date("Y-m-d H:i:s");
        $invitation_id = create_userid();
        $sql = "INSERT INTO invitations (owner, userid, date,invitationId) VALUES (?, ?, ?,?)";
        $DB->save($sql, [$id_clicked, $my_id, $date,$invitation_id]);
        AddDatahyperSync($my_id, $id_clicked, "ajouter");
        echo "true";
    }
}
?>
