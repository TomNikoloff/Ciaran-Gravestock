<?php
    $name= $_POST['name'];
    $vistor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'visitor email';

    $email_subject = "New Form Submission"

    $email_body = "User Name: $name.\n".
                    "User Email: $vistor_email.\n".
                        "User Message: $message.\n";

    
    $to = "Ciarans Email";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply_To: $visitors_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html")

?>