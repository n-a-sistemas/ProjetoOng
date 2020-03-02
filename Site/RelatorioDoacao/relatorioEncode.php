<?php

include("conn.php");

$datainicial = $_GET['datainicial'];
$datafinal = $_GET['datafinal'];
$sql = "SELECT a.id_doacao, a.data, b.id_produto, b.categoria, c.id_doacao, c.id_produto, c.quantidade 
FROM doacoes a, produtos b, item_doacoes c
WHERE a.id_doacao = c.id_doacao AND b.id_produto = c.id_produto AND a.data BETWEEN '$datainicial' AND '$datafinal'";

$resultado = $conn->query($sql);
echo $conn->error;
$doacoes=array();
if($resultado->num_rows > 0){
    while($linha=$resultado->fetch_assoc()){
        array_push($doacoes, $linha);
    }
    echo json_encode($doacoes);
}
?>