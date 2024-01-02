<?php
include("otherPrincipale.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $id_clicked = $_POST['value'];
    global $DB;
    global $my_id;
    $sql = "DELETE FROM invitations WHERE id = ? LIMIT 1";
    $result = $DB->read($sql, [$id_clicked]);
    echo 'true';
}
?>