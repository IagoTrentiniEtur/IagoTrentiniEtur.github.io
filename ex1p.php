<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Exercicio 1</title>
	</head>
	<body>
		<?php
                        $pri = rand(1,50);
			$seg = rand(1,50);
			$ter = rand(1,50);
			if ($pri > 10) {
				echo "<p style="color:blue;">".$pri + $seg + $ter."</p>";
			}
                ?>
	</body>
</html>
