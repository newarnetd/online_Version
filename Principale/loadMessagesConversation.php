<?php
include("otherPrincipale.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $limiteost;
    global $DB;
    global $my_id;
    $recever = decrypt($_POST['value'],$key);
    $query = "SELECT * FROM message WHERE (owner = ? AND userid = ?) OR (userid = ? AND owner = ?)  ORDER BY date DESC";
    $data = $DB->read($query, [$my_id,$recever,$my_id,$recever]);
    foreach($data as $dataMessage)
    {
        $messageText = decrypt($dataMessage['message'],$key);
        $messageDoc = decrypt($dataMessage['document'],$key);
        $messageImage = decrypt($dataMessage['image'],$key);
        $messageVideo = decrypt($dataMessage['video'],$key);
        if($dataMessage['owner'] == $my_id)
        {
            echo'<div class="messageConversation_users">
            <div class="Message">
                <div class="messageContextText">
                    <p>Bonjour luc</p>
                    <small>12:9</small>
                </div>
            </div>
            </div>';
        }else{
            echo'<div class="messageConversation_users">
            <div class="FriendMessage">
                <div class="messageContextText">
                    <p>Bonjour luc</p>
                    <small>12:9</small>
                </div>
            </div>
            </div>';
        }
    }
}
