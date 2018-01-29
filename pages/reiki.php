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
      <title>Reiki</title>
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
                              Reiki				
                           </h2>
                        </div>
                        <div class="item_img img-full img-full__left item-image"> <img src="<?php echo $context ?>/images/sampledata/asimages/featured/skin_care_1_thumb.jpg" alt=""/> 
                        </div>
                        <div class="item_fulltext">
						<p>Reiki es una palabra s&aacute;nscrita que significa <strong>REI</strong>, energ&iacute;a universal y <strong>KI</strong>, energ&iacute;a vital.<br />
						&nbsp;</p>
						
						<p>Es una t&eacute;cnica de canalizaci&oacute;n y transmisi&oacute;n de energ&iacute;a vital a trav&eacute;s de la imposici&oacute;n de manos, que se utiliza para obtener paz y equilibrio en todos los niveles:<br />
						<br />
						<strong>F&iacute;sico</strong>: mejor&iacute;a en dolencias, lesiones, metabolismo,etc.<br />
						<strong>Emocional</strong>: problemas sentimentales, agresividad, infelicidad, etc.<br />
						<strong>Mental</strong>: h&aacute;bitos da&ntilde;inos, estr&eacute;s, insomnio, etc.<br />
						<strong>Espiritual</strong>: armon&iacute;a, paz, equilibrio, etc.</p>
						
						<p>Reiki act&uacute;a en profundidad yendo a la ra&iacute;z del problema f&iacute;sico o emocional, permitiendo que la emoci&oacute;n o el patr&oacute;n de conducta que ha creado el desequilibrio, se manifieste y sea sanado.<br />
						<br />
						Tambi&eacute;n nos ayuda al crecimiento personal y a la expansi&oacute;n de nuestra conciencia.<br />
						<br />
						La terapia Reiki pueden recibirla todos los seres humanos (adultos sanos, enfermos, embarazadas, ni&ntilde;os y beb&eacute;s), incluso tambi&eacute;n los animales y las plantas.<br />
						Es una terapia complementaria a la medicina convencional y terapias psicol&oacute;gicas reconocida por la Organizaci&oacute;n mundial de la salud (OMS).<br />
						<br />
						El m&eacute;todo Reiki se basa en la creencia hinduista sobre los Chakras, que explicar&iacute;an los estados de salud de los seres humanos. Seg&uacute;n esta creencia, el mal funcionamiento o bloqueo de uno o varios Chakras ser&iacute;a el que provoca o agrava el mal estado de salud dando lugar a enfermedades y trastornos.</p>
						
						<p>El Reiki es un sistema de sanaci&oacute;n, auto sanaci&oacute;n y reequilibrio bioenerg&eacute;tico mediante la transmisi&oacute;n de la energ&iacute;a Universal curativa a trav&eacute;s de la imposici&oacute;n de manos.<br />
						<br />
						En Reiki se trabaja directamente con el campo energ&eacute;tico del paciente, incidiendo directamente sobre los bloqueos que perturban la libre circulaci&oacute;n de la energ&iacute;a en su ser, restaura y armoniza sus sistemas, posibilit&aacute;ndolo y mostr&aacute;ndole de forma sencilla, f&aacute;cil el camino hacia la salud.<br />
						<br />
						De todas las artes sanadoras llegadas a Occidente desde el Asia, la disciplina japonesa conocida como Reiki constituye un tesoro inagotable de la cultura Oriental, utilizada con gran &eacute;xito durante d&eacute;cadas.<br />
						<br />
						Reiki consiste en una din&aacute;mica en un proceso de circulaci&oacute;n de energ&iacute;a ben&eacute;fica que por s&iacute; sola determina la sanaci&oacute;n, sin que intervenga la voluntad del reikista, quien act&uacute;a como conductor o canal.</p>
						
						<p><br />
						Reiki no es una religi&oacute;n ni se requiere al iniciado que forme parte de una organizaci&oacute;n espec&iacute;fica, basta con asistir a las terapias que el usuario convenga para obtener los beneficios.<br />
						<br />
						Gracias a las ense&ntilde;anzas reveladoras del Maestro Usui, la sanaci&oacute;n Reiki puede ser hoy practicada por cualquier persona que haya sido iniciada con las t&eacute;cnicas de Mikao Usui. Usui afirmaba que el universo, todo lo existente posee Reiki, es una onda energ&eacute;tica de amorosidad superior emitida por la existencia suprema, en forma de luz pura.<br />
						<br />
						Nuestro cuerpo f&iacute;sico o material est&aacute; animado por esta Fuerza Vital que penetra por unas puertas de entrada denominadas Chakras, y fluye incesantemente a trav&eacute;s de unos canales energ&eacute;ticos llamados meridianos y nadis. La palabra Chakra en s&aacute;nscrito, significa rueda.</p>
						
						<p><br />
						Un chakra es una puerta de entrada a la energ&iacute;a, es como una v&aacute;lvula de entrada en nuestro cuerpo energ&eacute;tico. La funci&oacute;n principal de estos v&oacute;rtices (chakras) es suministrar vitalidad al cuerpo f&iacute;sico canalizando la Energ&iacute;a Universal hacia los &oacute;rganos, el sistema nervioso, sistema end&oacute;crino, digestivo. Tambi&eacute;n tiene una funci&oacute;n sobre nuestra psique, tanto en las emociones como en nuestros pensamientos. Y sobre todo en nuestro esp&iacute;ritu al crear una limpieza mayor.<br />
						<br />
						El reikista act&uacute;a como canalizador de la energ&iacute;a universal y su objetivo es re armonizar los planos f&iacute;sico, emocional, mental y espiritual que han enfermado. Ha sido oficialmente reconocido y recomendado* por la Organizaci&oacute;n Mundial de la Salud (OMS - WHO) por sus resultados positivos, por ejemplo, es altamente recomendable una sesi&oacute;n de Reiki antes y/o despu&eacute;s de una operaci&oacute;n.<br />
						<br />
						Actualmente existen muchas corrientes de Reiki y en cada una de ellas se ense&ntilde;a de una forma distinta, sin embargo, en todas se canaliza la misma Energ&iacute;a Universal, de ello es que estas corrientes de Reiki act&uacute;an bajo el mismo principio.<br />
						<br />
						*Cita del documento <em>&quot;Normative Guidelines on Pain Management (Geneva, June 2007 Report Prepared by: Prof. Neeta Kumar.)&quot; </em><br />
						<br />
						<em>We should recommend the non-drug modalities for example pyschological and rehabilitation approaches (physiotherapy), holistic procedures like herbal therapy, acupuncture, faith based treatment, reiki and jugizu, music-therapy, arts and dramatization in play-acting other distraction techniques may be used in the treatment of all pain patients.</em></p>
						
						<p>En este momento resulta crucial asumir que sanar y curar son pr&aacute;cticas bien diferenciadas:<br />
						<br />
						Sanar, del lat&iacute;n sanare, es restituir la salud perdida o contribuir a que un paciente recobre su salud, alterada por bloqueos energ&eacute;ticos o por des&oacute;rdenes funcionales, ambientales, emocionales, etc.<br />
						<br />
						Curar, del lat&iacute;n guarire, se practica en el &aacute;mbito m&eacute;dico y consiste en aplicar al enfermo remedios correspondientes a su enfermedad, que puede manifestarse por carencias, infecciones o disfunciones cr&oacute;nicas y eventualmente, puede incluir intervenciones quir&uacute;rgicas.<br />
						<br />
						Con esto se deja en claro la diferencia, Reiki no sustituye ning&uacute;n tratamiento m&eacute;dico ni psicol&oacute;gico, acompa&ntilde;a. Apunta a la sanaci&oacute;n del alma, esto puede traer el bienestar f&iacute;sico. Aqu&iacute; nos encontramos con la gran pregunta, &iquest;qui&eacute;n enferma primero: el alma o el cuerpo?</p>
						
						<p><strong>Principios de REIKI:</strong></p>
						
						<p><strong>Solo por hoy.</strong></p>
						
						<ul>
							<li><strong>Vivo una vida tranquila.</strong></li>
							<li><strong>Mantengo la paz en mi mente.</strong></li>
							<li><strong>Agradezco que tengo vida.</strong></li>
							<li><strong>Disfruto toda actividad que realizo.</strong></li>
							<li><strong>Convivo en armon&iacute;a con las personas que me rodean.</strong><br />
							<strong>Mikao Usui</strong></li>
						</ul>
						
						<p>Lleva a tu vida diaria la pr&aacute;ctica de los cinco principios, y comienza una transformaci&oacute;n profunda que te lleve a alcanzar un mayor estado de Paz y Armon&iacute;a.</p>
						
						<p>Recomendaciones Para la terapia:</p>
						
						<p>Validar cita con m&iacute;nimo 5 d&iacute;as de anticipaci&oacute;n, depender&aacute; de la disponibilidad.</p>
						
						<ul>
							<li>Cita previa</li>
							<li>Ropa c&oacute;moda Limpia de Preferencia Blanca o clara de color</li>
							<li>Calcetines Blancos</li>
						</ul>
	
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