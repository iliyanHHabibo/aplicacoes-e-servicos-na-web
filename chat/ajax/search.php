<?php
    session_start();

    if (isset($_SESSION['utilizador'])) {
        #ver se a key foi submetida
        if (isset($_POST['key'])){
            include "../../abreconexao.php";
            include "../helpers/conversas.php";


            #fazer um algoritmo de busca
            $key = "{$_POST['key']}%";

            #ir buscar os utilizadores que correspondem à key
            $sql = "SELECT nome,email FROM utilizador WHERE LOWER(nome) LIKE '$key' OR LOWER(email) LIKE '$key'";

            #usamos conversas para dar apenas dispay dos utilizadores com que ja temos uma conversa iniciada
            $conversas = getConversations($_SESSION['utilizador'],$conn);

            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0){
                $utilizadores = mysqli_fetch_all($result);

                foreach($utilizadores as $utilizador){
                    #verificar se o utilizador que estamos a mostrar é o utilizador logado
                    if ($utilizador[1] === $_SESSION['utilizador']){
                        continue;
                    }
                    foreach($conversas as $conversa){
                        #verificar se o utilizador que estamos a mostrar é um utilizador com que ja temos uma conversa iniciada
                        if ($utilizador[1] !== $conversa[1]){
                            continue;
                        }else{
                ?>
                <li class = "list-group-item"> 
                    <a href="chat.php?user=<?=$utilizador[1]?>"
                        class="d-flex justify-content-between align-items-center p-2">
                        <div class =d-flex align-items-center>
                            <h3 class = "fs-xs m-2">
                                <!--conversa[0]= nome. conversa[1]=email -->
                                <?=$utilizador[0]?>
                            </h3>
                        </div>
                    </a>
                </li>
            <?php }
                    }   } }else{
                echo "Nenhum utilizador encontrado";
            }
        }


    }
?>