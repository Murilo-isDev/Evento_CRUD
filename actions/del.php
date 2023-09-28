<?php
    include "../conexao.php";

    $id = $_GET['id'];

    $sql = "delete from atividades where id = $id";

    $conexao->query($sql);

    header("location: ../");

?>