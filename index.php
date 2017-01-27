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
		<h1 class="titulo">MY TASK</h1>
		<h4 class="sub-titulo">Um passo de cada vez.</h4>
	</div>
</header>
		<div class="container-fluid color-index">
			<div class="row">
				<div class="col-md-12">
					
						
					<div class="form-index center-block">
						<h1 class="titulo-form-index">Bem vindo ao MYTASK</h1>
						
						<button  id="btn-login-index" data-toggle="modal" data-target="#modal-login" class="btn btn-success">
							Entrar
						</button>
						<!--INICIO DE MODAL-->
						<div class="fade modal" tabindex="-1" id="modal-login" role="dialog" aria-labelledby="mySmallModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
									<button class="close" data-dismiss="modal" data-target="close"> <span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="modal-login">Logue na sua conta</h4>
									</div>
									<div class="modal-body">
									<!--INICIO DO FORM DE LOGIN-->
										<form autocomplete="off" action="autentication-usu.php" method="post">
											<div class="form-group">
												<label class="form-control"for="">Informe seu e-mail</label>
												<input class="form-control" type="email" name="email" placeholder="Informe seu e-mail..">
											</div>
											<div class="form-group">
												<label for="" class="form-control">Insira sua senha</label>
												<input type="password" name="senha" placeholder="Informe sua conta.." class="form-control">
											</div>
											<span><a href="">Esqueci minha senha</a></span>
											<button class="btn btn-primary btn-block">Login</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!--FIM DE MODAL-->
						<!--INICIO DA MODAL DE CADASTRO-->
						<button data-target="#modal-cad" data-toggle="modal" class="btn btn-success">
							Cadastrar uma conta
						</button>
						<div class="fade modal" id="modal-cad" tabindex="-1" role="dialog"
						aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
								<!--INICIO O CABEÇAHO DA JANELA-->
									<div class="modal-header">
											
									<button class="close" data-dismiss="modal" aria-label="close">
										<span aria-hidden="true">&times;</span>
									</button>
											<!--INICIO DA DIV DE LOAD-->
									<div class="loading">
										<img id="loading" src="img/load-img.gif" alt="">
										<h1 id="titulo_cad">Insira os dados para cadastro</h1>
									</div>

									<!--FIM DA DIV DE LOAD-->


										
									</div>
									<div class="modal-body">
									<!--INICIO DO FORM DE CADASTRO-->
										<form id="form_cad" action="cad-usu-mytask.php" method="post">
											<div class="form-group">
												
												<input  required placeholder="Informe seu nome.."type="text" name="nome" class="form-control">
											</div>
											<div class="form-group">
											
												<input required  placeholder="Informe seu e-mail.."type="email" name="email" class="form-control">
											</div>
											<div class="form-group">
											
												<input required  placeholder="Escolha uma senha.."type="password" name="senha-origin" class="form-control">
											</div>
											<div class="form-group">
										
												<input required  placeholder="Confirme sua senha."type="password" name="senha-teste" class="form-control">
											</div>
											<button class="btn btn-primary btn-block">
												Realizar cadastro
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
				
			
		</div>
<footer>
	<div class="container">
		<a class='info-privacidade'href="">Nossa política de privacidade.</a>
	</div>
</footer>	




<script  src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	

</body>
</html>