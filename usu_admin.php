<?php
include ("conexao.php");

include ("log_autentication.php");
$email_usu_consulta = $emailOfuser;

$selecao =  "SELECT * FROM tarefas_mytask WHERE email='$email_usu_consulta'";

$query = mysqli_query($conn, $selecao);

$rows = mysqli_num_rows ($query);


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<header>
	<div class="container">
	<div class="row">
		<div class="col-6">
		<h1 class="titulo">MY TASK</h1>
		<h4 class="sub-titulo">Um passo de cada vez.</h4>
			
		</div>
	
		</div>
		
		<div class="img-trofeu">
		<img src="img/trofeu.png" alt="Quantos premios você já ganhou">
		
		<span class="badge">
			<?php
				include ("pointer.php");
			?>
		</span>		
		</div>
		</div>
</header>
		<div class="container-fluid">
			<!--INICIO DA NAVBAR-->
			<nav class="navbar navbar-default ">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mytasknav" aria-expanded="false">
							<span class="sr-only"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="#" class="navbar-brand">MY TASK</a>
					</div>
					<!--FIM DA NAV HEADER-->
						<div class="collapse navbar-collapse" id="mytasknav">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">HOME</a></li>
								
								<!--INICIO DA MODAL DE CADASTRO DE TAREFAS-->	
								<li>

								<!--passagem via get-->
								<a href="" data-toggle="modal" data-target="#modalTarefa">CRIAR UMA TAREFA</a>
								<div class="modal fade" id="modalTarefa"tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
											<button class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
												<h4>Cadastre uma nova tarefa</h4>
											</div>
											<div class="modal-body">

											<!--INICIO DO FORM DE CADASTRO DE TAREFAS-->
											<form action=<?php echo "cad-tarefa.php?email=".$emailOfuser."&p=".$myChampions; ?>
											 method="post">
												<div class="form-group">
													<label for="">
														Insira um nome para sua tarefa
													</label>
													<input type="text" name="nome-tarefa" class="form-control">
												</div>
												<div class="form-group">
													<label for="">
														Qual o grau de importancia desta tarefa?
													</label>
													<select class="form-control"name="grau-tarefa" id="">
														<option value="baixo">
														BAIXO</option>
														<option value="mediano">
														MEDIANO</option>
														<option value="alto">
														ALTO</option>
														<option value="muitoalto">
														MUITO ALTO</option>
													</select>
												</div>
												<div class="form-group">
													<label for="">
														Determine um prazo para sua tarefa
													</label>
													<input min='1' type="number" class="form-control" name="dias-tarefa">
												</div>
												<button class="btn btn-primary btn-block">
													Concluir 
												</button>		
												</form>
											</div>
										</div>
									</div>
								</div>
								</li>


								<li><a href="log.php">MINHAS TAREFAS</a></li>
								<!--LISTA PAI DO SBMENU-->
								<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">CONFIGURAÇOES
								<span class="caret"></span>
								</a>
									<ul class="dropdown-menu">
										<li><a href="#"></a>Mudar senha</li>
										<li class="divider"></li>
										<li><a href="#"></a>Mudar email</li>
										<li class="divider"></li>
										<li><a href="#"></a>Muda meu nome</li>
									</ul>
								</li>
								<li><a href="logout.php">LOGOUT</a></li>
								<li><a href="">Olá <?php echo $nomeOfuser;?></a></li>
							</ul>
							
							<!--INICIO DO FORM DE BBUSCA NA NAV-->
							<form action="" method="post"class="navbar-form navbar-right">
								<div class="input-group">
									<input aria-describedby="searh-icon" type="text" class="form-control"placeholder="Localizar tarefa">
										<span class="input-group-btn">
											
										<button class="btn btn-success">
										<span class="glyphicon glyphicon-search"></span>
										</button>
										</span>
								</div>
							</form>
						</div>
				</div>
				
			</nav>
				<div class="container">
				<div class="row">
					<h1 class="titulo-tabela">Suas tarefas</h1>
				</div>
				<!--INICIO DA TABELA PARA VIEW DE TAREFAS-->
					<table class="table table-bordered table-hover my-table">
						<tr>
							<th>Nome</th>
							<th>Grau de importancia</th>
							<th>Dias restantes</th>
							<th>Data de criação</th>
							<th>ùltima alteração</th>
							<th>Ações</th>
						</tr>
					<?php 

						if($rows > 0){ 

					while ($dados=$query->fetch_array()){

						?>
						<tr>
							<td><?php echo $dados['nomeDaTarefa'];?></td>
							<td><?php echo $dados['grauDaTarefa'];?></td>
							<td><?php echo $dados['diasDaTarefa'];?></td>
							<td><?php echo $dados['dataDaTarefa'];?></td>
							<td><?php echo $dados['dataMod'];?></td>
							<td><button class="btn btn-info btn-xs"><a class="glyphicon glyphicon-ok" href=<?php echo "done-task.php?email=".$emailOfuser."&id=".$dados['id'];?> title="Concluir esta tarefa"></a></button></td>
						</tr>
						<?php
						//fechamento do while
							}

						}else{
							echo "<span style='color:#f00'>Not task found*</span>";
						} 

						?>
				</table>
				</div>
		
			
				
			
		</div>
<footer>
	<div class="container">
		<a class='info-privacidade' data-toggle="modal" data-target="#modalprivit"href="">Nossa política.</a>
		<?php
			//inclusão da modal
			include ("politica.php");
		?>
	</div>
</footer>	



<script  src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	

</body>
</html>