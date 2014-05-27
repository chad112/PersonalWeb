<?php

     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "chad@chadschaub.com";
    $email_subject = "Chadschaub.com inquiry";
    
     
    $name = $_POST['name'];
    $email = $_POST['email']; 
    $number = $_POST['number']; 
 
     
    $email_message = "RSVP Details:\r\n\r\n";
     
   
    $email_message .= "Name: " . $name;
    $email_message .= "\r\nEmail: " . $email;
    $email_message .= "\r\nMessage: " . $number;

         
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="/css/style.css">
<body class="content-area-2">
<div class="container">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 blog-container">
        <div class="col-xs-6 col-xs-offset-3 text-center">
           <hr>
         <img class="splash-img"src="img/thank-you.png">
        <hr>
         <h3> Thank you for your interest! I will get back to you as soon as able. I look forward to speaking with you! <br>
          -Chad
        </h3>
        <h3 clas="text-center">Return Home</h3>
        <a href="../index.html"><img id="down-arrow"src="img/arrow-down.png"></a>

      
      <div style="clear: both;"></div>
        </div>

     
        </div>
    </div>
    </div>
</body>
<?php ?>
