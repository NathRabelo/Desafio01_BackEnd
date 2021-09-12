<?php
$servername = "localhost"; /* nome da conexão */
$username = "root"; /* nome do usuario da conexãp */
$password = ""; /*senha do banco de dados */
$dbname = "tarefas"; /* nome do banco  */

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);
// Checando a conexão
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
?>