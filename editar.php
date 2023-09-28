<?php
include "conexao.php";

if(!isset($_GET) || $_GET['id'] == ""){
    header("location: ./");
    exit();
}


//Pega o valor do id da url
$id = $_GET['id'];

//armazena código sql para a busca do registro selecionado
$sql = "select * from atividades where id = $id";

//executa o código sql no banco
$rs = $conexao->query($sql);

//Pega dados retornados do bd e coloca na variável $item
$item = mysqli_fetch_object($rs);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edite o cadastro</title>
    <!-- Bootstrap - CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de Clientes</h1>
        <form action="actions/edit.php" method="post">
            <input type="hidden" name="campoId" value="<?php echo $id; ?>">
            <div class="mb-3">
                <label for="idNome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="campoNome" value="<?php echo $item->nome; ?>" id="idNome" placeholder="Seu nome completo">
            </div>
            <div class="mb-3">
                <label for="idDescricao" class="form-label">Descrição:</label>
                <input type="text" class="form-control" name="campoDescricao" value="<?php echo $item->descricao; ?>" id="idDescricao" placeholder="Jogador de CSGO">
            </div>
            <div class="mb-3">
                <label for="idParticipantes" class="form-label">Número de Participantes</label>
                <input type="int" class="form-control" name="campoParticipantes" value="<?php echo $item->numero_participantes; ?>" id="idParticipantes" placeholder= "100">
            </div>
            <div class="mb-3">
                <label for="idData" class="form-label">Data:</label>
                <input type="date" class="form-control" name="campoData" value="<?php echo $item->data; ?>" id="idData" >
            </div>
            <div class="mb-3">
                <label for="idHoraInicio" class="form-label">Hora de Início:</label>
                <input type="time" class="form-control" name="campoHoraInicio" value="<?php echo $item->hora_inicio; ?>" id="idHoraInicio">
            </div>
            <div class="mb-3">
                <label for="idHoraFinal" class="form-label">Hora Final:</label>
                <input type="time" class="form-control" name="campoHoraFinal" value="<?php echo $item->hora_final; ?>" id="idHoraFinal">
            </div>
            <div class="mb-3">
                <label for="idSala" class="form-label">Sala</label>
                <input type="text" class="form-control" name="campoSala" value="<?php echo $item->sala; ?>" id="idnomeMae" placeholder="1" minlength="1" maxlength="1">
            </div>
            <div class="mb-3">
                <label for="idTurno" class="form-label">Turno:</label>
                <input type="text" class="form-control" name="campoTurno" value="<?php echo $item->turno; ?>" id="idTurno" placeholder="Manhã" minlength="0" maxlength="30">
            </div>
            
            <div class="mb-3">
                <label for="idPalestrante" class="form-label">Palestrante:</label>
                <input type="text" class="form-control" name="campoPalestrante" value="<?php echo $item->palestrante; ?>" id="idPalestrante" placeholder="Cortela">
            </div>
            <div class="mt-3 mb-3">
                <label for="idObs" class="form-label">Observação</label>
                <textarea class="form-control" id="idObs" name="campoObs" ><?php echo $item->obs; ?> </textarea>
            </div>
            <button type="submit" class="btn btn-success">Gravar</button>
            <a href="./" class="btn btn-primary">Voltar</a>
        </form>



        <!-- Bootstrap - CSS -->
        <script src="js/bootstrap.js"></script>
</body>

</html>