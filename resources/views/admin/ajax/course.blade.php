
<div class="w3l-table-info agile_info_shadow">
    @if(count($cos)>0)

<div class="table-responsive">
        <table id="table">
        <thead>
         <tr>
                <th>Course Code</th>
                <th>Time Updated</th>
                <th>Edit</th> 
                <th>Delete</th>
          </tr>
        </thead>
    <tbody>
            @foreach($cos as $c)
            <tr>
            <td>{{$c->cos}}</td>
              <td>{{$c->updated_at->diffforhumans()}}</td>
               
<td><button class='btn btn-primary edit' data-id="{{$c->id}}" data-cos="{{$c->cos}}"><span class='fa fa-pencil'></span></button></td>
<td><button class='btn btn-danger del_cos' data-id="{{$c->id}}"><span class='fa fa-ban' ></span></button></td>
                    
          </tr>
    @endforeach
                                         
    </tbody>
         </table>
</div>
    </div>
    <h5 class='text-center'>{{$cos->links()}}</h5>
		@else
		
		<div class="alert alert-info">
		<h5 class="text-center">No Course Code Uploaded </h5>
		</div>
        @endif     
        



	
<!-- Modal for edit course-->

<div id="editmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <h5 class="text-center">Edit Course</h5>
                    
                    <div class="modal-footer ">
                        <div class='text-center'><!--center-->
                            <form method="POST">
                                    {{csrf_field()}}
                                     <div class="form-group">
                                      <label for="focusedinput" class="col-sm-2 control-label">Course Code</label>
                                   <div class="col-sm-8">
                                    <input type="text" name='cos' class="cos form-control1" id="focusedinput" placeholder="Eg. 721">
                                    <input name="id" type="hidden" class="id"/>
                                </div>
                                          </div>
                                     
                                       <div class="form-group">
                                    <label for="selector1" class="col-sm-2 control-label"></label>
                                      <div class="col-sm-8">
                                        <button class='btn btn-success save-edited-cos'><span class='fa fa-upload'></span> Change</button>
                                      </form>
                           
                    </div><!--center-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for edit course-->




    

           
<!--edit cos-->
<script>

        $(document).ready(function(){
       
       $('.edit').click(function(e){
           e.preventDefault();
           $('.id').val($(this).data('id'));
           $('.cos').val($(this).data('cos'));
           $('#editmodal').modal('show');
       });

       
$('.save-edited-cos').click(function(e){
    e.preventDefault();

     $.ajax({
        url: "/edit-course",
			type: "POST",
			data:  {
                '_token': $('input[name=_token]').val(),
                'id': $('.id').val(),
                'cos': $('.cos').val(),
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
           //if validation errors occur
         if ((data.errors)) {
                         
                         //...........emit  validation errors................
                           
                           
                            if (data.errors.cos) {
                                toastr.info(data.errors.cos, 'Warning', {timeOut: 5000});
                            }
         }else{

            if(data == 'Course Code Changed!'){
                //hide modal
                $('#editmodal').modal('hide');

            toastr.success(data);
         
         //reload to see changes
         $.ajax({
                  url: "{{route('load_cos')}}",
                  type: "GET",
                  
                  beforeSend:function(){
                  $(".load-data").addClass("fa fa-refresh fa-spin");
                  },
        
                   complete:function(){
                  $(".load-data").removeClass("fa fa-refresh fa-spin");
                  },
                  
        
                  success: function(data)
                  {
                      $('#content').html(data);
                  },
                    error: function(e) 
                  {
                      $('#content').html("Error! Try Again Later");
                  } 	        
             });
             
         }else{
            toastr.error(data); 
         }

         }//if validation errors end
             
		    },
		      
       }); //ajax end
       

})//edit btn end

        });//doc ready end

</script>       
<!--edit cos-->







     
<!--del cos-->
<script>

        $(document).ready(function(){
       
       $('.del_cos').click(function(e){
           e.preventDefault();
           $('.id').val($(this).data('id'));
           $('#DelModal').modal('show');
       });

       
$('.delete-cos').click(function(e){
    e.preventDefault();

     $.ajax({
        url: "/delete-course",
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
          

            if(data == 'Course Code Deleted!'){
                //hide modal
                $('#DelModal').modal('hide');

            toastr.success(data);
         
         //reload to see changes
         $.ajax({
                  url: "{{route('load_cos')}}",
                  type: "GET",
                  
                  beforeSend:function(){
                  $(".load-data").addClass("fa fa-refresh fa-spin");
                  },
        
                   complete:function(){
                  $(".load-data").removeClass("fa fa-refresh fa-spin");
                  },
                  
        
                  success: function(data)
                  {
                      $('#content').html(data);
                  },
                    error: function(e) 
                  {
                      $('#content').html("Error! Try Again Later");
                  } 	        
             });
             
         }else{
            toastr.error(data); 
         }

             
		    },
		      
       }); //ajax end
       

})//delbtn end

        });//doc ready end

</script>       
<!--del cos-->





<script>
        //.........paginated result......................
        $(document).one('click','.pagination a', function(e){
        
        e.preventDefault();
        
        var page = $(this).attr('href').split('page=')[1];
        
        getproducts(page);
        
        function getproducts(page){
        
        $.ajax({
            url: '/load-course?page='+ page,
        
            beforeSend:function(){
              $(".load-data").addClass("fa fa-refresh fa-spin");
              $("#content").hide('fade');
              },
    
               complete:function(){
              $(".load-data").removeClass("fa fa-refresh fa-spin");
              $("#content").show('fade');
              },
        
        }).done(function(data){
            $('#content').html(data);
        
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