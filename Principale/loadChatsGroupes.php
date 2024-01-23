<?php
include("otherPrincipale.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $limiteost;
    global $DB;
    global $my_id;
    $groupeid = decrypt($_POST['value'], $key);
    $query = "SELECT * FROM messagegroupe WHERE groupeid = ? ORDER BY date DESC";
    $data = $DB->read($query, [$groupeid]);

    $lastMessages = [];

    if ($data) {
        foreach ($data as $message) {
            $groupID = $message['groupeid'];
            if (!isset($lastMessages[$groupID])) {
                $lastMessages[$groupID] = $message;
            }
        }

        foreach ($lastMessages as $lastMessage) {
            $ownerId = $lastMessage['owner'];
            $USERS_ROW = $user->get_user($ownerId);
            $dataGroupe = detailGroupe($lastMessage['groupeid']);
            include("int_conversation_chatGroupe.php");
        }
    }
}
?>
