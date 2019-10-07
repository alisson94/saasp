<?php
    include '../php/protegePagina.php';
    include '../php/connect.php';

    $toast;
    if(isset($_SESSION['relatoFeito'])){
        if($_SESSION['relatoFeito'] === true){
        $toast = true;
        $_SESSION['relatoFeito'] = false;
        }
    }

    
    $user = $_SESSION['login'];

    $sql = "SELECT * FROM usuarios WHERE user = '$user'";
    $result = mysqli_query($con, $sql) or die("Erro ao se conectar ao servidor");
    $perfil = mysqli_fetch_assoc($result);
?>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>SAASP - System &copy; </title>
        
        <link rel="stylesheet" href="../css/estilo.css">
        <link rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/menu.js"></script>
        <script src="../js/materialize.min.js"></script>
        
        <link rel="icon" type="imagem/png" href="../img/icon.png">        
    </head>
    <body onLoad='<?php echo $toast ? 'M.toast({html: "Relato enviado ao orgão responsável!"})' : '' ?>'>
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

        <div class="container-center">
        <form class='form' action="../php/cadastrar.php?editar=true" method="post" enctype="multipart/form-data">
        <p class="title"><b>Edite aqui o seu perfil</b></p>
            <div class="input-field">
                <i class="material-icons prefix">location_on</i>
                <input id="nomeC" type="text" name="nomeC" value=<?php echo $perfil['nome'] ?>>
                <label for="nomeC">Nome completo</label>
            </div>

            <div class="input-field">
                <i class="material-icons prefix">location_on</i>
                <input id="usuario" type="text" name="usuario" value=<?php echo $perfil['user'] ?> >
                <label for="usuario">Nome de usuário</label>
            </div>

            <div class="input-field">
                <i class="material-icons prefix">location_on</i>
                <input id="email" type="email" name="email" value=<?php echo $perfil['email'] ?> >
                <label for="email">E-mail</label>
            </div>

            <div class="input-field">
                <i class="material-icons prefix">location_on</i>
                <input id="senha" type="password" name="senha" value=<?php echo $perfil['senha'] ?>>
                <label for="senha">Senha</label>
            </div>

            <div class="input-field">
                <i class="material-icons prefix">location_on</i>
                <input id="senhaRep" type="password" name="senhaRep" value=<?php echo $perfil['senha'] ?>>
                <label for="senhaRep">Repita a senha</label>
            </div>

            <button class="btn waves-effect waves-light teal darken-4 right" type="submit" name="action">Enviar
                <i class="material-icons right">send</i>
            </button>
        </form>
        </div>
    </body>
</html>