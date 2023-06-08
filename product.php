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
</head>

<body>
    <!--
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const chatLink = document.querySelector('a[href="#chat"]');
        chatLink.addEventListener('click', function(event) {
            event.preventDefault();
            const confirmStartChat = confirm("Quer começar uma conversa com o vendendor deste artigo?");
            if (confirmStartChat) {
                const artigoId = '<?php echo $artigo_id; ?>';
                console.log(artigoId);
            }
        });
    });
    </script>-->

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <!--<div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        hello.colorlib@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +65 11.188.888
                    </div>
                </div>
                <div class="ht-right">
                    <a href="#" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>-->
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
                    <!--<div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>-->
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

                            <!-- <li class="cart-price">$150.00</li> -->
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
                        <!--<li><a href="./shop.html">Shop</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>-->
                        <li><a href="./faq.php">Apoio ao Cliente</a></li>
                        <li><a href="./contact.php">Contactos</a></li>

                        <!--<li><a href="./register.html">Registo</a></li>
                        <li><a href="./login.html">Login</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                
                                <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="./check-out.html">Checkout</a></li>
                                <li><a href="./faq.html">Faq</a></li>
                                
                            </ul>
                        </li>-->
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
                    <div class="breadcrumb-text product-more">
                        <a href="./inicial.php"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.php">Comprar</a>
                        <span>Artigo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-3">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categoria</h4>
                        <ul class="filter-catagories">
                            <li><a href="#">Homem</a></li>
                            <li><a href="#">Mulher</a></li>
                            <li><a href="#">Criança</a></li>
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Marca</h4>
                        <div class="fw-brand-check">
                            <div class="bc-item">
                                <label for="bc-calvin">
                                    Calvin Klein
                                    <input type="checkbox" id="bc-calvin">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-diesel">
                                    Diesel
                                    <input type="checkbox" id="bc-diesel">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-polo">
                                    Polo
                                    <input type="checkbox" id="bc-polo">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-tommy">
                                    Tommy Hilfiger
                                    <input type="checkbox" id="bc-tommy">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Preço</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="33" data-max="98">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <a href="#" class="filter-btn">Filter</a>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Cor</h4>
                        <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" id="cs-black">
                                <label class="cs-black" for="cs-black">Preto</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-violet">
                                <label class="cs-violet" for="cs-violet">Violeta</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-blue">
                                <label class="cs-blue" for="cs-blue">Azul</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-yellow">
                                <label class="cs-yellow" for="cs-yellow">Amarelo</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-red">
                                <label class="cs-red" for="cs-red">Vermelho</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-green">
                                <label class="cs-green" for="cs-green">Verde</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Tamanho</h4>
                        <div class="fw-size-choose">
                            <div class="sc-item">
                                <input type="radio" id="s-size">
                                <label for="s-size">s</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="m-size">
                                <label for="m-size">m</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="l-size">
                                <label for="l-size">l</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="xs-size">
                                <label for="xs-size">xs</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Tags</h4>
                        <div class="fw-tags">
                            <a href="#">Towel</a>
                            <a href="#">Shoes</a>
                            <a href="#">Coat</a>
                            <a href="#">Dresses</a>
                            <a href="#">Trousers</a>
                            <a href="#">Men's hats</a>
                            <a href="#">Backpack</a>
                        </div>
                    </div>
                </div>-->
                <div style="margin: 0 auto;" class="col-lg-9">

                    <?php

                    session_start();
                    include "abreconexao.php";

                    if (isset($_SESSION['utilizador'])) {
                        $utilizador = $_SESSION['utilizador'];


                        $sql = "SELECT * FROM quickview WHERE utilizador = '" . $_SESSION['utilizador'] . "' AND id = (SELECT MAX(id) FROM quickview)";

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
                                $artigo_id = $row["artigo_id"];
                                $estado = $row["estado"];
                                $preco = $row["preco"];
                                $descricao = $row["descricao"];
                                $vendedor = $row["vendedor"];
                                $data_registo = $row["data_registo"];

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
                                    // ir buscar as conversas do utilizador logado
                                    include "chat/helpers/conversas.php";
                                    $conversas = getConversations($utilizador, $conn);
                                    //vemos se o utilizador tem conversas com o vendedor deste artigo. 
                                    //se já houver uma conversa iniciada tem o valor 1. otherwise, valor 0
                                    $temConversaUtilizador = 0;
                                    foreach ($conversas as $conversa) {
                                        if ($conversa[1] == $vendedor) {
                                            $temConversaUtilizador = 1;
                                            break;
                                        }
                                    }
                                    ?>
                                    <script>
                                        const utilizador = '<?php echo $utilizador; ?>';
                                        const vendedor = '<?php echo $vendedor; ?>';
                                        function fazerInsert(vendedor, titulo) {
                                            $.ajax({
                                                url: 'chat/ajax/fazer_insert.php',
                                                type: 'POST',
                                                data: {
                                                    vendedor: vendedor,
                                                    titulo: titulo
                                                },
                                                success: function (data) {
                                                    console.log(data);
                                                },
                                                error: function (xhr, status, error) {
                                                    console.error(error);
                                                    alert("Erro ao inserir na base de dados");
                                                }
                                            });
                                        }
                                        document.addEventListener('DOMContentLoaded', function () {
                                            const chatLink = document.querySelector('a[href="#chat"]');
                                            chatLink.addEventListener('click', function (event) {
                                                event.preventDefault();
                                                // 0 se não houver conversa, 1 se houver
                                                const temConversaUtilizador = '<?php echo $temConversaUtilizador; ?>';
                                                if (temConversaUtilizador == 0) {
                                                    // criar conversa na base de dados
                                                    if (utilizador != vendedor) {
                                                        console.log('entrou no if');
                                                        $.ajax({
                                                            url: 'chat/ajax/criar_conversa.php',
                                                            type: 'POST',
                                                            data: {
                                                                vendedor: vendedor
                                                            },
                                                            success: function (data) {
                                                                console.log(data);
                                                            }
                                                        });
                                                    } else {
                                                        alert("O vendedor é o mesmo que o utilizador logado. Não pode iniciar uma conversa consigo mesmo.");
                                                        return;
                                                    }
                                                }
                                                // realizar insert na tabela chats para enviar a msg sobre o artigo
                                                fazerInsert(vendedor, '<?php echo $titulo; ?>');
                                                // abrir chat window com o vendedor diretamente se já houver conversa
                                                window.location.href = "chat/chat.php?user=" + vendedor;
                                            });
                                        });
                                    </script>
                                    <?php
                                    echo "<div class='row'>";
                                    echo "<div class='col-lg-6'>";
                                    echo "<div class=''>";
                                    echo "<img style='height:400px;' class='product-big-img' src='" . $imagem . "' alt=''>";
                                    echo "<div class='zoom-icon'>";
                                    /*echo "<i class='fa fa-search-plus'></i>";*/
                                    echo "</div>";
                                    echo "</div>";
                                    echo "<div class='product-thumbs'>";
                                    echo "<div class='product-thumbs-track ps-slider owl-carousel'>";
                                    /*echo "<div class='pt active' data-imgbigurl='img/product-single/product-1.jpg'><img src='" . $imagem . "' alt=''></div>";
                                    echo "<div class='pt' data-imgbigurl='img/product-single/product-2.jpg'><img src='" . $imagem . "' alt=''></div>";
                                    echo "<div class='pt' data-imgbigurl='img/product-single/product-3.jpg'><img src='" . $imagem . "' alt=''></div>";
                                    echo "<div class='pt' data-imgbigurl='img/product-single/product-3.jpg'><img src='" . $imagem . "' alt=''></div>";*/
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "<div class='col-lg-6'>";
                                    echo "<div class='product-details'>";
                                    echo "<div class='pd-title'>";

                                    echo "<div class='icon icon2' style='display: flex; justify-content: right; align-items: right;'>";
                                    echo "<a href='#chat'><img src='https://cdn.onlinewebfonts.com/svg/img_382824.png' style='height: 18px; width: 18px; margin-right: 7px; vertical-align: -1%;'></a>";

                                    echo "<script>

                                            //estas duas não estão a funcionar
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

                                    echo "<span>" . $categoria_nome . "</span>";
                                    echo "<h3>" . $titulo . "</h3>";


                                    // echo "<a href='' class='heart-icon'><i class='icon_heart_alt'></i></a>";
                                    // echo "</div>";
                    

                                    /* echo "<div class='pd-rating'>";
                                    echo "<i class='fa fa-star'></i><br>";
                                    echo "<i class='fa fa-star'></i><br>";
                                    echo "<i class='fa fa-star'></i><br>";
                                    echo "<i class='fa fa-star'></i><br>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star-o'></i>";
                                    echo "<span>(5)</span>";
                                    echo "</div>";*/
                                    echo "<div class='pd-desc'>";
                                    echo "<p>" . $descricao . "</p>";
                                    echo "<h4>" . $preco . "€</h4>";
                                    echo "</div>";
                                    /*echo "<div class='pd-color'>";
                                    echo "<h6>Color</h6>";
                                    echo "<div class='pd-color-choose'>";
                                    echo "<div class='cc-item'>";
                                    echo "<input type='radio' id='cc-black'>";
                                    echo "<label for='cc-black'></label>";
                                    echo "</div>";
                                    echo "<div class='cc-item'>";
                                    echo "<input type='radio' id='cc-yellow'>";
                                    echo "<label for='cc-yellow' class='cc-yellow'></label>";
                                    echo "</div>";
                                    echo "<div class='cc-item'>";
                                    echo "<input type='radio' id='cc-violet'>";
                                    echo "<label for='cc-violet' class='cc-violet'></label>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "<div class='pd-size-choose'>";
                                    echo "<div class='sc-item'>";
                                    echo "<input type='radio' id='sm-size'>";
                                    echo "<label for='sm-size'>s</label>";
                                    echo "</div>";
                                    echo "<div class='sc-item'>";
                                    echo "<input type='radio' id='md-size'>";
                                    echo "<label for='md-size'>m</label>";
                                    echo "</div>";
                                    echo "<div class='sc-item'>";
                                    echo "<input type='radio' id='lg-size'>";
                                    echo "<label for='lg-size'>l</label>";
                                    echo "</div>";
                                    echo "<div class='sc-item'>";
                                    echo "<input type='radio' id='xl-size'>";
                                    echo "<label for='xl-size'>xs</label>";
                                    echo "</div>";
                                    echo "</div>";*/
                                    echo "<div class='quantity'>";
                                    /*echo "<div class='pro-qty'>";
                                    echo "<input type='text' value='1'>";
                                    echo "</div>";*/
                                    /*echo "<a href='' class='primary-btn pd-cart'>Add To Cart</a>";*/
                                    echo "<button type='submit' name='comprar' class='btnpediu primary-btn pd-cart' style='background-color: #e7ab3c; color:white;border-style:none;height:50px;' alt='Comprar' data-artigo-id='" . $artigo_id . "'>Comprar</button>";
                                    echo "</div>";
                                    echo "<ul class='pd-tags'>";
                                    echo "<li><b>MARCA:</b> " . $marca_nome . "</li>";
                                    echo "<li><b>TAMANHO:</b> " . $tamanho_valor . "</li>";
                                    echo "</ul>";
                                    echo "<div class='pd-share'>";
                                    echo "<div class='p-code'>ID : " . $artigo_id_sem_zeros . "</div>";
                                    /*echo "<div class='pd-social'>";
                                    echo "<a href=''><i class='ti-facebook'></i></a>";
                                    echo "<a href=''><i class='ti-twitter-alt'></i></a>";
                                    echo "<a href=''><i class='ti-linkedin'></i></a>";
                                    echo "</div>";*/
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";

                                    echo "<div class='favoritos-form'>";
                                    echo "<form method='post' action='processa-favoritos3.php' id='favoritos-form-$artigo_id'>";
                                    echo "<input type='hidden' name='artigo_id' value='" . $artigo_id . "'>";
                                    echo "<input type='hidden' name='titulo' value='" . $titulo . "'>";
                                    echo "<input type='hidden' name='estado' value='" . $estado . "'>";
                                    echo "<input type='hidden' name='preco' value='" . $preco . "'>";
                                    echo "<input type='hidden' name='vendedor' value='" . $vendedor . "'>";
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


                                    echo "<div class='product-tab'>";
                                    echo "<div class='tab-item'>";
                                    echo "<ul class='nav' role='tablist'>";
                                    /*echo "<li>";
                                    echo "<a class='active' data-toggle=tab' href='#tab-1' role='tab'>DESCRIÇÃO</a>";
                                    echo "</li>";*/
                                    echo "<li>";
                                    echo "<a class='active' data-toggle='tab' href='#tab-2' role='tab'>DETALHES</a>";
                                    echo "</li>";
                                    echo "<li>";
                                    echo "</li>";
                                    echo "</ul>";
                                    echo "</div>";
                                    echo "<div class='tab-item-content'>";
                                    echo "<div class='tab-content'>";
                                    /*echo "<div class='tab-pane fade-in active' id='tab-1' role='tabpanel'>";
                                    echo "<div class='product-content'>";
                                    echo "<div class='row'>";
                                    echo "<div class='col-lg-7'>";
                                    echo "<h5>Introdução</h5>";
                                    echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat. Duis aute irure dolor in </p>";
                                    echo "<h5>Características</h5>";
                                    echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat. Duis aute irure dolor in </p>";
                                    echo "</div>";
                                    echo "<div class='col-lg-5'>";
                                    echo "<img src='img/product-single/tab-desc.jpg' alt=''>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";*/
                                    echo "<div class='tab-pane fade-in active' id='tab-2' role='tabpanel'>";
                                    echo "<div class='specification-table'>";
                                    echo "<table>";
                                    /*echo "<tr>";
                                    echo "<td class='p-catagory'>Avaliação</td>";
                                    echo "<td>";
                                    echo "<div class='pd-rating'>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star-o'></i>";
                                    echo "<span>(5)</span>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";*/

                                    /*echo "<tr>";
                                    echo "<td class='p-catagory'>Comprar</td>";
                                    echo "<td>";
                                    echo "<div class='cart-add'>+ comprar</div>";
                                    echo "</td>";
                                    echo "</tr>";*/
                                    /*echo "<tr>";
                                    echo "<td class='p-catagory'>Disponibilidade</td>";
                                    echo "<td>";
                                    echo "<div class='p-stock'>22 em stock</div>";
                                    echo "</td>";
                                    echo "</tr>";*/
                                    echo "<tr>";
                                    echo "<td class='p-catagory'>Categoria</td>";
                                    echo "<td>";
                                    echo "<div class='p-size'>" . $categoria_nome . "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td class='p-catagory'>Tamanho</td>";
                                    echo "<td>";
                                    echo "<div class='p-size'>" . $tamanho_valor . "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td class='p-catagory'>Marca</td>";
                                    echo "<td>";
                                    echo "<div class='p-size'>" . $marca_nome . "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td class='p-catagory'>Estado</td>";
                                    echo "<td>";
                                    echo "<div class='p-size'>" . $estado . "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td class='p-catagory'>Preço</td>";
                                    echo "<td>";
                                    echo "<div class='p-price'>" . $preco . "€</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    /*echo "<tr>";
                                    echo "<td class='p-catagory'>Cor</td>";
                                    echo "<td><span class='cs-color'></span></td>";
                                    echo "</tr>";*/
                                    echo "<tr>";
                                    echo "<td class='p-catagory'>ID</td>";
                                    echo "<td>";
                                    echo "<div class='p-code'>" . $artigo_id_sem_zeros . "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    echo "</table>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "<div class='tab-pane fade' id='tab-3' role='tabpanel'>";
                                    echo "<div class='customer-review-option'>";
                                    echo "<h4>2 Comentários</h4>";
                                    echo "<div class='comment-option'>";
                                    echo "<div class='co-item'>";
                                    echo "<div class='avatar-pic'>";
                                    echo "<img src='img/product-single/avatar-1.png' alt=''>";
                                    echo "</div>";
                                    echo "<div class='avatar-text'>";
                                    echo "<div class='at-rating'>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star-o'></i>";
                                    echo "</div>";
                                    echo "<h5>Brandon Kelley <span>27 Aug 2019</span></h5>";
                                    echo "<div class='at-reply'>Nice !</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "<div class='co-item'>";
                                    echo "<div class='avatar-pic'>";
                                    echo "<img src='img/product-single/avatar-2.png' alt=''>";
                                    echo "</div>";
                                    echo "<div class='avatar-text'>";
                                    echo "<div class='at-rating'>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star-o'></i>";
                                    echo "</div>";
                                    echo "<h5>Roy Banks <span>27 Aug 2019</span></h5>";
                                    echo "<div class='at-reply'>Nice !</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "<div class='personal-rating'>";
                                    echo "<h6>Sua avaliação</h6>";
                                    echo "<div class='rating'>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star-o'></i>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "<div class='leave-comment'>";
                                    echo "<h4>Deixe um comentário</h4>";
                                    echo "<form action='#' class='comment-form'>";
                                    echo "<div class='row'>";
                                    echo "<div class='col-lg-6'>";
                                    echo "<input type='text' placeholder='Nome'>";
                                    echo "</div>";
                                    echo "<div class='col-lg-6'>";
                                    echo "<input type='text' placeholder='Email'>";
                                    echo "</div>";
                                    echo "<div class='col-lg-12'>";
                                    echo "<textarea placeholder='Comentário'></textarea>";
                                    echo "<button type='submit' class='site-btn'>Enviar</button>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</form>";
                                    echo "</div>";
                                    echo "</div>";
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

                                    echo "<script>";
                                    echo "document.querySelectorAll('.btnpediu').forEach(function(botao) {";
                                    echo "    botao.addEventListener('click', function() {";
                                    echo "        var artigo_id = this.dataset.artigoId;";
                                    echo "        document.getElementById('compra-form-' + artigo_id).submit();";
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

                    $conn->close();


                    ?>



                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Related Products Section End 
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="img/products/women-1.jpg" alt="">
                            <div class="sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Coat</div>
                            <a href="#">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">
                                $14.00
                                <span>$35.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="img/products/women-2.jpg" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Shoes</div>
                            <a href="#">
                                <h5>Guangzhou sweater</h5>
                            </a>
                            <div class="product-price">
                                $13.00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="img/products/women-3.jpg" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Towel</div>
                            <a href="#">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">
                                $34.00
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="img/products/women-4.jpg" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Towel</div>
                            <a href="#">
                                <h5>Converse Shoes</h5>
                            </a>
                            <div class="product-price">
                                $34.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Related Products Section End -->

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

</body>

</html>