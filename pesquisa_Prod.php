<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
		<body>
			<form class="form-horizontal" action="consultar_Prod.php" method="POST"> 		
				<div class="container">
					<div class="page-header">
						<h1 class="text-warning">PRODUTO</h1> 
					</div>	
						<div class="form-group" >
			   				<label class="col-md-12">NOME:</label>
				   				<div class="col-md-6">
				   				 	<select id="selecao1" name="selecao1" class="form-control">   				 		
										<option value="" disabled selected hidden>Selecione...</option>
										<?php
										// conexao com o banco de dados
											require_once("conexao.php");

											$resultado = $con->query("SELECT * FROM produto"); // criei uma variavel no qual vai ser armazenado meu comando select, o query ele é utlizado para passar os parametros myssql
											
											while($res = $resultado->fetch()) { 

											$tempNome = $res['nomeProd']; //vai armazenar o id do livro para que eu selecione automatico o preco
											$tempidProd = $res['idProduto'];
										?>

									    <option value="<?=$tempidProd?>"> <?=$tempNome?></option>

										   <?php      
											    
											  } // no meu while eu criei um condição na qual diz, enquanto tiver linha o loop continua fetch = retorna a proxima linha do resultado
											?>
						   			</select>
							 	</div>
						</div> 
						<div class="form-group">
			   				<label class="col-md-12">ID:</label>
				   				<div class="col-md-6">
				   					 	<input id="idProd" type="text" class="form-control" name="idProd" readonly="true">
								 </div>
								 <div class="col-md-6">
				   					 	<input id="nome" type="hidden" class="form-control" name="nomeProd" readonly="true">
								 </div>
		  				</div>
						<div class="form-group">
			  					<div class="col-md-6">
									<button type="submit" class="btn btn-warning">SELECIONAR</button>
									<a href="index.php">
										<button type="button" class="btn btn-info">VOLTAR</button>
									</a>
							</div> 
						</div> 

				</div> 	
			</form>
		</body>

        <script> //javascript
            // Selecionamos o menu dropdown, que possui os valores possíveis:
            var menu_dropdown = document.getElementById("selecao1");

            // Requisitamos que a função handler (que copia o valor selecionado para a caixa de texto) [...]
            // [...] seja executada cada vez que o valor do menu dropdown mude:
            menu_dropdown.addEventListener("change", function(){

                // Como este código é executado após cada alteração, sempre obtemos o valor atualizado:
                var valor_selecionado = menu_dropdown.options[menu_dropdown.selectedIndex].value;
				var texto_selecionado = menu_dropdown.options[menu_dropdown.selectedIndex].text;


                document.getElementById("nome").value = texto_selecionado;
                document.getElementById("idProd").value = valor_selecionado;

            });
            
        </script>