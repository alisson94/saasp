<script>
    const list = []
    <?php
        include '../../php/protegePagina.php';
        include '../../php/connect.php';
        $orgao = $_SESSION['login'];

        $listEstado = ['sim', 'pen', 'pro'];
        $listNumEstatisticasRelatos = array();

        for ($i=1; $i < 13; $i++) { 
            $numEstados = [0,0,0];

            foreach ($listEstado as $key => $value) {
                $sql = "SELECT * FROM relatos WHERE orgao = '$orgao' AND resolvido = '$value' AND mes = $i";
                $result = mysqli_query($con, $sql) or die("Erro ao se conectar ao servidor");
                
                if($result){
                    $numEstados[$key] = mysqli_num_rows($result);
                }
            }

            $listNumEstatisticasRelatos[$i - 1] = $numEstados;
            ?>
                list.push([<?php echo $numEstados[0] ?>, <?php echo $numEstados[1] ?>, <?php echo $numEstados[2] ?>])
            <?php
        }
        
    ?>

</script>
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
    <script src="../../js/Chart.min.js"></script>

    
    <link rel="icon" type="imagem/png" href="../../img/icon.png">        
</head>
<body onLoad="iniciarGrafico(list)">
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
        
        <!-- COMEÇAR AQUI -->
        <center>
        
            <div class="chart-container" style="position: relative; height:40vh; width:80vw">
                <h6><b>Estatísticas dos Relatos</b></h6>
                    <canvas id="myChart"></canvas>
            </div>
        
        </center>


        <script src="../../js/grafico.js"></script>
    </body>
</html>