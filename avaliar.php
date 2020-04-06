<?php 
include 'conexao.php';

?>

<?php 
ini_set('error_reporting', 0);
ini_set('display_errors', 0);

session_start();

if(empty($_SESSION['login'])){
	
if($_SESSION['tipo']==1 OR $_SESSION['tipo']==2){

}else{

?><script type="text/javascript">window.location = 'deslogar.php'; </script> <?php	
	}	
}?>




<!Doctype html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<title>studygroup</title>
</head>
<body>
	<div class="corpo bg0">
		<?echo"$var";?>
	<div class="row">
	<div class="col-md-3 col-sm-3 col-xs-3 bg1">
	<div class="row" align="center">
		<div class="col-md-12 col-sm-12 col-xs-12 ident">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-6">
			<img src="imagem/ident.jpg" class="foto">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 descri" align="left">
					<div class="descrifinal">
						<h6>NOME: <? $pessoa=$_SESSION['nome'];echo"$pessoa";?></h6>
						<h6>TEL: <? $tell   =$_SESSION['tell'];echo"$tell";?></h6>
					</div>
					<a href="profile.php"><input type="submit" value="Editar perfil" class="btn btn-success"></a>
					<br>
					<a href="deslogar.php"><input type="submit" value="Deslogar" class="btn btn-danger" width=>
				</div>
			</div>
	</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-sm-12 col-xs-12 bg3">
			<center><img src="imagem/21.png" class="foto2">
			<br>
			<h3><a href="main.php"><img src="imagem/22.png" class="foto2"></a></h3>
			<h3><a href="tutorial.php"><img src="imagem/23.png" class="foto2"></a></h3>
			<h3><a href="grade.php"><img src="imagem/24.png" class="foto2"></></a></h3>
			<h3><img src="imagem/25.png" class="foto2"></h3>
			<h3><a href="avaliar.php"><img src="imagem/26.png" class="foto2"></></a></h3>
			<br></center>
	</div>
	<br>
	</div>
	</div>
	<div class="col-md-9 col-sm-9 col-xs-9">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<a href="main.php"><img src="imagem/beta.png" class="foto1"></a>
		</div>
	</div>
	<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12 bg2">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12" align="center">
				<h3>---------AVALIAR---------</h3><br>
			<center><a href="atualizacao.php"><input type="submit" value="Ver Atualizações" class="btn btn-success"></a></center>
			</div>			
		</div>
		</div>	
		</div>
	<div class="row" align="center">
		<div class="col-md-12 col-sm-12 col-xs-12 bg2 bg13" align="center">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-3"><center><span>--------------</span></center></div>
				<div class="col-md-6 col-sm-6 col-xs-6 bg14" align="center">
					<p><strong>Deixe aqui sua avaliação sobre o que achou
					do projeto/site. Irá ser de extrema importância!</strong></p>
					
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
					<center><span>--------------</span></center>
				</div>
			</div>
			<div class="row" align="center">
					<div class="col-md-12 col-sm-12 col-xs-12">
				<center>
					<form method="post">
				<textarea aliplaceholder="Comentario..." id="ava" name="texto"></textarea>
				</center>
			</div>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12 bg2">
			<center><input type="submit" name="enviar" value="enviar" class="btn btn-success"></center>
			</form><br>


			<?
			$usuario = $_SESSION['nome'];
			if(empty($_POST["texto"])){
			
		}else{

		$texto = $_POST["texto"];
		

		if($texto != NULL){
			comentar($usuario, $texto);






		}else{
			echo "Comenta :c";
		}
		}
	?>
			







		</div>
	</div>
	</div>	
	</div>
</body>
</html>