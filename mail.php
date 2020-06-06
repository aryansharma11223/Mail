<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mail = $_POST['email'];
        $contact = $_POST['contact'];
        $message = $_POST['message'];
        
        $to = 'aryansharma11223@gmail.com';

        $subject = 'Form Submission';

        $message = "Name: ".$name."\n"."Contact No.: ".$contact."\n"."Wrote the Following: "."\n\n".$message;
        $headers = "From: ".$mail;

        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Sent Successfuly! Thank You"." ".$name.", We will Contact you Shortly!</h1>";
        }

        else{
            echo "Something Went Wrong!"
        }
    }

?>