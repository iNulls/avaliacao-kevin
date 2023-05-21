<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Cadastro de Funcionários</title>
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
				<h1>Cadastro de Funcionarios</h1>
				<hr><br><br>

				<form method="post" action="processa.php">
					<strong>Buscar Funcionario(Nome/CPF):</strong>
					<input type="text" nome="filtro" class="campo" autofocus>
					<input type="submit" value="Pesquisar" class="button">
					<hr><br>

					Nome:
					<input type="text" name="nome" class="campo" size="40" maxlength="40" required>

					CPF:
					<input type="text" name="cpf" class="campo" size="11" minlength="11" maxlength="11" required>
					<br>

					Data de Nascimento:
					<input type="date" name="nascimento" class="campo" maxlength="8">

					Cargo:
					<select name="cargo" required>
						<option>Selecione</option>
						<option>Assistente Administrativo</option>
						<option>Auxiliar Administrativo</option>
						<option>Digitador</option>
						<option>Jovem Aprendiz</option>
						<option>Atendente</option>
						<option>Coordenador</option>
						<option>Supervisor Financeiro</option>
						<option>Analista Junior</option>
					</select>
					<br><br>

					<hr>
					<strong>Contato</strong><br>

					Telefone:
					<input type="tel" name="telefone" class="campo" size="11" maxlength="11">

					Email:
					<input type="email" name="email" class="campo" size="50" maxlength="50">
					<br><br>

					<hr>
					<strong>Endereço</strong><br>

					CEP:
					<input type="text" name="cep" class="campo" size="8" maxlength="8">

					Logradouro:
					<input type="text" name="logradouro" class="campo" size="50" maxlength="50">
					<br>

					Numero:
					<input type="text" name="numero" class="campo" size="8" maxlength="8">

					Complemento:
					<input type="text" name="complemento" class="campo" size="20" maxlength="20">

					Bairro:
					<input type="text" name="bairro" class="campo" size="20" maxlength="20">
					<br>

					Cidade:
					<input type="text" name="cidade" class="campo" size="20" maxlength="20">

					UF:
					<select name="uf">
						<option>Selecione</option>
						<option>AC</option>
						<option>AL</option>
						<option>AP</option>
						<option>AM</option>
						<option>BA</option>
						<option>CE</option>
						<option>DF</option>
						<option>ES</option>
						<option>GO</option>
						<option>MA</option>
						<option>MT</option>
						<optiom>MS</optiom>
						<option>MG</option>
						<option>PA</option>
						<option>PB</option>
						<option>PR</option>
						<option>PE</option>
						<option>PI</option>
						<option>RJ</option>
						<option>RN</option>
						<option>RS</option>
						<option>RO</option>
						<option>RR</option>
						<option>SC</option>
						<option>SP</option>
						<option>SE</option>
						<option>TO</option>
					</select>
					<br><br>
					<hr><br>

					<input type="submit" value="Salvar" class="button">
					<input type="reset" value="Limpar" class="button">
					<br><br>
				</form>
			</section>
		</div>
	</body>
</html>