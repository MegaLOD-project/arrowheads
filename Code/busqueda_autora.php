<?php


header('Content-Type: text/html; charset=utf-8');
include("eXist.php");

$paratexto=$_GET['para'];

$filtro=$_GET['filtro'];

$busqueda=$_GET['busqueda'];

$nfiltros=$_GET['numfiltros'];




?>
<html lang="es_ES">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bieses</title>
<link href="http://www.bieses.net/estilos/estilosbiesespropio.css"  rel="stylesheet"/>
<link href="css/bootstrap-3.3.6.css" rel="stylesheet"/>
<link href="http://www.bieses.net/wp-content/themes/grandcollege_v1-08/style.css"  rel="stylesheet" type="text/css"/>
<link href="http://www.bieses.net/wp-content/themes/grandcollege_v1-08/stylesheet/skeleton.css"  rel="stylesheet" />
<link href="http://www.bieses.net/wp-content/themes/grandcollege_v1-08/stylesheet/layout.css"  rel="stylesheet" />
<link href="http://www.bieses.net/wp-content/themes/grandcollege_v1-08/style-custom.php?ver=4.4.3"  rel="stylesheet" />
<link href="wp-content/themes/grandcollege_v1-08/style-custom.php?ver=4.4.3"  rel="stylesheet" />
<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->

