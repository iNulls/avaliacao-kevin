<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Cadastro de Cargos</title>
		<link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		<div class="caixa">
			<nav>
				<ul class="menu">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="cadastro-funcionarios.php">Cadastro de Funcionarios</a></li>
					<li><a href="cadastro-cargos.php">Cadastro de Cargos</a></li>
					</li>
					<li><a href="relatorio.php">Relatorio</a></li>
				</ul>
			</nav>
			<section>
				<h1>Cadastro de Cargos</h1>
				<hr><br><br>

				<form method="post" action="processa-cargo.php">
					<strong>Buscar Cargo(Nome):</strong>
					<input type="text" nome="filtro" class="campo" autofocus>
					<input type="submit" value="Pesquisar" class="button">
					<hr><br>

					Nome:
					<input type="text" name="nome" class="campo" required>
					<br>

					Salário:
					<input type="text" name="salário" class="campo" required>
					<hr><br>

					<input type="submit" value="Salvar" class="button">
					<input type="reset" value="Limpar" class="button">

				</form>
			</section>
		</div>
	</body>
</html>			