<div class="container mt-4">
        <h2 class="text-center mb-4">Lista de Voos</h2>
        <?php include 'models/listagem.models.php'; ?>
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
