<?php 
    $json = file_get_contents('relatorioEncode.php');

    $data= json_decode($json);

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
    <form action="">
        <label for="">Data Inicial</label>
        <input type="text" name="datainicial">
        <label for="">Data Final</label>
        <input type="text" name="datafinal">
        <input type="submit">
    </form>

    <table>
        <tr>
            <td><?php $data->data?></td>
        </tr>
    </table>
</body>
</html>