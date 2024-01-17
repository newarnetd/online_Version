<?php
include("otherPrincipale.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $limiteost;
    global $DB;
    global $my_id;

    $query = "SELECT * FROM message WHERE owner = ? OR userid = ? ORDER BY date DESC";
    $data = $DB->read($query, [$my_id, $my_id]);

    if ($data) {
        $conversations = array();

        foreach ($data as $data_chat) {
            global $key;
            global $user;
            $messageId = $data_chat['messageid'];
            if (array_key_exists($messageId, $conversations)) {
                $conversations[$messageId]['messages'][] = $data_chat;
            } else {
                $otherUserId = ($data_chat['owner'] == $my_id) ? $data_chat['userid'] : $data_chat['owner'];
                $otherUser = $user->get_user($otherUserId);
                $conversation = array(
                    'user' => $otherUser,
                    'messages' => array($data_chat)
                );
                $conversations[$messageId] = $conversation;
            }
        }
        usort($conversations, function ($a, $b) {
            $aLastMessageDate = end($a['messages'])['date'];
            $bLastMessageDate = end($b['messages'])['date'];
            return strtotime($bLastMessageDate) - strtotime($aLastMessageDate);
        });

        foreach ($conversations as $conversation) {
            if($conversation['messages'][0]['owner'] == "$my_id")
            {
                $USERS_ROW = $user->get_user($conversation['messages'][0]['userid']);
            }else{
                $USERS_ROW= $user->get_user($conversation['messages'][0]['owner']);
            }
            include("int_conversation_chat.php");
        }
    }
}
?>
