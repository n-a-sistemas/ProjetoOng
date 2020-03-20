<?php
session_start();
if(!isset($_SESSION['id_usuario'])){
    header('Location: ../Login');
}
    include '../database/conn.php';
    $sql="SELECT * FROM produtos";
    $resultado=$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="../menu.css" />
    <link rel="stylesheet" href="./css/estilo-caixa.css" />
    <script src="../AdicionarCategoria/js/jquery-3.4.1.min.js"></script>
    <title>Caixa</title>
</head>

<body>
    <?php include '../menu.php'; ?>
    <div class="container text-center primary">
        <div class="row">
            <div class="col-12 display-4 my-2 text-left">
                <h1>Caixa</h1>
                <hr />
            </div>
            <div class="col-sm-12 col-md-6">
                <form action="finalizaCompras.php" method="POST" enctype="multipart/form-data"
                    onsubmit="return enviarCompra();">
                    <div class="form-group text-left col">
                        <label for="codigo">Código e nome do produto</label>
                        <select name="codigo" id="codigo" class="form-control" required>
                            <?php
                            if($resultado->num_rows){
                                while($linha=$resultado->fetch_assoc()){
                                    ?>
                            <option value="<?php echo $linha['id_produto']?>"><?php echo $linha['codigo'];?> -
                                <?php echo $linha['nome'];?></option>
                            <?php
                                }
                            }
                        ?>
                        </select>
                    </div>
                    <div class="form-group text-left col">
                        <label for="preco_unitario">Preço Unitário: </label>
                        <input type="text" name="preco_unitario" id="preco_unitario" value="" class="form-control"
                            disabled>
                    </div>
                    <div class="form-group text-left col">
                        <label for="quantidade">Quantidade: </label>
                        <input type="number" name="quantidade" id="quantidade" class="form-control" value="1" min="1"
                            max="100">
                    </div>
                    <div class=" text-left col">
                        <label for="valor_peca" class="d-inline">Valor total da peça</label>
                    </div>
                    <div class="input-group text-left col">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><strong>R$</strong></span>
                        </div>
                        <input type="text" id="valor_peca" name="valor_peca" class="form-control dinheiro" required
                            disabled>
                    </div>
                    <div class="input-group text-left col">
                        <label for="valor_compra" class="d-inline">Valor total da compra</label>
                    </div>
                    <div class="input-group text-left col">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><strong>R$</strong></span>
                        </div>
                        <input type="text" id="valor_compra" name="valor_compra" value="0,00" class="form-control dinheiro"
                            required disabled>
                    </div>
                    <div>
                        <input type="hidden" name="array_nome" id="array_nome" value="">
                        <input type="hidden" name="array_quantidade" id="array_quantidade" value="">
                        <input type="hidden" name="preco_final" id="preco_final" value="">
                    </div>

                    <button type="button" id="confirmar" class="btn btn-lg btn-outline-info m-2">Adicionar
                        produto</button>
                    <button type="submit" id="finalizar" class="btn btn-lg btn-outline-success m-2">Finalizar
                        compra</button>
                    <button type="reset" id="cancelar" class="btn btn-lg btn-outline-danger m-2">Limpa
                        compra</button>
                </form>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="container">
                    <img class="img-fluid mb-4" width="90px" src="" id="fotoCx"
                        alt="Foto do produto">
                    <table class="table table-bordered table-hover rounded shadow">
                        <thead class="mw-100">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Preço total da peça(R$)</th>
                                <th scope="col">#</th>
                            </tr>
                        </thead>
                        <tbody id="compra">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="../Mascaras/js/jquery.mask.min.js" type="text/javascript"></script>
    <script src="../CadastrarProdutos/js/mask-val.js"></script>
    <script src="calculo.js"></script>
</body>

</html>