<?php 
//Connection
$conn = new PDO("sqlite:compras.sqlite");
$conn->setAttribute(
PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
    <style>
        body{
            padding:0;
            margin:0;
        }
        table,tr,th,td{
            border : solid black 1px;
            margin:0;
        }
        table{width:100%;}
        main{
            display:flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <h1>Itens Existentes no Banco de Dados</h1>
    <nav>
        <p><a href="cadastro.php">Página Cadastro</a></p>
    </nav>
    <main>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome Do Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
            </tr>
            <?php
            $q = $conn->query("SELECT * FROM compras");
            $itens = $q->fetchAll();

            foreach($itens as $i):
            ?>
            <tr>
                <td><?= $i->id ?></td>
                <td><?= $i->nome ?></td>
                <td><?= $i->preco ?></td>
                <td><?= $i->qtd ?></td>
            </tr>
            <?php endforeach;?>
        </table>
     </main>
</body>
</html>