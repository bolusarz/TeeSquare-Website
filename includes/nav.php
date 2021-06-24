<?php 
	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
		$url = "https://";   
	else  
		$url = "http://";    
	$url.= $_SERVER['HTTP_HOST'];   
	$url.= $_SERVER['REQUEST_URI'];      
	$page = $_SERVER['REQUEST_URI'];
	
	
?>
<!-- Header -->
<header class="header">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <!-- Contact -->
                    <ul class="content">
                        <li><i class="fa fa-phone"></i>+234 816 832 9220</li>
                        <li><a href="mailto:teesquare@gmail.com"><i class="fa fa-envelope-o"></i>teesquare@gmail.com</a></li>
                        <li><i class="fa fa-clock-o"></i>Opening: 10:00am - 5:00pm</li>
                    </ul>
                    <!-- End Contact -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Social -->
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <!-- End Social -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="logo">
                        <a href="index" class="header-logo">TEESQUARE</a>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-lg-9 col-md-9 col-12">
                    <!-- Header Widget -->
                    <div class="header-widget">
                        <div class="single-widget">
                            <i class="fa fa-phone"></i>
                            <h4>Call Now<span>+234 816 832 9220</span></h4>
                        </div>
                        <div class="single-widget">
                            <i class="fa fa-envelope-o"></i>
                            <h4>Send Message<a href="mailto:teesquare@gmail.com"><span>teesquare@gmail.com</span></a></h4>
                        </div>
                        <div class="single-widget">
                            <i class="fa fa-map-marker"></i>
                            <h4>Head Office<span>20 UNILAG road, abule oja, yaba lagos</span></h4>
                        </div>
                    </div>
                    <!--/ End Header Widget -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
    <!-- Header Menu -->
    <div class="header-menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-collapse">
                            <!-- Main Menu -->
                            <ul id="nav" class="nav menu navbar-nav">
                                <li class="active"><a href="https://localhost/TeeSquare/index">Home</i></a></li>
                                <li><a href="https://localhost/TeeSquare/about">About Us</a></li>
                                <li><a href="#">Programmes<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="https://localhost/TeeSquare/programmes/jamb">JAMB UTME</a></li>
                                        <li><a href="https://localhost/TeeSquare/programmes/jupeb">TEC JUPEB</a></li>
                                        <li><a href="https://localhost/TeeSquare/programmes/waec">WAEC</a></li>
                                        <li><a href="https://localhost/TeeSquare/programmes/sat">SAT</a></li>
                                        <li><a href="https://localhost/TeeSquare/programmes/ielts">IELTS</a></li>
                                        <li><a href="https://localhost/TeeSquare/programmes/toefl">TOEFL</a></li>
                                        <li><a href="https://localhost/TeeSquare/programmes/gre">GRE</a></li>
                                        <li><a href="https://localhost/TeeSquare/programmes/gmat">GMAT</a></li>
                                    </ul>
                                </li>
                                <li><a href="https://localhost/TeeSquare/contact">Contact</a></li>
                            </ul>
                            <!-- End Main Menu -->
                            <!-- button -->
                            <div class="button">
                                <a href="https://localhost/TeeSquare/contact" class="btn"><i class="fa fa-pencil"></i>Register now</a>
                            </div>
                            <!--/ End Button -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Menu -->
</header>
<!-- End Header -->