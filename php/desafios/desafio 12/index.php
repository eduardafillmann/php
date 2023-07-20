<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        $total = $_REQUEST['seg'] ?? 0;

    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$total?>" >
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        $sobra = $total;
        //Total de Semanas
        $semana = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;
        //Total de Dias
        $dia = (int)($sobra / 84_400);
        $sobra = $sobra % 84_400;
        //Total de Horas
        $hora = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;
        //Total de Mintuos
        $minuto = (int)($sobra / 60);
        $sobra = $sobra % 60;
        //Total de Segundos
         $segundo = $sobra;

         //https://onlinephp.io?s=dZE9C8IwEIZnBf_DIQotiA1aSqGKi4OLk-4h2mADbVLbxN9vvqpY2yHJfbz3JHfZHeqink0nCykkKWEPG4wQMisz0VbcGqKjLm1CUXS1ypzChVaEk9bqrKmFAeMyDHxdBAmKcYpQ-AtzxrLL9rBH5pg5GwCmMY5HeS7Zw51E43iFaAaAW5yM8myuhzvrciUssGJcSTHU9Gi_fxN8KJ5bmlY551NgtEDvhYC5_x2vaIE-FXuRklZAoJu9O9oV2MHpZUzbs9mM49_rDg35XtmB1_PsDQ%2C%2C&v=8.2.8
    
    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou,<strong> <?=number_format($total, 0, ", ", ".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$minuto?> minutos</li>
            <li><?=$segundo?> segundos</li>

        </ul>
    </section>
</body>
</html>