$(document).ready(function(){
    $.ajax({
        type: 'POST',
        url: 'http://localhost/ProjetoOng/Site/AdicionarCategoria/categoria.php',
        dataType: 'html',
        // Antes de carregar os registros, mostra para o usuário que está
        // sendo carregado.
        beforeSend: function () {
            $('#categorias').html('<tr><td>Carregando...</td></tr>');
        },
        // Após carregar, coloca a lista dentro do select de categorias.
        success: function (data) {
            $('#categorias').empty();
            // Adiciona o retorno no campo, habilita e da foco
            $('#categorias').append(data);
        }
    });
    $('#categoria').change(function () {
        $.ajax({
            type: 'POST',
            url: 'http://localhost/ProjetoOng/Site/AdicionarCategoria/categoria.php',
            dataType: 'html',
            data: { 'texto': $('#categoria').val() },
            // Antes de carregar os registros, mostra para o usuário que está
            // sendo carregado.
            beforeSend: function () {
                $('#categorias').empty();
                $('#categorias').html('<tr><td>Carregando...</td></tr>');
            },
            // Após carregar, coloca a lista dentro do select de categorias.
            success: function (data) {
                if ($('#categoria').val() != "") { 
                    $('#categorias').empty();
                    // Adiciona o retorno no campo, habilita e da foco
                    $('#categorias').append(data);
                }
                else{
                    $.ajax({
                        type: 'POST',
                        url: 'http://localhost/ProjetoOng/Site/AdicionarCategoria/categoria.php',
                        dataType: 'html',
                        // Antes de carregar os registros, mostra para o usuário que está
                        // sendo carregado.
                        beforeSend: function () {
                            $('#categorias').html('<tr><td>Carregando...</td></tr>');
                        },
                        // Após carregar, coloca a lista dentro do select de categorias.
                        success: function (data) {
                            $('#categorias').empty();
                            // Adiciona o retorno no campo, habilita e da foco
                            $('#categorias').append(data);
                        }
                    });
                }
            }
        });
    });
});
function validaCategoria(){
    var categoria = document.getElementsByTagName('tr');
    if(categoria.length == 1){
        return true;
    }
    else{
        alert("Categoria já cadastrada!");
        return false;
    }
}