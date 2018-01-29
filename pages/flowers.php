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
      <title>Flores de Bach</title>
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
                              Flores de Bach				
                           </h2>
                        </div>
                        <div class="item_img img-full img-full__left item-image"> <img src="<?php echo $context ?>/images/index/bach.png" alt=""/> 
                        </div>
                        <div class="item_fulltext">
						<p>
                        
                               <p>Edward Bach dijo: &ldquo;La salud depende de estar en armon&iacute;a con nuestras almas&rdquo;</p>

                                <p><br />
                                La terapia de las flores de Bach es una terapia natural basada en esencias florales. Las esencias florales presentan unos efectos m&aacute;s que positivos en la salud de las personas. Adem&aacute;s, el hecho de tomar estas esencias bien combinadas te permite tratar patolog&iacute;as y vencer el miedo que nunca pensaste que pod&iacute;as vencer. Se trata de una terapia global ya que tratan al individuo y no la enfermedad ni sus s&iacute;ntomas. A la hora de utilizar las flores de Bach no solo se tiene en cuenta la salud de la persona, sino tambi&eacute;n, su estado de &aacute;nimo, su personalidad y su modo de enfrentarse a los problemas. Ah&iacute; radica una de las claves de las flores de Bach.</p>

                                <p>Edward Bach siempre crey&oacute; que la mente, que su actitud es de vital importancia para la salud.</p>

                                <p>Las flores de Bach transforman las actitudes negativas en positivas. No hay que esperar a sentirse enfermo para utilizar la terapia floral de Bach.</p>

                                <p>En momentos dif&iacute;ciles, cuando todo es negativo, s&iacute; que las flores de Bach son de gran valor para llegar a un equilibrio y evitar la aparici&oacute;n de los s&iacute;ntomas.</p>

                                <p>Hay quien piensa que tiene efecto placebo, sin embargo, se utiliza tambi&eacute;n en <a href="http://lasfloresdebach.net/ninos/">bebes</a>, en <a href="http://lasfloresdebach.net/para-animales/">animales</a> o incluso en <a href="http://lasfloresdebach.net/para-plantas/">plantas</a> (El Rescue Remedy, remedio urgente o remedio rescate, ayuda a una planta a florecer con m&aacute;s fuerza cuando es trasplantada).</p>
                                 <br>
                                <h2>El origen de las Flores de Bach</h2>

                                <p>Hace casi 70 a&ntilde;os Edward Bach hizo este escrito:</p>

                                <p>&ldquo;La enfermedad no es una crueldad ni un castigo, sino solo y &uacute;nicamente un aviso; es un instrumento del que se sirve nuestra propia alma para mostrarnos nuestros errores, prevenirnos de otros e impedirnos cometer m&aacute;s da&ntilde;os para volvernos al camino de la verdad y de la luz, del que nunca deber&iacute;amos habernos apartado&rdquo;.</p>

                                <p>Gracias a este escrito encuentra cada vez m&aacute;s adeptos a la medicina human&iacute;stica, la psicosom&aacute;tica y la terapia hol&iacute;stica.</p>

                                <p>Seg&uacute;n Edward Bach la enfermedad es el resultado de un desequilibrio emocional, el cual se produce en el campo energ&eacute;tico del ser vivo y si persiste se produce la enfermedad en el cuerpo f&iacute;sico. Es decir, el desequilibrio emocional es la causa de muchas de las enfermedades por eso se basa en atacar la ra&iacute;z que caus&oacute; el desequilibrio y que este a su vez caus&oacute; la enfermedad.</p>

                                <p>El agente curativo debe actuar sobre las causas y no sobre los efectos. Las flores de Bach (agente curativo) actuara corrigiendo el desequilibrio emocional.</p>

                                <br>

                                <h3>Quien fue Edward Bach</h3>

                                <p>Para conocer y entender las flores de Bach y su funcionamiento es necesario conocer la historia de su creador.</p>

                                <p><a href="http://es.wikipedia.org/wiki/Edward_Bach">Edward Bach</a> nace en 1886 en Moseley (Birmingham), era un m&eacute;dico muy avanzado para su tiempo. Desde ni&ntilde;o sinti&oacute; amor por todos los seres humanos, las plantas y los animales.</p>

                                <p>El Dr. Bach era muy intuitivo y sensible<br />
                                Ya desde muy joven tuvo claro que la personalidad y la actitud de cada ser humano influ&iacute;a en su estado de salud.</p>

                                <p>Trabaja primero como bacteri&oacute;logo, pero debido a una enfermedad empieza a investigar y cree que debe cumplir una misi&oacute;n.</p>

                                <p>Ingresa como bacteri&oacute;logo en el Hospital Homeop&aacute;tico de Londres.</p>

                                <p>Observando a sus pacientes, decide analizar tambi&eacute;n, su personalidad, sus estados ps&iacute;quicos.</p>

                                <p>Aprovechaba sus reuniones para estudiar a sus invitados y darse cuenta de que cada uno reaccionaria de forma diferente ante una enfermedad.</p>

                                <p>De ah&iacute; el buscar un remedio para cada tipo de personalidad.</p>

                                <p>Como no estaba muy de acuerdo con la medicina tradicional ni la fuente de obtenci&oacute;n de estos remedios (a base de desperdicios humanos), busca otras medicinas m&aacute;s naturales.</p>

                                <p>Investiga remedios basados en flores, por lo que vuelve, algo enfermo a su pa&iacute;s natal (Gales) en 1928, pero con la ilusi&oacute;n de que lo que iba a encontrar podr&iacute;a cambiar el mundo.</p>

                                <br>

                                <h3>C&oacute;mo surgen las flores de Bach</h3>

                                <p>Tas su vuelta a Gales el doctor E. Bach poco a poco va descubriendo sus 38 remedios florales. Estas infusiones las extrae de flores de Gales, de Espa&ntilde;a y de otros pa&iacute;ses, sus propiedades curativas fueron descubiertas de 1926 al 1934 por Edward Bach.</p>

                                <p>Primero descubre 12 flores, las trabaj&oacute; de diferentes formas hasta que encuentra un sistema en el que coloca las flores reci&eacute;n cortadas en un recipiente con agua de un arroyo pr&oacute;ximo y las deja al sol durante unas horas.</p>

                                <p>Tras cantidad de trabajos y observaciones realizadas con plantas y sus flores, se dio cuenta de que las gotas de roc&iacute;o posadas sobre las flores, conservaban la vibraci&oacute;n de estas. Tambi&eacute;n dedujo que, si colocaba las flores reci&eacute;n cortadas en un recipiente de agua y despu&eacute;s las dejaba secar, teniendo en cuenta que el agua mantendr&iacute;a la vibraci&oacute;n, esta propiedad tambi&eacute;n se mantendr&iacute;a y causar&iacute;a efecto al transmitir al paciente la soluci&oacute;n floral.</p>

                                <p>Para conservar y estabilizar la soluci&oacute;n a&ntilde;adi&oacute; alcohol.</p>

                                <p>Es as&iacute; como consigue desarrollar una nueva medicina relacionada con las emociones:<br />
                                Re&uacute;ne <a href="http://lasfloresdebach.net/clasificacion/">38 remedios</a>: 34 flores silvestres, 3 flores de cultivo, y el &uacute;ltimo, agua de manantial</p>

                                <br>

                                <h2>&iquest;Para qu&eacute; sirven las Flores de Bach?</h2>

                                <p>Son 38 infusiones naturales.</p>

                                <p>Podemos utilizar las flores de Bach para luchar contra el estr&eacute;s, la <a href="http://lasfloresdebach.net/para-la-depresion/">depresi&oacute;n</a>, la <a href="http://lasfloresdebach.net/para-la-ansiedad/">ansiedad</a>, la impaciencia, los traumas, incluso hay quienes las usan para <a href="http://lasfloresdebach.net/para-adelgazar/">adelgazar</a>&hellip;</p>

                                <p>Y el ultimo remedio que elaboro fue el N.&ordm; 39, al que llamo <a href="http://lasfloresdebach.net/rescate/">Rescue Remedy</a> (remedio urgente), era una combinaci&oacute;n de varias esencias.</p>

                                <p>El remedio urgente es sin duda el m&aacute;s usado, tanto lo es que hasta se puede utilizar en formato de pomada para curar erupciones en la piel, <a href="http://lapicadura.com/">picaduras</a> o sarpullido.</p>


                        
                        
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
                     Copyright &copy; 2017 Tonantzinsol 
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