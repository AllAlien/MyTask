<?php
include ("conexao.php");

error_reporting(E_ALL|E_STRICT);

$emailOftarefa = $_GET['email'];

$nomeOftarefa = $_POST['nome-tarefa'];
$grauOftarefa = $_POST['grau-tarefa'];
$diasOftarefa = $_POST['dias-tarefa'];

//geração de dada.

$datedia = date('d');
$datemes = date('m');
$dateano = date ('Y');

//string formada 

$dateOfTarefa = "$datedia-$datemes-$dateano";




$insertTarefa = mysqli_query($conn, "INSERT INTO tarefas_mytask (email, nomeDaTarefa, grauDaTarefa, diasDaTarefa, dataDaTarefa)VALUES ('$emailOftarefa','$nomeOftarefa','$grauOftarefa',$diasOftarefa,'$dateOfTarefa' )");

if ($insertTarefa){
	echo "Inserido com sucesso!";
}
else{
	echo "Não inserido!";
}

//permite que o usuário tenha permissão para acessar o admin
include ("log.php");

?>