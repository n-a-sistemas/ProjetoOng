<?php
    include '../database/conn.php';
    if(isset($_GET['datainicial'])){
        $datainicial = $_GET['datainicial'];
    }
    else{
        $datainicial = '1800/1/1';
    }
    if(isset($_GET['datafinal'])){
        $datafinal = $_GET['datafinal'];
    }
    else{
        $datafinal = date('Y-m-d');
    }
    if($datainicial > $datafinal){
        header("Location: index.php");
    }
    
    $json = file_get_contents("http://localhost/ProjetoOng/Site/RelatorioDoacao/encode.php?datainicial="
    .$datainicial."&datafinal=".$datafinal);
    $data= json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../menu.css">
    <link rel="stylesheet" href="css/RelatorioDoacao.css">
    <title>Relatório de Doações</title>
</head>
<body>
    <?php include '../menu.php';?>
    <div class="container primary">
            <div>
                <div class="container text-center col primary">
                    <div class="display-4 my-5 text-left">
                        <h1>Relatório de Doações</h1>
                        <hr/>
                    </div>
                </div>
            </div>

            <form action="" class="form-inline" method="GET">
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
        

        <div class="container">
            <div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#doacoes" role="tab" aria-controls="home" aria-selected="true">Doações</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#graficos" role="tab" aria-controls="profile" aria-selected="false">Gráficos</a>
                    </li>
                </ul>

                <div class="tab-content ">
                    <div class="tab-pane active" id="doacoes" role="tabpanel" aria-labelledby="home-tab">
            
                        <table class="table table-bordered table-hover rounded shadow">
                            <thead class="table">
                                <tr>
                                <th scope="col">Categoria</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if($datainicial != null && $datafinal != null){
                                        foreach ($data as $row) {
                                            ?>
                                            <tr>
                                            <td><?php echo $row['categoria']?></td>
                                            <td><?php echo $row['nome']?></td>
                                            <td><?php echo $row['quantidade']?></td>
                                            <td><?php echo $row['data']?></td>
                                            </tr>
                                            <?php
                                        }
                                    }else{
                                        echo "<p>"."NENHUM RESULTADO FOI ENCONTRADO PARA A SUA PESQUISA"."</p>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane" id="graficos" role="tabpanel" aria-labelledby="profile-tab">
                        <?php include('graficos.php'); ?>
                    </div>
            </div>
        </div>
    </div>
    <script>
        $('#myTab').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        });

        $(function () {
            $('#myTab li:last-child a').tab('show')
        });
        
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="chart.js/Chart.min.js"></script>
    <script type="text/javascript" src="abas.js"></script>
</body>
</html>
