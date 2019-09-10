<?php
    
        ob_start();
        //INICIALIZA A SESSÃO 
        session_start();


        //DESTRÓI AS SESSOES
        unset($_SESSION['logado']); 

        session_destroy(); 


        //REDIRECIONA PARA A TELA DE LOGIN 
        Header("Location: ../acesso.php"); 
    
?>