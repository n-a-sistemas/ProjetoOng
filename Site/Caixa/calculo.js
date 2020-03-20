$(document).ready(function () {
    pegaValorEImagem(0);
    $('#codigo').change(function () {
        pegaValorEImagem(0);
    });
    $('#confirmar').click(function () {
        pegaValorEImagem(1);
    });
    $('#cancelar').click(function () {
        $('#compra').empty();
        pegaValorEImagem(0);
    });
    $('#compra').on("click", ".btn-remover", function(){
        var id = '#'+$(this).val(); 
        $(id).remove();
        calculaCompra();
    });
    $('#quantidade').change(function () {
        var quantidade = document.getElementById('quantidade').value;
        var preco_unitario = document.getElementById('preco_unitario').value;
        var valor = parseFloat(preco_unitario) * quantidade;
        valor = valor.toFixed(2).toString();
        valor = valor.replace('.', ',', valor);
        $("#valor_peca").val(valor);
    });
    function calculaCompra() {
        var compra_total = 0.00;
        var total = document.getElementsByClassName('total');
        for (var i = 0; i < total.length; i++) {
            compra_total += parseFloat(total[i].textContent);
        }
        compra_total = compra_total.toFixed(2).toString();
        compra_total = compra_total.replace('.', ',', compra_total);
        $("#valor_compra").val(compra_total);
        $('#quantidade').val(1);
        var preco_unitario = document.getElementById('preco_unitario').value;
        $("#valor_peca").val(preco_unitario);
    }
    function pegaValorEImagem(valor_ajax) {
        $.ajax({
            type: 'POST',
            url: 'http://localhost/ProjetoOng/Site/Caixa/produtoPreco.php',
            dataType: 'html',
            data: { 'id': $('#codigo').val(), 'tabela': valor_ajax },
            // Antes de carregar os registros, mostra para o usuário que está
            // sendo carregado.
            beforeSend: function () {
                if (valor_ajax == 0) {
                    $('#preco_unitario').val('Carregando...');
                }
            },
            // Após carregar, coloca a lista dentro do select de categorias.
            success: function (data) {
                // Adiciona o retorno no campo, habilita e da foco
                if (valor_ajax == 0) {
                    data = data.split(",");
                    var preco = parseFloat(data[0]);
                    preco = preco.toFixed(2).toString();
                    preco = preco.replace('.', ',', preco);
                    var imagem = data[1];
                    $('#preco_unitario').val(preco);
                    $('#valor_peca').val(preco);
                    $('#quantidade').val(1);
                    $('#fotoCx').attr('src', '../CadastrarProdutos/' + imagem);
                }
                else {
                    var nome = data;
                    var quantidade = document.getElementById('quantidade').value;
                    var valor = document.getElementById('valor_peca').value;
                    var tabela_nome = document.getElementsByClassName('nome');
                    var tabela = tabela_nome.length;
                    var autorizacao = true;
                    if (tabela > 0) {
                        var tabela_quantidade = document.getElementsByClassName('quantidade');
                        var tabela_preco = document.getElementsByClassName('total');
                        var preco_unitario = document.getElementById('preco_unitario').value;
                        preco_unitario = preco_unitario.replace(',', '.', preco_unitario);
                        var compra_total = 0.00;

                        for (var i = 0; i < tabela; i++) {
                            if (nome == tabela_nome[i].textContent) {
                                tabela_quantidade[i].innerHTML = parseInt(quantidade) + parseInt(tabela_quantidade[i].innerHTML);
                                compra_total = parseFloat(tabela_quantidade[i].innerHTML) * preco_unitario;
                                compra_total = compra_total.toFixed(2).toString();
                                compra_total = compra_total.replace('.', ',', compra_total);
                                tabela_preco[i].innerHTML = compra_total;
                                autorizacao = false;
                            }
                        }
                    }
                    if (autorizacao) {
                        $('#compra').append("<tr id='" + tabela + "'><td class='nome'>" + nome
                            + "</td><td class='quantidade'>" + quantidade
                            + "</td><td class='total'>" +
                            valor + "</td><td><button type='button'" +
                            "class='btn-remover btn btn-outline-danger' value='" + tabela + "'>Remover item</button></td><tr>");
                    }
                    calculaCompra();
                }
            }
        });
    }
    
});
function enviarCompra() {
    var nome = document.getElementsByClassName('nome');
    var quantidade = document.getElementsByClassName('quantidade');
    var valor = document.getElementById('valor_compra').value;
    valor = valor.replace(',', '.', valor);
    var array_nome = Array();
    for (var i = 0; i < nome.length; i++) {
        array_nome.push(nome[i].innerHTML);
    }

    var array_quantidade = Array();
    for (var i = 0; i < quantidade.length; i++) {
        array_quantidade.push(quantidade[i].innerHTML);
    }

    var form_nome = document.getElementById('array_nome');
    form_nome.value = array_nome;
    var form_quantidade = document.getElementById('array_quantidade');
    form_quantidade.value = array_quantidade;
    var form_preco = document.getElementById('preco_final');
    form_preco.value = valor;
    return true;
}