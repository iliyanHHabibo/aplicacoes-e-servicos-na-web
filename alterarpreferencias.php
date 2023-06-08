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
                            <!--<li class="heart-icon">
                                <a href="#">
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
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="img/select-product-1.jpg" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic"><img src="img/select-product-2.jpg" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$120.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="shopping-cart.php" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>-->
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
                        <li><a href="./contact.php">Apoio ao Cliente</a></li>
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
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Preferências</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->


    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Preferências</h2>
                        <p style="display:none;">Seu email: <span id="selected" name="selected"></span><br>
                        <p>Por favor preencha este formulário para criar a sua conta.</p><br>
                       
                        <form action="processa_formulario2.php" method="post">
    
                        <script>
                        const selectedSpan = document.getElementById('selected');
                        const selected = localStorage.getItem('selected');
                        
                        selectedSpan.textContent = selected;

                        </script>


                        <input type="hidden" id="emailSelec" name="emailSelec">

                        <!-- Script para obter o valor do email selecionado e atribuí-lo ao input hidden -->
                        <script>
                        // Obtém o valor do elemento span com id "selectedEmail"
                        var emailSelec = document.getElementById("selected").textContent;

                        // Define o valor do input hidden com o email selecionado
                        document.getElementById("emailSelec").value = emailSelec;
                        </script>

                        <div class="group-input group-input2">
                                    <label for="categoria">Categoria:</label>
                                    <select id="categoria">
                                        <option value="">Selecione uma opção</option>
                                        <option value="mulher">Mulher</option>
                                        <option value="homem">Homem</option>
                                        <option value="crianca">Criança</option>
                                        <option value="unissexo">Unissexo</option>
                                    </select>

                                    <select id="mulher">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao1_5">Tudo</option>
                                        <option value="vestuariomulher">Vestuário</option>
                                        <option value="calcadomulher">Calçado</option>
                                        <option value="acessoriosmulher">Acessórios</option>
                                        <option value="malasmulher">Malas</option>
                                    </select>

                                    <select id="vestuariomulher" name="vestuariomulher">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao4_1">Tudo</option>
                                        <option value="1">Camisolas e sweaters</option>
                                        <option value="2">Tops e tshirts</option>
                                        <option value="3">Casacos</option>
                                        <option value="4">Fatos e blazers</option>
                                        <option value="5">Macacões</option>
                                        <option value="6">Vestidos</option>
                                        <option value="7">Saias</option>
                                        <option value="8">Calças e leggings</option>
                                        <option value="9">Calças de ganga</option>
                                        <option value="10">Calções</option>
                                        <option value="11">Vestuário de banho</option>
                                        <option value="12">Vestuário de maternidade</option>
                                        <option value="13">Trajes e roupas especiais</option>
                                        <option value="14">Outros</option>
                                    </select>

                                    <select id="calcadomulher" name="calcadomulher">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao8_1">Tudo</option>
                                        <option value="15">Botas</option>
                                        <option value="16">Calçado desportivo</option>
                                        <option value="17">Calçado tradicional</option>
                                        <option value="18">Chinelos</option>
                                        <option value="19">Pantufas</option>
                                        <option value="20">Sapatilhas</option>
                                        <option value="21">Sapatos de salto</option>
                                        <option value="22">Sapatos rasos</option>
                                        <option value="23">Sandálias</option>
                                        <option value="24">Outros</option>
                                    </select>

                                    <select id="acessoriosmulher" name="acessoriosmulher">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao10_1">Tudo</option>
                                        <option value="25">Acessórios para o cabelo</option>
                                        <option value="26">Bonés e chapéus</option>
                                        <option value="27">Cachecóis e lenços</option>
                                        <option value="28">Cintos</option>
                                        <option value="29">Guarda-chuva</option>
                                        <option value="30">Joias</option>
                                        <option value="31">Luvas</option>
                                        <option value="32">Óculos de sol</option>
                                        <option value="33">Porta chaves</option>
                                        <option value="34">Relógios</option>
                                        <option value="35">Outros</option>
                                    </select>

                                    <select id="malasmulher" name="malasmulher">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao12_1">Tudo</option>
                                        <option value="36">Bolsas</option>
                                        <option value="37">Bolsas de cintura</option>
                                        <option value="38">Bolsas de viagem</option>
                                        <option value="39">Carteiras</option>
                                        <option value="40">Malas a tiracolo</option>
                                        <option value="41">Malas de maquilhagem</option>
                                        <option value="42">Malas de viagem</option>
                                        <option value="43">Mochilas</option>
                                        <option value="44">Sacos</option>
                                        <option value="45">Outros</option>
                                    </select>

                                    <select id="homem">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao2_5">Tudo</option>
                                        <option value="vestuariohomem">Vestuário</option>
                                        <option value="calcadohomem">Calçado</option>
                                        <option value="acessorioshomem">Acessórios</option>
                                        <option value="malashomem">Malas</option>
                                    </select>

                                    <select id="vestuariohomem" name="vestuariohomem">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao5_1">Tudo</option>
                                        <option value="46">Camisolas e sweaters</option>
                                        <option value="47">Tops e tshirts</option>
                                        <option value="48">Casacos</option>
                                        <option value="49">Fatos e blazers</option>
                                        <option value="50">Calças</option>
                                        <option value="51">Calças de ganga</option>
                                        <option value="52">Calções</option>
                                        <option value="53">Meias</option>
                                        <option value="54">Vestuário de banho</option>
                                        <option value="55">Trajes e roupas especiais</option>
                                        <option value="56">Outros</option>
                                    </select>

                                    <select id="calcadohomem" name="calcadohomem">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao9_1">Tudo</option>
                                        <option value="57">Botas</option>
                                        <option value="58">Calçado desportivo</option>
                                        <option value="59">Calçado tradicional</option>
                                        <option value="60">Chinelos</option>
                                        <option value="61">Pantufas</option>
                                        <option value="62">Sapatilhas</option>
                                        <option value="63">Sapatos formais</option>
                                        <option value="64">Sapatos vela</option>
                                        <option value="65">Sandálias</option>
                                        <option value="66">Outros</option>
                                    </select>

                                    <select id="acessorioshomem" name="acessorioshomem">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao11_1">Tudo</option>
                                        <option value="67">Bonés e chapéus</option>
                                        <option value="68">Cachecóis e lenços</option>
                                        <option value="69">Cintos</option>
                                        <option value="70">Gravatas</option>
                                        <option value="71">Guarda-chuva</option>
                                        <option value="72">Joias</option>
                                        <option value="73">Lenços de bolso</option>
                                        <option value="74">Luvas</option>
                                        <option value="75">Óculos de sol</option>
                                        <option value="76">Porta chaves</option>
                                        <option value="77">Relógios</option>
                                        <option value="78">Outros</option>
                                    </select>

                                    <select id="malashomem" name="malashomem">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao13_1">Tudo</option>
                                        <option value="79">Bolsas</option>
                                        <option value="80">Bolsas de cintura</option>
                                        <option value="81">Bolsas de viagem</option>
                                        <option value="82">Carteiras</option>
                                        <option value="83">Malas a tiracolo</option>
                                        <option value="84">Malas de viagem</option>
                                        <option value="85">Mochilas</option>
                                        <option value="86">Sacos</option>
                                        <option value="87">Outros</option>
                                    </select>

                                    <select id="crianca">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao3_5">Tudo</option>
                                        <option value="vestuariorapariga">Vestuário para rapariga</option>
                                        <option value="vestuariorapaz">Vestuário para rapaz</option>
                                        <option value="brinquedos">Brinquedos</option>
                                        <option value="veiculosbrincar">Veiculos de brincar</option>
                                    </select>

                                    <select id="vestuariorapariga" name="vestuariorapariga">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao6_1">Tudo</option>
                                        <option value="88">Acessórios</option>
                                        <option value="89">Calças e calções</option>
                                        <option value="90">Camisolas e hoodies</option>
                                        <option value="91">Disfarces e vestuário de fantasia</option>
                                        <option value="92">Malas e mochilas</option>
                                        <option value="93">Pijamas</option>
                                        <option value="94">Roupa interior e meias</option>
                                        <option value="95">Roupa para bebé</option>
                                        <option value="96">Saias</option>
                                        <option value="97">Sapatos</option>
                                        <option value="98">Tops e tshirts</option>
                                        <option value="99">Vestidos</option>
                                        <option value="100">Vestuário de banho</option>
                                        <option value="101">Vestuário desportivo</option>
                                        <option value="102">Vestuário formal</option>
                                        <option value="103">Vestuário para gémeos</option>
                                        <option value="104">Outros</option>
                                    </select>

                                    <select id="vestuariorapaz" name="vestuariorapaz">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao7_1">Tudo</option>
                                        <option value="105">Acessórios</option>
                                        <option value="106">Calças e calções</option>
                                        <option value="107">Camisolas e hoodies</option>
                                        <option value="108">Disfarces e vestuário de fantasia</option>
                                        <option value="109">Malas e mochilas</option>
                                        <option value="110">Pijamas</option>
                                        <option value="111">Roupa interior e meias</option>
                                        <option value="112">Roupa para bebé</option>
                                        <option value="113">Sapatos</option>
                                        <option value="114">Tops e tshirts</option>
                                        <option value="115">Vestuário de banho</option>
                                        <option value="116">Vestuário desportivo</option>
                                        <option value="117">Vestuário formal</option>
                                        <option value="118">Vestuário para gémeos</option>
                                        <option value="119">Outros</option>
                                    </select>

                                    <select id="brinquedos" name="brinquedos">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao14_1">Tudo</option>
                                        <option value="120">Bonecas</option>
                                        <option value="121">Brinquedos educativos</option>
                                        <option value="122">Brinquedos de construção</option>
                                        <option value="123">Brinquedos para dormir</option>
                                        <option value="124">Brinquedos musicais</option>
                                        <option value="125">Brinquedos de madeira</option>
                                        <option value="126">Brinquedos para água</option>
                                        <option value="127">Brinquedos de cozinha</option>
                                        <option value="128">Figuras de ação</option>
                                        <option value="129">Jogos eletrónicos</option>
                                        <option value="130">Outros</option>
                                    </select>

                                    <select id="veiculosbrincar" name="veiculosbrincar">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao15_1">Tudo</option>
                                        <option value="131">Brinquedos para empurrar</option>
                                        <option value="132">Trotinetes</option>
                                        <option value="133">Trenós, esquis e pranchas de neve</option>
                                        <option value="134">Bicicletas</option>
                                        <option value="135">Triciclos</option>
                                        <option value="136">Outros</option>
                                    </select>

                                    <select id="unissexo">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao2_5">Tudo</option>
                                        <option value="vestuariouni">Vestuário</option>
                                        <option value="calcadouni">Calçado</option>
                                        <option value="acessoriosuni">Acessórios</option>
                                        <option value="malasuni">Malas</option>
                                    </select>

                                    <select id="vestuariouni" name="vestuariouni">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao5_1">Tudo</option>
                                        <option value="137">Camisolas e sweaters</option>
                                        <option value="138">Tops e tshirts</option>
                                        <option value="139">Casacos</option>
                                        <option value="140">Fatos e blazers</option>
                                        <option value="141">Calças</option>
                                        <option value="142">Calças de ganga</option>
                                        <option value="143">Calções</option>
                                        <option value="144">Meias</option>
                                        <option value="145">Vestuário de banho</option>
                                        <option value="146">Trajes e roupas especiais</option>
                                        <option value="147">Outros</option>
                                    </select>

                                    <select id="calcadouni" name="calcadouni">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao9_1">Tudo</option>
                                        <option value="148">Botas</option>
                                        <option value="149">Calçado desportivo</option>
                                        <option value="150">Calçado tradicional</option>
                                        <option value="151">Chinelos</option>
                                        <option value="152">Pantufas</option>
                                        <option value="153">Sapatilhas</option>
                                        <option value="154">Sapatos formais</option>
                                        <option value="155">Sapatos vela</option>
                                        <option value="156">Sandálias</option>
                                        <option value="157">Outros</option>
                                    </select>

                                    <select id="acessoriosuni" name="acessoriosuni">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao11_1">Tudo</option>
                                        <option value="158">Bonés e chapéus</option>
                                        <option value="159">Cachecóis e lenços</option>
                                        <option value="160">Cintos</option>
                                        <option value="161">Gravatas</option>
                                        <option value="162">Guarda-chuva</option>
                                        <option value="163">Joias</option>
                                        <option value="164">Lenços de bolso</option>
                                        <option value="165">Luvas</option>
                                        <option value="166">Óculos de sol</option>
                                        <option value="167">Porta chaves</option>
                                        <option value="168">Relógios</option>
                                        <option value="169">Outros</option>
                                    </select>

                                    <select id="malasuni" name="malasuni">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao13_1">Tudo</option>
                                        <option value="170">Bolsas</option>
                                        <option value="171">Bolsas de cintura</option>
                                        <option value="172">Bolsas de viagem</option>
                                        <option value="173">Carteiras</option>
                                        <option value="174">Malas a tiracolo</option>
                                        <option value="175">Malas de viagem</option>
                                        <option value="176">Mochilas</option>
                                        <option value="177">Sacos</option>
                                        <option value="178">Outros</option>
                                    </select>

                                </div>

                            <div class="site-btn2" id="add-category">Adicionar Categoria</div>

                            <script>
                            document.getElementById("add-category").addEventListener("click", function() {
                                document.getElementById("category-selects").style.display = "block";
                            });
                            document.getElementById("add-category").addEventListener("click", function() {
                                document.getElementById("add-category").style.display = "none";
                            });
                            </script>

                                    <div id="category-selects" style="display: none;">
                                    <!--<form method="POST">-->
                                    <div class="group-input group-input2">
                                        <label for="categoria2">Categoria:</label>
                                    <select id="categoria2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="mulher2">Mulher</option>
                                        <option value="homem2">Homem</option>
                                        <option value="crianca2">Criança</option>
                                        <option value="unissexo2">Unissexo</option>
                                    </select>

                                    <select id="mulher2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao1_5">Tudo</option>
                                        <option value="vestuariomulher2">Vestuário</option>
                                        <option value="calcadomulher2">Calçado</option>
                                        <option value="acessoriosmulher2">Acessórios</option>
                                        <option value="malasmulher2">Malas</option>
                                    </select>

                                    <select id="vestuariomulher2" name="vestuariomulher2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao4_1">Tudo</option>
                                        <option value="1">Camisolas e sweaters</option>
                                        <option value="2">Tops e tshirts</option>
                                        <option value="3">Casacos</option>
                                        <option value="4">Fatos e blazers</option>
                                        <option value="5">Macacões</option>
                                        <option value="6">Vestidos</option>
                                        <option value="7">Saias</option>
                                        <option value="8">Calças e leggings</option>
                                        <option value="9">Calças de ganga</option>
                                        <option value="10">Calções</option>
                                        <option value="11">Vestuário de banho</option>
                                        <option value="12">Vestuário de maternidade</option>
                                        <option value="13">Trajes e roupas especiais</option>
                                        <option value="14">Outros</option>
                                    </select>

                                    <select id="calcadomulher2" name="calcadomulher2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao8_1">Tudo</option>
                                        <option value="15">Botas</option>
                                        <option value="16">Calçado desportivo</option>
                                        <option value="17">Calçado tradicional</option>
                                        <option value="18">Chinelos</option>
                                        <option value="19">Pantufas</option>
                                        <option value="20">Sapatilhas</option>
                                        <option value="21">Sapatos de salto</option>
                                        <option value="22">Sapatos rasos</option>
                                        <option value="23">Sandálias</option>
                                        <option value="24">Outros</option>
                                    </select>

                                    <select id="acessoriosmulher2" name="acessoriosmulher2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao10_1">Tudo</option>
                                        <option value="25">Acessórios para o cabelo</option>
                                        <option value="26">Bonés e chapéus</option>
                                        <option value="27">Cachecóis e lenços</option>
                                        <option value="28">Cintos</option>
                                        <option value="29">Guarda-chuva</option>
                                        <option value="30">Joias</option>
                                        <option value="31">Luvas</option>
                                        <option value="32">Óculos de sol</option>
                                        <option value="33">Porta chaves</option>
                                        <option value="34">Relógios</option>
                                        <option value="35">Outros</option>
                                    </select>

                                    <select id="malasmulher2" name="malasmulher2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao12_1">Tudo</option>
                                        <option value="36">Bolsas</option>
                                        <option value="37">Bolsas de cintura</option>
                                        <option value="38">Bolsas de viagem</option>
                                        <option value="39">Carteiras</option>
                                        <option value="40">Malas a tiracolo</option>
                                        <option value="41">Malas de maquilhagem</option>
                                        <option value="42">Malas de viagem</option>
                                        <option value="43">Mochilas</option>
                                        <option value="44">Sacos</option>
                                        <option value="45">Outros</option>
                                    </select>

                                    <select id="homem2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao2_5">Tudo</option>
                                        <option value="vestuariohomem2">Vestuário</option>
                                        <option value="calcadohomem2">Calçado</option>
                                        <option value="acessorioshomem2">Acessórios</option>
                                        <option value="malashomem2">Malas</option>
                                    </select>

                                    <select id="vestuariohomem2" name="vestuariohomem2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao5_1">Tudo</option>
                                        <option value="46">Camisolas e sweaters</option>
                                        <option value="47">Tops e tshirts</option>
                                        <option value="48">Casacos</option>
                                        <option value="49">Fatos e blazers</option>
                                        <option value="50">Calças</option>
                                        <option value="51">Calças de ganga</option>
                                        <option value="52">Calções</option>
                                        <option value="53">Meias</option>
                                        <option value="54">Vestuário de banho</option>
                                        <option value="55">Trajes e roupas especiais</option>
                                        <option value="56">Outros</option>
                                    </select>

                                    <select id="calcadohomem2" name="calcadohomem2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao9_1">Tudo</option>
                                        <option value="57">Botas</option>
                                        <option value="58">Calçado desportivo</option>
                                        <option value="59">Calçado tradicional</option>
                                        <option value="60">Chinelos</option>
                                        <option value="61">Pantufas</option>
                                        <option value="62">Sapatilhas</option>
                                        <option value="63">Sapatos formais</option>
                                        <option value="64">Sapatos vela</option>
                                        <option value="65">Sandálias</option>
                                        <option value="66">Outros</option>
                                    </select>

                                    <select id="acessorioshomem2" name="acessorioshomem2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao11_1">Tudo</option>
                                        <option value="67">Bonés e chapéus</option>
                                        <option value="68">Cachecóis e lenços</option>
                                        <option value="69">Cintos</option>
                                        <option value="70">Gravatas</option>
                                        <option value="71">Guarda-chuva</option>
                                        <option value="72">Joias</option>
                                        <option value="73">Lenços de bolso</option>
                                        <option value="74">Luvas</option>
                                        <option value="75">Óculos de sol</option>
                                        <option value="76">Porta chaves</option>
                                        <option value="77">Relógios</option>
                                        <option value="78">Outros</option>
                                    </select>

                                    <select id="malashomem2" name="malashomem2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao13_1">Tudo</option>
                                        <option value="79">Bolsas</option>
                                        <option value="80">Bolsas de cintura</option>
                                        <option value="81">Bolsas de viagem</option>
                                        <option value="82">Carteiras</option>
                                        <option value="83">Malas a tiracolo</option>
                                        <option value="84">Malas de viagem</option>
                                        <option value="85">Mochilas</option>
                                        <option value="86">Sacos</option>
                                        <option value="87">Outros</option>
                                    </select>

                                    <select id="crianca2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao3_5">Tudo</option>
                                        <option value="vestuariorapariga2">Vestuário para rapariga</option>
                                        <option value="vestuariorapaz2">Vestuário para rapaz</option>
                                        <option value="brinquedos2">Brinquedos</option>
                                        <option value="veiculosbrincar2">Veiculos de brincar</option>
                                    </select>

                                    <select id="vestuariorapariga2" name="vestuariorapariga2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao6_1">Tudo</option>
                                        <option value="88">Acessórios</option>
                                        <option value="89">Calças e calções</option>
                                        <option value="90">Camisolas e hoodies</option>
                                        <option value="91">Disfarces e vestuário de fantasia</option>
                                        <option value="92">Malas e mochilas</option>
                                        <option value="93">Pijamas</option>
                                        <option value="94">Roupa interior e meias</option>
                                        <option value="95">Roupa para bebé</option>
                                        <option value="96">Saias</option>
                                        <option value="97">Sapatos</option>
                                        <option value="98">Tops e tshirts</option>
                                        <option value="99">Vestidos</option>
                                        <option value="100">Vestuário de banho</option>
                                        <option value="101">Vestuário desportivo</option>
                                        <option value="102">Vestuário formal</option>
                                        <option value="103">Vestuário para gémeos</option>
                                        <option value="104">Outros</option>
                                    </select>

                                    <select id="vestuariorapaz2" name="vestuariorapaz2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao7_1">Tudo</option>
                                        <option value="105">Acessórios</option>
                                        <option value="106">Calças e calções</option>
                                        <option value="107">Camisolas e hoodies</option>
                                        <option value="108">Disfarces e vestuário de fantasia</option>
                                        <option value="109">Malas e mochilas</option>
                                        <option value="110">Pijamas</option>
                                        <option value="111">Roupa interior e meias</option>
                                        <option value="112">Roupa para bebé</option>
                                        <option value="113">Sapatos</option>
                                        <option value="114">Tops e tshirts</option>
                                        <option value="115">Vestuário de banho</option>
                                        <option value="116">Vestuário desportivo</option>
                                        <option value="117">Vestuário formal</option>
                                        <option value="118">Vestuário para gémeos</option>
                                        <option value="119">Outros</option>
                                    </select>

                                    <select id="brinquedos2" name="brinquedos2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao14_1">Tudo</option>
                                        <option value="120">Bonecas</option>
                                        <option value="121">Brinquedos educativos</option>
                                        <option value="122">Brinquedos de construção</option>
                                        <option value="123">Brinquedos para dormir</option>
                                        <option value="124">Brinquedos musicais</option>
                                        <option value="125">Brinquedos de madeira</option>
                                        <option value="126">Brinquedos para água</option>
                                        <option value="127">Brinquedos de cozinha</option>
                                        <option value="128">Figuras de ação</option>
                                        <option value="129">Jogos eletrónicos</option>
                                        <option value="130">Outros</option>
                                    </select>

                                    <select id="veiculosbrincar2" name="veiculosbrincar2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao15_1">Tudo</option>
                                        <option value="131">Brinquedos para empurrar</option>
                                        <option value="132">Trotinetes</option>
                                        <option value="133">Trenós, esquis e pranchas de neve</option>
                                        <option value="134">Bicicletas</option>
                                        <option value="135">Triciclos</option>
                                        <option value="136">Outros</option>
                                    </select>

                                    <select id="unissexo2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao2_5">Tudo</option>
                                        <option value="vestuariouni2">Vestuário</option>
                                        <option value="calcadouni2">Calçado</option>
                                        <option value="acessoriosuni2">Acessórios</option>
                                        <option value="malasuni2">Malas</option>
                                    </select>

                                    <select id="vestuariouni2" name="vestuariouni2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao5_1">Tudo</option>
                                        <option value="137">Camisolas e sweaters</option>
                                        <option value="138">Tops e tshirts</option>
                                        <option value="139">Casacos</option>
                                        <option value="140">Fatos e blazers</option>
                                        <option value="141">Calças</option>
                                        <option value="142">Calças de ganga</option>
                                        <option value="143">Calções</option>
                                        <option value="144">Meias</option>
                                        <option value="145">Vestuário de banho</option>
                                        <option value="146">Trajes e roupas especiais</option>
                                        <option value="147">Outros</option>
                                    </select>

                                    <select id="calcadouni2" name="calcadouni2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao9_1">Tudo</option>
                                        <option value="148">Botas</option>
                                        <option value="149">Calçado desportivo</option>
                                        <option value="150">Calçado tradicional</option>
                                        <option value="151">Chinelos</option>
                                        <option value="152">Pantufas</option>
                                        <option value="153">Sapatilhas</option>
                                        <option value="154">Sapatos formais</option>
                                        <option value="155">Sapatos vela</option>
                                        <option value="156">Sandálias</option>
                                        <option value="157">Outros</option>
                                    </select>

                                    <select id="acessoriosuni2" name="acessoriosuni2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao11_1">Tudo</option>
                                        <option value="158">Bonés e chapéus</option>
                                        <option value="159">Cachecóis e lenços</option>
                                        <option value="160">Cintos</option>
                                        <option value="161">Gravatas</option>
                                        <option value="162">Guarda-chuva</option>
                                        <option value="163">Joias</option>
                                        <option value="164">Lenços de bolso</option>
                                        <option value="165">Luvas</option>
                                        <option value="166">Óculos de sol</option>
                                        <option value="167">Porta chaves</option>
                                        <option value="168">Relógios</option>
                                        <option value="169">Outros</option>
                                    </select>

                                    <select id="malasuni2" name="malasuni2">
                                        <option value="">Selecione uma opção</option>
                                        <option value="opcao13_1">Tudo</option>
                                        <option value="170">Bolsas</option>
                                        <option value="171">Bolsas de cintura</option>
                                        <option value="172">Bolsas de viagem</option>
                                        <option value="173">Carteiras</option>
                                        <option value="174">Malas a tiracolo</option>
                                        <option value="175">Malas de viagem</option>
                                        <option value="176">Mochilas</option>
                                        <option value="177">Sacos</option>
                                        <option value="178">Outros</option>
                                    </select>

                                </div>
                                        <br>
                                    <!--</form>-->
                                    </div>

                                    <hr id="hr2">

                            <div class="group-input group-input2">
                                <label for="tamanho">Tamanho:</label>
                                <select id="tamanho">
                                    <option value="">Selecione uma opção</option>
                                    <option value="bebe">Bebé</option>
                                    <option value="criancat">Criança</option>
                                    <option value="adulto">Adulto</option>
                                    <option value="55">Diversos</option>
                                </select>

                                <select id="bebe">
                                    <option value="">Selecione uma opção</option>
                                    <option value="bebevestuario">Vestuário</option>
                                    <option value="bebecalcado">Calçado</option>
                                </select>

                                <select id="bebevestuario" name="bebevestuario">
                                    <option value="">Selecione uma opção</option>
                                    <option value="1">3 meses</option>
                                    <option value="2">6 meses</option>
                                    <option value="3">9 meses</option>
                                    <option value="4">12 meses</option>
                                    <option value="5">18 meses</option>
                                    <option value="6">24 meses</option>
                                    <option value="7">36 meses</option>
                                </select>

                                <select id="bebecalcado" name="bebecalcado">
                                    <option value="">Selecione uma opção</option>
                                    <option value="22">17</option>
                                    <option value="23">18</option>
                                    <option value="24">19</option>
                                    <option value="25">20</option>
                                    <option value="26">21</option>
                                    <option value="27">22</option>
                                </select>

                                <select id="criancat">
                                    <option value="">Selecione uma opção</option>
                                    <option value="criancavestuario">Vestuário</option>
                                    <option value="criancacalcado">Calçado</option>
                                </select>

                                <select id="criancavestuario" name="criancavestuario">
                                    <option value="">Selecione uma opção</option>
                                    <option value="8">3 anos</option>
                                    <option value="9">4 anos</option>
                                    <option value="10">5 anos</option>
                                    <option value="11">6 anos</option>
                                    <option value="12">8 anos</option>
                                    <option value="13">10 anos</option>
                                    <option value="14">12 anos</option>
                                    <option value="15">14 anos</option>
                                </select>

                                <select id="criancacalcado" name="criancacalcado">
                                    <option value="">Selecione uma opção</option>
                                    <option value="28">23</option>
                                    <option value="29">24</option>
                                    <option value="30">25</option>
                                    <option value="31">26</option>
                                    <option value="32">27</option>
                                    <option value="33">28</option>
                                    <option value="34">29</option>
                                    <option value="35">30</option>
                                    <option value="36">31</option>
                                    <option value="37">32</option>
                                    <option value="38">33</option>
                                    <option value="39">34</option>
                                </select>

                                <select id="adulto">
                                    <option value="">Selecione uma opção</option>
                                    <option value="adultovestuario">Vestuário</option>
                                    <option value="adultocalcado">Calçado</option>
                                </select>

                                <select id="adultovestuario" name="adultovestuario">
                                    <option value="">Selecione uma opção</option>
                                    <option value="16">XS</option>
                                    <option value="17">S</option>
                                    <option value="18">M</option>
                                    <option value="19">L</option>
                                    <option value="20">XL</option>
                                    <option value="21">XXL</option>
                                </select>

                                <select id="adultocalcado" name="adultocalcado">
                                    <option value="">Selecione uma opção</option>
                                    <option value="40">35</option>
                                    <option value="41">36</option>
                                    <option value="42">37</option>
                                    <option value="43">38</option>
                                    <option value="44">39</option>
                                    <option value="45">40</option>
                                    <option value="46">41</option>
                                    <option value="47">42</option>
                                    <option value="48">43</option>
                                    <option value="49">44</option>
                                    <option value="50">45</option>
                                    <option value="51">46</option>
                                    <option value="52">47</option>
                                    <option value="53">48</option>
                                    <option value="54">>48</option>
                                </select>
                            </div>

                            <div class="site-btn2" id="add-size">Adicionar Tamanho</div>

                            <script>
                            document.getElementById("add-size").addEventListener("click", function() {
                                document.getElementById("size-selects").style.display = "block";});
                            document.getElementById("add-size").addEventListener("click", function() {
                                document.getElementById("add-size").style.display = "none";
                            });
                            </script>

                            <div id="size-selects" style="display: none;">
                                    <!--<form method="POST">-->
                                    <div class="group-input group-input2">
                                <label for="tamanho2">Tamanho:</label>
                                <select id="tamanho2">
                                    <option value="">Selecione uma opção</option>
                                    <option value="bebe2">Bebé</option>
                                    <option value="criancat2">Criança</option>
                                    <option value="adulto2">Adulto</option>
                                    <option value="55">Diversos</option>
                                </select>

                                <select id="bebe2">
                                    <option value="">Selecione uma opção</option>
                                    <option value="bebevestuario2">Vestuário</option>
                                    <option value="bebecalcado2">Calçado</option>
                                </select>

                                <select id="bebevestuario2" name="bebevestuario2">
                                    <option value="">Selecione uma opção</option>
                                    <option value="1">3 meses</option>
                                    <option value="2">6 meses</option>
                                    <option value="3">9 meses</option>
                                    <option value="4">12 meses</option>
                                    <option value="5">18 meses</option>
                                    <option value="6">24 meses</option>
                                    <option value="7">36 meses</option>
                                </select>

                                <select id="bebecalcado2" name="bebecalcado2">
                                    <option value="">Selecione uma opção</option>
                                    <option value="22">17</option>
                                    <option value="23">18</option>
                                    <option value="24">19</option>
                                    <option value="25">20</option>
                                    <option value="26">21</option>
                                    <option value="27">22</option>
                                </select>

                                <select id="criancat2">
                                    <option value="">Selecione uma opção</option>
                                    <option value="criancavestuario2">Vestuário</option>
                                    <option value="criancacalcado2">Calçado</option>
                                </select>

                                <select id="criancavestuario2" name="criancavestuario2">
                                    <option value="">Selecione uma opção</option>
                                    <option value="8">3 anos</option>
                                    <option value="9">4 anos</option>
                                    <option value="10">5 anos</option>
                                    <option value="11">6 anos</option>
                                    <option value="12">8 anos</option>
                                    <option value="13">10 anos</option>
                                    <option value="14">12 anos</option>
                                    <option value="15">14 anos</option>
                                </select>

                                <select id="criancacalcado2" name="criancacalcado2">
                                    <option value="">Selecione uma opção</option>
                                    <option value="28">23</option>
                                    <option value="29">24</option>
                                    <option value="30">25</option>
                                    <option value="31">26</option>
                                    <option value="32">27</option>
                                    <option value="33">28</option>
                                    <option value="34">29</option>
                                    <option value="35">30</option>
                                    <option value="36">31</option>
                                    <option value="37">32</option>
                                    <option value="38">33</option>
                                    <option value="39">34</option>
                                </select>

                                <select id="adulto2">
                                    <option value="">Selecione uma opção</option>
                                    <option value="adultovestuario2">Vestuário</option>
                                    <option value="adultocalcado2">Calçado</option>
                                </select>

                                <select id="adultovestuario2" name="adultovestuario2">
                                    <option value="">Selecione uma opção</option>
                                    <option value="16">XS</option>
                                    <option value="17">S</option>
                                    <option value="18">M</option>
                                    <option value="19">L</option>
                                    <option value="20">XL</option>
                                    <option value="21">XXL</option>
                                </select>

                                <select id="adultocalcado2" name="adultocalcado2">
                                    <option value="">Selecione uma opção</option>
                                    <option value="40">35</option>
                                    <option value="41">36</option>
                                    <option value="42">37</option>
                                    <option value="43">38</option>
                                    <option value="44">39</option>
                                    <option value="45">40</option>
                                    <option value="46">41</option>
                                    <option value="47">42</option>
                                    <option value="48">43</option>
                                    <option value="49">44</option>
                                    <option value="50">45</option>
                                    <option value="51">46</option>
                                    <option value="52">47</option>
                                    <option value="53">48</option>
                                    <option value="54">>48</option>
                                </select>
                            </div>
                                        <br>
                                    <!--</form>-->
                                    </div>

                            <hr id="hr2">

                            <div class="group-input group-input2">
                                <label for="marca">Marca:</label>
                                <?php
                                    include "abreconexao.php";

                                    $sql = "SELECT id, nome FROM marca";
                                    mysqli_set_charset($conn, "utf8");

                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        echo "<select name='marcaid'>";
                                        echo "<option value=''>Selecione uma opção</option>";
                                        while($row = $result->fetch_assoc()) {
                                            echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
                                            if ($row["nome"] == $_POST["marca"]) {
                                                $marcaid = $row["id"];
                                            }
                                        }
                                        echo "</select>";
                                    } else {
                                        echo "0 results";
                                    }

                                $conn->close();
                                ?>
                            </div>

                            <div class="site-btn2" id="add-marca">Adicionar marca</div>


                            <script>
                            document.getElementById("add-marca").addEventListener("click", function() {
                                document.getElementById("marca-selects").style.display = "block";
                            });
                            document.getElementById("add-marca").addEventListener("click", function() {
                                document.getElementById("add-marca").style.display = "none";
                            });
                            </script>


                            <div id="marca-selects" style="display: none;">
                            <div class="group-input group-input2">
                                <label for="marca2">Marca:</label>
                                <?php
                                    include "abreconexao.php";

                                    $sql = "SELECT id, nome FROM marca";
                                    mysqli_set_charset($conn, "utf8");

                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        echo "<select name='marcaid2'>";
                                        echo "<option value=''>Selecione uma opção</option>";
                                        while($row = $result->fetch_assoc()) {
                                            echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
                                            if ($row["nome"] == $_POST["marca"]) {
                                                $marcaid2 = $row["id"];
                                            }
                                        }
                                        echo "</select>";
                                    } else {
                                        echo "0 results";
                                    }

                                $conn->close();
                                ?>
                            </div><br></div>

                            <!--<hr id="hr2">

                            <label>Preço:</label>
                            <div>
                                <input type="radio" id="price-1" name="price" value="1">
                                <label for="price-1" class="price">0-20€</label>

                                <input type="radio" id="price-2" name="price" value="2">
                                <label for="price-2" class="price">21-40€</label>

                                <input type="radio" id="price-3" name="price" value="3">
                                <label for="price-3" class="price">41-60€</label>

                                <input type="radio" id="price-4" name="price" value="4">
                                <label for="price-4" class="price">61-80€</label>

                                <input type="radio" id="price-5" name="price" value="5">
                                <label for="price-5" class="price">81-100€</label>

                                <input type="radio" id="price-6" name="price" value="6">
                                <label for="price-6" class="price">+ 100€</label>
                            </div>-->
                    </div><br><br>

                    <button type="submit" class="site-btn register-btn" id="enviarBtn">AVANÇAR</button><br><br>
    </form>
                    <script>

                    document.getElementById("vestuariouni").style.display = "none";
                    document.getElementById("calcadouni").style.display = "none";
                    document.getElementById("acessoriosuni").style.display = "none";
                    document.getElementById("malasuni").style.display = "none";
                    document.getElementById("unissexo").style.display = "none";
                    document.getElementById("vestuariouni2").style.display = "none";
                    document.getElementById("calcadouni2").style.display = "none";
                    document.getElementById("acessoriosuni2").style.display = "none";
                    document.getElementById("malasuni2").style.display = "none";
                    document.getElementById("unissexo2").style.display = "none";

                    document.getElementById("categoria").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "mulher":
                        document.getElementById("mulher").style.display = "block";
                        document.getElementById("homem").style.display = "none";
                        document.getElementById("crianca").style.display = "none";
                        document.getElementById("unissexo").style.display = "none";
                        break;
                    case "homem":
                        document.getElementById("mulher").style.display = "none";
                        document.getElementById("homem").style.display = "block";
                        document.getElementById("crianca").style.display = "none";
                        document.getElementById("unissexo").style.display = "none";
                        break;
                    case "crianca":
                        document.getElementById("mulher").style.display = "none";
                        document.getElementById("homem").style.display = "none";
                        document.getElementById("crianca").style.display = "block";
                        document.getElementById("unissexo").style.display = "none";
                        break;
                    case "unissexo":
                        document.getElementById("mulher").style.display = "none";
                        document.getElementById("homem").style.display = "none";
                        document.getElementById("crianca").style.display = "none";
                        document.getElementById("unissexo").style.display = "block";
                        break;
                    default:
                        document.getElementById("mulher").style.display = "none";
                        document.getElementById("homem").style.display = "none";
                        document.getElementById("crianca").style.display = "none";
                        document.getElementById("unissexo").style.display = "none";
                        break;
                    }
                });

                document.getElementById("mulher").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "vestuariomulher":
                        document.getElementById("vestuariomulher").style.display = "block";
                        document.getElementById("calcadomulher").style.display = "none";
                        document.getElementById("acessoriosmulher").style.display = "none";
                        document.getElementById("malasmulher").style.display = "none";
                        break;
                    case "calcadomulher":
                        document.getElementById("vestuariomulher").style.display = "none";
                        document.getElementById("calcadomulher").style.display = "block";
                        document.getElementById("acessoriosmulher").style.display = "none";
                        document.getElementById("malasmulher").style.display = "none";
                        break;
                    case "acessoriosmulher":
                        document.getElementById("vestuariomulher").style.display = "none";
                        document.getElementById("calcadomulher").style.display = "none";
                        document.getElementById("acessoriosmulher").style.display = "block";
                        document.getElementById("malasmulher").style.display = "none";
                        break;
                    case "malasmulher":
                        document.getElementById("vestuariomulher").style.display = "none";
                        document.getElementById("calcadomulher").style.display = "none";
                        document.getElementById("acessoriosmulher").style.display = "none";
                        document.getElementById("malasmulher").style.display = "block";
                        break;
                    default:
                        document.getElementById("vestuariomulher").style.display = "none";
                        document.getElementById("calcadomulher").style.display = "none";
                        document.getElementById("acessoriosmulher").style.display = "none";
                        document.getElementById("malasmulher").style.display = "none";
                        break;
                    }
                });

                document.getElementById("homem").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "vestuariohomem":
                        document.getElementById("vestuariohomem").style.display = "block";
                        document.getElementById("calcadohomem").style.display = "none";
                        document.getElementById("acessorioshomem").style.display = "none";
                        document.getElementById("malashomem").style.display = "none";
                        break;
                    case "calcadohomem":
                        document.getElementById("vestuariohomem").style.display = "none";
                        document.getElementById("calcadohomem").style.display = "block";
                        document.getElementById("acessorioshomem").style.display = "none";
                        document.getElementById("malashomem").style.display = "none";
                        break;
                    case "acessorioshomem":
                        document.getElementById("vestuariohomem").style.display = "none";
                        document.getElementById("calcadohomem").style.display = "none";
                        document.getElementById("acessorioshomem").style.display = "block";
                        document.getElementById("malashomem").style.display = "none";
                        break;
                    case "malashomem":
                        document.getElementById("vestuariohomem").style.display = "none";
                        document.getElementById("calcadohomem").style.display = "none";
                        document.getElementById("acessorioshomem").style.display = "none";
                        document.getElementById("malashomem").style.display = "block";
                        break;
                    default:
                        document.getElementById("vestuariohomem").style.display = "none";
                        document.getElementById("calcadohomem").style.display = "none";
                        document.getElementById("acessorioshomem").style.display = "none";
                        document.getElementById("malashomem").style.display = "none";
                        break;
                    }
                });

                document.getElementById("crianca").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "vestuariorapariga":
                        document.getElementById("vestuariorapariga").style.display = "block";
                        document.getElementById("vestuariorapaz").style.display = "none";
                        document.getElementById("brinquedos").style.display = "none";
                        document.getElementById("veiculosbrincar").style.display = "none";
                        break;
                    case "vestuariorapaz":
                        document.getElementById("vestuariorapariga").style.display = "none";
                        document.getElementById("vestuariorapaz").style.display = "block";
                        document.getElementById("brinquedos").style.display = "none";
                        document.getElementById("veiculosbrincar").style.display = "none";
                        break;
                    case "brinquedos":
                        document.getElementById("vestuariorapariga").style.display = "none";
                        document.getElementById("vestuariorapaz").style.display = "none";
                        document.getElementById("brinquedos").style.display = "block";
                        document.getElementById("veiculosbrincar").style.display = "none";
                        break;
                    case "veiculosbrincar":
                        document.getElementById("vestuariorapariga").style.display = "none";
                        document.getElementById("vestuariorapaz").style.display = "none";
                        document.getElementById("brinquedos").style.display = "none";
                        document.getElementById("veiculosbrincar").style.display = "block";
                        break;
                    default:
                        document.getElementById("vestuariorapariga").style.display = "none";
                        document.getElementById("vestuariorapaz").style.display = "none";
                        document.getElementById("brinquedos").style.display = "none";
                        document.getElementById("veiculosbrincar").style.display = "none";
                        break;
                    }
                });

                document.getElementById("unissexo").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "vestuariouni":
                        document.getElementById("vestuariouni").style.display = "block";
                        document.getElementById("calcadouni").style.display = "none";
                        document.getElementById("acessoriosuni").style.display = "none";
                        document.getElementById("malasuni").style.display = "none";
                        break;
                    case "calcadouni":
                        document.getElementById("vestuariouni").style.display = "none";
                        document.getElementById("calcadouni").style.display = "block";
                        document.getElementById("acessoriosuni").style.display = "none";
                        document.getElementById("malasuni").style.display = "none";
                        break;
                    case "acessoriosuni":
                        document.getElementById("vestuariouni").style.display = "none";
                        document.getElementById("calcadouni").style.display = "none";
                        document.getElementById("acessoriosuni").style.display = "block";
                        document.getElementById("malasuni").style.display = "none";
                        break;
                    case "malasuni":
                        document.getElementById("vestuariouni").style.display = "none";
                        document.getElementById("calcadouni").style.display = "none";
                        document.getElementById("acessoriosuni").style.display = "none";
                        document.getElementById("malasuni").style.display = "block";
                        break;
                    default:
                        document.getElementById("vestuariouni").style.display = "none";
                        document.getElementById("calcadouni").style.display = "none";
                        document.getElementById("acessoriosuni").style.display = "none";
                        document.getElementById("malasuni").style.display = "none";
                        break;
                    }
                });

                document.getElementById("tamanho").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "bebe":
                        document.getElementById("bebe").style.display = "block";
                        document.getElementById("criancat").style.display = "none";
                        document.getElementById("adulto").style.display = "none";
                        break;
                    case "criancat":
                        document.getElementById("bebe").style.display = "none";
                        document.getElementById("criancat").style.display = "block";
                        document.getElementById("adulto").style.display = "none";
                        break;
                    case "adulto":
                        document.getElementById("bebe").style.display = "none";
                        document.getElementById("criancat").style.display = "none";
                        document.getElementById("adulto").style.display = "block";
                        break;
                    default:
                        document.getElementById("bebe").style.display = "none";
                        document.getElementById("criancat").style.display = "none";
                        document.getElementById("adulto").style.display = "none";
                        break;
                    }
                });

                document.getElementById("bebe").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "bebevestuario":
                        document.getElementById("bebevestuario").style.display = "block";
                        document.getElementById("bebecalcado").style.display = "none";
                        break;
                    case "bebecalcado":
                        document.getElementById("bebevestuario").style.display = "none";
                        document.getElementById("bebecalcado").style.display = "block";
                        break;
                    default:
                        document.getElementById("bebevestuario").style.display = "none";
                        document.getElementById("bebecalcado").style.display = "none";
                        break;
                    }
                });

                document.getElementById("criancat").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "criancavestuario":
                        document.getElementById("criancavestuario").style.display = "block";
                        document.getElementById("criancacalcado").style.display = "none";
                        break;
                    case "criancacalcado":
                        document.getElementById("criancavestuario").style.display = "none";
                        document.getElementById("criancacalcado").style.display = "block";
                        break;
                    default:
                        document.getElementById("criancavestuario").style.display = "none";
                        document.getElementById("criancacalcado").style.display = "none";
                        break;
                    }
                });
                
                document.getElementById("adulto").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "adultovestuario":
                        document.getElementById("adultovestuario").style.display = "block";
                        document.getElementById("adultocalcado").style.display = "none";
                        break;
                    case "adultocalcado":
                        document.getElementById("adultovestuario").style.display = "none";
                        document.getElementById("adultocalcado").style.display = "block";
                        break;
                    default:
                        document.getElementById("adultovestuario").style.display = "none";
                        document.getElementById("adultocalcado").style.display = "none";
                        break;
                    }
                });

                document.getElementById("categoria2").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "mulher2":
                        document.getElementById("mulher2").style.display = "block";
                        document.getElementById("homem2").style.display = "none";
                        document.getElementById("crianca2").style.display = "none";
                        document.getElementById("unissexo2").style.display = "none";
                        break;
                    case "homem2":
                        document.getElementById("mulher2").style.display = "none";
                        document.getElementById("homem2").style.display = "block";
                        document.getElementById("crianca2").style.display = "none";
                        document.getElementById("unissexo2").style.display = "none";
                        break;
                    case "crianca2":
                        document.getElementById("mulher2").style.display = "none";
                        document.getElementById("homem2").style.display = "none";
                        document.getElementById("crianca2").style.display = "block";
                        document.getElementById("unissexo2").style.display = "none";
                        break;
                    case "unissexo2":
                        document.getElementById("mulher2").style.display = "none";
                        document.getElementById("homem2").style.display = "none";
                        document.getElementById("crianca2").style.display = "none";
                        document.getElementById("unissexo2").style.display = "block";
                        break;
                    default:
                        document.getElementById("mulher2").style.display = "none";
                        document.getElementById("homem2").style.display = "none";
                        document.getElementById("crianca2").style.display = "none";
                        document.getElementById("unissexo2").style.display = "none";
                        break;
                    }
                });

                document.getElementById("mulher2").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "vestuariomulher2":
                        document.getElementById("vestuariomulher2").style.display = "block";
                        document.getElementById("calcadomulher2").style.display = "none";
                        document.getElementById("acessoriosmulher2").style.display = "none";
                        document.getElementById("malasmulher2").style.display = "none";
                        break;
                    case "calcadomulher2":
                        document.getElementById("vestuariomulher2").style.display = "none";
                        document.getElementById("calcadomulher2").style.display = "block";
                        document.getElementById("acessoriosmulher2").style.display = "none";
                        document.getElementById("malasmulher2").style.display = "none";
                        break;
                    case "acessoriosmulher2":
                        document.getElementById("vestuariomulher2").style.display = "none";
                        document.getElementById("calcadomulher2").style.display = "none";
                        document.getElementById("acessoriosmulher2").style.display = "block";
                        document.getElementById("malasmulher2").style.display = "none";
                        break;
                    case "malasmulher2":
                        document.getElementById("vestuariomulher2").style.display = "none";
                        document.getElementById("calcadomulher2").style.display = "none";
                        document.getElementById("acessoriosmulher2").style.display = "none";
                        document.getElementById("malasmulher2").style.display = "block";
                        break;
                    default:
                        document.getElementById("vestuariomulher2").style.display = "none";
                        document.getElementById("calcadomulher2").style.display = "none";
                        document.getElementById("acessoriosmulher2").style.display = "none";
                        document.getElementById("malasmulher2").style.display = "none";
                        break;
                    }
                });

                document.getElementById("homem2").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "vestuariohomem2":
                        document.getElementById("vestuariohomem2").style.display = "block";
                        document.getElementById("calcadohomem2").style.display = "none";
                        document.getElementById("acessorioshomem2").style.display = "none";
                        document.getElementById("malashomem2").style.display = "none";
                        break;
                    case "calcadohomem2":
                        document.getElementById("vestuariohomem2").style.display = "none";
                        document.getElementById("calcadohomem2").style.display = "block";
                        document.getElementById("acessorioshomem2").style.display = "none";
                        document.getElementById("malashomem2").style.display = "none";
                        break;
                    case "acessorioshomem2":
                        document.getElementById("vestuariohomem2").style.display = "none";
                        document.getElementById("calcadohomem2").style.display = "none";
                        document.getElementById("acessorioshomem2").style.display = "block";
                        document.getElementById("malashomem2").style.display = "none";
                        break;
                    case "malashomem2":
                        document.getElementById("vestuariohomem2").style.display = "none";
                        document.getElementById("calcadohomem2").style.display = "none";
                        document.getElementById("acessorioshomem2").style.display = "none";
                        document.getElementById("malashomem2").style.display = "block";
                        break;
                    default:
                        document.getElementById("vestuariohomem2").style.display = "none";
                        document.getElementById("calcadohomem2").style.display = "none";
                        document.getElementById("acessorioshomem2").style.display = "none";
                        document.getElementById("malashomem2").style.display = "none";
                        break;
                    }
                });

                document.getElementById("crianca2").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "vestuariorapariga2":
                        document.getElementById("vestuariorapariga2").style.display = "block";
                        document.getElementById("vestuariorapaz2").style.display = "none";
                        document.getElementById("brinquedos2").style.display = "none";
                        document.getElementById("veiculosbrincar2").style.display = "none";
                        break;
                    case "vestuariorapaz2":
                        document.getElementById("vestuariorapariga2").style.display = "none";
                        document.getElementById("vestuariorapaz2").style.display = "block";
                        document.getElementById("brinquedos2").style.display = "none";
                        document.getElementById("veiculosbrincar2").style.display = "none";
                        break;
                    case "brinquedos2":
                        document.getElementById("vestuariorapariga2").style.display = "none";
                        document.getElementById("vestuariorapaz2").style.display = "none";
                        document.getElementById("brinquedos2").style.display = "block";
                        document.getElementById("veiculosbrincar2").style.display = "none";
                        break;
                    case "veiculosbrincar2":
                        document.getElementById("vestuariorapariga2").style.display = "none";
                        document.getElementById("vestuariorapaz2").style.display = "none";
                        document.getElementById("brinquedos2").style.display = "none";
                        document.getElementById("veiculosbrincar2").style.display = "block";
                        break;
                    default:
                        document.getElementById("vestuariorapariga2").style.display = "none";
                        document.getElementById("vestuariorapaz2").style.display = "none";
                        document.getElementById("brinquedos2").style.display = "none";
                        document.getElementById("veiculosbrincar2").style.display = "none";
                        break;
                    }
                });

                document.getElementById("unissexo2").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "vestuariouni2":
                        document.getElementById("vestuariouni2").style.display = "block";
                        document.getElementById("calcadouni2").style.display = "none";
                        document.getElementById("acessoriosuni2").style.display = "none";
                        document.getElementById("malasuni2").style.display = "none";
                        break;
                    case "calcadouni2":
                        document.getElementById("vestuariouni2").style.display = "none";
                        document.getElementById("calcadouni2").style.display = "block";
                        document.getElementById("acessoriosuni2").style.display = "none";
                        document.getElementById("malasuni2").style.display = "none";
                        break;
                    case "acessoriosuni2":
                        document.getElementById("vestuariouni2").style.display = "none";
                        document.getElementById("calcadouni2").style.display = "none";
                        document.getElementById("acessoriosuni2").style.display = "block";
                        document.getElementById("malasuni2").style.display = "none";
                        break;
                    case "malasuni2":
                        document.getElementById("vestuariouni2").style.display = "none";
                        document.getElementById("calcadouni2").style.display = "none";
                        document.getElementById("acessoriosuni2").style.display = "none";
                        document.getElementById("malasuni2").style.display = "block";
                        break;
                    default:
                        document.getElementById("vestuariouni2").style.display = "none";
                        document.getElementById("calcadouni2").style.display = "none";
                        document.getElementById("acessoriosuni2").style.display = "none";
                        document.getElementById("malasuni2").style.display = "none";
                        break;
                    }
                });

                document.getElementById("tamanho2").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "bebe2":
                        document.getElementById("bebe2").style.display = "block";
                        document.getElementById("criancat2").style.display = "none";
                        document.getElementById("adulto2").style.display = "none";
                        break;
                    case "criancat2":
                        document.getElementById("bebe2").style.display = "none";
                        document.getElementById("criancat2").style.display = "block";
                        document.getElementById("adulto2").style.display = "none";
                        break;
                    case "adulto2":
                        document.getElementById("bebe2").style.display = "none";
                        document.getElementById("criancat2").style.display = "none";
                        document.getElementById("adulto2").style.display = "block";
                        break;
                    default:
                        document.getElementById("bebe2").style.display = "none";
                        document.getElementById("criancat2").style.display = "none";
                        document.getElementById("adulto2").style.display = "none";
                        break;
                    }
                });

                document.getElementById("bebe2").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "bebevestuario2":
                        document.getElementById("bebevestuario2").style.display = "block";
                        document.getElementById("bebecalcado2").style.display = "none";
                        break;
                    case "bebecalcado2":
                        document.getElementById("bebevestuario2").style.display = "none";
                        document.getElementById("bebecalcado2").style.display = "block";
                        break;
                    default:
                        document.getElementById("bebevestuario2").style.display = "none";
                        document.getElementById("bebecalcado2").style.display = "none";
                        break;
                    }
                });

                document.getElementById("criancat2").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "criancavestuario2":
                        document.getElementById("criancavestuario2").style.display = "block";
                        document.getElementById("criancacalcado2").style.display = "none";
                        break;
                    case "criancacalcado2":
                        document.getElementById("criancavestuario2").style.display = "none";
                        document.getElementById("criancacalcado2").style.display = "block";
                        break;
                    default:
                        document.getElementById("criancavestuario2").style.display = "none";
                        document.getElementById("criancacalcado2").style.display = "none";
                        break;
                    }
                });
                
                document.getElementById("adulto2").addEventListener("change", function() {
                    var opcaoSelecionada = this.value;
                    switch (opcaoSelecionada) {
                    case "adultovestuario2":
                        document.getElementById("adultovestuario2").style.display = "block";
                        document.getElementById("adultocalcado2").style.display = "none";
                        break;
                    case "adultocalcado2":
                        document.getElementById("adultovestuario2").style.display = "none";
                        document.getElementById("adultocalcado2").style.display = "block";
                        break;
                    default:
                        document.getElementById("adultovestuario2").style.display = "none";
                        document.getElementById("adultocalcado2").style.display = "none";
                        break;
                    }
                });
                
                </script>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Register Form Section End -->


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