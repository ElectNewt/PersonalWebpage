<?php

/*** INICIO IDIOMA**/
//si no tenemos definido la variable de idioma procedemos a localizarla
if(isset($_COOKIE["idioma"])){
	
	if($_COOKIE["idioma"]=='es'){
		        include_once("assets/funciones/esp_lang.php");	
	}elseif($_COOKIE["idioma"]=='en') {
		 include_once("assets/funciones/eng_lang.php");
	}
	
}else{
//TAREAS DE DETECTAR IDIOMA
 function getUserLanguage() {  
       $idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 
       return $idioma;  
  } 

  //Almacenamos dicho idioma en una variable 
  $user_language=getUserLanguage(); 
   
  //De acuerdo al idioma hacemos una o varias redirecciones. 
  if($user_language=='en'){
  	$_COOKIE["idioma"]="en"; 
        include_once("assets/funciones/eng_lang.php");
  } 
  elseif($user_language=='es'){
$_COOKIE["idioma"]="es"; 
       include_once("assets/funciones/esp_lang.php");
 }else{
 	$_COOKIE["idioma"]="en"; 
 	 include_once("assets/funciones/eng_lang.php");
 }
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title><?php echo TITULO_HTML_INDEX ?></title>

		
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link rel="shortcut icon" href="assets/img/favicon.png">
		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		
		<script type="text/javascript" src="assets/js/easing.js"></script>
		<script type="text/javascript" src="assets/js/functions.js"></script>
		
		<link href="assets/css/estilo.css" rel="stylesheet">
	</head>
	
	<body>
<div id="sidebar">
	<div class="title">Ivan Abad</div>
	<div class="menuBtn"> <span class="fa fa-bars fa-lg fa-inverse"> </span></div>
	<div id="menu">
		
		<div class="opcion p-sobremi" data-goto="p-sobremi"><span class="fa fa-user fa-lg"></span>&emsp;&nbsp;&nbsp;<?php echo SOBRE_MI ?></div>
		<div class="opcion p-experiencia" data-goto="p-experiencia"><span class="fa fa-life-ring fa-lg"></span>&emsp;&nbsp;<?php echo EXPERIENCIA ?></div>
		<div class="opcion p-habilidades" data-goto="p-habilidades"><span class="fa fa-star fa-lg"> </span>&emsp;&nbsp;<?php echo HABILIDADES ?></div>
		<div class="opcion p-estudios" data-goto="p-estudios"><span class="fa fa-graduation-cap fa-lg"></span>&emsp;<?php echo ESTUDIOS ?></div>
		<div class="opcion p-trabajos" data-goto="p-trabajos"><span class="fa fa-file-code-o fa-lg"> </span>&emsp;&nbsp;&nbsp;<?php echo TRABAJOS ?></div>
		<div class="subtitle sup"><?php echo OTROS ?></div>		
		<!--  <div class="opcion p-adicional" data-goto="p-adicional"><span class="fa fa-leaf fa-lg"> </span> <?php echo ADICIONAL ?></div>-->
		<?php
		if($_COOKIE['idioma']=="es"){
			?>
			<a class="blanco" target="_blank" onclick="cambiarIdioma('en')"><div class="opcion"><span class="fa fa-exchange fa-lg"> </span>&emsp;English version</div></a>
		<?php
		}else if($_COOKIE['idioma']=="en"){
			?>
			<a class="blanco" target="_blank" onclick="cambiarIdioma('es')"><div class="opcion"><span class="fa fa-exchange fa-lg"> </span>&emsp;&nbsp;Versión española</div></a>
		<?php
		}
		
		?>
		<a class="blanco" target="_blank" href="http://blog.ivanabad.com/"><div class="opcion"><span class="fa fa-globe fa-lg"> </span>&emsp;&nbsp;&nbsp;<?php echo BLOG ?></div>	</a>
	
	</div>
</div>
<div id="main">
	<div class="content">
		<div id="p-sobremi" class="page">
			
			<div class="row">
				
				<div class="col-md-8">
					<h1 class="name">Ivan Abad</h1>
					<span class="quote quoteleft text"><?php echo DESC_SOBRE_MI ?></span>
					<p class="text-justify"><?php echo DES_TOTAL ?></p>
					<br>
					<br>
					<div class="text-center">
						
						<a data-toggle="tooltip" data-placement="bottom" title="LinkedIn" class="btnTol" target="_blank" href="https://www.linkedin.com/pub/ivan-abad-andreu/56/612/2b2"><span class="fa fa-linkedin-square fa-5x linkedIn"></span></a>
						<a data-toggle="tooltip" data-placement="bottom" title="Mail" class="btnTol"  href=""> <span class="fa fa-envelope-square fa-5x correo"></span></a>
						<a data-toggle="tooltip" data-placement="bottom" title="Twitter" class="btnTol" href="https://twitter.com/ivanxo92" target="_blank"> <span class="fa fa-twitter-square fa-5x twitter"></span></a>
						<a data-toggle="tooltip" data-placement="bottom" title="curriculum vitae" class="btnTol" href="assets/otros/IVAN_ABAD_RESUME.pdf" target="_blank"> <span class="fa fa-file-pdf-o fa-4x curriculum"></span></a>
						<a data-toggle="tooltip" data-placement="bottom" title="gitHub" class="btnTol" href="https://github.com/ElectNewt" target="_blank"> <span class="fa fa-github fa-5x gitHub"></span></a>

					</div>
					
				</div>
				<div class="col-md-4 text-center">
					<img src="assets/img/fotoCV.png" style="max-height: 300px;"/>
					<div class="panel panel-default">
					  <div class="panel-body text-left">
					    <span class="fa fa-envelope fa-lg separacionLista"> </span> <br>
					    <span class="fa fa-linkedin-square fa-lg separacionLista"> <a target="_blank" href="https://www.linkedin.com/pub/ivan-abad-andreu/56/612/2b2"> Ivan Abad</a></span><br>
					    <span class="fa fa-skype fa-lg separacionLista"> ivanxo92</span><br>
					    <span class="fa fa-link fa-lg separacionLista"> <a href="http://ivanabad.com">Ivanabad.com</a></span><br>
					    <span class="fa fa-language fa-lg separacionLista"> <?php echo HABLO_INGLES ?></span>
					     
					  </div>
					</div>
				</div>	
			</div>
		</div>
		<div id="p-experiencia" class="page">
			<h1><?php echo EXPERIENCIA ?></h1>
			<br><br>
			<div class="row"> <!-- EStancia en simply -->
				<div class="col-md-12">
					<h2><?php echo ESTANCIA_CLUBTRAVEL ?></h2>
					<h3><?php echo ESTANCIA_CLUBTRAVEL_TIEMPO ?></h3>
					<p class="text-justify"><?php echo ESTANCIA_CLUBTRAVEL_TRABAJANDO ?></p>
				</div>	
			
			</div>

			<br><br>
			<div class="row"> <!-- EStancia en simply -->
				<div class="col-md-12">
					<h2><?php echo ESTANCIA_SIMPLY ?></h2>
					<h3><?php echo ESTANCIA_SIMPLY_TIEMPO ?></h3>
					<p class="text-justify"><?php echo ESTANCIA_SIMPLY_TRABAJANDO ?></p>
				</div>	
			
			</div>
			
			
			<br><br>
				<div class="row"> <!-- Estancia en Moneymate -->
				<div class="col-md-12">
					<h2><?php echo ESTANCIA_MONEYMATE ?></h2>
					<h3><?php echo ESTANCIA_MONEYMATE_TIEMPO ?></h3>
					<p class="text-justify"><?php echo ESTANCIA_MONEYMATE_TRABAJANDO ?></p>
				</div>	
			
			</div>
		
			<br><br>
			<div class="row"> <!-- Estancia en SALUD -->
				<div class="col-md-12">
					<h2><?php echo ESTANCIA_SALUD ?></h2>
					<h3><?php echo ESTANCIA_SALUD_TIEMPO ?></h3>
					<p class="text-justify"><?php echo ESTANCIA_SALUD_TRABAJANDO ?></p>
				</div>	
			</div>
				
			<br><br>
				<div class="row"> <!-- Estancia en Semilly -->
				<div class="col-md-12">
					<h2><?php echo ESTANCIA_SEMILY ?></h2>
					<h3><?php echo ESTANCIA_SEMILY_TIEMPO ?></h3>
					<p class="text-justify"><?php echo ESTANCIA_SEMILY_TRABAJANDO ?></p>
				</div>	
			</div>
			

			
		</div>
		
		
		<div id="p-habilidades" class="page">
		<h1><?php echo HABILIDADES ?></h1>
				<div class="row">
					
					<div class="col-md-3 text-right" id="skillsCol1">
						
						<h3 class="label label-primary "><span class="normal">PHP</span></h3>

						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-o fa-lg separacionLista "></span><br>
						<br>
						<h3 class="label label-primary "><span class="normal">HTML5</span></h3>
						
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span>
						<span class="fa fa-star-o fa-lg separacionLista "></span><br>
						<br>
						<h3 class="label label-primary "><span class="normal">Javascript</span></h3>
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span>
						<span class="fa fa-star-o fa-lg separacionLista "></span><br>
						<br>
						<h3 class="label label-primary "><span class="normal">CSS3</span></h3>

						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-half-empty amarillo fa-lg separacionLista "></span> 
						<span class="fa fa-star-o fa-lg separacionLista "></span><br>
						
				
					<br>
						
						
						
						
					</div>
					<div class="col-md-3 text-right" id="skillsCol2">

						<h3 class="label label-primary "><span class="normal">Vb.Net</span></h3>

						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-half-empty fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-o fa-lg separacionLista "></span><br>
						<br>
						<h3 class="label label-primary "><span class="normal">Java</span></h3>
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-half-empty fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-o fa-lg separacionLista "></span><br>
						<br>
						<h3 class="label label-primary "><span class="normal">C/C++</span></h3>
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-o fa-lg separacionLista "></span> 
						<span class="fa fa-star-o fa-lg separacionLista "></span><br><br>
						<h3 class="label label-primary "><span class="normal">C#</span></h3>	
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-half-empty fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-o fa-lg separacionLista "></span> 
						<span class="fa fa-star-o fa-lg separacionLista "></span><br>

							

						
						
					
								<br>			
					</div>
					<div class="col-md-3 text-right"  id="skillsCol3">
						<h3 class="label label-primary "><span class="normal">JQuery</span></h3>
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span>
						<span class="fa fa-star-o fa-lg separacionLista "></span><br><br>
						
						
						<h3 class="label label-primary "><span class="normal">ExtJS</span></h3>	
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-half-empty fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-o fa-lg separacionLista "></span><br>
						<br>
						<h3 class="label label-primary "><span class="normal">JSP</span></h3>	
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-half-empty fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-o fa-lg separacionLista "></span><br>
						<br>
						<h3 class="label label-primary "><span class="normal">Struts2</span></h3>	
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-o fa-lg separacionLista "></span> 
						<span class="fa fa-star-o fa-lg separacionLista "></span><br>
						<br>
					</div>
					<div class="col-md-3 text-right"  id="skillsCol4">
						<h3 class="label label-primary "><span class="normal">CodeIgniter</span></h3>	
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span>
						<span class="fa fa-star fa-lg separacionLista amarillo"></span>
						<span class="fa fa-star-o fa-lg separacionLista "></span><br>
						<br>
						<h3 class="label label-primary "><span class="normal">Android</span></h3>	
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-half-empty fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-o fa-lg separacionLista "></span> 
						<span class="fa fa-star-o fa-lg separacionLista "></span><br>
						<br>
						<h3 class="label label-primary "><span class="normal">Joomla!</span></h3>	
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-half-empty fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-o fa-lg separacionLista "></span> 
						<span class="fa fa-star-o fa-lg separacionLista "></span><br>
						<br>
						<h3 class="label label-primary "><span class="normal">SQL</span></h3>	
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star fa-lg separacionLista amarillo"></span> 
						<span class="fa fa-star-o fa-lg separacionLista "></span><br>
						<br>
						
						
					</div>
					
				</div>			
		</div>
		
		
		<div id="p-estudios" class="page">
			<h1><?php echo ESTUDIOS ?></h1>
			<div class="row"> <!-- DESARROLLO WEB -->
				<div class="col-md-12">
					<h2><?php echo ESTUDIOS_WEB ?></h2>
					<h3>2014, <?php echo CPIFP_DES_WEB ?></h3>
					<p><?php echo CURSADO_DES_WEB; ?></p>
				</div>	
			
			</div>
			
			<br><br>
			<div class="row"> <!-- DAM -->
				<div class="col-md-12">
					<h2><?php echo ESTUDIOS_DAM ?></h2>
					<h3>2013, <?php echo CPIFP_DES_DAM ?></h3>
					<p><?php echo CURSADO_DES_DAM; ?></p>
					
				</div>
			</div>
		

				<br><br>
			<div class="row"> <!-- JOOMLA -->
				<div class="col-md-12">
					<h2><?php echo ESTUDIOS_JOOMLA ?></h2>
					<h3><?php echo DES_JOOMLA ?></h3>
					<p><?php echo CURSADO_DES_JOOMLA; ?></p>
					
				</div>
			</div>
			<br><br>
			<div class="row"> <!-- VIDEOJUEGOS -->
				<div class="col-md-12">
					<h2><?php echo ESTUDIOS_VIDEOJUEGOS ?></h2>
					<h3><?php echo DES_VIDEOJUEGOS ?></h3>
					<p><?php echo CURSADO_DES_VIDEOJUEGOS; ?></p>
					
				</div>
			</div>		
		<br><br>
			<div class="row"> <!-- GRADO MEDIO-->
				<div class="col-md-12">
					<h2><?php echo ESTUDIOS_MEDIO ?></h2>
					<h3><?php echo DES_MEDIO ?></h3>
					<p><?php echo CURSADO_DES_MEDIO; ?></p>
					
				</div>
			</div>
		
		</div><!-- Fin p-estudios -->
			
			
		
	
		

		<div id="p-trabajos" class="page">
		
				
			<h1><?php echo TRABAJOS ?></h1>
			
			<div class="row">
			<h2><?php echo CLUBLECTURA_TITULO ?> - 2014</h2>
			
			
		
			<p><?php echo CLUBLECTURA_DESCRIPCION; ?></p>
			<img src="assets/img/clublectura.png" class="img-responsive"/><br>
		
			<br><br>
			</div>
			
			
			<div class="row">
			<h2>Imglovely - 2014</h2>
			
			<img src="assets/img/imglovely.png" class="img-responsive"/><br>
		
			<p><?php echo IMGLOVELY_DESCRIPCION; ?></p>
			<img src="assets/img/imglov3vers.png" class="img-responsive"/><br>
			<p><?php echo IMGLOVELY_PRESENTACION ?></p>
			<br><br>
			</div>
			<div class="row">
				<h2 class="text-primary"><?php echo CASA_APUESTAS ?></h2>
				<p><?php echo CASA_APUESTAS_DESCRIPCION ?></p>
				<img src="assets/img/casaapuestas.png" class="img-responsive" style="max-height: 250px;"/><br>
				<p><?php echo CASA_APUESTAS_PRESENTACION ?></p>
			</div>
			
			
		</div>
		
	<div id="p-piedenota"> 
		<h1></h1>
	<?php echo PIE_PAGINA ?>	
	</div>
		
		
	</div>

</div>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47907461-1', 'auto');
  ga('send', 'pageview');

</script>



	</body>
	
</html>