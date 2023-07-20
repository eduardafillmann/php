<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <?php 
        $canal = "Curso em Video";
        $ano = date("Y");
        echo <<< TESTE
            Olá pessoa do futuro, eu fiz cursos do $canal!
                    Tudo certo?
                Como tu tá lidando com tudo no ano de $ano?
            Abraços! \u{1F596}
        TESTE;
    ?>
</body>
</html>