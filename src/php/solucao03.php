<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resolução exercício 3</title>
</head>
<body>
    <h1>Resolução do exercício 3</h1>

    <?php 
     $massa =$_POST["massa"] ; 
     $vol = $_POST["volume"] ;
     $densidade =  ($massa)/($vol);
    echo "O valor da densidade de massa  $massa e volume $vol é $densidade";
    ?>

<p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
</body>
</html>