<?php
    require_once('conn.php');

    if(isset($_POST['texto'])){
        $texto = $_POST['texto'];
    }
    else{
        $texto = "";
    }
    if($texto == ""){
        $sql = "SELECT * FROM categorias";
        $resultado = $conn->query($sql);
        if($resultado->num_rows > 0){
            while($linha = $resultado->fetch_assoc()){
                echo "<li>".$linha['categoria']."</li>";
            }
        }
    }

    if($texto != ""){
        $sql = "SELECT * FROM `categorias` WHERE categoria LIKE '$texto%'";
        $resultado = $conn->query($sql);
        if($resultado->num_rows > 0){
            while($linha = $resultado->fetch_assoc()){
                echo "<li>".$linha['categoria']."</li>";
            }
        }
    }

?>