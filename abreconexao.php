<?php

ini_set('display_error',1); 
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$servername = "appserver-01.alunos.di.fc.ul.pt";
$username = "asw18";
$password = "Grupo18bmi";
$dbname = "asw18";
//Cria a ligação à BD
$conn = new mysqli($servername, $username, $password, $dbname);
//Verifica a ligação à BD
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

// // Cria a ligação à BD
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Verifica a ligação à BD
// if (mysqli_connect_error()) {
//   die("Connection failed: " . mysqli_connect_error());
// }
//echo "Conexão efectuada<br>";
?>