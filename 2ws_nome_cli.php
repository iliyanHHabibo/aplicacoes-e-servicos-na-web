<?php

require_once "lib/nusoap.php";

$client = new nusoap_client(
    ' http://appserver-01.alunos.di.fc.ul.pt/~asw18/projeto/Projeto/1ws_nome_serv.php'
);

$result = $client->call('CompraProduto', array('IDVendedor' => 1, 'IDComprador' => 2, 'IDProduto' => 3));


echo "Resposta: <br> $result";
?>


<!--este acho que serve para se quiseres fazer um pedido de compra de um produto inserindo logo aqui os ids-->