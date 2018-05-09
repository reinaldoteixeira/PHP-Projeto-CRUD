<?php
	// conexao com o banco de dados
require_once("conexao.php");

	// recebendo campo a ser pesquisado

$cpfCli	  = $_POST["cpfCli"];

$resultado = $con->query("SELECT * FROM cliente where cpf = '$cpfCli'");



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
	
				$nomeCli	  = $row["nome"];
				$emailCli    = $row["email"];
				$cpfCli    = $row["cpf"];
				$telefone1Cli	 = $row["fone"];
				$endeCli    = $row["endereco"];
	

				?>

				<div class="container" align="middle">
					<div class="page-header">
						<h1>DADOS DO CLIENTE</h1> 
					</div>	
					<div class="form-group" align="middle">
						<label >Nome:</label>
						<div >
							<input type="text" class="form-control" align="middle" name="nomeCli" value="<?=$nomeCli?>"  style="text-align: center;">
						</div>
					</div>
					<div class="form-group">
						<label >Email:</label>
						<div >
							<input type="text" class="form-control" name="emailCli" value="<?=$emailCli?>"  style="text-align: center;">
						</div>
					</div>
					<div class="form-group">
						<label >Cpf:</label>
						<div >
							<input type="text" class="form-control" name="cpfCli" value="<?=$cpfCli?>"  style="text-align: center;">
						</div>
					</div>
					<div class="form-group">
						<label >Telefone para Contato:</label>
						<div >
							<input type="text" class="form-control" name="telefone1Cli" value="<?=$telefone1Cli?>"  style="text-align: center;">
						</div>
					</div>
					<div class="form-group">
						<label >Endereço:</label>
						<div >
							<input type="text" class="form-control" name="endeCli" value="<?=$endeCli?>"  style="text-align: center;">
						</div>
					</div> 
				<?php

			}

			?>
			<div class="form-group" align="middle">		
				<input type="submit" value="ALTERAR" class="btn btn-danger" onClick="ExecutaAcao('update_Cli');">	
				<input type="submit" value="CONSULTAR" class="btn btn-info" onClick="ExecutaAcao('pesquisa_Cli');">
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