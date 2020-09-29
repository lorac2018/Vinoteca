<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host ='smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'vinotecawiskwine@gmail.com';                 // SMTP username
    $mail->Password = 'loraclorac';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('vinotecawiskwine@gmail.com', 'Vinoteca Wiskwine');
    $mail->addAddress('33348@ufp.edu.pt', 'Carolina Araujo');     // Add a recipient

    //Attachments
    
   $mail->addAttachment('vendor/tecnick.com/tcpdf/examples/inventary.pdf', 'inventary.pdf');    // Optional name
	
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Inventary from Wiskwine';
    $mail->Body    = 'Attaching the Full Inventory! </b>';
    $mail->AltBody = 'Products List';
    
    

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
//echo '<script>window.location="http://app.test/lorac/public/admin/stock"</script>';
