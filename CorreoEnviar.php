<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMiler/src/Exception.php';
require 'PHPMiler/src/PHPMailer.php';
require 'PHPMiler/src/SMTP.php';
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
}
$email->setFrom('jdmosquerac2@academia.usbbog.edu.co')
$email->addAddress()
?>