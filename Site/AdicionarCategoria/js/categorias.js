$(document).ready(function () {
    pesquisarCategoria("");
    $('#categoria').keyup(function () {
        var categoria = "";
        if ($('#categoria').val() != "") {
            categoria = $('#categoria').val();
        }
        pesquisarCategoria(categoria);
    });
    function pesquisarCategoria(texto) {
        $.ajax({
            type: 'POST',
            url: 'http://localhost/ProjetoOng/Site/AdicionarCategoria/categoria.php',
            dataType: 'html',
            data: { 'texto': texto },
            // Após carregar, coloca a lista dentro do select de categorias.
            success: function (data) {
                $('#categorias').empty();
                // Adiciona o retorno no campo, habilita e da foco
                $('#categorias').append(data);
            }
        });
    }
});
function validaCategoria() {
    var categoria = document.getElementsByTagName('tr');
    if (document.getElementById('categoria').value != "") {
        if (categoria.length == 1) {
            return true;
        }
        else {
            alert("Categoria já cadastrada!");
            return false;
        }
    }
    else {
        alert("Digite uma categoria");
        return false;
    }
}