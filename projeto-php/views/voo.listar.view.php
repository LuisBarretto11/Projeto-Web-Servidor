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
        <h2>Lista de Voos</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Destino</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($voos as $voo):  ?>
                    <tr>
                        <td> <?php echo $voo->id; ?></td>
                        <td> <?php echo $voo->destino; ?></td>
                        <td> <?php echo $voo->data_voo; ?></td>
                        <td> <?php echo $voo->horario; ?></td>
                        <td> <?php echo $voo->status; ?></td>
                        <td>
                            <a href="listagem.php?action=excluir&id=<?php echo $voo->id;?>">Remover</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="cadastro.php" class="btn-add">Adicionar Voo</a>
        <a href="home.php" class="btn-voltar">Voltar</a>
    </div>
</body>
</html>






