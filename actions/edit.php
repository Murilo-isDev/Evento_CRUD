<?php
    include "../conexao.php";

    $id = $_POST["campoId"];
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

    $sql = "update atividades set 
        nome='$nome', 
        descricao='$descricao',
        numero_participantes = '$numero_participantes',
        data = '$data',
        hora_inicio ='$hora_inicio', 
        hora_final = '$hora_final',
        sala = '$sala', 
        turno= '$turno', 
        palestrante= '$palestrante',
        obs = '$obs'
            where id = $id";        

    
    $conexao->query($sql);

    header("location: ../index.php");

?>


