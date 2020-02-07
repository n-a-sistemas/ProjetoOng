<?php 
    $datainicial = $_GET['datainicial'];
    $datafinal = $_GET['datafinal'];
    $json = file_get_contents('http://localhost/xampp/ProjetoOng/Site/RelatorioDoacao/relatorioEncode.php?datainicial='
            .$datainicial.'&datafinal='.$datafinal);

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
        <tr>
            <td><?php echo $data[0]['categoria']?></td>
            <td><?php echo $data[0]['data']?></td>
            <td></td>
        </tr>
    </table>
</body>
</html>