<link rel="shortcut icon" id="flags_tpw_flags_css-css" href="wp-content/plugins/transposh-translation-filter-for-wordpress/widgets/select2/select2.css?ver=0.9.4.0"  type="text/css" media="all"/>
<link rel="stylesheet" id="Google-Font-css" href="estilos/fuentes.css" type="text/css" media="all"/>
<link rel='stylesheet' id='superfish-css'  href='http://www.bieses.net/wp-content/themes/grandcollege_v1-08/stylesheet/superfish.css?ver=4.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='prettyPhoto-css'  href='http://www.bieses.net/wp-content/themes/grandcollege_v1-08/stylesheet/prettyPhoto.css?ver=4.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='nivo-slider-css'  href='http://www.bieses.net/wp-content/themes/grandcollege_v1-08/stylesheet/nivo-slider.css?ver=4.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='nivo-slider-style-css'  href='http://www.bieses.net/wp-content/themes/grandcollege_v1-08/stylesheet/nivo-slider-style.css?ver=4.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='flex-slider-css'  href='http://www.bieses.net/wp-content/themes/grandcollege_v1-08/stylesheet/flexslider.css?ver=4.4.3' type='text/css' media='all' />
<link rel="alternate" type="application/rss+xml" title="Bieses &raquo; Feed" href="http://www.bieses.net/feed/" />
<link rel="alternate" type="application/rss+xml" title="Bieses &raquo; RSS de los comentarios" href="http://www.bieses.net/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Bieses &raquo; Quiénes somos RSS de los comentarios" href="http://www.bieses.net/quienes-somos/feed/" />
<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/www.bieses.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.4.3"}};
			!function(a,b,c){function d(a){var c,d,e,f=b.createElement("canvas"),g=f.getContext&&f.getContext("2d"),h=String.fromCharCode;return g&&g.fillText?(g.textBaseline="top",g.font="600 32px Arial","flag"===a?(g.fillText(h(55356,56806,55356,56826),0,0),f.toDataURL().length>3e3):"diversity"===a?(g.fillText(h(55356,57221),0,0),c=g.getImageData(16,16,1,1).data,g.fillText(h(55356,57221,55356,57343),0,0),c=g.getImageData(16,16,1,1).data,e=c[0]+","+c[1]+","+c[2]+","+c[3],d!==e):("simple"===a?g.fillText(h(55357,56835),0,0):g.fillText(h(55356,57135),0,0),0!==g.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag"),unicode8:d("unicode8"),diversity:d("diversity")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag&&c.supports.unicode8&&c.supports.diversity||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<script type='text/javascript' src='http://www.bieses.net/wp-includes/js/jquery/jquery.js?ver=1.11.3'></script>
<script type='text/javascript' src='http://www.bieses.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='http://www.bieses.net/wp-includes/js/swfobject.js?ver=2.2-20120417'></script>
<script type='text/javascript' src='http://www.bieses.net/wp-content/plugins/page-flip-image-gallery/js/flippingbook.js?ver=0.5.10'></script>
<script type='text/javascript' src='//www.bieses.net/wp-content/plugins/transposh-translation-filter-for-wordpress/widgets/select2/select2.min.js?ver=0.9.4.0'></script>
<script type='text/javascript' src='//www.bieses.net/wp-content/plugins/transposh-translation-filter-for-wordpress/widgets/select2/tpw_select2.js?ver=0.9.4.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var URL = {"goodlayers":"http:\/\/www.bieses.net\/wp-content\/themes\/grandcollege_v1-08"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.bieses.net/wp-content/themes/grandcollege_v1-08/javascript/jquery.preloader.js?ver=1.0'></script>
<link rel='https://api.w.org/' href='http://www.bieses.net/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.bieses.net/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.bieses.net/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 4.4.3" />
<link rel="canonical" href="http://www.bieses.net/quienes-somos/" />
<link rel='shortlink' href='http://www.bieses.net/?p=2205' />
<link rel="alternate" type="application/json+oembed" href="http://www.bieses.net/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.bieses.net%2Fquienes-somos%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://www.bieses.net/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.bieses.net%2Fquienes-somos%2F&#038;format=xml" />
<link rel="alternate" hreflang="en" href="/quienes-somos/?lang=en"/>
<script type="text/javascript">
<!--
/******************************************************************************
***   COPY PROTECTED BY CHETANGOLE.COM/BLOG/WP-COPYPROTECT   version 3.0.0 ****
******************************************************************************/
function clickIE4(){
if (event.button==2){
return false;
}
}
function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("return false")
// --> 
</script>
<!-- PageFlip Book Lite -->
<script type="text/javascript" src="http://www.bieses.net/wp-content/plugins/wppageflip/js/swfobject.js"></script>
<!-- PageFlip Book Lite //-->
<!-- FB Thumbnail
   ================================================== -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="home page page-id-9 page-template-default"  >

	<div id="custom-full-background"><img src="http://www.bieses.net/wp-content/uploads/2013/05/fondo3.png" alt="" /></div>
    <div class="body-wrapper">



	

	

	<div class="container">
<div class="header-wrapper">

			<div class="inner-header-wrapper">

				<!-- Get Logo -->

				<div class="logo-wrapper">

					<a href="http://www.bieses.net/"><img src="http://www.bieses.net/wp-content/uploads/2013/04/Logotipo-Web-Bieses.png" alt="logo"/></a>				</div>

				

				<!-- Get Search -->

								<div class="search-wrapper"><form method="get" id="searchform" action="http://www.bieses.net/">

	<div id="search-text">

				<input type="text" value="Escriba sus palabras clave..." name="s" id="s" autocomplete="off" data-default="Escriba sus palabras clave..." />

	</div>

	<input type="submit" id="searchsubmit" value="Buscar"/>

	<br class="clear">

</form>

</div> 

								

				<br class="clear">

			</div> <!-- Inner header wrapper -->

			<!-- Navigation -->
            

			<div class="sixteen columns mb0">

								<div class="navigation-wrapper">

					<!-- Get Navigation -->

					<div id="main-superfish-wrapper" class="menu-wrapper"><ul id="menu-menu-principal" class="sf-menu"><li id="menu-item-4971" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-9 current_page_item menu-item-4971"><a href="http://www.bieses.net/">Inicio</a></li>
<li id="menu-item-4964" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-9 current_page_item menu-item-has-children menu-item-4964"><a href="http://www.bieses.net/">Conoce Bieses</a>
<ul class="sub-menu">
	<li id="menu-item-4972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4972"><a href="http://www.bieses.net/que-es-bieses/">Qué es Bieses</a></li>
	<li id="menu-item-4973" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4973"><a href="http://www.bieses.net/objetivos-del-proyecto/">Objetivos del proyecto</a></li>
	<li id="menu-item-4974" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4974"><a href="http://www.bieses.net/destinatarios/">Destinatarios</a></li>
	<li id="menu-item-4975" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4975"><a href="http://www.bieses.net/quienes-somos/">Quiénes somos</a></li>
	<li id="menu-item-4976" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4976"><a href="http://www.bieses.net/financiacion/">Financiación</a></li>
</ul>
</li>
<li id="menu-item-4977" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-9 current_page_item menu-item-has-children menu-item-4977"><a href="http://www.bieses.net/">Proyecto Bieses</a>
<ul class="sub-menu">
	<li id="menu-item-4978" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4978"><a href="http://www.bieses.net/base-de-datos-bieses/">Base de datos Bieses</a></li>
	<li id="menu-item-4979" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4979"><a href="http://www.bieses.net/lista-de-autoras/">Lista de autoras</a></li>
</ul>
</li>
<li id="menu-item-4980" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-9 current_page_item menu-item-has-children menu-item-4980"><a href="http://www.bieses.net/">Recursos Bieses</a>
<ul class="sub-menu">
	<li id="menu-item-4981" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4981"><a href="http://www.bieses.net/bibliografias-en-pdf/">Bibliografías en PDF</a></li>
	<li id="menu-item-4982" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4982"><a href="http://www.bieses.net/ediciones-en-formato-digital/">Ediciones digitalizadas</a></li>
	<li id="menu-item-4983" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4983"><a href="http://www.bieses.net/textos/">Textos</a></li>
	<li id="menu-item-4984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4984"><a href="http://www.bieses.net/estudios-en-formato-digital/">Estudios en PDF</a></li>
	<li id="menu-item-4990" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4990"><a href="http://www.bieses.net/recursos-didacticos/">Recursos didácticos</a></li>
</ul>
</li>
<li id="menu-item-4986" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4986"><a href="http://www.bieses.net/noticias/">Noticias</a>
<ul class="sub-menu">
	<li id="menu-item-4987" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4987"><a href="http://www.bieses.net/category/congresos-bieses/">Congresos &#8211; Seminarios &#8211; Conferencias</a></li>
	<li id="menu-item-4988" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4988"><a href="http://www.bieses.net/category/publicaciones-bieses/">Publicaciones</a></li>
</ul>
</li>
<li id="menu-item-4965" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4965"><a href="http://www.bieses.net/enlaces/">Enlaces</a></li>
<li id="menu-item-4989" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4989"><a href="http://www.bieses.net/contacto/">Contacto</a></li>
</ul></div>

					<div class="social-wrapper">

						<div class="social-icon-wrapper">

							<div class="social-icon"><a href="https://www.facebook.com/pages/Proyecto-Bieses/599194933454831" target="_blank"><img src="http://www.bieses.net/wp-content/themes/grandcollege_v1-08/images/icon/light/social/facebook.png" alt="facebook"/></a></div><div class="social-icon"><a href="https://twitter.com/Proyecto_Bieses" target="_blank"><img src="http://www.bieses.net/wp-content/themes/grandcollege_v1-08/images/icon/light/social/twitter.png" alt="twitter"/></a></div>						</div>

					</div>

					

					<br class="clear">

				</div>

			</div>

			<br class="clear">

		</div> <!-- header-wrapper -->

 <div class="content-wrapper sidebar-included right-sidebar busquedas">

			

		<div class="page-wrapper">
		

   
      

            <div class="sixteen columns mt10 mb20" id="padre">
            
  
     <div class=" row">
     <div class="fifteen columns wrapper" >
    <h1 class=" title-color" style="margin-top:15px; font-size:1.25em !important; color:#9c4f21; font-weight:700; text-align:center !important">Resultados de la búsqueda <span style="color:#000000"><?php if ($nfiltros==0) echo "de obras de tipo ".$busqueda; ?></span> </h1></div>
    
    </div>
    <div class="row">
    <div class="fourteen columns wrapper"  style="float:left; margin-left:3%" >

<?php
$conexion=new eXist("admin","admin");
$conexion->setURL("http://localhost:8080/exist/rest/db/apps/MegaLOD");
$ch = curl_init("http://localhost:8080/exist/rest/db/apps/MegaLOD");
		
		
        curl_setopt($ch, CURLOPT_USERPWD, "utilizador:senha");
		
		
				
				
				$parametro=$filtro;
				
				
				curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/exist/rest/db/apps/MegaLOD/views/filtra.xquery?filtro=".$filtro);
		
	


        $response = curl_exec($ch);
		print($response);
        error_log($response);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
		print_r($response);




?>

        </div>
       
        


</div>
</div>

</div>
<div class="clear"></div>
			<div class="content-bottom-gimmick"></div>
</div>
<div class="footer-wrapper">
			<div class="footer-blank-space"></div>		

			<div class="container mt0">
			<!-- Get Footer Widget -->
			<?php if( $gdl_show_footer =! 'enable' ){ ?>
				<div class="footer-widget-wrapper">
					<?php
						$gdl_footer_class = array(
							'footer-style1'=>array('1'=>'four columns', '2'=>'four columns', '3'=>'four columns', '4'=>'four columns'),
							'footer-style2'=>array('1'=>'eight columns', '2'=>'four columns', '3'=>'four columns', '4'=>'display-none'),
							'footer-style3'=>array('1'=>'four columns', '2'=>'four columns', '3'=>'eight columns', '4'=>'display-none'),
							'footer-style4'=>array('1'=>'one-third column', '2'=>'one-third column', '3'=>'one-third column', '4'=>'display-none'),
							'footer-style5'=>array('1'=>'two-thirds column', '2'=>'one-third column', '3'=>'display-none', '4'=>'display-none'),
							'footer-style6'=>array('1'=>'one-third column', '2'=>'two-thirds column', '3'=>'display-none', '4'=>'display-none'),
							);
						$gdl_footer_style = get_option(THEME_SHORT_NAME.'_footer_style', 'footer-style1');
					 
						for( $i=1 ; $i<=4; $i++ ){
							echo '<div class="' . $gdl_footer_class[$gdl_footer_style][$i] . ' mb0">';
							dynamic_sidebar('Footer ' . $i);
							echo '</div>';
						}
					?>
					<br class="clear">
				</div>
			<?php } ?>
			
			
			<!-- Get Copyright Text -->
			<?php if( $gdl_show_copyright =! 'enable' ){ ?>
				<div class="copyright-wrapper gdl-divider">
					<div class="copyright-left">
						<?php echo get_option(THEME_SHORT_NAME.'_copyright_left_area') ?>
					</div> 
					<div class="copyright-right">
						<?php echo get_option(THEME_SHORT_NAME.'_copyright_right_area') ?>
					</div> 
					<div class="clear"></div>
				</div>
			<?php } ?>
			</div> <!-- container-wrapper -->
		</div><!-- footer-wrapper -->
</div>
</div> <!-- body-wrapper -->


<script type="text/javascript"> 	
	<?php include ( TEMPLATEPATH."/javascript/cufon-replace.php" ); ?>
</script>
</body>
<script language="javascript">


	$('.frase').click(
	function (){
		alert('hola')
    $(".parrafo").hide();
		
	}
	
	);
	


</script>
</html>