<?php
$datainicial = "";
$datafinal = "";
if(isset($_GET['datainicial']) && isset($_GET['datafinal'])){
    $datainicial = $_GET['datainicial'];
    $datafinal = $_GET['datafinal'];    
}
if($datainicial != "" && $datafinal != ""){
    $json = file_get_contents('http://localhost/ProjetoOng/Site/relatoriofinanceiro/encode.php?datainicial=' . $datainicial . '&datafinal=' . $datafinal);
    $dados = json_decode($json, true);
    echo $dados;
}

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
    
    <form action="encode.php" method="GET">
        <label for="">Data Inicial: </label>
        <input type="date" name="datainicial" id="datainicial">
        <label for="datafinal">Data Final: </label>
        <input type="date" name="datafinal" id="datafinal">
        <input type="submit" value="Procurar">
    </form>
    <table>
        <?php
            foreach($dados as $d){
                echo "<tr>";
                echo "<td>" . $d->nome . "</td>";
                echo "<td>" . $d->categoria . "</td>";
                echo "<td>" . $d->valor . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
    

</body>
</html>