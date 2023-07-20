<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Antecessor e sucessor</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<main>
			<h1>Resultado Final</h1>
			<p>
				<?php 
					$n = $_REQUEST["num"];
					$a = $n - 1;
					$s = $n + 1;
					echo "O número escolhido foi <strong>$n</strong>";
					echo "<br>O seu <em>antecessor</em> é $a";
					echo "<br>O seu <em>sucessor</em> é $s";
				?>
			</p>
			<button onclick="javascript:history.go(-1)">&#x2B05 Voltar</button>
		</main>
	</body>
</html>
