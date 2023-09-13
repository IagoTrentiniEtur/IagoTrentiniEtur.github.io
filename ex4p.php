<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Exercicio 4</title>
	</head>
	<body>
		<?php
                        $ladoa = rand(1,10);
			$ladob = rand(1,10);
			$area = $ladoa * $ladob;
			if ($area > 10) {
				echo "<h1>A área do retângulo de lados ".$ladoa." e ".$ladob." metros é ".$area." metros quadrados.</h1>";
			} elseif ($area < 10) {
				echo "<h3>A área do retângulo de lados ".$ladoa." e ".$ladob." metros é ".$area." metros quadrados.</h3>";
			}
                ?>
	</body>
</html>
