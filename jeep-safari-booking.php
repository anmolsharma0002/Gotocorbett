<?php
    $message="";
    function test_input($data){
        $data = trim($data);
        return $data;
    }
    if(isset($_POST['submit'])){
        $jeep_name = test_input($_POST['jeep_name']);
        $jeep_email = test_input($_POST['jeep_email']);
        $jeep_mob = test_input($_POST['jeep_mob']);
        $jeep_nationality = test_input($_POST['jeep_nationality']);
        $jeep_date = test_input($_POST['jeep_date']);
        $jeep_time = test_input($_POST['jeep_time']);
        $jeep_cand_name = test_input($_POST['jeep_cand_name']);
        $jeep_cand_age = test_input($_POST['jeep_cand_age']);
        $jeep_cand_gender = test_input($_POST['jeep_cand_gender']);
        $jeep_cand_id_no = test_input($_POST['jeep_cand_id_no']);
        
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
                                    <td><b>Name :</b> ". $jeep_name ."</td>
                                    <td><b>email :</b> ". $jeep_email ."</td>
                                    <td><b>Contact No. </b>: " . $jeep_mob . "</td>
                                </tr>
                                <tr>
                                    <td><b>Nationality :</b> ". $jeep_nationality ."</td>
                                    <td><b>Date :</b> ". $jeep_date ."</td>
                                    <td><b>Time :</b> " . $jeep_time . "</td>
                                </tr>

                            </table>
                            <p> Booking Details</p>
                            <table>
                                <tr>
                                    <td>1.</td>
                                    <td><b>Name :</b> ". $jeep_cand_name ."</td>
                                    <td><b>Age :</b> ". $jeep_cand_age ."</td>
                                    <td><b>Gender </b>: " . $jeep_cand_gender . "</td>
                                    <td><b>ID Proof No. </b>: " . $jeep_cand_id_no . "</td>

                                </tr>";

                           
        
        // second
        if((test_input($_POST['jeep_cand_name2'])!=null && test_input($_POST['jeep_cand_name2'])!='') && 
            (test_input($_POST['jeep_cand_age2'])!=null && test_input($_POST['jeep_cand_age2'])!='') &&
            (test_input($_POST['jeep_cand_gender2'])!=null && test_input($_POST['jeep_cand_gender2'])!='') && 
            (test_input($_POST['jeep_cand_id_no2'])!=null && test_input($_POST['jeep_cand_id_no2'])!='')){
            $jeep_cand_name2 = test_input($_POST['jeep_cand_name2']);
            $jeep_cand_age2 = test_input($_POST['jeep_cand_age2']);
            $jeep_cand_gender2 = test_input($_POST['jeep_cand_gender2']);
            $jeep_cand_id_no2 = test_input($_POST['jeep_cand_id_no2']);

            $message .=" <tr>
                            <td>2.</td>
                            <td><b>Name :</b> ". $jeep_cand_name2 ."</td>
                            <td><b>Age :</b> ". $jeep_cand_age2 ."</td>
                            <td><b>Gender </b>: " . $jeep_cand_gender2 . "</td>
                            <td><b>ID Proof No. </b>: " . $jeep_cand_id_no2 . "</td>
                        </tr>";
            
        }
        
        // //third
        if((test_input($_POST['jeep_cand_name3'])!=null && test_input($_POST['jeep_cand_name3'])!='') && 
            (test_input($_POST['jeep_cand_age3'])!=null && test_input($_POST['jeep_cand_age3'])!='') &&
            (test_input($_POST['jeep_cand_gender3'])!=null && test_input($_POST['jeep_cand_gender3'])!='') && 
            (test_input($_POST['jeep_cand_id_no3'])!=null && test_input($_POST['jeep_cand_id_no3'])!='')){
            $jeep_cand_name3 = test_input($_POST['jeep_cand_name3']);
            $jeep_cand_age3 = test_input($_POST['jeep_cand_age3']);
            $jeep_cand_gender3 = test_input($_POST['jeep_cand_gender3']);
            $jeep_cand_id_no3 = test_input($_POST['jeep_cand_id_no3']);
            $message .=" <tr>
                            <td>3.</td>
                            <td><b>Name :</b> ". $jeep_cand_name3 ."</td>
                            <td><b>Age :</b> ". $jeep_cand_age3 ."</td>
                            <td><b>Gender </b>: " . $jeep_cand_gender3 . "</td>
                            <td><b>ID Proof No. </b>: " . $jeep_cand_id_no3 . "</td>
                        </tr>";

        }
        // //fourth
        if((test_input($_POST['jeep_cand_name4'])!=null && test_input($_POST['jeep_cand_name4'])!='') && 
            (test_input($_POST['jeep_cand_age4'])!=null && test_input($_POST['jeep_cand_age4'])!='') &&
            (test_input($_POST['jeep_cand_gender4'])!=null && test_input($_POST['jeep_cand_gender4'])!='') && 
            (test_input($_POST['jeep_cand_id_no4'])!=null && test_input($_POST['jeep_cand_id_no4'])!='')){
                
            $jeep_cand_name4 = test_input($_POST['jeep_cand_name4']);
            $jeep_cand_age4 = test_input($_POST['jeep_cand_age4']);
            $jeep_cand_gender4 = test_input($_POST['jeep_cand_gender4']);
            $jeep_cand_id_no4 = test_input($_POST['jeep_cand_id_no4']);
            $message .=" <tr>
                            <td>4.</td>
                            <td><b>Name :</b> ". $jeep_cand_name4 ."</td>
                            <td><b>Age :</b> ". $jeep_cand_age4 ."</td>
                            <td><b>Gender </b>: " . $jeep_cand_gender4 . "</td>
                            <td><b>ID Proof No. </b>: " . $jeep_cand_id_no4 . "</td>
                        </tr>";

        }
        // //fifth
        if((test_input($_POST['jeep_cand_name5'])!=null && test_input($_POST['jeep_cand_name5'])!='') && 
            (test_input($_POST['jeep_cand_age5'])!=null && test_input($_POST['jeep_cand_age5'])!='') &&
            (test_input($_POST['jeep_cand_gender5'])!=null && test_input($_POST['jeep_cand_gender5'])!='') && 
            (test_input($_POST['jeep_cand_id_no5'])!=null && test_input($_POST['jeep_cand_id_no5'])!='')){
                
            $jeep_cand_name5 = test_input($_POST['jeep_cand_name5']);
            $jeep_cand_age5 = test_input($_POST['jeep_cand_age5']);
            $jeep_cand_gender5 = test_input($_POST['jeep_cand_gender5']);
            $jeep_cand_id_no5 = test_input($_POST['jeep_cand_id_no5']);
            $message .=" <tr>
            <td>5.</td>
            <td><b>Name :</b> ". $jeep_cand_name5 ."</td>
            <td><b>Age :</b> ". $jeep_cand_age5 ."</td>
            <td><b>Gender </b>: " . $jeep_cand_gender5 . "</td>
            <td><b>ID Proof No. </b>: " . $jeep_cand_id_no5 . "</td>
            </tr>";

        }   

        // //sixth
        if((test_input($_POST['jeep_cand_name6'])!=null && test_input($_POST['jeep_cand_name6'])!='') && 
        (test_input($_POST['jeep_cand_age6'])!=null && test_input($_POST['jeep_cand_age6'])!='') &&
        (test_input($_POST['jeep_cand_gender6'])!=null && test_input($_POST['jeep_cand_gender6'])!='') && 
        (test_input($_POST['jeep_cand_id_no6'])!=null && test_input($_POST['jeep_cand_id_no6'])!='')){
            
            $jeep_cand_name6 = test_input($_POST['jeep_cand_name6']);
            $jeep_cand_age6 = test_input($_POST['jeep_cand_age6']);
            $jeep_cand_gender6 = test_input($_POST['jeep_cand_gender6']);
            $jeep_cand_id_no6 = test_input($_POST['jeep_cand_id_no6']);
            $message .=" <tr>
            <td>6.</td>
            <td><b>Name :</b> ". $jeep_cand_name6 ."</td>
            <td><b>Age :</b> ". $jeep_cand_age6 ."</td>
            <td><b>Gender </b>: " . $jeep_cand_gender6 . "</td>
            <td><b>ID Proof No. </b>: " . $jeep_cand_id_no6 . "</td>
            </tr>";

        }
    }
        $to = 'anmol.sds10@yahoo.com';
        $subject = 'GotoCorbett : Jeep Safari Booking Request';
        $headers = "From: " . strip_tags($_POST['jeep_email']) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($_POST['jeep_email']) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $message .="</table>";
        $message .= "</body></html>";            
        $jeep_safari_mail = mail($to, $subject, $message, $headers);
        if($jeep_safari_mail){
            echo $message;
            
        }else{
            
            echo 'Error';
        }
?> 