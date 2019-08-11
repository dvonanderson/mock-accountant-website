<?php



if ($_POST["submit"]) {


     if (!$_POST['name']) {



       $error="<br />Please enter your name";

     }
      

     if (!$_POST['email']) {


       $error.="<br />Please enter your email address";


     }

     
      if (!$_POST['phone']) {


      $error.="<br /> Please enter your phone number";

     }



      if (!$_POST['message']) {


       $error.="<br />Please enter a message";


     }
      

     if ($_POST['email']!="" AND !filter_var($_POST['email'],

FILTER_VALIDATE_EMAIL)) {  

     $error.="<br />Please enter a valid email address";

     } 

     if ($error) {



 $result='<div class="alert alert-danger"><strong>There were error(s)

in your form:</strong>'.$error.'</div>';



     } else {



 if (mail("info@yourdomain.com", "Message from Your Website Name", 
/*This is the email where you will recieve the contact form messages */


"Name: ".$_POST['name']."

Email: ".$_POST['email']."

Phone: ".$_POST['phone']." 

Message: ".$_POST['message'])) {

$result='<div class="alert alert-success"> <strong> Thank

you!</strong> We\'ll get back to you shortly.</div>';

} else {

$result='<div class="alert alert-danger">Sorry, there was

an error sending your message. Please try again later.</div>';

}

}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  
  <!-- Meta Description -->
  <meta content="" name="description">

  
  <title>Contact Accountant in Cleveland</title>

      <!-- CSS Stylesheets -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/navbar.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" type="text/css" href="css/contact-page-styling.css" />

  <!--Font Styles -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

  <!--FAVICON-->
  <link href="images/accounting-favicon.jpg" rel="icon">

</head>

<body>

  

  <div class="container-fluid" id="banner" align="center">

        <a href="/index.html">
        <img alt="accounting-logo" class="logo" src="images/accounting-logo.png"></a>

  </div><!--end banner-->


  <nav class="navbar navbar-default navbar-static-top" id="topnavbar" role="navigation">

    <div class="navbar-header">

      <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">

          <span class="sr-only">Toggle navigation</span> 

              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span>

      </button>

    </div><!--end navbar-header-->

    <div class="collapse navbar-collapse" align="center" >

      <ul class="nav navbar-nav">
          
          <li><a href="/accounting-services.html">ACCOUNTING SERVICES</a></li>

          <li><a href="/accounting-resources.html">RESOURCES</a></li>

          <li><a href="/blog.html">BLOG</a></li>

          <li><a href="/about.html">ABOUT</a></li>

          <li><a href="/contact.php">CONTACT</a></li>

      </ul>

    </div>

  </nav><!--end navbar-->


<div class="contact-banner">

    <div class="row">

      <div class="col-md-4 col-md-offset-4">

        <h3 align="center">CONTACT US</h3>

                  <br><br><br><br><br><br><br>

                <p align="center" id="result"><?php echo $result; ?></p>

                <!--PHP FORM SUCCESS RESULT will show here-->

      </div><!--end col-md-->

    </div><!--end row-->

  </div><!--end contact-banner-->

  <div class="contactusform">

    <div class="row">

      <div class="col-md-1"></div>

      <div class="col-md-5 contact-details"><br>
      
        <div class="contact-info">

          <p class="contact-heading">CONTACT</p><br>

          <p class="head">Address:</p><span class="info">7 Random Avenue,<br>

          Pearl Street,<br>

          Cleveland, 0020<br><br></span><br>

          <p class="head">Phone</p>

          <p class="info">+1-202-555-0170</p><br>

          <p class="head">Email</p>

          <p class="info">info@yourwebsitesname.com</p><br>

          <div id="map">

            <iframe allowfullscreen class="map" frameborder="0" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191252.16335431935!2d-81.84594384292143!3d41.497447015397256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8830ef2ee3686b2d%3A0xed04cb55f7621842!2sCleveland%2C+OH%2C+USA!5e0!3m2!1sen!2sza!4v1513776511699" style="border:0" width="500"></iframe>

          </div><!--end map--><br><br>

        </div><!--end contact-info-->

      </div><!--end contact-details-->


      <div class="col-md-6 emailForm" align="center">

          <h4 align="center"> If you have any questions, please fill in the form and we will get back to you asap.</h4>

          <form method="post">

            <div class="form-group">

                <label for="name">Your Name:</label>

                  <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>" />

            </div>

            <div class="form-group">

                <label for="email">Your Email:</label>

                  <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>" />

            </div>

            <div class="form-group">

                <label for="phone">Your Phone:</label>

                  <input type="tel" name="phone" class="form-control" placeholder="Your Phone" value="<?php echo $_POST['phone']; ?>" />

            </div>

            <div class="form-group">

              <label for="message">Enquiry:</label>

                  <textarea class="form-control" id="message" name="message">

                  <?php echo $_POST['message']; ?> </textarea>

            </div><br />


            <p align="center" ><input type="submit" name="submit" class="btn btn-success btn-lg" value="SEND ENQUIRY" /></p><br />

        </form>

    </div><!--end emailForm-->

  </div><!--end row-->

</div><!--end contactusform-->


<div class="consultation-strip" align="center">

    <p><a href="/contact.php">REQUEST A FREE CONSULTATION</a></p>

  </div><!--end consultation-strip-->


  <footer>

    <div id="footer" align="center">

        <a href="/about.html">ABOUT</a>

        <a href="/accounting-services.html">ACCOUNTING SERVICES</a> 

        <a href="/accounting-resources.html">RESOURCES</a> 

        <a href="/blog.html">BLOG</a> 

        <a href="/faq.html">FAQ</a> 

        <a href="/contact.php">CONTACT</a>

    </div><!--end of footer-->

            <p class="address">Address: 7 Random Avenue, Pearl Street, Cleveland, 0020</p>

    <div class="footerlinks" align="center">
      
      <a href="/privacy-policy.html" rel="nofollow">Privacy Policy</a> 

      <a href="/terms-and-conditions.html" rel="nofollow">Terms &amp; Conditions</a>

      <p align="center" class="text-muted copyright">&copy; Your Website/Business 2017</p>

    </div>

  </footer><!--end Footer-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
  </script> 
  <!-- Include all compiled plugins (below), or include individual files as needed -->

   
   <!--FIXED NAVBAR SCRIPT-->
  <script src="js/bootstrap.min.js">
  </script> 
  
  <script>
  $('#topnavbar').affix({
     offset: {
         top: $('#banner').height()
     }   
  }); 
  </script>


</body>

</html>