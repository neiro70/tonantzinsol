
<?php


$txtnombre=$_POST['jform_contact_name'];
$txtemail=$_POST['jform_contact_email'];
$txttitulo=$_POST['jform_contact_emailmsg'];
$txtmensaje=$_POST['jform_contact_message'];




$txtmensaje="Escribe: {$txtnombre} {$txtemail} \r\n\n {$txtmensaje} ";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$txtemail . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

$to="tonantzinsol10@gmail.com ";
$subject="Tonantzinsol ".$txttitulo;
 //echo "to:{$to}, subject:{$subject} ,txtmensaje:{$txtmensaje},txtemail:{$txtemail} ,headers:{$headers}";
if(mail($to,$subject,$txtmensaje ,$headers) )
	echo 'Exito';
else{
	echo 'Error';
}


?>
