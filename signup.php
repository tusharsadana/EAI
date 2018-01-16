
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









<div id="wrapper">
	<form  method="POST">
		<div class="input-wrapper">
			<label for="email"><i class="fa fa-envelope fa-2x"></i></label><input type="email" name="email" placeholder="Username" spellcheck="false" required="" >
        </div>
		<div class="input-wrapper">
			<label for="password"><i class="fa fa-lock fa-2x"></i></label><input type="password" name="password" placeholder="Password" required="" >
		</div>
		<div class="input-wrapper">
			<input type="submit" value="Sign In" class="flat-button bg-orange">
			<p>
				Not a member? <a href="signup.php">Sign up now</a> <span>&rarr;</span>
			</p>
		</div>
	</form>
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




<style>

a,
a:visited {
    text-decoration: none;
    color: #010101;
}
#wrapper {
    position: relative;
    margin-top:15em;
    left: 50%;
    width: 281px;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
}
input,
label {
    height: 49px;
  
}
input:not([type='submit']) {
    font-weight: 600;
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    width: 235px;
    height: 49px;
    padding-right: 4px;
    padding-left: 18px;
    color: #767a7f;
    border-style: none;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    outline-style: none;
    background-color: #3b4148;
}
label {
    display: inline-block;
    width: 46px;
    text-align: center;
    vertical-align: top;
    color: #606468;
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
    background-color: #363b41;
}
i[class^='fa'] {
    line-height: 1.5;
    color: #606468;
}
.input-wrapper {
    margin-bottom: 13px;
}
::-webkit-input-placeholder {
    color: #767a7f;
}
::-moz-placeholder {
    color: #767a7f;
}
:-moz-placeholder {
    color: #767a7f;
}
:-ms-input-placeholder {
    color: #767a7f;
}
span {
    color: #85868b;
}
input[type='submit'] {
    font-weight: 600;
    width: 100%;
    margin-top: 14px;
    text-transform: uppercase;
    color: #fff;
    border-style: none;
    border-radius: 3px;
}
p {
    text-align: center;
}
</style>

</html>            