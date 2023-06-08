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
                    <div class="breadcrumb-text product-more">
                        <a href="./inicial.php"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.php">Comprar</a>
                        <span>Sua compra</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <form method='POST' action='compra.php' class="checkout-form">
                <div class="row">
                    <div class="col-lg-6">
                        <!--<div class="checkout-content">
                            <a href="#" class="content-btn">Click Here To Login</a>
                        </div>-->
                        <h4>Detalhes da entrega</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fir">Primeiro nome<span>*</span></label>
                                <input type="text" placeholder="Primeiro nome" id="fir" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="last">Último nome<span>*</span></label>
                                <input type="text" placeholder="Último nome" id="last" required>
                            </div>
                            <!--<div class="col-lg-12">
                                <label for="cun-name">Nome da empresa</label>
                                <input type="text" id="cun-name" required>
                            </div>-->
                            <div class="col-lg-12">
                                <label for="street">Morada<span>*</span></label>
                                <input type="text" placeholder="Morada" name="morada" id="morada" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="town">Localidade<span>*</span></label>
                                <input type="text" placeholder="Localidade" name="localidade" id="localidade"
                                        required>
                            </div>
                            <div class="col-lg-12">
                                <label for="codigo_postal">Código postal<span>*</span></label>
                                <input type="text" placeholder="0000-000" name="codigo_postal" id="codigo_postal"
                                    pattern="[0-9]{4}-[0-9]{3}" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="telefone">Telefone<span>*</span></label>
                                <input type="tel" id="telefone" name="telefone" placeholder="000000000"
                                        pattern="[0-9]{9}" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="email">Email<span>*</span></label>
                                <input type="email" placeholder="Email" name="email" id="email" required>
                            </div>
                            
                            <!--<div class="col-lg-12">
                                <div class="create-item">
                                    <label for="acc-create">
                                        Create an account?
                                        <input type="checkbox" id="acc-create">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--<div class="checkout-content">
                            <input type="text" placeholder="Enter Your Coupon Code">
                        </div>-->
                        <div class="place-order">
                            <h4>Sua compra</h4>
                            <div class="order-total">

                            <style>
                                .container3 {
                                display: flex;
                                }

                                .elemento-1 {
                                width: 30%;
                                }

                                .elemento-3 {
                                width: 10%;
                                }

                                .elemento-2{
                                width: 60%;
                                margin-left: 20px;
                                text-align: left;
                                }

                            </style>
                                

                                    <?php

                                    session_start();
                                    include "abreconexao.php";

                                    if(isset($_SESSION['utilizador'])){
                                        $utilizador = $_SESSION['utilizador'];
                            
                                        $preferencias_query = "SELECT * FROM escolha WHERE utilizador_comprador = '".$_SESSION['utilizador']."' AND id = (SELECT MAX(id) FROM escolha)";
                                       
                                        $preferencias_result = $conn->query($preferencias_query);   
                                    
                            
                                        if($preferencias_result->num_rows > 0) {
                                        while($preferencias = $preferencias_result->fetch_assoc()) { 
                            
                                            $utilizador_comprador = $preferencias["utilizador_comprador"];
                                            $utilizador_vendedor = $preferencias["utilizador_vendedor"];
                                            $artigo_id = $preferencias["artigo"];
                            
                                            $sql = "SELECT * FROM artigo WHERE id = '$artigo_id'";
                                       
                                            $result = $conn->query($sql);
                        
                                                         
                                            if($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
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
                                                    $vendedor = $row["vendedor"];
                            
                                                    $artigo_id = $row["id"];
                                                    $sql2 = "SELECT nome, conteudo FROM imagens WHERE id = $artigo_id";
                                                    $result2 = mysqli_query($conn, $sql2);
                            
                            
                                                    if(mysqli_num_rows($result2) > 0) {
                                                        while($row = mysqli_fetch_array($result2)) {
                                                            $nome = $row['nome'];
                                                            $conteudo = $row['conteudo'];
                                                            $tipo = pathinfo($nome, PATHINFO_EXTENSION);
                                                            $base64 = base64_encode($conteudo);
                                                            $imagem = "data:image/$tipo;base64,$base64";
                                            
                                                        }


                                                            echo "<div class='col-lg-11 text-right col-md-6 container3'>";
                                                            echo "<ul class='nav-right'>";
                                                            echo "<div class='cart-hover'>";
                                                            echo "<div class='select-items'>";
                                                            echo "<table>";
                                                            echo "<tbody>";
                                                            echo "<tr>";
                                                            echo "<td class='si-pic elemento-1'><img src='$imagem'></td>";
                                                            echo "<td class='si-text'>";
                                                            echo "<div class='product-selected elemento-2'>";
                                                            echo "<p>" . $preco . "€</p>";
                                                            echo "<h6>" . $titulo . "</h6>";
                                                            echo "</div>";
                                                            echo "</td>";
                                                            echo "<td class='si-close elemento-3'>";
                                                            echo "<i class='ti-close'></i>";
                                                            echo "</td>";
                                                            echo "</tr>";
                                                            echo "</tbody>";
                                                            echo "</table>";
                                                            echo "</div>";
                                                            echo "</div>";   
                                                            echo "</ul>";
                                                            echo "</div>";

                                                            
                                                            
                                                            echo "<input type='hidden' name='artigo_id' value='" . $artigo_id . "'>";
                                                            echo "<input type='hidden' name='titulo' value='" . $titulo . "'>";
                                                            echo "<input type='hidden' name='preco' value='" . $preco . "'>";
                                                            echo "<input type='hidden' name='vendedor' value='" . $vendedor . "'>";      
                                                            echo "<br><br>";
                                                            echo "<button type='submit' class='order-btn' style='display: block;margin: 0 auto;background-color:black;color:white;border-style:none;height:40px; width:30%;'>Comprar</button>";
                                                            
                                                            
                                                    
                                                        
                                                    } else {
                                                        echo "Nenhuma imagem encontrada para este artigo.";
                                                    } 
                                                }
                                            } else {
                                                echo "<h2>Nenhum resultado encontrado</h2>";
                                            }
                                        }}
                            
                                        $conn->close();
                                    }
                            
                        ?>
                                 <br><br>     
                                <!--<div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            Cheque Payment
                                            <input type="checkbox" id="pc-check">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Paypal
                                            <input type="checkbox" id="pc-paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>-->
                                
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