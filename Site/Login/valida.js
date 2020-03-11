$(document).ready(function () {
    $("#btn").click(function () {
        if ($("#senha").attr('type') == "password") {
            $("#senha").attr('type', "text");
        }
        else if ($("#senha").attr('type') == "text") {
            $("#senha").attr('type', "password");
        }
    });
});

function validaLogin() {
    var msg = "";
    var autorizacao = false;

    //Validação do campo email
    var email = document.getElementById("email").value;
    if (email == "") {
        msg += "\r\n- Preencha o campo email";
    }
    
    if (!validarEmail()) {
        msg += "\r\n- Verifique o formato do email";
    }


    //Validação do campo senha
    var senha = document.getElementById("senha").value;
    if (senha == "") {
        msg += "\r\n- Preencha o campo senha";
    }

    if (msg == "") {
        autorizacao = true;
    }
    else {
        alert("Verifique os seguintes campos:" + msg);
    }
    return autorizacao;
}

/*function validarEmail() {
    var email = document.getElementById("email");
    usuario = email.value.substring(0, email.value.indexOf("@"));
    dominio = email.value.substring(email.value.indexOf("@") + 1, email.value.length);
    if (email.value != "") {
        if ((usuario.length >= 1) &&
            (dominio.length >= 3) &&
            (usuario.search("@") == -1) &&
            (dominio.search("@") == -1) &&
            (usuario.search(" ") == -1) &&
            (dominio.search(" ") == -1) &&
            (dominio.search(".") != -1) &&
            (dominio.indexOf(".") >= 1) &&
            (dominio.lastIndexOf(".") < dominio.length - 1)) {
                return false;
        }
        else {
            return true;
        }
    }
}
*/