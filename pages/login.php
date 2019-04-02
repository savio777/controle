<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="./estilo.css">
</head>
<body>
    <!-- necessita refatorar nomes de arquivos e action -->
    <form action="../loginTest.php" method="POST">
        <p>Usuario</p>
        <input name="usuario">
        <p>Senha</p>
        <input type="password" name="senha"><br><br>
        <input type="submit" value="Entrar">
    </form>
    
</body>
</html>