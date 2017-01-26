<?php
session_start();

include ("conexao.php");

$senhaDeLogin = $_POST['senha'];
$emailDeLogin = $_POST['email'];

$cons = "SELECT *FROM usu_mytask WHERE senha='$senhaDeLogin' AND email='$emailDeLogin'" or die ("Erro ao tentar autenticar usuário");
$query = mysqli_query($conn, $cons);

$rows = mysqli_num_rows($query);

if ($rows > 0){
	while($dados=$query->fetch_array()){
		$_SESSION['nome_view_login'] = $dados['nome'];
		$_SESSION['email_view_login'] = $dados['email'];
	}
	include ("log.php");
	
}else{
	echo "Falha na autentiation.";
}


session_register();
?>