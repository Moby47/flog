<ul id="gn-menu" class="gn-menu-main">
    <!-- /nav_agile_w3l -->
<li class="gn-trigger">
 <a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
 <nav class="gn-menu-wrapper">
     <div class="gn-scroller scrollbar1">
         <ul class="gn-menu agile_menu_drop">

            @if(Auth::user()->identity == 1)
            <!--staff-->
             <li><a href="/home"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
             <li><a href="/file-upload"> <i class="fa fa-upload"></i>File Upload</a></li>
             @elseif(Auth::user()->identity == 0)
<!--admin-->
<li><a href="/home"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
   <li><a href="/activation"> <i class="fa fa-legal"></i>Staff Activation</a></li>
   <li><a href="/users"> <i class="fa fa-user"></i>Manage Users</a></li>
   <li><a href="/courses"> <i class="fa fa-file-text-o"></i>Manage Courses</a></li>
   <li><a href="/news"> <i class="fa fa-info"></i> News Settings</a></li>
             @elseif(Auth::user()->identity == 2)
             <!--stu-->
             <li><a href="/home"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
             <li><a href="/download"> <i class="fa fa-download"></i> File Download</a></li>
             <li><a href="/course"> <i class="fa fa-book"></i> Course Settings</a></li>

             @endif
             
             <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                 <i class="fa fa-power-off"></i>
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
         </ul>
     </div><!-- /gn-scroller -->
 </nav>
</li>
<!-- //nav_agile_w3l -->
<li class="second logo"><h1><a href="/"><i class="fa fa-graduation-cap" aria-hidden="true"></i>F-Log </a></h1></li>
 <li class="second admin-pic">
   
</li>
<li class="second top_bell_nav">

</li>
<li class="second top_bell_nav">

</li>
<li class="second top_bell_nav">

</li>

<li class="second w3l_search">

    @if(Auth::user()->identity == 1)
    <!--lecturer search -->
     <form action="" method="get" id='lec_search'>
         {{csrf_field()}}
         <input type="search" class='search' name="Search" placeholder="Enter keyword..." required="">
         <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
     </form>
     <!--lecturer search -->
     @elseif(Auth::user()->identity == 2)

<!--student search -->
<form action="" method="get" id='stu_search'>
    {{csrf_field()}}
    <input type="search" class='search' name="Search" placeholder="E.g Java or 721..." required="">
    <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>
<!--student search -->
     @endif
 
</li>

<li class="second full-screen">
 
</li>

</ul>


<!-- search Modal -->
<div class="modal fade " id="SearchModal" role="">
		<div class="modal-dialog  ">
			
		  <div class="modal-content">
				
			<div class="modal-header">
				
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  
              <h4 class="modal-title">Search Result</h4>
              <!--loading-->
              <span class="spin"></span>
              <span class="loadtxt"></span>
               <!--loading-->
			</div>
	
	
			<div class="modal-body"><!--body-->
			  
				<div id='res'></div>
			   <!--ajax loaded content comes here -->
	
			</div><!--body end-->
			<div class="modal-footer">
					
	
			  
			</div>
		  </div>
		</div>
	  </div>
       <!-- ..................... search Modal -->
       



       
<!-- search Modal -->
<div class="modal fade " id="SearchstuModal" role="dialog">
    <div class="modal-dialog  ">
        
      <div class="modal-content">
            
        <div class="modal-header">
            
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          <h4 class="modal-title">Search Result</h4>
<!--loading-->
<span class="spin"></span>
<span class="loadtxt"></span>
 <!--loading-->

        </div>


        <div class="modal-body"><!--body-->
        
            <div class='stu-serach-res'>
             
            </div>
           <!--ajax loaded content comes here -->

        </div><!--body end-->
        <div class="modal-footer">
                

          
        </div>
      </div>
    </div>
  </div>
   <!-- ..................... search Modal -->