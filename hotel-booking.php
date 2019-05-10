<?php
    $message="";
    function test_input($data){
        $data = trim($data);
        return $data;
    }
    if(isset($_POST['h_submit'])){
        $h_name = test_input($_POST['h_name']);
        $h_email = test_input($_POST['h_email']);
        $h_mob = test_input($_POST['h_mob']);
        $h_nationality = test_input($_POST['h_nationality']);
        $h_date = test_input($_POST['h_date']);
        $h_category = test_input($_POST['h_category']);
        $h_persons = test_input($_POST['h_persons']);
        $h_nights = test_input($_POST['h_nights']);
        $h_address = test_input($_POST['h_address']);
        
        $message = "<html>
                        <head>
                            <style>
                                table, th, td {
                                border: 1px solid black;
                                letter-spacing:.2px;
                                counter-reset: tableCount; 
                                }
                                .counterCell:before {              
                                    content: counter(tableCount); 
                                    counter-increment: tableCount; 
                                }
                                th, td {
                                    padding:.5em;
                                }
                            </style>
                        </head>
                        <body>
                            <p><b>Hotel/Resort Booking Details<b></p> 
                            <table>
                                <tr>
                                    <td><b>Name :</b> ". $h_name ."</td>
                                    <td><b>email :</b> ". $h_email ."</td>
                                    <td><b>Contact No. </b>: " . $h_mob . "</td>
                                </tr>
                                <tr>
                                    <td><b>Nationality :</b> ". $h_nationality ."</td>
                                    <td><b>Date :</b> ". $h_date ."</td>
                                    <td><b>Category :</b> " . $h_category . "</td>
                                </tr>
                                <tr> 
                                    <td><b>No. of Persons :</b> ". $h_persons ."</td>
                                    <td><b>Nights :</b> ". $h_nights ."</td>
                                    <td><b>Address </b>: " . $h_address . "</td>
                                </tr>";
       
    }
        $to = 'anmol.sds10@yahoo.com';
        $subject = 'GotoCorbett : Hotel / Resort Booking Request';
        $headers = "From: " . strip_tags($_POST['h_email']) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($_POST['h_email']) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $message .="</table>";
        $message .= "</body></html>";            
          
        $hotel_mail = mail($to, $subject, $message, $headers);
        if($hotel_mail){
            echo $message;
            
        }else{
            
            echo 'Error';
        }
?> 