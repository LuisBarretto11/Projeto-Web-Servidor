<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Voo</title>
    <link rel="stylesheet" href="css/cadastroVoo.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro de Voo</h2>
        <form action="cadastroVoo.php?action=cadastrar" method="POST">
            <label for="numero_voo">Numero do Voo:</label>
            <input type="text" id="numero_voo" name="numero_voo" required>

            <label for="origem">Origem:</label>
            <input type="text" id="origem" name="origem" required>

            <label for="destino">Destino:</label>
            <input type="text" id="destino" name="destino" required>

            <label for="data_voo">Data:</label>
            <input type="text" id="data_voo" name="data_voo" required>
            
            <label for="horario">Hora:</label>
            <input type="text" id="horario" name="horario" required>

            <label for="status">Status:</label>
            <input type="text" id="status" name="status" required>

            <button type="submit">Cadastrar Voo</button>
        </form>
        <a href="javascript:history.back()" class="btn-voltar">Voltar</a>
    </div>
</body>
</html>
