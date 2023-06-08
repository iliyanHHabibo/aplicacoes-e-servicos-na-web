<?php
session_start();
include "abreconexao.php";

$utilizador = $_SESSION['utilizador'];
$artigo = $_POST['artigo_id'];

$sql_verifica = "SELECT * FROM favoritos WHERE utilizador='$utilizador' AND artigo='$artigo'";
$resultado_verifica = mysqli_query($conn, $sql_verifica);

$isFavorite = (mysqli_num_rows($resultado_verifica) > 0);

// Consulta para selecionar todos os IDs de artigos que foram comprados
$sql_comprados = "SELECT artigo FROM compra";
$result_comprados = mysqli_query($conn, $sql_comprados);

if (mysqli_num_rows($result_comprados) > 0) {
    // Para cada artigo comprado, remova-o da tabela de favoritos
    while ($row = mysqli_fetch_assoc($result_comprados)) {
        $artigo_comprado = $row['artigo'];

        // Consulta para remover o artigo comprado de todos os favoritos
        $remove_fav = "DELETE FROM favoritos WHERE artigo = $artigo_comprado";
        if (!mysqli_query($conn, $remove_fav)) {
            echo "Erro ao remover o artigo dos favoritos: " . mysqli_error($conn);
        }
    }
} else {
    echo "Nenhum artigo comprado encontrado.";
}

mysqli_close($conn);
?>




