<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
</head>
<body>
    <div>
        <form action="insert.php" method="POST">
            <div>
                <label for="nome">Nome Completo: </label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="email">E-mail: </label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="confirmaemail">Confirme seu e-mail: </label>
                <input type="email" name="confirmaemail" id="confirmaemail">
            </div>
            <div>
                <label for="senha">Senha: </label>
                <input type="password" name="senha" id="senha">
            </div>
            <div>
                <label for="confirmasenha">Confirme sua senha: </label>
                <input type="password" name="confirmasenha" id="confirmasenha">
            </div>
            <div>
                <fieldset>
                    <legend>Tipo de usuário: </legend>
                        <div>
                            <input type="radio" name="user" id="adm" value="1">
                            <label for="adm">Administrador</label>
                        </div>
                        <div>
                            <input type="radio" name="user" id="comum" value="2">
                            <label for="comum">Usuário comum</label>
                        </div>
                </fieldset>
            </div>
            <div>
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </div>

</body>
</html>