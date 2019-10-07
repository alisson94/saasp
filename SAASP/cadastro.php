<?php
  session_start();
  $toast;
  if(isset($_SESSION['dadosInvalidos'])){
    if($_SESSION['dadosInvalidos'] === true){
      $toast = true;
      $_SESSION['dadosInvalidos'] = false;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SAASP - Acesso &copy;</title>
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
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<script src="js/jquery-3.3.1.min.js"></script>
<link href="css/toastr.css" rel="stylesheet">
<script src="js/toastr.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
      $('input[type=password][name=senhaRep]').on('change', function(){
        if(this.value != $('input[type=password][name=senha]').val()){
          toastr.error("Repita a senha corretamente");
          this.value = null;
          this.focus();
        }
      });
    });
  </script>
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        

        <form class="login100-form validate-form" action="php/cadastrar.php" method="post">
          <span class="login100-form-title">
            <img src="img/icon.png" alt="IMG">
            Cadastre-se agora!
          </span>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="nomeC" placeholder="Nome completo" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="usuario" placeholder="Nome de Usuário" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="email" name="email" placeholder="Seu melhor e-mail" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="cpf" placeholder="Número de CPF" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-address-card" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="password" name="senha" placeholder="Senha" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Senha requerida">
            <input class="input100" type="password" name="senhaRep" placeholder="Repita a senha" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
              Cadastrar
            </button>
          </div>

          <div class="text-center">
            <a class="txt2" href="acesso.php">
              Já possou uma conta
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
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