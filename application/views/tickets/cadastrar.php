<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Cadastrar Tickets</title>
</head>

<body>
    <!-- botão voltar -->
    <a class="waves-effect waves-light btn" href="painel.php"><i
            class="small material-icons left">keyboard_arrow_left</i>Cancelar</a>
    <br><br>
    <div class="card-panel teal lighten-2">
        <h1>Adicionar Ticket</h1>
    </div>

    <br><br><br>

    <div class="container">
        <div class="row">
            <form class="col s12" action="../controller/addTickets.php" method="POST">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="titulo" name="titulo">
                        <label class="active" for="titulo">Título</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="descricao" name="descricao" class="materialize-textarea"></textarea>
                        <!--<input id="descricao" name="descricao">-->
                        <label class="active" for="descricao">Descricão</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="criado" name="criado" type="datetime-local">
                        <label class="active" for="criado">Horário/Data atual</label>
                    </div>
                    <div class="input-field col s6">
                        <select name="prioridade" id="prioridade">
                            <option value="" disabled selected>Quanto menor o número maior a prioridade</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                        <!--<input id="prioridade" name="prioridade" type="number">-->
                        <label class="active">Prioridade</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light"><i class="material-icons left">save</i>salvar</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>

</body>

</html>