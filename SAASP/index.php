<?php
    session_start();
    if(isset($_SESSION['logado'])){
        header("Location: web/index.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br" >

<head>
  <title>SAASP - Início &copy;</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="img/icon.png"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/maininicial.css">
<!--===============================================================================================-->
  
</head>
<body>
<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
          <span class="login100-form-title">
            <img src="img/icon.png" alt="IMG">
            Acessar Sistema
          </span>
          
          <div class="container-login100-form-btn">
            <a href="acesso.php"><button class="login100-form-btn" type="submit">
              Entrar
            </button></a>
          </div>

          <div class="container-login100-form-btn">
            <a href="cadastro.php"><button class="login100-form-btn" type="submit">
            	Cadastre-se
            </button></a>
          </div>

          
      </div>
    </div>
  </div>
  
  

  
<!--===============================================================================================-->  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>

</html>
