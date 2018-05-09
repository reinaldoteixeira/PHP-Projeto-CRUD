<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
		<body>
			<form class="form-horizontal" action="inserirProd.php" method="POST"> 
				<div class="container">
					<div class="page-header">
						<h1 class="text-success">Cadastro Produto</h1> 
					</div>		
						<div class="form-group">
			   				<label class="col-md-12">Nome:</label>
				   				<div class="col-md-6">
				   				 	<input type="text" class="form-control" name="nomeProd" maxlength="50" required>
							 	</div>
		  				</div>
		  				<div class="form-group">
			   				<label class="col-md-12">Preço:</label>
				   				<div class="col-md-6">
				   				 	<input type="text" class="form-control" name="precoProd" maxlength="5" required>
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