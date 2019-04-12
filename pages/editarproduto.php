<?php 
require_once('../crud/crudProduto.php');

$crud = NULL;
$getProduto = NULL;

if($_GET){
    $crud = new CrudProduto();
    $getProduto = $crud->retornarPorId($_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produtos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php foreach($getProduto as $i){ ?>
    <a href="painel.html"><input type="button" value="Cancelar"></a><br><br>
    <form action="../controller/testeEditar.php" method="POST"> 
        Id do Produto <input name="id" value="<?php echo($i['id'])?>"><br><br>
        Nome Produto <input name="nomeProduto" value="<?php echo($i['nomeProduto']) ?>"><br><br>
        Preço <input name="preco" value="<?php echo($i['preco']) ?>"><br><br>
        Quantidade <input name="quantidade" value="<?php echo($i['quantidade']) ?>"><br><br>
        <input type="submit" value="Salvar">
    </form>
    <?php }?>
</body>
</html>