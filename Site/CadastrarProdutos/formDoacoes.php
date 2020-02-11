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
    <title>Doações</title>
</head>
<body>
    <form action="insertDoacao.php" method="POST">
        <div>
            <select name="produto" id="">
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
            <label for="">Quantidade</label>
            <input type="text" name="quantidade">
        </div>
        <input type="submit">
    </form>
</body>
</html>