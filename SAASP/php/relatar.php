<?php

    session_start();
    
    $orgao = $_POST['orgao'];
    $descricao = $_POST['descricao'];
    $gravidade = $_POST['gravidade'];
    $local = $_POST['local'];
    $data = $_POST['data'];
    $imagem = $_FILES['imagem'];
    $autor = $_SESSION['login'];
    
    $novoNome = "padrao.png";
    
    if(isset($imagem)){
        include 'uploadImagem.php';
    }
    
    include 'connect.php';
    
    $sql = "INSERT INTO relatos (autor , orgao , descricao , gravidade , local , data , resolvido , imagem) VALUES ('$autor', '$orgao', '$descricao', '$gravidade', '$local', '$data', 'pen', '$novoNome') ";
    mysqli_query($con, $sql) or die("Erro ao se conectar com servidor");
    mysqli_close($con);
    header('Location: ../web/relatarProblemas.php');
    echo '<script> alert("Relato feito com sucesso"); </script>';
?>