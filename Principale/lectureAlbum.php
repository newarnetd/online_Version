<?php
include("otherPrincipale.php");
if($_SERVER['REQUEST_METHOD'] === "POST") 
{
    global $DB,$my_id;
    $query = "SELECT * FROM posts
    WHERE userid = ? AND has_image <> 0";
 $data = $DB->read($query, [$my_id]);

    $data = $DB->read($query, [$my_id]);

    if($data)
    {
        foreach($data as $ROW)
        {
            $image = decrypt($ROW['image'],$key);
            echo "<div class='conteneuramis albumObly'>
            <img src='$image'>
            </div>";
        }
    }
}
?>