@if(count($lec)>0)

        <div class="table-responsive">
    <table id="table">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Staff ID</th> 
            <th>Email</th> 
            <th>Number</th>   					
            <th>Joined</th>
            <th>Approve</th>
            <th>Decline</th>
        </tr>
    </thead>
<tbody>
    @foreach($lec as $l)
    <tr>
    <td>{{$l->fname}}</td>
      <td>{{$l->lname}}</td>
      <td>{{$l->staffid}}</td>  
      <td><a href='mailto:{{$l->email}}' class='underline'>{{$l->email}}</a></td>  
      <td><a href='tel:{{$l->Number}}' class='underline'>{{$l->Number}}</a></td>                               
      <td>{{$l->created_at->diffforhumans()}}</td> 
<td><button class='btn btn-success app' data-id="{{$l->id}}"><span class='fa fa-check-circle-o'></span></button></td>
<td><button class='btn btn-danger dec' data-id="{{$l->id}}"><span class='fa fa-ban' ></span></button></td>
            
  </tr>
@endforeach                                  
</tbody>
     </table>
        </div>

<h5 class='text-center'>{{$lec->links()}}</h5>
@else

<div class="alert alert-info">
<h5 class="text-center">No Lecturer Awaiting Moderation </h5>
</div>
@endif






	<!--Modal for Approve -->
	
	<div id="appmodal" class="modal fade" role="dialog">
			<div class="modal-dialec">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"></h4>
					</div>
					<div class="modal-body">
						<h3 class="text-center">Are you sure?</h3>
						
						<div class="modal-footer ">
							<div class='text-center'><!--center-->
					   <form>
		
			<button type="submit" data-dismiss="modal" class="btn btn-success approve-btn" >
				<i class='glyphicon glyphicon-ok load'></i> </button>
										
										<input name="id" type="hidden" class="id"/>
											
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
		<!-- Modal for Approve-->





        <!--Modal for decline -->
	
	<div id="decmodal" class="modal fade" role="dialog">
			<div class="modal-dialec">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"></h4>
					</div>
					<div class="modal-body">
						<h3 class="text-center">Are you sure?</h3>
						
						<div class="modal-footer ">
							<div class='text-center'><!--center-->
					   <form>
		
			<button type="submit" data-dismiss="modal" class="btn btn-success delete-btn" >
				<i class='glyphicon glyphicon-ok load'></i> </button>
										
										<input name="id" type="hidden" class="id"/>
											 
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
		<!-- Modal for decline-->

     
<!--approve staff -->
<script>

        $(document).ready(function(){
       
       $('.app').click(function(e){
           e.preventDefault();
           $('.id').val($(this).data('id'));
           $('#appmodal').modal('show');
       })

       
$('.approve-btn').click(function(e){
    e.preventDefault();

     $.ajax({
        url: "/approve",
			type: "POST",
			data:  {
                '_token': $('input[name=_token]').val(),
                'id': $('.id').val(),
            },

             beforeSend:function(){
                 //busy load before  
            $.busyLoadFull("show", { 
                // text: "UPLOADING ...",
           image: "images/load.gif",
            maxSize: "100px",
            minSize: "100px",
                background: "rgba(3, 80, 150, 0.45)",
                fontSize: "18px"
            });
            },

             complete:function(){
            //busy load after
            $.busyLoadFull("hide", { 
                // text: "UPLOADING ...",
           image: "images/load.gif",
            maxSize: "100px",
            minSize: "100px",
                background: "rgba(3, 80, 150, 0.45)",
                fontSize: "18px"
            });
            },

			success: function(data)
		    {
             
             if(data == 'Staff Approved Successfully!'){
                toastr.success(data);
                toastr.info('Email Notification Sent');
             $('#appmodal').modal('hide');   
               //reload to see changes
               $.ajax({
              url: "{{route('load_staff')}}",
              type: "GET",
              
              beforeSend:function(){
              $(".load-data").addClass("fa fa-refresh fa-spin");
              },
    
               complete:function(){
              $(".load-data").removeClass("fa fa-refresh fa-spin");
              },
              
    
              success: function(data)
              {
                  $('#staff-content').html(data);
              },
                error: function(e) 
              {
                  $('#staff-content').html("Error! Try Again Later");
              } 	        
         });
         //reload end
             }else{
                toastr.error(data); 
             }
             
            
             
		    },
		      
       }); //ajax end
       

})//del btn end

        });//doc ready end

</script>       
<!--approve staff -->








   
<!--decline staff -->
<script>

        $(document).ready(function(){
       
       $('.dec').click(function(e){
           e.preventDefault();
           $('.id').val($(this).data('id'));
           $('#decmodal').modal('show');
       })

       
$('.delete-btn').one('click', function(e){
    e.preventDefault();

     $.ajax({
        	url: "/decline",
			type: "POST",
			data:  {
                '_token': $('input[name=_token]').val(),
                'id': $('.id').val(),
            },

             beforeSend:function(){
                 //busy load before  
            $.busyLoadFull("show", { 
               // text: "UPLOADING ...",
           image: "images/load.gif",
            maxSize: "100px",
            minSize: "100px",
                background: "rgba(3, 80, 150, 0.45)",
                fontSize: "18px"
            });
            },

             complete:function(){
            //busy load after
            $.busyLoadFull("hide", { 
               // text: "UPLOADING ...",
           image: "images/load.gif",
            maxSize: "100px",
            minSize: "100px",
                background: "rgba(3, 80, 150, 0.45)",
                fontSize: "18px"
            });
            },

			success: function(data)
		    {
             
             if(data == 'Staff Declined Successfully!'){
                toastr.success(data);
                toastr.info('Email Notification Sent');
             $('#decmodal').modal('hide');   
             //reload to see changes
             $.ajax({
              url: "{{route('load_staff')}}",
              type: "GET",
              
              beforeSend:function(){
              $(".load-data").addClass("fa fa-refresh fa-spin");
              },
    
               complete:function(){
              $(".load-data").removeClass("fa fa-refresh fa-spin");
              },
              
    
              success: function(data)
              {
                  $('#staff-content').html(data);
              },
                error: function(e) 
              {
                  $('#staff-content').html("Error! Try Again Later");
              } 	        
         });
         //reload end

             }else{
                toastr.error('An Error Occured, Please Refresh and Try Again'); 
             }
             
             
             
		    },
		      
       }); //ajax end
       

})//del btn end

        });//doc ready end

</script>       
<!--decline staff -->






<script>
        //.........paginated result......................
        $(document).one('click','.pagination a', function(e){
        
        e.preventDefault();
        
        var page = $(this).attr('href').split('page=')[1];
        
        getproducts(page);
        
        function getproducts(page){
        
        $.ajax({
            url: '/load-staff?page='+ page,
        
            beforeSend:function(){
              $(".load-data").addClass("fa fa-refresh fa-spin");
              $("#staff-content").hide('fade');
              },
    
               complete:function(){
              $(".load-data").removeClass("fa fa-refresh fa-spin");
              $("#staff-content").show('fade');
              },
        
        }).done(function(data){
            $('#staff-content').html(data);
        
            location.hash = page;
        })
        
        }//func end
        });//doc end
        
        //.........paginated result......................
        </script>




<!-- tables -->
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!--table-->