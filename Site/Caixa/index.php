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
    <link rel="stylesheet" href="../css/estilo-caixa.css" />
    <script src="../AdicionarCategoria/js/jquery-3.4.1.min.js"></script>
    <title>Caixa</title>
</head>

<body>
    <?php include '../menu.php'; ?>
    <div class="container text-center primary">
        <div class="display-4 my-2 text-left">
            <h1>Caixa</h1>
            <hr />
    </div>
        <form action="insertVendas.php" method="POST" enctype="multipart/form-data" class="row">
            <div class="col-12 col-lg-6">
                <div class="form-group text-left col">
                    <label for="codigo">Código e nome do produto</label>
                    <select name="codigo" id="codigo" class="form-control" required>
                        <?php
                            if($resultado->num_rows){
                                while($linha=$resultado->fetch_assoc()){
                                    ?>
                                    <option value="<?php echo $linha['id_produto']?>"><?php echo $linha['codigo'];?> - <?php echo $linha['nome'];?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>
                </div>
                
                <div class="form-group text-left col">
                    <label for="preco_unitario">Preço Unitário: </label>
                    <input type="text" name="preco_unitario" id="preco_unitario" value="" class="form-control" disabled>
                </div>

                <div class="form-group text-left col">
                    <label for="quantidade">Quantidade: </label>
                    <input type="text" name="quantidade" id="quantidade" class="form-control">
                </div>

                <div class=" text-left col-md-5">
                    <label for="preco" class="d-inline">Valor total</label>
                </div>

                <div class="input-group text-left col-md-7">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><strong>R$</strong></span>
                    </div>
                    <input type="text" id="valor" name="valor" class="form-control dinheiro"
                        placeholder="Digite apenas números..." required disabled>
                </div>
            </div>

            <div class="col-12 col-lg-6 mt-2 text-center">
                <img class="img-fluid" width="90px" id="fotoCx" src="camiseta.png" alt="">
            </div>


            <button type="submit" class="btn btn-lg btn-outline-info my-4 mx-4">Confirmar</button>
            <button type="reset" class="btn btn-lg btn-outline-success my-4 mx-4">Finalizar compra</button>
            <button type="reset" class="btn btn-lg btn-outline-danger my-4 mx-4">Cancelar</button>

            <div class="col-12 col-lg-6 mt-2 text-center">
                <table class="table table-bordered table-hover rounded shadow">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Valor unitário</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                if(isset($_GET['datainicial']) || isset($_GET['datafinal'])){
                            
                                    foreach ($dados as $row) {
                                        echo "<tr>";
                                        echo "<td>".$row['nome']."</td>";
                                        echo "<td>".$row['quantidade']."</td>";
                                        echo "<td>".$row['valor_total']."</td>";
                                        echo "</tr>"; 
                                    }
                                    echo "</tr><td>Valor total: " . $preco ."</td></tr>";
                                }
                            ?>
                    </tbody>
                </table>
            </div>


        </form>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="../Mascaras/js/jquery.mask.min.js" type="text/javascript"></script>
    <script src="../CadastrarProdutos/js/mask-val.js"></script>
    <script src="calculo.js"></script>
</body>

</html>