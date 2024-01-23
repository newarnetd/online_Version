<?php
include("otherPrincipale.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    global $limiteost;
    global $DB;
    global $my_id;
    $amisResult = $user->Mesamis($my_id, "amis");
    $suiviResult = $user->Mes_suivi($my_id, "suivre");
    $combinedResults = array_merge($amisResult, $suiviResult);
if($combinedResults)
{
    if ($combinedResults) {
        $AmisIds = array_column($combinedResults, "userid");
        $AmisIds = implode("','", $AmisIds);
    }

    $query = "SELECT * FROM posts 
          WHERE (userid = ? OR userid IN ('$AmisIds')) 
          AND (has_document = 1 OR has_document = 1) 
          ORDER BY RAND()";
$data = $DB->read($query, [$my_id]);

    if ($data) {
        foreach ($data as $data_poste) {
            global $key;
            global $user;
            $OWNER = $user->get_user($data_poste['userid']);
            include("int_books.php");
        }
    }
}else{
    $query = "SELECT * FROM posts WHERE userid = ?  AND (has_document = 1 OR has_document = 1)  ORDER BY RAND()";
    $data = $DB->read($query, [$my_id]);

    if ($data) {
        foreach ($data as $data_poste) {
            global $key;
            global $user;
            shuffle($data);
            $OWNER = $user->get_user($data_poste['userid']);
            include("int_books.php");
        }
    }
}
}
?>
