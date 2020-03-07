<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../menu.css"/>
    <title>Cadastro de usuários</title>
</head>
<body>

    <?php include '../menu.php'; ?>
    <main>
        <div class="container text-center primary">
            <div class="text-left display-4 my-2">
                <h1>Cadastro de Usuários</h1>
                <hr/>
            </div>

            <form action="insert.php" class="col-12 col-lg-6" method="POST" id="quickForm">

                <div class="form-group text-left">
                    <label for="nome" >Nome Completo: </label>
                    <input type="text" class="form-control" name="nome" id="nome" required>
                </div>

                <div class="form-group text-left">
                    <label for="email">Email: </label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>

                <div class="form-group text-left">
                    <label for="senha">Senha: </label>
                    <input type="password" class="form-control" name="senha" id="senha" required>
                </div>

                <div class="text-left">
                    <fieldset class="form-check mt-3" required>
                        <legend>Tipo de usuário: </legend>
                        <div>
                            <input type="radio" class="form-input" name="user" id="adm" value="1">
                            <label for="adm">Administrador</label>
                        </div>

                        <div>
                            <input type="radio" class="form-input" name="user" checked id="comum" value="0">
                            <label for="comum">Usuário comum</label>
                        </div>
                    </fieldset>

                    <div>
                        <button type="submit" class="btn btn-lg btn-outline-success mt-3">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="jquery-validation/jquery.validate.min.js"></script>
    <script src="jquery-validation/additional-methods.min.js"></script>
    <script type="text/javascript">
        /*$(document).ready(function () {
        $.validator.setDefaults({
            submitHandler: function () {
            alert( "Usuário cadastrado com sucesso!!" );
            }
        });
        
        $('#quickForm').validate({
            rules: {
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 5,
                senha: true
            },
            terms: {
                required: true
            },
            },
            messages: {
            email: {
                required: "Insira um endereço de e-mail",
                email: "Insira um endereço de e-mail válido"
            },
            password: {
                required: "Insira sua senha",
                minlength: "Sua senha deve ter pelo menos 5 caracteres"
            },
            terms: "Por favor, escolha o tipo de usuário."
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
            }
        });
        });*/
    </script>
</body>
</html>