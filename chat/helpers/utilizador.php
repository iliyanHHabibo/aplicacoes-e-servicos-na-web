<?php

    function getUtilizador($email,$conn){
        $sql = "SELECT * FROM utilizador WHERE email = '$email'";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) === 1){
            $utilizador = mysqli_fetch_assoc($result);
            return $utilizador;
        }else{
            $utilizador =[];
            return $utilizador;
        }
    }
?>