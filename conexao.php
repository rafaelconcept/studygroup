<?php //require_once('index.php') ?>
<?php

	$host    = 'localhost';
	$dono = 'root';
	$pass   = '';
	$banco   = 'id6912152_etica';

	$db = mysql_connect($host, $dono, $pass);
	mysql_select_db($banco);
	
	
	
	#funcao para fazer login
	function login($usuario, $senha){
	$usuario = addslashes($usuario);
	$senha = addslashes($senha);


	    
	    
		$query = mysql_query("SELECT * FROM usuario WHERE BINARY login = '$usuario' AND senha = '$senha'");
		$exibe = mysql_fetch_assoc($query);
		if(!$exibe){
			echo "usuario ou senha incorreto";	
		}else{
			session_start();
			$_SESSION['nome'] = $exibe['nome'];
			$_SESSION['login'] = $exibe['id'];
			$_SESSION['tipo'] =  $exibe['tipo'];
			$_SESSION['tell'] = $exibe['telefone'];	

			$userId = $_SESSION['login'];
			$userConta = $_SESSION['nome'];

			if($_SESSION['tipo'] == 1) {			
			?>
            <script type="text/javascript">
			window.location = 'main.php'; 
			
			</script>
            <?php
			}
			if($_SESSION['tipo'] == 2) {
			?>
          	<script type="text/javascript">
			window.location = 'coment.php'; 
			
			</script>
            <?php	
				
			}
			
		}
	}

