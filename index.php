<?php 
include 'conexao.php';
?>

<?php 
ini_set('error_reporting', 0);
ini_set('display_errors', 0);

session_start();
if(isset($_SESSION['login'])){
if($_SESSION['tipo']==1){	
?><script type="text/javascript">window.location = 'main.php'; </script> <?php		
	}
if($_SESSION['tipo']==2){	
?><script type="text/javascript">window.location = 'coment.php'; </script> <?php		
	}
}
?>


<!DOCTYPE html>
<head>

	<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
	<meta charset="utf-8"/><title>Login</title><meta content="Login" property="og:title"/>
	

	<link href="css/login.css" rel="stylesheet" type="text/css"/>


	<link href="ICONE" rel="shortcut icon" type="image/x-icon"/>



</head>

	<body class="body">

		<div>
			<div class="div-block">
				<img src="registro/logo.png" width="230" class="image"/>
			</div>
		</div>
		<div>
			<div class="div-block-2 novo">
				<div class="text-block">LOGIN</div>
				<div class="w-form">


					<form name="form" method="post">

						<input type="text" class="text-field w-input" maxlength="256" name="usuario" placeholder="Usuario: "/>
						<input type="password" class="text-field w-input" maxlength="256" name="senha" placeholder="Senha: "/>
						<div class="div-block-3 dois">
							<input type="submit" value="ENTRAR" name="entrar" class="submit-button novo w-button"/>

							<input type="button" onClick="window.open('cadastrar.php')" value="CADASTRAR" name="cadastrar" class="submit-button caadastrar w-button"

							/>

						</div>

					</form>

						<?php

		if(empty($_POST["entrar"])){
			
		}else{
				$usuario = $_POST["usuario"];
				$senha   = $_POST["senha"];
				if($usuario!=NULL){
					
					login($usuario, $senha);
					
				}else{
					echo "digite algo";
				}
			}
?>




					<div class="w-form-done">
						<div>Thank you! Your submission has been received!</div>
					</div>
					<div class="w-form-fail">
						<div>Oops! Something went wrong while submitting the form.</div></div>
					</div>
				</div>
			</div>		


</html>
