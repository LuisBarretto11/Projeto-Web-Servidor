<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Voos</title>
    <link rel="stylesheet" href="css/listagem.css"> 
</head>
<body>
    <div class="container-voos">
        <h2 class="text-center">Lista de Voos</h2>

        <!-- Tabela de voos -->
        <table class="table">
            <thead>
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
                <?php
                // Lê o arquivo voos.txt
                $file = 'voos.txt';
                if (file_exists($file)) {
                    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                    foreach ($lines as $line) {
                        // Decodifica o JSON da linha
                        $voo = json_decode($line, true);

                        // Exibe cada voo na tabela
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($voo['numero_voo']) . '</td>';
                        echo '<td>' . htmlspecialchars($voo['origem']) . '</td>';
                        echo '<td>' . htmlspecialchars($voo['destino']) . '</td>';
                        echo '<td>' . htmlspecialchars($voo['data_voo']) . '</td>';
                        echo '<td>' . htmlspecialchars($voo['horario']) . '</td>';
                        echo '<td>' . htmlspecialchars($voo['status']) . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="6">Nenhum voo registrado.</td></tr>';
                }
                ?>
            </tbody>
        </table>

        <a href="cadastro.php" class="btn btn-primary">Adicionar Voos</a>
    </div>
</body>
</html>