function fotinha($materia){
		
		$passar;
		if($materia == 1) $passar = "Calculo I";
		if($materia == 2) $passar = "Calculo II";
		if($materia == 3) $passar = "Calculo III";
		if($materia == 4) $passar = "Calculo IV";
		if($materia == 5) $passar = "Geometria Analitica";
		if($materia == 6) $passar = "Algebra Linear";
		if($materia == 7) $passar = "P.D II";
		if($materia == 8) $passar = "P.D I";
		if($materia == 9) $passar = "Quimica";
		if($materia == 11) $passar = "Fisica I";
		if($materia == 12) $passar = "Fisica II";
		if($materia == 13) $passar = "Fisica III";
		if($materia == 14) $passar = "Fisica IV";
		if($materia == 15) $passar = "Metodologia.P";
		if($materia == 16) $passar = "Filosofia";
		if($materia == 17) $passar = "Ética e Susten.";
		if($materia == 18) $passar = "Metodos Estatisticos";
		if($materia == 19) $passar = "Calculo Numerico";
		echo "$passar";
		pesquisar($passar);







	}







	function criarGrupo($texto, $materia, $link){
		
		$passar;
		if($materia == 1) $passar = "Calculo I";
		if($materia == 2) $passar = "Calculo II";
		if($materia == 3) $passar = "Calculo III";
		if($materia == 4) $passar = "Calculo IV";
		if($materia == 5) $passar = "Geometria Analitica";
		if($materia == 6) $passar = "Algebra Linear";
		if($materia == 7) $passar = "P.D II";
		if($materia == 8) $passar = "P.D I";
		if($materia == 9) $passar = "Quimica";
		if($materia == 11) $passar = "Fisica I";
		if($materia == 12) $passar = "Fisica II";
		if($materia == 13) $passar = "Fisica III";
		if($materia == 14) $passar = "Fisica IV";
		if($materia == 15) $passar = "Metodologia.P";
		if($materia == 16) $passar = "Filosofia";
		if($materia == 17) $passar = "Ética e Susten.";
		if($materia == 18) $passar = "Metodos Estatisticos";
		if($materia == 19) $passar = "Calculo Numerico";
		
		

		$nomee = $_SESSION['nome'];
		$telefone = $_SESSION['tell'];
		$result= @mysql_query("INSERT INTO grupos (criador, materia, contato, descri, icone, link) VALUES ('$nomee', '$passar', '$telefone','$texto', '$materia', '$link')");

		?><div align="center"><?echo"Grupo Criado";?></div><?
		?>
			<script type="text/javascript">
			window.location = 'mygroup.php'; 
			
			</script>
				
		<?






	}



	function verifica($usuario, $email, $senha, $telefone, $cadastrado){
		$query = mysql_query("SELECT * FROM usuario WHERE login = '$cadastrado' OR email = '$email'");
		$exibe = mysql_fetch_assoc($query);
		if($exibe>0){
			echo "Nome ou E-mail ja usado";	
		}else{

			$result= @mysql_query("INSERT INTO usuario (nome, senha, tipo, email, telefone, login) VALUES ('$usuario', '$senha', '1', '$email', '$telefone', '$cadastrado')");

			?>
			<script>alert('Cadastrado com Sucesso!');</script>


            <script type="text/javascript">
			window.location = 'index.php'; 
			
			</script>
            <?php	

		
		}
	}


	function cadastrar(){
		echo "ok";
	}

	function listar($nome, $id){

			$query = mysql_query("SELECT * FROM grupos WHERE materia = '$nome' or id > '$id' ORDER BY membros DESC ");
		$exibe = mysql_fetch_assoc($query);
		if($exibe>0	){

			
			$cont = 0;
			 do {
			 	$cont = $cont + 1;
			 	//limitador de grupos na home
			 	
				 	if($cont > 10 and $nome =='fsdfdsf' ){
				 		break;
			 		}
			 	

			$materia = $exibe['materia'];
			$id =  $exibe['id'];
			$criador =  $exibe['criador'];
			$icone = $exibe['icone'];
			$quantidade = $exibe['membros'];
			if($nome!='fsdfdsf'){
				?><?
			}
			?>
			
			

			<tr><td>
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 bg6">
							<a href="grupo.php?grupo=<? echo "$id";?>"><img src="imagem/<? echo "$icone";?>	.png" class="foto3">
							<span>GRUPO DE ESTUDOS - <?echo"$materia";?></span>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 bg7" align="center">
							<p>CRIADOR: por <?echo"$criador"?>    | Membros > <?echo"$quantidade";?> </p></a>
						</div>
						</div>
			</td></tr>

			<?
		}while($exibe = mysql_fetch_assoc($query));
		}


	}



	function pesquisar($pesq){

		listar($pesq,9000);
	}





	function grupo($id){
		$query = mysql_query("SELECT * FROM grupos WHERE id = '$id'");
		$exibe = mysql_fetch_assoc($query);
		$criador = $exibe['criador'];
		$idGrupoAtual = $exibe['id'];
		$materia = $exibe['materia'];
		$contato = $exibe['contato'];	
		$descri = $exibe['descri'];
		$icone = $exibe['icone'];
		$link = $exibe['link'];

		$userId = $_SESSION['login'];
		$userConta = $_SESSION['nome'];

		$query2 = mysql_query("SELECT * FROM usuario WHERE nome = '$criador'");
		$exibe2 = mysql_fetch_assoc($query2);
		$user = $exibe2['nome'];
		$numero = $exibe2['telefone'];	
		$email = $exibe2['email'];

		?> 
		<div class="row">		
			<div class="col-md-3 col-sm-3 col-xs-3">
				<center><img src="imagem/<?echo"$icone";?>.png">
					<span>----------</span>
				</center>
			</div>
				<div class="col-md-6 col-sm-6 col-xs-6 bg10" align="center">
					<h4>GRUPO DE ESTUDO - <?echo"$materia";?></h4>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
					<center>
						<span>           ----------</span>
						<img src="imagem/<?echo"$icone";?>.png">
					</center>
				</div>
		</div>
				
		<br>
		<br>
		<br>
		<div class="row">
		<div class="col-md-7 col-sm-7 col-xs-7">
			<center>
				<div class="row">
					<div class="col-md-10 col-sm-10 col-xs-10 bg8" align="left">
						<h4>CRIADOR: <?echo"$criador";?></h4>	
					</div>
				</div>
			</center>
			<br>
			<center>
				<div class="row">

					<div class="col-md-10 col-sm-10 col-xs-10 bg8" align="left">
						<h4>GRUPO: <?

							$query = mysql_query("SELECT * FROM entrada WHERE idmembro = '$userId' AND idgrupo = '$idGrupoAtual'");
							$exibe = mysql_fetch_assoc($query);
							if($exibe or $userConta==$criador){
								?><a href="<?echo"$link";?>"><< WhatsApp >></a><?	
							}else{
								?><h6 class="entrar">Conteudo apenas para membros</h6><?
							}

							?>
							

						</h4>	
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-10 col-sm-10 col-xs-10 bg8" align="left">

						<h4>CONTATO: <?
							





							if($exibe or $userConta==$criador){
								?><h5><? echo"$numero";?></h5><?	
							}else{
							
								?><h6 class="entrar">Conteudo apenas para membros</h6><?
							}

							?>
							

						</h4>	
					</div>
				</div>
			</center>
			<br>
			<center>
				<div class="row">
					<div class="col-md-10 col-sm-10 col-xs-10 bg8" align="left">
						<center><h6>DESCRIÇÃO DO GRUPO:</h6></center>
			<br>
						<p> <?echo"$descri";?></p>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-sm-10 col-xs-10">
					<br>
					<br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;




					<?php 
						$userId = $_SESSION['login'];
						$userConta = $_SESSION['nome'];

					$query = mysql_query("SELECT * FROM entrada WHERE idmembro = '$userId' AND idgrupo = '$idGrupoAtual'");
					$exibe = mysql_fetch_assoc($query);
					
							
											
						if($userConta == $criador){
							?><a href="Cgrupo2.php?grupo=<? echo "$id";?>"><input type="submit" value="Editar grupo" class=" btn btn-danger"></a>
							<? 
						}elseif(!$exibe){	?>

							<form method="post">
							<a ><input type="submit" name="entrou" value="Entrar no Grupo" class=" btn btn-danger"	>
								</form>
								</a><?
								
								if($_POST['entrou']!=NULL){
									entrarGrupo($userConta,$idGrupoAtual,$userId);
									echo "Bem Vindo $userConta";
								}
						}


			




										 ?>
							</div>
				</div>
		</div>	
		<div class="col-md-5 col-sm-5 col-xs-5 bg9">
			<div class="row">
				<div class="col-md-10 col-sm-10 col-xs-10 bg8" align="center">
				<label><h4> MEMBROS:</h4></label>
				<table class="table table-striped table-dark"><center>
				<tr><td></td></tr>










			<?		

		$query = mysql_query("SELECT * FROM entrada WHERE idgrupo = '$idGrupoAtual'");
		$exibe = mysql_fetch_assoc($query);
		?><tr><td class="lets"> 👑 <?echo"$criador";?> 👑</td></tr><?
		if($exibe>0){
			$cont = 0;
			 do {

			 	$cont = $cont + 1;
			 	//limitador de grupos na home
			 	if($cont > 5){
			 		break;
			 	}


			$membro = $exibe['nomemembro'];
			?>
						
			<tr><td><?echo"$membro";?></td></tr>

			<?
		}while($exibe = mysql_fetch_assoc($query));
		}


?>









				
				
			</center></table>
		</div>
	</div>
	<br>
	<br><center>
		&nbsp;&nbsp;&nbsp;<a href="membros.php?grupo=<? echo "$id";?>"><input type="submit" value="ver membros" class="btn btn-success"></a>
	</div>
	</div>
	</div>
	

			
		<?		
	}
	function entrarGrupo($userConta, $idGrupoAtual,$userId){
		$result= @mysql_query("INSERT INTO entrada (idmembro, nomemembro, idgrupo) VALUES ('$userId', '$userConta', '$idGrupoAtual')");

		$query = mysql_query("SELECT * FROM grupos WHERE id = '$idGrupoAtual'");
		$exibe = mysql_fetch_assoc($query);
			
			$total = $exibe['membros'] + 1;



		$result= @mysql_query("UPDATE grupos SET membros = '$total' WHERE id = $idGrupoAtual");	


	}

	function todosMembros($idGrupoAtual){

		$query = mysql_query("SELECT * FROM grupos WHERE id = '$idGrupoAtual'");
		$exibe = mysql_fetch_assoc($query);
		$criador = $exibe['criador'];
		$idGrupoAtual = $exibe['id'];
		$materia = $exibe['materia'];
		$contato = $exibe['contato'];	
		$descri = $exibe['descri'];
		$icone = $exibe['icone'];
		$link = $exibe['link'];


		$userId = $_SESSION['login'];
		$userConta = $_SESSION['nome'];

		$query = mysql_query("SELECT * FROM entrada WHERE idgrupo = '$idGrupoAtual'");
		$exibe = mysql_fetch_assoc($query);
		



			$membro = $exibe['nomemembro'];
			?>
				<div class="col-md-12 col-sm-12 col-xs-12 bg2">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-3">
					<center><img src="imagem/<?echo"$icone";?>.png">
					<span>----------</span></center>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 bg10" align="center">
					<h4>GRUPO DE ESTUDO - <?echo"$materia";?></h4>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
					<center><span>           ----------</span>
					<img src="imagem/<?echo"$icone";?>.png"></center>
				</div>
			</div>
			<br>
				<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-3"></div>
			<div class="col-md-6 col-sm-6 col-xs-6 bg10" align="center">
			<h4>Todos os membros:</h4></div>
			<div class="col-md-3 col-sm-3 col-xs-3"></div>
			 <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 bg8" align="center">
					<table class="table table-striped table-dark" id="tmembros">
						<thead>
    					<tr>
      					<th scope="col">#</th>
      					<th scope="col">Membro:</th>
      					</tr>
						  </thead>
						  <tbody>

						
						<th scope="row" class="lets">Dono</th>
						<td class="lets"> 👑 <?echo"$criador";?> 👑</td>
						</tr>	
							<?
						$query = mysql_query("SELECT * FROM entrada WHERE idgrupo = '$idGrupoAtual'");
								$exibe = mysql_fetch_assoc($query);
								if($exibe>0){
									$cont = 0;
									 do {

									 	$cont = $cont + 1;
									 	


									$membro = $exibe['nomemembro'];
									?>
						

			<tr>
							<th scope="row"><?echo"$cont"?></th>
      						<td><?echo"$membro";?></td>
      						</tr>

			<?
		}while($exibe = mysql_fetch_assoc($query));
		

?>
				    
      						
      					</table>

					
	</div>
	</div>
	</div>
	</div>		
			
<?



	}}


	
	
