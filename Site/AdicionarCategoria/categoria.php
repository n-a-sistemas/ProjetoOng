<?php
    require_once('../database/conn.php');
    
    $texto = "";
    if(isset($_POST['texto'])){
        $texto = $_POST['texto'];
    }

    if($texto == ""){
        $sql = "SELECT * FROM categorias";
        $resultado = $conn->query($sql);
        if($resultado->num_rows > 0){
            while($linha = $resultado->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$linha['id']."</td>";
                echo "<td>".$linha['categoria']."</td>";
                echo "<td> <a href='deletecat.php?id=".$linha['id']."'>Remover</a> </td>";
                echo "</tr>";
            }
        }
    }
    else if($texto != ""){
        $sql = "SELECT * FROM `categorias` WHERE categoria LIKE '$texto%'";
        $resultado = $conn->query($sql);
        if($resultado->num_rows > 0){
            while($linha = $resultado->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$linha['id']."</td>";
                echo "<td>".$linha['categoria']."</td>";
                echo "<td> <a href='deletecat.php?id='".$linha['id']."'>Remover</a> </td>";
                echo "</tr>";
            }
        }
    }

?>