<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="New Direction">
  <meta name="keywords" content="Fashi, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>New Direction</title>

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

            <!--<li><a href="#">Pages</a>
                            <ul class="dropdown">
                                
                                <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="./check-out.html">Checkout</a></li>
                                <li><a href="./faq.html">Faq</a></li>
                                
                            </ul>
                        </li>-->
          </ul>
        </nav>

        <div id="mobile-menu-wrap"></div>
      </div>
    </div>
  </header>
  <!-- Header End -->


  <!-- Register Section Begin -->
  <div class="register-login-section spad">
    <div class="container">
      <div class="row">

      <h1 style="font-size: 40px; font-weight: 700;">Pesquisa por utilizador</h1><br><br><br>

        <form method="POST" action="" class="my-form">
          <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
          </div>
          <div>
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" id="data_nascimento">
          </div>
          <div>
            <label for="genero">Género:</label>
            <input type="text" name="genero" id="genero">
          </div>
          <div>
            <label for="codigo_postal">Código Postal:</label>
            <input type="text" name="codigo_postal" id="codigo_postal">
          </div>
          <div>
            <label for="telefone">Telefone:</label>
            <input type="telefone" name="telefone" id="telefone">
          </div>
          <div>
            <label for="localidade">Localidade:</label>
            <input type="text" name="localidade" id="localidade">
          </div>
          <div>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
          </div>
          <div>

          </div><br><br><br><br>
          <button class="site-btn place-btn" type="submit" name="name1">Pesquisar</button>
        </form>


        <style>
          .my-form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
          }

          .my-form div {
            width: calc(25% - 10px);
            margin-bottom: 10px;
          }

          .my-form label {
            display: block;
            margin-bottom: 5px;
          }

          .my-form input {
            width: 100%;
            box-sizing: border-box;
          }

          .my-form button {
            height: 45px;
          }
        </style>

      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- Register Form Section End -->

  <?php
    include "abreconexao.php";

    // Verifica se foi enviado um formulário
    if (isset($_POST['name1'])) {
      // Processa as informações do formulário
      $localidade = $_POST["localidade"];
      $email = $_POST["email"];
      $codigo_postal = $_POST["codigo_postal"];
      $telefone = $_POST["telefone"];
      $genero = $_POST["genero"];
      $nome = $_POST["nome"];

      $data_nascimento = $_POST["data_nascimento"];

      // Cria a consulta SQL com as condições do formulário
      $sql = "SELECT * FROM utilizador WHERE 1=1";

      if (!empty($localidade)) {
        $sql .= " AND localidade = '$localidade'";
      }
      if (!empty($email)) {
        $sql .= " AND email = '$email'";
      }
      if (!empty($codigo_postal)) {
        $sql .= " AND codigo_postal = '$codigo_postal'";
      }
      if (!empty($genero)) {
        $sql .= " AND genero = '$genero'";
      }
      if (!empty($nome)) {
        $sql .= " AND nome = '$nome'";
      }


      // Executa a consulta SQL
      $result = $conn->query($sql);

      // Exibe a tabela com os resultados da consulta
      if ($result->num_rows > 0) {
        echo "<style>";
        echo "table, th, td {";
        echo "border: 1px solid black;";
        echo "border-collapse: collapse;";
        echo "}";
        echo "th, td {";
        echo "padding: 5px;";
        echo "text-align: left;";
        echo "}";
        echo "</style>";

        echo "<table style='margin-left: auto;margin-right: auto;'>";
        echo "<tr><th>Nome</th><th>Data de Nascimento</th><th>Gênero</th><th>Morada</th><th>Localidade</th><th>Código Postal</th><th>Telefone</th><th>Email</th></tr>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["nome"] . "</td>";
          echo "<td>" . $row["data_nascimento"] . "</td>";
          echo "<td>" . $row["genero"] . "</td>";
          echo "<td>" . $row["morada"] . "</td>";
          echo "<td>" . $row["localidade"] . "</td>";
          echo "<td>" . $row["codigo_postal"] . "</td>";
          echo "<td>" . $row["telefone"] . "</td>";
          echo "<td>" . $row["email"] . "</td>";
          echo "</tr>";
        }
        echo "</table><br><br>";
      } else {
        echo "0 results";
      }
    }

    $conn->close();
    ?>

  <?php
  include "abreconexao.php";

  // // Conectar-se ao banco de dados
// $conn = mysqli_connect("localhost", "usuario", "senha", "nome_do_banco_de_dados");
  
  // // Verificar se a conexão foi estabelecida corretamente
