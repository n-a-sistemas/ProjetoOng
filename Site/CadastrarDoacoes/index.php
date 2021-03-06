<?php
session_start();
if(!isset($_SESSION['id_usuario'])){
    header('Location: ../Login');
}
include('../database/conn.php');
$sql="SELECT * FROM produtos";
$resultado=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/doacoes.css">
    <link rel="stylesheet" href="../menu.css">
    <title>Cadastro de doações</title>
</head>
<body>
    <?php include '../menu.php';?>
    <main>
        <div class="container text-center primary">
            <div class="text-left display-4 my-2">
                <h1>Cadastro de Doações</h1>
                <hr/>
            </div>
            <form action="insertDoacao.php" method="POST">
                <div class="form-group text-left">
                    <label>Quantidade: </label></br>
                    <input type="text" name="quantidade" class="codigo">
                </div>
                <div class="form-group text-left">
                    <label>O que foi doado?</label></br>
                    <select name="produto">
                        <?php 
                            if($resultado->num_rows>0){
                                while($linha=$resultado->fetch_assoc()){
                                    ?>
                                    <option value="<?php echo $linha['id_produto']?>"><?php echo $linha['nome']?></option>             
                                    <?php
                                }
                            }
                        ?>
                    </select>
                </div>
                <div>
                <button type="submit" class="btn btn-lg btn-outline-success mt-3">Cadastrar</button>
                </div>
            </form>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../Mascaras/js/jquery.mask.min.js" ></script>
    <script src="../CadastrarProdutos/js/mask-val.js" ></script>
</body>
</html>