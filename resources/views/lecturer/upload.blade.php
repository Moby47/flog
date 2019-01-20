@extends('layouts.main')

@section('title','Upload Class Material')


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
					
				  <!--/set-2-->
												
				  <div class="wthree_general graph-form agile_info_shadow ">
						<h3 class="w3_inner_tittle two">Upload File </h3>

						   <div class="grid-1 ">
								   <div class="form-body">
								   <form class="form-horizontal" id="form" method="POST" action='{{route('upload')}}' enctype="multipart/form-data">
											{{csrf_field()}}
											   <div class="form-group">
												   <label for="focusedinput" class="col-sm-2 control-label">Title</label>
												   <div class="col-sm-8">
													   <input type="text" name='Title' class="form-control1" id="focusedinput" placeholder="Eg. A file on Java basics">
												   </div>
												   <!--<div class="col-sm-2">
													   <p class="help-block">Your help text!</p>
												   </div>-->
											   </div>

													<div class="form-group">
											<label for="txtarea1" class="col-sm-2 control-label">Select File</label>
												<div class="col-sm-8">
														<input type="file" name="File" id="exampleInputFile" />
														
													</div>
													<div class="col-sm-6">
														<p class="help-block "><i class='text-danger'>Max file size (19MB)</i></p>
														<p class="help-block "><i class='text-success'>Allowed formats (exe, rar, jpeg, png, jif, txt, mp4, avi, pdf, ppt, docx, doc)</i></p>
													</div>
														</div>

											   
											   <div class="form-group">
												   <label for="selector1" class="col-sm-2 control-label">Select Course</label>
												   <div class="col-sm-8">
													   <select name="Course" id="selector1" class="form-control1 selectpicker show-tick" data-live-search="true">
															<option value=''>Eg. COSC 201</option>
															@if($cosc)
															@foreach($cosc as $c)
														   <option value='{{$c->cos}}'>COSC {{$c->cos}}</option>
															@endforeach
															@endif
												   </select>
												</div>
											   </div>

											   <div class="form-group">
												<label for="selector1" class="col-sm-2 control-label">Select Level</label>
												<div class="col-sm-8">
													<select name="Level" id="selector1" class="form-control1 selectpicker show-tick" data-live-search="true">
															<option value=''>Eg. 300L</option>
													<option value='100L'>100L</option>
													<option value='200L'>200L</option>
													<option value='300L'>300L</option>
													<option value='400L'>400L</option>
													<option value='700L'>700L</option>
													<option value='800L'>800L</option>
												</select></div>
											</div>

											   
											   <div class="form-group">
												   <label for="txtarea1" class="col-sm-2 control-label">Description</label>
												   <div class="col-sm-8">
										<textarea name="Description" id="txtarea1" cols="50" rows="6" class="form-control1" placeholder='brief description of the class material to be uploaded'></textarea></div>
											   </div>
											   
											   <div class="form-group">
												<label for="selector1" class="col-sm-2 control-label">Set File Life-Time</label>
												<div class="col-sm-8">
													<select name="Life_Time" id="selector1" class="form-control1 selectpicker show-tick" data-live-search="true">
															<option value=''></option>
													<option value='0'>30 Mins</option>
													<option value='1'>1 Hr</option>
													<option value='2'>1 Day</option>
													<option value='3'>3 Days</option>
													<option value='4'>1 Wk</option>
													<option value='5'>1 Month</option>
													<option value='6'>4 Months</option>
													<option value='7'>1 Yr</option>
													<option value='47'>1 Century</option>
												</select></div>
											</div>

											   <div class="form-group">
													<label for="selector1" class="col-sm-2 control-label"></label>
													<div class="col-sm-8">
															<button class='btn btn-success'>Upload</button>
														</div>
												</div>

										   </form>
								   </div>

						   </div>
					   </div>
				   
					<!--//set-2-->
						
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