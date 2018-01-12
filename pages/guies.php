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
      <title>Meditaciones Guiadas</title>
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
                              <li class="item-487"><a href="<?=$context ?>/pages/contact-us.php"> Contactanos</a></li>
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
                              Meditaciones Guiadas				
                           </h2>
                        </div>
                        <div class="item_img img-full img-full__left item-image"> <img src="<?php echo $context ?>/images/index/meditacion.png" alt=""/> 
                        </div>
                        <div class="item_fulltext">
						<p>
                        
                             
                                <p><strong>Meditaci&oacute;n</strong></p>

                                <p>El t&eacute;rmino meditaci&oacute;n se refiere a un amplio espectro de pr&aacute;cticas que incluyen t&eacute;cnicas dise&ntilde;adas para promover la relajaci&oacute;n, construir energ&iacute;a interna o fuerza de vida (<a href="https://es.wikipedia.org/wiki/Q%C3%AC">Q&igrave;</a>, ki, chi, <a href="https://es.wikipedia.org/wiki/Pr%C4%81%E1%B9%87a">prāṇa</a>, etc.)</p>

                                <p>y desarrollar compasi&oacute;n, amor, paciencia, generosidad y perd&oacute;n. Una forma particularmente ambiciosa de meditaci&oacute;n tiene como fin conseguir sostener la concentraci&oacute;n en un punto sin esfuerzo,<a href="https://es.wikipedia.org/wiki/Meditaci%C3%B3n#cite_note-4">4</a> enfocado a habilitar en su practicante un estado de bienestar en cualquier actividad de la vida.</p>

                                <p>La meditaci&oacute;n toma diferentes significados en diferentes contextos; &eacute;sta se ha practicado desde la antig&uuml;edad como un componente de numerosas religiones y creencias, pero la meditaci&oacute;n no constituye una religi&oacute;n en s&iacute; misma. La meditaci&oacute;n normalmente implica un esfuerzo interno para autorregular la mente de alguna forma</p>

                                <p>Desde el punto de vista de la <a href="https://es.wikipedia.org/wiki/Psicolog%C3%ADa">psicolog&iacute;a</a> y la <a href="https://es.wikipedia.org/wiki/Fisiolog%C3%ADa">fisiolog&iacute;a</a>, la meditaci&oacute;n puede inducir un estado alterado de conciencia.</p>

                                <p>Tales estados tienen una correspondencia neurofisiol&oacute;gica que se puede medir.<a href="https://es.wikipedia.org/wiki/Meditaci%C3%B3n#cite_note-8">8</a> A d&iacute;a de hoy, existen muchos tipos de meditaci&oacute;n practicados en la cultura occidental. La respiraci&oacute;n consciente, relajaci&oacute;n muscular progresiva, se han encontrado beneficiosas en t&eacute;rminos cognitivos tales como la relajaci&oacute;n. Con entrenamiento en la meditaci&oacute;n, la rumiaci&oacute;n depresiva puede rebajarse y se puede lograr una mayor paz mental</p>

                                <br> <br>

                                <h2>Beneficios de la meditaci&oacute;n</h2>

                                <p>Meditar no siempre es f&aacute;cil, especialmente al inicio, pues requiere disciplina y pr&aacute;ctica para su perfecci&oacute;n. Por tanto, requiere esfuerzo, pero a la larga sus beneficios para la salud son numerosos.</p>

                                <p>En el mundo acelerado en el que vivimos, muchas personas encuentran en la meditaci&oacute;n una forma de conectar de nuevo con ellos mismos, lejos de la cultura occidental, donde el consumismo y los valores materialistas rigen la vida de la gran mayor&iacute;a de ciudadanos. La meditaci&oacute;n es una manera de recuperar la esencia de uno mismo y lograr la paz interior.</p>

                                <p>De forma resumida, estos son algunos beneficios de la meditaci&oacute;n:</p>

                                <ul>
                                    <li><strong>Aumenta tu autoconocimiento:</strong> algunas formas de meditaci&oacute;n ayudan a reflexionar sobre la propia existencia.</li>
                                    <li><a href="https://psicologiaymente.net/clinica/consejos-reducir-estres"><strong>Mitiga los efectos del estr&eacute;s</strong></a><strong>:</strong> ayuda a encontrar la calma y a reducir los niveles de estr&eacute;s y ansiedad.</li>
                                    <li><strong>Afecta positivamente al sistema inmunol&oacute;gico</strong>: tiene efectos positivos en la salud general.</li>
                                    <li><a href="https://psicologiaymente.net/inteligencia/consejos-mejorar-concentracion"><strong>Mejora la capacidad de atenci&oacute;n y concentraci&oacute;n</strong></a><strong>:</strong> trabaja la autoconciencia y la atenci&oacute;n.</li>
                                    <li><a href="https://psicologiaymente.net/personalidad/rasgos-personas-empaticas"><strong>Es &uacute;til para empatizar con los dem&aacute;s</strong></a><strong>:</strong> mejora las relaciones interpersonales.</li>
                                    <li><strong>Aumenta la tolerancia al dolor</strong>: reduce los s&iacute;ntomas dolorosos y crea mayor control en las reacciones del mismo organismo.</li>
                                    <li><a href="https://psicologiaymente.net/psicologia/tipos-de-memoria"><strong>Mejora la memoria y las funciones cognitivas</strong></a><strong>:</strong> acrecienta la memoria tal y como indican algunos estudios.</li>
                                    <li><a href="https://psicologiaymente.net/reflexiones/pensamientos-positivos-cortos"><strong>Potencia la aparici&oacute;n de pensamientos positivos</strong></a>: ayuda a tener una actitud optimista y positiva.</li>
                                    <li><strong>Crea una verdadera conexi&oacute;n con el todo:</strong> en la cual se expresa mayor claridad en la vida y asuntos a resolver, as&iacute; como, estados internos.</li>
                                </ul>

                                <p>Ya sea para calmar la mente, para encontrarse a uno mismo o para reducir la ansiedad o el estr&eacute;s, es interesante que introduzcas esta pr&aacute;ctica en tu vida diaria, pues es un modo de mejorar la calidad de vida.</p>

                                <p>Aqu&iacute; podr&aacute;s encontrar la forma m&aacute;s adecuada para meditar y se adecue a tus necesidades, ya que hay varias practicas meditativas.</p>

                                <p>Practicas Adicionales de Aprendizaje:</p>

                                <ul>
                                    <li>El manejo adecuado de mudras</li>
                                    <li>Tipos de meditaciones</li>
                                    <li>Mantras</li>
                                    <li>M&aacute;ndalas</li>
                                    <li>Respiraci&oacute;n consiente</li>
                                    <li>Atenci&oacute;n plena</li>
                                    <li>Aromaterapia</li>
                                    <li>Cronoterapia</li>
                                </ul>

                                <h3>1. Meditaci&oacute;n de Sonido Primordial</h3>

                                <p>La Meditaci&oacute;n de Sonido Primordial es una t&eacute;cnica de meditaci&oacute;n basada en mantras, enraizada en la tradici&oacute;n v&eacute;dica de la India. Un mantra es una frase que repetida que nos ayuda a llegar al estado de relajaci&oacute;n e interiorizaci&oacute;n que propician el estado meditativo. Los mantras no son frases al azar, sino que son sonidos sagrados que los sabios de la antig&uuml;edad utilizaban para su pr&aacute;ctica meditativa, porque poseen un gran poder armonizador.</p>

                                <p>Pese a que este tipo de meditaci&oacute;n es milenario, Deepak Chopra y David Simon revivieron esta antigua pr&aacute;ctica y crearon un programa de meditaci&oacute;n basado en mantras que cualquiera puede practicar, por lo que en occidente goza de cierta popularidad en la actualidad. Durante la meditaci&oacute;n, es necesario repetir este mantra silenciosamente, pues crea una vibraci&oacute;n que permite colocarse en un lugar apartado del ruido de la mente, llegando a la calma y la conciencia pura. Este tipo de meditaci&oacute;n es ideal para aquellas personas que buscan una estructura en su pr&aacute;ctica de meditaci&oacute;n.</p>

                                <br>

                                <h3>2. Meditaci&oacute;n Vipassana</h3>

                                <p>La meditaci&oacute;n Vipassana se conoce a menudo como meditaci&oacute;n del &ldquo;insight&rdquo; y permite ver las cosas como realmente son. Tambi&eacute;n es una pr&aacute;ctica de meditaci&oacute;n budista tradicional, que se emplea mucho en occidente gracias al Mindfulness. Este tipo de meditaci&oacute;n enfatiza la conciencia de la respiraci&oacute;n, sintonizando el aire que entra y sale a trav&eacute;s de la nariz. Tambi&eacute;n se centra en etiquetar pensamientos y experiencias a medida que surgen.</p>

                                <p>Cada vez que se identifica un pensamiento o una emoci&oacute;n, es necesario identificarlo y dejarlo pasar con una actitud no enjuiciadora. Hay varios tipos diferentes de meditaci&oacute;n Vipassana que han evolucionado desde el estilo tradicional a lo largo de los a&ntilde;os.</p>

                                <p>Puedes profundizar en este tipo de meditaci&oacute;n con estas t&eacute;cnicas: &ldquo;<a href="https://psicologiaymente.net/meditacion/ejercicios-mindfulness-mejorar-bienestar">5 ejercicios Mindfulness para mejorar tu bienestar emocional</a>&rdquo;</p>
                                
                                <br>
                                
                                <h3>3. Meditaci&oacute;n Zazen (Zen)</h3>

                                <p>La traducci&oacute;n de la palabra japonesa &ldquo;Zazen&rdquo; significa &ldquo;meditaci&oacute;n sentada&quot;. Muchas personas, cuando visualizan la meditaci&oacute;n, se imaginan a una persona en el suelo con las piernas cruzadas, los ojos cerrados y los dedos de las manos en posici&oacute;n Mudra. Esto no ocurre con la meditaci&oacute;n Zazen.</p>

                                <p>Aunque este tipo de meditaci&oacute;n se centra en la respiraci&oacute;n y en observar los pensamientos y experiencias medida que pasan a trav&eacute;s de la mente y en observar las experiencias del medio ambiente, como ocurre en la meditaci&oacute;n Vipassana, existen algunas diferencias entre ambas clases de meditaci&oacute;n. Una diferencia pr&aacute;ctica principal es que, en la meditaci&oacute;n Zen, el &eacute;nfasis de la respiraci&oacute;n est&aacute; en el vientre, en lugar de la nariz (como en Vipassana).</p>

                                <p>Otra gran diferencia es que la postura es mucho m&aacute;s estricta en la meditaci&oacute;n Zen que en Vipassana, con una atenci&oacute;n especial sobre la columna recta, la barbilla agachada y las manos colocadas en una posici&oacute;n especial sobre el vientre. En la meditaci&oacute;n Zazen, los ojos siempre deben estar abiertos, con una mirada baja, y en Vipassana, no hay reglas estrictas para la mirada, aunque es habitual que se mantengan los ojos cerrados. La <a href="https://psicologiaymente.net/reflexiones/frases-zen">meditaci&oacute;n Zen</a> se recomienda para aquellas personas que ya tienen experiencia previa con la pr&aacute;ctica meditativa.</p>
                                
                                <br>
                                
                                <h3>4. Meditaci&oacute;n Trascendental</h3>

                                <p>La Meditaci&oacute;n Trascendental es otro tipo de meditaci&oacute;n basada en mantras. Al igual que la Meditaci&oacute;n de Sonido Primordial, su origen se remonta a la antigua India y cada persona se le da un mantra personal empleado por cualidades vibracionales para ayudar a calmar la mente. Aunque el prop&oacute;sito de la meditaci&oacute;n en ambas formas es similar, existen bastantes diferencias, incluyendo los mantras mismos y c&oacute;mo se seleccionan, la instrucci&oacute;n de la meditaci&oacute;n y el tiempo recomendado para meditar.</p>

                                <br>
                                
                                <h3>5. Meditaci&oacute;n Metta o del Amor Benevolente</h3>

                                <p>La meditaci&oacute;n Metta o de Amor Benevolente tiene su significado en la bondad incondicional y amistad. Este estilo de meditaci&oacute;n tambi&eacute;n tiene su origen en las ense&ntilde;anzas budistas, principalmente el budismo tibetano. Tal y como muestran los estudios cient&iacute;ficos, la compasi&oacute;n y esta forma de meditaci&oacute;n bondadosa y amorosa ha demostrado ser particularmente &uacute;til para impulsar la empat&iacute;a, la positividad, la aceptaci&oacute;n y la compasi&oacute;n hacia uno mismo y los dem&aacute;s. Cualquier persona con baja autoestima, altos niveles de autocr&iacute;tica y un deseo de ser m&aacute;s emp&aacute;tico con los dem&aacute;s puede beneficiarse de esta pr&aacute;ctica.</p>

                                <br>
                                
                                <h3>6. Meditaci&oacute;n Kundalini</h3>

                                <p>La idea principal de este tipo de meditaci&oacute;n es que gracias a esta t&eacute;cnica uno despierta su energ&iacute;a Kundalini, situada en la base de la columna vertebral. Cuando esta energ&iacute;a se libera, viaja por la columna vertebral y conduce a una experiencia com&uacute;nmente conocida como despertar Kundalini, que en &uacute;ltima instancia conduce a la iluminaci&oacute;n. Las meditaciones Kundalini pueden incluir t&eacute;cnicas de respiraci&oacute;n, mantras, mudras y c&aacute;nticos para aprovechar el poder de la mente inconsciente. Es una forma energizante de despertar la mente.</p>

                                <br>
                                
                                <h3>7. Meditaci&oacute;n Chakra</h3>

                                <p>Un chakra es un centro energ&eacute;tico en el cuerpo, y tenemos siete de ellos, cada uno ubicado en una zona diferente del cuerpo y cada uno asociado con un color, sonido y prop&oacute;sito energ&eacute;tico diferente. Las meditaciones del chakra pueden ser muy poderosas, especialmente cuando se enfocan y se conectan con un elemento en el cuerpo f&iacute;sico o emocional a la vez. Muchas meditaciones del chakra utilizan el sonido, la colocaci&oacute;n espec&iacute;fica de las manos y las t&eacute;cnicas de visualizaci&oacute;n para conectarse con los chakras y la energ&iacute;a curativa de &eacute;stos.</p>
                                
                                <br>
                                
                                <h3>8. Meditaci&oacute;n Tonglen</h3>

                                <p>Este tipo de meditaci&oacute;n es budista tibetana y se caracteriza porque la persona que lo practica conecta con su propio sufrimiento en un esfuerzo por superarlo. Nuestra cultura nos ense&ntilde;a a evitar el sufrimiento y huir de &eacute;l, todo lo contrario que hace la meditaci&oacute;n Tonglen.</p>

                                <p>Esta clase de meditaci&oacute;n te ense&ntilde;a a manejar las situaciones dif&iacute;ciles de la vida, pues te permite hacerles frente al desarrollar una actitud de apertura hacia el sufrimiento y al abandonar la negatividad. Se llama tambi&eacute;n meditaci&oacute;n de dar y recibir, y cultiva la compasi&oacute;n y la empat&iacute;a a trav&eacute;s de la respiraci&oacute;n, la visualizaci&oacute;n. La pr&aacute;ctica se puede hacer en cualquier posici&oacute;n c&oacute;moda, ya sea sentado o reclinado.</p>

                                <p>Requisitos para las Practicas Meditativas:</p>

                                <ul>
                                    <li>Reservaci&oacute;n previa, sujeto a disponibilidad.</li>
                                </ul>

                                <ul>
                                    <li>Practica Aproximadamente 40-60 minutos</li>
                                    <li>Disposici&oacute;n y Correcta actitud</li>
                                    <li>Ropa c&oacute;moda de preferencia de color Claro</li>
                                    <li>Calcetines blancos o claros de color Claro</li>
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
                     Copyright &copy; 2017 Tonantzinsol 
                  </div>
                  <div id="copyright-menu" class="row">
                     <div class="mod-menu">
                        <ul class="nav menu ">
                           <li class="item-502"><a href="<?php echo $context ?>">Terminos de uso</a></li>
                           <li class="item-503"><a href="<?php echo $context ?>">Politicas de Privacidad</a></li>
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