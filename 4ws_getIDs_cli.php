<?php
require_once "lib/nusoap.php";

$client = new nusoap_client(
    'http://appserver-01.alunos.di.fc.ul.pt/~asw18/projeto/Projeto/1ws_nome_serv.php'
);

$result = $client->call('CompraProduto', array('IDVendedor' => $_POST['IDVendedor'], 'IDComprador' => $_POST['IDComprador'], 'IDProduto' => $_POST['IDProduto']));

echo "Resposta: <br> $result";
?>