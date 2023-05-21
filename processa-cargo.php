<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$salário = $_POST['salário'];

$sql = "insert into cargo (nome, salário) values ('$nome', '$salário')";

$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Confirmação de Cadastro</title>
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
				<h1>Confirmação de Cadastro</h1>
				<hr><br><br>

				<?php

				if($linhas == 1) {
					print "Cadastro Efetuado com Sucesso!";
				} else {
					print "Cadastro NÂO efetuado.<br>Já existe um Cargo com este nome!";
				}

				?>

				<br><br>
			</section>
		</div>
	</body>
</html>