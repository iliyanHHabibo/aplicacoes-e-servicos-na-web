

<?php

session_start();

include "abreconexao.php";

if ($_POST['vestuariomulher'] !== '') {
    $categoria = $_POST['vestuariomulher'];
} elseif ($_POST['calcadomulher'] !== '') {
    $categoria = $_POST['calcadomulher'];
} elseif ($_POST['acessoriosmulher'] !== '') {
    $categoria = $_POST['acessoriosmulher'];
} elseif ($_POST['malasmulher'] !== '') {
    $categoria = $_POST['malasmulher'];
} 
elseif ($_POST['vestuariohomem'] !== '') {
    $categoria = $_POST['vestuariohomem'];
} elseif ($_POST['calcadohomem'] !== '') {
    $categoria = $_POST['calcadohomem'];
} elseif ($_POST['acessorioshomem'] !== '') {
    $categoria = $_POST['acessorioshomem'];
} elseif ($_POST['malashomem'] !== '') {
    $categoria = $_POST['malashomem'];
} 
elseif ($_POST['vestuariorapariga'] !== '') {
    $categoria = $_POST['vestuariorapariga'];
} elseif ($_POST['vestuariorapaz'] !== '') {
    $categoria = $_POST['vestuariorapaz'];
} elseif ($_POST['brinquedos'] !== '') {
    $categoria = $_POST['brinquedos'];
} elseif ($_POST['veiculosbrincar'] !== '') {
    $categoria = $_POST['veiculosbrincar'];
}
elseif ($_POST['vestuariouni'] !== '') {
    $categoria = $_POST['vestuariouni'];
} elseif ($_POST['calcadouni'] !== '') {
    $categoria = $_POST['calcadouni'];
} elseif ($_POST['acessoriosuni'] !== '') {
    $categoria = $_POST['acessoriosuni'];
} elseif ($_POST['malasuni'] !== '') {
    $categoria = $_POST['malasuni'];
} 
else {
    $categoria = null;
}

if ($_POST['bebevestuario'] !== '') {
    $tamanho = $_POST['bebevestuario'];
} elseif ($_POST['bebecalcado'] !== '') {
    $tamanho = $_POST['bebecalcado'];
} elseif ($_POST['criancavestuario'] !== '') {
    $tamanho = $_POST['criancavestuario'];
} elseif ($_POST['criancacalcado'] !== '') {
    $tamanho = $_POST['criancacalcado'];
} elseif ($_POST['adultovestuario'] !== '') {
    $tamanho = $_POST['adultovestuario'];
} elseif ($_POST['adultocalcado'] !== '') {
    $tamanho = $_POST['adultocalcado'];
}elseif ($_POST['diversos'] !== '') {
    $tamanho = $_POST['diversos'];
}  
else {
    $tamanho = null;
}




if ($_POST['vestuariomulher2'] !== '') {
    $categoria2 = $_POST['vestuariomulher2'];
} elseif ($_POST['calcadomulher2'] !== '') {
    $categoria2 = $_POST['calcadomulher2'];
} elseif ($_POST['acessoriosmulher2'] !== '') {
    $categoria2 = $_POST['acessoriosmulher2'];
} elseif ($_POST['malasmulher2'] !== '') {
    $categoria2 = $_POST['malasmulher2'];
} 
elseif ($_POST['vestuariohomem2'] !== '') {
    $categoria2 = $_POST['vestuariohomem2'];
} elseif ($_POST['calcadohomem2'] !== '') {
    $categoria2 = $_POST['calcadohomem2'];
} elseif ($_POST['acessorioshomem2'] !== '') {
    $categoria2 = $_POST['acessorioshomem2'];
} elseif ($_POST['malashomem2'] !== '') {
    $categoria2 = $_POST['malashomem2'];
} 
elseif ($_POST['vestuariorapariga2'] !== '') {
    $categoria2 = $_POST['vestuariorapariga2'];
} elseif ($_POST['vestuariorapaz2'] !== '') {
    $categoria2 = $_POST['vestuariorapaz2'];
} elseif ($_POST['brinquedos2'] !== '') {
    $categoria2 = $_POST['brinquedos2'];
} elseif ($_POST['veiculosbrincar2'] !== '') {
    $categoria2 = $_POST['veiculosbrincar2'];
}
elseif ($_POST['vestuariouni2'] !== '') {
    $categoria = $_POST['vestuariouni2'];
} elseif ($_POST['calcadouni2'] !== '') {
    $categoria = $_POST['calcadouni2'];
} elseif ($_POST['acessoriosuni2'] !== '') {
    $categoria = $_POST['acessoriosuni2'];
} elseif ($_POST['malasuni2'] !== '') {
    $categoria = $_POST['malasuni2'];
} 
else {
    $categoria2 = null;
}

if ($_POST['bebevestuario2'] !== '') {
    $tamanho2 = $_POST['bebevestuario2'];
} elseif ($_POST['bebecalcado2'] !== '') {
    $tamanho2 = $_POST['bebecalcado2'];
} elseif ($_POST['criancavestuario2'] !== '') {
    $tamanho2 = $_POST['criancavestuario2'];
} elseif ($_POST['criancacalcado2'] !== '') {
    $tamanho2 = $_POST['criancacalcado2'];
} elseif ($_POST['adultovestuario2'] !== '') {
    $tamanho2 = $_POST['adultovestuario2'];
} elseif ($_POST['adultocalcado2'] !== '') {
    $tamanho2 = $_POST['adultocalcado2'];
} elseif ($_POST['diversos2'] !== '') {
    $tamanho2 = $_POST['diversos2'];
} 
else {
    $tamanho2 = null;
}

$marca = $_POST['marcaid'];
$utilizador = $_SESSION['utilizador'];

$marca2 = $_POST['marcaid2'];

$sql = "INSERT INTO preferencias (utilizador, categoria, tamanho, marca) VALUES ('$utilizador', '$categoria', '$tamanho', '$marca')";
$sql2 = "INSERT INTO preferencias (utilizador, categoria, tamanho, marca) VALUES ('$utilizador', '$categoria2', '$tamanho2', '$marca2')";

if ($conn->query($sql) === TRUE) {
    echo "Preferência adicionada com sucesso!";
  } else {
    echo "Erro ao adicionar preferência: " . $conn->error;
  }

if ($conn->query($sql2) === TRUE) {
    echo "Preferência adicionada com sucesso!";
  } else {
    echo "Erro ao adicionar preferência: " . $conn->error;
  }
  
header('Location: inicial.php');

$conn->close();
?>

