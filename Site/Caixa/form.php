<?php
    //include 'conn.php';
    //$sql="SELECT * FROM produtos";
    //$resultado=$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../menu.css"/>
    <title>Caixa</title>
</head>
<body>
    <?php include '../menu.php'; ?>
    <div class="container text-center col-8 primary">
        <div class="display-4 my-5 text-left">
            
            <h1>Caixa</h1>
            <hr/>
        </div>
        <form action="insertVendas.php" method="POST" enctype=multipart/form-data>
            <div class="form-group text-left col">
                <label for="codigo">Código do Produto: </label>
                <select name="codigo" id="codigo" class="form-control" required>
                <?php
                        if($resultado->num_rows){
                            while($linha=$resultado->fetch_assoc()){
                                ?>
                                <option value="<?php echo $linha['id_produto']?>"><?php echo $linha['codigo']?></option>
                                <?php
                            }
                        }
                    ?>
                </select>
            </div>

            <div class="form-group text-left col">
                <label for="produto">Produto: </label>
                <input type="text" name="produto" id="produto" class="form-control">
            </div>

            <div class="form-group text-left col">
                <label for="quantidade">Quantidade: </label>
                <input type="text" name="quantidade" id="quantidade" class="form-control">
            </div>

            <div class="form-group text-left col">
                <label for="valor">Valor total:</label>
                <input type="text" id="valor" name="valor" value="" class="form-control">
            </div>

            <button type="submit" class="btn btn-lg btn-outline-success my-4 mx-4">Confirmar</button>
            <button type="reset" class="btn btn-lg btn-outline-danger my-4 mx-4">Cancelar</button>

        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../Mascaras/js/jquery.mask.min.js" type="text/javascript"></script>
    <script src="../CadastrarProdutos/js/mask-val.js"></script>
    <link rel="stylesheet" href="../ProjetoOng/Site/menu.css">
</body>
</html>