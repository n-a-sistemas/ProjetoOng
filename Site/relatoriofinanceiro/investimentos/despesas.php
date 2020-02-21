<?php
include('../conn.php');

$datainicial = "";
$datafinal = "";
if(isset($_GET['datainicial']) && isset($_GET['datafinal'])){
    $datainicial = $_GET['datainicial'];
    $datafinal = $_GET['datafinal'];    
}
if($datainicial != "" && $datafinal != ""){
    $json = file_get_contents('http://localhost/ProjetoOng/Site/relatoriofinanceiro/investimentos/encode.php?datainicial=' . $datainicial . '&datafinal=' . $datafinal);
    $dados = json_decode($json, true);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despesas</title>
</head>
<body>
    <form action="" method="get">
        <div>
            <label for="datainicial">Data inicial: </label>
            <input type="date" name="datainicial" id="datainicial">
        </div>
        <div>
            <label for="datafinal">Data inicial: </label>
            <input type="date" name="datafinal" id="datafinal">
        </div>
        <div>
            <input type="submit" value="Procurar">
        </div>
    </form>
    
    <table>
    <?php
        if(isset($_GET['datainicial']) || isset($_GET['datafinal'])){
            foreach ($dados as $d) {
                echo "<tr>";
                echo "<td>" . $d['nome'] . "</td>";
                echo "<td>" . $d['valor'] . "</td>";
                echo "</tr>"; 
            }
        }
    ?>
    </table>

</body>
</html>