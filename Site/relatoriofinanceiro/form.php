<?php
$datainicial = $_GET['datainicial'];
$datafinal = $_GET['datafinal'];

$json = file_get_contents('http://localhost/ProjetoOng/Site/relatoriofinanceiro/encode.php?datainicial=' . $datainicial . '&datafinal=' . $datafinal);
$dados = json_decode($json, true);
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório Financeiro</title>
</head>
<body>
    
    <form action="" method="GET">
        <label for="">Data Inicial: </label>
        <input type="date" name="datainicial" id="datainicial">
        <label for="datafinal">Data Final: </label>
        <input type="date" name="datafinal" id="datafinal">
        <input type="submit" value="Procurar">
    </form>
    <table>
        <tr>
            <td><?php echo $dados[0]['nome'];?></td>
            <td><?php echo $dados[0]['categoria']?></td>
            <td><?php echo $dados[0]['valor']?></td>
        </tr>
    </table>
    

</body>
</html>