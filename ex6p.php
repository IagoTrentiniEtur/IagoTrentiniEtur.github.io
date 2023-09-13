<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Exercicio 6</title>
	</head>
	<body>
		<?php
                        $poupanca = 50.00;
			$precomaca = rand(1,10);
			$quilomaca = 0.13;
			$precomelancia = rand(1,10);
			$quilomelancia = 10;
			$precolaranja = rand(1,10);
			$quilolaranja = 0.14;
			$precorepolho = rand(1,10);
			$quilorepolho = 0.63;
			$precocenoura = rand(1,10);
			$quilocenoura = 0.13;
			$precobatata = rand(1,10);
			$quilobatata = 0.15;
			$precototalmaca = $precomaca * $quilomaca;
			$precototalmelancia = $precomelancia * $quilomelancia;
			$precototallaranja = $precolaranja * $quilolaranja;
			$precototalrepolho = $precorepolho * $quilorepolho;
			$precototalcenoura = $precocenoura * $quilocenoura;
			$precototalbatata = $precobatata * $quilobatata;
			$conta = $precototalmaca + $precototalmelancia + $precototallaranja + $precototalrepolho + $precototalcenoura + $precototalbatata;
			if ($conta > $poupanca) {
				echo "<p style='color:vermelho;'>Conta: ".$conta." |Poupança: ".$poupanca." |Status: Falta.</p>";
			} elseif ($conta < $poupanca) {
				echo "<p style='color:blue;'>Conta: ".$conta." |Poupança: ".$poupanca." |Status: Sobrou.</p>";
			} elseif ($conta == $poupanca) {
				echo "<p style='color:green;'>Conta: ".$conta." |Poupança: ".$poupanca." |Status: Esgotado.</p>";
			}
                ?>
	</body>
</html>
