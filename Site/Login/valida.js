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