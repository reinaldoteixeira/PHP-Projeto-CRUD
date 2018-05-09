<?php

	$nomeCli	  = $_POST["nomeCli"];
	$emailCli    = $_POST["emailCli"];
	$cpfCli	  = $_POST["cpfCli"];
	$telefone1Cli		  = $_POST["telefone1Cli"];
	$endeCli = $_POST["endeCli"];	
	$qtdCompra = $_POST["qtdCompra"];
	$idVenda		  = $_POST["idVenda"];
	$nomeProd = $_POST["nomeProd"];	
	$precoProd = $_POST["precoProd"];
	$formpagCompra    = $_POST["formpagCompra"];
	$numCartaoCompra	  = $_POST["numCartaoCompra"];
	$nomeCartaoCompra   = $_POST["nomeCartaoCompra"];
	$valiCartaoMesCompra	  = $_POST["valiCartaoMesCompra"];
	$valiCartaoAnoCompra	  = $_POST["valiCartaoAnoCompra"];
	$codsegCartaoCompra	  = $_POST["codsegCartaoCompra"];
	$parcCartaoCompra	  = $_POST["parcCartaoCompra"];

	require_once("conexao.php");


	$resultado = $con->query("SELECT c.idVenda, a.cpf, a.email, a.nome, a.fone, a.endereco, c.idGeral ,  b.idProduto, b.nomeProd, b.precoProd,c.qtdCompra,  c.formpagCompra, c.numCartaoCompra, c.nomeCartaoCompra, c.valiCartaoMesCompra, c.valiCartaoAnoCompra, c.codsegCartaoCompra,c.parcCartaoCompra
	FROM venda c 
	INNER JOIN cliente a 
	ON c.cpf = a.cpf 
	INNER JOIN produto b
	ON c.idProduto = b.idProduto
	where c.cpf = '$cpfCli'
	");

	$procuraid = $con->query("SELECT idGeral FROM venda where idVenda = '$idVenda' and cpf = '$cpfCli' ");


	?>

	<html>
	<head>
		<meta charset='utf-8'>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
	</head>
	<body>
		<form action="" class="form-horizontal" method="POST" name="form">
				<div class="container" align="middle">
					<div class="page-header">
						<h1>DADOS DO CLIENTE</h1> 
					</div>	
					<div class="form-group" align="middle">
						<label >Nome:</label>
						<div >
							<input type="text" class="form-control" align="middle" name="nomeCli" value="<?=$nomeCli?>" readonly="true"  style="text-align: center;">
						</div>
					</div>
					<div class="form-group">
						<label >Email:</label>
						<div >
							<input type="text" class="form-control" name="emailCli" value="<?=$emailCli?>" readonly="true"  style="text-align: center;">
						</div>
					</div>
					<div class="form-group">
						<label >Cpf:</label>
						<div >
							<input type="text" class="form-control" name="cpfCli" value="<?=$cpfCli?>" readonly="true"  style="text-align: center;">
						</div>
					</div>
					<div class="form-group">
						<label >Telefone para Contato:</label>
						<div >
							<input type="text" class="form-control" name="telefone1Cli" value="<?=$telefone1Cli?>" readonly="true"  style="text-align: center;">
						</div>
					</div>
					<div class="form-group">
						<label >Endereço:</label>
						<div >
							<input type="text" class="form-control" name="endeCli" value="<?=$endeCli?>" readonly="true"  style="text-align: center;">
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

				foreach ($procuraid as $key => $value) {
					
					$pesProduto = $con->query("SELECT c.idGeral ,  b.idProduto, b.nomeProd, b.precoProd, c.qtdCompra
					FROM venda c  
					INNER JOIN produto b
					ON c.idProduto = b.idProduto
					where c.idGeral = '$value[0]'
					");

					if ($key == 0) {

						while( $row = $pesProduto->fetch()) {
											
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
				<div class="form-group has-success">
					<div class="text-success">
						<div class="form-group">
							<label >Nome do 1° Produto:</label>
							<div>
								<input type="text" class="form-control" name="nomeProd1" value="<?=$nomeProd?>" readonly="true" style="text-align: center;">
							</div>
						</div>
						<div class="form-group">
							<label >Preço Produto:</label>
							<div >
								<input type="text" class="form-control" name="precoProd1" value="<?=$precoProd?>" readonly="true" style="text-align: center;">
							</div>
						</div> 
						<div class="form-group">
							<label >Quantidade Produto:</label>
							<div >
								<input type="text" class="form-control" name="qtdCompra1" value="<?=$qtdCompra?>"  style="text-align: center;">
							</div>
						</div> 
					</div>
				</div>


				<?php

					}

				}

						if ($key == 1) {
					
						while( $row = $pesProduto->fetch()) {
											
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
				<div class="form-group has-warning">
					<div class="text-warning">
						<div class="form-group">
							<label >Nome do 2° Produto:</label>
							<div >
								<input type="text" class="form-control" name="nomeProd2" value="<?=$nomeProd?>" readonly="true" style="text-align: center;">
							</div>
						</div>
						<div class="form-group">
							<label >Preço Produto:</label>
							<div >
								<input type="text" class="form-control" name="precoProd2" value="<?=$precoProd?>" readonly="true" style="text-align: center;">
							</div>
						</div> 
						<div class="form-group">
							<label >Quantidade Produto:</label>
							<div >
								<input type="text" class="form-control" name="qtdCompra2" value="<?=$qtdCompra?>"  style="text-align: center;">
							</div>
						</div> 
					</div>	
				</div>
				<?php

				}

				}

					if ($key == 2) {				
						while( $row = $pesProduto->fetch()) {
											
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
				<div class="form-group has-info">
					<div class="text-info">
						<div class="form-group">
							<label >Nome do 3° Produto:</label>
							<div >
								<input type="text" class="form-control" name="nomeProd3" value="<?=$nomeProd?>" readonly="true" style="text-align: center;">
							</div>
						</div>
						<div class="form-group">
							<label >Preço Produto:</label>
							<div >
								<input type="text" class="form-control" name="precoProd3" value="<?=$precoProd?>" readonly="true" style="text-align: center;">
							</div>
						</div> 
						<div class="form-group">
							<label >Quantidade Produto:</label>
							<div >
								<input type="text" class="form-control" name="qtdCompra3" value="<?=$qtdCompra?>"  style="text-align: center;">
							</div>
						</div>
					</div>
				</div> 		
				<?php

				}

				}

				}
				?>

				<div class="page-header">
					<h1 color="red">FORMA DE PAGAMENTO</h1> 
				</div>
				<div class="form-group">
					<label >Forma de Pagamento:</label>
					<div >
						<input type="text" class="form-control" name="formpagCompra" value="<?=$formpagCompra?>"  style="text-align: center;">
					</div>
				</div>
				<div class="form-group">
					<label >Número do Cartão:</label>
					<div >
						<input type="text" class="form-control" name="numCartaoCompra" value="<?=$numCartaoCompra?>"  style="text-align: center;">
					</div>
				</div> 	
				<div class="form-group">
					<label >Nome Impresso no Cartão:</label>
					<div >
						<input type="text" class="form-control" name="nomeCartaoCompra" value="<?=$nomeCartaoCompra?>"  style="text-align: center;">
					</div>
				</div> 		
				<div class="form-group">
					<label >Validade Mês:</label>
					<div >
						<input type="text" class="form-control" name="valiCartaoMesCompra" value="<?=$valiCartaoMesCompra?>"  style="text-align: center;">
					</div>
				</div>
				<div class="form-group">
					<label >Validade Ano:</label>
					<div >
						<input type="text" class="form-control" name="valiCartaoAnoCompra" value="<?=$valiCartaoAnoCompra?>" style="text-align: center;">
					</div>
				</div> 		
				<div class="form-group">
					<label >Código de Segurança:</label>
					<div>
						<input type="text" class="form-control" name="codsegCartaoCompra" value="<?=$codsegCartaoCompra?>"  style="text-align: center;">
					</div>
				</div>
				<div class="form-group">
					<label >Número de Parcelas:</label>
					<div >
						<input type="text" class="form-control" name="parcCartaoCompra" value="<?=$parcCartaoCompra?>"  style="text-align: center;">
					</div>
				</div>
			<?php 

			 

			?>
			<div class="form-group" align="middle">		
				<input type="submit" value="ALTERAR" class="btn btn-danger" onClick="ExecutaAcao('update');">	
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