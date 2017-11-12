<!-- 1) Uma escola precisa saber se o aluno foi aprovado ou não. Facilite a verificação se o aluno passou ou reprovou de ano e qual foi o motivo. E se a nota final do aluno estiver 5% abaixo da média anual, deixar uma opção para que o professor decida se ele sera aprovado ou não (Conselho).

Regra de Negócio: 
> São 4 Bimestres.
> Max de faltas aceitas: 18 no ano.
> Nota minima para ser aprovado: 7,0. -->
<!DOCTYPE html>
<html>
<head>
	<title>Conselho</title>
</head>
<body>
<?php
	$nota1 = $_POST['nota1'];
	$nota2 = $_POST['nota2'];
	$nota3 = $_POST['nota3'];
	$nota4 = $_POST['nota4'];


	$falta1 = $_POST['falta1'];
	$falta2 = $_POST['falta2'];
	$falta3 = $_POST['falta3'];
	$falta4 = $_POST['falta4'];


	$notafim = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
	$faltafim = $falta1 + $falta2 + $falta3 + $falta4;

	if ($notafim >= 70 && $faltafim <= 18){
		echo "Aluno aprovado";
	} else if ($faltafim > 18){
		echo "Reprovado por falta";
	} else if ($notafim < 66.5){
		echo "Reprovado por nota";
	} else{
		echo "A nota final do aluno foi de " . $notafim . "<br>";
		echo "Deseja aprovar o aluno por conselho?";
?>
		<form method="POST" action="conselho.php">
			<input type="radio" name="conselho" value="Sim" id="sim">
			<label id="sim">Sim</label>
			<br>
			<input type="radio" name="conselho" value="Não" id="nao">
			<label id="nao">Não</label>
			<br>
			<input type="submit" value="Enviar">
		</form>
<?php
	}
?>
	</body>
</html>