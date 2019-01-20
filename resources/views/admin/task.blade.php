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
							<div class="w3l-table-info agile_info_shadow">
									<h3 class="w3_inner_tittle two">Approve / Decline Lecturer</h3>

									<div class='load-data'></div>
								<div id='staff-content'></div>
							 
								
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
	
	
	

	


		
	
	@endsection







