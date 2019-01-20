@extends('layouts.main')

@section('title','signin')

@section('content')


	<!-- /pages_agile_info_w3l -->

    <div class="pages_agile_info_w3l">
            <!-- /login -->
               <div class="over_lay_agile_pages_w3ls">
                    <div class="registration">
                
                                <div class="signin-form profile">
                                        @if(session('redirect'))
                                        <div class='alert alert-info text-center'> {{session('redirect')}}</div>
                                                    @endif

                                    @if(session('notactive'))
                             <div class='alert alert-info text-center'> {{session('notactive')}}</div>
                                 @endif

                                 @if(session('reged'))
                                 <div class='alert alert-success text-center'> {{session('reged')}}</div>
                                     @endif

                                    <h2>SIGN IN</h2>
                                    <div class="login-form">
                                        <form method="POST" action="{{ route('login') }}">
                                                {{ csrf_field() }}
           
           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                
                <input id="email" type="email" placeholder="E-mail" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
           
        </div>
        
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                             
                <input id="password" type="password" placeholder='Password' class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
       
        </div>
                                            <div class="tp">
                                                <input type="submit" value="Login">
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <p><a href="/register" class="btn btn-link"> Don't have an account? click here</a></p>

                                    <p><a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a></p>
                                    
                                     <h6><a href="/">Back To Home</a><h6>
                                </div>
                        </div>
                        <!--copy rights start here-->
                            <div class="copyrights_agile">
                                 <p>© 2018 F-Log . All Rights Reserved | by Henry Onyemaobi </p>
                            </div>	
                            <!--copy rights end here-->
            </div>
        </div>
            <!-- /login -->
<!-- //pages_agile_info_w3l -->


@endsection


