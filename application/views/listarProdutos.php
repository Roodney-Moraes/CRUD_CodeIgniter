<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Lista de produtos da tabela produtos">
	<meta name="author" content="Roodney Moraes">
	<title>CURSO - Lista Produtos</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- MATERIALIZE CSS-->
	<link rel="stylesheet" href="materialize/css/materialize.min.css">
</head>
<body>
	<div class="container">
		<div class="row center">
			<h2>Lista de Produtos</h2>
		</div>
		<table class="centered highlight">
			<thead class="black white-text">
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Preço</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php
					// QUANTIDADE DE REGISTRO
					$contador = 0;
					foreach ($produtos as $produto) {
						echo "
							<tr>
								<td>$produto->id</td>
								<td>$produto->nome</td>
								<td>$produto->preco</td>
								<td>
									<a class='btn-floating btn-tiny waves-effect waves-light orange'><i class='material-icons'>edit</i></a>
									<a class='btn-floating btn-tiny waves-effect waves-light red'><i class='material-icons'>delete</i></a>
									<a class='btn-floating btn-tiny waves-effect waves-light blue'><i class='material-icons'>visibility</i></a>
								</td>
							</tr>
						";
						$contador++;
					}
				?>
			</tbody>
		</table>
		<br><br>
		<div class="row">
			<div class="col s6">
				<b>Total de registro: <?php echo $contador ?></b>
			</div>
			<div class="col s6 ">
				<a href="Produtos/CreateProduto" class="waves-effect waves-light btn green right"><i class="material-icons left">cloud</i>Novo Produto</a>
			</div>
		</div>
	</div>
	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- MATERIALIZE JS-->
	<script src="materialize/js/materialize.min.js"></script>
</body>
</html>