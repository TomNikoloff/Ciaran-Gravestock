<?php
    $name= $_POST['name'];
    $vistor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'siana.9607@hotmail.co.uk';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $vistor_email.\n".
                        "User Message: $message.\n";

    
    $to = "tomnikoloff@hotmail.co.uk";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html")

?>