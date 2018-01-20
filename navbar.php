<?php
?>


<div class="boxed">
        <div class="windows8">
            <div class="preload-inner">
                <div class="wBall" id="wBall_1">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_2">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_3">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_4">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_5">
                    <div class="wInnerBall"></div>
                </div>
            </div>
        </div>
    	<div class="header-inner-pages">
    		<div class="top">
    			<div class="container">
    				<div class="row">
    					<div class="col-md-12">
    						<div class="text-information">
    							<p>Welcome to Exploration and Analysis of Information Society</p>
    						</div>
                            <div class="right-bar">
        						<ul class="flat-information">
        							<li class="phone">
        								<a href="%2b61383766284.html" title="Phone number">+91 - 95714 49301</a>
        							</li>
        							<li class="email">
        								<a href="mailto:info@eaisociety.com" title="Email address"> info@eaisociety.com</a>
        							</li>
                                </ul>
                                <ul class="flat-socials">
        							<li class="youtube">
                                   Welcome! User <a href="#modal" id= "modal_trigger">Login</a> <a href="mailto:info@eaisociety.com" title="Email address"> Register</a>
                                    </li>
                                    
                                    <div id="modal" class="popupContainer" style="display:none;">
				
                                    <section class="popupBody">
                                   <div ><h3 >LOGIN<h3></div>
                                    <form action=" " method="POST">
                                        <div class="input-wrapper">
                                            <label for="email"><i class="fa fa-envelope fa-2x"></i></label><input type="email" name="email" placeholder="Email Address" spellcheck="false" required="" >
                                        </div>
                                        <div class="input-wrapper">
                                            <label for="password"><i class="fa fa-lock fa-2x"></i></label><input type="password" name="password" placeholder="Password" required="">
                                        </div>
                                        <div class="input-wrapper">
                                            <input type="submit" value="Sign In" class="flat-button bg-orange">
                                            
                                            
                                    </form>
                                </div>
                                <p style="text-align:right" ><a href="#">Forgot Password</a></p>
                                
                                
                                
                    
                                            
                                    </section>
                            </div>
        						
        						</ul>
                            </div>
    					</div>
    				</div>
    			</div>
    		</div>      
    	</div><!-- /.header-inner-pages -->
    	<!-- Header --> 
    	<header id="header" class="header clearfix"> 
        	<div class="container">
                <div class="header-wrap clearfix">
                    <div id="logo" class="logo" style= "margin-top:0.5em">
                        <a href="index.html" rel="home">
                            <img src="images/eailogo.png" alt="image">
                        </a>
                    </div><!-- /.logo -->            
                    <div class="nav-wrap">
                        <div class="btn-menu">
                            <span></span>
                        </div><!-- //mobile menu button -->
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu"> 
                                <li><a href ="index.php">Home</a></li>
                                <li><a href ="events.php">Events</a></li>
                                <li><a href="signup.php">Membership</a></li>
                                <li><a href="course.php">Courses</a> </li>                               
                                <li class="has-sub"><a href="courses-grid.html">About</a>
                                	<ul class="submenu"> 
                                        <li><a href="courses-grid.html">Eai Society</a></li>
                                        <li><a href="courses-grid-sidebar.html">Members</a></li> 
                                    </ul>
                                    </li> 
                                <li><a href="contact.php">Contact</a>
                                </li>
                            </ul><!-- /.menu -->
                        </nav><!-- /.mainnav -->    
                    </div><!-- /.nav-wrap -->
            </div>
        </header><!-- /.header -->
        
        
        
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://andwecode.com/wp-content/uploads/2015/10/jquery.leanModal.min_.js'></script>
<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase-database.js"></script>
<script src= "javascript/test.js"></script>
<script src="firebase/init.js" type="text/javascript"></script>
<script src="firebase/userAuth.js" type="text/javascript"></script>

<script>
user();
</script>
