<?php
    include 'connect.php';

    $id = $_GET['id'];
    $resolvido = isset($_POST['resolvido']) ? $_POST['resolvido'] : 'pen';
    $comentario = $_POST['comentario'];

	$sql = "UPDATE relatos SET resolvido = '$resolvido', comentario = '$comentario' WHERE id = $id";
    $result = mysqli_query($con, $sql) or die("Erro ao se conectar ao servidor");
    mysqli_close($con);
    header('Location: ../web/orgao/relatos.php');
?>