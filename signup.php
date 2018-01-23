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
      <!--fonts--> 
      <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
      <!-- Responsive -->
      <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">
      <!-- Colors -->
      <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">
      <!-- Animation Style -->
      <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">
      <script src='https://www.google.com/recaptcha/api.js'></script>
      <script src='firebase/userAuth.js'></script>
      <!-- Favicon and touch icons  -->
      <link href="icon/eai48.png" sizes="48x48">
      <link href="icon/eai57.png" sizes="57x57">
      <link href="icon/favicon.png" rel="shortcut icon">
   </head>
   <?php require('navbar.php');?>
   <body >
      <div id="particles-js"> </div>
      <div class="bg-agile" style="margin-top:3em"  >
         <div class="book-appointment" style="position:relative" >
            <h2>General Information</h2>
            <form method= "post" onsubmit="Signin()" class = "signup">
               <div class="left-agileits-w3layouts same">
                  <div class="gaps">
                     <p>First Name</p>
                     <input type="text" name="First Name" placeholder="" required="" id = "userName"/>
                  </div>
                  <div class="gaps">
                     <p>Middle Name</p>
                     <input type="text" name="First Name" placeholder=""  id = "middleName"/>
                  </div>
                  <div class="gaps">
                     <p>Last Name</p>
                     <input type="text" name="Last Name" placeholder="" required="" id = "lastName"/>
                  </div>
                  <div class="gaps">
                     <p>Gender</p>
                     <select class="form-control" id = "gender">
                        <option></option>
                        <option>Male</option>
                        <option>Female</option>
                     </select>
                  </div>
                  <div class="gaps">
                     <p>Date of Birth</p>
                     <input  id="datepicker1" name="Text" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" >
                  </div>
                  <div class="gaps">
                     <p>Primary Interest</p>
                     <select class="form-control" id = "intrest" required="">
                        <option>Select Interest </option>
                        <option>Computer Applications</option>
                        <option >Computer Systems Organization</option>
                        <option >Computing Methodologies</option>
                        <option>Computing Milieux</option>
                        <option>Data</option>
                        <option >Hardware</option>
                        <option >Information Systems</option>
                        <option >Mathematics of Computing</option>
                        <option>Software</option>
                        <option >Theory of Computation</option>
                     </select>
                  </div>
                  <div class="gaps">
                     <p>Phone Number</p>
                     <input type="text" name="Number" placeholder="" required="" id = "phoneNumber"/>
                  </div>
               </div>
               <div class="right-agileinfo same">
                  <div class="gaps">
                     <p>Affiliation/ Institute</p>
                     <input type="text" name="First Name" placeholder="" required="" id = "affiliation"/>
                  </div>
                  <div class="gaps">
                     <p>Country</p>
                     <script type= "text/javascript" src = "javascript/country.js"></script>
                     <select id="country" name ="country" class="form-control"></select>
                  </div>
                  <div class="gaps">
                     <p>State</p>
                     <select class="form-control" name ="state" id ="state" required="">
                     </select>
                  </div>
                  <div class="gaps">
                     <p>City</p>
                     <input type="text" name="First Name" placeholder="" required="" id = "city"/>
                  </div>
                  <div class="gaps">
                     <p>Home Address</p>
                     <textarea id="message" name="message" placeholder="" title="Please enter Your Comments"></textarea>
                  </div>
                  <div class="gaps">
                     <p>Pin Code</p>
                     <input type="text" name="Number" placeholder="" required="" id = "pinCode"/>
                  </div>
               </div>
               <div class="clear"></div>
               <h2 style ="margin-top:1em">Account Information</h2>
               <div class="left-agileits-w3layouts same">
                  <div class="gaps">
                     <p>Email Address</p>
                     <input type="text" name="First Name" placeholder="" required="" id = "eMail"/>
                  </div>
               </div>
               <div class="right-agileinfo same">
                  <div class="gaps">
                     <p>Password</p>
                     <input type="password" name="Last Name" placeholder="" minlength="8" required="" id = "password"/>
                  </div>
                  <div class="gaps">
                     <p>Re-Type Password</p>
                     <input type="password" name="First Name" placeholder="" minlength="8" required="" id = "password2"/>
                  </div>
               </div>
               <div class="clear"></div>
               <!-- <div class="g-recaptcha" style= "display: table;margin-right: auto;margin-left: auto;margin-top:2em" data-sitekey="6LfkQkEUAAAAABjcIyKUJQPtwrEdj2psc8-ZqHOE"></div> -->
               <input class="button1" type="submit" value="Submit">
            </form>
         </div>
      </div>
      </div>
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
   <script>
      var x = document.getElementsByClassName("top")[0];
      x.style.display="none";
      $("form").submit(function(event) {
      
      var recaptcha = $("#g-recaptcha-response").val();
      if (recaptcha === "") {
         event.preventDefault();
         alert("Please check the recaptcha");
      }
      });
      
      
      	
   </script>
   <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
   <!-- stats.js lib --> <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
   <script  src="javascript/particle.js"></script>
   <link rel="stylesheet" href="stylesheets/jquery-ui.css" />
   <script src="javascript/jquery-ui.js"></script>
   <script>
      $(function() {
      $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
      });
                
   </script>
   <style>
      a{text-decoration:none;}
      .txt-rt{text-align:right;}/* text align right */
      .txt-lt{text-align:left;}/* text align left */
      .txt-center{text-align:center;}/* text align center */
      .float-rt{float:right;}/* float right */
      .float-lt{float:left;}/* float left */
      .clear{clear:both;}/* clear float */
      .pos-relative{position:relative;}/* Position Relative */
      .pos-absolute{position:absolute;}/* Position Absolute */
      .vertical-base{	vertical-align:baseline;}/* vertical align baseline */
      .vertical-top{	vertical-align:top;}/* vertical align top */
      nav.vertical ul li{	display:block;}/* vertical menu */
      nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
      img{max-width:100%;}
      /*--end reset--*/
      body{
      font-family: 'Roboto', sans-serif;
      font-size: 100%;
      padding: 0 0 2em;
      background-image: url("images/parallax/blurred.jpg");
      background-attachment: fixed;
      margin:0;
      }
      canvas{
      display: block;
      vertical-align: bottom;
      }
      /* ---- particles.js container ---- */
      #particles-js{
      position: fixed;
      width: 100%;
      height: 100%;   
      z-index: -0.1;
      background-position: 50% 50%;
      background-repeat: no-repeat;
      }
      .bg-agile {
      width: 65%;
      margin: 0 auto;
      }
      h1 {
      font-size: 43px;
      font-weight: 700;
      text-transform: uppercase;
      color: #fff;
      word-spacing: 11px;
      letter-spacing: 6px;
      margin: 1.1em 0;
      text-align: center;
      font-family: 'Droid Sans', sans-serif;
      }
      /*--appointment--*/
      .book-appointment h2 {
      text-align: center;
      font-size: 25px;
      color: #fff;
      text-transform: uppercase;
      margin-bottom: 1.5em;
      font-weight: 500;
      letter-spacing: 4px;
      font-family: 'Droid Sans', sans-serif;
      }
      .book-appointment {
      background:rgba(0, 0, 0, 0.24);
      padding: 50px 30px;
      }
      .book-appointment input[type="text"],input[type="password"], .book-appointment input[type="date"], .book-appointment input[type="time"], .book-appointment input[type="email"],textarea {
      width: 85%;
      color: #fff;
      outline: none;
      font-size: 0.9em;
      line-height: 25px;
      padding: 5px 10px;
      border: none;
      -webkit-appearance: none;
      margin: .3em 0em 1em;
      font-family: 'Roboto', sans-serif;
      background: rgba(0, 0, 0, 0.24);
      }
      textarea {
      resize: none;
      height: 170px;
      }
      .book-appointment select.form-control {
      outline: none;
      font-size: 0.9em;
      padding: 7px 10px;
      width: 89.5%;
      margin: 5px 0px 16px;
      border-radius: 0;
      background: rgba(0, 0, 0, 0.24);
      color: #fff;
      border: none;
      font-family: 'Roboto', sans-serif;
      }
      .book-appointment select.form-control option {
      background:#111;
      }
      .arrows-reserve{
      position:relative;
      color:#EFA52C;
      font-size:2em;
      }
      .arrows-reserve:before{
      content: '';
      position: absolute;
      bottom: 43%;
      left: 35.5%;
      background: #fff;
      width: 11%;
      height: 3px;
      }
      .arrows-reserve:after{
      content: '';
      position: absolute;
      bottom: 43%;
      right: 35.5%;
      background: #fff;
      width: 11%;
      height: 3px;
      }
      .left-agileits-w3layouts {
      width: 49%;
      float: left;
      }
      .right-agileinfo {
      width: 49%;
      float: left;
      }
      .book-appointment p {
      color: #ffffff;
      font-size: 17px;
      letter-spacing: .5px;
      text-transform:capitalize;
      }
      .same {
      padding: 0px 4px;
      }
      .gaps {
      padding-left: 3em;
      }
      p.wickedpicker__title {
      font-family: 'Roboto', sans-serif;
      background: #0b6fb2;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: .5px;
      }
      .wickedpicker__close {
      color: #fefefe;
      }
      /*--//appointment--*/
      /*--copyright--*/
      .copy.w3ls {
      margin: 2.2em 0em 0;
      text-align: center;
      }
      .copy p {
      color: #fff;
      font-size: 16px;
      letter-spacing: 1px;
      word-spacing: 2px;
      }
      .copy p a {
      color: #0b6fb2;
      text-decoration: none;
      }
      .copy p a:hover {
      color: #fff;
      }
      /*--//copyright--*/
      /*--responsive--*/
      @media(max-width:1680px){
      }
      @media(max-width:1440px){
      }
      @media(max-width:1366px){
      .gaps {
      padding-left: 2em;
      }
      .book-appointment input[type="text"],input[type="password"], .book-appointment input[type="date"], .book-appointment input[type="time"], .book-appointment input[type="email"], textarea {
      width: 90%;
      }
      select.form-control {
      width: 95.5%;
      }
      .book-appointment{
      width: 91%;
      }
      h1 {
      font-size: 35px;
      }
      .same {
      padding: 0px 2px;
      }
      .book-appointment p {
      font-size: 16px;
      }
      .book-appointment h2 {
      font-size: 22px;
      }
      input[type=submit] {
      margin-top: 1.5em;
      font-size: 1.02em;
      }
      }
      @media(max-width:1280px){
      .bg-agile {
      width: 69%;
      }
      }
      @media(max-width:1080px){
      .bg-agile {
      width: 77%;
      }
      .gaps {
      padding-left: 1.5em;
      }
      }
      @media(max-width:1050px){
      h1 {
      font-size: 31px;
      margin: 1.3em 0;
      }
      }
      @media(max-width:1024px){
      .book-appointment {
      padding: 40px 30px;
      }
      .book-appointment h2 {
      font-size: 21px;
      margin-bottom: 1.3em;
      }
      .book-appointment input[type="text"],input[type="password"], .book-appointment input[type="date"], .book-appointment input[type="time"], .book-appointment input[type="email"], textarea {
      margin: .3em 0em .7em;
      }
      .book-appointment select.form-control {
      margin: 5px 0px 9.5px;
      }
      h1 {
      margin: 1.2em 0;
      }
      .copy.w3ls {
      margin: 2em 0em 0;
      }
      }
      @media(max-width:991px){
      input[type=submit] {
      font-size: 1.01em;
      padding: 7px 20px;
      }
      .book-appointment select.form-control {
      width: 96.5%;
      }
      }
      @media(max-width:900px){
      .book-appointment h2 {
      font-size: 18px;
      letter-spacing: 3px;
      }
      .book-appointment input[type="text"],input[type="password"], .book-appointment input[type="date"], .book-appointment input[type="time"], .book-appointment input[type="email"], textarea {
      line-height: 21px;
      }
      textarea {
      height: 21px;
      }
      .book-appointment select.form-control {
      padding: 5.4px 10px;
      }
      .book-appointment p {
      font-size: 14px;
      }
      .book-appointment {
      padding: 32px 30px;
      }
      h1 {
      font-size: 29px;
      letter-spacing: 5px;
      }
      .copy p {
      font-size: 14.4px;
      }
      .copy.w3ls {
      margin: 1.6em 0em 0;
      }
      body {
      min-height: 565px;
      }
      }
      @media(max-width:800px){
      .bg-agile {
      width: 85%;
      }
      .same {
      padding: 0px 0px;
      }
      input[type=submit] {
      font-size: 0.9em;
      padding: 6px 18px;
      }
      }
      @media(max-width:768px){
      body {
      min-height: 894.5px;
      }
      h1 {
      margin: 4em 0 2em;
      }
      .copy.w3ls {
      margin: 4em 0em 0;
      }
      }
      @media(max-width:767px){
      h1 {
      margin: 1.2em 0;
      }
      .copy.w3ls {
      margin: 1.7em 0em 0;
      }
      .book-appointment select.form-control {
      padding: 5.4px 10px;
      }
      body {
      min-height: 565.7px;
      }
      }
      @media(max-width:736px){
      select.form-control {
      width: 98%;
      }
      .book-appointment{
      width:91%
      }
      }
      @media(max-width:667px){
      .gaps {
      padding-left: 1em;
      }
      .book-appointment p {
      font-size: 13px;
      }
      .book-appointment input[type="text"],input[type="password"], .book-appointment input[type="date"], .book-appointment input[type="time"], .book-appointment input[type="email"], textarea {
      margin: .3em 0em .8em;
      }
      .book-appointment select.form-control {
      margin: 5.2px 0px 11px;
      }
      .copy p {
      font-size: 14px;
      }
      h1 {
      margin: 1.4em 0;
      font-size: 26px;
      }
      body {
      min-height: 564.1px;
      }
      }
      @media(max-width:640px){
      .book-appointment h2 {
      font-size: 16px;
      }
      input[type=submit] {
      margin-top: 1em;
      }
      h1 {
      margin: 1.7em 0 1em;
      font-size: 24px;
      letter-spacing: 4px;
      }
      .copy.w3ls {
      margin: 1.4em 1.5em 0;
      }
      .copy p {
      line-height: 28px;
      }
      body {
      min-height: 559.5px;
      }
      }
      @media(max-width:600px){
      .bg-agile {
      width: 88%;
      }
      select.form-control {
      width: 99%;
      }
      .book-appointment{
      width: 91.5%;
      }
      }
      @media(max-width:568px){
      .copy p {
      word-spacing: 0px;
      }
      .copy.w3ls {
      margin: 1.2em 1.5em 0;
      }
      h1 {
      `	 margin: 1.7em 0 1.1em;
      }
      }
      @media(max-width:480px){
      .left-agileits-w3layouts {
      width: 100%;
      float: none;
      }
      .right-agileinfo {
      width: 100%;
      float: none;
      }
      .gaps {
      padding-left: 0;
      }
      .book-appointment {
      padding: 35px 40px;
      }
      .book-appointment input[type="text"],input[type="password"], .book-appointment input[type="date"], .book-appointment input[type="time"], .book-appointment input[type="email"], textarea {
      width: 93.5%;
      }
      h1 {
      margin: 1.6em 0 1.1em;
      font-size: 22px;
      letter-spacing: 3px;
      word-spacing: 5px;
      }
      .bg-agile {
      width: 83%;
      }
      .book-appointment h2 {
      font-size: 15px;
      margin-bottom: 1em;
      }
      .copy p {
      line-height: 27px;
      font-size: 13px;
      }
      body {
      min-height: 809.5px;
      }
      }
      @media(max-width:414px){
      h1 {
      margin: 2em 0 1.1em;
      font-size: 19px;
      letter-spacing: 2px;
      word-spacing: 3px;
      }
      .book-appointment h2 {
      font-size: 14px;
      margin-bottom: 1.5em;
      letter-spacing: 2.5px;
      }
      .book-appointment input[type="text"],input[type="password"], .book-appointment input[type="date"], .book-appointment input[type="time"], .book-appointment input[type="email"], textarea {
      width: 91.5%;
      }
      }
      @media(max-width:384px){
      h1 {
      margin: 1.5em 1em 1em;
      line-height: 33px;
      font-size: 19px;
      letter-spacing: 3px;
      }
      .book-appointment {
      padding: 35px 32px;
      }
      .book-appointment select.form-control {
      width: 100%;
      }
      .wickedpicker {
      width: 241px;
      }
      input[type=submit] {
      padding: 5px 14px;
      }
      body {
      min-height: 850px;
      }
      }
      @media(max-width:375px){
      .bg-agile {
      width: 86%;
      }
      .book-appointment input[type="text"],input[type="password"], .book-appointment input[type="date"], .book-appointment input[type="time"], .book-appointment input[type="email"], textarea {
      width: 91.8%;
      }
      }
      @media(max-width:320px){
      .bg-agile {
      width: 91%;
      }
      .book-appointment h2 {
      letter-spacing: 2px;
      }
      h1 {
      margin: 1.3em 1em .5em;
      line-height: 30px;
      font-size: 18px;
      letter-spacing: 2px;
      }
      .book-appointment {
      padding: 35px 25px;
      }
      .book-appointment input[type="text"],input[type="password"], .book-appointment input[type="date"], .book-appointment input[type="time"], .book-appointment input[type="email"], textarea {
      width: 91%;
      }
      body {
      min-height: 855px;
      }
      .copy.w3ls {
      margin: 1.1em 1.5em 0;
      }
      }
      button {
      border: none;
      }
      button,
      input[type="button"],
      input[type="reset"],
      input[type="submit"] {
      font-family: "Montserrat", sans-serif;
      font-size: 14px;	
      text-transform: uppercase;		
      color: #ffffff;
      background-image: none;
      height: 50px;
      background-color: #222;
      line-height: 50px;
      padding: 0 24px 0 32px;
      cursor: pointer;
      /*letter-spacing: 1px;*/
      white-space: nowrap;
      border: none;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      -ms-border-radius: 3px;
      -o-border-radius: 3px;
      border-radius: 3px;
      display: inline-block;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
      }
      button:hover,
      input[type="button"]:hover,
      input[type="reset"]:hover,
      input[type="submit"]:hover {
      background-color: #33aab9;
      border-color: #33aab9;
      }
   </style>
   <script src='https://andwecode.com/wp-content/uploads/2015/10/jquery.leanModal.min_.js'></script>
   <script src= "javascript/test.js"></script>
   <script>
      var check = document.getElementById('menu');
      check.setAttribute('style', 'margin:0 !important');
   </script>
   <script language="javascript">
      populateCountries("country", "state");
   </script>
</html>