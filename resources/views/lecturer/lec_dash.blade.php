@extends('layouts.main')

@section('title','Lecturer Dashboard')


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
															<div class="count_info"><h4 class="count">Files</h4><span class="year">Total Files Uploaded</span></div>
															<div class="year-info"><p class="text-no">{{$uploads_count}} </p><span class="year"></span></div>
														<div class="clearfix"></div>
													</div>
												
													
													</div>

									   </div>


									   <div class="col-md-7 col-md-offset-1 fallowers_agile agile_info_shadow">
											<h3 class="w3_inner_tittle two">File Log</h3>
														<div class="work-progres">

	@if(count($uploads)>0)                  
	 <div class="table-responsive">
			   <table id="table">
			   <thead>
				<tr>
					<th>Title</th>
					<th>File</th> 
					<th>Course</th>   
					<th>Level</th>   					
					<th>Time Uploaded</th>
					<th>Expires</th>
					<th>Delete</th>
				 </tr>
			   </thead>
		   <tbody>
			@foreach($uploads as $up)
			<tr id='{{$up->id}}'>
			  <td>{{$up->title}}</td>
			  <td>{{substr($up->file,0,10)}}</td>  
			  <td>COSC {{$up->course}}</td> 
			  <td>{{$up->level}}</td>                               
			  <td>{{$up->created_at->diffforhumans()}}</td> 

			<td>
				@if(\carbon\carbon::now() > $up->expire)
				<!--expired-->
				<span class='text-danger'>Expired: </span>
			<span class='badge badge-danger'>{{$up->expire}}</span>
			@else
			<span class='badge badge-success'>{{\carbon\carbon::parse($up->expire)->diffforhumans()}}</span>
				@endif
			</td>

			  <td><button class='btn btn-danger delete' data-id="{{$up->id}}">
				  <span class='fa fa-trash-o' ></span></button></td>	
		  </tr>
	@endforeach
												
		   </tbody>
				</table>
	 </div>
				<h5 class='text-center'>{{$uploads->links()}}</h5>
				@else
			  
						<div class="alert alert-info">
						   <h5 class="text-center">File Upload Is Empty <a href="/file-upload" class='text-danger'>Click to Upload a File</a></h5>
						   </div>
						@endif
		   </div>
   
   
																

														
												
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



<!--Modal for delete file -->

<div id="filemodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <h3 class="text-center">Delete File?</h3>
                    
                    <div class="modal-footer ">
                        <div class='text-center'><!--center-->
     		      <form>
    
        <button type="submit" data-dismiss="modal" class="btn btn-success delete-btn" >
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