<?php

	$nomeProd	  = $_POST["nomeProd"];
	$precoProd    = $_POST["precoProd"];


  	require_once("conexao.php");

     $stmt = $con->prepare("INSERT INTO produto(nomeProd,precoProd) VALUES(?, ?)");

    $stmt->bindParam(1,$nomeProd);
    $stmt->bindParam(2,$precoProd);

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