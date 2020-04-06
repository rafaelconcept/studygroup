<?php 
include 'conexao.php';
?>

<!Doctype html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/contato.css" />
	<title>studygroup</title>
</head>
<body>
	<div class="row bg0">
	<div class="col-md-12 bg1">	
	<div class="slide">
		<ul>
		<li><img src="imagem/estudo4.jpg"/></li>
		<li><img src="imagem/estudo5.png"/></li>
		<li><img src="imagem/estudo6.png"/></li>
		</ul>
	</div>
	</div>
	</div>
	<div class="row bg2">
		<div class="col-md-4"></div>
		<div class="col-md-4 bg1 bg0">
			<form method="post">
			<center><h1><label><strong>REGISTRO</strong></label></h1></center>
			<br>
			<br>
			<h2><label><strong>Nome</strong></label></h2>
			<input type="text" name="nome" placeholder="digite seu nome"/>
			<br>
			<br>
			<br>
			<br>
			<h2><label><strong>Senha</strong></label></h2>
			<input type="password" name="senha" placeholder="digite sua senha"/>
			<br>
			<br>
			<br>
			<br>
			<h2><label><strong>Email</strong></label></h2>
			<input type="text" name="email" placeholder="digite seu email" size="33px"/>
			<br>
			<br>
			<br>
			<br>
			<h2><label><strong>Telefone para contato(Whatsapp)</strong></label></h2>
			<input type="text" name="telefone" placeholder="digite seu telefone para contato" size="33px"/>
			<br>
			<br>
			<br>
			<br>
			<input type="submit" value="Cadastrar" name="enviar">
		</form>
		<?php



		if(empty($_POST["enviar"])){
			echo "Preencha os campos";
		}else{

		$usuario = $_POST["nome"];
		$senha = $_POST["senha"];
		$email = $_POST["email"];
		$telefone = $_POST["telefone"];

		if($usuario != NULL && $senha != NULL && $email != NULL && $telefone != NULL){
			verifica($usuario, $email, $senha);






		}else{
			echo "Preencha todos os campos";
		}
		}

		
		?>






		<!-- aqui vai a verificação e se tiver ok da um reload para main.html-->
			</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>