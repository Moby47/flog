
	<div class="w3l-table-info agile_info_shadow">
@if(count($news)>0)

        <div class="table-responsive">
        <table id="table">
        <thead>
         <tr>
                <th>Title</th>
                <th>News</th>
                <th>Time Updated</th> 
                <th>Edit</th>
          </tr>
        </thead>
    <tbody>
            @foreach($news as $n)
            <tr>
            <td>{{$n->title}}</td>
              <td>{{$n->news}}</td>                           
              <td>{{$n->updated_at->diffforhumans()}}</td> 
<td><button class='btn btn-primary edit-news' data-title="{{$n->title}}" data-news="{{$n->news}}" data-id="{{$n->id}}"><span class='fa fa-pencil' ></span></button></td>
                    
          </tr>
    @endforeach                              
    </tbody>
         </table>
        </div>
    
    @else

    <div class="alert alert-info">
    <h5 class="text-center">No News Created </h5>
    </div>
    @endif					

	</div>







<!-- Modal for edit course-->

<div id="editnewsmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <h5 class="text-center">Edit News</h5>
                    
                    <div class="modal-footer ">
                        <div class='text-center'><!--center-->
                            <form class="form-horizontal" id="form-news" method="POST" action='' enctype="">
                                    {{csrf_field()}}
                                       <div class="form-group">
                                           <label for="focusedinput" class="col-sm-2 control-label">Title</label>
                                           <div class="col-sm-8">
                                               <input type="text" name='Title' class="Title form-control1" id="focusedinput" placeholder="Eg. Format / extention change">
                                           </div>
                                           <!--<div class="col-sm-2">
                                               <p class="help-block">Your help text!</p>
                                           </div>-->
                                       </div>
        
                                       <div class="form-group">
                                           <label for="txtarea1" class="col-sm-2 control-label">News Body</label>
                                           <div class="col-sm-8">
                                <textarea name="News" id="txtarea1" cols="50" rows="6" class="News form-control1" placeholder='Eg. From JAN 28th, all files will be in .zip format'></textarea></div>
                                       </div>
                                      
                                       <input name="id" type="hidden" class="id"/>

                                       <div class="form-group">
                                            <label for="selector1" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-8">
                                                    <button class='btn btn-success change'>Change</button>
                                                </div>
                                        </div>
        
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
       
       $('.edit-news').click(function(e){
           e.preventDefault();
           $('.id').val($(this).data('id'));
           $('.Title').val($(this).data('title'));
           $('.News').val($(this).data('news'));
           $('#editnewsmodal').modal('show');
       });

       
$('.change').click(function(e){
    e.preventDefault();

     $.ajax({
        url: "/edit-news",
			type: "POST",
			data:  {
                '_token': $('input[name=_token]').val(),
                'id': $('.id').val(),
                'Title': $('.Title').val(),
                'News': $('.News').val(),
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
                           
                           
                            if (data.errors.Title) {
                                toastr.info(data.errors.Title, 'Warning', {timeOut: 5000});
                            }
                            if (data.errors.News) {
                                toastr.info(data.errors.News, 'Warning', {timeOut: 5000});
                            }
         }else{

            if(data == 'News Edited!'){
                //hide modal
                $('#editnewsmodal').modal('hide');

            toastr.success(data);
         
         //reload to see changes
         $.ajax({
                  url: "{{route('load_news')}}",
                  type: "GET",
                  
                  beforeSend:function(){
                  $(".load-data").addClass("fa fa-refresh fa-spin");
                  },
        
                   complete:function(){
                  $(".load-data").removeClass("fa fa-refresh fa-spin");
                  },
                  
        
                  success: function(data)
                  {
                      $('#news-content').html(data);
                  },
                    error: function(e) 
                  {
                      $('#news-content').html("Error! Try Again Later");
                  } 	        
             });
           //reload

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