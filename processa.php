<?php

include_once("conexao.php");

$nome =	$_POST['nome'];
$cpf = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$cargo = $_POST['cargo'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];

$sql = "insert into funcionários (nome, cpf, nascimento, cargo, telefone, email, cep, logradouro, numero, complemento, bairro, cidade, uf) values ('$nome', '$cpf', '$nascimento', '$cargo', '$telefone', '$email', '$cep', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$uf')";

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
					print "Cadastro NÂO efetuado.<br>Já existe um Funcionário com este CPF!";
				}

				?>

				<br><br>
			</section>
		</div>
	</body>
</html>