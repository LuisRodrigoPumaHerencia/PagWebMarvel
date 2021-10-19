<?php
	$titulo = "<title>Vengadores</title>";
	$LosVengadores = "<h5>Los Vengadores</h5>";
	$OrdenPeliculas = "<h1>Orden de las Películas.</h1>";
	$txtBotonVermas = "Ver más";
	$Informacion = "<h5>Información</h5>";
	$OrdenNarrativo = "<h1>Orden Narrativo</h1>";
	$ResumenPagina = "En esta página encontrarás el orden narrativo de todas las películas de Los Vengadores.";
	$DirectoresuOtros = "DIRECTORES U OTROS";
	$JOERUSSO = "JOE RUSSO";
	$CATESHOTRLAND = "<h3>Cate Shortland</h3>";
	$JOSS = "<h3>Joss Whedon</h3>";
	$ANTHONY = "<h3>Anthony Russo</h3>";
	$STAN = "<h3>Stan Lee</h3>";
	$JACK = "<h3>Jack Kirby</h3>";
	$txtContactanos = "Contáctanos";
	$txtMasInformacion = "Mas Información";
	$txtinfordennarracion = "Los Vengadores nacen en 1963 de la mente de Stan Lee y Jack Kirby, como respuesta a la famosa Liga de la Justicia de DC cómic que, por aquel entonces, acaparaba todos los números uno en los rankings de ventas.";
	$numerosTexto = array("<h3>Primero</h3>", "<h3>Segundo</h3>", "<h3>Tercero</h3>", "<h3>Cuarto</h3>", "<h3>Quinto</h3>", "<h3>Sexto</h3>", "<h3>Séptimo</h3>", "<h3>Octavo</h3>", "<h3>Noveno</h3>", "<h3>Décimo</h3>", "<h3>Décimo Primero</h3>", "<h3>Décimo Segundo</h3>"
	, "<h3>Décimo Tercero</h3>", "<h3>Décimo Cuarto</h3>", "<h3>Décimo Quinto</h3>", "<h3>Décimo Sexto</h3>", "<h3>Décimo Séptimo</h3>", "<h3>Décimo Octavo</h3>", "<h3>Décimo Noveno</h3>", "<h3>Vigésimo</h3>", "<h3>Vigésimo Primero</h3>");
	$años = array("<p>2008</p>","<p>2010</p>","<p>2011</p>","<p>2012</p>","<p>2013</p>","<p>2014</p>","<p>2015</p>","<p>2016</p>","<p>2017</p>","<p>2018</p>","<p>2019</p>");
	$peliculas = array(
	"<h4>Capitán América: El primer vengador</h4>
	<p>No es la primera película producida por Marvel pero sí que es la primera película que debes ver para poder entender la historia del Universo Cinematográfico de Marvel, ya que está ambientada en la Segunda Guerra Mundial.</p>",
	"<h4>Capitana Marvel</h4>
	<p>La película es la historia de origen de Capitana Marvel, y no solo está ambientada en los años 90, sino que sentará las bases sobre todo lo que ocurre en la Fase 4.</p>",
	"<h4>Iron Man</h4>
	<p>La película que dio el pistoletazo de salida al Universo Cinematográfico de Marvel (UCM) y al cambio más grande en el cine de Hollywood. Conocemos a Tony Stark, que será el personaje sobre el que gire toda la franquicia hasta 'Vengadores: Endgame'.</p>",
	"<h4>El increíble Hulk</h4>
	<p>Esta nueva versión de Hulk, después del fracaso de la película de Ang Lee, tampoco convenció a nadie. Además, Edward Norton y su carácter complicado provocó que Marvel le sustituyese por Mark Ruffalo.</p>",
	"<h4>Iron Man 2</h4>
	<p>Segunda aventura de Tony Stark y, aunque la crítica la vapuleó, fue un éxito de taquilla y nos presentó a la Viuda Negra de Scarlett Johansson, además de Máquina de Guerra con la cara de Don Cheadle.</p>",
	"<h4>Thor</h4>
	<p>Presentación de Thor, de Loki (el villano más famoso de todas las películas) e incluso de Ojo de Halcón en un papel menor.</p>",
	"<h4>Los Vengadores</h4>
	<p>La culminación de la Fase 1 es esta epopeya con una de las peleas finales mejor coreografiadas de los últimos años. Empezamos a conocer las dinámicas de los personajes y a Thanos, en la escena post-créditos.</p>",
	"<h4>Iron Man 3</h4>
	<p>La película que ayudó a forjar la relación entre Iron Man y Pepper Potts, además de para entender un poco más al atribulado Tony Stark después de los eventos ocurridos en 'Los Vengadores'.</p>",
	"<h4>Thor: El mundo oscuro</h4>
	<p>Esta película funcionaría perfectamente como independiente de todo el UCM, salvo por una cosa: conocemos una de las Gemas del Infinito, que en la película es denominada Éter.</p>",
	"<h4>Capitán América: El Soldado de Invierno</h4>
	<p>Fue una revolución total en el UCM. Gracias a esta entrega, no solo nos reencontramos con Bucky Barnes (vital en el futuro Marvel), sino que además descubrimos uno de los giros de guión más dramáticos de los últimos años con la identidad real de S.H.I.E.L.D.</p>",
	"<h4>Guardianes de la Galaxia</h4>
	<p>Apuesta bastante arriesgada de Marvel pero que le salió a la perfección. Nos presenta a varios superhéroes totalmente desconocidos para el gran público y consigue que les cojamos cariño al instante. Además, nos ayuda a conocer un poco más de Thanos, el gran enemigo en la sombra.</p>",
	"<h4>Guardianes de la Galaxia Vol. 2</h4>
	<p>Las dos entregas funcionan a la perfección de manera independiente al UCM, ya que ni transcurren en la Tierra, y ninguno de sus personajes interactúa con los que ya conocemos.</p>",
	"<h4>Vengadores: La era de Ultrón</h4>
	<p>Esta cinta también supuso un antes y un después en el futuro marvelita: los Vengadores se disuelven, conocemos a Visión y a Bruja Escarlata y el romance entre Viuda Negra y Hulk.</p>",
	"<h4>Ant-Man</h4>
	<p>Al igual que 'Guardianes de la Galaxia', esta película funciona de manera independiente, ya que es una historia cerrada y autoconclusiva que nos muestra al personaje de Scott Lang y su conversión en Ant-Man.</p>",
	"<h4>Capitán América: Civil War</h4>
	<p>Otra entrega vital para entender lo que vendrá. Reencuentro de los Vengadores (salvo Hulk y Thor), e inicio de la pelea entre Capitán América y Iron-Man por culpa de los llamados Acuerdos de Sokovia, que quiere controlar a los superhéroes. Tony Stark está de acuerdo. Steve Rogers no.</p>",
	"<h4>Black Panther</h4>
	<p>Película de presentación del personaje, que conocimos por primera vez en 'Capitán América: Civil War', y que también funciona como historia independiente. Como curiosidad: es la primera vez que el héroe cambia de parecer gracias al villano.</p>",
	"<h4>Spider-Man: Homecoming</h4>
	<p>Otra película presentación, aunque no del personaje, sino del actor que lo interpreta, ya que al menos nos libramos de ver de nuevo la historia de cómo le pica la araña a Peter Parker. Aunque ya le hemos visto en 'Capitán América: Civil War', aquí le conocemos de verdad.</p>",
	"<h4>Ant-Man y la Avispa</h4>
	<p>Secuela de 'Ant-Man', que vuelve a funcionar como película independiente salvo por dos cosas: conocemos más sobre el Reino Cuántico, que será vital para el desarrollo de 'Vengadores: Endgame', y por la escena poscréditos, que mejor no verla por ahora. Luego os explicamos por qué.</p>",
	"<h4>Doctor Extraño</h4>
	<p>Presentación del personaje de Stephen Strange, además de conocer el funcionamiento de las Gemas del Infinito y cómo funcionan las distintas realidades.</p>",
	"<h4>Vengadores: Infinity War</h4>
	<p>Primera de las dos entregas que culminarán la Fase 3 de Marvel, además de los 10 primeros años de historia del UCM. Por fin conocemos las motivaciones de Thanos y vemos a todos los héroes en pantalla (es que no falta ni uno... bueno, sí... uno sí). Su final aún duele en el corazón de miles de fans.</p>",
	"<h4>Vengadores: Endgame</h4>
	<p>Culminación de todo lo anterior, y cuyo final abre un nuevo camino hacia lo que nos vendrá a partir de ahora, sentando las bases de la conocida como Fase 4. Es la reunión más ambiciosa de superhéroes jamás vista, y (aunque batallando con 'Avatar') se convirtió en la película más taquillera de todos los tiempos.</p>"
	);
	$destacados = "<h5>DESTACADOS</h5>
	<h1>PELÍCULAS MAS DESTACADAS DE LOS VENGADORES</h1>";
	$FECHA = date('d/m/y');
	$PELICULASDESTACADASATRAS = array(
	"  <h4>Capitana Marvel</h4>		      
	<p>Recaudación: $1,128,274,794</p>
	<p>A muchos les sorprendió el desempeño alcanzado por un personaje casi desconocido fuera de los cómics, que además venía de encabezar la saga Civil War II en la que le tocó el papel de “policía malo” en frente del mismísimo Ion Man.</p>		               
 	",
	"<h4>Capitan America</h4>
	<p>Recaudación: $1,153,304,495</p>
	<p>Entre sus logros está haber adaptado de manera brillante una de las obras más laureadas de Marvel Comics. Además, nos presentó enormes batallas entre algunos de nuestros superhéroes más queridos, y realizó el milagro de introducir a Spider-Man al MCU.</p>			               
   	",
	"<h4>Pantera Negra</h4>		      
	<p>Recaudación: $1,346,913,171</p>
	<p>Toda una cultura finalmente se vio reflejada en el cine, con una sorprendente recepción por parte del público y una buena cantidad de nominaciones a grandes premios de la industria como los Oscar.</p>			               
	 ",
	"<h4>Los Vengadores: Endgame</h4>		      
	<p>Recaudación: $2,797,800,564</p>
	<p>Esta es la número uno de las películas más taquilleras de Marvel. Si algo estuvieron haciendo Keven Feige y su gente, fue ir formando un mosaico que cuenta la historia de cómo un grupo de héroes se van uniendo para derrotar una amenaza universal. La película más taquillera de la historia está protagonizada por héroes de Marvel. ¡Yei!</p>			               
 	",
	"<h4>Los Vengadores: Infinity War</h4>		      
	<p>Recaudación: $2,048,359,754</p>
	<p>Dirigida por los hermanos Russo, la primera parte de la batalla contra Thanos significó una gran derrota para los héroes, pero una gran taquilla para la compañía. Apenas superada por su segunda parte.</p>			               
 	",
	"<h4>The Avengers</h4>		      
	<p>Recaudación: $1,518,812,988</p>
	<p>Luego de las aventuras en solitario de Iron Man, Hulk, Capitán América y Thor, y luego de escucha r en cada una sobre la Iniciativa Avenger, llegó por fin la primera genial muestra del universo de cine que se estaba construyendo.</p>			               
 	"
	);
	//ENVIAR CORREO
	/*
	<div class="form-field">
 						   <input name="Nombres" type="text" id="contactName" placeholder="Nombres" value="" minlength="2" required="">
                  </div>
                  <div class="form-field">
	      			   <input name="Correo" type="email" id="contactEmail" placeholder="Correo" value="" required="">
	               </div>
                  <div class="form-field">
	     				   <input name="Tema" type="text" id="contactSubject" placeholder="Tema" value="">
	               </div>                       
                  <div class="form-field">
	                 	<textarea name="Mensaje"
	*/
	
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="es"> <!--<![endif]-->
<head>

   <!--- NECESIDADES BASICAS DE LA PAGINA
   ================================================== -->
   <meta charset="utf-8">
   <?php echo $titulo;?>
   <meta name="description" content="">  
   <meta name="author" content="">

   <!-- BIBLIOTECAS NECESARIAS PARA MÓVILES
   ================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     

   <!-- SCRIPTS
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>
	<script src="https://kit.fontawesome.com/a4e57dfa0a.js" crossorigin="anonymous"></script>
   <!-- FAVICOS
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

	<!-- HEADER 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<div class="logo">
		         <a href="index.html">KARDS</a>
		      </div>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Inicio</a></li>
						<li><a class="smoothscroll"  href="#about" title="">Directores u otros</a></li>
						<li><a class="smoothscroll"  href="#resume" title="">Películas</a></li>
						<li><a class="smoothscroll"  href="#portfolio" title="">Peliculas Taquilleras</a></li>
						<li><a class="smoothscroll"  href="#services" title="">Estrategias</a></li>					
						<li><a class="smoothscroll"  href="#contact" title="">Contáctanos</a></li>				
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- INTRODUCCION
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

			   	<?php echo $LosVengadores;?>
	   			<?php echo $OrdenPeliculas;?>

	   			<p class="intro-position">
	   				<span>Para que lo disfrutes</span>
	   				<span>Junto a tu familia</span> 
	   			</p>

	   			<a class="button stroke smoothscroll" href="#about" title=""><?php echo $txtBotonVermas;?></a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   	<ul class="intro-social">        
         <li><a href="https://www.facebook.com/MarvelLatinoamerica"><i class="fa fa-facebook"></i></a></li>
         <li><a href="https://twitter.com/Marvel"><i class="fa fa-twitter"></i></a></li>
         <li><a href="https://www.instagram.com/marvellatam/"><i class="fa fa-instagram"></i></a></li>
      </ul> <!-- /intro-social -->      	

   </section> <!-- /INTRODUCCION -->


   <!-- DIRECTORES U OTROS
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

		   	<?php echo $Informacion;?>
   			<?php echo $OrdenNarrativo;?>
			<!--<div class="intro-info"> <=== REDONDITO EH-->
   				<img src="images/conjunto.jpeg" alt="Profile Picture">
   				<p class="lead"><?php echo $ResumenPagina;?></p>
   		</div>   		
   	</div> <!-- /section-intro -->
	
   	<div class="row about-content">
		<h1 style="text-align: center;"><?php echo $DirectoresuOtros;?></h1>
   		<div class="col-six tab-full">
			
   			<ul class="info-list" align="center">
				<li>
					<h3 class="folio-title"><?php echo $JOERUSSO;?></h3>
					<img src="images/DIRECTORES/primero.jpg" length="300" width="300">
   				</li>
   				<li>
				   <?php echo $CATESHOTRLAND;?>
					<img src="images/DIRECTORES/segundo.jpg" length="300" width="300">
   				</li>
   				<li>
				  	<?php echo $JOSS;?>
					<img src="images/DIRECTORES/tercero.jpg" length="300" width="300">
   				</li>
   			</ul> <!-- /info-list -->

   		</div>

   		<div class="col-six tab-full">
			<ul class="info-list" align="center">
				<li>
					<?php echo $JOSS;?>
					<img src="images/DIRECTORES/cuarto.jpg" length="300" width="300">
   				</li>
   				<li>
				   <?php echo $STAN;?>
					<img src="images/DIRECTORES/quinto.jpg" length="300" width="300">
   				</li>
   				<li>
				   <?php echo $JACK;?>
					<img src="images/DIRECTORES/sexto.jpg" length="300" width="300">
   				</li>
   			</ul> <!-- /info-list -->
   		</div>

   	</div>
   	<div class="row button-section">
   		<div class="col-twelve">
   			<a href="#contact" title="Hire Me" class="button stroke smoothscroll"><?php echo $txtContactanos;?></a>
   			<a href="#" title="Download CV" class="button button-primary"><?php echo $txtMasInformacion;?></a>
   		</div>   		
   	</div>

   </section> <!-- /DIRECTORES U OTROS-->    


   <!-- PELICULAS
   ================================================== -->
	<section id="resume" class="grey-section">

		<div class="row section-intro">
   		<div class="col-twelve">
		   <?php echo $OrdenNarrativo;?>
   			<p style="text-align: justify;"><?php echo $txtinfordennarracion;?></p>

   		</div>   		
   	</div>

   	<div class="row resume-timeline">
   		<div class="col-twelve">

   			<div class="timeline-wrap">

   				<div class="timeline-block">

	   				<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">1</strong>
	   				</div>

	   				<div class="timeline-header">
					   <?php echo $numerosTexto[0];?>
					   <?php echo $años[2];?>
	   				</div>

	   				<div class="timeline-content">
					   <?php echo $peliculas[0];?> </div>

	   			</div> <!-- /timeline-block -->
				
				   <div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">2</strong>
					</div>

					<div class="timeline-header">
					<?php echo "$numerosTexto[1]";?>
					<?php echo "$años[10]";?>
					</div>

					<div class="timeline-content">
					<?php echo "$peliculas[1]";?> </div>

				</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">3</strong>
	   				</div>

	   				<div class="timeline-header">
					   <?php echo "$numerosTexto[2]";?>
					   <?php echo "$años[0]";?>
	   				</div>

	   				<div class="timeline-content">
	   				<?php echo $peliculas[2];?> </div>

	   			</div> <!-- /timeline-block -->
				
				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">4</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[3];?>
					<?php echo $años[0];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[3];?> </div>
				</div> <!-- /timeline-block -->

				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">5</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[4];?>
					<?php echo $años[1];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[4];?> </div>
				</div> <!-- /timeline-block -->

				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">6</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[5];?>
					<?php echo $años[0];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[5];?> </div>
				</div> <!-- /timeline-block -->

				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">7</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[6];?>
					<?php echo $años[3];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[6];?> </div>
				</div> <!-- /timeline-block -->

				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">8</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[7];?>
					<?php echo $años[4];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[7];?></div>
				</div> <!-- /timeline-block -->

				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">9</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[8];?>
					<?php echo $años[4];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[8];?></div>
				</div> <!-- /timeline-block -->

				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">10</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[9];?>
					<?php echo $años[5];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[9];?></div>
				</div> <!-- /timeline-block -->

				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">11</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[10];?>
					<?php echo $años[5];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[10];?></div>
				</div> <!-- /timeline-block -->

				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">12</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[11];?>
					<?php echo $años[8];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[11];?></div>
				</div> <!-- /timeline-block -->

				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">13</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[12];?>
					<?php echo $años[6];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[12];?></div>
				</div> <!-- /timeline-block -->

				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">14</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[13];?>
					<?php echo $años[6];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[13];?></div>
				</div> <!-- /timeline-block -->

				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">15</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[14];?>
					<?php echo $años[7];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[14];?></div>
				</div> <!-- /timeline-block -->

				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">16</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[15];?>
					<?php echo $años[9];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[15];?></div>
				</div> <!-- /timeline-block -->

				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">17</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[16];?>
					<?php echo $años[8];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[16];?></div>
				</div> <!-- /timeline-block -->

				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">18</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[17];?>
					<?php echo $años[9];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[17];?></div>
				</div> <!-- /timeline-block -->

				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">19</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[18];?>
					<?php echo $años[7];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[18];?></div>
				</div> <!-- /timeline-block -->

				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">20</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[19];?>
					<?php echo $años[9];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[19];?></div>
				</div> <!-- /timeline-block -->

				<div class="timeline-block">

					<div class="timeline-ico">
						<i class="fa fa-stack-2x"></i>
						<strong class="fa-stack-1x">21</strong>
					</div>

					<div class="timeline-header">
					<?php echo $numerosTexto[20];?>
					<?php echo $años[10];?>
					</div>

					<div class="timeline-content">
					<?php echo $peliculas[20];?></div>
				</div> <!-- /timeline-block -->
   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
	</section> <!-- /PELICULAS -->


	<!-- PELICULAS TAQUILLERAS
   ================================================== -->
	<section id="portfolio">

		<div class="row section-intro">
   		<div class="col-twelve">

		   <?php echo "$destacados";?>

   			<p class="lead">En esta sección encontrarás las películas mas destacadas de los vengadores</p>

   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row portfolio-content">

   		<div class="col-twelve">

   			<!-- portfolio-wrapper -->
	         <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

	         	<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/DESTACADOS/CapitanaMarvel.png" alt="Liberty">
	                  <a href="#modal-01" class="overlay">	                  	           
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
		     					       <h3 class="folio-title">Capitana Marvel</h3>	     					    
		     				</div>	                      	
	                     </div>                    
	                  </a>
	                </div>	               
	        	</div> <!-- /folio-item -->

	        	<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/DESTACADOS/capitanAmerica.jpg" alt="Shutterbug">
	               	<a href="#modal-02" class="overlay">              		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Capitan America: Civil War</h3>	 
		     				</div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        	</div> <!-- /folio-item -->

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/DESTACADOS/PanteraNegra.jpg"alt="Clouds">
	                  <a href="#modal-03" class="overlay">             		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Pantera Negra</h3>	     					    		     		
		     				</div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        	</div> <!-- /folio-item -->

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/DESTACADOS/EndGame.jpg" alt="Beetle">
	                  <a href="#modal-04" class="overlay">                  	                 
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Los Vengadores: Endgame</h3>	     					    
		     				</div>  	                      	
	                     </div>                    
	                  </a>
	               </div>
	        	</div> <!-- /folio-item -->     

	        	<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/DESTACADOS/infinitiWar.jpg" alt="Lighthouse">
	                  <a href="#modal-05" class="overlay">             		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Los Vengadores: Infinity War</h3>	     					    
		     				</div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        	</div> <!-- /folio-item -->

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/DESTACADOS/vengadores1.jpg" alt="Salad">
	                  <a href="#modal-06" class="overlay">
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Los Vengadores</h3>	     					    
		     				</div>	                      	
	                     </div>                    
	                  </a>
	               </div>
	        	</div> <!-- /folio-item -->   

	            <!-- modal popups - begin
	            ============================================================= -->
	            <div id="modal-01" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/DESTACADOS/CapitanaMarvel.png" alt="" />
				     	</div>      	

					   <div class="description-box">
					   <?php echo $PELICULASDESTACADASATRAS[0];?>  </div>

			         <div class="link-box">
			            <a href="https://www.youtube.com/watch?v=6XkN-MFNZpI">Tráiler</a>
					      <a href="#" class="popup-modal-dismiss">Salir</a>
			         </div>		      

				   </div> <!-- /modal-01 -->

				   <div id="modal-02" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/DESTACADOS/capitanAmerica.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					   <?php echo $PELICULASDESTACADASATRAS[1];?></div>

			         <div class="link-box">
			            <a href="https://youtu.be/dKrVegVI0Us">Tráiler</a>
					      <a href="#" class="popup-modal-dismiss">Salir</a>
			         </div>		      

				   </div> <!-- /modal-02 -->

				   <div id="modal-03" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/DESTACADOS/PanteraNegra.jpg" alt="" />
				     	</div>      	

					   	<div class="description-box">
						   <?php echo $PELICULASDESTACADASATRAS[2];?></div>

			         <div class="link-box">
			            <a href="https://youtu.be/dxWvtMOGAhw">Tráiler</a>
					      <a href="#" class="popup-modal-dismiss">Salir</a>
			         </div>		      

				   </div> <!-- /modal-03 -->

				   <div id="modal-04" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/DESTACADOS/EndGame.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					   <?php echo $PELICULASDESTACADASATRAS[3];?></div>

			         <div class="link-box">
			            <a href="http://www.behance.net">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-04 -->

				   <div id="modal-05" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/DESTACADOS/infinitiWar.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					   <?php echo $PELICULASDESTACADASATRAS[4];?></div>

			         <div class="link-box">
			            <a href="https://youtu.be/6ZfuNTqbHE8">Tráiler</a>
					      <a href="#" class="popup-modal-dismiss">Salir</a>
			         </div>		      

				   </div> <!-- /modal-05 -->

				   <div id="modal-06" class="popup-modal slider mfp-hide">	
				     	<div class="media">
				     		<img src="images/DESTACADOS/vengadores1.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					   <?php echo $PELICULASDESTACADASATRAS[5];?></div>

			         <div class="link-box">
			            <a href="https://youtu.be/eOrNdBpGMv8">Tráiler</a>
					      <a href="#" class="popup-modal-dismiss">Salir</a>
			         </div>		      

				   </div> <!-- /modal-06 -->


				   <!-- modal popups - end
	            ============================================================= -->

	         </div> <!-- /portfolio-wrapper --> 

   		</div>  <!-- /twelve -->   

   	</div> <!-- /portfolio-content --> 
		
	</section> <!-- /PELICULAS TAQUILLERAS --> 


	<!-- ESTRATEGIAS
   ================================================== -->
	<section id="cta" class="grey-section">

   	<div class="row cta-content">

   		<div class="col-twelve section-ads">  

	     		<h2 class="h01"><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Styleshout Recommends Dreamhost.</a></h2>

		      <p class="lead">
		      Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
				Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>. 
				<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->	
				</p>

				<div class="action">
			      <a class="button button-primary large" href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Sign Up Now</a>
		      </div>		     	

   		</div>

   	</div> <!-- /cta-content -->

   </section> <!-- /cta --> 

	
	<!-- services Section
   ================================================== -->
	<section id="services">

		<div class="overlay"></div>

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Recaudación</h5>
   			<h1>¿Sabes cuánto recaudo Marvel con topas estas películas?</h1>

   			<p class="lead">Hasta el momento Marvel ha recaudado mas de 18 mil millones de dólares. </p>
			<p class="lead">Y todo ello es gracias a sus estrategias:</p>
   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row services-content">

   		<div id="owl-slider" class="owl-carousel services-list">

	      	<div class="service">	

	      		<span class="icon"><i class="icon-earth"></i></span>            

	            <div class="service-content">	
	            	 <h3>Popularidad</h3>

		            <p class="desc">Marvel buscaba ganar popularidad y aprobecho que los comics de Stan Lee estaban ganando popularidad y decidieron producir películas de los personajes de dichos comics 
	         		</p>
	         		
	         	</div> 	         	 

				</div> <!-- /service -->

				<div class="service">	

					<span class="icon"><i class="icon-window"></i></span>                          

	            <div class="service-content">	

	            	<h3>Tráilers</h3>  

		            <p class="desc">La perfecta elaboracón de los tráilers también les ayudó bastante ya que gracias a ellos las personas quedaban ansiosas de ver la película
	         		</p>

	            </div>	                          

			   </div> <!-- /service -->

			   <div class="service">

			   	<span class="icon"><i class="icon-paint-brush"></i></span>		            

	            <div class="service-content">

	            	<h3>Colores</h3>

		            <p class="desc">Realizaron una investigación acerca de la percepción visual que generaban en una muestra de personas y resultó que el rojo se les hacía mas llamativo
	        			</p> 

	            </div> 	            	               

			   </div> <!-- /service -->

				<div class="service">

					<span class="icon"><i class="icon-toggles"></i></span>	              

	            <div class="service-content">

	            	<h3>Ajustes</h3>

		            <p class="desc">Gracias a los constantes ajustes que se han estado haciendo en la película para que esta de un impacto al publico es por lo que llegaron a ser tan exitosas.
	         		</p> 
	         		
	            </div>                

				</div> <!-- /service -->

			   <div class="service">

			   	<span class="icon"><i class="icon-image"></i></span>	            

	            <div class="service-content">

	            	<h3>Gráficos</h3>

		            <p class="desc">Los gráficos desarrollados en las películas fueron muy expectaculares que casi a nadie se le había ocurrido y las diferentes maneras de mostrarlos era realmente destacable.
	        			</p> 

	            </div>	               

			   </div> <!-- /service -->

			   <div class="service">

			   	<span class="icon"><i class="icon-chat"></i></span>	   	           

	            <div class="service-content">

	            	 <h3>Doblaje</h3>

		            <p class="desc">El doblaje fue otro de las causas de su gran éxito ya que los que interpretaban a los personajes era tan realista que emocionaba a las personas.
	        			</p> 
	        			
	            </div>	               

			   </div> <!-- /service -->

	      </div> <!-- /services-list -->
   		
   	</div> <!-- /services-content -->
		
	</section> <!-- /ESTRATEGIAS -->	


	<!-- INFO MARVEL
   ================================================== -->
	<section id="stats" class="count-up">

		<div class="row">
			<div class="col-twelve">

				<div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-pencil-ruler"></i>
						</div>

						<h3 class="stat-count">
							29
						</h3>

						<h5 class="stat-title">
							Projectos Completados
						</h5>

					</div> <!-- /stat -->					

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-users"></i>
						</div>

						<h3 class="stat-count">
							21
						</h3>

						<h5 class="stat-title">
							Actores
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-badge"></i>
						</div>

						<h3 class="stat-count">
							27
						</h3>

						<h5 class="stat-title">
							Premios Oscars
						</h5>

					</div> <!-- /stat -->									

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-light-bulb"></i>
						</div>

						<h3 class="stat-count">
							6
						</h3>

						<h5 class="stat-title">
							Películas mas Taquilleras
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-cup"></i>
						</div>

						<h3 class="stat-count">
							+5000
						</h3>

						<h5 class="stat-title">
							Millones de visualizaciones
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-clock"></i>
						</div>

						<h3 class="stat-count">
							266
						</h3>

						<h5 class="stat-title">
							Horas
						</h5>

					</div> <!-- /stat -->

				</div> <!-- /stats-list -->

			</div> <!-- /twelve -->
		</div> <!-- /row -->

	</section> <!-- /INFO MARVEL -->

	
   <!-- CONTACTANOS
   ================================================== -->
	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">
   			<h5>Contáctanos</h5>
   			<h1>Comunicate con nosotros para más información</h1>
			<h5>Fecha <?php echo ": $FECHA";?></h5>
   		</div> 
   	</div> <!-- /section-intro -->

   	<div class="row contact-form">

   		<div class="col-twelve">

            <!-- form -->
            <form  method="sendEmail.php" name="contactForm"  action="">
      			<fieldset>

                  <div class="form-field label">
 						   <input name="contactName" type="text" id="contactName" placeholder="Nombres" value="" minlength="2" required="">
                  </div>
                  <div class="form-field label">
	      			   <input name="contactEmail" type="email" id="contactEmail" placeholder="Correo" value="" required="">
	               </div>
                  <div class="form-field label">
	     				   <input name="contactSubject" type="text" id="contactSubject" placeholder="Tema" value="">
	               </div>                       
                  <div class="form-field label">
	                 	<textarea name="contactMessage" id="contactMessage" placeholder="Escribe tu mensaje" rows="10" cols="50" required=""></textarea>
	               </div>                      
                 <div class="form-field label">
                     <button name="enviar" class="submitform">Enviar</button>
                     <div id="submit-loader">
                        <div class="text-loader">Cargando...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>
				  <?php
					if (isset($_POST['enviar'])){
						/*Configuracion de variables para enviar el correo*/
						include("sendemail.php");//Mando a llamar la funcion que se encarga de enviar el correo e
						$mail_username="tochoherencia@gmail.com";//Correo electronico saliente ejemplo: tucorreo@gmail.com
						$mail_userpassword="luis@123";//Tu contraseña de gmail
						$mail_addAddress="tochoherencia@gmail.com";//correo electronico que recibira el mensaje
						$template="index.html.php";//Ruta de la plantilla HTML para enviar nuestro mensaje
						
						/*Inicio captura de datos enviados por $_POST para enviar el correo */
						$mail_setFromEmail=$_POST['contactEmail'];
						$mail_setFromName=$_POST['contactName'];
						$txt_message=$_POST['contactMessage'];
						$mail_subject=$_POST['contactSubject'];
						
						sendemail($mail_username,$mail_userpassword,$mail_setFromEmail,$mail_setFromName,$mail_addAddress,$txt_message,$mail_subject,$template);//Enviar el mensaje
					}
					?>
      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">            	
            </div>            
            <!-- contact-success -->
      		<div id="message-success">
               <i class="fa fa-check"></i>Tu mensaje se envio, Mushas gracias!<br>
      		</div>

         </div> <!-- /col-twelve -->
   		
   	</div> <!-- /contact-form -->

   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Donde me encuentras</h5>

   			<p>
            Av. Abancay Nº201, Mariando Melgar<br>
           	Arequipa, PE
            </p>

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Enviame un correo a:</h5>

   			<p>U19314535@utp.edu.pe<br>
			   tochoherencia@gmail.com			     
			   </p>

   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Llámame</h5>

   			<p>Celular: 931383054<br>
			   Teléfono: (054) 381515
			</p>

   		</div>
   		
   	</div> <!-- /contact-info -->
		
	</section> <!-- /CONTACTANOS -->


   <!-- FOOTER
   ================================================== -->

   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
			      <li><a href="https://www.facebook.com/MarvelLatinoamerica"><i class="fa fa-facebook"></i></a></li>
			      <li><a href="https://twitter.com/Marvel"><i class="fa fa-twitter"></i></a></li>
			      <li><a href="https://www.instagram.com/marvellatam/"><i class="fa fa-instagram"></i></a></li>
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span>© Copyright Pumate 2021.</span> 
		        	<span>Diseñado por <a href="https://www.facebook.com/profile.php?id=100012306482797">Luis</a></span>	         	
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>