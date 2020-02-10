<?php 
    $datainicial = $_GET['datainicial'];
    $datafinal = $_GET['datafinal'];
    $url = 'http://localhost/xampp/ProjetoOng/Site/RelatorioDoacao/relatorioEncode.php?datainicial='
    .$datainicial.'&datafinal='.$datafinal;
    $json = file_get_contents($url);
    $data= json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <label for="">Data Inicial</label>
        <input type="text" name="datainicial">
        <label for="">Data Final</label>
        <input type="text" name="datafinal">
        <input type="submit">
    </form>

    <table>
    <?php
        foreach ($data as $row) {
    ?>
        <tr>
            <td><?php echo $row['categoria']?></td>
            <td><?php echo $row['data']?></td>
            <td></td>
        </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>