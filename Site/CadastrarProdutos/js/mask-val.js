$(document).ready(function () {

    //Máscaras
    $('.codigo').mask('0000000000', { reverse: true });
    $('.dinheiro').mask('000.000,00', { reverse: true });

    //Inserindo o nome do arquivo no campo de imagem
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

});