<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="select.php" method="POST">
    <div>
        <label for="datainicial">Data inicial: </label>
        <input type="date" id="datainicial" name="datainicial">
    </div>
    <br>
    <div>
        <label for="datafinal">Data Final: </label>
        <input type="date" name="datafinal" id="datafinal">
    </div>
    <div>
        <input type="submit" value="Exibir">
    </div>
    </form>
</body>
</html>