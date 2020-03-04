<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar categorias</title>
</head>
<body>
    <div>
        <form action="insertCategoria.php">
            <div>
                <label for="categoria">Categoria</label>
                <input type="text" id="categoria" name="categoria">
            </div>
            <div>
                <select name="categorias" id="categorias">
                </select>
            </div>
            <div>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>