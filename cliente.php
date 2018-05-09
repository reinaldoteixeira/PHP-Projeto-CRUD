<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
		<body>
			<form class="form-horizontal" action="inserirCli.php" method="POST"> 
				<div class="container">
					<div class="page-header">
						<h1 class="text-success">Cadastro Usuário</h1> 
					</div>	
					<div class="form-group">
		   				<label class="col-md-12">Nome:</label>
			   				<div class="col-md-6">
			   				 	<input type="text" class="form-control" name="nomeCli" maxlength="50" required>
						 	</div>
	  				</div>
					<div class="form-group">
		   				<label class="col-md-12">Email:</label>
			   				<div class="col-md-6">
			   				 	<input type="email" class="form-control" name="emailCli" maxlength="50" required>
						 	</div>
	  				</div>
					<div class="form-group">
		   				<label class="col-md-12">CPF:</label>
			   				<div class="col-md-6">
			   				 	<input type="text" class="form-control" name="cpfCli" maxlength="50" required>
						 	</div>
	  				</div>
					<div class="form-group">
		   				<label class="col-md-12">Telefone para Contato:</label>
			   				<div class="col-md-6">
			   				 	<input type="text" class="form-control" name="telefone1Cli" maxlength="11" required>
						 	</div>
	  				</div>
					<div class="form-group">
		   				<label class="col-md-12">Endereço:</label>
			   				<div class="col-md-6">
			   				 	<input type="text" class="form-control" name="endeCli" maxlength="50" required>
						 	</div>
	  				</div>
					<div class="form-group">
		  				<div class="col-md-12">
								<button type="submit" class="btn btn-success">CADASTRAR</button>
								<a href="index.php">
									<button type="button" class="btn btn-info">VOLTAR</button>
								</a>
						</div> 
					</div> 
				</div>
			</form>
		</body>