<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./inicial.php">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">

                            <li class="heart-icon">
                                <a href="shopping-cart.php">
                                    <i class="icon_heart_alt"></i>

                                    <?php
                                    session_start();
                                    include "abreconexao.php";
                                    if (isset($_SESSION['utilizador'])) {
                                        $sql = "SELECT COUNT(artigo) AS num_artigos FROM favoritos WHERE utilizador = '" . $_SESSION['utilizador'] . "'";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            echo "<span>" . $row['num_artigos'] . "</span>";
                                        } else {
                                            echo "Usuário não encontrado";
                                        }
                                    } else {
                                        exit();
                                    }
                                    mysqli_close($conn);
                                    ?>

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-item">
            <div class="container">

                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="./inicial.php">Home</a></li>
                        <li><a href="./faq.php">Apoio ao Cliente</a></li>
                        <li><a href="./contact.php">Contactos</a></li>
                    </ul>
                </nav>
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Perfil</span>
                        <ul class="depart-hover">
                            <div class="profile-picture2" style="text-align: center;">
                                <img src="https://img.freepik.com/icones-gratis/arremesso-de-peso_318-867171.jpg?t=st=1679151933~exp=1679152533~hmac=4cd9bcca9cd13e04201ce04cd0fbea7c7f77a1fc040d1ac26376b1e18449ba78"
                                    alt="Profile Picture">
                            </div>


                            <?php
                            session_start();

                            include "abreconexao.php";

                            if (isset($_SESSION['utilizador'])) {
                                $sql = "SELECT nome FROM utilizador WHERE email = '" . $_SESSION['utilizador'] . "'";
                                mysqli_set_charset($conn, "utf8");
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {

                                    $row = mysqli_fetch_assoc($result);
                                    echo "<p>Nome: " . $row['nome'] . "</p>";

                                } else {
                                    echo "Usuário não encontrado";
                                }

                            } else {

                                exit();
                            }
                            mysqli_close($conn);
                            ?>



                            <li><a href="perfil.php">Ver perfil</a></li>
                            <li><a href="suaspreferencias.php">Preferências</a></li>
                            <li>
                                <?php
                                session_start();

                                if (isset($_SESSION['utilizador'])) {
                                    echo '<form method="POST" action="sair.php">
                                            <input type="submit" value="Sair">
                                        </form>';
                                } else {
                                    header('Location: login.php');
                                    exit();
                                }
                                ?>
                            </li>

                        </ul>
                    </div>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Comprar</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">


                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">


                    <div style="width:390px;position: absolute;left: 0;">
                        <div class="select-option">
                            <div class="col-lg-8 col-md-7">
                                <div class="inner-header">
                                    <div class="advanced-search">
                                        <div class="input-group">
                                            <input type="text" id="search" onkeyup="searchProducts()"
                                                placeholder="Pesquisar produto">
                                            <button onclick="searchProducts()" type="button"><i
                                                    class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br><br>

                    <div class="w3-padding-64 w3-large w3-text-grey" style="font-size: 8px;">
                        <div class="filter-widget">
                            <h4 class="fw-title">Categoria</h4>
                        </div>

                        <a href="#" class="w3-bar-item w3-button"
                            data-filtro="filtro1 filtro2 filtro3 filtro4 filtro5 filtro6 filtro7 filtro8 filtro9 filtro10 filtro11 filtro12 filtro13 filtro14 filtro15 filtro16 filtro17 filtro18 filtro19 filtro20 filtro21 filtro22 filtro23 filtro24 filtro25 filtro26 filtro27 filtro28 filtro29 filtro30 filtro31 filtro32 filtro33 filtro34 filtro35 filtro36 filtro37 filtro38 filtro39 filtro40 filtro41 filtro42 filtro43 filtro44 filtro45 filtro46 filtro47 filtro48 filtro49 filtro50 filtro51 filtro52 filtro53 filtro54 filtro55 filtro56 filtro57 filtro58 filtro59 filtro60 filtro61 filtro62 filtro63 filtro64 filtro65 filtro66 filtro67 filtro68 filtro69 filtro70 filtro71 filtro72 filtro73 filtro74 filtro75 filtro76 filtro77 filtro78 filtro79 filtro80 filtro81 filtro82 filtro83 filtro84 filtro85 filtro86 filtro87 filtro88 filtro89 filtro90 filtro91 filtro92 filtro93 filtro94 filtro95 filtro96 filtro97 filtro98 filtro99 filtro100 filtro101 filtro102 filtro103 filtro104 filtro105 filtro106 filtro107 filtro108 filtro109 filtro110 filtro111 filtro112 filtro113 filtro114 filtro115 filtro116 filtro117 filtro118 filtro119 filtro120 filtro121 filtro122 filtro123 filtro124 filtro125 filtro126 filtro127 filtro128 filtro129 filtro130 filtro131 filtro132 filtro133 filtro134 filtro135 filtro136 filtro137 filtro138 filtro139 filtro140 filtro141 filtro142 filtro143 filtro144 filtro145 filtro146 filtro147 filtro148 filtro149 filtro150 filtro151 filtro152 filtro153 filtro154 filtro155 filtro156 filtro157 filtro158 filtro159 filtro160 filtro161 filtro162 filtro163 filtro164 filtro165 filtro166 filtro167 filtro168 filtro169 filtro170 filtro171 filtro172 filtro173 filtro174 filtro175 filtro176 filtro177 filtro178">Tudo</a><br>


                        <a onclick="myAccFunc()" href="javascript:void(0)"
                            class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                            Mulher <i class="fa fa-caret-down"></i>
                        </a>
                        <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                            <a href="#" class="w3-bar-item w3-button"
                                data-filtro="filtro1 filtro2 filtro3 filtro4 filtro5 filtro6 filtro7 filtro8 filtro9 filtro10 filtro11 filtro12 filtro13 filtro14 filtro15 filtro16 filtro17 filtro18 filtro19 filtro20 filtro21 filtro22 filtro23 filtro24 filtro25 filtro26 filtro27 filtro28 filtro29 filtro30 filtro31 filtro32 filtro33 filtro34 filtro35 filtro36 filtro37 filtro38 filtro39 filtro40 filtro41 filtro42 filtro43 filtro44 filtro45">Tudo</a>
                            <a onclick="myAccFunc3()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Vestuário <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo2Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filtro1 filtro2 filtro3 filtro4 filtro5 filtro6 filtro7 filtro8 filtro9 filtro10 filtro11 filtro12 filtro13 filtro14">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro1">Camisolas e sweaters</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro2">Tops e tshirts</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro3">Casacos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro4">Fatos e blazers</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro5">Macacões</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro6">Vestidos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro7">Saias</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro8">Calças e leggings</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro9">Calças de ganga</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro10">Calções</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro11">Vestuário de banho</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro12">Vestuário de
                                    maternidade</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro13">Trajes e roupas
                                    especiais</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro14">Outros</a>
                            </div>


                            <a onclick="myAccFunc4()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Calçado <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo3Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filtro15 filtro16 filtro17 filtro18 filtro19 filtro20 filtro21 filtro22 filtro23 filtro24">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro15">Botas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro16">Calçado desportivo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro17">Calçado tradicional</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro18">Chinelos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro19">Pantufas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro20">Sapatilhas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro21">Sapatos de salto</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro22">Sapatos rasos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro23">Sandálias</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro24">Outros</a>
                            </div>

                            <a onclick="myAccFunc5()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Acessórios <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo4Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filtro25 filtro26 filtro27 filtro28 filtro29 filtro30 filtro31 filtro32 filtro33 filtro34 filtro35">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro25">Acessórios para o
                                    cabelo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro26">Bonés e chapéus</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro27">Cachecóis e lenços</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro28">Cintos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro29">Guarda-chuva</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro30">Joias</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro31">Luvas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro32">Óculos de sol</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro33">Porta chaves</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro34">Relógios</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro35">Outros</a>
                            </div>

                            <a onclick="myAccFunc6()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Malas <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo5Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filtro36 filtro37 filtro38 filtro39 filtro40 filtro41 filtro42 filtro43 filtro44 filtro45">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro36">Bolsas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro37">Bolsas de cintura</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro38">Bolsas de viagem</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro39">Carteiras</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro40">Malas a tiracolo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro41">Malas de
                                    maquilhagem</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro42">Malas de viagem</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro43">Mochilas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro44">Sacos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro45">Outros</a>
                            </div>

                        </div>

                        <a onclick="myAccFunc2()" href="javascript:void(0)"
                            class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                            Homem <i class="fa fa-caret-down"></i>
                        </a>
                        <div id="demo1Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                            <a href="#" class="w3-bar-item w3-button"
                                data-filtro="filtro46 filtro47 filtro48 filtro49 filtro50 filtro51 filtro52 filtro53 filtro54 filtro55 filtro56 filtro57 filtro58 filtro59 filtro60 filtro61 filtro62 filtro63 filtro64 filtro65 filtro66 filtro67 filtro68 filtro69 filtro70 filtro71 filtro72 filtro73 filtro74 filtro75 filtro76 filtro77 filtro78 filtro79 filtro80 filtro81 filtro82 filtro83 filtro84 filtro85 filtro86 filtro87">Tudo</a>

                            <a onclick="myAccFunc7()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Vestuário <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo6Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filtro46 filtro47 filtro48 filtro49 filtro50 filtro51 filtro52 filtro53 filtro54 filtro55 filtro56">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro46">Camisolas e
                                    sweaters</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro47">Tops e tshirts</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro48">Casacos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro49">Fatos e blazers</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro50">Calças</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro51">Calças de ganga</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro52">Calções</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro53">Meias</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro54">Vestuário de banho</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro55">Trajes e roupas
                                    especiais</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro56">Outros</a>
                            </div>

                            <a onclick="myAccFunc8()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Calçado <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo7Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filtro57 filtro58 filtro59 filtro60 filtro61 filtro62 filtro63 filtro64 filtro65 filtro66">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro57">Botas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro58">Calçado desportivo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro59">Calçado tradicional</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro60">Chinelos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro61">Pantufas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro62">Sapatilhas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro63">Sapatos formais</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro64">Sapatos vela</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro65">Sandálias</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro66">Outros</a>
                            </div>

                            <a onclick="myAccFunc9()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Acessórios <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo8Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filtro67 filtro68 filtro69 filtro70 filtro71 filtro72 filtro73 filtro74 filtro75 filtro76 filtro77 filtro78">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro67">Bonés e chapéus</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro68">Cachecóis e lenços</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro69">Cintos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro70">Gravatas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro71">Guarda-chuva</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro72">Joias</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro73">Lenços de bolso</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro74">Luvas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro75">Óculos de sol</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro76">Porta chaves</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro77">Relógios</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro78">Outros</a>
                            </div>

                            <a onclick="myAccFunc10()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Malas <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo9Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filtro79 filtro80 filtro81 filtro82 filtro83 filtro84 filtro85 filtro86 filtro87">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro79">Bolsas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro80">Bolsas de cintura</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro81">Bolsas de viagem</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro82">Carteiras</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro83">Malas a tiracolo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro84">Malas de viagem</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro85">Mochilas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro86">Sacos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro87">Outros</a>
                            </div>

                        </div>

                        <a onclick="myAccFunc11()" href="javascript:void(0)"
                            class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                            Criança <i class="fa fa-caret-down"></i>
                        </a>
                        <div id="demo10Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                            <a href="#" class="w3-bar-item w3-button"
                                data-filtro="filtro88 filtro89 filtro90 filtro91 filtro92 filtro93 filtro94 filtro95 filtro96 filtro97 filtro98 filtro99 filtro100 filtro101 filtro102 filtro103 filtro104 filtro105 filtro106 filtro107 filtro108 filtro109 filtro110 filtro111 filtro112 filtro113 filtro114 filtro115 filtro116 filtro117 filtro118 filtro119 filtro120 filtro121 filtro122 filtro123 filtro124 filtro125 filtro126 filtro127 filtro128 filtro129 filtro130 filtro131 filtro132 filtro133 filtro134 filtro135 filtro136">Tudo</a>

                            <a onclick="myAccFunc12()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Vestuário para rapariga <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo11Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filtro88 filtro89 filtro90 filtro91 filtro92 filtro93 filtro94 filtro95 filtro96 filtro97 filtro98 filtro99 filtro100 filtro101 filtro102 filtro103 filtro104">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro88">Acessórios</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro89">Calças e calções</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro90">Camisolas e hoodies</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro91">Disfarces e vestuário
                                    de fantasia</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro92">Malas e mochilas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro93">Pijamas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro94">Roupa interior e
                                    meias</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro95">Roupa para bebé</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro96">Saias</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro97">Sapatos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro98">Tops e tshirts</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro99">Vestidos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro100">Vestuário de banho</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro101">Vestuário
                                    desportivo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro102">Vestuário formal</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro103">Vestuário para
                                    gémeos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro104">Outros</a>
                            </div>

                            <a onclick="myAccFunc13()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Vestuário para rapaz <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo12Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filtro105 filtro106 filtro107 filtro108 filtro109 filtro110 filtro111 filtro112 filtro113 filtro114 filtro115 filtro116 filtro117 filtro118 filtro119">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro105">Acessórios</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro106">Calças e calções</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro107">Camisolas e
                                    hoodies</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro108">Disfarces e vestuário
                                    de fantasia</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro109">Malas e mochilas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro110">Pijamas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro111">Roupa interior e
                                    meias</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro112">Roupa para bebé</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro113">Sapatos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro114">Tops e tshirts</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro115">Vestuário de banho</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro116">Vestuário
                                    desportivo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro117">Vestuário formal</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro118">Vestuário para
                                    gémeos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro119">Outros</a>
                            </div>

                            <a onclick="myAccFunc14()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Brinquedos <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo13Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filtro120 filtro121 filtro122 filtro123 filtro124 filtro125 filtro126 filtro127 filtro128 filtro129 filtro130">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro120">Bonecas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro121">Brinquedos
                                    educativos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro122">Brinquedos de
                                    construção</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro123">Brinquedos para
                                    dormir</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro124">Brinquedos
                                    musicais</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro125">Brinquedos de
                                    madeira</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro126">Brinquedos para
                                    água</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro127">Brinquedos de
                                    cozinha</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro128">Figuras de ação</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro129">Jogos eletrónicos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro130">Outros</a>
                            </div>

                            <a onclick="myAccFunc15()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Veiculos de brincar <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo14Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filtro131 filtro132 filtro133 filtro134 filtro135 filtro136">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro131">Brinquedos para
                                    empurrar</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro132">Trotinetes</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro133">Trenós, esquis e
                                    pranchas de neve</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro134">Bicicletas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro135">Triciclos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro136">Outros</a>
                            </div>

                        </div>

                        <a onclick="myAccFunc16()" href="javascript:void(0)"
                            class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                            Unissexo <i class="fa fa-caret-down"></i>
                        </a>
                        <div id="demo15Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                            <a href="#" class="w3-bar-item w3-button"
                                data-filtro="filtro137 filtro138 filtro139 filtro140 filtro141 filtro142 filtro143 filtro144 filtro145 filtro146 filtro147 filtro148 filtro149 filtro150 filtro151 filtro152 filtro153 filtro154 filtro155 filtro156 filtro157 filtro158 filtro159 filtro160 filtro161 filtro162 filtro163 filtro164 filtro165 filtro166 filtro167 filtro168 filtro169 filtro170 filtro171 filtro172 filtro173 filtro174 filtro175 filtro176 filtro177 filtro178">Tudo</a>

                            <a onclick="myAccFunc17()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Vestuário <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo16Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filtro137 filtro138 filtro139 filtro140 filtro141 filtro142 filtro143 filtro144 filtro145 filtro146 filtro147">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro137">Camisolas e
                                    sweaters</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro138">Tops e tshirts</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro139">Casacos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro140">Fatos e blazers</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro141">Calças</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro142">Calças de ganga</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro143">Calções</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro144">Meias</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro145">Vestuário de banho</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro146">Trajes e roupas
                                    especiais</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro147">Outros</a>
                            </div>

                            <a onclick="myAccFunc18()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Calçado <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo17Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filtro148 filtro149 filtro150 filtro151 filtro152 filtro153 filtro154 filtro155 filtro156 filtro157">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro148">Botas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro149">Calçado desportivo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro150">Calçado
                                    tradicional</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro151">Chinelos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro152">Pantufas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro153">Sapatilhas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro154">Sapatos formais</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro155">Sapatos vela</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro156">Sandálias</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro157">Outros</a>
                            </div>

                            <a onclick="myAccFunc19()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Acessórios <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo18Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filtro158 filtro159 filtro160 filtro161 filtro162 filtro163 filtro164 filtro165 filtro166 filtro167 filtro168 filtro169">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro158">Bonés e chapéus</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro159">Cachecóis e lenços</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro160">Cintos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro161">Gravatas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro162">Guarda-chuva</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro163">Joias</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro164">Lenços de bolso</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro165">Luvas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro166">Óculos de sol</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro167">Porta chaves</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro168">Relógios</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro169">Outros</a>
                            </div>

                            <a onclick="myAccFunc20()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Malas <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo19Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filtro170 filtro171 filtro172 filtro173 filtro174 filtro175 filtro176 filtro177 filtro178">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro170">Bolsas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro171">Bolsas de cintura</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro172">Bolsas de viagem</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro173">Carteiras</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro174">Malas a tiracolo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro175">Malas de viagem</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro176">Mochilas</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro177">Sacos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filtro178">Outros</a>
                            </div>
                        </div>
                    </div>

                    <div class="w3-padding-64 w3-large w3-text-grey">
                        <div class="filter-widget">
                            <h4 class="fw-title">Tamanho</h4>
                        </div>

                        <a href="#" class="w3-bar-item w3-button"
                            data-filtro="filter1 filter2 filter3 filter4 filter5 filter6 filter7 filter22 filter23 filter24 filter25 filter26 filter27 filter8 filter9 filter10 filter11 filter12 filter13 filter14 filter15 filter28 filter29 filter30 filter31 filter32 filter33 filter34 filter35 filter36 filter37 filter38 filter39 filter16 filter17 filter18 filter19 filter20 filter21 filter40 filter41 filter42 filter43 filter44 filter45 filter46 filter47 filter48 filter49 filter50 filter51 filter52 filter53 filter54 filter55">Tudo</a><br>


                        <a onclick="myAccFunc21()" href="javascript:void(0)"
                            class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                            Bebé <i class="fa fa-caret-down"></i>
                        </a>
                        <div id="demo20Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                            <a href="#" class="w3-bar-item w3-button"
                                data-filtro="filter1 filter2 filter3 filter4 filter5 filter6 filter7 filter22 filter23 filter24 filter25 filter26 filter27">Tudo</a>

                            <a onclick="myAccFunc22()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Vestuário <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo21Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filter1 filter2 filter3 filter4 filter5 filter6 filter7">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter1">3 meses</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter2">6 meses</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter3">9 meses</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter4">12 meses</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter5">18 meses</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter6">24 meses</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter7">36 meses</a>
                            </div>


                            <a onclick="myAccFunc23()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Calçado <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo22Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filter22 filter23 filter24 filter25 filter26 filter27">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter22">17</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter23">18</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter24">19</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter25">20</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter26">21</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter27">22</a>
                            </div>

                        </div>

                        <a onclick="myAccFunc24()" href="javascript:void(0)"
                            class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                            Criança <i class="fa fa-caret-down"></i>
                        </a>
                        <div id="demo23Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                            <a href="#" class="w3-bar-item w3-button"
                                data-filtro="filter8 filter9 filter10 filter11 filter12 filter13 filter14 filter15 filter28 filter29 filter30 filter31 filter32 filter33 filter34 filter35 filter36 filter37 filter38 filter39">Tudo</a>


                            <a onclick="myAccFunc25()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Vestuário <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo24Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filter8 filter9 filter10 filter11 filter12 filter13 filter14 filter15">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter8">3 anos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter9">4 anos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter10">5 anos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter11">6 anos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter12">8 anos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter13">10 anos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter14">12 anos</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter15">14 anos</a>
                            </div>


                            <a onclick="myAccFunc26()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Calçado <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo25Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filter28 filter29 filter30 filter31 filter32 filter33 filter34 filter35 filter36 filter37 filter38 filter39">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter28">23</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter29">24</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter30">25</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter31">26</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter32">27</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter33">28</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter34">29</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter35">30</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter36">31</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter37">32</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter38">33</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter39">34</a>
                            </div>

                        </div>

                        <a onclick="myAccFunc27()" href="javascript:void(0)"
                            class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                            Adulto <i class="fa fa-caret-down"></i>
                        </a>
                        <div id="demo26Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                            <a href="#" class="w3-bar-item w3-button"
                                data-filtro="filter16 filter17 filter18 filter19 filter20 filter21 filter40 filter41 filter42 filter43 filter44 filter45 filter46 filter47 filter48 filter49 filter50 filter51 filter52 filter53 filter54">Tudo</a>


                            <a onclick="myAccFunc28()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Vestuário <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo27Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filter16 filter17 filter18 filter19 filter20 filter21">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter16">XS</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter17">S</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter18">M</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter19">L</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter20">XL</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter21">XXL</a>
                            </div>


                            <a onclick="myAccFunc29()" href="javascript:void(0)"
                                class="w3-button w3-block w3-white w3-left-align" id="myBtn">
                                Calçado <i class="fa fa-caret-down"></i>
                            </a>
                            <div id="demo28Acc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
                                <a href="#" class="w3-bar-item w3-button"
                                    data-filtro="filter40 filter41 filter42 filter43 filter44 filter45 filter46 filter47 filter48 filter49 filter50 filter51 filter52 filter53 filter54">Tudo</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter40">35</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter41">36</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter42">37</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter43">38</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter44">39</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter45">40</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter46">41</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter47">42</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter48">43</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter49">44</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter50">45</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter51">46</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter52">47</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter53">48</a>
                                <a href="#" class="w3-bar-item w3-button" data-filtro="filter54">>48</a>
                            </div>

                        </div>

                        <a href="#" class="w3-bar-item w3-button" data-filtro="filter55">Diversos</a>


                    </div>

                    <div class="filter-widget">
                        <h4 class="fw-title">Marca</h4>

                        <?php
                        include "abreconexao.php";

                        $sql = "SELECT id, nome FROM marca";
                        mysqli_set_charset($conn, "utf8");

                        $result = $conn->query($sql);

                        echo "<div class='inner-header' style='width: 230px;'>";
                        echo "<div class='advanced-search' style='width: 230px;'>";
                        echo "<div class='input-group' style='width: 230px;'>";

                        if ($result->num_rows > 0) {
                            /*echo "<label for='marca'>Marca:</label>";*/
                            echo "<input type='text' name='marca' id='marca' placeholder='Escreva uma marca' list='marcas' style='margin-bottom:15px; width: 230px;'>";
                            echo "<datalist id='marcas'>";
                            echo "<option value='' data-filtro=''>Selecione uma opção</option>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row["nome"] . "' data-filtro='filtrar" . $row["id"] . "'>";
                                if ($row["nome"] == $_POST["marca"]) {
                                    $marcaid = $row["id"];
                                }
                            }
                            echo "</datalist>";
                        } else {
                            echo "0 resultados";
                        }

                        echo "<br><a href='#' id='btn-filtrar' class='filter-btn'>Filtrar</a>";

                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        mysqli_close($conn);

                        ?>

                        <script>
                            document.getElementById("btn-filtrar").addEventListener("click", function () {
                                var filtro = document.querySelector("datalist#marcas option[value='" + document.getElementById('marca').value + "']").getAttribute("data-filtro");
                                var marcaId = filtro.replace("filtrar", "");

                                var divs = document.querySelectorAll(".filtro");
                                for (var i = 0; i < divs.length; i++) {
                                    var div = divs[i];
                                    var divFiltro = div.getAttribute("data-filtro");

                                    if (divFiltro.endsWith(marcaId)) {
                                        div.style.display = "block";
                                    } else {
                                        div.style.display = "none";
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">

                            <style>
                                .pi-pic img {
                                    height: 320px;
                                    width: auto;
                                }
                            </style>

                            <?php

                            session_start();
                            include "abreconexao.php";

                            if (isset($_SESSION['utilizador'])) {
                                $utilizador_id = $_SESSION['utilizador'];

                                $sql = "SELECT * FROM artigo";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $categoria_id = $row["categoria"];
                                        $categoria_query = "SELECT nome FROM categoria WHERE id=$categoria_id";
                                        mysqli_set_charset($conn, "utf8");
                                        $categoria_result = $conn->query($categoria_query);
                                        $categoria_nome = "";
                                        if ($categoria_result->num_rows > 0) {
                                            $categoria_row = $categoria_result->fetch_assoc();
                                            $categoria_nome = $categoria_row["nome"];
                                        }

                                        $tamanho_id = $row["tamanho"];
                                        $tamanho_query = "SELECT valor FROM tamanho WHERE id=$tamanho_id";
                                        mysqli_set_charset($conn, "utf8");
                                        $tamanho_result = $conn->query($tamanho_query);
                                        $tamanho_valor = "";
                                        if ($tamanho_result->num_rows > 0) {
                                            $tamanho_row = $tamanho_result->fetch_assoc();
                                            $tamanho_valor = $tamanho_row["valor"];
                                        }

                                        $marca_id = $row["marca"];
                                        $marca_query = "SELECT nome FROM marca WHERE id=$marca_id";
                                        mysqli_set_charset($conn, "utf8");
                                        $marca_result = $conn->query($marca_query);
                                        $marca_nome = "";
                                        if ($marca_result->num_rows > 0) {
                                            $marca_row = $marca_result->fetch_assoc();
                                            $marca_nome = $marca_row["nome"];
                                        }

                                        $titulo = $row["titulo"];
                                        $estado = $row["estado"];
                                        $preco = $row["preco"];
                                        $descricao = $row["descricao"];
                                        $vendedor = $row["vendedor"];
                                        $data_registo = $row["data_registo"];
                                        $categoria_id = $row["categoria"];
                                        $tamanho_id = $row["tamanho"];
                                        $marca_id = $row["marca"];
                                        $artigo_id = $row["id"];

                                        $artigo_id_sem_zeros = ltrim($artigo_id, '0');
                                        $sql2 = "SELECT nome, conteudo FROM imagens WHERE id = $artigo_id";
                                        $result2 = mysqli_query($conn, $sql2);


                                        if (mysqli_num_rows($result2) > 0) {
                                            while ($row = mysqli_fetch_array($result2)) {
                                                $nome = $row['nome'];
                                                $conteudo = $row['conteudo'];
                                                $tipo = pathinfo($nome, PATHINFO_EXTENSION);
                                                $base64 = base64_encode($conteudo);
                                                $imagem = "data:image/$tipo;base64,$base64";
                                            }

                                            echo "<div class='col-lg-4 col-sm-6 filtro product-item prodtd' data-filtro='filtro" . $categoria_id . " filter" . $tamanho_id . " filtrar" . $marca_id . "'>";
                                            echo "<div>";
                                            echo "<div class='pi-pic' style='display: flex; justify-content: center; align-items: center;'>";
                                            echo "<img src='$imagem' style='display: block; margin: 0 auto;'>";
                                            echo "<div class='icon icon2'>";

                                            echo "<script>


                                            function addFavorite(icon) {
                                                var artigo_id = icon.dataset.artigoId;
                                                var xhttp = new XMLHttpRequest();
                                                xhttp.onreadystatechange = function() {
                                                    if (this.readyState == 4 && this.status == 200) {
                                                        icon.className = 'icon_heart';
                                                        icon.onclick = function() { removeFavorite(icon); };
                                                    }
                                                };
                                                xhttp.open('POST', 'processa-favoritos.php', true);
                                                xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                                                xhttp.send('artigo_id=' + artigo_id);
                                            }

                                            function removeFavorite(icon) {
                                                var artigo_id = icon.dataset.artigoId;
                                                var xhttp = new XMLHttpRequest();
                                                xhttp.onreadystatechange = function() {
                                                    if (this.readyState == 4 && this.status == 200) {
                                                        icon.className = 'icon_heart_alt';
                                                        icon.onclick = function() { addFavorite(icon); };
                                                    }
                                                };
                                                xhttp.open('POST', 'apaga-favoritos.php', true);  // Este é o script que remove os favoritos
                                                xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                                                xhttp.send('artigo_id=' + artigo_id);
                                            }

                                            // Verifica o estado inicial do ícone de favorito quando a página é carregada
                                            window.addEventListener('load', function() {
                                                var icons = document.querySelectorAll('.icon_heart, .icon_heart_alt');
                                                icons.forEach(function(icon) {
                                                    var artigo_id = icon.dataset.artigoId;
                                                    verificaFavorito(artigo_id, icon);
                                                });
                                            });

                                            function verificaFavorito(artigo_id, icon) {
                                                var xhttp = new XMLHttpRequest();
                                                xhttp.onreadystatechange = function() {
                                                    if (this.readyState == 4 && this.status == 200) {
                                                        var response = JSON.parse(this.responseText);
                                                        if (response.isFavorite) {
                                                            icon.className = 'icon_heart';
                                                        } else {
                                                            icon.className = 'icon_heart_alt';
                                                        }
                                                    }
                                                };
                                                xhttp.open('POST', 'verifica-favorito.php', true);
                                                xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                                                xhttp.send('artigo_id=' + artigo_id);
                                            }

                                              
                                            </script>";




                                            // Seção PHP que verifica se o artigo está na lista de favoritos
                                            $favoritos_query = "SELECT * FROM favoritos WHERE artigo_id=$artigo_id AND utilizador_id=$utilizador_id";
                                            $favoritos_result = $conn->query($favoritos_query);
                                            $is_favorito = ($favoritos_result->num_rows > 0) ? true : false;

                                            // Exiba o ícone de coração apropriado
                                            if ($is_favorito) {
                                                echo "<i class='icon_heart' data-artigo-id='" . $artigo_id . "' onclick='removeFavorite(this)'></i>";
                                            } else {
                                                echo "<i class='icon_heart_alt' data-artigo-id='" . $artigo_id . "' onclick='addFavorite(this)'></i>";
                                            }

                                            echo "</div>";
                                            echo "<ul>";
                                            echo "<li class='w-icon active'><button type='submit' name='comprar' class='btnpediu' style='background-color: #e7ab3c; color:white;border-style:none;height:50px;' alt='Comprar' data-artigo-id='" . $artigo_id . "'>Comprar</button></li>";
                                            echo "<li class='quick-view'><button type='submit' name='quickview' class='btnpediu2' style='background-color: white; color:black;border-style:none;height:50px;'  data-artigo-id='" . $artigo_id . "'>+ Ver melhor</button></li>";
                                            echo "</ul>";
                                            echo "</div>";
                                            echo "<div class='pi-text'>";
                                            echo "<div class='catagory-name'>" . $categoria_nome . "</div>";
                                            echo "<h5 class='nomeprod'>" . $titulo . "</h5>";
                                            echo "<div class='preco product-price'>";
                                            echo "" . $preco . "€";
                                            echo "</div>";
                                            echo "</div>";
                                            echo "</div>";
                                            echo "</div>";

                                            echo "<div class='compra-form'>";
                                            echo "<form method='post' action='processar_compra.php' id='compra-form-$artigo_id'>";
                                            echo "<input type='hidden' name='artigo_id' value='" . $artigo_id . "'>";
                                            echo "<input type='hidden' name='titulo' value='" . $titulo . "'>";
                                            echo "<input type='hidden' name='estado' value='" . $estado . "'>";
                                            echo "<input type='hidden' name='preco' value='" . $preco . "'>";
                                            echo "<input type='hidden' name='vendedor' value='" . $vendedor . "'>";
                                            echo "<input type='hidden' name='imagem' value='" . $imagem . "'>";
                                            echo "</form>";
                                            echo "</div>";

                                            echo "<div class='favoritos-form'>";
                                            echo "<form method='post' action='processa-favoritos.php' id='favoritos-form-$artigo_id'>";
                                            echo "<input type='hidden' name='artigo_id' value='" . $artigo_id . "'>";
                                            echo "<input type='hidden' name='titulo' value='" . $titulo . "'>";
                                            echo "<input type='hidden' name='estado' value='" . $estado . "'>";
                                            echo "<input type='hidden' name='preco' value='" . $preco . "'>";
                                            echo "<input type='hidden' name='vendedor' value='" . $vendedor . "'>";
                                            echo "<input type='hidden' name='imagem' value='" . $imagem . "'>";
                                            echo "</form>";
                                            echo "</div>";

                                            echo "<div class='quickview-form'>";
                                            echo "<form method='post' action='quickview.php' id='quickview-form-$artigo_id'>";
                                            echo "<input type='hidden' name='artigo_id' value='" . $artigo_id . "'>";
                                            echo "<input type='hidden' name='titulo' value='" . $titulo . "'>";
                                            echo "<input type='hidden' name='data_registo' value='" . $data_registo . "'>";
                                            echo "<input type='hidden' name='categoria_id' value='" . $categoria_id . "'>";
                                            echo "<input type='hidden' name='tamanho_id' value='" . $tamanho_id . "'>";
                                            echo "<input type='hidden' name='marca_id' value='" . $marca_id . "'>";
                                            echo "<input type='hidden' name='estado' value='" . $estado . "'>";
                                            echo "<input type='hidden' name='preco' value='" . $preco . "'>";
                                            echo "<input type='hidden' name='vendedor' value='" . $vendedor . "'>";
                                            echo "<input type='hidden' name='descricao' value='" . $descricao . "'>";
                                            echo "<input type='hidden' name='imagem' value='" . $imagem . "'>";
                                            echo "</form>";
                                            echo "</div>";
                                            echo "<script>";

                                            echo "document.querySelectorAll('.icon_heart_alt').forEach(function(icone) {";
                                            echo "    icone.addEventListener('click', function() {";
                                            echo "        var artigo_id = this.dataset.artigoId;";
                                            echo "        document.getElementById('favoritos-form-' + artigo_id).submit();";
                                            echo "    });";
                                            echo "});";
                                            echo "</script>";

                                            echo "<script>";
                                            echo "document.querySelectorAll('.btnpediu').forEach(function(botao) {";
                                            echo "    botao.addEventListener('click', function() {";
                                            echo "        var artigo_id = this.dataset.artigoId;";
                                            echo "        document.getElementById('compra-form-' + artigo_id).submit();";
                                            echo "    });";
                                            echo "});";
                                            echo "</script>";

                                            echo "<script>";
                                            echo "document.querySelectorAll('.btnpediu2').forEach(function(botao) {";
                                            echo "    botao.addEventListener('click', function() {";
                                            echo "        var artigo_id = this.dataset.artigoId;";
                                            echo "        document.getElementById('quickview-form-' + artigo_id).submit();";
                                            echo "    });";
                                            echo "});";
                                            echo "</script>";



                                        } else {
                                            echo "Nenhuma imagem encontrada para este artigo.";
                                        }
                                    }
                                } else {
                                    echo "<h2>Nenhum resultado encontrado</h2>";
                                }


                            }
                            mysqli_close($conn);

                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img/logo2.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Faculdade de Ciências, Universidade de Lisboa, Portugal</li>
                            <li>Telefone: 123 456 789</li>
                            <li>Email: info@example.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Informação</h5>
                        <ul>
                            <li><a href="faq.php">Apoio ao Cliente</a></li>
                            <li><a href="https://linktr.ee/projetoasw">Créditos</a></li>
                            <li><a href="contact.php">Contactos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Minha Conta</h5>
                        <ul>
                            <li><a href="perfil.php">Perfil</a></li>
                            <li><a href="shopping-cart.php">Minha compra</a></li>
                            <li><a href="shop.php">Comprar</a></li>
                            <li><a href="sell.php">Vender</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Junte-se à nossa Newsletter</h5>
                        <p>Receba atualizações no seu email sobre as nossas ofertas e artigos.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Email">
                            <button type="button">Subscrever</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/shop.js"></script>
</body>

</html>