<?php
    include "../conexao.php";

    $nome = $_POST['campoNome'];
    $descricao = $_POST['campoDescricao'];
    $numero_participantes = $_POST['campoParticipantes'];
    $data = $_POST['campoData'];
    $hora_inicio = $_POST['campoHoraInicio'];
    $hora_final = $_POST['campoHoraFinal'];
    $sala = $_POST['campoSala'];
    $turno = $_POST['campoTurno'];
    $palestrante = $_POST['campoPalestrante'];
    $obs = $_POST['campoObs'];

    $sql = "insert into atividades (nome, descricao, numero_participantes, data, hora_inicio, hora_final, sala, turno, palestrante, obs)
        values ('$nome', '$descricao', '$numero_participantes', '$data', '$hora_inicio', '$hora_final','$sala', '$turno', '$palestrante', '$obs')";


    $conexao->query($sql);

    header("location: ../");

?>

