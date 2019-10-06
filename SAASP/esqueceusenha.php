
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

<script type="text/javascript">
    $(document).ready(function(){
      $('input[type=password][name=senhaRep]').on('change', function(){
        if(this.value != $('input[type=password][name=senha]').val()){
          alert('Redigite a senha corretamente');
          this.value = null;
          this.focus();
          $('button').attr('disabled', 'disabled');
        }else{
          $('button').attr('disabled', null);
        }
      });
    });
  </script>
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        

        <form class="login100-form validate-form" action="esqueceusenha.php" method="post">
          <span class="login100-form-title">
            <img src="img/icon.png" alt="IMG">
            Esqueceu sua senha?
            <h6><br>Informe seu Email e CPF para enviarmos a sua nova senha!</h6>
          </span>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="email" placeholder="Email cadastrado">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="cpf" placeholder="Número de CPF">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-address-card" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
              Recuperar senha
            </button>
          </div>

          <div class="text-center">
            <a class="txt2" href="acesso.php">
              Criar uma conta
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