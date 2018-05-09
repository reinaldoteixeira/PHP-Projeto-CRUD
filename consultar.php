<?php
	// conexao com o banco de dados
require_once("conexao.php");

	// recebendo campo a ser pesquisado

$cpfCli	  = $_POST["cpfCli"];



$pesCliente = $con->query("SELECT a.cpf, a.email, a.nome, a.fone, a.endereco, c.idVenda from venda c 
INNER JOIN cliente a 
ON c.cpf = a.cpf
where c.cpf = '$cpfCli'");

$pesVenda = $con->query("SELECT * from venda where cpf = '$cpfCli'");

$resultado = $con->query("SELECT c.idVenda, a.cpf, a.email, a.nome, a.fone, a.endereco, b.idProduto, b.nomeProd, b.precoProd,c.qtdCompra,  c.formpagCompra, c.numCartaoCompra, c.nomeCartaoCompra, c.valiCartaoMesCompra, c.valiCartaoAnoCompra, c.codsegCartaoCompra,c.parcCartaoCompra
	FROM venda c 
	INNER JOIN cliente a 
	ON c.cpf = a.cpf 
	INNER JOIN produto b
	ON c.idProduto = b.idProduto
	where c.cpf = '$cpfCli'
	");

$resultado1 = $con->query("SELECT c.idVenda, a.cpf, a.email, a.nome, a.fone, a.endereco, b.idProduto, b.nomeProd, b.precoProd,c.qtdCompra,  c.formpagCompra, c.numCartaoCompra, c.nomeCartaoCompra, c.valiCartaoMesCompra, c.valiCartaoAnoCompra, c.codsegCartaoCompra,c.parcCartaoCompra
	FROM venda c 
	INNER JOIN cliente a 
	ON c.cpf = a.cpf 
	INNER JOIN produto b
	ON c.idProduto = b.idProduto
	where c.cpf = '$cpfCli'
	");


	while( $row = $resultado1->fetch()) {


		$parcCartaoCompra = $row['parcCartaoCompra'];

	}


	?>

	<html>
	<head>
		<meta charset='utf-8'>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
	</head>
	<body>
		<form action="" class="form-horizontal" method="POST" name="form">
			<?php

			while( $row = $pesCliente->fetch()) {


			$nomeCli = $row['nome'];
			$emailCli = $row['email'];
			$cpfCli = $row['cpf'];		
			$telefone1Cli = $row['fone'];
			$endeCli = $row['endereco'];
			$idVenda = $row['idVenda'];

			?>
			

				<div class="container" align="middle">
					<div class="page-header">
						<h1>DADOS DO CLIENTE</h1> 
					</div>	
					<div class="form-group" align="middle">
						<label >Nome:</label>
						<div >
							<input type="text" class="form-control" align="middle" name="nomeCli" value="<?=$nomeCli?>" readonly="true" style="text-align: center;">
						</div>
					</div>
					<div class="form-group">
						<label >Email:</label>
						<div >
							<input type="text" class="form-control" name="emailCli" value="<?=$emailCli?>" readonly="true" style="text-align: center;">
						</div>
					</div>
					<div class="form-group">
						<label >Cpf:</label>
						<div >
							<input type="text" class="form-control" name="cpfCli" value="<?=$cpfCli?>" readonly="true" style="text-align: center;">
						</div>
					</div>
					<div class="form-group">
						<label >Telefone para Contato:</label>
						<div >
							<input type="text" class="form-control" name="telefone1Cli" value="<?=$telefone1Cli?>" readonly="true" style="text-align: center;">
						</div>
					</div>
					<div class="form-group">
						<label >Endereço:</label>
						<div >
							<input type="text" class="form-control" name="endeCli" value="<?=$endeCli?>" readonly="true" style="text-align: center;">
						</div>
					</div> 
					<div class="page-header">
						<h1>DADOS DO PEDIDO</h1> 
					</div>

					<div class="form-group">
						<label >PEDIDO DE COMPRA:</label>
						<div >
							<input type="text" class="form-control" name="idVenda" value="<?=$idVenda?>" readonly="true" style="text-align: center;">
						</div>
					</div>
					<?php
					break;
					}

					?>
			



			<?php

			$valorTotal = 0;

			while( $row = $resultado->fetch()) {

				$idVenda	  = $row["idVenda"];	
				$nomeProd	 = $row["nomeProd"];
				$precoProd    = $row["precoProd"];
				$qtdCompra = $row['qtdCompra'];								


				if ($parcCartaoCompra == 2){

					$precoProd += ($precoProd * 0.1) ; 

				}

				else if ($parcCartaoCompra == 3){

					$precoProd += ($precoProd * 0.2) ;
				}

				else if ($parcCartaoCompra == 4){

					$precoProd += ($precoProd * 0.3) ;
				}

				?>

				<div class="form-group">
					<label >Nome Produto:</label>
					<div >
						<input type="text" class="form-control" name="nomeProd" value="<?=$nomeProd?>" readonly="true" style="text-align: center;">
					</div>
				</div>
				<div class="form-group">
					<label >Preço Produto:</label>
					<div >
						<input type="text" class="form-control" name="precoProd" value="<?=$precoProd?>" readonly="true" style="text-align: center;">
					</div>
				</div> 
				<div class="form-group">
					<label >Quantidade Produto:</label>
					<div >
						<input type="text" class="form-control" name="qtdCompra" value="<?=$qtdCompra?>" readonly="true" style="text-align: center;">
					</div>
				</div> 	


				<?php


				$valorTotal += $precoProd;	

				}

				?>

				<?php

				while( $row = $pesVenda->fetch()) {

				$formpagCompra = $row['formpagCompra'];
				$numCartaoCompra = $row['numCartaoCompra'];
				$nomeCartaoCompra = $row['nomeCartaoCompra'];
				$valiCartaoMesCompra = $row['valiCartaoMesCompra'];
				$valiCartaoAnoCompra = $row['valiCartaoAnoCompra'];
				$codsegCartaoCompra = $row['codsegCartaoCompra'];
				$parcCartaoCompra = $row['parcCartaoCompra'];

				?>

				<div class="page-header">
					<h1 color="red">FORMA DE PAGAMENTO</h1> 
				</div>
				<div class="form-group">
					<label >Forma de Pagamento:</label>
					<div >
						<input type="text" class="form-control" name="formpagCompra" value="<?=$formpagCompra?>" readonly="true" style="text-align: center;">
					</div>
				</div>
				<div class="form-group">
					<label >Número do Cartão:</label>
					<div >
						<input type="text" class="form-control" name="numCartaoCompra" value="<?=$numCartaoCompra?>" readonly="true" style="text-align: center;">
					</div>
				</div> 	
				<div class="form-group">
					<label >Nome Impresso no Cartão:</label>
					<div >
						<input type="text" class="form-control" name="nomeCartaoCompra" value="<?=$nomeCartaoCompra?>" readonly="true" style="text-align: center;">
					</div>
				</div> 		
				<div class="form-group">
					<label >Validade Mês:</label>
					<div >
						<input type="text" class="form-control" name="valiCartaoMesCompra" value="<?=$valiCartaoMesCompra?>" readonly="true" style="text-align: center;">
					</div>
				</div>
				<div class="form-group">
					<label >Validade Ano:</label>
					<div >
						<input type="text" class="form-control" name="valiCartaoAnoCompra" value="<?=$valiCartaoAnoCompra?>" readonly="true" style="text-align: center;">
					</div>
				</div> 		
				<div class="form-group">
					<label >Código de Segurança:</label>
					<div>
						<input type="text" class="form-control" name="codsegCartaoCompra" value="<?=$codsegCartaoCompra?>" readonly="true" style="text-align: center;">
					</div>
				</div>
				<div class="form-group">
					<label >Número de Parcelas:</label>
					<div >
						<input type="text" class="form-control" name="parcCartaoCompra" value="<?=$parcCartaoCompra?>" readonly="true" style="text-align: center;">
					</div>
				</div>
				<div class="form-group">
					<label >Valor Total da Compra:</label>
					<div >
						<input type="text" class="form-control" name="valorTotal" value="<?=number_format($valorTotal,2)?>" readonly="true" style="text-align: center;">
					</div>
				</div>
				<?php

				break;

			}

			?>
			<div class="form-group" align="middle">		
				<input type="submit" value="EXCLUIR" class="btn btn-danger" onClick="ExecutaAcao('exclui');">
				<input type="submit" value="ALTERAR" class="btn btn-info" onClick="ExecutaAcao('alterar');">	
				<input type="submit" value="CONSULTAR" class="btn btn-info" onClick="ExecutaAcao('pesquisa');">
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