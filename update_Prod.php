<?php

	$idProd 	= $_POST['idProd'];
	$nomeProd	 = $_POST["nomeProd"];
	$precoProd    = $_POST["precoProd"];	

require_once("conexao.php");


$stmt = $con->prepare("UPDATE produto SET nomeProd = ?, precoProd = ? where  idProduto =  ? ");

$stmt->bindParam(1,$nomeProd);
$stmt->bindParam(2,$precoProd);
$stmt->bindParam(3,$idProd);


$stmt->execute();

?>

<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<form action="pesquisa_Prod.php" class="form-horizontal" method="POST">
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