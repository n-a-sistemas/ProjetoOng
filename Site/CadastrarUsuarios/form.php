<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
</head>
<body>

    <?php include '../menu.php'; ?>
    <main>
        <div class="container text-center primary">
            <form action="insert.php" method="POST">
                <div class="d-flex justify-contente-center row display-4 my-2">
                    <h1>Cadastro de Usuários</h1>
                    <hr/>
                </div>

                <div class="form-group">
                    <label for="nome">Nome Completo: </label>
                    <input type="text" name="nome" id="nome">
                </div>

                <div>
                    <label for="email">E-mail: </label>
                    <input type="email" name="email" id="email">
                    <label for="confirmaemail">Confirme seu e-mail: </label>
                    <input type="email" id="confirmaemail" name="confirmaemail">
                </div>

                <div>
                    <label for="senha">Senha: </label>
                    <input type="password" name="senha" id="senha">
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
                                <input type="radio" name="user" id="comum" value="0" checked>
                                <label for="comum">Usuário comum</label>
                            </div>
                    </fieldset>

                    <div>
                        <input type="submit" value="Cadastrar">
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>