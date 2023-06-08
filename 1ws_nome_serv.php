<?php
require_once "lib/nusoap.php";


$server = new nusoap_server();

$server->configureWSDL('cumpwsdl', 'urn:cumpwsdl');

$server->register(
    'CompraProduto',
    array('IDVendedor' => 'xsd:int', 'IDComprador' => 'xsd:int', 'IDProduto' => 'xsd:int'),
    array('return' => 'xsd:string'),
    'urn:cumpwsdl',
    'urn:cumpwsdl#CompraProduto',
    'rpc',
    'encoded',
    'Realiza uma compra de produto'
);



// function CompraProduto($IDVendedor, $IDComprador, $IDProduto)
// {
//     $dbhost = "appserver-01.alunos.di.fc.ul.pt";
//     $dbuser = "asw18";
//     $dbpass = "Grupo18bmi";
//     $dbname = "asw18";
//     // Cria a ligação à BD
//     $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//     // Verifica a ligação à BD
//     if (mysqli_connect_error()) {
//         return "Erro de conexão: " . mysqli_connect_error();
//     }

//     // Verifica se o produto está disponível
//     $sql = "SELECT * FROM artigo WHERE id = '$IDProduto' AND vendedor = '$IDVendedor'";
//     $result = mysqli_query($conn, $sql);
//     $produto = mysqli_fetch_assoc($result);

//     if ($produto) {
//         // Insere a transação na tabela de compras
//         $sql = "INSERT INTO compra (utilizador_comprador, utilizador_vendedor, artigo, data_compra) 
//                 VALUES ('$IDComprador', '$IDVendedor', '$IDProduto', NOW())";
//         if (mysqli_query($conn, $sql)) {
//             // Remove o produto da tabela de artigos
//             $sql = "DELETE FROM artigo WHERE id = '$IDProduto' AND vendedor = '$IDVendedor'";
//             if (mysqli_query($conn, $sql)) {
//                 mysqli_close($conn);
//                 return "Aceite";
//             } else {
//                 return "Erro ao remover o produto: " . mysqli_error($conn);
//             }
//         } else {
//             return "Erro ao realizar a compra: " . mysqli_error($conn);
//         }
//     } else {
//         mysqli_close($conn);
//         return "Produto não disponível";
//     }
// }


function CompraProduto($IDVendedor, $IDComprador, $IDProduto)
{
    $dbhost = "appserver-01.alunos.di.fc.ul.pt";
    $dbuser = "asw18";
    $dbpass = "Grupo18bmi";
    $dbname = "asw18";
    // Cria a ligação à BD
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    // Verifica a ligação à BD
    if (mysqli_connect_error()) {
        return "Erro de conexão: " . mysqli_connect_error();
    }

    // Verifica se o produto está disponível
    $stmt = mysqli_prepare($conn, "SELECT * FROM artigo WHERE id = ? AND vendedor = ?");
    mysqli_stmt_bind_param($stmt, 'is', $IDProduto, $IDVendedor);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $produto = mysqli_fetch_assoc($result);

    if ($produto) {
        // Insere a transação na tabela de compras
        $stmt = mysqli_prepare($conn, "INSERT INTO compra (utilizador_comprador, utilizador_vendedor, artigo, data_compra) 
                VALUES (?, ?, ?, NOW())");
        mysqli_stmt_bind_param($stmt, 'ssi', $IDComprador, $IDVendedor, $IDProduto);
        if (mysqli_stmt_execute($stmt)) {
            // Remove o produto da tabela de artigos
            $stmt = mysqli_prepare($conn, "DELETE FROM artigo WHERE id = ? AND vendedor = ?");
            mysqli_stmt_bind_param($stmt, 'is', $IDProduto, $IDVendedor);
            if (mysqli_stmt_execute($stmt)) {
                mysqli_close($conn);
                return "Aceite";
            } else {
                return "Erro ao remover o produto: " . mysqli_error($conn);
            }
        } else {
            return "Erro ao realizar a compra: " . mysqli_error($conn);
        }
    } else {
        mysqli_close($conn);
        return "Não aceite";
    }
}



// function CompraProduto($IDVendedor, $IDComprador, $IDProduto)
// {
//     $dbhost = "appserver-01.alunos.di.fc.ul.pt";
//     $dbuser = "asw18";
//     $dbpass = "Grupo18bmi";
//     $dbname = "asw18";
//     // Cria a ligação à BD
//     $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//     // Verifica a ligação à BD
//     if (mysqli_connect_error()) {
//         return "Erro de conexão: " . mysqli_connect_error();
//     }

//     // Verifica se o produto está disponível
//     $stmt = mysqli_prepare($conn, "SELECT * FROM artigo WHERE id = ? AND vendedor = ?");
//     mysqli_stmt_bind_param($stmt, 'ii', $IDProduto, $IDVendedor);
//     mysqli_stmt_execute($stmt);
//     $result = mysqli_stmt_get_result($stmt);
//     $produto = mysqli_fetch_assoc($result);

//     if ($produto) {
//         // Insere a transação na tabela de compras
//         $stmt = mysqli_prepare($conn, "INSERT INTO compra (utilizador_comprador, utilizador_vendedor, artigo, data_compra) 
//                 VALUES (?, ?, ?, NOW())");
//         mysqli_stmt_bind_param($stmt, 'iii', $IDComprador, $IDVendedor, $IDProduto);
//         if (mysqli_stmt_execute($stmt)) {
//             // Remove o produto da tabela de artigos
//             $stmt = mysqli_prepare($conn, "DELETE FROM artigo WHERE id = ? AND vendedor = ?");
//             mysqli_stmt_bind_param($stmt, 'ii', $IDProduto, $IDVendedor);
//             if (mysqli_stmt_execute($stmt)) {
//                 mysqli_close($conn);
//                 return "Aceite";
//             } else {
//                 return "Erro ao remover o produto: " . mysqli_error($conn);
//             }
//         } else {
//             return "Erro ao realizar a compra: " . mysqli_error($conn);
//         }
//     } else {
//         mysqli_close($conn);
//         return "Não aceite";
//     }
// }


@$server->service(file_get_contents("php://input"));

?>