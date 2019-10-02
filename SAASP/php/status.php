<?php
    include 'connect.php';
    $id = $_GET['id'];
    $tipo = $_GET['tipo'];
	$sql = "UPDATE relatos SET resolvido = '$tipo' WHERE id = $id";
    $result = mysqli_query($con, $sql) or die("Erro ao se conectar ao servidor");
    mysqli_close($con);
    header('Location: http://localhost/saasp/SAASP/web/orgao/relatos.php');
?>