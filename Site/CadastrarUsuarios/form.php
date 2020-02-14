<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
</head>
<body>
    <div>
        <form action="../Login/login.php" method="POST">
            <div>
                <label for="nome">Nome Completo: </label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="senha">Senha: </label>
                <input type="password" name="senha" id="senha">
            </div>
            <div>
                <fieldset>
                <legend>Tipo de usuário: </legend>
                    <div>
                        <input type="radio" name="adm" id="adm">
                        <label for="adm">Administrador</label>
                    </div>
                    <div>
                        <input type="radio" name="comum" id="comum">
                        <label for="comum">Usuário comum</label>
                    </div>
                </fieldset>
                <div>
                    <input type="submit" value="Cadastrar">
                </div>
            </div>
        </form>
    </div>

</body>
</html>