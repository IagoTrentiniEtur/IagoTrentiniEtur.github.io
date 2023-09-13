<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Exercicio 2</title>
	</head>
	<body>
		<?php
                        $num = rand(1,100);
			if ($num % 2 == 0) {
				echo "Valor divisível por 2";
			} else {
				echo "O valor não é divisível por 2";
			}
                ?>
	</body>
</html>
