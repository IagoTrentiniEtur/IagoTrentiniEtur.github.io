<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Exercicio 7</title>
	</head>
	<body>
		<?php
                        $precocarro = 22500.00;
			$parcelas = 489.65;
			$parcelatotal = 60 * $parcelas;
			$resto = $parcelatotal - $precocarro;
			echo "Preço do carro: ".$precocarro." |Total de parcelas: ".$parcelatotal." |Resto: ".$resto;
                ?>
	</body>
</html>
