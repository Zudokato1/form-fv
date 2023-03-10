<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
188;

$email = new PHPMailer();
try{

$email = new PHPMailer();
$email->isSMTP();
$email->Host = 'smtp.mailtrap.io';
$email->SMTPAuth = true;
$email->Port = 2525;
$email->Username = 'c0ec0dfbe709d3';
$email->Password = '152d9093641794';

$email->setFrom('jdmosquerac2@academia.usbbog.edu.co');
$email->addAddress('juandavidmc2020@gmail.com');

$email->isHTML(true);
$email->Subject ='contacto desde el formulario';
$email->body    ='este es el contenido del mensaje <b>en negrita!</b>1';
$email->AltBody ='Este es el contenido del mensaje en texto plano';

$email->send();
echo'El mensaje ha sido enviado';
}catch(Exception $e) {
    echo'el mensaje no se a podido enviar',$email->ErrorInfo;
}

?>