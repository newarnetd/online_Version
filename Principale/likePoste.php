<?php
include("otherPrincipale.php");
function followUser($DB, $my_id) {
    global $key;
    $postid = $_POST['value'];

    $sql = "SELECT infos FROM likes WHERE type='aimer' AND postid = ? LIMIT 1";
    $result = $DB->read($sql, [$postid]);

    if ($result) {
        $like_data = json_decode($result[0]['infos'], true);
        $user_ids = array_column($like_data, "userid");

        if (!in_array($my_id, $user_ids)) {
            $arr["userid"] = $my_id;
            $like_data[] = $arr;
            $like_sting = json_encode($like_data);
            $sql = "UPDATE likes SET infos = ? WHERE type = ? AND  postid = ?";
            $DB->save($sql, [$like_sting, 'aimer', $postid]);
            $sql = "UPDATE posts SET likes  = likes  + 1,vues  = vues + 1 WHERE postid = ?";
            $DB->save($sql, [$postid]);
            $sql = "SELECT userid,likes FROM posts WHERE postid = ? LIMIT 1";
            $result = $DB->read($sql, [$postid]);
            DeleteDatahyperSync($my_id, $result[0]['userid'], "like");
            notification($result[0]['userid'], $my_id, "aimer",$postid);
            return $result[0]['likes'];
        } else {
            $data = array_search($my_id, $user_ids);
            unset($like_data[$data]);

            $like_sting = json_encode($like_data);
            $sql = "UPDATE likes SET infos = ? WHERE type = ? AND postid = ?";
            $DB->save($sql, [$like_sting, 'aimer', $postid]);
            $sql = "UPDATE posts SET likes  = likes  - 1,vues  = vues - 1 WHERE postid = ?";
            $DB->save($sql, [$postid]);
            $sql = "SELECT userid FROM posts WHERE postid = ? LIMIT 1";
            $result = $DB->read($sql, [$postid]);
            DeleteDatahyperSync($my_id, $result[0]['userid'], "like");
            return;
        }
    } else {
        $arr["userid"] = $my_id;
        $likes = json_encode([$arr]);
        $type = "aimer";
        $sql = "INSERT INTO likes (postid,type,infos) VALUES (?, ?,?)";
        $DB->save($sql, [$postid,$type,$likes]);
        $sql = "UPDATE posts SET likes  = likes  + 1,vues  = vues + 1 WHERE postid = ?";
        $DB->save($sql, [$postid]);
        $sql = "SELECT userid,likes FROM posts WHERE postid = ? LIMIT 1";
        $result = $DB->read($sql, [$postid]);
        AddDatahyperSync($my_id, $result[0]['userid'], "like");
        notification($result[0]['userid'], $my_id, $type,$postid);
        return $result[0]['likes'];
    }
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $DB;
    global $my_id;
    $result = followUser($DB, $my_id);
    echo $result;
}
?>