function editGrupo($idGrupo){
		$query = mysql_query("SELECT * FROM grupos WHERE id = '$idGrupo'");
		$exibe = mysql_fetch_assoc($query);
		$criador = $exibe['criador'];
		$idGrupoAtual = $exibe['id'];
		$materia = $exibe['materia'];
		$contato = $exibe['contato'];	
		$descri = $exibe['descri'];
		$icone = $exibe['icone'];
		$link = $exibe['link'];

		$userId = $_SESSION['login'];
		$userConta = $_SESSION['nome'];

	

		
		

	






	?><div class="row">

	



		<!--<form action=""  method="post">-->
		<div class="col-md-12 col-sm-12 col-xs-12 bg2">
			<?if($userConta == $criador){
			
			?>
			<div class="row">
			<div class="col-md-5 col-sm-5 col-xs-5">
				<center>
					<form method="post">
				<div class="row">
						<textarea name="descri" placeholder="descrição do grupo" id="Descrição"></textarea>	
					</div>
				</center>
				</div>
			<br>
			<br>
		<div class="col-md-7 col-sm-7 col-xs-7 bg9">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 bg8" align="center">
			<label><h4> ALTERAR LINK WHATSAPP:</h4></label>
			<input type="text" name="whats" class="altered" placeholder="alterar link...">
			<br>
			<br>

			</div>
		</div>
		<br>
		
		<br>
		<center>
		<input type="submit" value="SALVAR ALTRAÇÕES" class="btn btn-success">
				</form>



			<?

				if(empty($_POST['descri'])){
				}else{
					$descri = $_POST['descri'];

					$result= @mysql_query("UPDATE grupos SET descri = '$descri' WHERE id = '$idGrupo'");	
						echo("<br>Descrição atualizada!<br>");
				}
				if(empty($_POST['whats'])){
				}else{
					$whats = $_POST['whats'];

					$result= @mysql_query("UPDATE grupos SET link = '$whats' WHERE id = '$idGrupo'");	
						echo("WhatsApp atualizado!\n");
				
					}





			?>








		</center>
	</div>
	</div>	
	</div><?}
			else{
				?><h2 align="center">APENAS O DONO DO GRUPO PODE EDITAR</h2><?
			}	


	?>
	</div>

	



	<?
}



	
	

