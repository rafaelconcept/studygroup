<?php 
include 'conexao.php';
?>
<?php 

ini_set('error_reporting', 0);
ini_set('display_errors', 0);

session_start();

if(isset($_SESSION['login'])){
if($_SESSION['tipo']==1 OR $_SESSION['tipo']==2){
}else{	
?><script type="text/javascript">window.location = 'deslogar.php'; </script> <?php	
	}	
}

?>

<!DOCTYPE html>
<html>
<head>
		
	<meta charset="utf-8"/>
	<title>etica</title>
	<link href="css/etica.css" rel="stylesheet" type="text/css"/>
	<link href="ICONE" rel="" type="image/x-icon"/>

</head>
<body class="body">
	<div>
		<div class="div-block">
					<img src="logo.png" width="230" class="image"/>
		</div>
	</div>
	<div>
		<div class="div-block-2">
			<div class="text-block">Registro</div>
			<div class="w-form">
				<form method="post" name="formulario">

					<input type="text" class="text-field w-input" maxlength="256" name="nome" placeholder="Nome: "/>

					<input type="password" class="text-field w-input" maxlength="256" name="senha" placeholder="Senha: "/>

					<input type="text" class="text-field w-input" maxlength="256" name="email" placeholder="E-mail: "/>

					<input type="text" class="text-field w-input" maxlength="256" name="contato" placeholder="Tell para contato (Whatsapp): "/>

					<input type="submit" name="enviar" value="CADASTRAR" class="submit-button w-button"/>

				</form>

				<?php



		if(empty($_POST["enviar"])){
			
		}else{

		$usuario = $_POST["nome"];
		$senha = $_POST["senha"];
		$email = $_POST["email"];
		$telefone = $_POST["contato"];

		if($usuario != NULL && $senha != NULL && $email != NULL && $telefone != NULL){
			verifica($usuario, $email, $senha, $telefone);






		}else{
			echo "Preencha todos os campos";
		}
		}

		
		?>

		





			</div>
		</div>
	</div>
	
</body>
</html>
