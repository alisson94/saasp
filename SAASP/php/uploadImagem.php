<?php
    $extPermitidas = array("jpg","png");
    $extensao = end(explode(".", $imagem['name']));
    if(array_search($extensao, $extPermitidas) === false){
        echo '<script> alert("Certifique-se de colocar uma imagem com formato "jpg" ou "png""); location.href="../web/relatarProblemas.php"; </script>';
    }
    $novoNome = md5(uniqid(time())) . "." . $extensao;
    $destino = "../web/imagensRelatos/" . $novoNome;
    move_uploaded_file($imagem['tmp_name'], $destino);