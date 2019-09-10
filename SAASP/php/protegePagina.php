<?php
    session_start();
    
    if(!$_SESSION['logado']){
        echo '<script> alert("Você precisa está logado para acessar está página!"); location.href="http://localhost/SAASP/acesso.php"; </script>';
    }
    