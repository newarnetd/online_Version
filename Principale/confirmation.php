<?php
include("otherPrincipale.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $id_clicked = $_POST['value'];
    global $DB;
    global $my_id;

    $invitation = $DB->read("SELECT * FROM invitations WHERE invitationId = ? LIMIT 1", [$id_clicked])[0];
    $Emmeuteur = $invitation['userid'];
    $recepteur = $my_id;
    processInvitation($Emmeuteur, $recepteur, "accepter");
    processInvitation($recepteur, $Emmeuteur, "accepter");
    notification($Emmeuteur,$recepteur"accepter","");
}
?>
