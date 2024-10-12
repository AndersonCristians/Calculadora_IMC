<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Resultado do IMC</title>
</head>
<body>
    <div class="container">
        <?php

$nome = $_POST["nome"];
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        $imc = $peso / ($altura * $altura);

        echo "<h2>Resultado IMC</h2>";

        if ($imc <= 18.5) {
            echo "<p>Olá $nome<p>";
            echo "<p>IMC: $imc </p>";
            echo "<p>Resultado: Abaixo do peso </p>";
        }

        if ($imc > 18.5 && $imc < 24.9) {
            echo "<p>Olá $nome<p>";
            echo "<p>IMC: $imc </p>";
            echo "<p>Resultado: peso normal</p>";
        }

        if ($imc > 25 && $imc < 29.9) {
            echo "<p>Olá $nome<p>";
            echo "<p>IMC: $imc </p>";
            echo "<p>Resultado: Sobrepeso</p>";
        }

        
        if ($imc > 30 && $imc < 34.9) {
            echo "<p>Olá $nome<p>";
            echo "<p>IMC: $imc </p>";
            echo "<p>Resultado: Obesidade Grau 1</p>";
        }

        if ($imc > 35 && $imc < 39.9) {
            echo "<p>Olá $nome<p>";
            echo "<p>IMC: $imc </p>";
            echo "<p>Resultado: Obesidade Grau 2</p>";
        }

        if ($imc >= 40) {
            echo "<p>Olá $nome<p>";
            echo "<p>IMC: $imc </p>";
            echo "<p>Resultado: Obesidade Grau 2</p>";
        }

        ?>
                
        <a href="index.php">Voltar</a>
    </div>

</body>

</html>