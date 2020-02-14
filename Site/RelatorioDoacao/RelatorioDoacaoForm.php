<?php 
    if(isset($_GET['datainicial']) || isset($_GET['datainicial'])){
        $datainicial = $_GET['datainicial'];
        $datafinal = $_GET['datafinal'];
    } 
    else{
        $datainicial ='';
        $datafinal ='';
    }

    $url = 'http://localhost/xampp/ProjetoOng/Site/RelatorioDoacao/relatorioEncode.php?datainicial='
    .$datainicial.'&datafinal='.$datafinal;
    $json = file_get_contents($url);
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
        <form class="form-inline my-5 my-lg-0" action="" method="GET">
            <div class="display-4 my-5 text-left">
                <h1>Relatórios de Doações</h1>
                <hr/>
            <label for="">Data Inicial</label>
            <input type="date" name="datainicial">
            <label for="">Data Final</label>
            <input type="date" name="datafinal">
            <div class="form-group col-md-4">
        </form>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </div>
    <div class="container teste">
        <table>
        <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
        </tr>
    </tbody>
            </table>
        </div>
</body>
</html>
<!--<?php
                if(isset($_GET['datainicial']) || isset($_GET['datainicial'])){
                    foreach ($data as $row) {
                        ?>
                        <tr>
                        <td scope="row"><?php echo $row['id_doacao'] ?></td>
                        <td><?php echo $row['id_produto'] ?></td>
                        <td><?php echo $row['quantidade'] ?></td>
                        </tr>
                        <?php
                    }
                }
                else{
                    
                }
    ?>
-->