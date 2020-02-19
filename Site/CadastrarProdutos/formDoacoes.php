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
    <div class="container primary">
        <div class="display-4 my-2 text-left">
            <h1>Cadastro de Doações</h1>
            <hr/>
        </div>
        <div class="container int">
            <form action="insertDoacao.php" method="POST">
                <div>
                    <h3>Quantidade: </h3>
                    <p>
                    <input type="text" name="quantidade">
                    </p>
                </div>
                <div>
                    <h2>O que foi doado?</h2>
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
                <button type="submit" class="btn btn-lg btn-outline-success mx-2">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>