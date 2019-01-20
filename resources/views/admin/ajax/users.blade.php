@if(count($users)>0)

  	<div class="table-responsive">
    <table id="table">
    <thead>
     <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Staff ID</th> 
        <th>Status</th>
        <th>Email</th>   
        <th>Number</th> 
        <th>Downloads</th> 					
        <th>Joined</th>
        <th>Delete</th>
      </tr>
    </thead>
  <tbody>
      @foreach($users as $user)
      <tr>
      <td>{{$user->fname}}</td>
        <td>{{$user->lname}}</td>
        <td>{{$user->staffid}}</td>
        <td>
          @if($user->identity == 1)
        Staff
          @elseif($user->identity == 2)
        Student
          @endif
        </td>  
        <td><a href='mailto:{{$user->email}}' class='underline'>{{$user->email}}</a></td>    
        
        @if($user->identity == 1)
       <td> <a href='tel:{{$user->Number}}' class='underline'>{{$user->Number}}</a></td>
        @else
        <td>N/A</td> 
        @endif

        @if($user->identity == 1)
        <td>N/A</td> 
        @else
        <td>{{$user->dd}}</td> 
        @endif
                                
        <td>{{$user->created_at->diffforhumans()}}</td> 
<td><button class='btn btn-danger del' data-id="{{$user->id}}"><span class='fa fa-trash-o' ></span></button></td>
          
      </tr>
  @endforeach
                     
  </tbody>
     </table>
</div>
  <h5 class='text-center'>{{$users->links()}}</h5>
  @else
  
  <div class="alert alert-info">
  <h5 class="text-center">No User Found </h5>
  </div>
  @endif
						



     
<!--delete user -->
<script>

        $(document).ready(function(){
       
       $('.del').click(function(e){
           e.preventDefault();
           $('.id').val($(this).data('id'));
           $('#delmodal').modal('show');
       })

       
$('.del-btn').click(function(e){
    e.preventDefault();

     $.ajax({
        url: "/delete-user",
			type: "DELETE",
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
             
             if(data == 'User Deleted Successfully!'){
                toastr.success(data);
                toastr.info('Email Notification Sent');
             $('#delmodal').modal('hide');   
             //reload to see changes
             $.ajax({
                  url: "{{route('load_users')}}",
                  type: "GET",
                  
                  beforeSend:function(){
                  $(".load-data").addClass("fa fa-refresh fa-spin");
                  },
        
                   complete:function(){
                  $(".load-data").removeClass("fa fa-refresh fa-spin");
                  },
                  
        
                  success: function(data)
                  {
                      $('#user-content').html(data);
                  },
                    error: function(e) 
                  {
                      $('#user-content').html("Error! Try Again Later");
                  } 	        
             });
              //reload to see changes
             }else{
                toastr.error(data); 
             }
             
            
             
		    },
		      
       }); //ajax end
       

})//del btn end

        });//doc ready end

</script>       
<!--delete user-->





<script>
        //.........paginated result......................
        $(document).one('click','.pagination a', function(e){
        
        e.preventDefault();
        
        var page = $(this).attr('href').split('page=')[1];
        
        getproducts(page);
        
        function getproducts(page){
        
        $.ajax({
            url: '/load-users?page='+ page,
        
            beforeSend:function(){
              $(".load-data").addClass("fa fa-refresh fa-spin");
              $("#user-content").hide('fade');
              },
    
               complete:function(){
              $(".load-data").removeClass("fa fa-refresh fa-spin");
              $("#user-content").show('fade');
              },
        
        }).done(function(data){
            $('#user-content').html(data);
        
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