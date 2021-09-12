<table border = '2'>

<tr>
  <th>ID</th>
  <th>Descrição</th>
  <th>Prazo</th>
  <th>Status</th>
</tr>

<?php include("conn.php");

$sql    = "SELECT * FROM tarefas";
$resulta = $conn->query($sql);

 if($resulta->num_rows > 0){

    while($row = $resulta -> fetch_assoc()){           

        echo '<tr>';
        echo '<td>'. $row['id'] .'</td>';
        echo '<td>'. $row['descricao'] .'</td>';
        echo '<td>'. $row['prazo'] .'</td>';
        echo '<td>'. $row['status'] .'</td>';
        echo '</tr>';
    }
}

?>
</table>