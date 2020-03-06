<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar categorias</title>
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../menu.css"/>
    <link rel="stylesheet" href="css/categoria.css"/>
</head>
<body>
    <?php include '../menu.php';?>
    <!--<div>
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
    </div>-->
    <script src="../../js/categorias.js">
    </script>
    <br/>
    <div class="container primary">
        <div class="display-4 my-5 text-left col primary">
            <h1>Categorias</h1>
            <hr/>
        </div>
        <form class="form-inline my-5 my-lg-0" method="GET">
            <div class="form-group">
                <input class="form-control d-flex justify-content-end mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" name="pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                <button class="btn btn-outline-success my-2 my-sm-0 cat" type="submit">Adicionar</button>
                <button class="btn btn-outline-danger my-2 my-sm-0 catt" type="submit">Remover</button>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Id</th>
                    <th scope="col">Descrição</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //if($dados == null){
                    //    echo "NENHUM RESULTADO FOI ENCONTRADO PARA A SUA PESQUISA";
                    //}
                    //else{
                    //    foreach($dados as $row){
                    //    ?>
                            <!--<tr>
                            <td><?php echo $row['categoria'] ?></td>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['descricao'] ?></td>
                            </tr>-->
                        <?php
                    //    }
                    //}
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>