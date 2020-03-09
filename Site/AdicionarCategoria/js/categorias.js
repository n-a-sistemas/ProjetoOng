$(document).ready(function(){
    $.ajax({
        type: 'POST',
        url: 'http://localhost/ProjetoOng/Site/CadastrarProdutos/AdicionarCategoria/categoria.php',
        dataType: 'html',
        // Antes de carregar os registros, mostra para o usuário que está
        // sendo carregado.
        beforeSend: function (xhr) {
            $('#categorias').attr('disabled', 'disabled');
            $('#categorias').html('<li>Carregando...</li>');
        },
        // Após carregar, coloca a lista dentro do select de categorias.
        success: function (data) {
            $('#categorias').empty();
            // Adiciona o retorno no campo, habilita e da foco
            $('#categorias').append(data);
            $('#categorias').removeAttr('disabled');
        }
    });
    $('#categoria').change(function () {
        $.ajax({
            type: 'POST',
            url: 'http://localhost/ProjetoOng/Site/CadastrarProdutos/AdicionarCategoria/categoria.php',
            dataType: 'html',
            data: { 'texto': $('#categoria').val() },
            // Antes de carregar os registros, mostra para o usuário que está
            // sendo carregado.
            beforeSend: function (xhr) {
                $('#categorias').attr('disabled', 'disabled');
                $('#categorias').empty();
                $('#categorias').html('<li>Carregando...</li>');
            },
            // Após carregar, coloca a lista dentro do select de categorias.
            success: function (data) {
                if ($('#categoria').val() != "") { 
                    $('#categorias').empty();
                    // Adiciona o retorno no campo, habilita e da foco
                    $('#categorias').append(data);
                    $('#categorias').removeAttr('disabled');
                } 
                else{
                    $('#categorias').empty();
                }
            }
        });
    });
});
function validaCategoria(){
    var li = document.getElementsByTagName('li');
    if(li.length == 0){
        return true;
    }
    else{
        alert("Categoria já cadastrada!");
        return false;
    }
}