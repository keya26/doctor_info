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
				<a class="navbar-brand" href="{!! URL::route('home') !!}">{!! Html::image('images/logo.png','logo') !!}</a>
			</div>
			
			<div class="collapse navbar-collapse navbar-right">
				<ul class="nav navbar-nav">
					<li <?php if($active == 'home') {echo 'class="active"';} ?>><a href="{!! URL::route('home') !!}">Home</a></li>
					
					<li <?php if($active == 'about_us') {echo 'class="active"';} ?>><a href="{!! URL::route('about_us') !!}">About Us</a></li>
					
					<li <?php if($active == 'hospital') {echo 'class="active"';} ?> class="dropdown" >
						<a  href="#" class="dropdown-toggle" data-toggle="dropdown">Hospitals <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="{!! URL::route('hospital') !!}">Dhaka</a></li>
							<li><a href="{!! URL::route('hospital') !!}">Rajshahi</a></li>
							<li><a href="{!! URL::route('hospital') !!}">Chiittagong</a></li>
							<li><a href="{!! URL::route('hospital') !!}">Khulna</a></li>
							<li><a href="{!! URL::route('hospital') !!}">Sylhet</a></li>
							<li><a href="{!! URL::route('hospital') !!}">Rangpur</a></li>
							<li><a href="{!! URL::route('hospital') !!}">Barisal</a></li>
							<li><a href="{!! URL::route('hospital') !!}">Mymensingh</a></li>
						</ul>
					</li>
					
					<li <?php if($active == 'doctor') {echo 'class="active"';} ?> class="dropdown" >
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Doctors <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="{!! URL::route('doctor') !!}">Dhaka</a></li>
							<li><a href="{!! URL::route('doctor') !!}">Rajshahi</a></li>
							<li><a href="{!! URL::route('doctor') !!}">Chiittagong</a></li>
							<li><a href="{!! URL::route('doctor') !!}">Khulna</a></li>
							<li><a href="{!! URL::route('doctor') !!}">Sylhet</a></li>
							<li><a href="{!! URL::route('doctor') !!}">Rangpur</a></li>
							<li><a href="{!! URL::route('doctor') !!}">Barisal</a></li>
							<li><a href="{!! URL::route('doctor') !!}">Mymensingh</a></li>
						</ul>
					</li>
					
					<li <?php if($active == 'contact_us') {echo 'class="active"';} ?>><a href="{!! URL::route('contact_us') !!}">Contact Us</a></li>
					
					<li <?php if($active == 'login') {echo 'class="active"';} ?>><a href="{!! URL::route('login') !!}">Login</a></li> 
					
					<li <?php if($active == 'sign_up') {echo 'class="active"';} ?>><a href="{!! URL::route('sign_up') !!}">Sign Up</a></li> 							
				</ul>
			</div>
		</div><!--/.container-->
	</nav><!--/nav-->
	
</header><!--/header-->