<?php
	$conselho = $_POST['conselho'];

	if ($conselho == "Sim") {
			echo "Aluno aprovado";
		} else {
			echo "Aluno reprovado";
		}
?>