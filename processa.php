<?php

	include "abreconexao.php";

	$stmt = $conn->prepare( "INSERT INTO utilizador (nome, data_nascimento, genero, morada, localidade, codigo_postal, telefone, email, pwd) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)" );
	$stmt->bind_param("ssssssiss",$nome,$data_nascimento,$genero,$morada,$localidade,$codigo_postal,$telefone,$email,$pwd);

	$nome = htmlspecialchars($_POST['nome']);
	$data_nascimento = htmlspecialchars($_POST['data_nascimento']);
	$genero = htmlspecialchars($_POST['genero']);
	$morada = htmlspecialchars($_POST['morada']);
	$localidade = htmlspecialchars($_POST['localidade']);
	$codigo_postal = htmlspecialchars($_POST['codigo_postal']);
	$telefone = htmlspecialchars($_POST['telefone']);
	$email = htmlspecialchars($_POST['email']);
	$pwd = password_hash(htmlspecialchars($_POST['pwd']), PASSWORD_DEFAULT);

	//query para verificar se o email já existe na base de dados
	$email_query = "SELECT * FROM utilizador WHERE email = '$email'";

	//executar a query
	$result = mysqli_query($conn, $email_query);

	if (mysqli_num_rows($result) > 0) {
		session_start();
		$_SESSION['erro'] = "Email já existente. Escolha outro email.";
		header('Location: register.php');
		
	} else {
		header('Location: preferencias.php');
		
	}

	$stmt->execute();
	echo "Sucesso";	

	$_SESSION['utilizador'] = $email;

	if(!preg_match("/^[a-zA-Z]+$/", $nome)) {
		echo "Nome inválido. Insira apenas caracteres alfabéticos.";
		exit();
	}

    if(!preg_match("/^[a-zA-Z]+$/", $localidade)) {
		echo "Localidade inválida. Insira apenas caracteres alfabéticos.";
		exit();
	}

    if (!preg_match('/^[0-9]{4}-[0-9]{3}$/', $codigo_postal)) {
		echo "Código Postal inválido. O formato correto é 0000-000.";
	}

    if(!preg_match ("#[0-9] {9} #", $telefone)) {
		echo "Telefone inválido. Insira apenas valores numéricos naturais.";
		exit();
	}
	
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Email inválido. Insira um email válido no formato username@domain.";
		exit();
	}
	
	if(strlen($pwd) < 8) {
		echo "Senha inválida. Insira uma senha com no mínimo 8 caracteres.";
		exit();
	}

	$stmt->close();
	$conn->close();
?>

