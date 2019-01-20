@extends('layouts.main')

@section('title','Admin Dashboard')


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
							       <div class="col-md-4 agile_top_w3_post agile_info_shadow">
										   <div class="img_wthee_post">
										         <h3 class="w3_inner_tittle">Latest Report</h3>
												<div class="stats-wrap">
														<div class="count_info"><h4 class="count">Users</h4><span class="year">Total Active Users</span></div>
														<div class="year-info"><p class="text-no">{{$users}} </p><span class="year"></span></div>
													<div class="clearfix"></div>
												</div>
												<div class="stats-wrap">
														<div class="count_info"><h4 class="count">Lecturers</h4><span class="year">Total Lecturers</span></div>
														<div class="year-info"><p class="text-no">{{$lec}} </p><span class="year"></span></div>
														<div class="clearfix"></div>
													</div>
													<div class="stats-wrap">
															<div class="count_info"><h4 class="count">Students</h4><span class="year">Total Students</span></div>
															<div class="year-info"><p class="text-no">{{$stu}}</p><span class="year"></span></div>
														<div class="clearfix"></div>
													</div>
													<div class="stats-wrap">
															<div class="count_info"><h4 class="count">Files</h4><span class="year">Total Files</span></div>
															<div class="year-info"><p class="text-no">{{$files}} </p><span class="year"></span></div>
														<div class="clearfix"></div>
													</div>
													</div>

									   </div>
									   <div class="col-md-8 fallowers_agile agile_info_shadow">
											<h3 class="w3_inner_tittle two">File Log</h3>
														<div class="work-progres">


																		@if(count($log)>0)
																		<div class='table-responsive'>
																		   <table id="table">
																		   <thead>
																			 <tr>
																					<th>Staff</th>
																					<th>Title</th>
																					<th>File</th> 
																					<th>Course</th>   
																					<th>Level</th>   					
																					<th>Time</th>
																					<th>Expires</th>
																			 </tr>
																		   </thead>
																		   <tbody>
																				@foreach($log as $l)
																				<tr>
																				<td>{{$l->fname}}</td>
																				  <td>{{$l->title}}</td>
																				  <td>{{$l->file}}</td>  
																				  <td>COSC {{$l->course}}</td> 
																				  <td>{{$l->level}}</td>                               
																				  <td>{{$l->created_at->diffforhumans()}}</td> 
																			<td class='text-danger'>{{\carbon\carbon::parse($l->expire)->diffforhumans()}}</td>  
																			  </tr>
																		@endforeach
																		   </tbody>
																		 </table>
																		</div>
																		 <h5 class='text-center'>{{$log->links()}}</h5>
																		 @else
																	   
																				 <div class="alert alert-info">
																					<h5 class="text-center">File Archive Is Empty </h5>
																					</div>
																				 @endif  
																	
															   
														
												</div>											
										</div>
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
<!--copy rights start here-->
<div class="copyrights">

		@include('includes.footer')

</div>	
<!--copy rights end here-->




@endsection