<?php
    include '../../php/protegePagina.php';
    include '../../php/connect.php';
?>
<html>
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
                <li><a href='index.php'> &#xe802; Home</a></li>
               <li class="active"><a href=''>&#xe800; RELATOS</a>
                  <ul>
                      <li><a href='estatisticas.php'>&#xe803; ESTATISTICAS</a>
                     </li>
                  </ul>
               </li>
                <li class='active'><a href='#'>&#xf2bd; Perfil</a>
                  <ul>
                     <li><a href='#'>&#xe804; Editar Perfil</a>
                     </li>

                  </ul>
               </li>
               <li><a href="../../php/deslogar.php">&#xe801; Logout</a>
                     </li>
            </ul>
        </div>
        
          <div id="tabela">
            <?php
                $sql = "SELECT * FROM relatos ORDER BY id DESC";
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
                        <p><b>Autor: </b><?php echo $row['autor'] ; ?></p><br>
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