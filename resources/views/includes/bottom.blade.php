<!-- js -->

<script type="text/javascript" src="{{asset('js2/jquery-2.1.4.min.js')}}"></script>

<!-- tables -->
<script type="text/javascript" src="{{asset('js2/jquery.basictable.min.js')}}"></script>

<!--toastr-->
<script type="text/javascript" src="{{asset('js2/toastr.min.js')}}"></script>

<!--busyload-->
<script src="{{asset('js2/busyload.min.js')}}"></script>

<!--boot select-->
<script src="{{asset('js2/bootstrap-select.js')}}"></script>

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

<!--custom -->

<!--reg script issue -->
<script>
//$('.staffid').hide();
//$('.Number').hide();

 $('.stat').change(function(e){
            e.preventDefault();
         if( $('.stat').val() == "1"){
            $('#staffid').val('');
          $('#Number').val('');
          $('.staffid').show('fade');
          $('.Number').show('fade');
          $('.active').val(0);
         }else{
          $('#staffid').val('Nil');
          //gen ran num
          var flo = Math.random();
          var mul =flo * 5000;
          var rand = Math.floor(mul);

          $('#Number').val(rand);
          $('.staffid').hide('fade');
          $('.Number').hide('fade');
          $('.active').val(1);
         }
 });

 //front end phone number validation
 $('#Number').on('keyup', function(){
var con = $('#Number').val();
if($('#Number').val().length > 11){
    $('.msg-d').html('Number must be 11 e.g 08012345678');
    $('.msg-db').html(' ');
}else if($('#Number').val().length < 11){
    $('.msg-i').html('Number must be 11 e.g 08012345678');
    $('.msg-db').html(' ');
}else{
    $('.msg-d').html(' ');
    $('.msg-i').html(' ');
}
});

//number on blur
 $('#Number').blur(function(e){
            e.preventDefault();
    if($('#Number').val().length > 11){
    $('.msg-db').html('Number Invalid! e.g 08012345678');
    $('.msg-d').html(' ');
    $('.msg-i').html(' ');
    $('#Number').val('Invalid');
}else if($('#Number').val().length < 11){
    $('.msg-db').html('Number Invalid! e.g 08012345678');
    $('.msg-d').html(' ');
    $('.msg-i').html(' ');
    $('#Number').val('Invalid');
}else{
    $('.msg-db').html(' ');
}
 });

</script>
<!--reg script issue -->


<!-- upload -->
<script>
    $(document).ready(function (e) {
        $("#form").on('submit',(function(e) {
            e.preventDefault();

           // $('.send-ad').prop('disabled', true);
            $.ajax({
                url: "{{route('upload')}}",
                type: "POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                
                
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
            maxSize: "50px",
            minSize: "50px",
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
                        if (data.errors.File) {
                            toastr.info(data.errors.File, 'Warning', {timeOut: 5000});
                        }
                        if (data.errors.Course) {
                            toastr.info(data.errors.Course, 'Warning', {timeOut: 5000});
                        }
                        if (data.errors.Level) {
                            toastr.info(data.errors.Level, 'Warning', {timeOut: 5000});
                        }
                        if (data.errors.Description) {
                            toastr.info(data.errors.Description, 'Warning', {timeOut: 5000});
                        }
                     //.............................. 
    
                    } else {

                        if(data == 'File Upload Successful!'){
                           
                         //empty form
                         $("#form")[0].reset();
                         toastr.success(data); 
                         
                        }else{

                            toastr.error(data); 
                         
                        }
                          
                    }
                
                },
                  
           }); //ajax end
               
        })); //submit form end
    
    });//doc end
    
    </script>
    
    <!-- upload-->






    <!-- search -->
<script>
        $(document).ready(function (e) {
            $("#lec_search").on('submit',(function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{route('lec_search')}}",
                    type: "GET",
                    data: {
                '_token': $('input[name=_token]').val(),
               'Search': $('.search').val(),
              
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
                            if (data.errors.Search) {
                                toastr.info(data.errors.Search, 'Warning', {timeOut: 5000});
                            }
                           
                         //.............................. 
        
                        } else {
    
                          
                             $('#SearchModal').modal();

                             $('#res').html(data);

                        }
                    
                    },
                      
               }); //ajax end
                   
            })); //submit form end
        
        });//doc end
        
        </script>
        
        <!-- search-->




        
<!-- delete file -->
<script>

        $(document).ready(function(){
       
       $('.delete').click(function(e){
           e.preventDefault();
           $('.id').val($(this).data('id'));
           $('#filemodal').modal('show');
       })

       
$('.delete-btn').click(function(e){
    e.preventDefault();

     $.ajax({
        	url: "{{route('delete_file')}}",
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
             
             if(data == 'File Deleted Successfully!'){
                toastr.success(data);
             $('#filemodal').modal('hide');   
             //reload to see changes
             location.reload();
             }else{
                toastr.error('An Error Occured, Please Refresh and Try Again'); 
             }
             
            
             
		    },
		      
       }); //ajax end
       

})//del btn end

        });//doc ready end

</script>       
<!--delete file -->

















