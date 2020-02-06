<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Login/css/estilo1.css">
    <title>Login</title>
</head>

<body>
    <div class="container text-center">
        <br/>
        <br/>
        <h2 class="display-4 my-5">Login</h2>
        <div class="row">
            <form action="verifica.php" method="post" class="col text-center">
                <div class="form-group text-left">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" placeholder="Digite aqui o seu e-mail..." id="email" name="email">
                </div>

                <div class="form-group text-left">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" placeholder="Digite aqui a sua senha..." id="email" name="password">
                </div>

                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <p>Usuário ou senha incorreto. Tente novamente.</p>
                </div>

                <button type="submit" class="btn btn-lg btn-outline-primary my-4">ENTRAR</button>
            </form>
        </div>

        <div id="logocan" class="my-3 text-center">
            <picture>
                <img class="img-fluid" style="width: 270px;" src="../../Documentos/EXEMPLOS DE TELA/logo-cantinho.png" alt="Logo Cantinho Fraterno">
            </picture>
        </div>
    </div>
</body>

</html>