function perfil(){

$userId = $_SESSION['login'];
$userConta = $_SESSION['nome'];

$query = mysql_query("SELECT * FROM usuario WHERE nome = '$userConta'");
		$exibe = mysql_fetch_assoc($query);
		$user = $exibe['nome'];
		$numero = $exibe['telefone'];	
		$email = $exibe['email'];
			







?>

<div class="row">
			<div class="col-md-7 col-sm-7 col-xs-7">
				<center>
				<div class="row">
					<div class="col-md-10 col-sm-10 col-xs-10 bg8" align="center">
						<h2>INFORMAÇÕES ATUAIS:</h2>	
					</div>
				</div>
			</center>
			<br>
			<br>
			<center>
				<div class="row">
					<div class="col-md-10 col-sm-10 col-xs-10 bg8" align="left">
						<h4>Nome: <?echo"$user";?></h4>	
					</div>
				</div>
			</center>
				<br>
			<center>
				<div class="row">
					<div class="col-md-10 col-sm-10 col-xs-10 bg8" align="left">
						<h4>E-mail: <?echo"$email";?></h4>	
					</div>
				</div>
			</center>
				<br>
			<center>
				<div class="row">
					<div class="col-md-10 col-sm-10 col-xs-10 bg8" align="left">
						<h4>Telefone: <?echo"$numero";?></h4>	
					</div>
				</div>
			</center>
			<br>		
			<br>
			<br>
			<br>
			<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6 bg8" align="center">





						<?


	$query = mysql_query("SELECT * FROM entrada WHERE nomemembro = '$user'");
		$exibe = mysql_fetch_assoc($query);
		if($exibe>0	){

			
			$cont = 0;
			 do {

			 	$cont = $cont + 1;
			 	
			 }while($exibe = mysql_fetch_assoc($query));
			}





						?>



						<h6>QUANTIDADE DE GRUPOS: <?echo"$cont";?></h6>	
					</div>
					&nbsp;&nbsp;&nbsp;<a href="mygroup.php"><input type="submit" value="meus grupos" name="meus grupos" class="btn btn-dark"></a>
				</div>
			</div>	
	<div class="col-md-5 col-sm-5 col-xs-5 bg9">
		
		<div class="row">
			<div class="col-md-10 col-sm-10 col-xs-10 bg8" align="center">
			<label><h4> ALTERAR TELEFONE:</h4></label>
			<form method="post">
			<input type="text" name="tell" class="altered" placeholder="alterar telefone...">
			</div>
		</div>
		<br>
		<center>
		<input type="submit" value="SALVAR ALTRAÇÕES" class="btn btn-success">
	</form>
			
		<?
			if(empty($_POST['tell'])){
				}else{
					$tell = $_POST['tell'];

					$result= @mysql_query("UPDATE usuario SET telefone = '$tell' WHERE nome = '$user'");	
						echo("<br>Telefone atualizado!<br>Ao relogar todos seus grupos serão atualizados");
				
					}

					?>





			</center>
	</div>
	</div>






<?



}

