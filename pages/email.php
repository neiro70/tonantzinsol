
<?php


$txtnombre=$_POST['form[contact_name]'];
$txtemail=$_POST['txtejform[contact_email]'];
$txttitulo=$_POST['jform[contact_subject]'];
$txtmensaje=$_POST['jform[contact_message]'];



$txtmensaje="Escribe: {$txtnombre} {$txtemail} \r\n\n {$txtmensaje} ";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$txtemail . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

//$to="nancy10.mv@hotmail.com";
$to="neiro70@gmail.com";
$subject="tonantzinsol: ".$txttitulo;
 //echo $to,$subject,$txtmensaje ,$headers;
if(mail($to,$subject,$txtmensaje ,$headers) )
	echo 'Exito';
else{
	echo 'Error';
}


?>