<!-- news -->
<script>
    $(document).ready(function (e) {
        $("#form-news").on('submit',(function(e) {
            e.preventDefault();

           // $('.send-ad').prop('disabled', true);
            $.ajax({
                url: "{{route('news')}}",
                type: "POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                
                
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
            maxSize: "50px",
            minSize: "50px",
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
                     //.............................. 
    
                    } else {

                        if(data == 'News Updated Successful!'){
                           
                         //empty form
                         $("#form-news")[0].reset();
                         toastr.success(data); 
                         //reload
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
             //reload end
                        }else{

                            toastr.error(data); 
                         
                        }
                          
                    }
                
                },
                  
           }); //ajax end
               
        })); //submit form end
    
    });//doc end
    
    </script>
    
    <!-- news-->







    
<!-- course settings -->
<script>
        $(document).ready(function (e) {
            $("#courseform").on('submit',(function(e) {
                e.preventDefault();
    
               // $('.send-ad').prop('disabled', true);
                $.ajax({
                    url: "{{route('course')}}",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    
                    
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
                maxSize: "50px",
                minSize: "50px",
                background: "rgba(3, 80, 150, 0.45)",
                fontSize: "18px"
            });
                    },
        
                    success: function(data)
                    {
                       
                      //if validation errors occur
                      if ((data.errors)) {
                         
                         //...........emit  validation errors................
                           
                           
                            if (data.errors.Course1) {
                                toastr.info(data.errors.Course1, 'Warning', {timeOut: 5000});
                            }
                            if (data.errors.Course2) {
                                toastr.info(data.errors.Course2, 'Warning', {timeOut: 5000});
                            }
                            if (data.errors.Course3) {
                                toastr.info(data.errors.Course3, 'Warning', {timeOut: 5000});
                            }
                            if (data.errors.Course4) {
                                toastr.info(data.errors.Course4, 'Warning', {timeOut: 5000});
                            }
                            if (data.errors.Course5) {
                                toastr.info(data.errors.Course5, 'Warning', {timeOut: 5000});
                            }
                            if (data.errors.Course6) {
                                toastr.info(data.errors.Course6, 'Warning', {timeOut: 5000});
                            }
                            if (data.errors.Course7) {
                                toastr.info(data.errors.Course7, 'Warning', {timeOut: 5000});
                            }
                            if (data.errors.Course8) {
                                toastr.info(data.errors.Course8, 'Warning', {timeOut: 5000});
                            }
                            if (data.errors.Course9) {
                                toastr.info(data.errors.Course9, 'Warning', {timeOut: 5000});
                            }
                            if (data.errors.Course10) {
                                toastr.info(data.errors.Course10, 'Warning', {timeOut: 5000});
                            }
                           
                         //.............................. 
        
                        } else {
    
                            if(data === 'Duplicate Course Selected'){
                               
                             toastr.warning('Update Failed',data); 

                            }else{
    
                                toastr.success(data); 
                             
                            }
                              
                        }
                    
                    },
                      
               }); //ajax end
                   
            })); //submit form end
        
        });//doc end
        
        </script>
        
       <!-- course settings -->
    






        
<!--save course-->
<script>

//validation for course code
    $('.savecos').prop('disabled',true);

    $('.code').on('keyup', function(){
var con = $('.code').val();
if(con.length == 3){
    $('.savecos').prop('disabled',false); 
}else{
    $('.savecos').prop('disabled',true);
}
});
//validation for course code

$('.savecos').click(function(e){
e.preventDefault();

 $.ajax({
    url: "/save-course",
        type: "POST",
        data:  {
            '_token': $('input[name=_token]').val(),
            'cos': $('.code').val(),
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

            if(data == 'Course Code Saved!'){
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
   

})// btn end


</script>       
<!--save course-->





 <!-- stu search -->
 <script>
        $(document).ready(function (e) {
            $("#stu_search").on('submit',(function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{route('stu_search')}}",
                    type: "GET",
                    data: {
                '_token': $('input[name=_token]').val(),
               'Search': $('.search').val(),
              
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
                            if (data.errors.Search) {
                                toastr.info(data.errors.Search, 'Warning', {timeOut: 5000});
                            }
                           
                         //.............................. 
        
                        } else {

                            $('.stu-serach-res').html(data);

                           $('#SearchstuModal').modal();


                        }
                    
                    },
                      
               }); //ajax end
                   
            })); //submit form end
        
        });//doc end
        
        </script>
        
        <!-- stu search-->













































<script>

        //................initial manage admin curse crud data load......................................
        $(document).ready(function(){
          
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
        });
   
        //................initial manage admin course crud data load......................................     
                 </script>






<script>

    //................initial staff activation data load......................................
    $(document).ready(function(){
      
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
    });

    //................initial staff activation data load......................................     
             </script>





<script>

        //................initial load users data load......................................
        $(document).ready(function(){
          
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
        });
    
        //................initial load users data load......................................     
                 </script>




<script>

        //................initial news data load......................................
        $(document).ready(function(){
          
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
        });
    
        //................initial news data load......................................     
                 </script>


<!--custom -->



		<script src="{{asset('js2/classie.js')}}"></script>
		<script src="{{asset('js2/gnmenu.js')}}"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
			<!-- script-for-menu -->

<script src="{{asset('js2/jquery.nicescroll.js')}}"></script>
<script src="{{asset('js2/scripts.js')}}"></script>

<script type="text/javascript" src="{{asset('js2/bootstrap-3.1.1.min.js')}}"></script>
