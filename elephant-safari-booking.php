<?php
    $message="";
    function test_input($data){
        $data = trim($data);
        return $data;
    }
    if(isset($_POST['e_submit'])){
        $e_name = test_input($_POST['e_name']);
        $e_email = test_input($_POST['e_email']);
        $e_mob = test_input($_POST['e_mob']);
        $e_nationality = test_input($_POST['e_nationality']);
        $e_date = test_input($_POST['e_date']);
        $e_time = test_input($_POST['e_time']);
        $e_cand_name = test_input($_POST['e_cand_name']);
        $e_cand_age = test_input($_POST['e_cand_age']);
        $e_cand_gender = test_input($_POST['e_cand_gender']);
        $e_cand_id_no = test_input($_POST['e_cand_id_no']);
        
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
                            <p><b>Contact Details<b></p> 
                            <table>
                                <tr>
                                    <td><b>Name :</b> ". $e_name ."</td>
                                    <td><b>email :</b> ". $e_email ."</td>
                                    <td><b>Contact No. </b>: " . $e_mob . "</td>
                                </tr>
                                <tr>
                                    <td><b>Nationality :</b> ". $e_nationality ."</td>
                                    <td><b>Date :</b> ". $e_date ."</td>
                                    <td><b>Time :</b> " . $e_time . "</td>
                                </tr>

                            </table>
                            <p> Booking Details</p>
                            <table>
                                <tr>
                                    <td>1.</td>
                                    <td><b>Name :</b> ". $e_cand_name ."</td>
                                    <td><b>Age :</b> ". $e_cand_age ."</td>
                                    <td><b>Gender </b>: " . $e_cand_gender . "</td>
                                    <td><b>ID Proof No. </b>: " . $e_cand_id_no . "</td>

                                </tr>";

                           
        
        // second
        if((test_input($_POST['e_cand_name2'])!=null && test_input($_POST['e_cand_name2'])!='') && 
            (test_input($_POST['e_cand_age2'])!=null && test_input($_POST['e_cand_age2'])!='') &&
            (test_input($_POST['e_cand_gender2'])!=null && test_input($_POST['e_cand_gender2'])!='') && 
            (test_input($_POST['e_cand_id_no2'])!=null && test_input($_POST['e_cand_id_no2'])!='')){
            $e_cand_name2 = test_input($_POST['e_cand_name2']);
            $e_cand_age2 = test_input($_POST['e_cand_age2']);
            $e_cand_gender2 = test_input($_POST['e_cand_gender2']);
            $e_cand_id_no2 = test_input($_POST['e_cand_id_no2']);

            $message .=" <tr>
                            <td>2.</td>
                            <td><b>Name :</b> ". $e_cand_name2 ."</td>
                            <td><b>Age :</b> ". $e_cand_age2 ."</td>
                            <td><b>Gender </b>: " . $e_cand_gender2 . "</td>
                            <td><b>ID Proof No. </b>: " . $e_cand_id_no2 . "</td>
                        </tr>";
            
        }
        
        // //third
        if((test_input($_POST['e_cand_name3'])!=null && test_input($_POST['e_cand_name3'])!='') && 
            (test_input($_POST['e_cand_age3'])!=null && test_input($_POST['e_cand_age3'])!='') &&
            (test_input($_POST['e_cand_gender3'])!=null && test_input($_POST['e_cand_gender3'])!='') && 
            (test_input($_POST['e_cand_id_no3'])!=null && test_input($_POST['e_cand_id_no3'])!='')){
            $e_cand_name3 = test_input($_POST['e_cand_name3']);
            $e_cand_age3 = test_input($_POST['e_cand_age3']);
            $e_cand_gender3 = test_input($_POST['e_cand_gender3']);
            $e_cand_id_no3 = test_input($_POST['e_cand_id_no3']);
            $message .=" <tr>
                            <td>3.</td>
                            <td><b>Name :</b> ". $e_cand_name3 ."</td>
                            <td><b>Age :</b> ". $e_cand_age3 ."</td>
                            <td><b>Gender </b>: " . $e_cand_gender3 . "</td>
                            <td><b>ID Proof No. </b>: " . $e_cand_id_no3 . "</td>
                        </tr>";

        }
        // //fourth
        if((test_input($_POST['e_cand_name4'])!=null && test_input($_POST['e_cand_name4'])!='') && 
            (test_input($_POST['e_cand_age4'])!=null && test_input($_POST['e_cand_age4'])!='') &&
            (test_input($_POST['e_cand_gender4'])!=null && test_input($_POST['e_cand_gender4'])!='') && 
            (test_input($_POST['e_cand_id_no4'])!=null && test_input($_POST['e_cand_id_no4'])!='')){
                
            $e_cand_name4 = test_input($_POST['e_cand_name4']);
            $e_cand_age4 = test_input($_POST['e_cand_age4']);
            $e_cand_gender4 = test_input($_POST['e_cand_gender4']);
            $e_cand_id_no4 = test_input($_POST['e_cand_id_no4']);
            $message .=" <tr>
                            <td>4.</td>
                            <td><b>Name :</b> ". $e_cand_name4 ."</td>
                            <td><b>Age :</b> ". $e_cand_age4 ."</td>
                            <td><b>Gender </b>: " . $e_cand_gender4 . "</td>
                            <td><b>ID Proof No. </b>: " . $e_cand_id_no4 . "</td>
                        </tr>";

        }
       
    }
        $to = 'anmol.sds10@yahoo.com';
        $subject = 'GotoCorbett : Elephant Safari Booking Request';
        $headers = "From: " . strip_tags($_POST['e_email']) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($_POST['e_email']) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $message .="</table>";
        $message .= "</body></html>";            
        $elephant_mail = mail($to, $subject, $message, $headers);
        if($elephant_mail){
            echo $message;
            
        }else{
            
            echo 'Error';
        }
?> 