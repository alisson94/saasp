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
        <ul id="drop1" class="dropdown-content teal darken-4">
            <li><a class="white-text" href="relatarProblemas.php">Relatar problemas</a></li>
            <li><a class="white-text" href="meusRelatos.php">Meus relatos</a></li>

        </ul>
        <nav class="teal darken-4">
            <div class="nav-wrapper">
            <a href="#" class="brand-logo logo"><img class="logo" src="../img/icon.png" /></a>
            <span id="title"  class="white-text flow-text hide-on-med-and-down">SAASP</span>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
                <li><a href="" class="dropdown-trigger" data-target="drop1">Relatos<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="##">Perfil</a></li>
                <li><a href="../php/deslogar.php">Sair</a></li>
            </ul>
            </div>
        </nav>

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
