<?php 
    include '../../php/protegePagina.php';
?>

<!doctype html>
<html lang='PT-BR'>
<head>
   <meta charset='utf-8'>
   <link rel="stylesheet" href="../../css/menu.css">
   <link rel="stylesheet" href="../../css/estilo.css">
   <script src="../../js/jquery-3.3.1.min.js" type="text/javascript"></script>
   <script src="../../js/menu.js"></script>
   <title>SAASP - System &copy; </title>
   <link rel="icon" type="imagem/png" href="../../img/icon.png">
   <meta name="viewport" content="width=device-width, user-scalable=no">   
    <meta name="viewport" content="width=500, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    
</head>
<body>
    <div id='cssmenu'>
        <ul>
           <li><a href='#'> &#xe802; Home</a></li>
           <li class="active"><a href='relatos.php'>&#xe800; RELATOS</a>
              <ul>
                  <li><a href='estatisticas.php'>&#xe803; ESTATISTICAS</a>
                 </li>
              </ul>
           </li>
            <li class='active'><a href='#'>&#xf2bd; Perfil</a>
           </li>
           <li><a href="../../php/deslogar.php">&#xe801; Logout</a>
                 </li>
        </ul>
    </div>

    <center><img src="../../img/icon.png"></center>
    <center><b>Projeto - SAASP</b></center>
    <center><b><?php echo $_SESSION['login']; ?></b></center>

</body>
<html>