// if (!$conn) {
//     die("Falha na conexão: " . mysqli_connect_error());
// }
  
  // Consulta SQL para obter o número total de utilizadores
  $sql = "SELECT COUNT(*) AS total_utilizadores FROM utilizador";
  $resultado = mysqli_query($conn, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  $total_utilizadores = $dados['total_utilizadores'];

  // Consulta SQL para obter o número total de compras
  $sql = "SELECT COUNT(*) AS total_compras FROM compra";
  $resultado = mysqli_query($conn, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  $total_compras = $dados['total_compras'];

  // Consulta SQL para obter o número total de vendas
  $sql = "SELECT COUNT(*) AS total_vendas FROM vende";
  $resultado = mysqli_query($conn, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  $total_vendas = $dados['total_vendas'];

  // Consulta SQL para obter o número total de utilizadores que já realizaram compras
  $sql = "SELECT COUNT(DISTINCT utilizador_comprador) AS total_compradores FROM compra";
  $resultado = mysqli_query($conn, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  $total_compradores = $dados['total_compradores'];

  // Consulta SQL para obter o número total de utilizadores que já realizaram vendas
  $sql = "SELECT COUNT(DISTINCT vendedor) AS total_vendedores FROM vende";
  $resultado = mysqli_query($conn, $sql);
  $dados = mysqli_fetch_assoc($resultado);
  $total_vendedores = $dados['total_vendedores'];

  // obter o media de compras por utilizador
  $media_compras = $total_compras/$total_utilizadores;

  // Exibir as informações na página HTML
  ?>

  <head>
    <title>Estatísticas</title>
  </head>

  <div style="margin-left:175px;">
    <h1 style="font-size: 40px; font-weight: 700;">Estatísticas</h1><br>
    <p>Número total de utilizadores:
      <?php echo $total_utilizadores; ?>
    </p>
    <p>Número total de compras:
      <?php echo $total_compras; ?>
    </p>
    <p>Número total de vendas:
      <?php echo $total_vendas; ?>
    </p>
    <p>Número total de utilizadores que já fizeram compras:
      <?php echo $total_compradores; ?>
    </p>
    <p>Número total de utilizadores que já fizeram vendas:
      <?php echo $total_vendedores; ?>
    </p>
    <p>Média de compras por utilizador:
      <?php echo $media_compras; ?>
    </p>

  </div> <br><br>

  <div style="margin-left:175px;">
  <h1 style="font-size: 40px; font-weight: 700;">Estatísticas do utilizador</h1><br>
    <form method="post" action="">
        <label for="email2">Email do Utilizador:</label>
        <input type="email" id="email2" name="email2" required><br><br>
        <button type="submit" class="site-btn place-btn" name="name2">Pesquisar</button>
    </form><br>

    <style>
      table {
      border-collapse: collapse;
      
    }

    td, th {
      border: 1px solid black;
      padding: 8px;
      
    }

    </style>
  
    <?php
    include "abreconexao.php";


    // Verifica se o formulário foi enviado
    if (isset($_POST['name2'])) {
        $email = $_POST["email2"];

        // Executa consulta SQL para recuperar compras do utilizador
        $sql_compras = "SELECT a.titulo, a.preco, c.data_compra
                        FROM artigo a
                        JOIN compra c ON a.id = c.artigo
                        WHERE c.utilizador_comprador = '$email'
                        ORDER BY data_compra DESC";
     
        $result_compras = mysqli_query($conn, $sql_compras);

        // Executa consulta SQL para recuperar vendas do utilizador
        $sql_vendas = "SELECT a.titulo, a.preco, a.data_registo, NOW() AS data_compra
                       FROM artigo a
                       JOIN vende v ON a.id = v.artigo
                       WHERE v.vendedor = '$email'
                       ORDER BY data_compra DESC";

        $result_vendas = mysqli_query($conn, $sql_vendas);

        

        

        if (mysqli_num_rows($result_compras) > 0 || mysqli_num_rows($result_vendas) > 0) {
            // Exibe tabela com compras



            if (mysqli_num_rows($result_compras) > 0) {
                echo "<h2 style='font-size: 20px; font-weight: 700;'>Compras de $email</h2><br>";
                echo "<table>";
                echo "<tr><th>Título</th><th>Preço</th><th>Data da compra</th></tr>";
                while ($row = mysqli_fetch_assoc($result_compras)) {
                    echo "<tr><td>" . $row["titulo"] . "</td><td>" . $row["preco"] . "</td><td>" . $row["data_compra"] . "</td></tr>";
                }
                echo "</table><br>";
            }

            // Exibe tabela com vendas
            if (mysqli_num_rows($result_vendas) > 0) {
              echo "<h2 style='font-size: 20px; font-weight: 700;'>Vendas de $email</h2><br>";
              echo "<table>";
              echo "<tr><th>Título</th><th>Preço</th><th>Data de registo</th></tr>";
              while ($row3 = mysqli_fetch_assoc($result_vendas)) {
                  echo "<tr><td>" . $row3["titulo"] . "</td><td>" . $row3["preco"] . "</td><td>" . $row3["data_registo"] . "</td></tr>";
              }
              echo "</table><br>";
          }
        }


           
        else {
            echo "<p>Nenhuma compra ou venda encontrada para $email</p>";
        }
    }

    // Fecha conexão com a base de dados
    mysqli_close($conn);
    ?>
  </div>


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
                template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                  target="_blank">Colorlib</a>
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