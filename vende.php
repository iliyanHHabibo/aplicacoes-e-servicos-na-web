<meta charset="utf-8">

<?php

include "abreconexao.php";

session_start();

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
}  
else {
    $tamanho = 55;
}

$titulo = $_POST['titulo'];
$marca = $_POST['marcaid'];
$estado = $_POST['estado'];
$preco = $_POST['preco'];
$data_registo = date('Y-m-d H:i:s');
$descricao = $_POST['descricao'];
$vendedor = $_SESSION['utilizador'];


$sql = "INSERT INTO artigo (titulo, categoria, tamanho, marca, estado, preco, data_registo, descricao, vendedor) VALUES ('$titulo', '$categoria', '$tamanho', '$marca', '$estado', '$preco', '$data_registo', '$descricao', '$vendedor')";


if ($conn->query($sql) === TRUE) {
  $artigo_id = $conn->insert_id;

  $vende_sql = "INSERT INTO vende (vendedor, artigo) VALUES ('$vendedor', '$artigo_id')";
  if ($conn->query($vende_sql) === TRUE) {
    echo "Artigo adicionado com sucesso!";
  } else {
    echo "Erro ao adicionar artigo na tabela 'vende': " . $conn->error;
  }
} else {
  echo "Erro ao adicionar artigo na tabela 'artigo': " . $conn->error;
}

// Verifica se o formulário foi enviado
if (isset($_FILES['imagem'])) {
  $file = $_FILES['imagem'];

  // Verifica se a imagem é válida
  $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
  $file_type = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
  if (!in_array($file_type, $allowed_types)) {
    echo "Somente imagens JPG, JPEG, PNG e GIF são permitidas";
    exit();
  }

  // Lê o conteúdo do arquivo
  $content = file_get_contents($file['tmp_name']);

  // Insere a imagem no banco de dados
  $sql = "INSERT INTO imagens (id, nome, conteudo) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("iss", $artigo_id, $file['name'], $content);
  $stmt->execute();
  echo "Imagem enviada com sucesso!";
}

header('Location: inicial.php');

$conn->close();
?>
