<?php

    if(isset($_POST['email']) && $POST['email'] != ''){

        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
                   
        $userName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];
        
        $to = "ciaran@gravestock.net";
    
        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Message: ".$message. "\r\n";
    
    
        mail($to,$messageSubject,$body);
    
        }


    }


?>