function participo(){


	$user = $_SESSION['nome'];
	$query = mysql_query("SELECT * FROM entrada WHERE nomemembro = '$user'");


		$exibe = mysql_fetch_assoc($query);
		if($exibe>0	){

		

			$cont = 0;
			 do {



			 	$esse = $exibe['idgrupo'];

		$query2 = mysql_query("SELECT * FROM grupos WHERE id = '$esse'");
		$exibe2 = mysql_fetch_assoc($query2);


		$quantidade = $exibe2['membros'];
		$icone=$exibe2['icone'];
		$materia=$exibe2['materia'];
		$id=$exibe2['id'];	


			 	$cont = $cont + 1;
			 	
			 



				?>
						<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 bg12">
							<a href="grupo.php?grupo=<? echo "$id";?>"><img src="imagem/<?echo"$icone";?>.png" class="foto3">
							<span>GRUPO DE ESTUDOS-<?echo"$materia";?> | <?echo"$quantidade";?></span></span>
						</div>
						</div>



<?

}while($exibe = mysql_fetch_assoc($query));
			}

}

function administro(){


	$user = $_SESSION['nome'];

	$query = mysql_query("SELECT * FROM grupos WHERE BINARY criador = '$user'");


		$exibe = mysql_fetch_assoc($query);
		if($exibe>0	){

		

			$cont = 0;
			 do {



			 	$esse = $exibe['id'];

		$query2 = mysql_query("SELECT * FROM grupos WHERE id = '$esse'");
		$exibe2 = mysql_fetch_assoc($query2);

		$icone=$exibe2['icone'];
		$materia=$exibe2['materia'];
		$id=$exibe2['id'];	
		$quantidade = $exibe2['membros'];

			 	$cont = $cont + 1;
			 	
			 



				?>
						<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 bg12">
							<a href="grupo.php?grupo=<? echo "$id";?>"><img src="imagem/<?echo"$icone";?>.png" class="foto3">
							<span>GRUPO DE ESTUDOS-<?echo"$materia";?> | <?echo"$quantidade";?></span>
						</div>
						</div>



<?

}while($exibe = mysql_fetch_assoc($query));
			}

}


