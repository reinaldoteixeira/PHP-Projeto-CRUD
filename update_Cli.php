<?php
	$nomeCli	  = $_POST["nomeCli"];
	$emailCli    = $_POST["emailCli"];
	$cpfCli	  = $_POST["cpfCli"];
	$telefone1Cli		  = $_POST["telefone1Cli"];
	$endeCli = $_POST["endeCli"];	

require_once("conexao.php");


$stmt = $con->prepare("UPDATE cliente SET cpf = ?, email = ?, nome = ?, fone = ?, endereco = ?  where  cpf =  ? ");

$stmt->bindParam(1,$cpfCli);
$stmt->bindParam(2,$emailCli);
$stmt->bindParam(3,$nomeCli);
$stmt->bindParam(4,$telefone1Cli);
$stmt->bindParam(5,$endeCli);
$stmt->bindParam(6,$cpfCli);


$stmt->execute();

?>

<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<form action="pesquisa_Cli.php" class="form-horizontal" method="POST">
		<div class="container" >
			<div class="form-group">
				<h1>ALTERAÇÃO REALIZADA COM SUCESSO ! </h1> 
			</div>
			<div class="form-group">
				<div class="col-md-6">
					<button type="submit" class="btn btn-info">CONSULTAR</button>
					<a href="index.php"> <button  type="button" class="btn btn-danger">VOLTAR</button> </a>
				</div>
			</div>
		</div>
	</form>
</body>