<?php
include("otherPrincipale.php");
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $limiteost;
    global $DB;
    global $my_id;
    $recever = decrypt($_POST['value'],$key);
               $query = "SELECT * FROM message  WHERE (owner = ? AND userid = ?) OR (userid = ? AND owner = ?)";
               $dataMessage = $DB->read($query,[$my_id,$recever,$my_id,$recever]);
              foreach($dataMessage as $dataMessage)
              {
                $seen = $dataMessage['seen'];
                if($seen == 0)
                {
                  $background= "var(--color-verter_claire)";
                  $color="#212121";
                }else{
                  $background= "var(--color-blanche-1)";
                  $color="var(--color-text)";
                }
                
                include("convesation.php");
              }
}
