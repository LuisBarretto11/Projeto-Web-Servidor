<?php
// Inicializa a sessão para controle de autenticação
session_start();

// Simula um usuário autenticado. Em um sistema real, essa verificação seria mais robusta.
if (!isset($_SESSION['autenticado'])) {
    $_SESSION['autenticado'] = true;  // Set this to false to simulate a non-authenticated user.
}

// Verifica se o usuário está autenticado
if (!$_SESSION['autenticado']) {
    echo "Acesso negado. Faça login para visualizar a lista de voos.";
    exit;
}

// Dados de voos simulados
$voos = [
    [
        'numero_voo' => 'AA123',
        'origem' => 'São Paulo',
        'destino' => 'Rio de Janeiro',
        'data' => '2023-12-01',
        'horario' => '14:00',
        'status' => 'Confirmado'
    ],
    [
        'numero_voo' => 'BB456',
        'origem' => 'Brasília',
        'destino' => 'Recife',
        'data' => '2023-12-02',
        'horario' => '09:30',
        'status' => 'Atrasado'
    ],
    [
        'numero_voo' => 'CC789',
        'origem' => 'Salvador',
        'destino' => 'Fortaleza',
        'data' => '2023-12-03',
        'horario' => '19:45',
        'status' => 'Cancelado'
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Voos</title>
    <!-- Estilos com Bootstrap para uma aparência limpa e responsiva -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4">Lista de Voos</h2>

        <!-- Tabela de voos -->
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Número do Voo</th>
                    <th>Origem</th>
                    <th>Destino</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($voos) > 0): ?>
                    <?php foreach ($voos as $voo): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($voo['numero_voo']); ?></td>
                            <td><?php echo htmlspecialchars($voo['origem']); ?></td>
                            <td><?php echo htmlspecialchars($voo['destino']); ?></td>
                            <td><?php echo htmlspecialchars($voo['data']); ?></td>
                            <td><?php echo htmlspecialchars($voo['horario']); ?></td>
                            <td><?php echo htmlspecialchars($voo['status']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Nenhum voo cadastrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- JavaScript opcional do Bootstrap para funcionalidade adicional -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
