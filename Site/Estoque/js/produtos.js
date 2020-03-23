$(document).ready(function () {
    pesquisarProdutos("", $('#colunas').val());
    $('#pesquisar').keyup(function () {
        var pesquisar = "";
        if ($('#pesquisar').val() != "") {
            pesquisar = $('#pesquisar').val();
        }
        pesquisarProdutos(pesquisar, $('#colunas').val());
    });
    $('#colunas').change(function(){
        var pesquisar = "";
        if ($('#pesquisar').val() != "") {
            pesquisar = $('#pesquisar').val();
        }
        pesquisarProdutos(pesquisar, $('#colunas').val());
    });
    function pesquisarProdutos(texto, coluna) {
        $.ajax({
            type: 'POST',
            url: 'http://localhost/ProjetoOng/Site/Estoque/produtos.php',
            dataType: 'html',
            data: { 'pesquisar': texto, 'colunas': coluna },
            success: function (data) {
                $('#produtos').empty();
                $('#produtos').append(data);
            }
        });
    }
});