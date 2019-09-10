<!DOCTYPE html>
<html lang="pt-br" >

<head>
    
  <meta charset="UTF-8">
  <title>SAASP - Cadastro &copy;</title>
  <script  src="js/jquery-3.3.1.min.js"></script>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <meta name="viewport" content="width=500, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="icon" type="imagem/png" href="img/icon.png">

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
<div class="form" style="height: 750px;">
  <div class="thumbnail"><img src="img/icon.png"/></div>
  <p id="login">Acessar</p>
    <form class="register-form" action="php/cadastrar.php" method="post"> 
      <input name="nomeC" type="text" maxlength="100" required  placeholder="Nome completo..."/>
      <input name="usuario" type="text" maxlength="50" required   placeholder="Nome de usuário..."/>
      <input name="email" type="text" maxlength="50" required placeholder="E-mail válido..."/>
      <input name="senha" type="password" maxlength="50" required placeholder="Senha..."/>
      <input name="senhaRep" type="password" maxlength="50"  required placeholder="Repita a senha digitada..."/>
      <input name="cpf" type="text" maxlength="11"  required onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" placeholder="Número de seu C.P.F." />
      <input class="submit" type="submit" value="Cadastrar">
      <p class="message">Já possui uma conta? <a href="acesso.php">Entrar</a></p>
  </form>
  </div>
  </html>