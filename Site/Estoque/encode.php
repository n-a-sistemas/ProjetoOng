<?php
    include("conn.php");

    $colunas = $_GET['colunas'];
    $pesquisar = $_GET['pesquisar'];
    $sql = "SELECT * FROM produtos WHERE $coluna LIKE '%".$pesquisar."%'";
    $resultado = $conn->query($sql);

    $produtos=array();
    if($resultado->num_rows > 0){
        while($linha=$resultado->fetch_assoc()){
            array_push($produtos, $linha);            
        }
        echo json_encode($produtos);
    }
?>