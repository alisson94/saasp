<?php 
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

include 'connect.php';

$sql = ("SELECT * FROM `usuarios` WHERE `user` = '$login' AND `senha`= '$senha'");
$result = mysqli_query($con, $sql);

if(mysqli_num_rows ($result) > 0 ){ 
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    $_SESSION['logado'] = true;

    $row = mysqli_fetch_assoc($result);

    if($row['nivelAcesso'] == 1){
    	echo "<script> location.href='../web/admin/index.php'</script> ";
    }elseif ($row['nivelAcesso'] == 2) {
    	echo "<script> location.href='../web/ouvidoria/index.php'</script> ";
    }elseif ($row['nivelAcesso'] == 3) {
    	echo "<script> location.href='../web/orgao/index.php'</script> ";
    }
    else{
    	echo "<script> location.href='../web/index.php'</script> ";
    }
    
}else{
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
        $_SESSION['logado'] = false;
	echo "<script>location.href='../acesso.php'</script> ";
    $_SESSION['dadosInvalidos'] = true;

	//ATÉ QUE FIM
	}

?>