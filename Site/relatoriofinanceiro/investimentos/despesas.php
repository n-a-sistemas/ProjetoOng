<table class="table table-bordered table-hover rounded shadow">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if(isset($_GET['datainicial']) || isset($_GET['datafinal'])){
                foreach ($dados as $row) {
                    echo "<tr>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['valor']."</td>";
                    echo "</tr>"; 
                }
                    echo "</tr><td>Valor total: " . $preco ."</td></tr>";
                }
        ?>
    </tbody>
</table>