<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="./estilo.css">
</head>
<body>
    <form action="../controller/addProduto.php" method="POST"> 
        Nome Produto <input name="nomeProduto"><br><br>
        Preço <input name="preco"><br><br>
        Quantidade <input name="quantidade"><br><br>
        <input type="submit" value="Salvar">
    </form>


</body>
</html>