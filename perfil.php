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
                                    if(isset($_SESSION['utilizador'])){
                                        $sql = "SELECT COUNT(artigo) AS num_artigos FROM favoritos WHERE utilizador = '".$_SESSION['utilizador']."'";
                                        $result = mysqli_query($conn, $sql);
                                        if(mysqli_num_rows($result) > 0){
                                            $row = mysqli_fetch_assoc($result);
                                            echo "<span>".$row['num_artigos']."</span>";
                                        }else{
                                            echo "Usuário não encontrado";
                                        }
                                    }else{
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
                                    <img src="https://img.freepik.com/icones-gratis/arremesso-de-peso_318-867171.jpg?t=st=1679151933~exp=1679152533~hmac=4cd9bcca9cd13e04201ce04cd0fbea7c7f77a1fc040d1ac26376b1e18449ba78" alt="Profile Picture">
                        </div>


                        <?php
                        session_start();

                        include "abreconexao.php";

                        if(isset($_SESSION['utilizador'])){
                        $sql = "SELECT nome FROM utilizador WHERE email = '".$_SESSION['utilizador']."'";
                        mysqli_set_charset($conn, "utf8");
                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result) > 0){

                            $row = mysqli_fetch_assoc($result);
                            echo "<p>Nome: ".$row['nome']."</p>";
                            
                        }else{
                            echo "Usuário não encontrado";
                        }

                        }else{
                 
                        exit();
                        }
                        mysqli_close($conn);
                        ?>

                       
                            <li><a href="perfil.php">Ver perfil</a></li>
                            <li><a href="suaspreferencias.php">Preferências</a></li>
                            <li>
                                <?php
                                session_start();

                                if(isset($_SESSION['utilizador'])){
                                    echo '<form method="POST" action="sair.php">
                                            <input type="submit" value="Sair">
                                        </form>';
                                }else{
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
                        <a href="./inicial.php"><i class="fa fa-home"></i> Home</a>
                        <span>Perfil</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->


    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <div class="checkout-form register-form">
                <h2>Perfil</h2>
                <div class="row" class="">
                <form id="email2" method="post">
                        <label for="email">Introduza o seu email:</label>
                        <input type="email" id="email3" name="email" required>
                        <input class='site-btn place-btn' type="submit" value="Procurar">
                    </form>
                    <div class="col-lg-8" id="dados">
                        <div class="row">
                        
                        <?php

                        session_start();
                  
                        if(isset($_SESSION['utilizador'])) {
                            include "abreconexao.php";
                            $email = htmlspecialchars($_SESSION['utilizador']);
                            $sql = "SELECT * FROM utilizador WHERE email='$email'";
                            
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                           
                                echo "<h4>Dados Pessoais</h4>";
                                echo "<form method='POST' action='alterardados.php' id='meuForm'>";
                                echo "<div class='group-input formulario-item-50 item-esquerda'>";
                                echo "<label for='nome'>Nome:</label>";
                                echo "<input type='text' name='nome' value='" . $row["nome"] . "'>";
                                echo "</div>";
                                echo "<div class='group-input formulario-item-50'>";
                                echo "<label for='data_nascimento'>Data de Nascimento:</label>";
                                echo "<input type='date' name='data_nascimento' value='" . $row["data_nascimento"] . "'>";
                                echo "</div>";
                                echo "<div class='group-input formulario-item-50 item-esquerda'>";
                                echo "<label for='genero'>Gênero:</label>";
                                echo "<input type='text' name='genero' value='" . $row["genero"] . "'>";
                                echo "</div>";
                                echo "<div class='group-input formulario-item-50'>";
                                echo "<label for='morada'>Morada:</label>";
                                echo "<input type='text' name='morada' value='" . $row["morada"] . "'>";
                                echo "</div>";
                                echo "<div class='group-input formulario-item-50 item-esquerda'>";
                                echo "<label for='localidade'>Localidade:</label>";
                                echo "<input type='text' name='localidade' value='" . $row["localidade"] . "'>";
                                echo "</div>";
                                echo "<div class='group-input formulario-item-50'>";
                                echo "<label for='codigo_postal'>Código Postal:</label>";
                                echo "<input type='text' name='codigo_postal' value='" . $row["codigo_postal"] . "'>";
                                echo "</div>";
                                echo "<div class='group-input formulario-item-50 item-esquerda'>";
                                echo "<label for='telefone'>Telefone:</label>";
                                echo "<input type='text' name='telefone' value='" . $row["telefone"] . "'>";
                                echo "</div>";
                                echo "<div class='group-input formulario-item-50'>";
                                echo "<label for='email'>Email:</label>";
                                echo "<input type='email' name='email' value='" . $row["email"] . "'>";
                                echo "</div>";
                                /*echo "<label for='pwd'>Password:</label>";
                                echo "<input type='password' name='pwd' value='" . $row["pwd"] . "'>";*/
                                echo "<input class='site-btn place-btn' type='submit' name='submit' value='Alterar dados' id='enviar'>";
                                echo "</form>";
                                
                                echo "<style>#email2 { display: none; }</style>";
                       
                            } else {
                                echo "<h2>Nenhum resultado encontrado</h2>";
                            }

                            $conn->close();
                        }
                        
                    ?>
                
                        </div>
                    </div>

                      

                    <style>
                    .botao-enviar-carregando {
                        animation: pulsar 1s infinite;
                    }
                    
                    @keyframes pulsar {
                        0% { transform: scale(1); }
                        50% { transform: scale(1.02); }
                        100% { transform: scale(1); }
                    }
                    </style>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                    $(function() {
                        $('#enviar').click(function(e) {
                        e.preventDefault();
                        var botao = $(this);
                        botao.addClass('botao-enviar-carregando');
                        $.ajax({
                            url: 'alterardados.php',
                            type: 'POST',
                            data: $('#meuForm').serialize(),
                            success: function(response) {
                    
                            console.log(response);
                            botao.removeClass('botao-enviar-carregando');
                            }
                        });
                        });
                    });
                    </script>

            <div class="col-lg-4" id="fotoperfil" style="top:0px;">
                        
                        <div class="place-order">
                            <h4>Foto</h4>
                            <div class="order-total">
                                <div class="profile-picture" style="text-align: center;">
                                    <img src="https://img.freepik.com/icones-gratis/arremesso-de-peso_318-867171.jpg?t=st=1679151933~exp=1679152533~hmac=4cd9bcca9cd13e04201ce04cd0fbea7c7f77a1fc040d1ac26376b1e18449ba78" alt="Profile Picture">
                                  </div>

                                  <button class="change-picture site-btn place-btn">Alterar foto</button>
                                  
                                  <div id="avatar-modal" class="modal">
                                    <div class="modal-content">
                                      <span class="close">&times;</span>
                                      <h2>Escolha um avatar</h2>
                                      <div class="avatar-list">
                                        <img src="https://img.freepik.com/icones-gratis/arremesso-de-peso_318-867171.jpg?t=st=1679151933~exp=1679152533~hmac=4cd9bcca9cd13e04201ce04cd0fbea7c7f77a1fc040d1ac26376b1e18449ba78" alt="Avatar 1" class="avatar">
                                        <img src="https://img.freepik.com/icones-gratis/homem_318-860790.jpg" alt="Avatar 2" class="avatar">
                                        <img src="https://img.freepik.com/icones-gratis/homem_318-860789.jpg" alt="Avatar 3" class="avatar">
                                        <img src="https://img.freepik.com/icones-gratis/menina_318-860765.jpg" alt="Avatar 4" class="avatar">
                                        <img src="https://img.freepik.com/icones-gratis/menina_318-860766.jpg" alt="Avatar 5" class="avatar">
                                        <img src="https://img.freepik.com/icones-gratis/menina_318-860768.jpg?w=360" alt="Avatar 6" class="avatar">
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>


                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Shopping Cart Section End -->


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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>