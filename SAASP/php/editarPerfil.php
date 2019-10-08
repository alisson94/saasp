<?php
    include '../php/connect.php';
    session_start();

    $nomec = $_POST['nomeC'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $user = $_SESSION['login'];

    $sql = "SELECT * FROM usuarios WHERE user <> '$user' and (user='$usuario' or email='$email')";
    $result = mysqli_query($con, $sql) or die("Erro ao tentar cadastrar registro1");

    if(mysqli_num_rows($result)>0){
        echo "<script> alert('E-mail ou nome de Usúario já em uso, tente outro por favor.'); location.href='../web/editarPerfil.php'; </script>";
    }else{
        $sql = "UPDATE usuarios SET nome = '$nomec', user = '$usuario', email = '$email', senha = '$senha' WHERE user = '$user'";

        mysqli_query($con,$sql) or die("Erro ao tentar cadastrar registro2");
        mysqli_close($con);

        unset($_SESSION['login']);
        $_SESSION['login'] = $usuario;
        header('Location: ../web/editarPerfil.php');
    }



?>