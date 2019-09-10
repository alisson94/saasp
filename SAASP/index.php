<?php
    session_start();
    if(isset($_SESSION['logado'])){
        header("Location: web/index.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br" >

<head>
    
    <meta charset="UTF-8">
    <script  src="js/jquery-3.3.1.min.js"></script>
    <script  src="js/index.js"></script>
    <title>SAASP - Acesso &copy;</title>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <meta name="viewport" content="width=device-width, user-scalable=no">   
    <meta name="viewport" content="width=500, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <link rel="stylesheet" href="css/estilo.css">
      <link rel="icon" type="imagem/png" href="img/icon.png">
</head>
<body>
    <div class="form"  id="opa" style="height: 505px;">
      <div class="thumbnail"><img src="img/icon.png"/></div>
      	<a href="acesso.php">
            <button id="btnlog">Entrar</button>
        </a>
        <a href="cadastro.php">
            <button id="btncad">Cadastre-se</button>
        </a>
        <div id="icons">
            <label>Fale conosco</label>
            <a href="#"><p id="face">&#xf30c;</p></a>
            <a href="#"><p id="twi">&#xf309;</p></a>
            <a href="#"><p id="ins">&#xf31f;</p></a>
        </div>
    </div>

</body>

</html>
