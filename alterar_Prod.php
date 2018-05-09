<?php
	// conexao com o banco de dados
require_once("conexao.php");

	// recebendo campo a ser pesquisado

$idProd	  = $_POST["idProd"];


$resultado = $con->query("SELECT * FROM produto where idProduto = '$idProd'");

	?>

	<html>
	<head>
		<meta charset='utf-8'>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
	</head>
	<body>
		<form action="" class="form-horizontal" method="POST" name="form">
			<?php

			while( $row = $resultado->fetch()) {

				$idProd 	= $row['idProduto'];
				$nomeProd	 = $row["nomeProd"];
				$precoProd    = $row["precoProd"];

				?>

				<div class="container" align="middle">
					<div class="page-header">
						<h1>DADOS DO PRODUTO</h1> 
					</div>	
				<input type="hidden" name="idProd" value="<?=$idProd?>">
				<div class="form-group">
					<label >Nome Produto:</label>
					<div >
						<input type="text" class="form-control" name="nomeProd" value="<?=$nomeProd?>" style="text-align: center;">
					</div>
				</div>
				<div class="form-group">
					<label >Preço Produto:</label>
					<div >
						<input type="text" class="form-control" name="precoProd" value="<?=$precoProd?>" style="text-align: center;">
					</div>
				</div> 
				<?php

			}

			?>
			<div class="form-group" align="middle">		
				<input type="submit" value="ALTERAR" class="btn btn-danger" onClick="ExecutaAcao('update_Prod');">	
				<input type="submit" value="CONSULTAR" class="btn btn-info" onClick="ExecutaAcao('pesquisa_Prod');">
				<input type="submit" value="FINALIZAR" class="btn btn-success" onClick="ExecutaAcao('index');">
			</div>
		</form>
	</body>

	<script>
		function ExecutaAcao(valor){
			document.form.action = valor + '.php'; 
			document.form.submit();
		}
	</script>