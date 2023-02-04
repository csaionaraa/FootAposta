<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>FootAposta</title>
    <link rel="stylesheet" href="./css/loginn.css">
</head>
<body>
    <div class="box">
        <form class="form" action="_scripts/autenticar.php" method="post">
            <h2>FootAposta</h2>
            <div class="inputBox">
                <input type="email" name="email" required="required">
                <span>E-mail</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="senha" required="required">
                <span>Senha</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#">Forgot Password</a>
                <a href="cadastro.php">Não tem cadastro?</a>
            </div>
            <button class="button" type="submit" value="Entrar">Entrar</button>
</form>
    </div>
</body>
</html>