<?php
    session_start();
    if(!isset($_SESSION['id_usuario'])){
        header('Location: ../Login');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../menu.css">
    <link rel="stylesheet" href="css/estoque.css">
    <title>Estoque</title>
</head>

<body>
    <?php include '../menu.php';?>
    <br />
    <div class="container primary">
        <div class="display-4 my-5 text-left col primary">
            <h1>Estoque</h1>
            <hr />
        </div>
        <form class="form-inline my-5 my-lg-0" method="POST">
            <div class="form-group">
                <input class="form-control d-flex justify-content-end mr-sm-2" type="text" placeholder="Pesquisar"
                    aria-label="Pesquisar" id="pesquisar" name="pesquisar">
            </div>
            <div class="form-group">
                <select name="colunas" id="colunas">
                    <option value="nome" selected>Nome</option>
                    <option value="categoria">Categoria</option>
                </select>
            </div>
            <button onclick="impressao();" class="btn btn-lg btn-outline-info mx-2">Imprimir</button>
        </form>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Preço</th>
                        <th scope="col" colspan=2>#</th>
                    </tr>
                </thead>
                <tbody id="produtos">
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script type="text/javascript" src="impressao.js"></script>
<script src="./js/produtos.js"></script>
</html>