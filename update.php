<?php
	$cpfCli	  = $_POST["cpfCli"];
	$qtdCompra1 = $_POST["qtdCompra1"];
	$qtdCompra2 = $_POST["qtdCompra2"];
	$qtdCompra3 = $_POST["qtdCompra3"];
	$idVenda		  = $_POST["idVenda"];
	$formpagCompra    = $_POST["formpagCompra"];
	$numCartaoCompra	  = $_POST["numCartaoCompra"];
	$nomeCartaoCompra   = $_POST["nomeCartaoCompra"];
	$valiCartaoMesCompra	  = $_POST["valiCartaoMesCompra"];
	$valiCartaoAnoCompra	  = $_POST["valiCartaoAnoCompra"];
	$codsegCartaoCompra	  = $_POST["codsegCartaoCompra"];
	$parcCartaoCompra	  = $_POST["parcCartaoCompra"];

require_once("conexao.php");


$procuraid = $con->query("SELECT idGeral FROM venda where idVenda = '$idVenda' and cpf = '$cpfCli' ");

foreach ($procuraid as $key => $value) {

$stmt = $con->prepare("UPDATE venda SET qtdCompra = ?, formpagCompra = ?, numCartaoCompra = ?, nomeCartaoCompra = ?, valiCartaoMesCompra = ?, valiCartaoAnoCompra = ?, codsegCartaoCompra = ?, parcCartaoCompra = ? where  idVenda =  ? and idGeral = '$value[0]'");

if ($key == 0) {



$stmt->bindParam(1,$qtdCompra1);
$stmt->bindParam(2,$formpagCompra);
$stmt->bindParam(3,$numCartaoCompra);
$stmt->bindParam(4,$nomeCartaoCompra);
$stmt->bindParam(5,$valiCartaoMesCompra);
$stmt->bindParam(6,$valiCartaoAnoCompra);
$stmt->bindParam(7,$codsegCartaoCompra);
$stmt->bindParam(8,$parcCartaoCompra);
$stmt->bindParam(9,$idVenda);

	
}

else if ($key == 1) {

$stmt->bindParam(1,$qtdCompra2);
$stmt->bindParam(2,$formpagCompra);
$stmt->bindParam(3,$numCartaoCompra);
$stmt->bindParam(4,$nomeCartaoCompra);
$stmt->bindParam(5,$valiCartaoMesCompra);
$stmt->bindParam(6,$valiCartaoAnoCompra);
$stmt->bindParam(7,$codsegCartaoCompra);
$stmt->bindParam(8,$parcCartaoCompra);
$stmt->bindParam(9,$idVenda);

	
}

else if ($key == 2) {

$stmt->bindParam(1,$qtdCompra3);
$stmt->bindParam(2,$formpagCompra);
$stmt->bindParam(3,$numCartaoCompra);
$stmt->bindParam(4,$nomeCartaoCompra);
$stmt->bindParam(5,$valiCartaoMesCompra);
$stmt->bindParam(6,$valiCartaoAnoCompra);
$stmt->bindParam(7,$codsegCartaoCompra);
$stmt->bindParam(8,$parcCartaoCompra);
$stmt->bindParam(9,$idVenda);

	
}

$stmt->execute();

}


?>

<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<form action="pesquisa.php" class="form-horizontal" method="POST">
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