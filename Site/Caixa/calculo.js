$(document).ready(function () {
    $.ajax({
        type: 'POST',
        url: 'http://localhost/ProjetoOng/Site/Caixa/produtoPreco.php',
        dataType: 'html',
        data: { 'id': $('#codigo').val(), 'tabela': 0 },
        // Antes de carregar os registros, mostra para o usuário que está
        // sendo carregado.
        beforeSend: function () {
            $('#preco_unitario').val('Carregando...');
        },
        // Após carregar, coloca a lista dentro do select de categorias.
        success: function (data) {
            // Adiciona o retorno no campo, habilita e da foco
            $('#preco_unitario').val(data);
            $('#valor_peca').val(data);
            $('#quantidade').val(1);
        }
    });
    $('#codigo').change(function () {
        $.ajax({
            type: 'POST',
            url: 'http://localhost/ProjetoOng/Site/Caixa/produtoPreco.php',
            dataType: 'html',
            data: { 'id': $('#codigo').val(), 'tabela': 0 },
            // Antes de carregar os registros, mostra para o usuário que está
            // sendo carregado.
            beforeSend: function () {
                $('#preco_unitario').val('Carregando...');
            },
            // Após carregar, coloca a lista dentro do select de categorias.
            success: function (data) {
                // Adiciona o retorno no campo, habilita e da foco
                $('#preco_unitario').val(data);
                $('#valor_peca').val(data);
                $('#quantidade').val(1);
            }
        });
    });
    $('#quantidade').change(function(){
        var quantidade = document.getElementById('quantidade').value;
        var preco_unitario = document.getElementById('preco_unitario').value;
        var valor = preco_unitario * quantidade;
        $("#valor_peca").val(valor);
    });
    $('#confirmar').click(function(){
        var nome = "";
        var quantidade = document.getElementById('quantidade').value;
        var valor = document.getElementById('valor_peca').value;
        $.ajax({
            type: 'POST',
            url: 'http://localhost/ProjetoOng/Site/Caixa/produtoPreco.php',
            dataType: 'html',
            data: { 'id': $('#codigo').val(), 'tabela': 1 },
            // Após carregar, coloca a lista dentro do select de categorias.
            success: function (data) {
                // Adiciona o retorno no campo, habilita e da foco
                nome = data;
                $('#compra').append('<tr><td class="nome">'+nome+'</td><td class="quantidade">'+quantidade+'</td><td class="total">'+valor+'</td><tr>');
                calculaCompra();
            }
        });
    });
    $('#finalizar').click(function(){
        var nome = document.getElementsByClassName('nome');
        var quantidade = document.getElementsByClassName('quantidade');
        var valor = document.getElementsByClassName('valor_compra');
        $.ajax({
            type: 'POST',
            url: 'http://localhost/ProjetoOng/Site/Caixa/finalizarCompras.php',
            dataType: 'html',
            data: { 'nome': nome, 'quantidade': quantidade, 'valor':valor },
            // Após carregar, coloca a lista dentro do select de categorias.
            success: function (data) {
                // Adiciona o retorno no campo, habilita e da foco
                //if(data){alert('compra finalizada');}
                //else{ alert('erro');}
                alert(data);
            }
        });
    });
    function calculaCompra(){
        var compra_total = 0;
        var total = document.getElementsByClassName('total');
        for(var i = 0; i < total.length; i++){
            compra_total += parseInt(total[i].textContent);
        }
        $("#valor_compra").val(compra_total);
    }
});