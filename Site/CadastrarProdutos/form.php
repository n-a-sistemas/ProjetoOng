<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de produtos</title>
</head>
<body>
    <form action="insertProdutos.php" method="POST" enctype=multipart/form-data>
        <div>
            <label for="">Código</label>
            <input type="text" name="codigo">
        </div>
        <div>
            <select name="categoria" id="">
                <option value="1">Camisa</option>
                <option value="2">Calça</option>
                <option value="3">Sapato</option>
            </select>
        </div>
        <div>
            <label for="">Nome</label>
            <input type="text" name="nome">
        </div>
        <div>
            <label for="">Descrição</label>
            <input type="text" name="descricao">
        </div>
        <div>
            <label for="">Imagem</label>
            <input type="file" name="imagem">
        </div>
        <input type="submit" value="cadastrar">
    </form>
</body>
</html>