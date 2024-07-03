<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsivo.css">
    
    <title>Resolução exercício 3</title>
</head>
<body>
    
    <h1>Resolução do exercício 3</h1>
    

    <main>
    <?php 
     $massa =$_POST["massa"] ; 
     $vol = $_POST["volume"] ;
     $densidade =  ($massa)/($vol);
    echo "<p>O valor da densidade de massa  $massa e volume $vol é $densidade</p>";
    ?>
<br>
<br>

<a href="exercicio03.html"> <input type="button" value="Voltar"></a>

    </main>


</body>
</html>