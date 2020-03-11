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
        var valor = parseFloat(preco_unitario) * quantidade;
        $("#valor_peca").val(valor.toFixed(2));
    });
    $('#confirmar').click(function(){
        var nome = "";
        var quantidade = document.getElementById('quantidade').value;
        var valor = document.getElementById('valor_peca').value;
        var tabela_nome = document.getElementsByClassName('nome');
        var tabela_quantidade = document.getElementsByClassName('quantidade');
        var tabela_preco = document.getElementsByClassName('total');
        var preco_unitario = document.getElementById('preco_unitario').value;
        var compra_total = 0.00;
        
        $.ajax({
            type: 'POST',
            url: 'http://localhost/ProjetoOng/Site/Caixa/produtoPreco.php',
            dataType: 'html',
            data: { 'id': $('#codigo').val(), 'tabela': 1 },
            // Após carregar, coloca a lista dentro do select de categorias.
            success: function (data) {
                // Adiciona o retorno no campo, habilita e da foco
                nome = data;
                var tabela = tabela_nome.length;
                var autorizacao = true;
                if(tabela > 0){
                    for(var i=0;i<tabela;i++){
                        if(nome == tabela_nome[i].textContent){
                            tabela_quantidade[i].innerHTML = parseInt(quantidade) + parseInt(tabela_quantidade[i].innerHTML);
                            compra_total = parseFloat(tabela_quantidade[i].innerHTML) * preco_unitario;
                            tabela_preco[i].innerHTML = compra_total.toFixed(2);
                            autorizacao = false;
                        }
                    }
                    if(autorizacao){
                        $('#compra').append('<tr><td class="nome">'+nome+'</td><td class="quantidade">'+quantidade+'</td><td class="total">'+valor+'</td><tr>');
                    }
                }
                else{
                    $('#compra').append('<tr><td class="nome">'+nome+'</td><td class="quantidade">'+quantidade+'</td><td class="total">'+valor+'</td><tr>');
                }
                calculaCompra();
            }
        });
    });
    $('#finalizar').click(function(){
        var nome = document.getElementsByClassName('nome');
        var quantidade = document.getElementsByClassName('quantidade');
        var valor = document.getElementById('valor_compra').value;

        var array_nome = Array();
        for(var i = 0; i < nome.length; i++){
            array_nome.push(nome[i].innerHTML); 
        }
        
        var array_quantidade = Array();
        for(var i = 0; i < quantidade.length; i++){
            array_quantidade.push(quantidade[i].innerHTML); 
        }
        alert(array_nome);
        $.ajax({
            type: 'POST',
            url: 'http://localhost/ProjetoOng/Site/Caixa/finalizarCompras.php',
            dataType: 'html',
            data: { 'nome': array_nome, 'quantidade': array_quantidade, 'valor':valor },
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
        var compra_total = 0.00;
        var total = document.getElementsByClassName('total');
        for(var i = 0; i < total.length; i++){
            compra_total += parseFloat(total[i].textContent);
        }
        $("#valor_compra").val(compra_total.toFixed(2));
    }
});