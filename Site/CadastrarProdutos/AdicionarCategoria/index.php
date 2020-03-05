<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar categorias</title>
    <script src="../../js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div>
        <form action="insertCategoria.php" method="POST" onsubmit="validaCategoria();">
            <div>
                <label for="a">Categoria</label>
                <input type="text" id="categoria" name="categoria">
            </div>
            <div>
                <ul id="categorias">

                </ul>
            </div>
            <div>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
    <script src="../../js/categorias.js">
    </script>
</body>
</html>