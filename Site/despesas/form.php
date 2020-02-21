<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despesas</title>
</head>
<body>
    <form action="insert.php" method="post">
        <div>
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome">
        </div>
        <div>
            <label for="valor">Valor: </label>
            <input type="number" step="any" name="valor" id="valor">
        </div>
        <div>
            <input type="submit" value="Confirmar">
        </div>
    </form>
</body>
</html>