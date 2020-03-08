<?php
    include('../../database/conn.php');
    session_start();
    
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $resultado = $conn->query($sql);
    if($resultado->num_rows > 0){
        $linhas = true;
        $linha = $resultado->fetch_assoc();
    }else{
        $linhas = false;
    }
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Formulário para atualização</title>
        </head>
        <body>
            
            <div>
                <header><h1>Formulário para atualização</h1></header>
                <main>
                    <h2><?php echo $linhas?"":"Nenhum resultado encontrada"?></h2>
                    <form action="update.php?email=<?php echo $linha['email'] ?>" method="post">
                        <div>
                            <label for="NomeForm">Nome</label>
                            <input type="text" value="<?php echo $linhas?$linha['nome']:"" ?>" name="nome">
                        </div>
                        <div>
                            <label for="email">Email</label>
                            <input type="text" value="<?php echo $linhas?$linha['email']:"" ?>" name="email">
                        </div>
                        <div>
                            <div>
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" id="senha">
                            </div>
                        </div>
                        <div>
                            <button type="submit">Salvar</button>
                        </div>
                    </form>
                </main>
            </div>
        </body>
    </html>