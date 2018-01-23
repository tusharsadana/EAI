<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
   <!--<![endif]-->
   <head>
      <!-- Basic Page Needs -->
      <meta charset="utf-8">
      <title>EAI Society</title>
      <!-- Mobile Specific Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- Bootstrap  -->
      <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >
      <!-- Theme Style -->
      <link rel="stylesheet" type="text/css" href="stylesheets/shortcodes.css">
      <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
      <!-- Responsive -->
      <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">
      <!-- Colors -->
      <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">
      <!-- Animation Style -->
      <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">
      <!-- Favicon and touch icons  -->
      <link href="icon/eai48.png" sizes="48x48">
      <link href="icon/eai57.png" sizes="57x57">
      <link href="icon/favicon.png" rel="shortcut icon">
   </head>
   <?php require('navbar.php');?>
   <body class="header-sticky">
      <div class="page-title parallax parallaxC">
         <div class="overlay"></div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="page-title-heading">
                     <h2 class="title">CONTACT US</h2>
                  </div>
                  <div class="breadcrumbs">
                     <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Contact</li>
                     </ul>
                  </div>
                  <!-- /.breadcrumbs --> 
               </div>
               <!-- /.col-md-12 -->  
            </div>
            <!-- /.row -->  
         </div>
         <!-- /.container -->                      
      </div>
      <!-- /page-title parallax -->
      <section class="flat-row contact-page pad-top-134">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="contact-content">
                     <div class="contact-address">
                        <div class="style1">                                    
                           <img src="images/icon/c1.png" alt="image">
                        </div>
                        <div class="details">
                           <h5>Our Location</h5>
                           <p>350 Fifth Avenue, 34th floor New York</p>
                           <p>NY 10118-3299 USA</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="contact-content">
                     <div class="contact-address">
                        <div class="style1">
                           <img src="images/icon/c2.png" alt="image">
                        </div>
                        <div class="details">
                           <h5>Contact us Anytime</h5>
                           <p>Mobile: (+1) 800 555 888 </p>
                           <p>Fax: (+1) 800 666 999</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="contact-content">
                     <div class="contact-address">
                        <div class="style1">
                           <img src="images/icon/c3.png" alt="image">
                        </div>
                        <div class="details">
                           <h5>Write Some Words</h5>
                           <p>Support24/7@domain.com </p>
                           <p>Info@domain.com</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.row -->
            <div class="row">
               <div class="flat-spacer d74px"></div>
            </div>
            <div id="respond" class="comment-respond contact style2">
               <h1 class="title comment-title">Leave a Message</h1>
               <form id="contactform" class="flat-contact-form style2 bg-dark height-small" method="post" action="http://themesflat.com/html/educate/contact/contact-process.php">
                  <div class="field clearfix">
                     <div class="wrap-type-input">
                        <div class="input-wrap name">
                           <input type="text" value="" tabindex="1" placeholder="Name" name="name" id="name" required>
                        </div>
                        <div class="input-wrap email">
                           <input type="email" value="" tabindex="2" placeholder="Email" name="email" id="email" required>
                        </div>
                        <div class="input-wrap last Subject">
                           <input type="text" value="" placeholder="Subject (Optinal)" name="subject" id="subject" >
                        </div>
                     </div>
                     <div class="textarea-wrap">
                        <textarea class="type-input" tabindex="3" placeholder="Message" name="message" id="message-contact" required></textarea>
                     </div>
                  </div>
                  <div class="submit-wrap">
                     <button class="flat-button bg-orange">Send Your Message</button>
                  </div>
               </form>
               <!-- /.comment-form -->                     
            </div>
            <!-- /#respond -->
         </div>
         <!-- /.container -->   
      </section>
      <!-- Map -->
      <section>
         <div class="container-fluid">
            <div class="row">
               <div id="map" style="width: 100%; height: 500px; "></div>
            </div>
         </div>
         <!-- /.container -->
      </section>
      <?php require('footer.php');?>
      <a class="go-top">
      <i class="fa fa-chevron-up"></i>
      </a>
      <script type="text/javascript" src="javascript/jquery.min.js"></script>
      <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
      <script type="text/javascript" src="javascript/jquery.easing.js"></script> 
      <script type="text/javascript" src="javascript/jquery-waypoints.js"></script>
      <script type="text/javascript" src="javascript/parallax.js"></script>
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmdHHfPd2L8FuBZpy_XdsnA6mvbSGiEj8"></script>
      <script type="text/javascript" src="javascript/gmap3.min.js"></script> 
      <script type="text/javascript" src="javascript/jquery-validate.js"></script> 
      <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
      <script type="text/javascript" src="javascript/main.js"></script>
   </body>
</html>