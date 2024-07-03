<!DOCTYPE html>
<html lang="ept-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsivo.css">
    <title>Processamento de Dados</title>
   
</head>

<body>
   
        <h1>Resolução Exercício 01</h1>      
        
        <a href="exercicio01.html"> <input type="button" value="Voltar"></a>

    <main>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $nrepeticoes = intval($_POST["repeticao"]);

            echo "<table border='1'>";
            for ($i = 1; $i <= $nrepeticoes; $i++) {
                echo "<tr><td>{$i}</td><td>{$username}</td><td>{$sobrenome}</td></tr>";
            }
            echo "</table>";
            exit();
        }
        ?>



    </main>
   
   




</body>

</html>