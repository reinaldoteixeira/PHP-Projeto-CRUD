<?php
	$cpfCli    = $_POST["cpfCli"];
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
		<body>
			<form class="form-horizontal" action="pagamento.php" method="POST"> 	
			<input type="hidden" name="cpfCli" value="<?=$cpfCli?>">  
				<div class="container">
					<div class="page-header">
						<h1 class="text-success">COMPRA</h1> 
					</div>	
						<div class="form-group" >
			   				<label class="col-md-12">Nome:</label>
				   				<div class="col-md-6">
				   				 	<select id="selecao1" name="selecao1" class="form-control">   				 		
										<option value="" disabled selected hidden>Selecione...</option>
										<?php
										// conexao com o banco de dados
											require_once("conexao.php");

											$resultado = $con->query("SELECT * FROM produto"); // criei uma variavel no qual vai ser armazenado meu comando select, o query ele é utlizado para passar os parametros myssql
											
											while($res = $resultado->fetch()) { 

											$tempPreco = $res['precoProd']; //vai armazenar o id do livro para que eu selecione automatico o preco
											$tempNome = $res['nomeProd'];
											$tempId1 = $res['idProduto'];
										?>

									    <option value="<?=$tempId1?>"> <?=$tempNome?></option>

										   <?php      
											    
											  } // no meu while eu criei um condição na qual diz, enquanto tiver linha o loop continua fetch = retorna a proxima linha do resultado
											?>
						   			</select>
							 	</div>
		  				</div>
						<div class="form-group">
			   				<label class="col-md-12">Preço:</label>
				   				<div class="col-md-6">
				   					 	<input id="preco1" type="text" class="form-control" name="precoProd1" readonly="true">
				   					 	<input id="idProd1" type="hidden" name="idProd1">
							 	</div>
		  				</div>
						<div class="form-group">
			   				<label class="col-md-12">Quantidade:</label>
				   				<div class="col-md-6">
				   				 	<input type="text" class="form-control" name="quantiCompra1">
							 	</div>
		  				</div>
						<div class="form-group" >
			   				<label class="col-md-12">Nome:</label>
				   				<div class="col-md-6">
				   				 	<select id="selecao2" name="selecao2" class="form-control">   				 		
										<option value="" disabled selected hidden>Selecione...</option>
										<?php
										// conexao com o banco de dados
											require_once("conexao.php");

											$resultado = $con->query("SELECT * FROM produto"); // criei uma variavel no qual vai ser armazenado meu comando select, o query ele é utlizado para passar os parametros mysql
											
											while($res = $resultado->fetch()) { 

											$tempPreco = $res['precoProd']; //vai armazenar o id do livro para que eu selecione automatico o preco
											$tempNome = $res['nomeProd'];
											$tempId2 = $res['idProduto'];

										?>

									    <option value="<?=$tempId2?>"> <?=$tempNome?></option>
										   <?php      
											    
											  } // no meu while eu criei um condição na qual diz, enquanto tiver linha o loop continua fetch = retorna a proxima linha do resultado
											?>
						   			</select>
							 	</div>
		  				</div>
						<div class="form-group">
			   				<label class="col-md-12">Preço:</label>
				   				<div class="col-md-6">
				   					 	<input id="preco2" type="text" class="form-control" name="precoProd2" readonly="true">	 			
							 			<input id="idProd2" type="hidden" name="idProd2">

							 	</div>
		  				</div>
						<div class="form-group">
			   				<label class="col-md-12">Quantidade:</label>
				   				<div class="col-md-6">
				   				 	<input type="text" class="form-control" name="quantiCompra2">
							 	</div>
		  				</div>
						<div class="form-group" >
			   				<label class="col-md-12">Nome:</label>
				   				<div class="col-md-6">
				   				 	<select id="selecao3" name="selecao3" class="form-control">   				 		
										<option value="" disabled selected hidden>Selecione...</option>
										<?php
										// conexao com o banco de dados
											require_once("conexao.php");

											$resultado = $con->query("SELECT * FROM produto"); // criei uma variavel no qual vai ser armazenado meu comando select, o query ele é utlizado para passar os parametros mysql
											
											while($res = $resultado->fetch()) { 

											$tempPreco = $res['precoProd']; //vai armazenar o id do livro para que eu selecione automatico o preco
											$tempNome = $res['nomeProd'];
											$tempId3 = $res['idProduto'];
										?>

									    <option  value="<?=$tempId3?>"> <?=$tempNome?></option>
										   <?php      
											    
											  } // no meu while eu criei um condição na qual diz, enquanto tiver linha o loop continua fetch = retorna a proxima linha do resultado
											?>
						   			</select>
							 	</div>
		  				</div>
						<div class="form-group">
			   				<label class="col-md-12">Preço:</label>
				   				<div class="col-md-6">
				   					 	<input id="preco3" type="text" class="form-control" name="precoProd3" readonly="true">
							 			<input id="idProd3" type="hidden" name="idProd3">
							 	</div>
		  				</div>
						<div class="form-group">
			   				<label class="col-md-12">Quantidade:</label>
				   				<div class="col-md-6">
				   				 	<input type="text" class="form-control" name="quantiCompra3">
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
				</div>
			</form>
		</body>

        <script> //javascript
            // Selecionamos o menu dropdown, que possui os valores possíveis:
            var menu_dropdown_1 = document.getElementById("selecao1");

            // Requisitamos que a função handler (que copia o valor selecionado para a caixa de texto) [...]
            // [...] seja executada cada vez que o valor do menu dropdown mude:
            menu_dropdown_1.addEventListener("change", function(){


                var valor_selecionado_1 = menu_dropdown_1.options[menu_dropdown_1.selectedIndex].value;

                document.getElementById("idProd1").value = valor_selecionado_1;

            	var xhttp = new XMLHttpRequest();
			    xhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) {
				     	document.getElementById("preco1").value = this.responseText;
				    }
			    };
			    xhttp.open("GET", "ajax.php?id="+this.value, true);
			    xhttp.send();

            });


            // Selecionamos o menu dropdown, que possui os valores possíveis:
            var menu_dropdown_2 = document.getElementById("selecao2");

            // Requisitamos que a função handler (que copia o valor selecionado para a caixa de texto) [...]
            // [...] seja executada cada vez que o valor do menu dropdown mude:
            menu_dropdown_2.addEventListener("change", function(){

                var valor_selecionado_2 = menu_dropdown_2.options[menu_dropdown_2.selectedIndex].value;

                document.getElementById("idProd2").value = valor_selecionado_2;


            	var xhttp = new XMLHttpRequest();
			    xhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) {
				     	document.getElementById("preco2").value = this.responseText;
				    }
			    };
			    xhttp.open("GET", "ajax.php?id="+this.value, true);
			    xhttp.send();

            });


            // Selecionamos o menu dropdown, que possui os valores possíveis:
            var menu_dropdown_3 = document.getElementById("selecao3");

            // Requisitamos que a função handler (que copia o valor selecionado para a caixa de texto) [...]
            // [...] seja executada cada vez que o valor do menu dropdown mude:
      		  menu_dropdown_3.addEventListener("change", function(){

                var valor_selecionado_3 = menu_dropdown_3.options[menu_dropdown_3.selectedIndex].value;

                document.getElementById("idProd3").value = valor_selecionado_3;

      		  	var xhttp = new XMLHttpRequest();
			    xhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) {
				     	document.getElementById("preco3").value = this.responseText;
				    }
			    };
			    xhttp.open("GET", "ajax.php?id="+this.value, true);
			    xhttp.send();



            });
            
        </script>