
<!--login-column  -->
<div class="login-column">
    <div class="login-column_header">
        <img src="{{asset('frontEnd/images/logoo.png')}}">
        <div class="clearfix"></div>
        <h4>Welcome to Login system.</h4>
    </div>
    <div class="main-register-holder tabs-act">
        <div class="main-register fl-wrap">
            <ul class="tabs-menu fl-wrap no-list-style">
                <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
            </ul>
            <!--tabs -->                       
            <div class="tabs-container">
                <div class="tab">
                    <!--tab -->
                    <div id="tab-1" class="tab-content first-tab">
                        <div class="custom-form">
                        <form method="post" name="registerform" action="{{route('admin.login')}}">
                                 @csrf
                                <label>Email Address <span>*</span> </label>

                                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"   onClick="this.select()">

                    
                                <label >Password <span>*</span> </label>

                                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"   onClick="this.select()">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <button type="submit"  class="btn float-btn color2-bg"> Log In <i class="fas fa-caret-right"></i></button>

                                <div class="clearfix"></div>

                                <div class="filter-tags">

                                    <input id="check-a3" type="checkbox" name="remember">
                                    <label for="check-a3">Remember me</label>

                                </div>
                            </form>
                            <div class="lost_password">
                                <a href="#" class="show-lpt">Lost Your Password?</a>
                                <div class="lost-password-tootip">
                                    <p>Enter your email and we will send you a password</p>
                                    <input name="email" type="text"   onClick="this.select()" value="">
                                    <button type="submit"  class="btn float-btn color2-bg"> Send<i class="fas fa-caret-right"></i></button>
                                    <div class="close-lpt"><i class="far fa-times"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--tab end -->
                </div>
                <!--tabs end -->
                <div class="log-separator fl-wrap"><span>or</span></div>
                <div class="soc-log fl-wrap">
                    <p>For faster login or register use your social account.</p>
                    <a href="#" class="facebook-log"> Facebook</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--login-column end-->
