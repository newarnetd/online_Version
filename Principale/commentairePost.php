<?php
include("otherPrincipale.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $DB, $key, $my_id;
    $postid = $_POST['postid'];
    $commentaire = encrypt($_POST['commentaire'], $key);
    $date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO commentaire (owner, postid, date, commentaire) VALUES (?, ?, ?, ?)";
    $data = $DB->save($sql, [$my_id, $postid, $date, $commentaire]);

    if ($data) {
        $sqlUpdate = "UPDATE posts SET commentaires = commentaires + 1 WHERE postid = ? LIMIT 1";
        $resultUpdate = $DB->save($sqlUpdate, [$postid]);
        $sqlSelectUserid = "SELECT userid FROM posts WHERE postid = ? LIMIT 1";
        $resultUserid = $DB->read($sqlSelectUserid, [$postid]);

        if ($resultUserid) {
            notification($resultUserid[0]['userid'], $my_id, "commenter", $postid);
            echo "true";
        } else {
            echo "Error retrieving userid";
        }
    } else {
        echo "Error inserting comment";
    }
}
?>
