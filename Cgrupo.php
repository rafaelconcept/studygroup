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
	<div class="col-md-9 col-sm-9 col-xs-9">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<a href="main.php"><img src="imagem/beta.png" class="foto1"></a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12 bg2">		
			
			<center><h3>---------CRIAR GRUPO---------</h3></center>

		</div>	
		
	</div>
	<div class="row">
		<form action=""  method="post">
		<div class="col-md-12 col-sm-12 col-xs-12 bg2">
			<div class="row">
			<div class="col-md-5 col-sm-5 col-xs-5">
				<center>
				<div class="row">
					<div class="col-md-10 col-sm-10 col-xs-10 bg8" align="center">
						<h4>Descrição do grupo</h4>	
					</div>
				</div>
			</center>
				
			<br>	
			<textarea placeholder="descrição do grupo, coloque aqui informações importantes sobre seu grupo, por exemplo:

			horarios de encontros
			 locais de encontros
			 etc..
			 " id="Descrição" name="texto"></textarea>

			
			<center>
				<div class="row">
					<div class="col-md-10 col-sm-10 col-xs-10 bg8" align="center">
						<h5>Link do grupo no whatsapp</h5>	
						<h6>Caso não tenha, deixe em branco</h6>
					</div>
				</div>
			</center>
				
			<input type="text" placeholder="link do grupo no whatsapp" id="Whats" name="whats">


			<br>
			<center>
				<br>
			<input align="center" type="submit" value="Criar grupo" class="btn btn-success" name="criar">
		
	
		
			</div>		
				


	<div class="col-md-7 col-sm-7 col-xs-7">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 bg8" align="center">
			<h4>Escolha um componente: </h4>
			</div>
		</div>
		
		<br><div class="row">
				<div class="teste" align="center">
				<label for="1"><img title="CALCULO I" src="imagem/1.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="1" id="1" class="botãomat" />
				</div>

				<div class="teste" align="center">
				<label for="2"><img title="CALCULO II" src="imagem/2.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="2" id="2" class="botãomat" />
				</div>

				<div class="teste" align="center">
				<label for="3"><img title="CALCULO III" src="imagem/3.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="3" id="3" class="botãomat" />
				</div>

				<div class="teste" align="center">
				<label for="4"><img title="CALCULO IV" src="imagem/4.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="4" id="4" class="botãomat" />
				</div>
				
				<div class="teste" align="center">
				<label for="9"><img title="QUIMICA GERAL" src="imagem/9.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="9" id="9" class="botãomat" />
				</div>

				<div class="teste" align="center">
				<label for="8"><img title="PROCESSAMENTO DE DADOS I" src="imagem/8.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="8" id="8" class="botãomat" />
				</div>

				<div class="teste" align="center">
				<label for="7"><img title="PROCESSAMENTO DE DADOS II" src="imagem/7.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="7" id="7" class="botãomat" />
				</div>

				<div class="teste" align="center">
				<label for="5"><img title="GEOMETRIA ANALITICA" src="imagem/5.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="5" id="5" class="botãomat" />
				</div>

				<div class="teste" align="center">
				<label for="6"><img title="ALGEBRA LINEAR" src="imagem/6.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="6" id="6" class="botãomat" />
				</div>

				<div class="teste" align="center">
				<label for="11"><img title="FISICA I" src="imagem/11.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="11" id="11" class="botãomat" />
				</div>
				
				<div class="teste" align="center">
				<label for="12"><img title="FISICA II" src="imagem/12.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="12" id="12" class="botãomat" />
				</div>

				<div class="teste" align="center">
				<label for="13"><img title="FISICA III" src="imagem/13.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="13" id="13" class="botãomat" />
				</div>

				<div class="teste" align="center">
				<label for="14"><img title="FISICA IV" src="imagem/14.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="14" id="14" class="botãomat" />
				</div>

				<div class="teste" align="center">
				<label for="15"><img title="METODOLOGIA DA PESQUISA" src="imagem/15.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="15" id="15" class="botãomat" />
				</div>

				<div class="teste" align="center">
				<label for="16"><img title="FUNDAMENTOS DA FILOSOFIA" src="imagem/16.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="16" id="16" class="botãomat" />
				</div>

				<div class="teste" align="center">
				<label for="17"><img title="ETICA E SUSTENTABILIDADE" src="imagem/17.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="17" id="17" class="botãomat" />
				</div>

				<div class="teste" align="center">
				<label for="18"><img title="METODOS ESTATISTICOS" src="imagem/18.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="18" id="18" class="botãomat" />
				</div>

				<div class="teste" align="center">
				<label for="19"><img title="CALCULO NUMERICO" src="imagem/19.png" class="mat" /></label><br>
				<input type="radio" name="emotion" value="19" id="19" class="botãomat" />
				</div>


			</div>
				
				






				
	</div>
	</div>	
	</div>
	</form>



	<?php

	
		if(empty($_POST["criar"])){
			
		}else{

		
		$texto = $_POST["texto"];
		$materia = $_POST["emotion"];
		$link = $_POST["whats"];

		if($texto != NULL && $materia != NULL){
			criarGrupo($texto, $materia, $link);






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