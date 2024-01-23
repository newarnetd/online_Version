<?php
include("otherPrincipale.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $limiteost;
    global $DB;
    global $my_id;

    $query = "SELECT * FROM story WHERE userid = ? AND status = ? LIMIT $limiteost";
    $result = $DB->read($query, [$my_id,1]);

    if ($result) {
        foreach ($result as $_ROW) {
            $USERS_ROW = $user->get_user($_ROW['userid']);
            include("Int_stories.php");
        }
    }

    $friendsResult = $user->Mesamis($my_id, "amis");

    if ($friendsResult) {
        foreach ($friendsResult as $friend) {
            $friendID = $friend['userid'];
            $friendQuery = "SELECT * FROM story WHERE userid = ? AND status = ? LIMIT $limiteost";
            $friendData = $DB->read($friendQuery, [$friendID, 1]);

            if ($friendData) {
                foreach ($friendData as $_ROW) {
                    $USERS_ROW = $user->get_user($_ROW['userid']);
                    include("Int_stories.php");
                }
            }
        }
    }
}
?>
