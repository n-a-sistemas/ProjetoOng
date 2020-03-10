<?php

include '../database/conn.php';

$nome = $_POST['nome'];
$valor = $_POST['valor'];
$valor = str_replace('.','',$valor);
$valor = str_replace(',','.', $valor);
date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i:s');

$sql = "INSERT INTO despesas (nome, valor, data) VALUES ('$nome', '$valor', '$data')";

$conn->query($sql);

header('Location: ../relatoriofinanceiro/');