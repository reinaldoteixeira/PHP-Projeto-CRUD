<?php
$formpagCompra    = $_POST["formpagCompra"];

if($formpagCompra == "boleto"){

	$cpfCli	  = $_POST["cpfCli"];
	$quantiCompra1	  = $_POST["quantiCompra1"];
	$quantiCompra2    = $_POST["quantiCompra2"];
	$quantiCompra3	  = $_POST["quantiCompra3"];
	$idProd1    = $_POST["idProd1"];
	$idProd2    = $_POST["idProd2"];
	$idProd3    = $_POST["idProd3"];
}

else{
	
	$cpfCli	  = $_POST["cpfCli"];
	$quantiCompra1	  = $_POST["quantiCompra1"];
	$quantiCompra2    = $_POST["quantiCompra2"];
	$quantiCompra3	  = $_POST["quantiCompra3"];
	$idProd1    = $_POST["idProd1"];
	$idProd2    = $_POST["idProd2"];
	$idProd3    = $_POST["idProd3"];
	$numCartaoCompra	  = $_POST["numCartaoCompra"];
	$nomeCartaoCompra   = $_POST["nomeCartaoCompra"];
	$valiCartaoMesCompra	  = $_POST["valiCartaoMesCompra"];
	$valiCartaoAnoCompra	  = $_POST["valiCartaoAnoCompra"];
	$codsegCartaoCompra	  = $_POST["codsegCartaoCompra"];
	$parcCartaoCompra	  = $_POST["parcCartaoCompra"];

}



require_once("conexao.php");

$loop = array();

if(!empty($idProd1)){

$loop[] = [$idProd1, $quantiCompra1];
	
}

if(!empty($idProd2)){

$loop[] = [$idProd2, $quantiCompra2];


}

if(!empty($idProd3)){

$loop[] = [$idProd3, $quantiCompra3];

}
	$numero = rand();
	$idVenda = $numero;

foreach ($loop as $key => $value) {
	
	$stmt = $con->prepare("INSERT INTO venda(idVenda,idProduto,cpf,qtdCompra,formpagCompra,numCartaoCompra,nomeCartaoCompra,valiCartaoMesCompra,valiCartaoAnoCompra,codsegCartaoCompra,parcCartaoCompra) VALUES(?, ?, ?, ?, ? ,? ,? ,? ,? ,? ,?)");

	$stmt->bindParam(1,$idVenda);
	$stmt->bindParam(2,$value[0]);
	$stmt->bindParam(3,$cpfCli);
	$stmt->bindParam(4,$value[1]);
	$stmt->bindParam(5,$formpagCompra);
	$stmt->bindParam(6,$numCartaoCompra);
	$stmt->bindParam(7,$nomeCartaoCompra);
	$stmt->bindParam(8,$valiCartaoMesCompra);
	$stmt->bindParam(9,$valiCartaoAnoCompra);
	$stmt->bindParam(10,$codsegCartaoCompra);
	$stmt->bindParam(11,$parcCartaoCompra);

	$stmt->execute();

}


	?>

<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
		<body>
			<form class="form-horizontal" action="" method=""> 
				<div class="container">
		  			<div class="form-group">
			   				<h1>VENDA REALIZADA COM SUCESSO!</h1> 
			   				<h1>SEU PEDIDO É: <b> <?php echo $idVenda;?></b></h1>
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