<?php

    session_start();
    
    $orgao = $_POST['orgao'];
    $descricao = $_POST['descricao'];
    $gravidade = $_POST['gravidade'];
    $local = $_POST['local'];
    $data = $_POST['data'];
    $mes = date("m", strtotime($data));
    $imagem = $_FILES['imagem'];
    $autor = $_SESSION['login'];
    
    $novoNome = "padrao.png";
    
    if(isset($imagem)){
        include 'uploadImagem.php';
    }
    
    include 'connect.php';
    
    $sql = "INSERT INTO relatos (autor , orgao , descricao , gravidade , local , data , mes , resolvido , imagem) VALUES ('$autor', '$orgao', '$descricao', '$gravidade', '$local', '$data', '$mes', 'pen', '$novoNome') ";
    mysqli_query($con, $sql) or die("Erro ao se conectar com servidor");
    mysqli_close($con);
    $_SESSION['relatoFeito'] = true;
    header('Location: ../web/relatarProblemas.php');
?>