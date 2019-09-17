<?php
    include '../../php/protegePagina.php';
    include '../../php/connect.php';
    $orgao = $_SESSION['login'];
?>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>SAASP - System &copy; </title>
    
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/estilo.css">
    <link rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/menu.js"></script>
    <script src="../../js/materialize.min.js"></script>
    
    <link rel="icon" type="imagem/png" href="../../img/icon.png">        
</head>
<body>
    <!--DROPS DO MENU-->
    <ul id="drop1" class="dropdown-content">
        <li><a class="grey-text text-darken-2 waves-effect" href="relatos.php">Todos relatos<i class='material-icons left'>list</i></a></li>
        <li><a class="grey-text text-darken-2 waves-effect" href="estatisticas.php">Estatísticas<i class='material-icons left'>timeline</i></a></li>
    </ul>
    <ul id="drop2" class="dropdown-content">
        <li><a class="grey-text text-darken-2 waves-effect" href="editarPerfil.php">Editar perfil<i class='material-icons left'>edit</i></a></li>
        <li><a class="grey-text text-darken-2 waves-effect" href="../../php/deslogar.php">Sair<i class='material-icons left'>undo</i></a></li>
    </ul>
    <!--MENU NAV-->
    <nav class="teal darken-4">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo logo"><img class="logo" src="../../img/icon.png" /></a>
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
            $sql = "SELECT * FROM relatos WHERE orgao = '$orgao' ORDER BY id DESC";
            $result = mysqli_query($con, $sql) or die("Erro ao se conectar ao servidor");
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    ?>

        <div class="col s12 m6">
            <div class="card horizontal">
                <div class="card-image">
                    <img style='max-height: 300px; ' src="../imagensRelatos/<?php echo $row['imagem']; ?>">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p class='textoRelato'>Descrição: <?php echo $row['descricao'] ; ?></p>
                        <p class='textoRelato'>Gravidade: <?php echo $row['gravidade'] ; ?></p>
                        <p class='textoRelato'>Local: <?php echo $row['local'] ; ?></p>
                        <p class='textoRelato'>Data: <?php echo $row['data'] ; ?></p>
                    </div>
                    <div class="card-action grey lighten-3">
                        <a class='dropdown-trigger btn' href='#' data-target='btnDrop1'>Drop Me!</a>
                    </div>
                    <ul id="btnDrop1" class="dropdown-content">
                        <li>Teste</li>
                        <li>Teste</li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
                }
            }
            mysqli_close($con);
        ?>
        
    </div>

        <!--
        <div id="tabela">
        <?php
            $sql = "SELECT * FROM relatos WHERE orgao = '$orgao' ORDER BY id DESC";
            $result = mysqli_query($con, $sql) or die("Erro ao se conectar ao servidor");
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                <table class="table table-responsive">
            <tr>
               <td>
                <figure>
                    <img src="../imagensRelatos/<?php echo $row['imagem']; ?>">
                </figure>
                  <p><b>Descriçao: </b><?php echo $row['descricao'] ; ?></p><br>
                  <p><b>Gravidade: </b><?php echo $row['gravidade'] ; ?></p><br>
                  <p><b>Local: </b><?php echo $row['local'] ; ?></p><br>
                  <p><b>Data: </b><?php echo $row['data'] ; ?></p><br>
                
              </td>/
              <td><a class="btnstatus" href="../../php/status.php?i=<?php echo $row['id'] ?>"><?php if($row['resolvido'] == "sim"){echo "Resolvido";}elseif($row['resolvido'] == "and"){echo "Em andamento";}else{echo "Não resolvido";} ?></a></td>
            </tr>
        </table>
                    <?php
                }
            }
            mysqli_close($con);
        ?>
        </div> 
            -->

    </body>
</html>