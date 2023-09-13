<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Exercicio 9</title>
	</head>
	<body>
		<?php
                        $capitalinicial = 4000.00;
			$taxajuros = 4/100;
			$tempo = 5;
			$montantecomposto = $capitalinicial * ((1 + $taxajuros) ** $tempo);
			echo "Capital Inicial: ".$capitalinicial."<br>";
			echo "Taxa de Juros: ".$taxajuros."<br>";
			echo "Tempo: ".$tempo."<br>";
			echo "Montante Composto: ".$montantecomposto."<br>";
			$jurocomposto = $montantecomposto - $capitalinicial;
			echo "Juro Composto: ".$jurocomposto."<br>";
			$jurosimples = $capitalinicial * $taxajuros * $tempo;
			echo "Juro Simples: ".$jurosimples."<br>";
			$montantesimples = $capitalinicial + $jurosimples;
			echo "Montante Simples: ".$montantesimples."<br>";
			$diferenca = $montantecomposto - $montantesimples;
			echo "Diferença entre o composto e o simples: ".$diferenca;
                ?>
	</body>
</html>
