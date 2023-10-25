<?php
//Connection
$conn = new PDO("sqlite:compras.sqlite");
$conn->setAttribute(
PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

$txtNome = $_GET['txtNome'];
$numPreco = $_GET['numPreco'];
$numQtd = $_GET['numQtd'];

$preparo = $conn->prepare(
    "INSERT INTO compras(nome, preco, qtd)
    VALUES(:txtNome, :numPreco, :numQtd)"
    );
$preparo->bindParam(":txtNome",$txtNome);
$preparo->bindParam(":numPreco",$numPreco);
$preparo->bindParam(":numQtd",$numQtd);

$preparo->execute();

header("Location:index.php");