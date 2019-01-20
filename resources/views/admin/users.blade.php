@extends('layouts.main')

@section('title','Manage Users')


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
							<div class="w3l-table-info agile_info_shadow">
									<h3 class="w3_inner_tittle two">Manage Users</h3>

									<div class='load-data'></div>
								<div id='user-content'></div>
								
						 </div>
					
											
						
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
	
	
	
	
<!--Modal for delete file -->

<div id="delmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <h5 class="text-center text-danger">All User Record(s) / File(s) Will be Permanently Deleted...Continue?</h5>
                    
                    <div class="modal-footer ">
                        <div class='text-center'><!--center-->
     		      <form>
    
        <button type="submit" data-dismiss="modal" class="btn btn-success del-btn" >
			<i class='glyphicon glyphicon-ok load'></i> </button>
                                    
                                    <input name="id" type="hidden" class="id"/>
                                          <!--spoofing-->
                                         <input name="_method" type="hidden" value="DELETE"/>
                                            {{csrf_field()}}
    
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                    <span class='glyphicon glyphicon-remove'></span> 
                                                </button>
                                                                             
                                      </form>
                           
                    </div><!--center-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for delete file-->

	@endsection