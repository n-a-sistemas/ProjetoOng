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
    <title>Caixa</title>
</head>
<body>
    <h1>Caixa</h1>

    <form action="insertVendas.php" method="POST">
        <div>
            <label for="codigo">Código do Produto: </label>
            <input type="text" name="codigo" id="codigo">
        </div>
        <br>
        <div>
            <label for="produto">Produto: </label>
            <select name="produto" id="produto">
                <?php
                    if($resultado->num_rows){
                        while($linha=$resultado->fetch_assoc()){
                            ?>
                            <option value="<?php echo $linha['id_produto']?>"><?php echo $linha['nome']?></option>
                            <?php
                        }
                    }
                ?>
            </select>
        </div>
        <br>
        <div>
            <label for="quantidade">Quantidade: </label>
            <input type="number" name="quantidade" id="quantidade">
        </div>
        <br>
        <div>
            <label for="valor">Valor total:</label>
            <input type="number" id="valor" name="valor" value="">
        </div>
        <div>
            <input type="submit" value="Confirmar">
        </div>
    </form>

</body>
</html>