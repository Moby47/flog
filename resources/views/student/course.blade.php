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

									<h3 class="w3_inner_tittle two">Choose Courses</h3>
<form id='courseform'>
	{{csrf_field()}}
								<!--6 start-->
							       <div class="col-md-6">
										   <div class="">
										        
  <!--/set-1-->
												
  <div class="wthree_general graph-form agile_info_shadow">
		

		   <div class="grid-1">
				   <div class="form-body ">
						   <div class="form-horizontal">

							   <div class="form-group">
								   <label for="selector1" class="col-sm-4 control-label">Select Course (1)</label>
								   <div class="col-sm-6"><select name="Course1" id="selector1" class="form-control1 selectpicker show-tick" data-live-search="true">
									@if($cos)

									@if($cos->course1)
									<option value='{{$cos->course1}}'>COSC {{$cos->course1}}</option>
									<option value="">(No course)</option>
									@else
									<option value="">Null</option>
									@endif

									@else
								<option value="">Eg. COSC 721</option>
									@endif
									   
									@if($cosc)
									@foreach($cosc as $c)
								   <option value='{{$c->cos}}'>COSC {{$c->cos}}</option>
									@endforeach
									@endif

								   </select></div>
							   </div>
							   

							   <div class="form-group">
									<label for="selector1" class="col-sm-4 control-label">Select Course (2)</label>
									<div class="col-sm-6"><select name="Course2" id="selector1" class="form-control1 selectpicker show-tick" data-live-search="true">
											@if($cos)
											@if($cos->course2)
											<option value='{{$cos->course2}}'>COSC {{$cos->course2}}</option>
											<option value="">(No course)</option>
											@else
															<option value="">Null</option>
											@endif
											@else
											<option value="">Eg. COSC 721</option>
											@endif	
										
											@if($cosc)
									@foreach($cosc as $c)
								   <option value='{{$c->cos}}'>COSC {{$c->cos}}</option>
									@endforeach
									@endif
									</select></div>
								</div>

								<div class="form-group">
										<label for="selector1" class="col-sm-4 control-label">Select Course (3)</label>
										<div class="col-sm-6"><select name="Course3" id="selector1" class="form-control1 selectpicker show-tick" data-live-search="true">
												@if($cos)
											@if($cos->course3)
											<option value='{{$cos->course3}}'>COSC {{$cos->course3}}</option>
											<option value="">(No course)</option>
											@else
															<option value="">Null</option>
											@endif
											@else
											<option value="">Eg. COSC 721</option>
											@endif	

											@if($cosc)
									@foreach($cosc as $c)
								   <option value='{{$c->cos}}'>COSC {{$c->cos}}</option>
									@endforeach
									@endif
										</select></div>
									</div>
									<div class="form-group">
											<label for="selector1" class="col-sm-4 control-label">Select Course (4)</label>
											<div class="col-sm-6"><select name="Course4" id="selector1" class="form-control1 selectpicker show-tick" data-live-search="true">
													@if($cos)
													@if($cos->course4)
													<option value='{{$cos->course4}}'>COSC {{$cos->course4}}</option>
													<option value="">(No course)</option>
													@else
															<option value="">Null</option>
													@endif
													@else
													<option value="">Eg. COSC 721</option>
													@endif	
												
													@if($cosc)
									@foreach($cosc as $c)
								   <option value='{{$c->cos}}'>COSC {{$c->cos}}</option>
									@endforeach
									@endif
											</select></div>
										</div>

										<div class="form-group">
												<label for="selector1" class="col-sm-4 control-label">Select Course (5)</label>
												<div class="col-sm-6"><select name="Course5" id="selector1" class="form-control1 selectpicker show-tick" data-live-search="true">
														@if($cos)
														@if($cos->course5)
														<option value='{{$cos->course5}}'>COSC {{$cos->course5}}</option>
														<option value="">(No course)</option>
														@else
															<option value="">Null</option>
														@endif
														@else
														<option value="">Eg. COSC 721</option>
														@endif	
													
														@if($cosc)
									@foreach($cosc as $c)
								   <option value='{{$c->cos}}'>COSC {{$c->cos}}</option>
									@endforeach
									@endif
												</select></div>
											</div>

											
											
							 
										</div>
				   </div>

		   </div>
	   </div>
   
	<!--//set-1-->

										</div>
									   </div>
									<!--6 start-->

										<!--6 start-->
										<div class="col-md-6">
												<div class="">
													 
	   <!--/set-2-->
													 
	   <div class="wthree_general graph-form agile_info_shadow">
			
	 
				<div class="grid-1">
						<div class="form-body ">
								<div class="form-horizontal">
	 
									<div class="form-group">
										<label for="selector1" class="col-sm-4 control-label">Select Course (6)</label>
										<div class="col-sm-6"><select name="Course6" id="selector1" class="form-control1 selectpicker show-tick" data-live-search="true">
												@if($cos)
												@if($cos->course6 != NULL)
												<option value='{{$cos->course6}}'>COSC {{$cos->course6}}</option>
												<option value="">(No course)</option>
												@else
															<option value="">Null</option>
												@endif
												@else
												<option value="">Eg. COSC 721</option>
												@endif	
											
												@if($cosc)
									@foreach($cosc as $c)
								   <option value='{{$c->cos}}'>COSC {{$c->cos}}</option>
									@endforeach
									@endif
											
										</select></div>
									</div>
									
	 
									<div class="form-group">
										 <label for="selector1" class="col-sm-4 control-label">Select Course (7)</label>
										 <div class="col-sm-6"><select name="Course7" id="selector1" class="form-control1 selectpicker show-tick" data-live-search="true">
												@if($cos)
												@if($cos->course7)
												<option value='{{$cos->course7}}'>COSC {{$cos->course7}}</option>
												<option value="">(No course)</option>
												@else
															<option value="">Null</option>
												@endif
												@else
												<option value="">Eg. COSC 721</option>
												@endif	
											
												@if($cosc)
												@foreach($cosc as $c)
											   <option value='{{$c->cos}}'>COSC {{$c->cos}}</option>
												@endforeach
												@endif

										 </select></div>
									 </div>
	 
									 <div class="form-group">
											 <label for="selector1" class="col-sm-4 control-label">Select Course (8)</label>
											 <div class="col-sm-6"><select name="Course8" id="selector1" class="form-control1 selectpicker show-tick" data-live-search="true">
													@if($cos)
													@if($cos->course8)
													<option value='{{$cos->course8}}'>COSC {{$cos->course8}}</option>
													<option value="">(No course)</option>
													@else
															<option value="">Null</option>
													@endif
													@else
													<option value="">Eg. COSC 721</option>
													@endif	
												
													@if($cosc)
									@foreach($cosc as $c)
								   <option value='{{$c->cos}}'>COSC {{$c->cos}}</option>
									@endforeach
									@endif
												
											 </select></div>
										 </div>
										 <div class="form-group">
												 <label for="selector1" class="col-sm-4 control-label">Select Course (9)</label>
												 <div class="col-sm-6"><select name="Course9" id="selector1" class="form-control1 selectpicker show-tick" data-live-search="true">
														@if($cos)
														@if($cos->course9)
														<option value='{{$cos->course9}}'>COSC {{$cos->course9}}</option>
														<option value="">(No course)</option>
														@else
															<option value="">Null</option>
														@endif
														@else
														<option value="">Eg. COSC 721</option>
														@endif	
													
														@if($cosc)
									@foreach($cosc as $c)
								   <option value='{{$c->cos}}'>COSC {{$c->cos}}</option>
									@endforeach
									@endif
													 
												 </select></div>
											 </div>
	 
											 <div class="form-group">
													 <label for="selector1" class="col-sm-4 control-label">Select Course (10)</label>
													 <div class="col-sm-6"><select name="Course10" id="selector1" class="form-control1 selectpicker show-tick" data-live-search="true">
															@if($cos)
															@if($cos->course10)
															<option value='{{$cos->course10}}'>COSC {{$cos->course10}}</option>
															<option value="">(No course)</option>
															@else
															<option value="">Null</option>
															@endif
															@else
															<option value="">Eg. COSC 721</option>
															@endif	
														
															@if($cosc)
															@foreach($cosc as $c)
														   <option value='{{$c->cos}}'>COSC {{$c->cos}}</option>
															@endforeach
															@endif

													 </select></div>
												 </div>
	 
								  
												</div>
						</div>
	 
				</div>
			</div>
		
		 <!--//set-2-->
	 
											 </div>
											</div>
										 <!--6 start-->

										
												
												<div class='text-center'>
														<button class='btn btn-success '>Update Courses</button>
</form>									</div>
											

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



