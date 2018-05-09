<?php
	$idProd1	  = $_POST["idProd1"];
	$idProd2    = $_POST["idProd2"];
	$idProd3	  = $_POST["idProd3"];
	$cpfCli		  = $_POST["cpfCli"];
	$quantiCompra1 = $_POST["quantiCompra1"];	
	$quantiCompra2 = $_POST["quantiCompra2"];	
	$quantiCompra3 = $_POST["quantiCompra3"];

?>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	</head>
		<body>
			<form class="form-horizontal" action="inserirVenda.php" method="POST"> 
		
			<input type="hidden" name="quantiCompra1" value="<?=$quantiCompra1?>">  
			<input type="hidden" name="quantiCompra2" value="<?=$quantiCompra2?>">  
			<input type="hidden" name="quantiCompra3" value="<?=$quantiCompra3?>">
			<input type="hidden" name="idProd1" value="<?=$idProd1?>">  
			<input type="hidden" name="idProd2" value="<?=$idProd2?>">  
			<input type="hidden" name="idProd3" value="<?=$idProd3?>"> 
			<input type="hidden" name="cpfCli" value="<?=$cpfCli?>"> 				

				<div class="container">
					<div class="page-header">
						<h1 class="text-info">Forma de Pagamento</h1> 
					</div>	
						<div class="form-group">
				   				<div class="col-md-6">
				   					<div class="form-check">
									  <input class="form-check-input" name="formpagCompra" type="radio" value="cartao" id="cartao" checked="">
									  <label class="form-check-label" for="defaultCheck1">
									    CARTÃO DE CRÉDITO 
									  </label>
									</div>
				   					<div class="form-check">
									  <input class="form-check-input" name="formpagCompra" type="radio" value="boleto" id="boleto">
									  <label class="form-check-label" for="defaultCheck1">
									    BOLETO DE COBRANÇA 
									  </label>
									</div>
								</div>
						</div>
		  				<div class="form-group">
			   				<label class="col-md-12">Número do Cartão:</label>
				   				<div class="col-md-6">
				   				 	<input id="1" type="text" class="form-control" name="numCartaoCompra">
							 	</div>
		  				</div> 	
		  				<div class="form-group">
			   				<label class="col-md-12">Nome Impresso no Cartão:</label>
				   				<div class="col-md-6">
				   				 	<input id="2" type="text" class="form-control" name="nomeCartaoCompra">
							 	</div>
		  				</div> 	
						<div class="form-group">
			   				<label class="col-md-12">Validade Mês:</label>
				   				<div class="col-md-6">
				   				 	<select id="3" name="valiCartaoMesCompra" class="form-control">
										<option value="01">01</option>
										<option value="02">02</option>
										<option value="03">03</option>
										<option value="04">04</option>
										<option value="05">05</option>
										<option value="06">06</option>
										<option value="07">07</option>
										<option value="08">08</option>
										<option value="09">09</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
							 	</div>
		  				</div>	
						<div class="form-group">
			   				<label class="col-md-12">Validade Ano:</label>
				   				<div class="col-md-6">
				   				 	<select id="4" name="valiCartaoAnoCompra" class="form-control">
										<option value="2019">2019</option>
										<option value="2020">2020</option>
										<option value="2021">2021</option>
										<option value="2022">2022</option>
									</select>
							 	</div>
		  				</div>
						<div class="form-group">
			   				<label class="col-md-12">Código de Segurança:</label>
				   				<div class="col-md-6">
				   				 	<input id="5" type="text" class="form-control" name="codsegCartaoCompra">
							 	</div>
		  				</div>
						<div class="form-group">
			   				<label class="col-md-12">Número de Parcelas:</label>
				   				<div class="col-md-6">
				   				 	<select id="6" name="parcCartaoCompra" class="form-control">
										<option value="1">1 PARCELA - SEM JUROS</option>
										<option value="2">2 PARCELA - 10% JUROS</option>
										<option value="3">3 PARCELA - 20% JUROS</option>
										<option value="4">4 PARCELA - 30% JUROS</option>
									</select>
							 	</div>
		  				</div>
						<div class="form-group">
			  					<div class="col-md-6">
									<button type="submit" class="btn btn-success">CADASTRAR</button>
									<a href="index.php">
										<button type="button" class="btn btn-info">VOLTAR</button>
									</a>									
							</div> 
						</div> 
					</div> 
			</form>
		</body>

        <script> //javascript
        	$(document).ready(function() {
        		$("#boleto").click(function(event) {
        			$("#1"	).attr('disabled', 'true' ); 
         			$("#2"	).attr('disabled', 'true' ); 
        			$("#3"	).attr('disabled', 'true' ); 
        			$("#4"	).attr('disabled', 'true' ); 
         			$("#5"	).attr('disabled', 'true' ); 
         			$("#6"	).attr('disabled', 'true' );  		   			
        		});    		
        	});

         	$(document).ready(function() {
        		$("#cartao").click(function(event) {
        			$("#1"	).removeAttr('disabled');	
        			$("#2"	).removeAttr('disabled');	
        			$("#3"	).removeAttr('disabled'); 	
        			$("#4"	).removeAttr('disabled');
        			$("#5"	).removeAttr('disabled'); 	
        			$("#6"	).removeAttr('disabled');
        		});    		
        	});
		</script>

