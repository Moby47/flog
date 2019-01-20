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
							       <div class="col-md-5  agile_top_w3_post agile_info_shadow">
										   
			  <h3 class="black w3_inner_tittle two">New Course</h3>
												
              <div class="form-body">
                <form method="POST">
					{{csrf_field()}}
                     <div class="form-group">
                      <label for="focusedinput" class="col-sm-2 control-label">Course Code</label>
                   <div class="col-sm-8">
                    <input type="text" name='cos' class="code form-control1" id="focusedinput" placeholder="Eg. 721">
                            </div>
                          </div>
                     
                       <div class="form-group">
                    <label for="selector1" class="col-sm-2 control-label"></label>
                      <div class="col-sm-8">
						<button class='btn btn-success savecos'><span class='fa fa-plus'></span> Add</button>
					  </form>
                              </div>
                               </div>
                                                        </div>
										
									   </div>
                                    <!--6 start-->
                                    
                                   

									<!--6 start-->
								   <div class="col-md-5 col-md-offset-1 agile_top_w3_post agile_info_shadow">
										
                                            <h3 class="black w3_inner_tittle two">Course List</h3>

											<div class='load-data'></div>
											<div id='content'></div>


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




<!-- Modal for delete course-->

<div id="DelModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <h5 class="text-center">You Are About To Delete This Course...</h5>
                    
                    <div class="modal-footer ">
                        <div class='text-center'><!--center-->
                            <form method="POST">
                                    {{csrf_field()}}
                                    
                                          <input name="id" type="hidden" class="id"/>

                                       <div class="form-group">
                                    <label for="selector1" class="col-sm-2 control-label"></label>
                                      <div class="col-sm-8">
                                        <button class='btn btn-danger delete-cos'><span class='fa fa-times'></span> Continue</button>
                                      </form>
                           
                    </div><!--center-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for delete course-->

@endsection







