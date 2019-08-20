<?php
session_start();
include "databaseconnection.php";
/* 1. Install Composer in the pc (It will set the path variable automatically)
   2. Now in command prompt make your website as your current directory
   3. type composer require phpmailer/phpmailer command (will install this library)
   4. Write the below code to send an email
 */

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';
$email=$_SESSION["user"];

$sql="Select * from procorder where email='".$email."'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $date=$row["date"];
        

    }
}
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    
  // Set parameters for SMTP  
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);


    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'technophilerental@gmail.com';                 // SMTP username
    $mail->Password = 'kmp323439';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    
    $mail->Port = 587;                                    // 587 TCP port to connect to

    //Recipients
    $mail->setFrom('technophilerental@gmail.com');
    $mail->addAddress($email); 
    $mail->AddEmbeddedImage('../images/technophilerentalimages/logo.jpg','my-attach');    // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Order Placement';
    $mail->Body    = "<img alt='cannot display image' width='100' height='100' src='cid:my-attach'></img><br><b>Hello there and thank you for believing in technophile!As per your request we will deliver your requested product(s) to you  by:".$date."between 12pm to 6pm</b><p>Please proceed to pay for the products using our payment gateway available so that we can confirm your order!";
 

    
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header('Location:cleanup.php');
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}