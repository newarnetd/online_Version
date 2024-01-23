<?php
include("otherPrincipale.php");
$value = $_POST['value'];
echo base64_decode($value);
?>