<?php

include("conn.php");

$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO item-produtos(quantidade) VALUES ('$quantidade')";