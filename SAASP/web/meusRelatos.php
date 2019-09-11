<?php
    include '../php/protegePagina.php';
    include '../php/connect.php';
    $autor = $_SESSION['login'];
?>
<html>
    <head>
        <meta charset='utf-8'>
        <title>SAASP - System &copy; </title>
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="../css/estilo.css">
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <script src="../js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="../js/menu.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        
        <link rel="icon" type="imagem/png" href="../img/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="viewport" content="width=device-width, user-scalable=no">   
        <meta name="viewport" content="width=500, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        
    </head>
    <body>
        <!--DROPS DO MENU-->
        <ul id="drop1" class="dropdown-content">
            <li><a class="grey-text text-darken-2 waves-effect" href="relatarProblemas.php">Relatar problema<i class='material-icons left'>add</i></a></li>
            <li><a class="grey-text text-darken-2 waves-effect" href="meusRelatos.php">Meus relatos<i class='material-icons left'>list</i></a></li>
        </ul>
        <ul id="drop2" class="dropdown-content">
            <li><a class="grey-text text-darken-2 waves-effect" href="editarPerfil.php">Editar perfil<i class='material-icons left'>edit</i></a></li>
            <li><a class="grey-text text-darken-2 waves-effect" href="../php/deslogar.php">Sair<i class='material-icons left'>undo</i></a></li>
        </ul>
        <!--MENU NAV-->
        <nav class="teal darken-4">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo logo"><img class="logo" src="../img/icon.png" /></a>
                <span id="title"  class="white-text flow-text hide-on-med-and-down">SAASP</span>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.php" class='waves-effect waves-light'>Home<i class='material-icons left'>home</i></a></li>
                    <li><a href="" class="dropdown-trigger waves-effect waves-light" data-target="drop1">Relatos<i class='material-icons left'>assignment</i><i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="##" class="dropdown-trigger waves-effect waves-light" data-target="drop2">Perfil<i class='material-icons left'>person_pin</i><i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
                <a  href="#" data-target="slide-out" class="sidenav-trigger btn-flat waves-effect waves-light"><i class="material-icons white-text">menu</i></a>
            </div>
        </nav>
        <!--SIDE MENU-->
        <ul id="slide-out" class="sidenav">   
            <li><a href="index.php" class='waves-effect'>Home<i class='material-icons left'>home</i></a></li>
            <li><a href="relatarProblemas.php" class='waves-effect'>Relatar problema<i class='material-icons left'>add</i></a></li>
            <li><a href="meusRelatos.php" class='waves-effect'>Meus relatos<i class='material-icons left'>list</i></a></li>
            <li><div class="divider"></div></li>
            <li><a href="editarPerfil.php" class='waves-effect'>Editar perfil<i class='material-icons left'>edit</i></a></li>
            <li><a href="../php/deslogar.php" class='waves-effect'>Sair<i class='material-icons left'>undo</i></a></li>
          </ul>

 
			<div id="tabela">
        <?php
            $sql = "SELECT * FROM relatos WHERE autor = '$autor' ORDER BY id DESC";
            $result = mysqli_query($con, $sql) or die("Erro ao se conectar ao servidor");
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                <table class="table table-responsive">
                <tr>
                   <td>
                    <figure>
                        <img src="imagensRelatos/<?php echo $row['imagem']; ?>">
                    </figure>
                    <p><b>Orgão: </b><?php echo $row['orgao'] ; ?></p><br>
                    <p><b>Descriçao: </b><?php echo $row['descricao'] ; ?></p><br>
                    <p><b>Gravidade: </b><?php echo $row['gravidade'] ; ?></p><br>
                    <p><b>Local: </b><?php echo $row['local'] ; ?></p><br>
                    <p><b>Data: </b><?php echo $row['data'] ; ?></p><br>
                    <p><b>Status: </b><?php if($row['resolvido'] == "sim"){echo "Resolvido";}else{echo "Não resolvido";} ?></p>
                    
                  </td>
                </tr>
        </table>
                    <?php
                }
            }
            mysqli_close($con);
        ?>
        </div> 
    </body>
</html>