<?php
<<<<<<< HEAD
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Process form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $receiving_email_address = 'lilynwobodo@gmail.com';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mail = new PHPMailer(true);

  try {
      // Server settings
      $mail->SMTPDebug = 0;                                      
      $mail->isSMTP();                                           
      $mail->Host       = 'smtp.gmail.com';                    
      $mail->SMTPAuth   = true;                                  
      $mail->Username   = 'lilynwobodo.com';              
      $mail->Password   = 'jzkqshngusqhylpe';                 
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        
      $mail->Port       = 587;                                  

      // Recipients
      $mail->setFrom('lilynwobodo@gmail.com', 'Somto Lily');
      $mail->addAddress('lilynwobodo@gmail.com', 'Somto Lily');   
      $mail->addReplyTo($email, $name);

      // Content
      $mail->isHTML(true);                                   
      $mail->Subject = $subject;
      $mail->Body    = $message;
      $mail->AltBody = strip_tags($message);

      $mail->send();
      echo 'Message has been sent';
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }


} else {
  // Respond with a 405 Method Not Allowed error for other methods
  http_response_code(405);
  echo 'This is what is being sent';
}

=======
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'lilynwobodo@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
>>>>>>> 360e08d (update: portfolio details)
?>
