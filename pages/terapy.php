<?php
   $context= $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
   $var =explode("/",$context);
   
   if (strpos($context, "localhost") !== false) {
       $context="http://" .$var[0]."/".$var[1];
   }else{
       $context="http://" .$var[0];
   }
   
   ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <base href="<?php echo $context ?>/index.php/contact-us" />
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <title>Terapia Transpersonal</title>
      <link rel="stylesheet" href="<?php echo $context ?>/plugins/system/plugin_googlemap3/plugin_googlemap3.css.php" type="text/css" />
      <link rel="stylesheet" href="<?php echo $context ?>/templates/as002060/css/bootstrap.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $context ?>/templates/as002060/css/tmpl.default.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $context ?>/templates/as002060/css/media.1024.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $context ?>/templates/as002060/css/media.980.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $context ?>/templates/as002060/css/media.768.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $context ?>/templates/as002060/css/media.480.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $context ?>/templates/as002060/css/style.default.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $context ?>/media/com_acymailing/css/module_default.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $context ?>/templates/as002060/css/ext.artslider.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $context ?>/modules/mod_as_superfish_menu/css/superfish.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $context ?>/modules/mod_as_superfish_menu/css/font-awesome.css" type="text/css" />
      <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?v=3.exp&amp;language=en-GB&amp;libraries=places'></script>
      <script src="<?php echo $context ?>/media/system/js/mootools-core.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/media/system/js/core.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/media/jui/js/jquery.min.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/media/system/js/punycode.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/media/system/js/validate.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/media/system/js/mootools-more.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/media/jui/js/bootstrap.min.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/media/system/js/html5fallback.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/media/plugin_googlemap3/site/googlemaps/googlemapsv3.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/media/jui/js/bootstrap.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/templates/as002060/js/jquery.isotope.min.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/templates/as002060/js/touch.gallery.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/templates/as002060/js/scripts.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/media/com_acymailing/js/acymailing_module.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/modules/mod_as_artslider/js/camera.min.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/modules/mod_as_artslider/js/easing-v1.3.js" type="text/javascript"></script>
      <script src="<?php echo $context ?>/modules/mod_as_superfish_menu/js/superfish.min.js" type="text/javascript"></script>
      <link href="<?php echo $context ?>/toast/toastr.css" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Arimo&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,cyrillic' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="<?php echo $context ?>/css/maqueta.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $context ?>/templates/as002060/css/ext.asmenu.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $context ?>/templates/as002060/css/style.custom.css" type="text/css" />
   </head>
   <body class="com_content view-article task- itemid-562 body-terms">
      <div class="wrapper">
         <!-- HEADER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->    
         <div id="header-row">
            <div class="container">
               <div class="row">
                  <header>
                     <div id="logo" class="span12">
                        <a href="/">
                        <img src="<?php echo $context ?>/templates/as002060/images/logo2.png" alt="tonantzinsol" />
                        </a>
                        <span class="slogan">
                        </span>
                     </div>
                  </header>
               </div>
            </div>
         </div>
         <div id="navigation-row">
            <div class="container">
               <div class="row">
                  <header>
                     <div class="moduletable navigation  span12">
                        <div class="moduletable-wrapper">
                           <a class="btn btn-navbar btn-sf-menu">
                           <span class="fa fa-bars"></span>
                           </a>
						   <ul class="sf-menu   sticky" id="module-226">
                              <li class="item-435 current active"><a href="<?=$context ?>">Inicio</a></li>
                              <li class="item-487"><a href="<?=$context ?>/pages/contact-us.php">Contactanos</a></li>
							  <li class="item-488 deeper dropdown parent">
                                 <a href="" >¿Sabias que?</a>
                                 <ul class="sub-menu">
                                    <li class="item-493"><a href="<?=$context ?>/pages/reiki.php" >Reiki</a></li>
                                    <li class="item-556"><a href="<?=$context ?>/pages/flowers.php" >Flores de Bach</a></li>
                                    <li class="item-494"><a href="<?=$context ?>/pages/guies.php" >MEDITACIONES GUIADAS</a></li>
									<li class="item-494"><a href="<?=$context ?>/pages/terapy.php" >TERAPIA TRANSPERSONAL</a></li>
                                 </ul>
                              </li>
                           </ul>
                           <script>
                              // initialise plugins
                              jQuery(function($){
                              	$('#module-226')
                              		 
                              	.superfish({
                              		hoverClass:    'sfHover',         
                              		pathClass:     'overideThisToUse',
                              		pathLevels:    1,    
                              		delay:         500, 
                              		animation:     {opacity:'show'}, 
                              		speed:         'normal',   
                              		speedOut:      'fast',   
                              		autoArrows:    false, 
                              		disableHI:     false, 
                              		useClick:      0,
                              		easing:        "swing",
                              		onInit:        function(){},
                              		onBeforeShow:  function(){},
                              		onShow:        function(){},
                              		onHide:        function(){},
                              		onIdle:        function(){}
                              	})
                              	 
                              	var ismobile = navigator.userAgent.match(/(iPhone)|(iPod)|(android)|(webOS)/i)
                              	if(ismobile){
                              		$('#module-226').sftouchscreen();
                              	}
                              	$('.btn-sf-menu').click(function(){
                              		$('#module-226').toggleClass('in')
                              	});
                              				$('#module-226').parents('[id*="-row"]').scrollToFixed({minWidth :751});
                              				})
                           </script>
                           <style type="text/css">
                              ul.sf-menu
                              {
                              font-family: Tahoma, Geneva, sans-serif, Arial;}
                              ul.sf-menu > li > a, 
                              ul.sf-menu > li > span 
                              {
                              font-size:12px;}
                              ul.sf-menu > li.active > a, 
                              ul.sf-menu > li.current > a, 
                              ul.sf-menu > li.active > span, 
                              ul.sf-menu > li.current > span 
                              {
                              }
                              ul.sf-menu > li > a:hover, 
                              ul.sf-menu > li > span:hover
                              {
                              }
                              ul.sf-menu ul 
                              {
                              }
                              ul.sf-menu ul li a, 
                              ul.sf-menu ul li span
                              {
                              font-size:12px;}
                              ul.sf-menu ul li.active > a, 
                              ul.sf-menu ul li.active > span
                              {
                              }
                              ul.sf-menu ul li a:hover, 
                              ul.sf-menu ul li span:hover
                              {
                              }
                           </style>
                        </div>
                     </div>
                  </header>
               </div>
            </div>
         </div>
         <div id="slider-row">
            <div class="_container">
               <div class="row">
                  <div class="moduletable slider ">
                     <div class="moduletable-wrapper">
                        <style type="text/css">
                           .slide_title
                           {
                           color: #999999;
                           }
                           .slide_title a
                           {
                           color: #999999;
                           }
                           .slide_title a:hover
                           {
                           color: #;
                           }
                           .slide_title .item_title_part0 
                           {
                           color: #1574B4;	
                           }
                           .slide_title .item_title_part1
                           {
                           color: #999999;	
                           }
                           .camera_caption p
                           {
                           color: #999999;
                           font-size: 18px;
                           }
                           .camera_caption a.readmore
                           {
                           background-color: #1574B4;
                           color: #FFFFFF;
                           }
                           .camera_caption a.readmore:hover
                           {
                           background-color: #1574B4;
                           }
                           .camera_wrap .camera_pag .camera_pag_ul li.cameracurrent, 
                           .camera_wrap .camera_pag .camera_pag_ul li:hover
                           {
                           background-color: #;	
                           -webkit-border-radius: 5px;		
                           -moz-border-radius: 5px;		
                           border-radius: 5px;	
                           }
                           .camera_wrap .camera_pag .camera_pag_ul li
                           {
                           background-color: #FFFFFF;
                           -webkit-border-radius: 5px;		
                           -moz-border-radius: 5px;		
                           border-radius: 5px;		
                           }
                        </style>
                        <div id="camera-slideshow" class="slider">
                           <div class="camera-item" data-src="https://demo.astemplates.com/joomla-templates/002060/images/sampledata/asimages/slider/slide6.png">
                           </div>
                           <div class="camera-item" data-src="https://demo.astemplates.com/joomla-templates/002060/images/sampledata/asimages/slider/slide5.png">
                           </div>
                           <div class="camera-item" data-src="https://demo.astemplates.com/joomla-templates/002060/images/sampledata/asimages/slider/slide4.png">
                           </div>
                        </div>
                        <script type="text/javascript">
                           jQuery(document).ready(function() {
                           	jQuery('#camera-slideshow').camera({
                           		alignment			: "topCenter",
                           		autoAdvance			: 1,
                           		mobileAutoAdvance	: 0,
                           		cols				: 6,
                           		easing				: "easeInOutExpo",
                           		mobileEasing		: "easeInOutExpo",
                           		fx					: "simpleFade",	
                           		mobileFx			: "simpleFade",
                           		gridDifference		: 2500,
                           		height				: "18%",
                           		imagePath			: 'images/',
                           		hover				: 1,
                           		navigation			: 0,
                           		navigationHover		: 0,
                           		mobileNavHover		: 0,
                           		opacityOnGrid		: 0,
                           		pagination			: 0,
                           		playPause			: 0,
                           		pauseOnClick		: 0,
                           		rows				: 4,
                           		slicedCols			: 6,
                           		slicedRows			: 4,
                           		time				: 5000,
                           		transPeriod			: 2000,
                           		onEndTransition		: function() {  },	//this callback is invoked when the transition effect ends
                           		onLoaded			: function() {  },	//this callback is invoked when the image on a slide has completely loaded
                           		onStartLoading		: function() {  },	//this callback is invoked when the image on a slide start loading
                           		onStartTransition	: function() {  }	//this callback is invoked when the transition effect starts
                           	});
                           });
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- END OF HEADER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->        
         <!-- CONTENT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
         <div id="content-row">
            <div class="container">
               <div class="content-inner row">
                  <!-- COLUMN LEFT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                  <!-- END OF COlUMN LEFT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                  <!-- COLUMN MAIN ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->                
                  <div id="component" class="span12">
                     <div id="system-message-container">
                     </div>
                     <div class="page-item page-item__terms">
                        <div class="item_header">
                           <h2 class="item_title">
                           Terapia TRANSPERSONAL				
                           </h2>
                        </div>
                        <div class="item_img img-full img-full__left item-image"> <img src="<?php echo $context ?>/images/index/transpersonal.jpg" alt=""/> 
                        </div>
                        <div class="item_fulltext">
						<p>
                        
                                <p>La <strong>psicolog&iacute;a transpersonal</strong></p>

                                <p>Es una rama de la psicolog&iacute;a que integra los aspectos <a href="https://es.wikipedia.org/wiki/Ser_espiritual">espirituales</a> y trascendentes de la experiencia humana con el marco de trabajo e investigaci&oacute;n de la psicolog&iacute;a moderna. El t&eacute;rmino transpersonal significa &ldquo;m&aacute;s all&aacute;&rdquo; o &ldquo;a trav&eacute;s&rdquo; de lo personal, y se refiere a las experiencias, procesos y eventos que transcienden la habitual sensaci&oacute;n de identidad, permitiendo experimentar una realidad mayor y m&aacute;s significativa.</p>

                                <p>Sus investigadores estudian lo que consideran los potenciales m&aacute;s elevados de la humanidad y del reconocimiento, comprensi&oacute;n y actualizaci&oacute;n de los <a href="https://es.wikipedia.org/wiki/Estados_modificados_de_consciencia">estados modificados de consciencia</a>, unitivos, espirituales y trascendentes.</p>

                                <p>La psicolog&iacute;a transpersonal surge como &quot;cuarta fuerza&quot; tras la Psicolog&iacute;a Humanista, que estudia el Desarrollo Personal y el Potencial Humano. Constituye una comprensi&oacute;n diferente del psiquismo, la salud, la enfermedad y el desarrollo personal y espiritual. Es la &uacute;nica escuela de psicolog&iacute;a que estudia directamente y en profundidad, el funcionamiento del ego y la dimensi&oacute;n espiritual del ser humano.</p>

                                <p>Los or&iacute;genes de la Psicolog&iacute;a transpersonal se pueden rastrear hasta 1901-2 cuando el psic&oacute;logo estadounidense <a href="https://es.wikipedia.org/wiki/William_James">William James</a> (1842-1910) de la <a href="https://es.wikipedia.org/wiki/Universidad_Harvard">Universidad de Harvard</a> imparti&oacute; las llamadas &ldquo;<a href="https://es.wikipedia.org/wiki/Gifford_Lectures">Gifford Lectures</a>&rdquo; en la <a href="https://es.wikipedia.org/wiki/Universidad_de_Edimburgo">Universidad de Edimburgo</a>. En estas clases, que luego se publicar&iacute;an en formato libro titulado The Varieties of Religious Experiences, James enfoc&oacute; el estudio de las experiencias religiosas desde un enfoque psicol&oacute;gico basado en el estudio de las experiencias directas de personas individuales.</p>

                                <p>Fue James quien por primera vez (hasta la fecha conocido) utiliz&oacute; en estas clases el t&eacute;rmino transpersonal. Esta escuela considera a Richard M. Bucke (1837-1902), C.G. <a href="https://es.wikipedia.org/wiki/Jung">Jung</a> (1875-1961) y Roberto Assagioli (1888-1974) como los que asentaron las bases de lo que posteriormente se convertir&iacute;a en la Psicolog&iacute;a Transpersonal.</p>

                                <p>La psicolog&iacute;a transpersonal considera temas como:</p>

                                <ul>
                                    <li>las experiencias cumbre (que &mdash;seg&uacute;n el psic&oacute;logo estadounidense <a href="https://es.wikipedia.org/wiki/Abraham_Maslow">Abraham Maslow</a> (1908-1970)&mdash; son estados de interconexi&oacute;n y unificaci&oacute;n espiritual),</li>
                                    <li>experiencias <a href="https://es.wikipedia.org/wiki/Misticismo">m&iacute;sticas</a>,</li>
                                    <li><a href="https://es.wikipedia.org/wiki/Trance">trances</a> sist&eacute;micos, y</li>
                                    <li>experiencias transcendentes y <a href="https://es.wikipedia.org/wiki/Metaf%C3%ADsica">metaf&iacute;sicas</a> de la vida,</li>
                                    <li>expansi&oacute;n de la consciencia individual,</li>
                                    <li>conocimiento interior profundo,</li>
                                    <li>encuentro del sentido de vida personal y &uacute;ltimo,</li>
                                    <li>identificaci&oacute;n colectiva con las dem&aacute;s personas y el entorno,</li>
                                    <li>estados amplificados de amor, compasi&oacute;n y fraternidad universal.</li>
                                </ul>

                                <p>Si bien los caminos que se pueden tomar a partir de esta s&iacute;ntesis son varios (dependiendo de las concepciones psicol&oacute;gicas y espirituales que se integren), el objetivo principal de la psicolog&iacute;a transpersonal ser&iacute;a que los seres humanos transciendan el sentido de s&iacute; mismos, para lograr identificarse con una consciencia mayor y colectiva omniabarcante.</p>

                                <p>El psic&oacute;logo estadounidense <a href="https://es.wikipedia.org/wiki/Ken_Wilber">Ken Wilber</a> (1949-) distingue tres niveles en el desarrollo de esta conciencia:</p>

                                <ul>
                                    <li>El nivel prepersonal: es el momento del desarrollo en que los seres humanos a&uacute;n no tienen conciencia de su propia mente (beb&eacute;s que todav&iacute;a no tienen una <a href="https://es.wikipedia.org/wiki/Teor%C3%ADa_de_la_mente">teor&iacute;a de la mente</a> ni han forjado su personalidad)</li>
                                    <li>El nivel personal: que se alcanza cuando el individuo toma conciencia de que es una persona que piensa, diferente a otras.</li>
                                    <li>El nivel transpersonal: el nivel que se alcanza por medio del desarrollo espiritual, y que consiste en transcender la identificaci&oacute;n con el cuerpo y la mente, para alcanzar un nivel de consciencia social, ecol&oacute;gica y espiritual, mayor.</li>
                                </ul>

                                <p>El t&eacute;rmino Transpersonal, se refiere a lo &quot;espiritual&quot;, entendiendo por espiritual algo que no se basa en creencias religiosas, credos o seguimiento a personalidades supuestamente &quot;iluminadas&quot;, sino que, hace referencia al grado de amor y expansi&oacute;n de consciencia hacia la unidad que un ser humano ha alcanzado a lo largo de la vida. De este modo, la Terapia Transpersonal, nos pone en contacto con nuestra identidad esencial. Transpersonal significa &quot;m&aacute;s all&aacute; de la persona&quot;, se considera a la terapia como un &quot;viaje acompa&ntilde;ado&quot; hacia el ser profundo que somos, con todas sus consecuencias sanadoras.</p>

                                <p>&nbsp;&nbsp; <a href="http://www.jmdoria.com/">Jos&eacute; Mar&iacute;a Doria</a>, Maestro de lo Transpersonal y Director de la <a href="http://www.escuelatranspersonal.com/">Escuela Espa&ntilde;ola de Terapia Transpersonal </a>dice:</p>

                                <p>&nbsp; &quot;Lo espiritual trasciende las creencias o credos ideol&oacute;gicos de car&aacute;cter mental, y se manifiesta mediante una interna experiencia de totalidad y unidad.</p>

                                <p>&nbsp;El verdadero sanador en la Terapia Transpersonal, es la consciencia, porque el solo hecho de ser conscientes plenamente de algo, supone transformarlo autom&aacute;ticamente, sin esfuerzos particulares a&ntilde;adidos.</p>

                                <p>&nbsp; Desde esta perspectiva, la consulta de un Terapeuta Transpersonal, puede considerarse como un observatorio de la propia e &iacute;ntima mismidad.</p>

                                <p>&nbsp; Aquella persona que llega a ser capaz de darse plena cuenta de sus conductas no deseadas, adquiere de inmediato opciones de acci&oacute;n que disminuyen su reactividad y la convierten en una entidad m&aacute;s &iacute;ntegra y creativa.&quot;</p>

                                <h2><strong>Un misterioso impulso evolutivo empuja al ser humano al continuo aprendizaje y expansi&oacute;n.</strong></h2>

                                <p><strong>&nbsp;&nbsp;&nbsp; Por el principio de neuroplasticidad cerebral, podemos crecer en sabidur&iacute;a hasta el momento de la muerte.</strong></p>

                                <p><strong>El camino fluye de la preconsciencia a la consciencia, y de la consciencia a la supraconsciencia.</strong></p>

                                <p>&nbsp;</p>

                                <h3>&iquest;QU&Eacute; ES UN TERAPEUTA TRANSPERSONAL?</h3>

                                <p>&nbsp;&nbsp; El Terapeuta Transpersonal, es aquel acompa&ntilde;ante que intenta ayudar al individuo a lograr niveles superiores de salud psicol&oacute;gica, a desarrollar su capacidad de hacerse responsable de s&iacute; mismo, de sus relaciones, y experiencias, sin culpabilizar al entorno por lo que le sucede; comprendiendo y tomando a la &ldquo;adversidad&rdquo; como oportunidad de cambio y desarrollo personal.</p>

                                <p>&nbsp; El Terapeuta Transpersonal, ser&aacute; quien lo acompa&ntilde;e a observar sus patrones mentales, que son la causa de su malestar, y lo capacitar&aacute; para que pueda satisfacer de manera saludable sus necesidades a todos los niveles: f&iacute;sicas, emocionales, mentales y espirituales, aprendiendo a conectar con su dimensi&oacute;n trascendental. Se busca capacitar a la persona para que aprenda a conectar con sus propios recursos internos y permita desplegarse sin miedo al proceso de crecimiento natural; con lo cual, la crisis es vista como una oportunidad de cambio y de autocuraci&oacute;n, desarrollando una consciencia transpersonal.</p>

                                <p>&nbsp; Las t&eacute;cnicas utilizadas, se adaptan a las necesidades del paciente y a su estado de consciencia, busc&aacute;ndose la integraci&oacute;n de los distintos aspectos f&iacute;sicos, emocionales, mentales, y la trascendencia hacia el nivel espiritual, del ser; desplazando los intereses personales desde su ego hacia valores superiores como son la compasi&oacute;n, el amor a los dem&aacute;s seres vivos,&nbsp; el desarrollo de la creatividad, etc., produci&eacute;ndose cambios en su nivel evolutivo, accediendo al siguiente pelda&ntilde;o de la evoluci&oacute;n:&nbsp; la supraconsciencia.</p>

                                <p>&nbsp; El terapeuta Transpersonal, tiene un compromiso profundo con su propio crecimiento personal y espiritual.</p>

                                <p><a href="https://www.centroelim.org/2010/09/13/el-enfoque-del-terapeuta-transpersonal-psicolog%C3%ADa-integral/">EL ENFOQUE DEL TERAPEUTA TRANSPERSONAL</a></p>

                                <p><strong>La Terapia Transpersonal</strong></p>

                                <p><strong>Importancia y Manejo del Ego:</strong> Se entrena a la persona a observar su conflicto, aprendiendo a dirigir su mirada interior y aumentando el autoconocimiento, tomando consciencia de sus patrones mentales y emocionales, que le causan inquietud y sufrimiento. La persona comienza a asumir y considerar su situaci&oacute;n de crisis personal, como una oportunidad para la transformaci&oacute;n y el crecimiento.</p>

                                <p><strong>Hacia la esencia:</strong> en esta etapa, la persona construye &quot;un puente&quot; entre su mente pensante o ego, y su realidad esencial o nivel transpersonal. A medida que avanza, se reconoce como ser espiritual que se manifiesta en la Consciencia Testigo, y, desde este nivel, intuye su prop&oacute;sito en la vida, y todas las experiencias, inclusive las &quot;adversas&quot;, las vive como causa de aprendizaje que la van llevando al despertar de la Consciencia.</p>

                                <br>

                                <h3>T&Eacute;CNICAS DE LA TERAPIA TRANSPERSONAL</h3>

                                <p>La Terapia Transpersonal, es como un &quot;yoga integral&quot;, porque abarca los distintos planos de la existencia:</p>

                                <p><strong>F&iacute;sico:</strong> alimentaci&oacute;n sana, consciente, ejercicios f&iacute;sicos y de respiraci&oacute;n.</p>

                                <p><strong>Emocional:</strong> relaciones conscientes, ejercicios de respiraci&oacute;n, relajaci&oacute;n, visualizaci&oacute;n.</p>

                                <p><strong>Mental:</strong> reflexi&oacute;n, atenci&oacute;n consciente, actualizaci&oacute;n de capacidades, pr&aacute;cticas de claridad.</p>

                                <p><strong>Espiritual:</strong> trabajar en la expansi&oacute;n de la consciencia, en el desarrollo del &quot;darse cuenta&quot;, del &quot;estar presente&quot;; Meditaci&oacute;n Zen; Yoga o Tai Chi; atenci&oacute;n sostenida y la vocaci&oacute;n de servicio a otros seres.&nbsp;&nbsp;&nbsp;</p>

                                <p><strong>&nbsp;Algunas T&eacute;cnicas de ellas son:</strong></p>

                                <p><strong>Respiraci&oacute;n consciente:</strong> es la puerta de entrada a la relajaci&oacute;n, se hace profunda y permite entrar en zonas de la mente y observar lo que sucede..</p>

                                <p><strong>Relajaci&oacute;n:</strong> sus beneficios, se observan tanto en el plano fisiol&oacute;gico, como en el plano ps&iacute;quico y espiritual. Fuente de vitalidad. Favorece una actitud de paz interior, equilibrio y ecuanimidad.</p>

                                <p><strong>Atenci&oacute;n Plena:</strong> se trata de tomar consciencia de cada instante, cultivando la capacidad de estar atento al momento presente, al aqu&iacute; y ahora, deteniendo los automatismos, las reacciones autom&aacute;ticas, mec&aacute;nicas. La pr&aacute;ctica nos ayuda a canalizar nuestra propia energ&iacute;a en momentos de tensi&oacute;n.</p>

                                <p><strong>Regresi&oacute;n:</strong> para llegar a la ra&iacute;z del problema, de los patrones de conducta que traen conflicto. Se utiliza para revisar la biograf&iacute;a oculta, sacando a luz los hechos inconscientes que han afectado y afectan a la salud f&iacute;sica, psicol&oacute;gica y emocional. Nos da informaci&oacute;n acerca del origen de las limitaciones, miedos, bloqueos o enfermedades f&iacute;sicas, y nos permite actuar sobre ello, modific&aacute;ndolo.</p>

                                <p><strong>Sanaci&oacute;n del ni&ntilde;o interior:</strong> el ni&ntilde;o interior es una identidad que convive con el adulto y el padre que todos poseemos dentro, y que tienen caracter&iacute;sticas inherentes a la inocencia, cierto desamparo y a la permeabilidad de cualquier inducci&oacute;n. Este ejercicio, ayuda a superar la inseguridad end&oacute;gena, la carencia afectiva, desamparo, necesidad de aprobaci&oacute;n y protecci&oacute;n.</p>

                                <p><strong>T&eacute;cnica perd&oacute;n con los padres: </strong>el perd&oacute;n tiene un poderoso efecto sanador, la compasi&oacute;n, la comprensi&oacute;n y el reconocimiento, aportan un sentimiento de serenidad y paz profunda, ayudando a sanar rencores y emociones t&oacute;xicas.</p>

                                <p><strong>Ejercicios de identificaci&oacute;n con la consciencia testigo:</strong> muy recomendado para des condicionar la mente de los pensamientos, cuando la persona desea trascender el ego racional a una realidad espiritual, que no tiene que ver con la moral, dogmas, ni esperanzas de amparos en el m&aacute;s all&aacute;.</p>

                                <p><strong>Meditaci&oacute;n Zen:</strong> observar el devenir de los pensamientos, sensaciones, respiraci&oacute;n, sin identificarse....</p>

                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Estas y otras t&eacute;cnicas ayudan a la persona a des identificarse de los contenidos mentales y crear nuevas maneras de funcionar en la vida, de una manera Feliz, tanto en el proceso como al final de las terapias la paciente ira desarrollando paz interior, alegr&iacute;a, conciencia mayor, amor, paciencia, empat&iacute;a, compasi&oacute;n y dem&aacute;s valores que le mostraran un nuevo camino a de la felicidad.</strong></p>

                                <p><strong>Requisitos Principales para la Terapia Transpersonal:</strong></p>

                                <ul>
                                    <li><strong>Conciencia de que hay un problema</strong></li>
                                    <li><strong>Conciencia de que el mismo individuo no lo ha podido solucionar</strong></li>
                                    <li><strong>Compromiso para llevar a cabo la terapia.</strong></li>
                                    <li><strong>Reservaci&oacute;n Previa, Sujeto a Disponibilidad de Horario.</strong></li>
                                    <li><strong>Ropa C&oacute;moda</strong></li>
                                </ul>


                        
                        
                        </p>
                        
                        </div>
                     </div>
                  </div>
                  <!-- END OF COLUMN MAIN ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                  <!-- COLUMN RIGHT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->                    
                  <!-- END OF COLUMN RIGHT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
               </div>
            </div>
         </div>
         <!-- FOOTER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
         <div id="footer">
            <div id="footer-row">
               <div class="container">
                  <div class="row">
                     <div class="footer-row-1">
                        <div class="moduletable social  span6">
                           <div class="moduletable-wrapper">
                              <h3 class="module_title ">Siguenos</h3>
                              <div class="mod-menu">
                                 <ul class="nav menu ">
                                    <li class="item-557"><a class="facebook" href="https://www.facebook.com/nancy.mendez.1023?fref=ts" target="_blank" title="Facebook"><img
                                       src="<?php echo $context ?>/images/sampledata/asimages/social/facebook-logo-webtreatsetc.png"
                                       alt="Facebook" /></a></li>
                                    <!--li class="item-558"><a href="http://www.google.com" target="_blank" title="Google"><img
                                       src="<?php echo $context ?>/images/sampledata/asimages/social/google-g-logo-webtreatsetc.png"
                                       alt="Google" /></a></li>
                                    <li class="item-559"><a href="http://www.twitter.com" target="_blank" title="Twitter"><img
                                       src="<?php echo $context ?>/images/sampledata/asimages/social/twitter-bird3-webtreatsetc.png"
                                       alt="Twitter" /></a></li-->
                                    <!--	<li class="item-561"><a href="http://www.rss.com" target="_blank"-->
                                    <!--		title="Rss"><img-->
                                    <!--		src="/joomla-templates/002060/images/sampledata/asimages/social/rss-basic-webtreatsetc.png"-->
                                    <!--		alt="Rss" /></a></li>-->
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="moduletable   span3">
                           <div class="moduletable-wrapper">
                              <h3 class="module_title ">Profesionales</h3>
                              <div class="mod-custom mod-custom__">
                                 <div class="blockquote"> </div>
                                 <p style="padding-right: 40px;">Años de Estudio, Trato Profesional, Experiencia, Honestidad, Amabilidad, y Secillez en una mirada a tu interior.</p>
                              </div>
                           </div>
                        </div>
                        <div class="moduletable   span3">
                           <div class="moduletable-wrapper">
                              <h3 class="module_title ">Contactanos</h3>
                              <div class="mod-custom mod-custom__">
                                 <h4>Télefono: 55 39 88 71 91</h4>
                                 <p>E-mail: <a href="<?=$context ?>/pages/contact-us.php" target="_top">tonantzinsol10@gmail.com </a></p>
                                 <h3>Previa Cita</h3>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="footer-row-2">
                        <div class="footer-row-separator"></div>
                        <div class="moduletable   span12">
                           <div class="moduletable-wrapper">
                              <div class="mod-custom mod-custom__">
                                 <!-- p>DISCLAIMER: Revolutionary  hair color fortifies every strand giving you shinier, healthier-looking hair &amp; amazing base color paired with hints of red high &amp; low-lights for a sultry color with amazing dimension.</p-->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="copyright-row">
               <div class="container">
                  <div id="trademark">
                     Copyright &copy; 2018 Tonantzinsol 
                  </div>
                  <div id="copyright-menu" class="row">
                     <div class="mod-menu">
                        <ul class="nav menu ">
                            <li class="item-502"><a href="<?php echo $context ?>/pages/privacy-policy.php">Terminos de uso</a></li>
                            <li class="item-503"><a href="<?php echo $context ?>/pages/privacy-policy.php">Politicas de Privacidad</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- END OF FOOTER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->   
      <div id="back-top">
         <a href="#"><span></span></a>
      </div>
      <script>
         var isInIFrame = (window.location != window.parent.location);
         
         if(isInIFrame == false)
         {
         	<!-- Google Analytics -->
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
                
                ga('create', 'UA-17774394-1', 'auto');
                ga('send', 'pageview');
         	
            	<!-- Alexa Certify Javascript -->
                _atrk_opts = { atrk_acct:"tD2of1a0CM002x", domain:"astemplates.com",dynamic: true};
                (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
         }
         else
         {
         	jQuery.noConflict();
         	jQuery(document).ready(function()
         	{
         		jQuery(".mod-custom__mobile_version").hide();
         	});
         }
            
      </script> 
   </body>
</html>