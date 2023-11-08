<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <pre> 
    <?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';
    
    $p[0] = new Pessoa("Alex", 19, "M");
    $p[1] = new Pessoa("Luis", 20, "M");

    $l[0] = new Livro("PHP", "João da Siva", 200, $p[0], 1);
    $l[1] = new Livro("IA", "Maria Duarte", 325, $p[1], 53);  

    echo $l[0]->detalhes(); 
    ?>
    </pre> 
</body>
</html>