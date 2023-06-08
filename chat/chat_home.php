<?php

session_start();

if (isset($_SESSION['utilizador'])) {
    include "../abreconexao.php";
    include "helpers/utilizador.php";
    include "helpers/conversas.php";

    #ir buscar o utilizador
    $utilizador = getUtilizador($_SESSION['utilizador'],$conn);

    #ir buscar as conversas do utilizador
    //conversas[0][0] -> nome do utilizador 0
    //conversas[0][1] -> email do utilizador 0
    $conversas = getConversations($_SESSION['utilizador'],$conn);

} 
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chat - home</title>

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


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="chat_css.css">

</head>
<body class = "d-flex justify-content-center align-items-center vh-100">
    <div class = "p-2 w-400 rounded-shadow">
            <div>
                <div class = "d-flex mb-3 p-3 bg-light
                            justify-content-between align-items-center">

                    <div class = "d-flex align-items-center">
                        <h3 class= "fs-xs m-2"><?=$utilizador['nome']?></h3>
                    </div>
                    <a href="../inicial.php" class = "btn btn-primary">Voltar</a>
                </div>
                <div class = "input-group mb-3">
                    <input type="text"
                            placeholder="Search"
                            id="searchText"
                            class="form-control">
                    <button class="btn btn-warning"
                            id= "searchBtn">
                        Search
                    </button>
                </div>
                <ul id ="chatList" class="list-group mvh-50 overflow-auto">
                    <?php if(!empty($conversas)){ ?>
                        <?php foreach ($conversas as $conversa){ ?>
                            <li class = "list-group-item"> 
                                <a href="chat.php?user=<?=$conversa[1]?>"
                                    class="d-flex justify-content-between align-items-center p-2">
                                    <div class =d-flex align-items-center>
                                        <h3 class = "fs-xs m-2">
                                            <!--conversa[0]= nome. conversa[1]=email -->
                                            <?=$conversa[0]?>
                                        </h3>
                                    </div>
                                </a>
                            </li>
                    <?php } ?>
                    <?php }else{ ?>
                        <div class="alert alert-warning" role="alert">
                            Sem conversas
                        </div>
                    <?php } ?>
                </ul>
            </div>            
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            
            //search by text
            /*
            This code is registering an event
            listener on an input field with
            the ID "searchText". The event
            listener listens for the "input"
            event, which fires whenever the
            user changes the value of the
            input field. When the event is
            triggered, the code gets the
            current value of the input
            field using $(this).val()
            and stores it in a variable
            called searchText.

            Then, the code uses the jQuery
            $.post() method to send an AJAX 
            POST request to the server at the
            URL "ajax/search.php". The request
            includes a data object with a
            single property "key" whose value
            is the current value of the 
            input field. When the server
            responds with data, the code 
            sets the HTML of an element
            with the ID "chatList" to the
            response data using 
            $("#chatList").html(data).
            This updates the chat list
            on the page with the search 
            results.*/
            $("#searchText").on("input",function(){
                var searchText = $(this).val();
                $.post("ajax/search.php",
                    {
                        key:searchText
                    },
                    function(data,status){
                        $("#chatList").html(data);
                    });
            });
            
            //search by button
            $("#searchBtn").on("click",function(){
                var searchText = $("#searchText").val();
                $.post("ajax/search.php",
                    {
                        key:searchText
                    },
                    function(data,status){
                        $("#chatList").html(data);
                    });
            });
        
        
        
        });
    
    </script>


</body>




</html>

