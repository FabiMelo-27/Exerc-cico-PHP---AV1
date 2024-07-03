<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Solução do Exercicio 02</title>
</head>
<body>
<?php
if(isset($_POST['login']) && isset($_POST['senha'])) {
    if($_POST['login'] === '22205531' && $_POST['senha'] === 'ni150900') {
        //substitua os termos : seu login aqui pelo seu acesso AVa e sua senha aqui , pela senha que utiliza para acessar o Ava
        header("Location: sucesso.html");
        exit;
    } else {
        header("Location: erro.html");
        exit;
    }
} else {
    header("Location: erro.html");
    exit;
}
?>
</body>
</html>