
<?php
session_start();

$numeral = rand(1000, 9000);
$_SESSION['numeral_log'] = $numeral;

header("location:usu_admin.php?numLog=".$numeral);

?>