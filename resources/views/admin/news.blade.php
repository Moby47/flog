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


								<!--6 start-->
							       <div class="col-md-4  agile_top_w3_post agile_info_shadow">
										   
			  <h3 class="black w3_inner_tittle two">Site News</h3>
												
              <div class="form-body">
					<form class="form-horizontal" id="form-news" method="POST" action='' enctype="">
							{{csrf_field()}}
							   <div class="form-group">
								   <label for="focusedinput" class="col-sm-2 control-label">Title</label>
								   <div class="col-sm-8">
									   <input type="text" name='Title' class="form-control1" id="focusedinput" placeholder="Eg. Format / extention change">
								   </div>
								   <!--<div class="col-sm-2">
									   <p class="help-block">Your help text!</p>
								   </div>-->
							   </div>

							   <div class="form-group">
								   <label for="txtarea1" class="col-sm-2 control-label">News Body</label>
								   <div class="col-sm-8">
						<textarea name="News" id="txtarea1" cols="50" rows="6" class="form-control1" placeholder='Eg. From JAN 28th, all files will be in .zip format'></textarea></div>
							   </div>
							  
							   <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label"></label>
									<div class="col-sm-8">
											<button class='btn btn-success'>Create</button>
										</div>
								</div>

						   </form>
                              </div>
                               </div>
                                                        </div>
										
									   </div>
                                    <!--6 start-->
                                    
                                   

									<!--6 start-->
								   <div class="col-md-7 col-md-offset-1 agile_top_w3_post agile_info_shadow">
										
                                            <h3 class="black w3_inner_tittle two">Edit News</h3>

											<div class='load-data'></div>
											<div id='news-content'></div>


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







