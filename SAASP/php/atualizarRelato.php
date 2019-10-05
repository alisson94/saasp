<?php
    include 'connect.php';

    $id = $_GET['id'];
    $checkPro = $_POST['checkPro'];
    $checkRes = $_POST['checkRes'];
    $comentario = $_POST['comentario'];

    if($checkPro){
        $tipo = 'pro';
    }elseif($checkRes){
        $tipo = 'sim';
    }else{
        $tipo = 'pen';
    }

	$sql = "UPDATE relatos SET resolvido = '$tipo', comentario = '$comentario' WHERE id = $id";
    $result = mysqli_query($con, $sql) or die("Erro ao se conectar ao servidor");
    mysqli_close($con);
    header('Location: ../web/orgao/relatos.php');
?>