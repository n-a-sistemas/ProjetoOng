$(document).ready(function () {
    $.ajax({
        type: 'POST',
        url: 'http://localhost/ProjetoOng/Site/Caixa/produtoPreco.php',
        dataType: 'html',
        data: { 'id': $('#codigo').val() },
        // Antes de carregar os registros, mostra para o usuário que está
        // sendo carregado.
        beforeSend: function () {
            $('#preco_unitario').val('Carregando...');
        },
        // Após carregar, coloca a lista dentro do select de categorias.
        success: function (data) {
            // Adiciona o retorno no campo, habilita e da foco
            $('#preco_unitario').val(data);
        }
    });
    $('#codigo').change(function () {
        $.ajax({
            type: 'POST',
            url: 'http://localhost/ProjetoOng/Site/Caixa/produtoPreco.php',
            dataType: 'html',
            data: { 'id': $('#codigo').val() },
            // Antes de carregar os registros, mostra para o usuário que está
            // sendo carregado.
            beforeSend: function () {
                $('#preco_unitario').val('Carregando...');
            },
            // Após carregar, coloca a lista dentro do select de categorias.
            success: function (data) {
                // Adiciona o retorno no campo, habilita e da foco
                $('#preco_unitario').val(data);
            }
        });
    });
});
