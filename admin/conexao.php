<?php
// Configurações do banco de dados
$hostname = "localhost";  // substitua pelo endereço do seu servidor de banco de dados
$username = "root"; // substitua pelo nome de usuário do banco de dados
$password = "";   // substitua pela senha do banco de dados
$database = "mapos";   // substitua pelo nome do banco de dados que você está usando

// Conexão com o banco de dados
$conn = mysqli_connect($hostname, $username, $password, $database);

// Verifica se houve algum erro na conexão
if (mysqli_connect_errno()) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
?>
