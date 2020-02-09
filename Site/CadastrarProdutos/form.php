<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <script src="../Mascaras/js/jquery.mask.min.js" type="text/javascript"></script>
    <script src="../CadastrarProdutos/js/mask-val.js"></script>
    <link rel="stylesheet" href="../CadastrarProdutos/css/estilo-cad.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../menu.css">
    <title>Cadastro de produtos</title>
</head>
<body>
    <?php include '../menu.php'; ?>
    <div class="container text-center primary">
        <form action="insertProdutos.php" method="POST" enctype=multipart/form-data>
            <div class="d-flex justify-contente-center row display-4 my-4">
                <h1>Cadastro de produtos</h1>
            </div>

            <div class="form-group text-left col-md">
                <label for="codigo">Código</label>
                <input type="text" name="codigo" class="form-control codigo" placeholder="Digite apenas números..." required>
            </div>

            <div class="form-group text-left col-auto col-md-4">
                <label for="categoria">Categoria</label>
                <select name="categoria" id="" class="form-control" required>
                    <option value="1">Camisa</option>
                    <option value="2">Calça</option>
                    <option value="3">Sapato</option>
                </select>
            </div>

            <div class="form-group text-left col">
                <label for="">Nome</label>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <div class="form-group text-left col-auto col-md-4">
                <label for="">Preço (R$)</label>
                <input type="text" name="quantidade" class="form-control dinheiro" placeholder="Digite apenas números..." required>
            </div>

            <div class="form-group text-left col">
                <label for="">Descrição</label>
                <input type="text" name="descricao" class="form-control">
            </div>

            <div class="container form-group">
                <div class="col-auto custom-file">
                    <input class="form-control custom-file-input" type="file" name="imagemUpload" value="Procurar..."
                        accept="image/png ,image/jpeg">
                    <label class="custom-file-label text-left" for="customFile">insira uma imagem...</label>
                </div>
            </div>

            <button type="submit" class="btn btn-lg btn-outline-success my-4 mx-4">Cadastrar</button>
            <button type="reset" class="btn btn-lg btn-outline-danger my-4 mx-4">Cancelar</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../Mascaras/js/jquery.mask.min.js" type="text/javascript"></script>
    <script src="../CadastrarProdutos/js/mask-val.js"></script>
    <link rel="stylesheet" href="../CadastrarProdutos/css/estilo-cad.css" />
    <link rel="stylesheet" href="../ProjetoOng/Site/menu.css">
</body>
</html>