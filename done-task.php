<?php

include ("conexao.php");

$usermail = $_GET['email'];
$userId = $_GET['id'];

$day = (int)date ("d");
$month = (int)date("m");
$year = (int)date ("Y");


function timeAutentication (){
//recortar a dada do banco
global $dateGet;

$diaBd = (int)substr($dateGet, 0,2);
$mesBd = (int)substr($dateGet, 3, -5);
$anoBd = (int)substr($dateGet,6);

// manipulando data atual
global $day;
global $month;
global $year;
global $userId;
global $diasGet;
//mecanica
$dayFast = $day - $diaBd;

//condição para inserçao no bando de dados > 1;
if ($dayFast >= 1){
include ("conexao.php");
$diasGet--;

//caso eu cumpra passo na tarefa o numero de trofeus aumenta
$_SESSION['trofeus']++;

$dateRequest = "$day-$month-$year";

$update = "UPDATE tarefas_mytask SET dataDaTarefa='$dateRequest', $diasDaTarefa=$diasGet WHERE id=$userId";

$query = mysqli_query($conn, $update) or die ("Erro na query de update");

if($update){
	echo "Success!!";
}else{
	echo "Error!!";
}
include ("log.php");

}else{

include ("log.php");

}//fim do if de condição de inserção no bando de dados


}//fim da função timeAutentication

$cons = "SELECT *FROM  tarefas_mytask WHERE email='$usermail'  AND id=$userId";


$query = mysqli_query($conn, $cons)or die ("Erro na query");


$rows = mysqli_num_rows($query) or die ("Erro nas rows");


if ($rows > 0){
	while ($dados = $query->fetch_array()){
		$dateGet = date('d-m-Y', strtotime($dados['dataDaTarefa']));
		$diasGet = $dados['diasDaTarefa'];
		$_SESSION['trofeus'] = $dados['trofeus'];
	}

	timeAutentication();

}else{
	echo "Nenhum dado encontrado.";
}
//include ("log.php");
?>