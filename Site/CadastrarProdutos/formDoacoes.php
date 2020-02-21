<?php
include 'conn.php';
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
    <title>Doações</title>
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
                    <input type="text" name="quantidade">
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
</body>
</html>