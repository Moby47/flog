@extends('layouts.main')

@section('title','Signup')

@section('content')


	<!-- /pages_agile_info_w3l -->

    <div class="pages_agile_info_w3l">
            <!-- /login -->
               <div class="over_lay_agile_pages_w3ls two">
                <div class="registration">
                
                   

                                <div class="signin-form profile">
                                    <h2>Sign up </h2>
                                    <div class="login-form">
                                        <form method="POST" action="{{ route('register') }}">
                                            {{ csrf_field() }}

                                            <div class="form-group{{ $errors->has('First_name') ? ' has-error' : '' }}">
                                                    <input id="fname" type="text" class="form-control" name="First_name" value="{{ old('First_name') }}" required autofocus placeholder="First name">
                                                    @if ($errors->has('First_name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('First_name') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>

                                            <div class="form-group{{ $errors->has('Last_name') ? ' has-error' : '' }}">
                                                <input id="lname" type="text" class="form-control" name="Last_name" value="{{ old('Last_name') }}" required autofocus placeholder="Last name">
                                                @if ($errors->has('Last_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('Last_name') }}</strong>
                                                    </span>
                                                @endif
                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                          
                                                <input id="email" type="email" class="form-control" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
                
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                           
                                        </div>

                                        <div class="form-group{{ $errors->has('Identity') ? ' has-error' : '' }}">
                                                <select class='stat' name='Identity'>
                                                        <option value=''>Select Identity</option>
                                                    <option value='1'>Lecturer</option>
                                                    <option value='2'>Student</option>
                                                </select>
                                                @if ($errors->has('Identity'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('Identity') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                              
                                                <div class="form-group{{ $errors->has('Staff_ID') ? ' has-error' : '' }} staffid">
                                      <input id="staffid" type="text" class="form-control" name="Staff_ID" value="{{ old('Staff_ID') }}" required autofocus placeholder="Staff ID - E.g s1047">
                                                    @if ($errors->has('Staff_ID'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('Staff_ID') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>

                                            <div class="form-group{{ $errors->has('Number') ? ' has-error' : '' }} Number">
                                                    <input id="Number" type="text" class="form-control num" name="Number" value="{{ old('Number') }}" required autofocus placeholder="Phone - E.g 08012345678">
                                                                  @if ($errors->has('Number'))
                                                                      <span class="help-block">
                                                                          <strong>{{ $errors->first('Number') }}</strong>
                                                                      </span>
                                                                  @endif
                                                                  <i class='msg-d text-danger'></i>
                                                                  <i class='msg-i text-info'></i>
                                                                  <i class='msg-db text-danger'></i>
                                                          </div>

                                            <input class='active' name='active' type='hidden'/>

                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                        <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                        
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                        
                                                <div class="form-group">
                                                        <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
                                                </div>
            
                                            <div class="tp">
                                                <input type="submit" value="Signup">
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <p><a href="/terms" class="btn btn-link"> By clicking Sign Up, I agree to this terms</a></p>

                                    <p><a href="/login" class="btn btn-link"> Already have an account? Sign in</a></p>
                                    
                                     <h6><a href="/">Back To Home</a><h6>
                                </div>
                        </div>
                        <!--copy rights start here-->
                            <div class="copyrights_agile two">
                                 <p>© 2018 F-Log . All Rights Reserved | by Henry Onyemaobi </p>
                            </div>	
                            <!--copy rights end here-->
            </div>
        </div>
            <!-- /login -->
<!-- //pages_agile_info_w3l -->





@endsection


