<?php
session_start();
if(!isset($_SESSION['id_usuario'])){
    header('Location: ../Login');
}

include('../database/conn.php');

$datainicial = "";
$datafinal = "";
if(isset($_GET['datainicial']) && isset($_GET['datafinal'])){
    $datainicial = $_GET['datainicial'];
    $datafinal = $_GET['datafinal'];    
}
if($datainicial != "" && $datafinal != ""){
    $json = file_get_contents('http://localhost/ProjetoOng/Site/relatoriofinanceiro/encode.php?datainicial=' . $datainicial . '&datafinal=' . $datafinal);
    $dados = json_decode($json, true);
    $json = file_get_contents('http://localhost/ProjetoOng/Site/relatoriofinanceiro/investimentos/encode.php?datainicial=' . $datainicial . '&datafinal=' . $datafinal);
    $dados_despesas = json_decode($json, true);
}

$total = "SELECT * FROM vendas WHERE data BETWEEN '$datainicial 00:00:00' AND '$datafinal 23:59:59'";
$preco_vendas = 0;
$result = $conn->query($total);
if($result->num_rows > 0){
    while($linha=$result->fetch_assoc()){
       $preco_vendas += $linha['valor_total'];
    }
}


$total = "SELECT * FROM despesas WHERE data BETWEEN '$datainicial 00:00:00' AND '$datafinal 23:59:59'";
$preco_despesas = 0;
$resultadx = $conn->query($total);
if($resultadx->num_rows > 0){
    while($linha=$resultadx->fetch_assoc()){
       $preco_despesas += $linha['valor'];
    }
}

//select para investimentos
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/adminlte.min.css" />
    <link rel="stylesheet" href="../menu.css" />
    <link rel="stylesheet" href="estilo.css" />
    <title>Relatório Financeiro</title>
</head>

<body>
    <?php include "../menu.php"; ?>
    <div class="container">
        <div>
            <div class="container text-center col primary">
                <div class="display-4 my-2 text-left">
                    <h1>Relatório Financeiro</h1>
                    <hr />
                </div>
            </div>
        </div>

        <form action="" class="form-inline mb-4" method="GET">

            <div class="form-group ">
                <label for="" class="mx-2">Data Inicial: </label>
                <input type="date" name="datainicial" class="mx-1 form-control" id="datainicial">
            </div>

            <div class="form-group ">
                <label for="datafinal" class="mx-2">Data Final: </label>
                <input type="date" name="datafinal" class="mx-1 form-control" id="datafinal">
            </div>

            <button type="submit" class="btn btn-lg btn-outline-success mx-2">Procurar</button>

        </form>

        <div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Vendas</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#invest" role="tab"
                        aria-controls="profile" aria-selected="false">Investimentos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="grafico-tab" data-toggle="tab" href="#graficos" role="tab"
                        aria-controls="grafico" aria-selected="false">Gráficos</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <table class="table table-bordered table-hover rounded shadow">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Valor total</th>
                                <th scope="col">Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(isset($_GET['datainicial']) || isset($_GET['datafinal'])){
                            
                                    foreach ($dados as $row) {
                                        $data = new DateTime($row['data']);
                                        echo "<tr>";
                                        echo "<td>".$row['nome']."</td>";
                                        echo "<td>".$row['categoria']."</td>";
                                        echo "<td>"."R$ ".$row['valor_total']."</td>";
                                        echo "<td>".$data->format('d/m/Y')."</td>";
                                        echo "</tr>"; 
                                    }
                                    echo "</tr><td>Valor total: " . $preco_vendas ."</td></tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="tab-pane" id="invest" role="tabpanel" aria-labelledby="profile-tab">
                    <table class="table table-bordered table-hover rounded shadow">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(isset($_GET['datainicial']) || isset($_GET['datafinal'])){
                                    foreach ($dados_despesas as $row) {
                                        echo "<tr>";
                                        echo "<td>".$row['nome']."</td>";
                                        echo "<td>"."R$ ".$row['valor']."</td>";
                                        echo "</tr>"; 
                                    }
                                    echo "</tr><td>Valor total: " . $preco_despesas ."</td></tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="tab-pane" id="graficos" role="tabpanel" aria-labelledby="grafico-tab">
                    <?php include('graficos.php'); ?>
                </div>

            </div>
        </div>
    </div>
    <script>
        $('#myTab').on('click', function(e) {
            e.preventDefault()
            $(this).tab('show')
        });

        $(function() {
            $('#myTab li:last-child a').tab('show')
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="chart.js/Chart.min.js"></script>
    <script type="text/javascript" src="abas.js"></script>
    <script type="text/javascript" src="impressao.js"></script>

</body>

</html>