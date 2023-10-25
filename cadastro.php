<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro de itens</h1>
    <form action="salvar.php" method="get">
        <label for="txtNome">Nome do Item</label><input type="text" name="txtNome" id="txtNome">
        <label for="numPreco">Preço</label><input type="number" step="0.01" name="numPreco" id="numPreco">
        <label for="numQtd">Quantidade</label><input type="number" name="numQtd" id="numQtd">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>