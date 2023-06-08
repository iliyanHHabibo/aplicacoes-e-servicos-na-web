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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



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

                            <li style="left: 275%;position: relative;top:5px;">
                                <a href="chat/chat_home.php">
                                    <img src="https://cdn.onlinewebfonts.com/svg/img_382824.png"
                                        style="float: right; top: 20px; height: 25px; width: 25px;">
                                </a>
                            </li>



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



                            <li class="cart-icon">
                                <a href="#">
                                    <i class="ti-bell" id="ti-bell"></i>

                                    <?php
                                    session_start();
                                    include "abreconexao.php";

                                    if (isset($_SESSION['utilizador'])) {
                                        $utilizador = $_SESSION['utilizador'];

                                        $preferencias_query = "SELECT categoria, tamanho, marca FROM preferencias WHERE utilizador = '$utilizador'";

                                        $preferencias_result = $conn->query($preferencias_query);

                                        $categorias = array();
                                        $tamanhos = array();
                                        $marcas = array();

                                        if ($preferencias_result->num_rows > 0) {
                                            while ($preferencias = $preferencias_result->fetch_assoc()) {
                                                $categoria = $preferencias["categoria"];
                                                $tamanho = $preferencias["tamanho"];
                                                $marca = $preferencias["marca"];

                                                array_push($categorias, $categoria);
                                                array_push($tamanhos, $tamanho);
                                                array_push($marcas, $marca);
                                            }

                                            $categorias = implode(",", array_unique($categorias));
                                            $tamanhos = implode(",", array_unique($tamanhos));
                                            $marcas = implode(",", array_unique($marcas));

                                            $sql = "SELECT COUNT(DISTINCT id) AS count FROM artigo WHERE categoria IN ($categorias) OR tamanho IN ($tamanhos) OR marca IN ($marcas)";

                                            $result = $conn->query($sql);

                                            if ($result && $result->num_rows > 0) {
                                                $row = $result->fetch_assoc();
                                                echo "<span>" . $row['count'] . "</span>";
                                            } else {
                                                echo "<span>0</span>";
                                            }
                                        } else {
                                            echo "<span>0</span>";
                                        }



                                        $conn->close();
                                    }
                                    ?>
                                </a>

                                <?php

                                session_start();
                                include "abreconexao.php";

                                if (isset($_SESSION['utilizador'])) {
                                    $utilizador = $_SESSION['utilizador'];

                                    $preferencias_query = "SELECT categoria, tamanho, marca FROM preferencias WHERE utilizador = '$utilizador'";

                                    $preferencias_result = $conn->query($preferencias_query);

                                    $categorias = array();
                                    $tamanhos = array();
                                    $marcas = array();


                                    if ($preferencias_result->num_rows > 0) {
                                        while ($preferencias = $preferencias_result->fetch_assoc()) {



                                            $categoria = $preferencias["categoria"];
                                            $tamanho = $preferencias["tamanho"];
                                            $marca = $preferencias["marca"];

                                            array_push($categorias, $categoria);
                                            array_push($tamanhos, $tamanho);
                                            array_push($marcas, $marca);

                                        }


                                        $categorias = implode(",", array_unique($categorias));
                                        $tamanhos = implode(",", array_unique($tamanhos));
                                        $marcas = implode(",", array_unique($marcas));


                                        $sql = "SELECT DISTINCT * FROM artigo WHERE categoria IN ($categorias) OR tamanho IN ($tamanhos) OR marca IN ($marcas) LIMIT 4";

                                        $result = $conn->query($sql);

                                        echo "<div class='cart-hover'>";
                                        echo "<div class='select-items'>";
                                        echo "<table>";
                                        echo "<tbody>";


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

                                                    echo "<tr>";
                                                    echo "<td class='si-pic'><img src='$imagem' alt='' style='height:90px;width:auto;'></td>";
                                                    echo "<td class='si-text'>";
                                                    echo "<div class='product-selected'>";
                                                    echo "<p>" . $preco . "€</p>";
                                                    echo "<h6>" . $titulo . "</h6>";
                                                    echo "</div>";
                                                    echo "</td>";
                                                    echo "<td class='si-close'>";
                                                    /*echo "<i class='ti-plus'></i>";*/
                                                    echo "<div class='quick-view'><button type='submit' name='quickview' class='btnpediu2' style='background-color: white; border-style: none;'  data-artigo-id='" . $artigo_id . "'><i class='ti-plus'></i></button></div>";
                                                    echo "</td>";
                                                    echo "</tr>";

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

                                                } else {
                                                    echo "Nenhuma imagem encontrada para este artigo.";
                                                }
                                            }
                                        } else {
                                            echo "<h2>Nenhum resultado encontrado</h2>";
                                        }


                                        echo "</tbody>";
                                        echo "</table>";
                                        echo "<a href='#artigossugeridos' class='btnpediu primary-btn pd-cart' style='background-color: #e7ab3c; color:white;border-style:none;height:42px;width:100%;text-align:center;''>Ver mais</a>";
                                        echo "</div>";
                                        echo "</div>";

                                    }

                                    $conn->close();
                                }


                                ?>


                                <script>
                                    $(document).ready(function () {
                                        $('a[href="#artigossugeridos"]').click(function () {
                                            $('html, body').animate({
                                                scrollTop: $('#artigossugeridos').offset().top
                                            }, 1000);
                                        });
                                    });
                                </script>

                            </li>

                    </div>


                    </ul>
                </div>
            </div>
        </div>
        </div>


        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <!--<div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>-->
                </div>
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

                        <!--<li><a href="#">Pages</a>
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

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h1>Bem-Vindo</h1>
                            <h4>Chegou o momento de libertar o roupeiro! Ou adquirir coisas novas!</h4><br><br>
                            <a href="./sell.php" class="primary-btn" style="margin-right: 20pt;">Vender</a>
                            <a href="./shop.php" class="primary-btn">Comprar</a>
                        </div>
                    </div>
                    <!--<div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>-->
                </div>
            </div>

        </div>
    </section>
    <!-- Hero Section End -->

    <br><br>

    <style>
        .pi-pic img {
            height: 320px;
            /* set the desired height */
        }
    </style>

    <div id="artigossugeridos">

        <h1 style="font-size: 20px; font-weight: 600; margin-left:190px;">Artigos sugeridos:</h1><br><br>

        <?php

        session_start();
        include "abreconexao.php";

        if (isset($_SESSION['utilizador'])) {
            $utilizador = $_SESSION['utilizador'];

            $preferencias_query = "SELECT categoria, tamanho, marca FROM preferencias WHERE utilizador = '$utilizador'";

            $preferencias_result = $conn->query($preferencias_query);

            $categorias = array();
            $tamanhos = array();
            $marcas = array();


            if ($preferencias_result->num_rows > 0) {
                while ($preferencias = $preferencias_result->fetch_assoc()) {



                    $categoria = $preferencias["categoria"];
                    $tamanho = $preferencias["tamanho"];
                    $marca = $preferencias["marca"];

                    array_push($categorias, $categoria);
                    array_push($tamanhos, $tamanho);
                    array_push($marcas, $marca);

                }


                $categorias = implode(",", array_unique($categorias));
                $tamanhos = implode(",", array_unique($tamanhos));
                $marcas = implode(",", array_unique($marcas));


                $sql = "SELECT DISTINCT * FROM artigo WHERE categoria IN ($categorias) OR tamanho IN ($tamanhos) OR marca IN ($marcas)";

                $result = $conn->query($sql);

                echo "<div class='container'>";
                echo "<div class='row'>";
                echo "<div class='col-lg-9 order-1 order-lg-2'>";
                echo "<div class='product-list'>";
                echo "<div class='row'>";


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
                            echo "<div class='col-lg-4 col-sm-6 filtro' data-filtro='filtro1'>";
                            echo "<div class='product-item'>";
                            echo "<div class='pi-pic' style='display: flex; justify-content: center; align-items: center;'>";
                            echo "<img src='$imagem' style='display: block; margin: 0 auto;'>";
                            echo "<div class='icon icon2'>";

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
                            echo "<ul>";
                            echo "<li class='w-icon active'><button type='submit' name='comprar' class='btnpediu' style='background-color: #e7ab3c; color:white;border-style:none;height:50px;' alt='Comprar' data-artigo-id='" . $artigo_id . "'>Comprar</button></li>";
                            echo "<li class='quick-view'><button type='submit' name='quickview' class='btnpediu2' style='background-color: white; color:black;border-style:none;height:50px;'  data-artigo-id='" . $artigo_id . "'>+ Ver melhor</button></li>";
                            echo "</ul>";
                            echo "</div>";
                            echo "<div class='pi-text'>";
                            /*echo "<p style='display:none;'>" . $row["id"] . "<span id='id' name='id'></span><br>";*/
                            echo "<div class='catagory-name'>" . $categoria_nome . "</div>";
                            /*echo "<div class='size-name'>" . $tamanho_valor . "</div>";
                            echo "<div class='brand-name'>" . $marca_nome . "</div>";*/
                            /*echo "<p style='display:none;'>" . $row["estado"] . "<span id='estado' name='estado'></span><br>";*/







                            echo "<div class='favoritos-form'>";
                            echo "<form method='post' action='processa-favoritos2.php' id='favoritos-form-$artigo_id'>";
                            echo "<input type='hidden' name='artigo_id' value='" . $artigo_id . "'>";
                            echo "<input type='hidden' name='titulo' value='" . $titulo . "'>";
                            echo "<input type='hidden' name='estado' value='" . $estado . "'>";
                            echo "<input type='hidden' name='preco' value='" . $preco . "'>";
                            echo "<input type='hidden' name='vendedor' value='" . $vendedor . "'>";
                            echo "<input type='hidden' name='imagem' value='" . $imagem . "'>";
                            echo "</form>";
                            echo "</div>";






                            echo "<h5>" . $titulo . "</h5>";

                            echo "<div class='product-price'>";
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

                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }

            $conn->close();
        }


        ?>

    </div>


    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">

            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Portes grátis</h6>
                                <p>Para todos os pedidos acima de 99€</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Entrega no prazo</h6>
                                <p>Entregamos sempre a tempo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Pagamento Seguro</h6>
                                <p>Pagamento 100% seguro</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->



    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="text-center" data-aos="zoom-in">
                <h3>Créditos</h3>
                <p>Links de imagens da autoria de terceiros utilizados no projeto.</p>
                <a class="cta-btn" href="https://linktr.ee/projetoasw">Saber mais</a>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <br><br>

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