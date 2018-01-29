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
      <title>Aviso de Privacidad</title>
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
                           <h1 class="item_title">
                              Aviso de Privacidad				
                           </h1>
                        </div>
                        <!-- div class="item_img img-full img-full__left item-image"> <img src="<?php echo $context ?>/images/sampledata/asimages/featured/skin_care_1_thumb.jpg" alt=""/> 
                        </div -->
                        <div class="item_fulltext">
						
								<p>Tonantzinsol,&nbsp;con&nbsp;domicilio&nbsp;en&nbsp;el Estado de&nbsp;M&eacute;xico,&nbsp;es&nbsp;el&nbsp;responsable&nbsp;del&nbsp;uso&nbsp;y&nbsp;protecci&oacute;n&nbsp;de&nbsp;sus&nbsp;datos&nbsp;personales,&nbsp;y&nbsp;al&nbsp;respecto&nbsp;le&nbsp;informamos&nbsp;lo&nbsp;siguiente:</p>
						   		<br>
								<h3><strong>&iquest;Para&nbsp;qu&eacute;&nbsp;fines&nbsp;utilizaremos&nbsp;sus&nbsp;datos&nbsp;personales?</strong></h3>

								<p>Los&nbsp;datos&nbsp;personales&nbsp;que&nbsp;recabamos&nbsp;de&nbsp;usted,&nbsp;los&nbsp;utilizaremos&nbsp;para&nbsp;las&nbsp;siguientes&nbsp;finalidades&nbsp;que&nbsp;son&nbsp;necesarias&nbsp;para&nbsp;el&nbsp;servicio&nbsp;que&nbsp;solicita:</p>

								<ul>
									<li>Env&iacute;o&nbsp;de&nbsp;informaci&oacute;n&nbsp;comercial&nbsp;a&nbsp;solicitud&nbsp;del&nbsp;interesado</li>
									<li>Comunicaci&oacute;n&nbsp;con&nbsp;el&nbsp;interesado</li>
								</ul>

								<p style="margin-left:6.0000pt;">De&nbsp;manera&nbsp;adicional,&nbsp;utilizaremos&nbsp;su&nbsp;informaci&oacute;n&nbsp;personal&nbsp;para&nbsp;las&nbsp;siguientes&nbsp;finalidades&nbsp;que&nbsp;no&nbsp;son&nbsp;necesarias&nbsp;para&nbsp;el&nbsp;servicio&nbsp;solicitado,&nbsp;pero&nbsp;que&nbsp;nos&nbsp;permiten&nbsp;y&nbsp;facilitan&nbsp;brindarle&nbsp;una&nbsp;mejor&nbsp;atenci&oacute;n:</p>

								<ul>
									<li>Env&iacute;o&nbsp;de&nbsp;informaci&oacute;n&nbsp;comercial&nbsp;de&nbsp;inter&eacute;s</li>
								</ul>

								<p>En&nbsp;caso&nbsp;de&nbsp;que&nbsp;no&nbsp;desee&nbsp;que&nbsp;sus&nbsp;datos&nbsp;personales&nbsp;sean&nbsp;tratados&nbsp;para&nbsp;estos&nbsp;fines&nbsp;adicionales,&nbsp;desde&nbsp;este&nbsp;momento&nbsp;usted&nbsp;nos&nbsp;puede&nbsp;comunicar&nbsp;lo&nbsp;anterior,&nbsp;a&nbsp;trav&eacute;s&nbsp;de&nbsp;la&nbsp;direcci&oacute;n&nbsp;&nbsp;<strong>tonantzinsol10@gmail.com</strong></p>

								<br>
								   
								<h3><strong>&iquest;Qu&eacute;&nbsp;datos&nbsp;personales&nbsp;utilizaremos&nbsp;para&nbsp;estos&nbsp;fines?</strong></h3>

								<p>Para&nbsp;llevar&nbsp;a&nbsp;cabo&nbsp;las&nbsp;finalidades&nbsp;descritas&nbsp;en&nbsp;el&nbsp;presente&nbsp;aviso&nbsp;de&nbsp;privacidad,&nbsp;utilizaremos&nbsp;los&nbsp;siguientes&nbsp;datos&nbsp;personales:&nbsp;Datos&nbsp;de&nbsp;contacto&nbsp;tales&nbsp;como&nbsp;nombre,&nbsp;tel&eacute;fono,&nbsp;domicilio&nbsp;y&nbsp;formas&nbsp;de&nbsp;contacto&nbsp;electr&oacute;nicas.</p>

								<p>Adem&aacute;s&nbsp;de&nbsp;los&nbsp;datos&nbsp;personales&nbsp;mencionados&nbsp;anteriormente,&nbsp;para&nbsp;las&nbsp;finalidades&nbsp;informadas&nbsp;en&nbsp;el&nbsp;presente&nbsp;aviso&nbsp;de&nbsp;privacidad&nbsp;utilizaremos&nbsp;los&nbsp;siguientes&nbsp;datos&nbsp;personales&nbsp;considerados&nbsp;como&nbsp;sensibles,&nbsp;que&nbsp;requieren&nbsp;de&nbsp;especial&nbsp;protecci&oacute;n:&nbsp;datos&nbsp;financieros,&nbsp;biom&eacute;tricos,&nbsp;digitales,&nbsp;de&nbsp;identificaci&oacute;n,&nbsp;patrimoniales,&nbsp;acad&eacute;micos&nbsp;o&nbsp;laborales.</p>

								<br>

								<h3><strong>&iquest;Con&nbsp;qui&eacute;n&nbsp;compartimos&nbsp;su&nbsp;informaci&oacute;n&nbsp;personal&nbsp;y&nbsp;para&nbsp;qu&eacute;&nbsp;fines?</strong></h3>

								<p>Le&nbsp;informamos&nbsp;que&nbsp;sus&nbsp;datos&nbsp;personales&nbsp;son&nbsp;compartidos&nbsp;dentro&nbsp;y&nbsp;fuera&nbsp;del&nbsp;pa&iacute;s&nbsp;con&nbsp;las&nbsp;siguientes&nbsp;personas,&nbsp;empresas,&nbsp;organizaciones&nbsp;y&nbsp;autoridades&nbsp;distintas&nbsp;a&nbsp;nosotros,&nbsp;para&nbsp;los&nbsp;siguientes&nbsp;fines:</p>

								<p>Destinatario&nbsp;de&nbsp;los&nbsp;datos&nbsp;personales&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pa&iacute;s&nbsp;(opcional)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Finalidad</p>

								<p>Autoridades&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M&eacute;xico&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Si&nbsp;nos&nbsp;fuera&nbsp;solicitado&nbsp;en&nbsp;un&nbsp;proceso&nbsp;judicial&nbsp;bajo&nbsp;una&nbsp;orden.</p>

								<p>Socios&nbsp;de&nbsp;Negocios&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M&eacute;xico&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Proporcionarle&nbsp;un&nbsp;servicio&nbsp;que&nbsp;no&nbsp;dependa&nbsp;completamente&nbsp;de&nbsp;</p>

								<p>Entidades&nbsp;Financieras&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M&eacute;xico&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Validar&nbsp;informaci&oacute;n&nbsp;de&nbsp;pagos&nbsp;entre&nbsp;los&nbsp;involucrados*</p>

								<p>Le&nbsp;informamos&nbsp;que&nbsp;para&nbsp;las&nbsp;transferencias&nbsp;indicadas&nbsp;con&nbsp;un&nbsp;asterisco&nbsp;(*)&nbsp;requerimos&nbsp;obtener&nbsp;su&nbsp;consentimiento.&nbsp;Si&nbsp;usted&nbsp;no&nbsp;manifiesta&nbsp;su&nbsp;negativa&nbsp;para&nbsp;dichas&nbsp;transferencias,&nbsp;entenderemos&nbsp;que&nbsp;nos&nbsp;lo&nbsp;ha&nbsp;otorgado&nbsp;[&Eacute;sto&nbsp;s&oacute;lo&nbsp;aplica&nbsp;para&nbsp;consentimiento&nbsp;t&aacute;cito].</p>

								<p>No&nbsp;autorizo&nbsp;que&nbsp;mis&nbsp;datos&nbsp;personales&nbsp;sean&nbsp;compartidos&nbsp;con&nbsp;los&nbsp;siguientes&nbsp;terceros&nbsp;(favor&nbsp;de&nbsp;notificarlo&nbsp;a&nbsp;tonantzinsol10@gmail.com&nbsp;)</p>

								<p><strong>&iquest;C&oacute;mo&nbsp;puede&nbsp;acceder,&nbsp;rectificar&nbsp;o&nbsp;cancelar&nbsp;sus&nbsp;datos&nbsp;personales,&nbsp;u&nbsp;oponerse&nbsp;a&nbsp;su&nbsp;uso?</strong></p>

								<p>Usted&nbsp;tiene&nbsp;derecho&nbsp;a&nbsp;conocer&nbsp;qu&eacute;&nbsp;datos&nbsp;personales&nbsp;tenemos&nbsp;de&nbsp;usted,&nbsp;para&nbsp;qu&eacute;&nbsp;los&nbsp;utilizamos&nbsp;y&nbsp;las&nbsp;condiciones&nbsp;del&nbsp;uso&nbsp;que&nbsp;les&nbsp;damos&nbsp;(Acceso).&nbsp;Asimismo,&nbsp;es&nbsp;su&nbsp;derecho&nbsp;solicitar&nbsp;la&nbsp;correcci&oacute;n&nbsp;de&nbsp;su&nbsp;informaci&oacute;n&nbsp;personal&nbsp;en&nbsp;caso&nbsp;de&nbsp;que&nbsp;est&eacute;&nbsp;desactualizada,&nbsp;sea&nbsp;inexacta&nbsp;o&nbsp;incompleta&nbsp;(Rectificaci&oacute;n);&nbsp;que&nbsp;la&nbsp;eliminemos&nbsp;de&nbsp;nuestros&nbsp;registros&nbsp;o&nbsp;bases&nbsp;de&nbsp;datos&nbsp;cuando&nbsp;considere&nbsp;que&nbsp;la&nbsp;misma&nbsp;no&nbsp;est&aacute;&nbsp;siendo&nbsp;utilizada&nbsp;conforme&nbsp;a&nbsp;los&nbsp;principios,&nbsp;deberes&nbsp;y&nbsp;obligaciones&nbsp;previstas&nbsp;en&nbsp;la&nbsp;normativa&nbsp;(Cancelaci&oacute;n);&nbsp;as&iacute;&nbsp;como&nbsp;oponerse&nbsp;al&nbsp;uso&nbsp;de&nbsp;sus&nbsp;datos&nbsp;personales&nbsp;para&nbsp;fines&nbsp;espec&iacute;ficos&nbsp;(Oposici&oacute;n).&nbsp;Estos&nbsp;derechos&nbsp;se&nbsp;conocen&nbsp;como&nbsp;derechos&nbsp;ARCO.</p>

								<p>Para&nbsp;el&nbsp;ejercicio&nbsp;de&nbsp;cualquiera&nbsp;de&nbsp;los&nbsp;derechos&nbsp;ARCO,&nbsp;usted&nbsp;deber&aacute;&nbsp;presentar&nbsp;la&nbsp;solicitud&nbsp;respectiva&nbsp;en&nbsp;formato&nbsp;digital&nbsp;firmado&nbsp;a&nbsp;<strong>tonantzinsol10@gmail.com</strong></p>

								<p>Para&nbsp;conocer&nbsp;el&nbsp;procedimiento&nbsp;y&nbsp;requisitos&nbsp;para&nbsp;el&nbsp;ejercicio&nbsp;de&nbsp;los&nbsp;derechos&nbsp;ARCO,&nbsp;usted&nbsp;podr&aacute;&nbsp;ponerse&nbsp;en&nbsp;contacto&nbsp;con&nbsp;nuestro&nbsp;Departamento&nbsp;de&nbsp;Privacidad,&nbsp;que&nbsp;dar&aacute;&nbsp;tr&aacute;mite&nbsp;a&nbsp;las&nbsp;solicitudes&nbsp;para&nbsp;el&nbsp;ejercicio&nbsp;de&nbsp;estos&nbsp;derechos,&nbsp;y&nbsp;atender&aacute;&nbsp;cualquier&nbsp;duda&nbsp;que&nbsp;pudiera&nbsp;tener&nbsp;respecto&nbsp;al&nbsp;tratamiento&nbsp;de&nbsp;su&nbsp;informaci&oacute;n.&nbsp;Los&nbsp;datos&nbsp;de&nbsp;contacto&nbsp;del&nbsp;Departamento&nbsp;de&nbsp;Privacidad&nbsp;son&nbsp;los&nbsp;siguientes:&nbsp;<br />
								<strong>tonantzinsol10@gmail.com</strong></p>

								<p>&nbsp;</p>

								<h3><strong>&iquest;C&oacute;mo&nbsp;puede&nbsp;revocar&nbsp;su&nbsp;consentimiento&nbsp;para&nbsp;el&nbsp;uso&nbsp;de&nbsp;sus&nbsp;datos&nbsp;personales?</strong></h3>

								<p><br />
								Usted&nbsp;puede&nbsp;revocar&nbsp;el&nbsp;consentimiento&nbsp;que,&nbsp;en&nbsp;su&nbsp;caso,&nbsp;nos&nbsp;haya&nbsp;otorgado&nbsp;para&nbsp;el&nbsp;tratamiento&nbsp;de&nbsp;sus&nbsp;datos&nbsp;personales.&nbsp;Sin&nbsp;embargo,&nbsp;es&nbsp;importante&nbsp;que&nbsp;tenga&nbsp;en&nbsp;cuenta&nbsp;que&nbsp;no&nbsp;en&nbsp;todos&nbsp;los&nbsp;casos&nbsp;podremos&nbsp;atender&nbsp;su&nbsp;solicitud&nbsp;o&nbsp;concluir&nbsp;el&nbsp;uso&nbsp;de&nbsp;forma&nbsp;inmediata,&nbsp;ya&nbsp;que&nbsp;es&nbsp;posible&nbsp;que&nbsp;por&nbsp;alguna&nbsp;obligaci&oacute;n&nbsp;legal&nbsp;requiramos&nbsp;seguir&nbsp;tratando&nbsp;sus&nbsp;datos&nbsp;personales.&nbsp;Asimismo,&nbsp;usted&nbsp;deber&aacute;&nbsp;considerar&nbsp;que&nbsp;para&nbsp;ciertos&nbsp;fines,&nbsp;la&nbsp;revocaci&oacute;n&nbsp;de&nbsp;su&nbsp;consentimiento&nbsp;implicar&aacute;&nbsp;que&nbsp;no&nbsp;le&nbsp;podamos&nbsp;seguir&nbsp;prestando&nbsp;el&nbsp;servicio&nbsp;que&nbsp;nos&nbsp;solicit&oacute;,&nbsp;o&nbsp;la&nbsp;conclusi&oacute;n&nbsp;de&nbsp;su&nbsp;relaci&oacute;n&nbsp;con&nbsp;nosotros.</p>

								<p>Para&nbsp;revocar&nbsp;su&nbsp;consentimiento&nbsp;deber&aacute;&nbsp;presentar&nbsp;su&nbsp;solicitud&nbsp;en&nbsp;formato&nbsp;digital&nbsp;firmado&nbsp;a&nbsp;<strong>tonantzinsol10@gmail.com</strong></p>

								<p>Para&nbsp;conocer&nbsp;el&nbsp;procedimiento&nbsp;y&nbsp;requisitos&nbsp;para&nbsp;la&nbsp;revocaci&oacute;n&nbsp;del&nbsp;consentimiento,&nbsp;usted&nbsp;podr&aacute;&nbsp;ponerse&nbsp;en&nbsp;contacto&nbsp;con&nbsp;nuestro&nbsp;Departamento&nbsp;de&nbsp;Privacidad.</p>

								<br>

								<h3><strong>&iquest;C&oacute;mo&nbsp;puede&nbsp;limitar&nbsp;el&nbsp;uso&nbsp;o&nbsp;divulgaci&oacute;n&nbsp;de&nbsp;su&nbsp;informaci&oacute;n&nbsp;personal?&nbsp;</strong></h3>

								<p>Con&nbsp;objeto&nbsp;de&nbsp;que&nbsp;usted&nbsp;pueda&nbsp;limitar&nbsp;el&nbsp;uso&nbsp;y&nbsp;divulgaci&oacute;n&nbsp;de&nbsp;su&nbsp;informaci&oacute;n&nbsp;personal,&nbsp;le&nbsp;ofrecemos&nbsp;los&nbsp;siguientes&nbsp;medios:</p>

								<ul>
									<li>Su&nbsp;inscripci&oacute;n&nbsp;en&nbsp;el&nbsp;Registro&nbsp;P&uacute;blico&nbsp;para&nbsp;Evitar&nbsp;Publicidad,&nbsp;que&nbsp;est&aacute;&nbsp;a&nbsp;cargo&nbsp;de&nbsp;la&nbsp;Procuradur&iacute;a&nbsp;Federal&nbsp;del&nbsp;Consumidor,&nbsp;con&nbsp;la&nbsp;finalidad&nbsp;de&nbsp;que&nbsp;sus&nbsp;datos&nbsp;personales&nbsp;no&nbsp;sean&nbsp;utilizados&nbsp;para&nbsp;recibir&nbsp;publicidad&nbsp;o&nbsp;promociones&nbsp;de&nbsp;empresas&nbsp;de&nbsp;bienes&nbsp;o&nbsp;servicios.&nbsp;Para&nbsp;mayor&nbsp;informaci&oacute;n&nbsp;sobre&nbsp;este&nbsp;registro,&nbsp;usted&nbsp;puede&nbsp;consultar&nbsp;el&nbsp;portal&nbsp;de&nbsp;Internet&nbsp;de&nbsp;la&nbsp;PROFECO,&nbsp;o&nbsp;bien&nbsp;ponerse&nbsp;en&nbsp;contacto&nbsp;directo&nbsp;con&nbsp;&eacute;sta.</li>
								</ul>

								<p>Su&nbsp;registro&nbsp;en&nbsp;el&nbsp;listado&nbsp;de&nbsp;exclusi&oacute;n,&nbsp;a&nbsp;fin&nbsp;de&nbsp;que&nbsp;sus&nbsp;datos&nbsp;personales&nbsp;no&nbsp;sean&nbsp;tratados&nbsp;para&nbsp;fines&nbsp;mercadot&eacute;cnicos,&nbsp;publicitarios&nbsp;o&nbsp;de&nbsp;prospecci&oacute;n&nbsp;comercial&nbsp;por&nbsp;nuestra&nbsp;parte.&nbsp;Para&nbsp;mayor&nbsp;informaci&oacute;n&nbsp;escr&iacute;banos&nbsp;&nbsp;a&nbsp;<strong>tonantzinsol10@gmail.com</strong></p>

								<ul>
									<li>El&nbsp;uso&nbsp;de&nbsp;tecnolog&iacute;as&nbsp;de&nbsp;rastreo&nbsp;en&nbsp;nuestro&nbsp;portal&nbsp;de&nbsp;Internet<br />
									Le&nbsp;informamos&nbsp;que&nbsp;en&nbsp;nuestra&nbsp;p&aacute;gina&nbsp;de&nbsp;Internet&nbsp;utilizamos&nbsp;cookies,&nbsp;web&nbsp;beacons&nbsp;y&nbsp;otras&nbsp;tecnolog&iacute;as&nbsp;a&nbsp;trav&eacute;s&nbsp;de&nbsp;las&nbsp;cuales&nbsp;es&nbsp;posible&nbsp;monitorear&nbsp;su&nbsp;comportamiento&nbsp;como&nbsp;usuario&nbsp;de&nbsp;Internet,&nbsp;as&iacute;&nbsp;como&nbsp;brindarle&nbsp;un&nbsp;mejor&nbsp;servicio&nbsp;y&nbsp;experiencia&nbsp;de&nbsp;usuario&nbsp;al&nbsp;navegar&nbsp;en&nbsp;nuestra&nbsp;p&aacute;gina.</li>
								</ul>

								<p>Los&nbsp;datos&nbsp;personales&nbsp;que&nbsp;obtenemos&nbsp;de&nbsp;estas&nbsp;tecnolog&iacute;as&nbsp;de&nbsp;rastreo&nbsp;son&nbsp;los&nbsp;siguientes:&nbsp;Formulario&nbsp;de&nbsp;Registro,&nbsp;mismos&nbsp;que&nbsp;utilizamos&nbsp;para&nbsp;ponernos&nbsp;en&nbsp;contacto&nbsp;con&nbsp;Usted.&nbsp;&nbsp;</p>

								<p>Estas&nbsp;tecnolog&iacute;as&nbsp;podr&aacute;n&nbsp;deshabilitarse&nbsp;siguiendo&nbsp;los&nbsp;siguientes&nbsp;pasos:&nbsp;solicitando&nbsp;la&nbsp;eliminaci&oacute;n&nbsp;de&nbsp;sus&nbsp;datos&nbsp;en&nbsp;formato&nbsp;digital&nbsp;firmado&nbsp;a&nbsp;<strong>tonantzinsol10@gmail.com</strong></p>

								<br>

								<h3><strong>&iquest;C&oacute;mo&nbsp;puede&nbsp;conocer&nbsp;los&nbsp;cambios&nbsp;a&nbsp;este&nbsp;aviso&nbsp;de&nbsp;privacidad?</strong><br />
								&nbsp;</h3>

								<p>El&nbsp;presente&nbsp;aviso&nbsp;de&nbsp;privacidad&nbsp;puede&nbsp;sufrir&nbsp;modificaciones,&nbsp;cambios&nbsp;o&nbsp;actualizaciones&nbsp;derivadas&nbsp;de&nbsp;nuevos&nbsp;requerimientos&nbsp;legales;&nbsp;de&nbsp;nuestras&nbsp;propias&nbsp;necesidades&nbsp;por&nbsp;los&nbsp;productos;&nbsp;de&nbsp;nuestras&nbsp;pr&aacute;cticas&nbsp;de&nbsp;privacidad;&nbsp;de&nbsp;cambios&nbsp;en&nbsp;nuestro&nbsp;modelo&nbsp;de&nbsp;negocio,&nbsp;o&nbsp;por&nbsp;otras&nbsp;causas.</p>
								<p>Nos&nbsp;comprometemos&nbsp;a&nbsp;mantenerlo&nbsp;informado&nbsp;sobre&nbsp;los&nbsp;cambios&nbsp;que&nbsp;pueda&nbsp;sufrir&nbsp;el&nbsp;presente&nbsp;aviso&nbsp;de&nbsp;privacidad,&nbsp;a&nbsp;trav&eacute;s&nbsp;de&nbsp;nuestro&nbsp;SITIO&nbsp;WEB.</p>
								<p>El&nbsp;procedimiento&nbsp;a&nbsp;trav&eacute;s&nbsp;del&nbsp;cual&nbsp;se&nbsp;llevar&aacute;n&nbsp;a&nbsp;cabo&nbsp;las&nbsp;notificaciones&nbsp;sobre&nbsp;cambios&nbsp;o&nbsp;actualizaciones&nbsp;al&nbsp;presente&nbsp;aviso&nbsp;de&nbsp;privacidad&nbsp;es&nbsp;el&nbsp;siguiente:&nbsp;Apartado&nbsp;en&nbsp;el&nbsp;Sitio&nbsp;Web.</p>





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