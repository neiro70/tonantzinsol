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
      <base href="<?php echo $context ?>" />
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="generator" content="Bluefish 2.2.7" />
      <title>Contactanos</title>
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
      <script type="text/javascript" src="<?php echo $context ?>/js/bootstrap.js"></script>
      <script type="text/javascript" src="<?php echo $context ?>/js/jquery-scrolltofixed.js"></script>
      <script type="text/javascript" src="<?php echo $context ?>/js/jquery.easing.1.3.js"></script>
      <script type="text/javascript" src="<?php echo $context ?>/js/jquery.isotope.js"></script>
      <script type="text/javascript" src="<?php echo $context ?>/js/wow.js"></script>
      <script type="text/javascript" src="<?php echo $context ?>/js/classie.js"></script>
      <script type="text/javascript" src="<?php echo $context ?>/toast/toastr.min.js"></script>
      <!-- TextArea-->
      <link type="text/css" rel="stylesheet" href="<?php echo $context ?>/css/jquery-te-1.4.0.css">
      <script type="text/javascript" src="<?php echo $context ?>/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>
      <script type="text/javascript">
         window.setInterval(function() {
             var r;
             try {
                 r = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP")
             } catch (e) {}
             if (r) {
                 r.open("GET", "<?php echo $context ?>/index.php?option=com_ajax&format=json", true);
                 r.send(null)
             }
         }, 840000);
         jQuery(function($) {
             $('.hasTip').each(function() {
                 var title = $(this).attr('title');
                 if (title) {
                     var parts = title.split('::', 2);
                     var mtelement = document.id(this);
                     mtelement.store('tip:title', parts[0]);
                     mtelement.store('tip:text', parts[1]);
                 }
             });
             var JTooltips = new Tips($('.hasTip').get(), {
                 "maxTitleChars": 50,
                 "fixed": false
             });
         });
         jQuery(function($) {
             $(".hasPopover").popover({
                 "html": true,
                 "trigger": "hover focus",
                 "container": "body"
             });
         });
         jQuery.noConflict()
         <!--
         var acymailing = Array();
         acymailing['NAMECAPTION'] = 'Nombre';
         acymailing['NAME_MISSING'] = 'Please enter your name';
         acymailing['EMAILCAPTION'] = 'E-mail';
         acymailing['VALID_EMAIL'] = 'Profavor ingrese e-mail valido';
         acymailing['ACCEPT_TERMS'] = 'Please check the Terms and Conditions';
         acymailing['CAPTCHA_MISSING'] = 'Please enter the security code displayed in the image';
         acymailing['NO_LIST_SELECTED'] = 'Please select the lists you want to subscribe to';
         //-->
      </script>
      <script type="text/javascript">
         (function() {
             Joomla.JText.load({
                 "JLIB_FORM_FIELD_INVALID": "Invalid field:&#160"
             });
         })();
      </script>
      <link href='https://fonts.googleapis.com/css?family=Arimo&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,greek,cyrillic' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="<?php echo $context ?>/css/maqueta.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $context ?>/templates/as002060/css/ext.asmenu.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $context ?>/templates/as002060/css/style.custom.css" type="text/css" />
   </head>
   <body class="com_contact view-contact task- itemid-487 body-">
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
                              jQuery(function($) {
                                  $('#module-226')
                              
                                      .superfish({
                                          hoverClass: 'sfHover',
                                          pathClass: 'overideThisToUse',
                                          pathLevels: 1,
                                          delay: 500,
                                          animation: {
                                              opacity: 'show'
                                          },
                                          speed: 'normal',
                                          speedOut: 'fast',
                                          autoArrows: false,
                                          disableHI: false,
                                          useClick: 0,
                                          easing: "swing",
                                          onInit: function() {},
                                          onBeforeShow: function() {},
                                          onShow: function() {},
                                          onHide: function() {},
                                          onIdle: function() {}
                                      })
                              
                                  var ismobile = navigator.userAgent.match(/(iPhone)|(iPod)|(android)|(webOS)/i)
                                  if (ismobile) {
                                      $('#module-226').sftouchscreen();
                                  }
                                  $('.btn-sf-menu').click(function() {
                                      $('#module-226').toggleClass('in')
                                  });
                                  $('#module-226').parents('[id*="-row"]').scrollToFixed({
                                      minWidth: 751
                                  });
                              })
                           </script>
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
                        <div id="camera-slideshow" class="slider">
                           <div class="camera-item" data-src="<?php echo $context ?>/images/index/bambu.jpg">
                           </div>
                           <div class="camera-item" data-src="<?php echo $context ?>/images/index/transpersonal.jpg">
                           </div>
                           <div class="camera-item" data-src="<?php echo $context ?>/images/index/principal.jpg">
                           </div>
                        </div>
                        <script type="text/javascript">
                           jQuery(document).ready(function() {
                               jQuery('#camera-slideshow').camera({
                                   alignment: "topCenter",
                                   autoAdvance: 1,
                                   mobileAutoAdvance: 0,
                                   cols: 6,
                                   easing: "easeInOutExpo",
                                   mobileEasing: "easeInOutExpo",
                                   fx: "simpleFade",
                                   mobileFx: "simpleFade",
                                   gridDifference: 2500,
                                   height: "18%",
                                   imagePath: 'images/',
                                   hover: 1,
                                   navigation: 0,
                                   navigationHover: 0,
                                   mobileNavHover: 0,
                                   opacityOnGrid: 0,
                                   pagination: 0,
                                   playPause: 0,
                                   pauseOnClick: 0,
                                   rows: 4,
                                   slicedCols: 6,
                                   slicedRows: 4,
                                   time: 5000,
                                   transPeriod: 2000,
                                   onEndTransition: function() {}, //this callback is invoked when the transition effect ends
                                   onLoaded: function() {}, //this callback is invoked when the image on a slide has completely loaded
                                   onStartLoading: function() {}, //this callback is invoked when the image on a slide start loading
                                   onStartTransition: function() {} //this callback is invoked when the transition effect starts
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
                     <div class="page page-contact page-contact__">
                        <!-- Heading -->
                        <div class="page_header">
                           <h1>Contactanos</h1>
                        </div>
                        <!-- Contact name -->
                        <!-- Category -->
                        <!-- Category With link -->
                        <!-- Contact list -->
                        <!-- TABS Contact details -->
                        <!-- PLAIN Contact Details -->
                        <!-- CONTACT FORM -->
                        <!-- Contact details -->
                        <br />
                        <div class="contact_form">
                           <form id="contact-form" action="<?php echo $context ?>/index.php/contact-us" method="post" class="form-validate">
                              <fieldset>
                                 <div class="row-fluid">
                                    <div class="span5">
                                       <label id="jform_contact_name-lbl" for="jform_contact_name" class="required" title="Nombre" data-content="Nombre">
                                       Nombre<span class="star">&#160;*</span></label>
                                       <div class="controls"><input type="text" name="jform_contact_name" id="jform_contact_name" value="" class="required" size="30" required aria-required="true" /></div>
                                       <label id="jform_contact_email-lbl" for="jform_contact_email" class="required" title="correo" data-content="correo">
                                       Correo<span class="star">&#160;*</span></label>
                                       <div class="controls"><input type="email" name="jform_contact_email" class="validate-email required" id="jform_contact_email" value="" size="30" autocomplete="email" required aria-required="true" /></div>
                                       <label id="jform_contact_emailmsg-lbl" for="jform_contact_emailmsg" class="required" title="Subject" data-content="Titulo del mensaje">
                                       Titulo<span class="star">&#160;*</span></label>
                                       <div class="controls"><input type="text" name="jform_contact_emailmsg" id="jform_contact_emailmsg" value="" class="required" size="60" required aria-required="true" /></div>
                                    </div>
                                    <div class="span7">
                                       <label id="jform_contact_message-lbl" for="jform_contact_message" class="required" title="Mensaje" data-content="Mensaje">
                                       Mensaje<span class="star">&#160;*</span></label>
                                       <div class="controls" style="margin-top:-3em;">
                                          <textarea name="jform_contact_message" id="jform_contact_message" cols="50" rows="10" class="required jqte-test"   required aria-required="true"></textarea>
                                       </div>
                                       <div class="control-group">
                                          <div class="controls">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="controls">
                                    <button class="btn validate btn-primary pull-right" type="button" id="sendEmail">Enviar</button>
                                    <!--div class="contact_email-copy pull-right">
                                       <label id="jform_contact_email_copy-lbl" for="jform_contact_email_copy" class="hasPopover" title="Send copy to yourself" data-content="Sends a copy of the message to the address you have supplied.">
                                       Send copy to yourself</label>
                                       <span class="checkbox-radio-wrap__inline"><input type="checkbox" name="jform[contact_email_copy]" id="jform_contact_email_copy" value="1" /></span>
                                       </div-->
                                    <input type="hidden" name="option" value="com_contact" />
                                    <input type="hidden" name="task" value="contact.submit" />
                                    <input type="hidden" name="return" value="" />
                                    <input type="hidden" name="id" value="1:contact-us" />
                                    <input type="hidden" name="adc6420553db8ac4309f6c6dfb7dea1d" value="1" /> 
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                        <!-- MISC INFO -->
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
                                 <p>E-mail: <a href="tonantzinsol10@gmail.com " target="_top">tonantzinsol10@gmail.com </a></p>
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
         
         if (isInIFrame == false) {
             <!-- Google Analytics -->
             (function(i, s, o, g, r, a, m) {
                 i['GoogleAnalyticsObject'] = r;
                 i[r] = i[r] || function() {
                     (i[r].q = i[r].q || []).push(arguments)
                 }, i[r].l = 1 * new Date();
                 a = s.createElement(o),
                     m = s.getElementsByTagName(o)[0];
                 a.async = 1;
                 a.src = g;
                 m.parentNode.insertBefore(a, m)
             })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
         
             ga('create', 'UA-17774394-1', 'auto');
             ga('send', 'pageview');
         
             <!-- Alexa Certify Javascript -->
             _atrk_opts = {
                 atrk_acct: "tD2of1a0CM002x",
                 domain: "astemplates.com",
                 dynamic: true
             };
             (function() {
                 var as = document.createElement('script');
                 as.type = 'text/javascript';
                 as.async = true;
                 as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js";
                 var s = document.getElementsByTagName('script')[0];
                 s.parentNode.insertBefore(as, s);
             })();
         } else {
             jQuery.noConflict();
             jQuery(document).ready(function() {
                 jQuery(".mod-custom__mobile_version").hide();
             });
         }
      </script>
      <script>
         jQuery(function($) {
         
             //textArea
             $('.jqte-test').jqte();
             // settings of status
            var jqteStatus = true;
             $(".status").click(function()
             {
                 jqteStatus = jqteStatus ? false : true;
                 $('.jqte-test').jqte({"status" : jqteStatus})
             });
         
         
             toastr.options = {
                 "closeButton": false,
                 "debug": false,
                 "newestOnTop": false,
                 "progressBar": false,
                 "positionClass": "toast-top-full-width",
                 "preventDuplicates": false,
                 "onclick": null,
                 "showDuration": "300",
                 "hideDuration": "1000",
                 "timeOut": "5000",
                 "extendedTimeOut": "1000",
                 "showEasing": "swing",
                 "hideEasing": "linear",
                 "showMethod": "fadeIn",
                 "hideMethod": "fadeOut"
             }
         
            
         
             $("#sendEmail").click(function() {

                 
             $.ajax({
                     url: '<?php echo $context ?>/pages/email.php',
                     type: "POST",
                     data: $("#contact-form").serialize()
                 })
                 .done(function(data) {
 
                    if(data==='Error'){
                        toastr.error('¡Error al enviar correo!');
                    }else{
                        toastr.success('¡Exito se envio correo!');
                        location.reload();

                    }
                     
                 })
                 .fail(function(data) {         
                     toastr.error('¡Error al enviar correo!');
                 })
                 .always(function(data) {
                     // alert( "complete" );
                 });
         
         
         });
         
         
         });
         
         
         
      </script>
   </body>
</html>