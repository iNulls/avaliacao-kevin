<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from funcionários where nome like '%$filtro%' or cargo like '%$filtro%' order by nome";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);


?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Relatorio</title>
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
				<h1>Relatorio</h1>
				<hr><br><br>

				<form method="get" action="">
					<strong>Filtrar por nome/cargo:</strong>
					<input type="text" name="filtro" class="campo" required autofocus>
					<input type="submit" value="Pesquisar" class="button">
				</form>

				<?php

				print "Resultado da pesquisa com a palavra <strong>$filtro</strong>.<br><br>";

				print "$registros registros encontrados.";
				print "<br><br>";

				while($exibirRegistros = mysqli_fetch_array($consulta)) {
					$nome = $exibirRegistros[1];
					$telefone = $exibirRegistros[11];
					$cargo = $exibirRegistros[12];

					print "<article>";

					print "$nome<br>";
					print "$telefone<br>";
					print "$cargo<br>";
					

					print "</article>";
				}

				mysqli_close($conexao);

				?>

			</section>
		</div>
	</body>
</html>