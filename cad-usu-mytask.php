<?php

include ("conexao.php");

$nomeForCad  = $_POST['nome']; 
$emailForCad =$_POST['email'];
$senhaForCad = $_POST['senha-origin'];

$insert =  mysqli_query($conn, "INSERT INTO usu_mytask (nome, email, senha) VALUES ('$nomeForCad', '$emailForCad', '$senhaForCad')") or die ("Erro ao tentar inserir usuário no banco de dados");


//gera numero aleatorio para poder logar com segurança
include ("log.php");

?>
