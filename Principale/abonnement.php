<?php
include("otherPrincipale.php");

function followUser($DB, $my_id, $id_clicked) {
    global $key;
    $id_clicked = decrypt($id_clicked, $key);

    $sql = "SELECT abonnes FROM abonnement WHERE boutiqueId = ? LIMIT 1";
    $result = $DB->read($sql, [$id_clicked]);

    if ($result) {
        $abonnes = json_decode($result[0]['abonnes'], true);
        $user_ids = array_column($abonnes, "userid");

        if (!in_array($my_id, $user_ids)) {
            $arr["userid"] = $my_id;
            $abonnes[] = $arr;
            $abonnes_string = json_encode($abonnes);

            $sql = "UPDATE abonnement SET abonnes = ? WHERE boutiqueId = ?";
            $DB->save($sql, [$abonnes_string, $id_clicked]);

            $sql = "UPDATE abonnement SET num = num + 1 WHERE boutiqueId = ?";
            $DB->save($sql, [$id_clicked]);
            $sql = "SELECT ownerid FROM boutique WHERE boutiqueId = ? LIMIT 1";
            $result = $DB->read($sql, [$id_clicked]);
            $recepteur = $result[0]['ownerid'];
            notification($recepteur,$my_id,"abonnement",$id_clicked);
            return "true";
        } else {
            $data = array_search($my_id, $user_ids);
            unset($abonnes[$data]);

            $abonnes_string = json_encode($abonnes);
            $sql = "UPDATE abonnement SET abonnes = ? WHERE boutiqueId = ?";
            $DB->save($sql, [$abonnes_string, $id_clicked]);

            $sql = "UPDATE abonnement SET num = num - 1 WHERE boutiqueId = ?";
            $DB->save($sql, [$id_clicked]);
            return "false";
        }
    } else {
        $arr["userid"] = $my_id;
        $abonnement = json_encode([$arr]);
        $sql = "INSERT INTO abonnement (boutiqueId, abonnes) VALUES (?, ?)";
        $DB->save($sql, [$id_clicked, $abonnement]);

        $sql = "UPDATE abonnement SET num = num + 1 WHERE boutiqueId = ?";
        $DB->save($sql, [$id_clicked]);
        $sql = "SELECT ownerid FROM boutique WHERE boutiqueId = ? LIMIT 1";
        $result = $DB->read($sql, [$id_clicked]);
        $recepteur = $result[0]['ownerid'];
        notification($recepteur,$my_id,"abonnement",$id_clicked);
        return "true";
    }
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $DB;
    global $my_id;

    $id_clicked = $_POST['value'];
    $result = followUser($DB, $my_id, $id_clicked);
    echo $result;
}
?>
