<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["nome"] ?? "sem nome";
            $s= $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>Dados hackeados, agradeço pelos dados <strong>$n $s</strong>!";
        ?>
        <a href="javascript:history.go(-1)">Máquina do tempo - Recuperação de dados</a>
    </main>
</body>
</html>