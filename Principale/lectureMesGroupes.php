<?php
include("otherPrincipale.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $DB;
    global $my_id;

    $queryGroupes = "SELECT * FROM mesgroupes WHERE (userid = ? OR owner = ?) GROUP BY nom ORDER BY RAND() ";
    $resultatGroupes = $DB->read($queryGroupes, [$my_id, $my_id]);

    if ($resultatGroupes) {
        foreach ($resultatGroupes as $ROW) {
            $groupeID = $ROW['groupe'];
            $queryMessages = "SELECT * FROM messagegroupe WHERE groupeid = ? ORDER BY date DESC";
            $data = $DB->read($queryMessages, [$groupeID]);

            if ($data) {
                $lastMessage = end($data);
                $ownerId = $lastMessage['owner'];
                $USERS_ROW = $user->get_user($ownerId);
                $dataGroupe = detailGroupe($groupeID);
                include("int_conversation_chatGroupe.php");
            }else{
                $groupeID = $ROW['groupe'];
                $dataGroupe = detailGroupe($groupeID);
                include("int_mes_groupes.php");
            }
        }
    } else {
        echo "<div class='textCent'>Actuellement, vous n'avez aucun groupe. Cependant, vous pouvez toujours en créer autant que vous le souhaitez, uniquement pour vos propres intérêts.</div>";
    }
}
?>
