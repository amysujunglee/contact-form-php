<?php
    // $name = $_POST['name'];
    // $visitor_email = $_POST['email'];
    // $message = $_POST['message'];


    // $email_from = "dev.designlife@gmail.com";
    // $email_subject = "New Form Submission";
    // $email_body = "User Name: $name.\n".
    //                 "User Email: $visitor_email.\n".
    //                 "User Message: $message.\n";


    // $to = "dev.designlife@gmail.com";
    // $headers = "From: $email_from \r\n";
    // $headers .= "Reply-To: $visitor_email \r\n";
    // mail($to,$email_subject,$email_body,$headers);
    // header("Location: index.html");

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $emailFrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "blue0087@hotmail.com";
        $headers = "From: ".$emailFrom;
        $txt = "You have received an e-mail from ".$name.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers); // need at least 3 parameters 
        header("Location: index.php?mailsend");
    }