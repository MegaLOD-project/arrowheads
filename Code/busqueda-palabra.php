<?php 

 require_once('config.php');
 
 
           // echo file_get_contents($xql);
		 $restopath="/db/apps/MegaLOD/views/";
            

?>
<html>
    <head>
        <title>Búsqueda de una palabra</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <!-- Optional theme -->
    <link rel="shortcut icon" href="imagenes/favicon.ico"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="estilos/paratextos.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
    </head>
    <body>
    <div class="container-fluid">
     <!-- <div class="cabecera"><?php include("cabecera.php"); ?> </div> -->
    
<!--</div>
<div class="col-md-3" style=" padding-top:20px;padding-left:0px; margin-left:0px">-->

 
        <h1 style="color:#602b15">Filtro Avançado</h1>
            <br/>
       <form method="get" id="fpalabra">

<div class="row">
<div class="col-md-4  input">
<label>Palavra chave</label>
                        <input name="palabra" id="palabra" type="text"/>
<br/>
                        <br/>
                        <br/>
                        <br/>
                    </div>
<div class="col-md-6  input">
<p>
  <label>Selecione o elemento a ser procurado</label>
                            <br/>
                            <br/>
                            <br/>
    <input type="checkbox" name="bibliotecas" value="type" id="type"/>
    Type
  <br/>
                            <br/>
                            <br/>
</p>


 
	
   

</div>
</div>
<div class="row">
<div class="col-md-4  input">
<input type="submit" id="btn_palabra" value="Procurar"/>
</div>
</div>
      
</form>


<!-- <div class="row pie">
<?php include("pie.php"); ?>
</div> -->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script>
    
    $("#btn_palabra").click(function(){
    
    var palabra=$("#palabra").val();
    
    var checked = [];
//Recorremos todos los input checkbox con name = Colores y que se encuentren "checked"
$("input[name='bibliotecas']:checked").each(function ()
{
//Mediante la función push agregamos al arreglo los values de los checkbox
checked.push(($(this).attr("value")));

});

var res=checked.toString();

res=res.replace(/,/g,"|");
res=res+','+palabra;
// Utilizamos console.log para ver comprobar que en realidad contiene algo el arreglo
	
	
    document.location.href = "recuperar-palabra.php?filtro="+res;
    return false;
    }); 
    </script>
    </div>
        </body>
</html>