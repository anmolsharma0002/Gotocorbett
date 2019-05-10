<!DOCTYPE html>
<head>
    <title>GotoCorbett.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="gotocorbett.com - Book Online jeep safari in corbett national park.Elephant safari in corbett,corbett jungle safari, jeep safari, corbett canter safari, corbett safari costing, corbett safari timing, Tour Packages  and more" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/tabcontent.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>
    <?php
        include('header.php');
    ?>
    <div class="container-fluid header">
        <div class="row custom-form-position">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
    
                <div class="well custom-well">

                    <div class="moving-p" >
                        <p>
                            <marquee>
                                ONLINE BOOKINGS FOR JEEP SAFARIS TO BIJRANI - JHIRNA - DURGADEVI - DHELA & CANTER SAFARIS TO DHIKALA AREAS OF CORBETT TIGER RESERVE - MORNING & EVENING TRIPS - ARE NOW AVAILABLE ONLINE - TO BOOK CONTACT US.
                            </marquee>
                        </p>
                    </div>
                    <div class="col-size">
                      You can also book on Call : +91-7055664060 , +91-9012422218
                    </div>
                    <p> <b>Welcome to GotoCorbett</b>, GotoCorbett booking portal for Corbett National Park. Here you can book online jeep safari, canter safari, elephant safari for Dhikala safari zone, Bijrani zone, Jhirna zone, Durgadevi zone, Dhela Zone  and Sitabani safari zone. We also provide corbett tour packages...</p>
                    <div class="col-sm-12 tabs">
                        <button class="btn" id="btn-jeep" onClick="jeepsafari()">Jeep Safari Booking</button>
                        <button class="btn" id="btn-canter" onClick="cantersafari()">Canter Safari Booking</button>
                        <button class="btn" id="btn-elephant" onClick="elephantsafari()">Elephant Safari Booking</button>
                        <button class="btn" id="btn-hotels" onClick="hotelsbooking()">Hotels & Resorts Booking</button>
                    </div>

                    <!-- ////////////  Jeep Safari Booking Form Start here  //////////////// -->
                    <div class="card" id="jeep">
                        <div class="card-header">Jeep Safari Booking</div>
                        <div class="card-body">
                            <div class="card">
                                
                                <div class="card-body">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <td>Price (Indian)</td>
                                        <td>INR 4500 / Jeep (Maximum 6 Persons are allowed in ONE Jeep)</td>
                                    </tr>
                                    <tr>
                                        <td>Price (Foreigner)</td>
                                        <td>INR 6000 / Jeep (Maximum 6 Persons are allowed in ONE Jeep)</td>
                                    </tr>
                                    <tr>
                                        <td>Zones</td>
                                        <td>Bijrani, Jhirna, Durgadevi, Dhela & Sitabani(Corbett Landscape)</td>
                                    </tr>
                                    <tr>
                                        <td>Timings</td>
                                        <td>Morning 6:00 AM - 10:00 AM&nbsp;&nbsp;|&nbsp;&nbsp;Evening 2:00 PM - 6:00 PM</td>
                                    </tr>
                                    </tbody>
                                </table>
                                    <!--  form start here !!!! -->
                                <form action="jeep-safari-booking.php" method="post">
                                    <div class="form-group"><h6><b>Please enter your contact details</b></h6></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input class="form-control" type="text" name="jeep_name" id="name" placeholder="eg. John Doe" autofocus required>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control" type="email" name="jeep_email" id="email" placeholder="someone@example.com" required>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="username">Mobile</label>
                                                <input class="form-control" type="text" name="jeep_mob" id="mob" placeholder="enter 10 digits monbile no." required>
                                                 
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="name">Nationality</label>
                                                <select id="inputState" class="form-control" name="jeep_nationality" required>
                                                    <option value="" selected> Select<option>
                                                    <option value="Indian">Indian</option>
                                                    <option value="Foreigner">Foreigner</option>
                                                </select>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Choose Visiting Date</label>
                                                <input class="form-control" type="Date" name="jeep_date" id="date" placeholder="choose date" required>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="username">Select Shift Time</label>
                                                <select id="inputState" class="form-control" name="jeep_time" required>
                                                    <option value=""> Select</option>
                                                    <option value="morning">Morning</option>
                                                    <option value="evening">Evening</option>
                                                </select>
                                               
                                            </div>
                                        </div> 
                                    </div>
                                    <hr/>
                                    <div class="form-group"><h6><b>Enter booking details</b></h6></div>
                                    <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>ID Proof Number</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!-- first row start -->
                                        <tr> 
                                            <td>
                                                1.
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text"class="form-control-sm" name="jeep_cand_name" placeholder="Name" required>
                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control-sm" min="1" name="jeep_cand_age" placeholder="Age" required>
                                                    
                                                </div>
                                            </td>
                                            <td> 
                                                <div class="form-group">
                                                    <select id="inputState" class="form-control-sm" name="jeep_cand_gender" required>
                                                        <option value=""> Choose...</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                   
                                                 </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control-sm" name="jeep_cand_id_no" placeholder="ID Proof Number" required>
                                                   
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- first row end -->
                                        <!-- second row start -->
                                        <tr>
                                            <td>
                                                2.
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="jeep_cand_name2" placeholder="Name">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control-sm" min="1" name="jeep_cand_age2" placeholder="Age">
                                            </td>
                                            <td> 
                                                <select id="inputState" class="form-control-sm" name="jeep_cand_gender2">
                                                    <option selected=""> Choose...</option>
                                                    <option >Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="jeep_cand_id_no2" placeholder="ID Proof Number">
                                            </td>
                                        </tr>
                                        <!-- second row end -->
                                        <!-- third row start -->
                                        <tr>
                                            <td>
                                                3.
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="jeep_cand_name3" placeholder="Name">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control-sm" min="1" name="jeep_cand_age3" placeholder="Age">
                                            </td>
                                            <td> 
                                                <select id="inputState"  class="form-control-sm" name="jeep_cand_gender3" >
                                                    <option selected=""> Choose...</option>
                                                    <option >Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="jeep_cand_id_no3" placeholder="ID Proof Number">
                                            </td>
                                        </tr>
                                        <!-- third row end -->
                                        <!--  -->
                                        <tr>
                                            <td>
                                                4.
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="jeep_cand_name4" placeholder="Name">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control-sm" min="1" name="jeep_cand_age4"  placeholder="Age">
                                            </td>
                                            <td> 
                                                <select id="inputState" class="form-control-sm" name="jeep_cand_gender4" >
                                                    <option selected=""> Choose...</option>
                                                    <option >Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="jeep_cand_id_no4"  placeholder="ID Proof Number">
                                            </td>
                                        </tr>
                                        <!--  -->
                                        <!--  -->

                                        <tr>
                                            <td>
                                                5.
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm"  name="jeep_cand_name5" placeholder="Name">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control-sm" min="1" name="jeep_cand_age5" placeholder="Age">
                                            </td>
                                            <td> 
                                                <select id="inputState" class="form-control-sm" name="jeep_cand_gender5" >
                                                    <option selected=""> Choose...</option>
                                                    <option >Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" placeholder="ID Proof Number" name="jeep_cand_id_no5">
                                            </td>
                                        </tr>
                                        <!--  -->
                                        <!--  -->
                                        <tr>
                                            <td>
                                                6.
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="jeep_cand_name6" placeholder="Name">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control-sm" min="1" placeholder="Age" name="jeep_cand_age6" >
                                            </td>
                                            <td> 
                                                <select id="inputState" class="form-control-sm" name="jeep_cand_gender6" >
                                                    <option selected=""> Choose...</option>
                                                    <option >Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" placeholder="ID Proof Number" name="jeep_cand_id_no6" >
                                            </td>
                                        </tr>
                                        <!--  -->
                                       
                                        </tbody>
                                    </table>
                                    </div> 
                                        <div class="form-group btn-space">
                                            <button type="submit" name="submit" class="btn btn-warning btn-block">Book</button>
                                        </div>                  
                                </form>                                      
                                    <div class="card">
                                        <div class="card-body jeep-text">
                                            <ul>
                                                <li>ID Proof: DL Number, PAN Card Number, Voter ID, Passport Number, Student ID etc.</li>
                                                <li>The Traveler has to carry the same ID Proof as submitted in this form, while visiting Corbett National Park.</li>
                                                <li>The Jeep will pickup & drop from/to the Resort/Hotel/Railway Station as specified by the Traveler. (Conditions Apply)</li>
                                                <li>Safari Charges are NON-REFUNDABLE.</li>
                                            </ul>
                                             <h5>Jeep Safari in Corbett National Park</h5>
                                            <ul>
                                                <li>
                                                     We required complete information of guests with name, age, ID proof (all guest) and gender. 
                                                    Jeep safari can be done only after receiving 100% safari package in advance by guest 
                                                    which are non refundable. All visitors must carry valid id proof during entry time into 
                                                    corbett national park. corbett tiger reserve allows six members in one gypsy.
                                                </li>
                                                <li>
                                                    Safari in Corbett National Park is a heavenly trip of forest as also marks the difference of the beauty and the 
                                                    lustrous joy together. Many renowned wildlife experts and wildlife photographers have observed 
                                                    and photographed the tigers at Corbett wildlife sanctuary. The virgin world of wildlife 
                                                    comes close to you making you get the highest thrill of the trip. You have opportunity to 
                                                    enjoy Jeep Safari and Canter Safari And Elephant Safari at  Corbett National Park for day visit.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                     <!-- ////////////  Jeep Safari Booking Form Ends here  //////////////// -->

                    <!-- ////////////  Canter Safari Booking Form Start here  //////////////// -->
                    <div class="card" id="canter">
                        <div class="card-header">Canter Safari Booking</div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <td>Price (Indian)</td>
                                        <td>INR 1400 / Person ( One Canter has 16 Seats )</td>
                                    </tr>
                                    <tr>
                                        <td>Price (Foreigner)</td>
                                        <td>INR 2800 / Person ( One Canter has 16 Seats )</td>
                                    </tr>
                                    <tr>
                                        <td>Zones</td>
                                        <td>Dhikala</td>
                                    </tr>
                                    <tr>
                                        <td>Timings</td>
                                        <td>Morning 6:00 AM - 11:30 AM&nbsp;&nbsp;|&nbsp;&nbsp;Evening 12:00 PM - 5:30 PM</td>
                                    </tr>
                                    </tbody>
                                </table>
                                    <!--  form start here !!!! -->
                                <form action="canter-safari-booking.php" method="post">
                                    <div class="form-group"><h6><b>Please enter your contact details</b></h6></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input class="form-control" type="text"  id="name" placeholder="eg. John Doe" name="canter_name" autofocus required> 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control" type="email"  id="email" placeholder="someone@example.com" name="canter_email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="username">Mobile</label>
                                                <input class="form-control" type="text"  id="mob" placeholder="enter 10 digits monbile no." name="canter_mob" required>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="name">Nationality</label>
                                                <select id="inputState" class="form-control" name="canter_nationality" required>
                                                    <option value="" selected> Select<option>
                                                    <option value="Indian">Indian</option>
                                                    <option value="Foreigner">Foreigner</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Choose Visiting Date</label>
                                                <input class="form-control" type="Date" name="canter_date" id="date" placeholder="choose date" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="username">Select Shift Time</label>
                                                <select id="inputState" class="form-control" name="canter_time" required>
                                                    <option value="" selected> Select</option>
                                                    <option value="Morning">Morning</option>
                                                    <option value="Evening">Evening</option>
                                                </select>
                                            </div>
                                        </div> 
                                    </div>
                                    <hr/>
                                    <div class="form-group"><h6><b>Enter booking details</b></h6></div>
                                    <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>ID Proof Number</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!-- first row start -->
                                        <tr> 
                                            <td>
                                                1.
                                            </td>
                                            <td>
                                                <input type="text"class="form-control-sm" name="canter_cand_name" placeholder="Name" required>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control-sm" min="1" name="canter_cand_age" placeholder="Age" required>                                                
                                            </td>
                                            <td> 
                                                <select id="inputState" class="form-control-sm" name="canter_cand_gender" required>
                                                    <option value="" selected> Choose...</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="canter_cand_id_no" placeholder="ID Proof Number" required>
                                            </td>
                                        </tr>
                                        <!-- first row end -->
                                        <!-- second row start -->
                                        <tr>
                                            <td>
                                                2.
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="canter_cand_name2" placeholder="Name">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control-sm" name="canter_cand_age2" min="1" placeholder="Age">
                                            </td>
                                            <td> 
                                                <select id="inputState" class="form-control-sm" name="canter_cand_gender2">
                                                    <option value="" selected> Choose...</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="canter_cand_id_no2" placeholder="ID Proof Number">
                                            </td>
                                        </tr>
                                        <!-- second row end -->
                                        <!-- third row start -->
                                        <tr>
                                            <td>
                                                3.
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="canter_cand_name3" placeholder="Name">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control-sm" name="canter_cand_age3" min="1" placeholder="Age">
                                            </td>
                                            <td> 
                                                <select id="inputState"  class="form-control-sm" name="canter_cand_gender3">
                                                    <option value="" selected> Choose...</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" placeholder="ID Proof Number" name="canter_cand_id_no3">
                                            </td>
                                        </tr>
                                        <!-- third row end -->
                                        <!--  -->
                                        <tr>
                                            <td>
                                                4.
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="canter_cand_name4" placeholder="Name">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control-sm" name="canter_cand_age4" min="1" placeholder="Age">
                                            </td>
                                            <td> 
                                                <select id="inputState" class="form-control-sm" name="canter_cand_gender4">
                                                    <option value="" selected> Choose...</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="canter_cand_id_no4" placeholder="ID Proof Number">
                                            </td>
                                        </tr>
                                        <!--  -->
                                        <!--  -->

                                        <tr>
                                            <td>
                                                5.
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="canter_cand_name5" placeholder="Name">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control-sm" name="canter_cand_age5" min="1" placeholder="Age">
                                            </td>
                                            <td> 
                                                <select id="inputState" class="form-control-sm" name="canter_cand_gender5">
                                                    <option value="" selected> Choose...</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="canter_cand_id_no5" placeholder="ID Proof Number">
                                            </td>
                                        </tr>
                                        <!--  -->
                                        <!--  -->
                                        <tr>
                                            <td>
                                                6.
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="canter_cand_name6" placeholder="Name">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control-sm" name="canter_cand_age6" min="1" placeholder="Age">
                                            </td>
                                            <td> 
                                                <select id="inputState" class="form-control-sm" name="canter_cand_gender6">
                                                    <option value="" selected> Choose...</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" placeholder="ID Proof Number" name="canter_cand_id_no6">
                                            </td>
                                        </tr>
                                        <!--  -->
                                       
                                        </tbody>
                                    </table>
                                    </div> 
                                        <div class="form-group btn-space">
                                            <button type="submit" name="canter_submit" class="btn btn-warning btn-block">Book</button>
                                        </div>                  
                                </form>                                      
                                    <div class="card">
                                        <div class="card-body jeep-text">
                                            <ul>
                                                <li>ID Proof: DL Number, PAN Card Number, Voter ID, Passport Number, Student ID etc.</li>
                                                <li>The Traveler has to carry the same ID Proof as submitted in this form, while visiting Corbett National Park.</li>
                                                <li>The Canter will be available at common point ( Corbett Receiption, Ramnagar OR Dhangari Gate, Corbett ).</li>
                                                <li>Each Traveler has to join the Canter at their own.</li>
                                                <li>Safari Charges are NON-REFUNDABLE.</li>
                                            </ul>
                                            <h5>Corbett Safari Entry Formalities</h5>
                                            <p align="justify" style="padding: 0 15px;">All visitors to Corbett National Park have to obtain permits from the concerned authority. 
                                            These can be obtained from the park administration centre located at Ramnagar. The 03 days duration permit is issued on the spot without 
                                            any delay provided photocopies of the identity cards along of the applicants are made available. Foreign nationals have to produce their 
                                            passport and photocopy for the same to get the permit. 
                                            <br><br>Corbett Forest Lodges Permits would be issued for a maximum of three days only. Permit is not transferrable and once the permit is 
                                            issued it is not refundable. The park authorities shall not be responsible in any way for damages caused.</p>
                                            <h5>Permit for Different Safari Zones </h5> 
                                            <p align="justify" style="padding: 0 15px;"> Corbett Tiger Reserve provides you four entry points namely 
                                            Jhirna, Bijrani, Dhikala and Durgadevi. There are two types of permits that you have to obtain separately 
                                            i.e. for the entry of Safari vehicles and forest lodges accommodation. You can obtain permit for these two online. 
                                            It is always advisable to book your safari in advance i.e. you can book 30 days prior to your actual arrival. 
                                            It is so because only 75 vehicles are allowed inside the Corbett National Park at a time. Safari is permissible 
                                            only in the specific zone you have booked for. Once you have booked the safari there is no provision for 
                                            cancellation and rescheduling. <br><br>
                                            The number of vehicles permitted to enter for day Safari in a particular zone is distributed as: Bijrani and Jhirna 
                                            30 Safari for each zone are allowed at a time while from Durgadevi only 15 Safari are allowed respectively within 
                                            the Corbett National Park.
                                            <br><br>
                                            <b>Note:</b> Apart from the above mentioned number of the safari, two canter safaris (16 seats per canter) are 
                                            allowed especially in Dhikala tourism zone. The park authority of Wildlife Warden or in-charge may cancel 
                                            your permit for any good and sufficient reasons to be recorded in writings.  
                                            </p><br />

                                            <h5>Canter Safari in Corbett National Park</h5>
                                            <ul>
                                                <li>
                                                     We required complete information of guests with name, age, ID proof (all guest) and gender. 
                                                    Jeep safari can be done only after receiving 100% safari package in advance by guest 
                                                    which are non refundable. All visitors must carry valid id proof during entry time into 
                                                    corbett national park. corbett tiger reserve allows six members in one gypsy.
                                                </li>
                                                <li>
                                                    Safari in Corbett National Park is a heavenly trip of forest as also marks the difference of the beauty and the 
                                                    lustrous joy together. Many renowned wildlife experts and wildlife photographers have observed 
                                                    and photographed the tigers at Corbett wildlife sanctuary. The virgin world of wildlife 
                                                    comes close to you making you get the highest thrill of the trip. You have opportunity to 
                                                    enjoy Jeep Safari and Canter Safari And Elephant Safari at  Corbett National Park for day visit.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                            
                    </div>
                    <!-- ////////////  Canter Safari Booking Form Ends here  //////////////// -->
                    
                    <!-- ////////////  Elephant Safari Booking Form Start here  //////////////// -->
                    <div class="card" id="elephant">
                        <div class="card-header">Elephant Safari Booking</div>
                        <div class="card-body">                           
                            <div class="card">
                                <div class="card-body">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <td>Price (Indian)</td>
                                        <td>INR 3200 / Elephant ( Maximum 4 Persons are allowed in ONE Elephant )</td>
                                    </tr>
                                    <tr>
                                        <td>Price (Foreigner)</td>
                                        <td>INR 3200 / Elephant ( Maximum 4 Persons are allowed in ONE Elephant )</td>
                                    </tr>
                                    <tr>
                                        <td>Zones</td>
                                        <td>Reserve Forest Area (Corbett Landscape)</td>
                                    </tr>
                                    <tr>
                                        <td>Timings</td>
                                        <td>Morning 6:30 AM - 10:00 AM&nbsp;&nbsp;|&nbsp;&nbsp;Evening 1:30 PM - 5:30 PM</td>
                                    </tr>
                                    </tbody>
                                </table>
                                    <!--  form start here !!!! -->
                                <form action="elephant-safari-booking.php" method="post">
                                    <div class="form-group"><h6><b>Please enter your contact details</b></h6></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input class="form-control" type="text" name="e_name" id="name" placeholder="eg. John Doe" autofocus required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control" type="email" name="e_email" id="email" placeholder="someone@example.com" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="username">Mobile</label>
                                                <input class="form-control" type="text" name="e_mob" id="mob" placeholder="enter 10 digits monbile no." required>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="name">Nationality</label>
                                                <select id="inputState" class="form-control" name="e_nationality" required>
                                                    <option value="" selected> Select<option>
                                                    <option value="Indian">Indian</option>
                                                    <option value="Foreigner">Foreigner</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Choose Visiting Date</label>
                                                <input class="form-control" type="Date" name="e_date" id="date" placeholder="choose date" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="username">Select Shift Time</label>
                                                <select id="inputState" name="e_time" class="form-control" required>
                                                    <option selected> Select</option>
                                                    <option value="Morning">Morning</option>
                                                    <option value="Evening">Evening</option>
                                                </select>
                                            </div>
                                        </div> 
                                    </div>
                                    <hr/>
                                    <div class="form-group"><h6><b>Enter booking details</b></h6></div>
                                    <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>ID Proof Number</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!-- first row start -->
                                        <tr> 
                                            <td>
                                                1.
                                            </td>
                                            <td>
                                                <input type="text"class="form-control-sm" name="e_cand_name" placeholder="Name" required>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control-sm" name="e_cand_age" min="1" placeholder="Age" required>
                                            </td>
                                            <td> 
                                                <select id="inputState" name="e_cand_gender" class="form-control-sm" required>
                                                    <option value="" selected> Choose...</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female"> Female</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="e_cand_id_no" placeholder="ID Proof Number" required>
                                            </td>
                                        </tr>
                                        <!-- first row end -->
                                        <!-- second row start -->
                                        <tr>
                                            <td>
                                                2.
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="e_cand_name2" placeholder="Name">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control-sm" min="1" name="e_cand_age2" placeholder="Age">
                                            </td>
                                            <td> 
                                                <select id="inputState" class="form-control-sm" name="e_cand_gender2">
                                                    <option value="" selected> Choose...</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="e_cand_id_no2" placeholder="ID Proof Number">
                                            </td>
                                        </tr>
                                        <!-- second row end -->
                                        <!-- third row start -->
                                        <tr>
                                            <td>
                                                3.
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="e_cand_name3" placeholder="Name">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control-sm" name="e_cand_age3" min="1" placeholder="Age">
                                            </td>
                                            <td> 
                                                <select id="inputState"  class="form-control-sm" name="e_cand_gender3">
                                                    <option value="" selected> Choose...</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="e_cand_id_no3" placeholder="ID Proof Number">
                                            </td>
                                        </tr>
                                        <!-- third row end -->
                                        <!--  -->
                                        <tr>
                                            <td>
                                                4.
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm" name="e_cand_name4" placeholder="Name">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control-sm" name="e_cand_age4" min="1" placeholder="Age">
                                            </td>
                                            <td> 
                                                <select id="inputState" class="form-control-sm" name="e_cand_gender4">
                                                    <option value="" selected> Choose...</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control-sm"  name="e_cand_id_no4" placeholder="ID Proof Number">
                                            </td>
                                        </tr>
                                        <!--  -->
                                        </tbody>
                                    </table>
                                    </div> 
                                        <div class="form-group btn-space">
                                            <button type="submit" name="e_submit" class="btn btn-warning btn-block">Book</button>
                                        </div>                  
                                </form>                                      
                                    <div class="card">
                                        <div class="card-body jeep-text">
                                            <ul>
                                                <li>Elephant Safari is booked in advance.</li>
                                                <li>ID Proof: DL Number, PAN Card Number, Voter ID, Passport Number, Student ID etc.</li>
                                                <li>The Traveler has to carry the same ID Proof as submitted in this form, while visiting Corbett National Park.</li>
                                            </ul>
                                            
                                            <p align="justify" style="padding: 0 15px;">Exclusive Elephant Rides Are Available From Our Private Elephant Station 
                                            In Dhikuli - We Have 03 Elephants On Contract.<br /><br />
                                            These Rides Can Be Advanced Booked By Filling The Query Form Above.<br /><br />
                                            The Area Where The Rides Are Conducted In Called The Corbett Landscape Area Across The Kosi River Into The Grassland 
                                            & Shrub Area .Beat Suited For Tiger & Wildlife Viewing - The Thrill Of Just Sitting On An Elephant Crossing The Kosi 
                                            River And Making Its Own Track Is An Unimaginable Experience !! <br /><br />
                                            In The Jungle, The Mighty Jungle An Elephant Ride In The Foothills Of  The Himalayas Tigers Burn Bright 
                                            If You Lucky To See One. The Words of Jim Corbett Echo Through The Jungle " Shoot Only Pictures.... Leave Only 
                                            Foot Prints..Take Only Memories"<br /><br />The Lush Layers Of Flora And The Valley Floor Illuminates In A golden Hue
                                            Under The Magical Afternoon Sunlight - An Exclusive Elephant Ride In The Periphery Areas Of Corbett Tiger Reserve. 
                                            This Ride Takes You Through The Mysterious Thick Forests, Deep Valleys And Rugged Trails Of Corbett That Offer 
                                            A Lingering Thrill To The Adventure Seeker. The Gut Feeling On This Thrilling Elephant Safari - From The First Ray 
                                            Of Rising Sun To Evening's Deepest Glow, The Landscape Unravels The Untaught Harmony Of The Primitive Wild - In 
                                            Un Comparable To Any Other Experience - When A Tiger Walks Out from the Grass Just A Stones Throw Away And Looks 
                                            Into Your Eyes And Quietly Disappears Into The Grassland Again! 
                                            The Abundant Airborne Species The Mysteries Wild And The Pictures Valley Come Together To Offer A romance Hither 
                                            To Unseen, Unheard Or Untold ,To Enhance This Unique Experience The Mahouts Are Knowledgeable And Keep Pointing 
                                            Out Interesting Flora & Fauna. <br /><br />
                                            </p><br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- ////////////  Elephant Safari Booking Form Ends here  //////////////// -->

                     <!-- ////////////  Hotels & Resorts Booking Form Starts here  //////////////// -->
                    <div class="card" id="hotels">
                        <div class="card-header">Hotels & Resorts Booking</div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                                    <!--  form start here !!!! -->
                                <form action="hotel-booking.php" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input class="form-control" type="text" name="h_name" id="name" placeholder="eg. John Doe" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control" type="email" name="h_email" id="email" placeholder="someone@example.com" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="username">Mobile</label>
                                                <input class="form-control" type="text" name="h_mob" id="mob" placeholder="enter 10 digits monbile no." required>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="name">Nationality</label>
                                                <select id="inputState" name="h_nationality" class="form-control" required>
                                                    <option value="" selected> Select<option>
                                                    <option value="Indian">Indian</option>
                                                    <option value="Foreigner">Foreigner</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Choose Visiting Date</label>
                                                <input class="form-control" type="Date" name="h_date" id="date" placeholder="choose date" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="username">Category</label>
                                                <select id="inputState" name="h_category" class="form-control">
                                                    <option value="" selected> Select</option>
                                                    <option value="Any">Any</option>
                                                    <option value="Budget">Budget</option>
                                                    <option value="Standard">Standard</option>
                                                    <option value="luxury">luxury</option>
                                                </select>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="name">No. Of Person</label>
                                                <input class="form-control" type="number" name="h_persons" id="persons" min="0" placeholder="Choose no. of person" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                        <label for="name">No. Of Nights</label>
                                                <input class="form-control" type="number" name="h_nights" id="nights" min="0" placeholder="choose no. of nights" required>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="username">Address</label>
                                                <textarea class="form-control" name="h_address" placeholder="Enter your address" required></textarea>
                                            </div>
                                        </div> 
                                    </div>
                                  
                                    <div class="form-group btn-space">
                                        <button type="submit" name="h_submit" class="btn btn-warning btn-block">Book</button>
                                    </div>                  
                                </form> 
                                     <!-- Forms End Here  -->
                                    <div class="card">
                                        <div class="card-body">
                                            <ul>
                                                <li>Budget Hotels & Resorts : Price Starts at: INR 3500/2 persons/night.</li>
                                                <li>Standard Hotels & Resorts : Price Starts at: INR 4500/2 persons/night.</li>
                                                <li>Luxury Hotels & Resorts : Price Starts at: INR 6000/2 persons/night.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <!-- ////////////  Hotels & Resorts Booking Form Ends here  //////////////// -->

                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    <div>
    <?php
        include('footer.php');
    ?>
</body>
</html>