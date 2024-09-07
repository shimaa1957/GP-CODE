
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';

require 'phpmailer/src/PHPMailer.php';

require 'phpmailer/src/SMTP.php';
if (isset($_POST['send'])){

    print_r($_POST);
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mail=new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='photography.website.projectg@gmail.com';
    $mail->Password='zmllzwqsldbdclhk';

    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom("photography.website.projectg@gmail.com");

    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = $subject;


   $body =  "Name: ". $name . "<br>".
            "Email: ".$email."<br>".
            "Subject:  ".$subject."<br>".
            "Message:  ".$message."<br>";
    $mail->Body =$body; 
    
    

  
    if ($mail->send()) {
        echo '
        
            <script>
            
            alert("Message Sent Successfully");
            window.location.replace("contact.php");
            </script>
        ';
    } else {
        echo '
        <script>
        alert("Message Not Send");
        window.location.replace("contact.php");
        </script>
        
        ';
    }
  }
  
  


?>