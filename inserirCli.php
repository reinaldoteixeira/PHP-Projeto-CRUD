<?php

	$nomeCli	  = $_POST["nomeCli"];
	$emailCli    = $_POST["emailCli"];
	$cpfCli    = $_POST["cpfCli"];
	$telefone1Cli	  = $_POST["telefone1Cli"];
	$endeCli    = $_POST["endeCli"];

  	require_once("conexao.php");

     $stmt = $con->prepare("INSERT INTO cliente(cpf,email,nome,fone,endereco) VALUES(?, ?, ?, ?, ?)");

    $stmt->bindParam(1,$cpfCli);
    $stmt->bindParam(2,$emailCli);
    $stmt->bindParam(3,$nomeCli);
    $stmt->bindParam(4,$telefone1Cli);
    $stmt->bindParam(5,$endeCli);


    $stmt->execute();

?>

<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
		<body>
			<form class="form-horizontal" action="" method=""> 
				<input type="hidden" name="idCli" value="<?=$idCli?>">
				<div class="container">
		  			<div class="form-group">
			   				<h1>CADASTRO REALIZADO COM SUCESSO!</h1> 
			  		</div>
			  		<div class="form-group">
				  		<div class="col-md-6">
							<a href="index.php">
								<button type="button" class="btn btn-info">VOLTAR</button>
							</a>			
						</div> 
					</div>
				</div>
			</form>
		</body>
</html>