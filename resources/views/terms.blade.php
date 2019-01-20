
<!DOCTYPE html>
<html lang="">

<head>
	<title>FLog - Terms and Condition</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta charset="utf-8" />
	<!-- //for-mobile-apps -->
	 <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<!--banner slider  -->
	<link href="css/JiSlider.css" rel="stylesheet">
	<!-- //banner-slider -->
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<style>
.w3layouts-header{
    background-color: #004282 !important;
    background:  #004282 !important;
  }

.navbar-light .navbar-toggler{
	background-color: #004282 !important;
	background:  #004282 !important;
	border-color: white !important;
}

.heading-agileinfo{
color:#b98d3b !important;
}

.prepare_wthree h5{
	color:#b98d3b !important;
}

h3.tittle-w3ls{
	color:#b98d3b !important;
}

.copyright-w3layouts{
	background-color: #004282 !important;
    background:  #004282 !important;
	
}

.w3layouts_stats_left p{
	color:#004282 !important;
}

.w3layouts_stats_left h3{
	color:#b98d3b !important;	
}

.dropdown-menu{
	background-color: #b98d3b !important;
}
.navbar-light .navbar-nav .nav-link{
	color:white !important;
}
a.dropdown-item:hover{
	color:#004282 !important;
}



.underline{
	text-decoration: underline;
	text-decoration-color: #b98d3b;
}
		</style>

</head>

<body>
	<!-- header -->
	<section class="w3layouts-header py-2">
		<div class="container">
			  <!-- header -->
        <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                    <h1>
                        <a class="navbar-brand" href="/">
                          F-Log   
                        </a>
                    </h1>
                    <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto text-center">
                            <li class="nav-item active  mr-3">
                                <a class="nav-link" href="/">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
						   
							@if(Auth()->check())
							<li class="nav-item dropdown mr-3">
									<a class="nav-link " href="/home" id="navbarDropdown" role="button"  aria-haspopup="true"
										aria-expanded="false">
										Dashboard
									</a>
									
								</li>
								<li class="nav-item dropdown mr-3">
										
										<a href="{{ route('logout') }}" class="nav-link "
										onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
												
										Logout
									</a>
				
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
										
									</li>
							@else
							<li class="nav-item dropdown mr-3">
									<a class="nav-link " href="/quick-login" id="navbarDropdown" role="button"  aria-haspopup="true"
										aria-expanded="false">
										Instant-Access
									</a>
									
								</li>
							<li class="nav-item dropdown mr-3">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
										aria-expanded="false">
										Account
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="/login">Login</a>
										 <a class="dropdown-item" href="/register">Register</a>
									</div>
								</li>
								
							@endif
                            
                           
                        </ul>
                    </div>
                </nav>
        </header>
        <!-- //header -->
		</div>
	</section>
	<!-- //header -->
	

		
		
			
	<!-- prepare -->
	<div class="prepare_wthree py-5">
		<div class="container py-md-4 mt-md-3">
			<div class="row prepare_top">
				<div class="col-lg-12 prepare_top_right">
						
                        <h5 class="mb-3 text-center text-uppercase">Terms and Condition</h5>
                        <ul>
						<li class="mt-3 mb-3">Donec sagittis interdum tellus sed bibendum. Aen ean fringilla
                             ut lacus eu vehicula. Curabitur non nibh quis nisi vestibulum aliquet non sed
                              dolor. Ut est risus, consectetur sit amet pretium in, cursus in dui. Donec ac 
                              rhoncus libero.</li>
                              <li class="mt-3 mb-3">Donec sagittis interdum tellus sed bibendum. Aen ean fringilla
                                    ut lacus eu vehicula. Curabitur non nibh quis nisi vestibulum aliquet non sed
                                     dolor. Ut est risus, consectetur sit amet pretium in, cursus in dui. Donec ac 
                                     rhoncus libero.</li>
                                     <li class="mt-3 mb-3">Donec sagittis interdum tellus sed bibendum. Aen ean fringilla
                                            ut lacus eu vehicula. Curabitur non nibh quis nisi vestibulum aliquet non sed
                                             dolor. Ut est risus, consectetur sit amet pretium in, cursus in dui. Donec ac 
                                             rhoncus libero.</li>
                                             <li class="mt-3 mb-3">Donec sagittis interdum tellus sed bibendum. Aen ean fringilla
                                                    ut lacus eu vehicula. Curabitur non nibh quis nisi vestibulum aliquet non sed
                                                     dolor. Ut est risus, consectetur sit amet pretium in, cursus in dui. Donec ac 
                                                     rhoncus libero.</li>
                                                     <li class="mt-3 mb-3">Donec sagittis interdum tellus sed bibendum. Aen ean fringilla
                                                            ut lacus eu vehicula. Curabitur non nibh quis nisi vestibulum aliquet non sed
                                                             dolor. Ut est risus, consectetur sit amet pretium in, cursus in dui. Donec ac 
                                                             rhoncus libero.</li<li class="mt-3 mb-3">Donec sagittis interdum tellus sed bibendum. Aen ean fringilla
                                                                    ut lacus eu vehicula. Curabitur non nibh quis nisi vestibulum aliquet non sed
                                                                     dolor. Ut est risus, consectetur sit amet pretium in, cursus in dui. Donec ac 
                                                                     rhoncus libero.</li>
                        </ul>
					

				</div>
				<!--<div class="col-lg-5 prepare_top_left">
					jk
				</div>-->
				
			</div>
		</div>
	</div>
	<!-- //prepare -->
	


<!-- copyright -->
	<section class="copyright-w3layouts py-xl-4 py-3">
		<div class="container">
			<p>© 2018 F-Log . All Rights Reserved | by Henry Onyemaobi
			</p>
		
		</div>
	</section>
	<!-- //copyright -->
	
</body>

</html>

<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js-->

<!-- //banner-slider -->


<!-- stats -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- //FlexSlider-JavaScript -->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
 <script src="js/bootstrap.js"></script>


















@extends('layouts.main')

