<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Estoque</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>produto</th>
            <th>preço</th>
            <th>quantidade</th>
        </tr>
        <tr>
            <?php 
                require_once '../crud.php';

                // imprimir valores do estoque aqui
                $crud = new Crud;

                // consertar a impressão do array e imprimir tags da tabela
                $resultado = $crud->lerTodoEstoque();
                foreach($resultado as $i){
                    echo("<td>${i}</td>");
                }
            ?>
        </tr>
    </table>
    
</body>
</html>