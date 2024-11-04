<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<?php
// Lê o arquivo voos.txt
$voos_formatados = [];
$file = 'voos.txt';
if (file_exists($file)) {
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $dados_voo = json_decode($line, true); // Decodifica cada linha como um JSON
        if (isset($dados_voo['numero_voo']) && isset($dados_voo['origem']) && isset($dados_voo['destino'])) {
            $voos_formatados[] = [
                'numero_voo' => $dados_voo['numero_voo'] ?? 'N/A',
                'origem' => $dados_voo['origem'] ?? 'N/A',
                'destino' => $dados_voo['destino'] ?? 'N/A',
                'data' => $dados_voo['data_voo'] ?? 'N/A',
                'horario' => $dados_voo['horario'] ?? 'N/A',
                'status' => $dados_voo['status'] ?? 'N/A',
            ];
        }
    }
} else {
    $voos_formatados = [];
}
?>
<div class="container-voos mt-4">
    <h2 class="text-center mb-4">Lista de Voos</h2>

    <!-- Formulário de Busca -->
    <form action="ListagemController.php?action=listar" method="GET">
        <label for="busca">Busca por Origem, Destino ou Número do Voo</label>
        <input type="text" name="busca" id="busca" placeholder="Digite o termo de busca..."/>
        <button type="submit">Buscar</button>
    </form>

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
                <th>Ação</th> 
            </tr>
        </thead>
        <tbody>
            <?php if (count($voos_formatados) > 0): ?>
                <?php foreach ($voos_formatados as $voo): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($voo['numero_voo']); ?></td>
                        <td><?php echo htmlspecialchars($voo['origem']); ?></td>
                        <td><?php echo htmlspecialchars($voo['destino']); ?></td>
                        <td><?php echo isset($voo['data']) ? htmlspecialchars($voo['data']) : 'N/A'; ?></td>
                        <td><?php echo isset($voo['horario']) ? htmlspecialchars($voo['horario']) : 'N/A'; ?></td>
                        <td><?php echo isset($voo['status']) ? htmlspecialchars($voo['status']) : 'N/A'; ?></td>
                        <td>
                            <form action="ListagemController.php?action=remover" method="POST" onsubmit="return confirm('Tem certeza que deseja remover este voo?');">
                                <input type="hidden" name="numero_voo" value="<?php echo htmlspecialchars($voo['numero_voo']); ?>">
                                <button type="submit" class="btn btn-danger">Remover</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" class="text-center">Nenhum voo encontrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <a href="adicionarVoo.view.php" class="btn btn-primary">Adicionar Voos</a>
</div>
