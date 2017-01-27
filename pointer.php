<?php
$myChampions =0;
if(isset($_SESSION['pointer'])){
	$myChampions = $_SESSION['pointer'];
}else{
	$myChampions = $myChampions;
}

echo $myChampions;
?>