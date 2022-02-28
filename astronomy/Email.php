<?php
    include("PHPMailer/src/Exception.php");
	include("PHPMailer/src/PHPMailer.php");
	include("PHPMailer/src/SMTP.php");
	include("PHPMailer/src/OAuth.php");
	include("PHPMailer/src/POP3.php"); 

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php 
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 2;            // Enable verbose debug output
        $mail->isSMTP();                // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com'; // Set mailer to use SMTP
        $mail->SMTPAuth = true;         // Enable SMTP authentication
        $mail->Username = 'anhvertu7@gmail.com';
        $mail->Password = 'anh10062001';
        $mail->SMTPSecure = 'tls';      
           // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                   // TCP port to connect to
        $mail->charset = 'UTF-8';        // Charset
        $mail->setFrom('anhvertu7@gmail.com');    // From email
        $mail->addAddress('vanyellow1211@gmail.com', 'Mạnh Hoạch'); // Email address
        $mail->isHTML(true);   // Set email format to HTML
        $mail->Subject = 'Hí ae'; // Email subject
        $mail->Body    = 'Lop 519A PHP'; // Email body 
        $mail->AltBody = 'Cực kỳ chăm học'; // Email body
        $mail->send();
        echo 'Message has been sent';
    } catch (\Exception $e) {
        echo $e->getMessage();
        $mail->ErrorInfo; // Error message
    }
?>