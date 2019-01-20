@extends('layouts.main')

@section('title','Manage Lecturers')


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
					
						<!-- /agile_top_w3_post_sections-->
							<div class="agile_top_w3_post_sections">

									   <div class="col-md-12  fallowers_agile agile_info_shadow">
											<h3 class="w3_inner_tittle two">File Log</h3>
														<div class="work-progres">

																@if(count($result)>0)
																
																		   <table id="table">
																		   <thead>
																			 <tr>
																					<th>Title</th>
																					<th>Uploaded By</th>
																					<th>Level</th> 
																					<th>Course</th>     					
																					<th>Time Uploaded</th>
																					<th>Expires</th>
																					<th>Size</th>
																					<th>Download</th>
																			 </tr>
																		   </thead>
																		   <tbody>
													
																				@foreach($result as $res)
																				<tr>
																				<td>{{$res->title}}</td>
																				<td>{{$res->fname}}</td>
																				<td>{{$res->level}}</td>  
																				<td>COSC {{$res->course}}</td> 
																				<td>{{$res->created_at->diffforhumans()}}</td> 
																				<td class='text-danger'>{{\carbon\carbon::parse($res->expire)->diffforhumans()}}</td>
																			<td>{{$res->size}}</td>
																			  
														   <td><a href='/direct-download/{{$res->file}}' class='btn btn-success dd'>
																					<span class='fa fa-download' ></span></a></td>
																				   
																			</tr>
																	  @endforeach
																			
																		   </tbody>
																		 </table>
																   
															   <h5 class='text-center'>{{$result->links()}}</h5>
															   @else
															 
																	   <div class="alert alert-info">
																		  <h5 class="text-center">File Archive Is Empty <a href='/course' class="underline">Click Here To Select Your Courses</a></h5>
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
<!--copy rights start here
<div class="copyrights">

		@include('includes.footer') 

</div>	
copy rights end here-->





@endsection







