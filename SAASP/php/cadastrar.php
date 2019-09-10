<?php
session_start;

$nomec = $_POST['nomeC'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaRep = $_POST['senhaRep'];
$cpf = $_POST['cpf'];

include('connect.php');

$sql = "(SELECT * FROM usuarios WHERE user='$usuario' or email='$email')";
$result = mysqli_query($con, $sql) or die("Erro ao tentar cadastrar registro");

if(mysqli_num_rows($result)>0){
    echo "<script> alert('E-mail ou nome de Usúario já em uso, tente outro por favor.'); location.href='../cadastro.php'; </script>";
}else{
    $sql = "INSERT INTO usuarios (id, nome, user, email, senha, cpf) VALUES ('', '$nomec', '$usuario', '$email', '$senha', '$cpf')";

    mysqli_query($con,$sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($con);
    header('Location: ../acesso.php');
}



?>