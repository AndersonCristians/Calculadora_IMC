<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>calcular IMC</title>
</head>

<body>

    <div class="container">
        <form action="calculo_imc.php" method="post" class="imc-form">
            <h2>Calcular IMC</h2>

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

            <label for="peso">Peso (kg):</label>
            <input type="number" step="0.01" id="peso" name="peso" placeholder="Digite seu peso" required>

            <label for="altura">Altura (m):</label>
            <input type="number" step="0.01" id="altura" name="altura" placeholder="Digite sua altura" required>

            <div class="buttons">
            <button type="submit">Calcular</button>
            <button type="reset">Limpar</button>
            </div>
        </form>
    </div>

</body>

</html>