<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'richathorne@gmail.com';
    $email_subject = 'Just visited your site';
    $email_body = "User Name: $name.\n".
                        "User Email: $visitor_email.\n".
                            "User Message: $message.\n";

    $to = "richathorne@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to, $email_subject, $email_body, $headers);
    header("Location: index.html");


?>