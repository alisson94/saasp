<?php
    include '../php/protegePagina.php';
    include '../php/connect.php';
    $autor = $_SESSION['login'];
?>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>SAASP - System &copy; </title>
        
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="../css/estilo.css">
        <link rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/menu.js"></script>
        <script src="../js/materialize.min.js"></script>
        
        <link rel="icon" type="imagem/png" href="../img/icon.png">        
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
  <div class="row">
        <?php
            $sql = "SELECT * FROM relatos WHERE autor = '$autor' ORDER BY id DESC";
            $result = mysqli_query($con, $sql) or die("Erro ao se conectar ao servidor");
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    ?>

        <div class="col s12 m4" style="">
            <div class="containerRelato modal-trigger 
                <?php
                    if($row['resolvido'] == "sim"){
                        echo 'green white-text';
                    }elseif($row['resolvido'] == "pro"){
                        echo 'orange white-text';
                    }
                ?>
            " data-target="modal<?php echo $row['id'] ?>">
                <p class='textoRelato'><b>Descrição: </b> <?php echo $row['descricao'] ; ?> </p>
                <p class='textoRelato'><b>Gravidade: </b> <?php echo $row['gravidade'] ; ?> </p>
                <p class='textoRelato'><b>Local: </b> <?php echo $row['local'] ; ?> </p>
                <p class='textoRelato'><b>Data: </b> <?php echo Date('d-m-Y', strtotime($row['data'])); ?> </p>
                <p class='textoRelato'><b>Estado: </b> 
                    <?php
                        if($row['resolvido'] == "sim"){
                            echo 'Resolvido';
                        }elseif($row['resolvido'] == "pen"){
                            echo 'Pendente';
                        }else{
                            echo 'Em processo';
                        }
                    ?> </p>
                <p class="textoRelato"><b>Comentário: </b><?php echo $row['comentario'] ;?></p>
            </div>
        </div>
        <!--MODAL-->
        <div id="modal<?php echo $row['id'] ?>" class="modal modal-fixed-footer modalRelato">
            <form action="" method="GET">
                <div class="modal-content">
                    <center><h5><b>Detalhes do relato</b></h5>
                       <img src="imagensRelatos/<?php echo $row['imagem']; ?>" class="responsive-img" style="max-width: 100%;">
                        
                    </center>
                    <ul style="font-size: 20px;">
                        <li><b>Descrição: </b><?php echo $row['descricao'] ; ?></li>
                        <li><b>Gravidade: </b><?php echo $row['gravidade'] ; ?></li>
                        <li><b>Local: </b><?php echo $row['local'] ; ?></li>
                        <li><b>Data: </b><?php echo $row['data'] ; ?></li>
                        <li><b>Estado: </b><?php 
                        if($row['resolvido'] == "sim"){
                            echo 'Resolvido';
                        }elseif($row['resolvido'] == "pen"){
                            echo 'Pendente';
                        }else{
                            echo 'Em processo';
                        } ?> </li>
                        <li><b>Comentário do Responsável:</b><?php echo $row['comentario'];?></li>
                    </ul>
                </div>
                
                <!-- <div class="modal-footer">
                    <button class='btn waves-effect teal darken-4' type='submit' >Enviar
                        <i class="material-icons right">send</i>
                    </button>
                </div> -->
                   
                
            </form>
        </div>
        <?php
                }
            }
            mysqli_close($con);
        ?>
        
    </div>
        
    </body>
</html>
