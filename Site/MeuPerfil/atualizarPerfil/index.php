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
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="stylesheet" href="../menu.css"/>
            <link rel="stylesheet" href="../estilo.css"/>
            <title>Formulário para atualização</title>
        </head>
        <body>
        <?php include '../../menu.php'; ?>
            <div class="container text-center primary">
                <div class="text-left display-4 my-2">
                    <h1>Atualização dos dados</h1>
                    <hr/>
                </div>

                <main>
                    <h4 class="text-left my-2"><?php echo $linhas?"":"Nenhum resultado encontrado"?></h4>
                    <form action="update.php?email=<?php echo $linha['email'] ?>" method="post" id="quickForm" class="col-12 col-lg-6">
                        <div class="form-group text-left">
                            <label for="NomeForm">Nome</label>
                            <input type="text" class="form-control" required value="<?php echo $linhas?$linha['nome']:"" ?>" name="nome">
                        </div>

                        <div class="form-group text-left">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" required value="<?php echo $linhas?$linha['email']:"" ?>" name="email">
                        </div>

                        <div class="form-group text-left">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" required name="senha" id="senha">
                        </div>

                        <div>
                            <button type="submit" class="btn btn-lg btn-outline-success my-4 mx-4">Salvar</button>
                        </div>
                    </form>
                </main>
            </div>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        </body>
    </html>