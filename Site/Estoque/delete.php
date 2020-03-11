<?php
include('../database/conn.php');



$sql="DELETE FROM produtos WHERE id='$id'";

$conn->query($sql);

$conn->close();

header('Location: ../Estoque');
?>