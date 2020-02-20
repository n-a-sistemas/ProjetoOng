<?php

include '../Caixa/conn.php';

$nome = $_POST['nome'];
$valor = $_POST['valor'];
number_format($valor,2, ',', '.');
date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d H:i:s');

$sql = "INSERT INTO despesas (nome, valor, data) VALUES ('$nome', '$valor', '$data')";

$conn->query($sql);

header('Location: ../relatoriofinanceiro/form.php');