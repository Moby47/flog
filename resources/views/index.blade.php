
<!DOCTYPE html>
<html lang="">

<head>
	<title>FLog - Download Class Materials</title>
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

/*---shades over bg----*/
.shade{
	background-color:rgba(33, 37, 41, 0.42);
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
	-moz-background-size: cover;
	min-height: 650px;
}
@media screen and (max-width: 640px) {
  .shade {
    min-height: 400px;
} 
}
@media screen and (max-width: 320px) {
	.shade {
    min-height: 370px;
} 	
}
@media screen and (max-width: 736px) {
	.shade {
    min-height: 450px;
}
}
@media screen and (max-width: 991px) {
	.shade {
    min-height: 490px;
}
}
@media screen and (max-width: 1024px) {

.shade {
    min-height: 510px;
}
}
@media screen and (max-width: 1080px) {
 .shade {
    min-height: 550px;
}
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
	<!-- banner -->
	<section class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="banner-top banner-top1">
						<div class='shade'><!--shade-->
						<div class="container">
							<div class="banner-info info2">
								<h3>Center For Studies</h3>
								<p>Babcock University Computer Science Department Lecture Files Archive.</p>
							</div>
						</div>
						</div><!--shade-->
					</div>
				</li>
				<li>
					<div class="banner-top banner-top2">
							<div class='shade'><!--shade-->
						<div class="container">
							<div class="banner-info bg3 info2">
								<h3>Providing Lecture Files</h3>
								<p>Class Materials Right In Your Pocket.</p>
							</div>
						</div>
					</div><!--shade-->
					</div>
				</li>
				<li>
					<div class="banner-top banner-top3">
							<div class='shade'><!--shade-->
						<div class="container">
							<div class="banner-info bg3">
								<h3>Creating Your Future</h3>
								<p>Knowledge, Truth and Service.</p>
							</div>
						</div>
					</div><!--shade-->
					</div>
				</li>
			</ul>
		</div>
		</section>
		<!-- //banner -->

		@if(Auth()->check())

		@if(Auth::user()->identity == 1 || Auth::user()->identity == 0)
		<!-- courses  STAFF AUTH show mine-->
<section class="wthree-row w3-about">
		<div class="container">
			<h3 class="heading-agileinfo">Class Materials <span>Recently Uploaded Files</span></h3>
				<div class="row categories-top mt-md-5 pt-4">
					<div class="col-md-4 categories-left1">
					</div>
					<div class="col-md-8 categories-left">
						<div class="row">
							<div class="col-md-6 col-sm-6 categories_sub cats">
								@if(count($uploads1)>0)

								@foreach($uploads1 as $up1)
								<div class="categories_sub1">
								<h3 class="mt-3">{{$up1->title}}</h3>
										<p class="mt-3 mb-3"><i>{{$up1->level}}</i></p>
										@if(Auth::user()->identity == 0)
										<p class="mt-3 mb-3">By {{$up1->fname}}</p>
										@else
										<p class="mt-3 mb-3">{{$up1->description}}</p>
										@endif
									</div>
								@endforeach
								@else

								<div class="categories_sub1">
										<h3 class="mt-3"><!--No file uploaded--> </h3>
										@if(Auth::user()->identity == 1)
										<p class="mt-3 mb-3"><a href='/file-upload'>Upload a file now</a></p>
										@endif
										<p class="mt-3 mb-3"><i></i></p>
									</div>

								@endif
	
							</div>

							<div class="col-md-6 col-sm-6 categories_sub cats1">
									@if(count($uploads2)>0)

									@foreach($uploads2 as $up2)
									<div class="categories_sub1">
									<h3 class="mt-3">{{$up2->title}}</h3>
									<p class="mt-3 mb-3"><i>{{$up2->level}}</i></p>
									@if(Auth::user()->identity == 0)
									<p class="mt-3 mb-3">By {{$up2->fname}}</p>
									@else
									<p class="mt-3 mb-3">{{$up2->description}}</p>
									@endif
										</div>
									@endforeach
									@else
							<div class="categories_sub1">
										<h3 class="mt-3"><!--No file uploaded--> </h3>
										@if(Auth::user()->identity == 1)
										<p class="mt-3 mb-3"><a href='/file-upload'>Upload a file now</a></p>
										@endif
										<p class="mt-3 mb-3"><i></i></p>
									</div>

									@endif

							</div>
						</div>
					</div>
				</div>
			</div>
        </section>
<!-- //courses -->
		
			@else
<!-- courses  STUDENT AUTH show mine-->
<section class="wthree-row w3-about">
		<div class="container">
				<h3 class="heading-agileinfo">Class Materials <span>Recently Uploaded Files</span></h3>
					<div class="row categories-top mt-md-5 pt-4">
						<div class="col-md-4 categories-left1">
						</div>
						<div class="col-md-8 categories-left">
							<div class="row">
								<div class="col-md-6 col-sm-6 categories_sub cats">
									@if(count($uploads1)>0)
	
									@foreach($uploads1 as $up1)
								<a href='/direct-download/{{$up1->file}}'>
										<div class="categories_sub1">
									<h3 class="mt-3 underline">{{$up1->title}}</h3>
											<p class="mt-3 mb-3"><i>{{$up1->level}}</i></p>
											@if(Auth::user()->identity == 0)
											<p class="mt-3 mb-3">By {{$up1->fname}}</p>
											@else
											<p class="mt-3 mb-3">{{$up1->description}}</p>
											@endif
										</div>
									</a>
									@endforeach
									@else
	
									<div class="categories_sub1">
											<h3 class="mt-3"><!--No file uploaded--> </h3>
											@if(Auth::user()->identity == 1)
											<p class="mt-3 mb-3"><a href='/file-upload'>Upload a file now</a></p>
											@endif
											<p class="mt-3 mb-3"><i></i></p>
										</div>
	
									@endif
		
								</div>
	
								<div class="col-md-6 col-sm-6 categories_sub cats1">
										@if(count($uploads2)>0)
	
										@foreach($uploads2 as $up2)
										<a href='/direct-download/{{$up2->file}}'>
										<div class="categories_sub1">
										<h3 class="mt-3 underline">{{$up2->title}}</h3>
										<p class="mt-3 mb-3"><i>{{$up2->level}}</i></p>
										@if(Auth::user()->identity == 0)
										<p class="mt-3 mb-3">By {{$up2->fname}}</p>
										@else
										<p class="mt-3 mb-3">{{$up2->description}}</p>
										@endif
											</div>
										</a>
										@endforeach
										@else
								<div class="categories_sub1">
											<h3 class="mt-3"><!--No file uploaded--> </h3>
											@if(Auth::user()->identity == 1)
											<p class="mt-3 mb-3"><a href='/file-upload'>Upload a file now</a></p>
											@endif
											<p class="mt-3 mb-3"><i></i></p>
										</div>
	
										@endif
	
								</div>
							</div>
						</div>
					</div>
				</div>
        </section>
<!-- //courses -->
@endif



		@else
	<!-- courses NO AUTH -->
	<!-- if ip, show rec for stu else, ####PLAN CANCELED
		static for others-->
		<section class="wthree-row w3-about">
			<div class="container">
					<h3 class="heading-agileinfo">Class Materials <span>Recently Uploaded Files</span></h3>
						<div class="row categories-top mt-md-5 pt-4">
							<div class="col-md-4 categories-left1">
							</div>
							<div class="col-md-8 categories-left">
								<div class="row">
									<div class="col-md-6 col-sm-6 categories_sub cats">
										@if(count($uploads1)>0)
		
										@foreach($uploads1 as $up1)
									
											<div class="categories_sub1">
										<h3 class="mt-3 ">{{$up1->title}}</h3>
												<p class="mt-3 mb-3"><i>{{$up1->level}}</i></p>
											
												<p class="mt-3 mb-3">By {{$up1->fname}}</p>
												
											</div>
									
										@endforeach
										@else
		
										<div class="categories_sub1">
												<h3 class="mt-3"><!--No file uploaded--> </h3>

												<p class="mt-3 mb-3"><a href='/download'>Download Class Materials</a></p>
												<p class="mt-3 mb-3"><a href='/file-upload'>Upload Class Materials</a></p>
												
												<p class="mt-3 mb-3"><i></i></p>
											</div>
		
										@endif
			
									</div>
		
									<div class="col-md-6 col-sm-6 categories_sub cats1">
											@if(count($uploads2)>0)
		
											@foreach($uploads2 as $up2)
										
											<div class="categories_sub1">
											<h3 class="mt-3 ">{{$up2->title}}</h3>
											<p class="mt-3 mb-3"><i>{{$up2->level}}</i></p>
											
											<p class="mt-3 mb-3">By {{$up1->fname}}</p>
											
												</div>
										
											@endforeach
											@else
									<div class="categories_sub1">
												<h3 class="mt-3"><!--No file uploaded--> </h3>
											
												<p class="mt-3 mb-3"><a href='/download'>Download Class Materials</a></p>
												<p class="mt-3 mb-3"><a href='/file-upload'>Upload Class Materials</a></p>
												
												
												<p class="mt-3 mb-3"><i></i></p>
											</div>
		
											@endif
		
									</div>
								</div>
							</div>
						</div>
					</div>
			</section>
<!-- //courses -->
@endif

	<!-- prepare -->
	<div class="prepare_wthree py-5">
		<div class="container py-md-4 mt-md-3">
			<div class="row prepare_top">
				<div class="col-lg-12 prepare_top_right">
						@if(count($news)>0)

						@foreach($news as $n)
						<h5 class="mb-3 text-center text-uppercase">{{$n->title}}</h5>
						<p class="mt-3 mb-3 text-center">{{$n->news}}</p>
						@endforeach
						@else
						<h5 class="mb-3 text-center text-uppercase">Breaking News</h5>
						<p class="mt-3 mb-3 text-center">News Will be posted here shortly: Stay tuned</p>
						@endif

				</div>
				<!--<div class="col-lg-5 prepare_top_left">
					jk
				</div>-->
				
			</div>
		</div>
	</div>
	<!-- //prepare -->
	

<!-- Clients -->
<div class="clients bg-white py-5">
		<div class="container py-md-4 mt-md-3">
	
		<!--<h3 class="heading-agileinfo"> <span></span></h3>-->
		
			
			<section class="slider">
				<div class="container">
					<h3 class="tittle-w3ls text-center mb-3 ">LET THE NUMBERS SPEAK</h3>
					<div class="row inner_w3l_agile_grids-1 pt-4 mt-md-4">
					<div class="col-md-3 col-sm-6 w3layouts_stats_left w3_counter_grid">
					<p class="counter">{{$stu}}</p>
						<h3 class=''>STUDENT(S)</h3>
					</div>
					<div class="col-md-3 col-sm-6 w3layouts_stats_left w3_counter_grid1">
						<p class="counter">{{$staff}}</p>
						<h3 class=''>LECTURER(S)</h3>
					</div>
					<div class="col-md-3 col-sm-6 w3layouts_stats_left w3_counter_grid2">
						<p class="counter">{{$files}}</p>
						<h3 class=''>FILE(S)</h3>
					</div>
					<div class="col-md-3 col-sm-6 w3layouts_stats_left w3_counter_grid2">
					<p class="counter">{{$dd}}</p>
						<h3 class=''>DOWNLOAD(S)</h3>
					</div>
				</div>
		   </div>	
			</section>
		</div>
</div>
<!-- //Clients -->

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
<!--banner-slider-->
<script src="js/JiSlider.js"></script>
<script> 
	$(window).load(function () {
		$('#JiSlider').JiSlider({
			color: '#fff',
			start: 1,
			reverse: false
		}).addClass('ff')
	})
</script>
<!-- //banner-slider -->


<!-- FlexSlider-JavaScript -->
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
	
			$(window).load(function(){
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
					$('body').removeClass('loading');
				}
		});
	});
</script>

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