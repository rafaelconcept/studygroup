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
	<div class="col-md-9 col-sm-9 col-xs-9" >
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<a href="main.php"><img src="imagem/beta.png" class="foto1"></a>
		</div>
	</div>

	<div class="row">

		<div class="col-md-12 col-sm-12 col-xs-12 bg2" align="center" >

		<div class="row" >
			
			<div class="col-md-12 col-sm-12 col-xs-12" align="center">
				<h3>---------EDITAR GRUPO---------</h3>
			</div>
		</div>	
		</div>
	</div>
	
		<?php 
    $id = $_GET['grupo'];
	editGrupo($id);

		?>










	</div>
	</div>
</body>
</html>