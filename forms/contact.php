<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './/vendor/PHPMailer-6.8.0/Exception.php';
require './/vendor/PHPMailer-6.8.0/PHPMailer.php';
require './/vendor/PHPMailer-6.8.0/SMTP.php';
  
  $contact->smtp = array(
    'host' => 'mail.warairaingenieros.com',
    'username' => 'prueba@warairaingenieros.com',
    'password' => 'prueba123456789',
    'port' => '465'
  );
  

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
