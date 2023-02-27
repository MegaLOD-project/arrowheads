<?php 

 require_once('config.php');
 
 
           // echo file_get_contents($xql);
		 $restopath="/db/apps/MegaLOD/views/";
	$filtro=$_GET['filtro'];
	include("eXist.php");
            

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

 
      <?php 
	  
	  
	  $xql = REST_PATH . $restopath.'buscar-palabra2.xquery';
	  
$data = array('filtro' => $filtro);

// use key 'http' even if you send the request to https://...
$options = array('http' => array(
    'method'  => 'POST',
    'content' => http_build_query($data)
));

$context  = stream_context_create($options);
$result = file_get_contents($xql, false, $context);

print_r($result);
	
?>

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
	var path="<?php echo  REST_PATH.$restopath; ?>";
	
    document.location.href = path+"buscar-palabra.xquery?filtro=" + res;
    return false;
    }); 
    </script>
    </div>
        </body>
</html>