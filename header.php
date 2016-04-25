<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hospital & Doctor Info</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li <?php if($active == 'home') {echo 'class="active"';} ?>><a href="index.php">Home</a></li>
                        <li <?php if($active == 'about us') {echo 'class="active"';} ?>><a href="about-us.php">About Us</a></li>
                        <li <?php if($active == 'hospitals') {echo 'class="active"';} ?> class="dropdown" >
                            <a  href="#" class="dropdown-toggle" data-toggle="dropdown">Hospitals <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="hospital.php">Dhaka</a></li>
                                <li><a href="hospital.php">Rajshahi</a></li>
                                <li><a href="hospital.php">Chiittagong</a></li>
                                <li><a href="hospital.php">Khulna</a></li>
								<li><a href="hospital.php">Sylhet</a></li>
								<li><a href="hospital.php">Rangpur</a></li>
								<li><a href="hospital.php">Barisal</a></li>
								<li><a href="hospital.php">	Mymensingh</a></li>
                            </ul>
                        </li>
						<li <?php if($active == 'doctors') {echo 'class="active"';} ?> class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Doctors <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="doctor.php">Dhaka</a></li>
                                <li><a href="doctor.php">Rajshahi</a></li>
                                <li><a href="doctor.php">Chiittagong</a></li>
                                <li><a href="doctor.php">Khulna</a></li>
								<li><a href="doctor.php">Sylhet</a></li>
								<li><a href="doctor.php">Rangpur</a></li>
								<li><a href="doctor.php">Barisal</a></li>
								<li><a href="doctor.php">Mymensingh</a></li>
                            </ul>
                        </li>
                        <li <?php if($active == 'contact us') {echo 'class="active"';} ?>><a href="contact-us.php">Contact</a></li>  
						<li <?php if($active == 'login') {echo 'class="active"';} ?>><a href="login.php">Login</a></li> 
						<li <?php if($active == 'sign up') {echo 'class="active"';} ?>><a href="sign-up.php">Sign Up</a></li> 							
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
