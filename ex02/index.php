<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <?php 
    require_once 'Funcionario.php';

    $funcionario[0] = new Funcionario(1300, 15, 5);

    echo $funcionario[0]->calcularSalarioLiquido(); 
    ?>
</body>
</html>