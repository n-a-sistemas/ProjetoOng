<?php

include('conn.php');

$quantidade = $_POST['quantidade'];
$codproduto = $_GET['codproduto'];

/*$sql = "UPDATE produtos SET quantidade='$quantidade' WHERE codigo='$codproduto'";

$conn->query($sql);

$conn->close();

header('Location: ../Estoque/index.php');*/