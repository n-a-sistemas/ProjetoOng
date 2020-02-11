<?php
include('conn.php');

$datainicial = "";
$datafinal = "";
if(isset($_GET['datainicial']) && isset($_GET['datafinal'])){
    $datainicial = $_GET['datainicial'];
    $datafinal = $_GET['datafinal'];    
}
if($datainicial != "" && $datafinal != ""){
    $json = file_get_contents('http://localhost/ProjetoOng/Site/relatoriofinanceiro/encode.php?datainicial=' . $datainicial . '&datafinal=' . $datafinal);
    $dados = json_decode($json, true);
}

$total = "SELECT * FROM vendas WHERE data BETWEEN '$datainicial 00:00:00' AND '$datafinal 23:59:59'";
$preco = 0;
$result = $conn->query($total);

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
    <?php
    if(isset($_GET['datainicial']) && isset($_GET['datafinal'])){
        foreach ($dados as $d) {
    ?>
    <tr>
        <td><?php echo $d['nome']?></td>
        <td><?php echo $d['categoria']?></td>
        <td><?php echo $d['valor']?></td>
    <?php
        }
    ?>
    <?php
    if($result->num_rows > 0){
        while($linha=$result->fetch_assoc()){
    ?>
      <td><?php echo $preco += $linha['valor'];?></td>
      <?php
      }
    }
} 
      ?>
    </tr>
    </table>

</body>
</html>
