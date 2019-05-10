<!DOCTYPE html>
<head>
    <title>GotoCorbett.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="gotocorbett.com - Book Online jeep safari in corbett national park.Elephant safari in corbett,corbett jungle safari, jeep safari, corbett canter safari, corbett safari costing, corbett safari timing, Tour Packages  and more" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
     <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="contact-body">
    <!-- header start here -->
    <?php
        include('header.php');
    ?>
    <!-- header stop here -->
    <!-- contact-us form start here -->
    <div class="container col-sm-6">
        <div class="card contact-card">
            <div class="card-body">
                <div class="form-group">
                    <h5>Contact Us</h5>
                   <div class="form-group">
                   Call us : +91-7055664060 , +91-9012422218<br>
                   Email : gotocorbett@gmail.com
                   </div>                    
                </div>
                <?php include("send-query.php") ?>
                <div class="success"><?php  if($success){ echo '<i class="far fa-check-circle"></i>'; }?>&nbsp;<?php echo $success ?></div>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo $name ?>" autofocus>
                        <span class="error"><?php echo $name_err ?></span>
                    </div> <!-- form-group end.// -->
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter email" value="<?php echo $email ?>">
                        <span class="error"><?php echo $email_err ?></span>
                    </div> <!-- form-group end.// -->
                    <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" name="mob" class="form-control" placeholder="Enter 10 digit contact number" value="<?php echo $mob ?>">
                        <span class="error"><?php echo $mob_err ?></span>
                    </div> <!-- form-group end.// -->
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" name="message" placeholder="Enter Your Message Here..." value="<?php echo $message ?>"></textarea>
                        <span class="error"><?php echo $message_err ?></span>
                    </div> <!-- form-group end.// -->
                    <div class="form-group">
                    <button type="submit" name="send" class="btn btn-warning btn-block">Send</button>
                    </div> <!-- form-group end.// -->
                </form>
               
            </div>
        </div>
    </div>
    <!-- contact-us form end here -->
    <?php
        include('footer.php')
    ?>
</body>
</html>