function comentar($usuario, $texto){

		$result=@mysql_query("INSERT INTO comentarios (nome, comentario) VALUES ('$usuario', '$texto')");

		echo"comentario efetuado, obrigado por sua colaboração :D";






}

function comentarios(){

	$tipo = $_SESSION['tipo'];

		if($tipo==2){	

			$query = mysql_query("SELECT * FROM comentarios");
		$exibe = mysql_fetch_assoc($query);
		if($exibe>0	){
			

			do 
			{
				$nomeDele = $exibe['nome'];
				$texto = $exibe['comentario'];
			 ?>
				<div class="col-md-3 col-sm-3 col-xs-3 bg14">
				<center><h4><?echo"$nomeDele";?></h4></center>
				<center><p><?echo"$texto";?></p></center>
				</div>
			<?
					

		
		}while($exibe = mysql_fetch_assoc($query));
			
		}
		

}else{
	?>

<div class="col-md-12 col-sm-12 col-xs-12">
	<div align="center"><h4>Pagina apenas para desenvolvedor</h4></div></center>
</div>
<?}
	
	}


function atualizacao(){

	$tipo = $_SESSION['tipo'];

		if($tipo==1 or $tipo==2){	

			$query = mysql_query("SELECT * FROM atualizacao");
		$exibe = mysql_fetch_assoc($query);
		if($exibe>0	){
			

			do 
			{
				$id = $exibe['id'];
				$nomeDele = $exibe['nome'];
				$texto = $exibe['atualizacao'];
			 ?>
				<div class="col-md-3 col-sm-3 col-xs-3 bg14">
				<center><h4>Nº- <?echo"$id";?></h4></center>
				<center><h4>Sugerido por: <?echo"$nomeDele";?></h4></center>
				<center><p><?echo"$texto";?></p></center>
				</div>
			<?
					

		
		}while($exibe = mysql_fetch_assoc($query));
			
		}
		

}else{
	?>

<div class="col-md-12 col-sm-12 col-xs-12">
	<div align="center"><h4>Pagina apenas para usuarios</h4></div></center>
</div>
<?}
	
	}










	
	
?>