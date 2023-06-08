<meta charset="utf-8">

<?php

session_start();

include "abreconexao.php";

$categoria = $_POST['categoria'];
$tamanho = $_POST['tamanho'];
$marca = $_POST['marca'];
$utilizador = $_SESSION['utilizador'];

$query = "SELECT id FROM categoria WHERE nome = '$categoria'";
$resultado = $conn->query($query);
$id_categoria = $resultado->fetch_assoc()['id'];

$query2 = "SELECT id FROM tamanho WHERE valor = '$tamanho'";
$resultado2 = $conn->query($query2);
$id_tamanho = $resultado2->fetch_assoc()['id'];

$query3 = "SELECT id FROM marca WHERE nome = '$marca'";
$resultado3 = $conn->query($query3);
$id_marca = $resultado3->fetch_assoc()['id'];

$sql = "DELETE FROM preferencias WHERE utilizador = '$utilizador' AND categoria = '$id_categoria' AND tamanho = '$id_tamanho' AND marca = '$id_marca'";
  
  if ($conn->query($sql) === TRUE) {
    echo "Preferência excluída com sucesso!";
  } else {
    echo "Erro ao excluir preferência: " . $conn->error;
  }

header('Location: suaspreferencias.php');

$conn->close();
?>