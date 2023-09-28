<?php
    include "conexao.php";

    $sql = "select * from atividades";

    $rs = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento do Murilo</title>
    <!-- Bootstrap - CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de Clientes</h1>
        <a href="adicionar.php" class="btn btn-success">Adicionar</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data</th>
                    <th scope="col">Hora de Início</th>
                    <th scope="col">Sala</th>
                    <th scope="col">Turno</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while($item = mysqli_fetch_object($rs)){ ?>
                <tr>
                    <th scope="row"><?php echo $item->id; ?></th>
                    <td><?php echo $item->nome; ?></td>
                    <td><?php echo $item->data; ?></td>
                    <td><?php echo $item->hora_inicio; ?></td>
                    <td><?php echo $item->sala; ?></td>
                    <td><?php echo $item->turno; ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $item->id; ?>" class="btn btn-sm btn-warning">Editar</a>
                        <a href="javascript:excluir(<?php echo $item->id; ?>)" class="btn btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
    <script>
        function excluir(id){
            if(confirm("Tem certeza que deseja excluir?")){
                window.location = "actions/del.php?id=" + id;
            }
        }
    </script>
    <!-- Bootstrap - CSS -->
    <script src="js/bootstrap.js"></script>
</body>

</html>