<?php

function getConversations($email_utilizador,$conn){
    //buscar tds as conversas do utilizador logado
    $sql = "SELECT * FROM conversas
     WHERE email_utilizador1 = '$email_utilizador' OR email_utilizador2 = '$email_utilizador'
     ORDER BY conversa_id DESC";

    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0){
        $conversas = mysqli_fetch_all($result,MYSQLI_ASSOC);
        
        //criar um array vazio para guardar a conversa do utilizador
        //$dados_utilizador irá conter um array com os dados dos utilizadores (nome e email) com os quais o utilizador atual manteve conversas
        $dados_utilizador = [];

        //percorrer as conversas
        foreach($conversas as $conversa){
            #se conversas email_utilizador1 for igual ao email do utilizador logado
            if ($conversa['email_utilizador1'] === $email_utilizador){
                #ir buscar o email e o nome do utilizador2 (para sabermos o nome de quem o utilizador logado está a falar)
                $sql2 = "SELECT nome,email FROM utilizador WHERE email = '{$conversa['email_utilizador2']}'";
                $result2 = mysqli_query($conn,$sql2);
            }else{
                $sql2 = "SELECT nome,email FROM utilizador WHERE email = '{$conversa['email_utilizador1']}'";
                $result2 = mysqli_query($conn,$sql2);
            }
            $tdsConversas = mysqli_fetch_all($result2);

            //guardar os dados do utilizador na variavel dados_utilizador
            array_push($dados_utilizador,$tdsConversas[0]);
        }

        return $dados_utilizador;
    
    }else{
        $conversas = [];
        return $conversas;
    }
}
?>