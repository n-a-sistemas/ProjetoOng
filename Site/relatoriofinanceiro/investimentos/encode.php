<?php 

include('../conn.php');

$datainicial = $_GET['datainicial'];
$datafinal = $_GET['datafinal'];

$sql = "SELECT * FROM despesas WHERE data BETWEEN '$datainicial 00:00:00' AND '$datafinal 23:59:59'";

$resultado = $conn->query($sql);
$despesas=array();

if($resultado->num_rows > 0){
    while($linha=$resultado->fetch_assoc()){
        array_push($despesas, $linha);
    }
}

echo json_encode($despesas);