<?php
session_start();

if (!isset($_GET['numLog'])){
	echo "ops!! Acesso negado.";
	exit;
}else{
	if (isset($_SESSION['numeral_log'])){
		if ($_SESSION['numeral_log'] == $_GET['numLog']){
			$nomeOfuser = $_SESSION['nome_view_login'];
			$emailOfuser = $_SESSION['email_view_login'];
		}else{
			echo "ops! Acesso negado.";
			exit; 
		}
	}else{
		echo "ops! Acesso negado.";
		exit;
	}
}

?>