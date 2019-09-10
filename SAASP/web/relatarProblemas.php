<?php
    include '../php/protegePagina.php';
?>
<html>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="../css/estilo.css">
        <script src="../js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="../js/menu.js"></script>
        <title>SAASP - System &copy; </title>
        <link rel="icon" type="imagem/png" href="../img/icon.png">
        <meta name="viewport" content="width=device-width, user-scalable=no">   
        <meta name="viewport" content="width=500, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        
    </head>
    <body>
        <div id='cssmenu'>
            <ul>
                <li><a href='index.php'> &#xe802; Home</a></li>
               <li class="active"><a href='relatarProblemas.php'>&#xe800; Relatar Problemas</a>
                  <ul>
                      <li><a href='meusRelatos.php'>&#xe803; Meus Relatos</a>
                     </li>
                  </ul>
               </li>
                <li class='active'><a href='#'>&#xf2bd; Perfil</a>
                  <ul>
                     <li><a href='#'>&#xe804; Editar Perfil</a>
                     </li>

                  </ul>
               </li>
               <li><a href="../php/deslogar.php">&#xe801; Logout</a>
                     </li>
            </ul>
        </div>
        <form class="form" action="../php/relatar.php" method="post" enctype="multipart/form-data">
            <p class="title">Dados do problema encontrado: </p>
            <select name="orgao" required>
                <option value="">Orgão responsável por resolução: </option>
                <option value="orgao1">Orgao1</option>
                <option value="orgao2">Orgao2</option>
                <option value="orgao3">Orgao3</option>
            </select><br>
            <input type="text" name="descricao" required placeholder="Descreva seu relato aqui"><br>
            <select name="gravidade" required>
                    <option value="">Gravidade: </option>
                    <option value="alta">Alta</option>
                    <option value="media">Média</option>
                    <option value="baixa">Baixa</option>
            </select><br>
            <input type="text" name="local" required placeholder="Onde se encontra o problema?"><br>
            <input type="date" name="data" required><br>
            <input type="file" name="imagem" required>
            <input class="submit" type="submit" value="Enviar">
        </form>
    </body>
</html>