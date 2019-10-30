<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Formulario de cadrastro.</title>
	<style type="text/css">
		#containertamanho {
			width: 500px;
			height: 550px;
			box-shadow: 2px 2px 4px 4px; 
			color: #526640;
			margin-top: 40px;
		}

		#botao {
			background-color: #ff1168;
			color: #ffffff;
			font-weight: bold;
		}

	</style>
</head>
<body>

	<div class="container" id ="containertamanho">
		<h4 style="text-align: center;">Formulário de cadastro.</h4>

	<form action="_inserir_produto.php" method="POST" style="margin-top: 20px">
		<div class="form-group">
    		<label>Código do Produto.</label>
    		<input type="number" class="form-control" name="codigoproduto" placeholder="Insira o código do produto:" required autocomplete="off">
    		
  		</div>
  		<div class="form-group">
    		<label>Nome do Produto.</label>
    		<input type="text" class="form-control" name="nomedoproduto" placeholder="Insira o nome do produto:" required autocomplete="off">
    		
  		</div>
  		<div class="form-group">
    		<label>Categoria.</label>
    		<select class="form-control" name="categoria" required>
      			<option>Periféricos</option>
			    <option>Hardware</option>
			    <option>Software Eletronico</option>
			    <option>Celulares</option>
			    <option>Others</option>
			</select>
		</div>
  		<div class="form-group">
    		<label>Quantidade do Produto.</label>
    		<input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto:" required autocomplete="off">
    	</div>
  		<div class="form-group">
    		<label>Fornecedor.</label>
    		<select class="form-control" name="fornecedor" required>
      			<option>Fornecedor A</option>
			    <option>Fornecedor B</option>
			    <option>Fornecedor C</option>
			</select>
		</div>
		<div style="text-align: right;">
			
			<button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
			
		</div>
	</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>