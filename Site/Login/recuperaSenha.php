<?php

    include '../database/conn.php';
    date_default_timezone_set('America/Sao_Paulo');

    $token = $_GET['token'];
    $sql = "SELECT * FROM token, usuarios WHERE token.token = '$token' AND token.email = usuarios.email";
    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0){
        while($linha = $resultado->fetch_assoc()){
            if(strtotime(date('Y-m-d H:i:s')) >= strtotime($linha['datafinal'])){
                $del = "DELETE FROM token WHERE token = '$token'";
                $conn->query($del);
                header('Location: ../Login');
            }else{
                $email = $linha['email'];
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar senha</title>
</head>
<body>
    <form action="updateSenha.php?email=<?php echo $email;?>" method="POST">
        <div>
            <label for="">Nova senha:</label>
            <input type="password" name="novaSenha">
        </div>
        <div>
            <label for="">Confirme a nova senha:</label>
            <input type="password" name='confirmaSenha'>
        </div>
        <input type="submit">
    </form>
</body>
</html>