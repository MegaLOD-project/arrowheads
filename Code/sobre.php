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
            <h1>Sobre o Projeto</h1>
        </div> <br>

        <p style ="text-align: center; margin-left: 60px; margin-right: 60px;">O presente projeto consiste a definição de um esquema XML para Pontas de Seta, de cronologia compreendida entre
            Calcolítico e o Bronze Antigo Médio (2800/2900 a 1500 A.C). Foi também desenvolvido um dataser com os dados dos achados
            mencionados do sítio arqueológico de Castanheiro do Vento, Horta do Douro, Vila Nova de Foz Côa, Guarda, Portugal.
            O presente website foi desenvolvido com o objetivo de facilitar a criação de datasets XML de Pontas de Seta da cronologia
            previamente referida.</p>
        </header>
 <main>
        <div class="pt2 pb0 align--center">
            <h2>Equipa</h2>
        </div>

          
            <div class="container">

          
          <section class="grid-row grid-row--center">
              
              <div class="grid-column span-half pt3 pb3 mobile-m order-1 reveal-on-scroll is-revealing">
                  <div class="relative">
                      <img class="info-image relative z2" src="img/marco.png" alt="Marco Oliveira"/>
                      
                  </div>
              </div>
              <div class="grid-column span-half pt3 pb3 mobile-m order-2">
                  <h3>Marco Oliveira</h3>
                  <p><b>Função: </b>Estagiário</p>
                  <p><b>Contacto: </b>939438498</p><br>
                  <blockquote class="blockquote">asdasdasdasdas</blockquote>
              </div>
              <div class="grid-column span-half pt3 pb3 mobile-m order-4">
                    <h3>Mariana Malta</h3>
                    <p><b>Função: </b>Tutora de Estágio</p>
                    <p><b>Contacto: </b>931245789<p> <br>
                    <blockquote class="blockquote">asdasdasdasdas</blockquote>
                </div>
                <div class="grid-column span-half pt3 pb3 mobile-m order-3 reveal-on-scroll is-revealing">
                    <div class="relative">
                        <img class="info-image relative z2" src="https://i1.rgstatic.net/ii/profile.image/502287884062721-1496766171526_Q512/Mariana-Malta.jpg" alt="Mariana Malta">
                    </div>
                </div>
          </section>
          </div>
          </section>

          <div class = "container align--center">
        <h3 style="text-align:center;">Afiliações</h3>    
        <ul class="no-bullets list--inline mt2">
            <li class="mr1"><a href="https://www.ceos.iscap.ipp.pt/?lang=pt" target="_blank"><img src="img/ceos.png" alt="CEOS.PP" style="height:56px;"/></a></li>
            <li class="mr1"><a href="https://www.iscap.ipp.pt" target="_blank"><img src="img/iscap.jpg" alt="ISCAP" style="height:56px;"/></a></li>
        </ul>

        </div>


    </main>
      <br>
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

