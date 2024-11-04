<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Voo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-mt-4">
    <h1>Adicionar Novo Voo</h1>
    <form action="" method="POST">
        <label for="numero_voo">Número do Voo:</label>
        <input type="text" id="numero_voo" name="numero_voo" required>
        <br>
        <label for="origem">Origem:</label>
        <input type="text" id="origem" name="origem" required>
        <br>
        <label for="destino">Destino:</label>
        <input type="text" id="destino" name="destino" required>
        <br>
        <label for="data_voo">Data:</label>
        <input type="date" id="data_voo" name="data_voo" required>
        <br>
        <label for="horario">Horário</label>
        <input type="time" id="horario" name="horario" required>
        <br>
        <label for="status">Status:</label>
        <select id="status" name="status" required>
        <option value="Confirmado">Confirmado</option>
        <option value="Cancelado">Cancelado</option>
        </select>
        <br>
        <button type="submit">Salvar Voo</button>
    </form>
    <a href="listagem.view.php" class="btn btn-secondary">Voltar à lista de voos</a>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura os dados enviados pelo formulário
    $numero_voo = htmlspecialchars($_POST['numero_voo']);
    $origem = htmlspecialchars($_POST['origem']);
    $destino = htmlspecialchars($_POST['destino']);
    $data_voo = htmlspecialchars($_POST['data_voo']);
    $horario = htmlspecialchars($_POST['horario']);
    $status = htmlspecialchars($_POST['status']);

    if (!empty($numero_voo) && !empty($origem) && !empty($destino) && !empty($data_voo) && !empty($horario) && !empty($status)){
    $voo = [
        'numero_voo' => $numero_voo,
        'origem' => $origem,
        'destino' => $destino,
        'data_voo' => $data_voo,
        'horario' => $horario,
        'status' => $status
    ];

    $file = 'voos.txt';
    file_put_contents($file, json_encode($voo) . "\n", FILE_APPEND | LOCK_EX);

    // Redireciona de volta para a página de listagem
    header('Location: listagem.view.php');
    exit();  // Certifique-se de chamar exit após o redirecionamento
} else {
    echo "<p class='text-danger'>Por favor, preencha todos os campos.</p>";
}
}
?>

