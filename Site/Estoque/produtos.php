<?php
    require_once('../database/conn.php');
    
    $texto = "";
    if(isset($_POST['pesquisar'])){
        $texto = $_POST['pesquisar'];
    }
    $coluna = "";
    if(isset($_POST['colunas'])){
        $coluna = $_POST['colunas'];
    }

    if($texto == "" && $coluna == ""){
        $sql = "SELECT * FROM produtos";
    }
    else if($texto != "" || $coluna != ""){
        $sql = "SELECT * FROM produtos WHERE $coluna LIKE '%$texto%'";
    }
    $resultado = $conn->query($sql);
    if($resultado->num_rows > 0){
        while($linha = $resultado->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$linha['nome']."</td>";
            echo "<td>".$linha['categoria']."</td>";
            echo "<td>".$linha['quantidade']."</td>";
            echo "<td>".$linha['valor_unitario']."</td>";
            echo "<td><a href='delete.php?id=".$linha['id_produto']."'>Remover</a></td>";
            echo "<td><a href='../EditarProdutos/?id=".$linha['id_produto']."'>Editar produtos</a></td>";
            echo "</tr>";
        }
    }
?>