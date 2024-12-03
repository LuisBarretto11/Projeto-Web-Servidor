<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        <?php if(isset($login_error)): ?>
            <div class="error">
                <?php echo $login_error;?>
            </div>
        <?php endif; ?>

        <?php 
        if(isset($_SESSION['mensagem_sucesso'])){
            echo "<p style='color: green; texte-align: left;'>" . $_SESSION['mensagem_sucesso'] . "</p>";
            unset($_SESSION['mensagem_sucesso']);
        }
        ?> 

        <form action="login.php?action=autenticar" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit">Entrar</button>
        </form>
        <p>Ainda não possui uma conta? <a href="cadastroUsuario.php">Cadastre-se</a></p>
    </div>
</body>
</html>



