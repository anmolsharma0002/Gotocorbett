<?php
    $name_err = $email_err = $mob_err = $message_err = "";
    $name = $email = $mob = $message = $success =  "";

    function test_input($data){
        $data = trim($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){


        if(empty($_POST['name'])) {
            $name_err =  "Name is required";
        }else{
            $name = test_input($_POST['name']);
            //check if name only contains letters and whitespace
            if(!preg_match('/^[a-zA-Z]/',$name)){
                $name_err = "Please enter only letters";
            }
        }

        if(empty($_POST['email'])) {
            $email_err =  "Email is required";
        }else{
            $email = test_input($_POST['email']);
            //check if email is well-formed
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $email_err = "Invalid email format";
            }
        }
        if(empty($_POST['mob'])) {
            $mob_err =  "Contact number required";
        }else{
            $mob = test_input($_POST['mob']);
            //check if name only contains letters and whitespace
            if(!preg_match("/^[6-9][0-9]{9}$/",$mob)){
                $mob_err = "Invalid contact number";
            }
        }
        if(empty($_POST['message'])) {
            $message_err =  "Message is required";
        }else{
            $message = test_input($_POST['message']);
        
        }

        if(($name_err == null && $name_err == '') && ($email_err == null && $email_err == '') && 
        ($mob_err == null && $mob_err == '') && ($message_err == null && $message_err == "")){
            // $message_body = '';
            // unset($_POST as $key => $value){
            //     $message_body .= "$key::$value\n";
            // }
            
            $subject = 'Query from GotoCorbett.com';
            // $headers = 'From: YourLogoName info@domain.com' . "\r\n" ;
            // $headers .='Reply-To: '. $to . "\r\n" ;
            // $headers .='X-Mailer: PHP/' . phpversion();
            // $headers .= "MIME-Version: 1.0\r\n";
            // $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
            // if(mail("anmol.sds10@yahoo.com", $subject, $message)){
            //     echo 'w';
                $success = "Message sent, thank you for contacting us!";
                $name = "";
                $email = "";
                $mob = "";
                $message ="";
            // }else{
            //     echo 'not working mail';
            // }
        }

    }
?>