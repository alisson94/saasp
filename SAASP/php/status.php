<?php
    include 'connect.php';
	$id = $_GET['i'];
	$sql = "UPDATE relatos SET resolvido = 'sim' WHERE id = '$id'";
    $result = mysqli_query($con, $sql) or die("Erro ao se conectar ao servidor");
    mysqli_close($con);
    header('Location: http://localhost/SAASP/web/orgao/relatos.php');
?>