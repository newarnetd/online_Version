<?php
include("otherPrincipale.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $DB;
    global $my_id;

    $groupeid = decrypt($_POST['value'], $key);
    
    $query = "SELECT * FROM messagegroupe WHERE groupeid = ?";
    $data = $DB->read($query, [$groupeid]);

    if ($data) {
        foreach ($data as $dataMessage) {
            include("convesationGroupe.php");
        }
    }
}
?>
