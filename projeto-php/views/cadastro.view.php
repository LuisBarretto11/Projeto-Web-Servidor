<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Voos</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
    <div class="container">
        <h2>Novo Voo</h2>
        
        <?php if (!empty($sucesso)): ?>
            <p class="success"><?= $sucesso ?></p>
        <?php endif; ?>

        <?php if (!empty($erro)): ?>
            <ul class="error">
                <?php foreach ($erro as $mensagemErro): ?>
                    <li><?= $mensagemErro ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form action="cadastro.php?action=store" method="post">
            <label>Número do Voo:</label>
            <input type="text" name="numero_voo" required>

            <label>Origem:</label>
            <input type="text" name="origem" required>

            <label>Destino:</label>
            <input type="text" name="destino" required>

            <label>Data:</label>
            <input type="date" name="data" required>

            <label>Hora:</label>
            <input type="time" name="horario" required>

            <label>Status:</label>
            <input type="text" name="status" required>

            <button type="submit">Cadastrar Voo</button>
        </form>
        <a href="home.php" class="btn btn-secondary">Voltar à Home</a>
    </div>
</body>
</html>
