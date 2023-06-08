<meta charset="utf-8">

<?php
    include "abreconexao.php";

    // Verifica se o formulário foi enviado
    if(isset($_POST['email'])) {
        $email = htmlspecialchars($_POST['email']);

        // Recupera os IDs das categorias, tamanhos e marcas
        $categoria_id = $_POST['categoria'];
        $tamanho_id = $_POST['tamanho'];
        $marca_id = $_POST['marca'];

        // Atualiza a tabela "preferencias" com os IDs das categorias, tamanhos e marcas
        $sql = "UPDATE preferencias SET categoria='$categoria_id', tamanho='$tamanho_id', marca='$marca_id' WHERE utilizador='$email'";
        if ($conn->query($sql) === TRUE) {
            echo "Preferências atualizadas com sucesso!";
        } else {
            echo "Erro ao atualizar as preferências: " . $conn->error;
        }

        $conn->close();
    }
?>
