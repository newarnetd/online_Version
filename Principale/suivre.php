<?php
include("otherPrincipale.php");

function followUser($DB, $my_id, $id_clicked) {
    $id_clicked = decrypt($id_clicked, $key);

    $sql = "SELECT suivre FROM relations WHERE type='suivre' AND userid = ? LIMIT 1";
    $result = $DB->read($sql, [$my_id]);

    if ($result) {
        $suivre = json_decode($result[0]['suivre'], true);
        $user_ids = array_column($suivre, "userid");

        if (!in_array($id_clicked, $user_ids)) {
            $arr["userid"] = $id_clicked;
            $arr["date"] = date("Y-m-d H:i:s");
            $suivre[] = $arr;

            $suivre_string = json_encode($suivre);
            $sql = "UPDATE relations SET suivre = ? WHERE type = ? AND userid = ?";
            $DB->save($sql, [$suivre_string, 'suivre', $my_id]);

            $sql = "UPDATE users SET suivi = suivi + 1 WHERE userid = ?";
            $DB->save($sql, [$id_clicked]);

            AddDatahyperSync($my_id, $id_clicked, "suivre");
            return "true";
        } else {
            $data = array_search($id_clicked, $user_ids);
            unset($suivre[$data]);

            $suivre_string = json_encode($suivre);
            $sql = "UPDATE relations SET suivre = ? WHERE type = ? AND userid = ?";
            $DB->save($sql, [$suivre_string, 'suivre', $my_id]);

            $sql = "UPDATE users SET suivi = suivi - 1 WHERE userid = ?";
            $DB->save($sql, [$id_clicked]);

            DeleteDatahyperSync($my_id, $id_clicked, "suivre");
            return "false";
        }
    } else {
        $arr["userid"] = $id_clicked;
        $arr["date"] = date("Y-m-d H:i:s");
        $arr["proposition"] = "attente";
        $relations = json_encode([$arr]);

        $sql = "INSERT INTO relations (userid, suivre, type) VALUES (?, ?, 'suivre')";
        $DB->save($sql, [$my_id, $relations]);

        $sql = "UPDATE users SET suivi = suivi + 1 WHERE userid = ?";
        $DB->save($sql, [$id_clicked]);

        AddDatahyperSync($my_id, $id_clicked, "suivre");
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
