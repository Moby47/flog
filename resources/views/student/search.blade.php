

@if(count($result)>0)
<div class="w3l-table-info agile_info_shadow">
        <div class="table-responsive">
           <table id="table">
           <thead>
             <tr>
                    <th>Title</th>
                    <th>Uploaded By</th>
                    <th>Level</th> 
                    <th>Course</th>     					
                    <th>Time</th>
                    <th>Size</th>
                    <th>Download</th>
             </tr>
           </thead>
           <tbody>

                @foreach($result as $res)
                <tr>
                <td>{{$res->title}}</td>
                <td>{{$res->fname}}</td>
                <td>{{$res->level}}</td>  
                <td>COSC {{$res->course}}</td> 
                <td>{{$res->created_at->diffforhumans()}}</td> 
            <td>{{$res->size}}</td>
              
<td><a href='/direct-download/{{$res->file}}' class='btn btn-success dd'>
                    <span class='fa fa-download' ></span></a></td>
                   
            </tr>
      @endforeach
            
           </tbody>
         </table>
        </div>
   
</div>
<h5 class='text-center'>{{$result->links()}}</h5>
@else

<h5 class='text-center'><img src='/images/no-result.png' class='img-responsive no-result-img' alt='no result found'/></h5>
               
       @endif



       

<script>
        //.........paginated result......................
        $(document).one('click','.pagination a', function(e){
        
        e.preventDefault();

         var query = $('.search').val();
       
        var page = $(this).attr('href').split('page=')[1];
        
        getproducts(page);
        
        function getproducts(page){
        
        $.ajax({
            url: '/stu-search?Search='+query+'&page='+ page,
        
            beforeSend:function(){
                $('.modal-body').hide('fade');
                  $(".spin").addClass("fa fa-refresh fa-spin");
                  $(".loadtxt").html('Fetching Results...');
                    },
        
                     complete:function(){
                    $(".spin").removeClass("fa fa-refresh fa-spin");
                    $(".loadtxt").html(' ');
                	$('.modal-body').show('fade');
                    },
        
        }).done(function(data){
            $('.stu-serach-res').html(data);
        
            location.hash = page;
        })
        
        }//func end
        });//doc end
        
        //.........paginated result......................
        </script>