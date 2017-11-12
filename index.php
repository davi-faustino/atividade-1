<!DOCTYPE html>
<html>
<head>
	<title>Aprovado ou não</title>
</head>
<body>
	<form method="POST" action="result.php">
		<h2>Insira as notas do aluno em cada bimestre</h2>
		<label for="nota1">1º Bimestre</label>
		<input type="number" name="nota1" min="0" id="nota1" required><br>
		<label for="nota2">2º Bimestre</label>
		<input type="number" name="nota2" min="0" id="nota2" required><br>
		<label for="nota3">3º Bimestre</label>
		<input type="number" name="nota3" min="0" id="nota3" required><br>
		<label for="nota4">4º Bimestre</label>
		<input type="number" name="nota4" min="0" id="nota4" required><br>

		<h2>Insira as faltas do aluno em cada bimestre</h2>
		<label for="falta1">1º Bimestre</label>
		<input type="number" name="falta1" min="0" id="falta1" required><br>
		<label for="falta2">2º Bimestre</label>
		<input type="number" name="falta2" min="0" id="falta2" required><br>
		<label for="falta3">3º Bimestre</label>
		<input type="number" name="falta3" min="0" id="falta3" required><br>
		<label for="falta4">4º Bimestre</label>
		<input type="number" name="falta4" min="0" id="falta4" required><br>
		<input type="Submit" value="Enviar">
	</form>

</body>
</html>