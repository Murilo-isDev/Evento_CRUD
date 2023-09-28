<?php include "conexao.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicione informações</title>
    <!-- Bootstrap - CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de Clientes</h1>
        <form action="actions/add.php" method="post">
            <div class="mb-3">
                <label for="idNome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="campoNome" id="idNome" placeholder="Seu nome completo">
            </div>
            <div class="mb-3">
                <label for="idDescricao" class="form-label">Descrição:</label>
                <input type="text" class="form-control" name="campoDescricao"  id="idDescricao" placeholder="Jogador de CSGO">
            </div>
            <div class="mb-3">
                <label for="idParticipantes" class="form-label">Número de Participantes</label>
                <input type="int" class="form-control" name="campoParticipantes"  id="idParticipantes" placeholder="100">
            </div>
            <div class="mb-3">
                <label for="idData" class="form-label">Data:</label>
                <input type="date" class="form-control" name="campoData"  id="idData" >
            </div>
            <div class="mb-3">
                <label for="idHoraInicio" class="form-label">Hora de Início:</label>
                <input type="time" class="form-control" name="campoHoraInicio"  id="idHoraInicio">
            </div>
            <div class="mb-3">
                <label for="idHoraFinal" class="form-label">Hora Final:</label>
                <input type="time" class="form-control" name="campoHoraFinal"  id="idHoraFinal">
            </div>
            <div class="mb-3">
                <label for="idSala" class="form-label">Sala</label>
                <input type="text" class="form-control" name="campoSala"  id="idSala" placeholder="1" minlength="1" maxlength="1">
            </div>
            <div class="mb-3">
                <label for="idTurno" class="form-label">Turno:</label>
                <input type="text" class="form-control" name="campoTurno"  id="idTurno" placeholder="Manhã" minlength="0" maxlength="30">
            </div>
            
            <div class="mb-3">
                <label for="idPalestrante" class="form-label">Palestrante:</label>
                <input type="text" class="form-control" name="campoPalestrante" id="idPalestrante" placeholder="Cortela">
            </div>
            <div class="mt-3 mb-3">
                <label for="idObs" class="form-label">Observação</label>
                <textarea class="form-control" id="idObs" name="campoObs"> </textarea>
            </div>
            <button type="submit" class="btn btn-success">Gravar</button>
            <a href="./" class="btn btn-primary">Voltar</a>
        </form>


        <!-- Bootstrap - CSS -->
        <script src="js/bootstrap.js"></script>
</body>

</html>