<!doctype html>
<html lang="en-us">
<?php include("eXist.php")?>
    <head>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <title>Projeto MegaLOD</title>
        <meta name="description" content="">

        <!-- The compiled CSS file -->
        <link rel="stylesheet" href="css/production.css">
        

        <!-- Web fonts -->
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">

        <!-- favicon.ico. Place these in the root directory. -->
        <link rel="shortcut icon" href="favicon.ico">

    <style>
        body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: absolute;
  z-index: 1;
  top: 0;
  right: 0;
  float: right;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
    </style>

    </head>

    <body class="has-animations">

    <!-- Navigation Bar-->

    <!DOCTYPE html>
<html>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">Página Inicial</a>
  <a href="pesquisa_avancada.php">Pesquisa Avançada</a>
  <a href="sobre.php">Sobre</a>
  <a href="documentacao.php">Documentação</a>
  <a href="#">Inserir ficheiro</a>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer;float:right;" onclick="openNav()">&#9776;</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 


    <!-- Header -->
    <header class="pt2 pb1 align--center">
        <div class="container">
            <h1>Projeto MegaLOD</h1>
        </div> <br>

        <p>Este projeto foi desenvolvido com o principal objetivo da definição de um esquema XML para Pontas de seta
            de cronologia compreendida entre o Calcolítico e o Bronze Antigo/Médio (2800/2900 a 1500 A.C)
        </p>
    </header>

    <!-- Body -->
    <main>
    <?php

$conexion=new eXist("admin","admin");
$conexion->setURL("http://localhost:8080/exist/rest/db/apps/MegaLOD");
$ch = curl_init("http://localhost:8080/exist/rest/db/apps/MegaLOD");
		
		
        curl_setopt($ch, CURLOPT_USERPWD, "admin:admin");
		
		
				
				
				
				
				curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/exist/rest/db/apps/MegaLOD/views/test.xquery");
		
	


        $response = curl_exec($ch);
        error_log($response);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);




?>
        
        <div class="container">


        </div>

        <div class = "container align--center">
        
        <ul class="no-bullets list--inline mt2">
            <li class="mr1"><a href="https://www.ceos.iscap.ipp.pt/?lang=pt" target="_blank"><img src="img/ceos.png" alt="CEOS.PP" style="height:56px;"></a></li>
            <li class="mr1"><a href="https://www.iscap.ipp.pt" target="_blank"><img src="img/iscap.jpg" alt="ISCAP" style="height:56px;"></a></li>
        </ul>

        </div>


    </main>

    <!-- Footer -->
    <footer class="pt2 pb2">
        <div class="container align--center">
            <ul class="no-bullets list--inline mt1">
                <li class="mr1"><a href="https://www.facebook.com/CEOS.PP/?locale=pt_PT" class="link" target="_blank"><img class="icon" src="img/facebook.svg" alt="Facebook"></a></li>
                <li class="mr1"><a href="https://twitter.com/iscap_p" class="link" target="_blank"><img class="icon" src="img/twitter.svg" alt="Twitter"></a></li>
                <li><a href="https://www.instagram.com/iscap.pporto/" class="link" target="_blank"><img class="icon" src="img/instagram.svg" alt="Instagram"></a></li>
            </ul>
        </div>
    </footer>

    <!-- Scroll reveal -->
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <!-- The compiled JavaScript file -->
    <script src="js/production.js"></script>

    </body>

    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</html>

