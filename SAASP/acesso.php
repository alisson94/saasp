
<!DOCTYPE html>
<html lang="pt-br" >

<head>
    
  <meta charset="UTF-8">
  <title>SAASP - Acesso &copy;</title>
  <script  src="js/jquery-3.3.1.min.js"></script>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <meta name="viewport" content="width=500, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="icon" type="imagem/png" href="img/icon.png">

  
</head>

<body>
<div class="form" style="height: 510px;">
  <div class="thumbnail"><img src="img/icon.png"/></div>
  <p id="login">Acessar</p>
  <form class="login-form" method="post" action="php/verificar.php">
    <input type="text" name="login" required name=nome placeholder="Digite seu nome de usuário..."/>
    <input type="password" name="senha" required name=nome placeholder="Digite a sua senha..."/>
    <input class="submit" type="submit" value="Entrar">
    <p class="message">Não é registrado? <a href="cadastro.php">Crie uma conta!</a></p>
  </form>
</div>
  
    <script  src="js/index.js"></script>
   
</body>

</html>
