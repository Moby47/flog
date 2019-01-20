@extends('layouts.main')

@section('title','Manage Students')


@section('content')



<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		 
		  <div class="w3_agileits_top_nav">
			
			 <!-- /nav-->
			 @include('includes.menu')
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->
					<div class="inner_content_w3_agile_info">
					
						<!--redirect message-->
						@if(session('redirect2'))
						<div class='alert alert-info text-center'> {{session('redirect2')}}</div>
									@endif

									<!--quick access message-->
									@if(session('quickAss'))
									<div class='alert alert-success text-center text-uppercase'> {{session('quickAss')}}</div>
										@endif

						<!-- /agile_top_w3_post_sections-->
							<div class="agile_top_w3_post_sections">


								<!--6 start-->
							       <div class="col-md-6 agile_top_w3_post agile_info_shadow">
										   <div class="img_wthee_post">
										         <h3 class="w3_inner_tittle"></h3>
												
												
													<div class="stats-wrap">
													<div class="count_info"><h4 class="count">@if(empty($cos1))No Course @else COSC {{$cos1}} @endif</h4><span class="year">Total Files Uploaded</span></div>
															<div class="year-info"><p class="text-no">{{$cosa}} </p><span class="year"></span></div>
														<div class="clearfix"></div>
													</div>
													<div class="stats-wrap">
															<div class="count_info"><h4 class="count">@if(empty($cos2))No Course @else COSC {{$cos2}}@endif</h4><span class="year">Total Files Uploaded</span></div>
															<div class="year-info"><p class="text-no">{{$cosb}} </p><span class="year"></span></div>
														<div class="clearfix"></div>
													</div>
													<div class="stats-wrap">
															<div class="count_info"><h4 class="count">@if(empty($cos3))No Course @else COSC {{$cos3}}@endif</h4><span class="year">Total Files Uploaded</span></div>
															<div class="year-info"><p class="text-no">{{$cosc}} </p><span class="year"></span></div>
														<div class="clearfix"></div>
													</div>
													<div class="stats-wrap">
															<div class="count_info"><h4 class="count">@if(empty($cos4))No Course @else COSC {{$cos4}}@endif</h4><span class="year">Total Files Uploaded</span></div>
															<div class="year-info"><p class="text-no">{{$cosd}} </p><span class="year"></span></div>
														<div class="clearfix"></div>
													</div>
													<div class="stats-wrap">
														<div class="count_info"><h4 class="count">@if(empty($cos5))No Course @else COSC {{$cos5}}@endif</h4><span class="year">Total Files Uploaded</span></div>
														<div class="year-info"><p class="text-no">{{$cose}} </p><span class="year"></span></div>
													<div class="clearfix"></div>
												</div>
													

										</div>
									   </div>
									<!--6 start-->

									<!--6 start-->
									   <div class="col-md-6 agile_top_w3_post agile_info_shadow">
										<div class="img_wthee_post">
											  <h3 class="w3_inner_tittle"></h3>
											 
											 
												 <div class="stats-wrap">
														 <div class="count_info"><h4 class="count">@if(empty($cos6))No Course @else COSC {{$cos6}}@endif</h4><span class="year">Total Files Uploaded</span></div>
														 <div class="year-info"><p class="text-no">{{$cosf}} </p><span class="year"></span></div>
													 <div class="clearfix"></div>
												 </div>
												 <div class="stats-wrap">
														 <div class="count_info"><h4 class="count">@if(empty($cos7))No Course @else COSC {{$cos7}}@endif</h4><span class="year">Total Files Uploaded</span></div>
														 <div class="year-info"><p class="text-no">{{$cosg}} </p><span class="year"></span></div>
													 <div class="clearfix"></div>
												 </div>
												 <div class="stats-wrap">
														 <div class="count_info"><h4 class="count">@if(empty($cos8))No Course @else COSC {{$cos8}}@endif</h4><span class="year">Total Files Uploaded</span></div>
														 <div class="year-info"><p class="text-no">{{$cosh}} </p><span class="year"></span></div>
													 <div class="clearfix"></div>
												 </div>
												 <div class="stats-wrap">
														 <div class="count_info"><h4 class="count">@if(empty($cos9))No Course @else COSC {{$cos9}}@endif</h4><span class="year">Total Files Uploaded</span></div>
														 <div class="year-info"><p class="text-no">{{$cosi}} </p><span class="year"></span></div>
													 <div class="clearfix"></div>
												 </div>
												 <div class="stats-wrap">
														<div class="count_info"><h4 class="count">@if(empty($cos10))No Course @else COSC {{$cos10}}@endif</h4><span class="year">Total Files Uploaded</span></div>
														<div class="year-info"><p class="text-no">{{$cosj}} </p><span class="year"></span></div>
													<div class="clearfix"></div>
												</div>	 

									 </div>
									</div>
									<!--6 start-->


								       <div class="clearfix"></div>
							     </div>
								   
						<!-- //agile_top_w3_post_sections-->
						
						<!-- /chart_agile-->
					
					
											
						
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
	<!-- //inner_content-->
</div>
<!-- banner -->
<!--copy rights start here
<div class="copyrights">

		@include('includes.footer') 

</div>	
copy rights end here-->






@endsection







