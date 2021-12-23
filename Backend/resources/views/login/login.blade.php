<!DOCTYPE html>
<html class="h-100" lang="en">


{{-- Head Section Start --}}

@include('head.head' , ['title' => "Login"] )

{{-- Head Section End --}}



<body class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->





    <div>
        <div>
            <div>
                <div>
                    <div>
                        <div>
                            <div>
                                <a href="{{route('login.login')}}">
                                    <h4>LogIn</h4>
                                </a>

                                <form method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="user_name"
                                            placeholder="User Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password"
                                            placeholder="Password">
                                    </div>
                                    <input type="submit" value="Sign in">
                                </form>
                                {{-- Errors --}}
                                <div align='center'>{{session('msg')}}</div>
                                <div align='center'>{{session('change_password')}}</div>
                                {{-- Errors end --}}
                                <p>Dont have account? <a
                                        href="{{ route('registration.register')}}">Sign Up</a> now
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    @include('scripts.scripts');

</body>

</html>