<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Login/css/estilo1.css">
    <title>Login</title>
</head>
<body>
    <form action="verifica.php" method="post">
        <div id="user-image">
            <figure>
                <img src="../../Projeto Gráfico/imagens/user-png-icon.png" alt="Imagem do usuário" width="200px">
            </figure>
            <a>Teste 1</a>
        </div>

        <div id="flex-box">
            <div>
                <input type="email" id="email" name="email" placeholder="Digite aqui o seu email...">
            </div>

            <div>
                <input type="password" id="senha" name="password" placeholder="Digite aqui a sua senha...">
            </div>
        </div>

        <button id="btn" type="submit">ENTRAR</button>

        <div id="msg-alert">
            <p>Usuário ou senha incorretos. Tente novamente.</p>
        </div>

        <div id="link-troca">
            <a href="">Esqueceu a senha? Clique aqui.</a>
        </div>

        <footer>
            <figure>
                <img src="../../Documentos/EXEMPLOS DE TELA/logo-cantinho.png" alt="Logo Cantinho Fraterno" width="150px">
            </figure>
        </footer>
    </form>
    
</body>
</html>