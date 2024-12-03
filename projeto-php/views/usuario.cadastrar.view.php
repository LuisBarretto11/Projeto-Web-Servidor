<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
    <link rel="stylesheet" href="css/cadastroUsuario.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro de Usuarios</h2>
        <form action="cadastroUsuario.php?action=store" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit">cadastrar</button>
        </form>
        <p>Ja possui uma conta? <a href="login.php">Faça login aqui</a></p>
    </div>
</body>
</html>



