<?php

  session_start();

  
  require_once 'includes/db.php';

  // Validate login
  if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
    header('location: membership.php');
    exit;
  }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->


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



<div class="container">
    <div class="row">
      <div class="col">
        <div class="card card-body bg-light mt-5">
          <h2>Dashboard <small class="text-muted"><?php echo $_SESSION['email']; ?></small></h2>
          <p>Welcome to the dashboard <?php echo $_SESSION['name']; ?></p>
          <p><a href="includes/logout.php" class="btn btn-danger">Logout</a></p>
        </div>
      </div>
    </div>
  </div>
















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