<!DOCTYPE html>
<html class="h-100" lang="en">


@include('head.head' , ['title' => "Login"] )

    <style>
        
        .errors {
            
            margin-top: 10px;
            color:red;
            text-align: left;
        }
</style>
                        <div>
                            <div>
                                <a href="{{route('login.login')}}">
                                    <h2>Log In</h2>
                                </a>

                                <form method="POST">
                                    @csrf
                                    <div>
                                        <input type="text" name="user_name"
                                            placeholder="User Name">
                                    </div>
                                    <br>
                                    <div>
                                        <input type="password" name="password"
                                            placeholder="Password">
                                    </div>
                                    <br>
                                    <input type="submit" value="Log In">
                                </form>
                                {{-- Errors --}}
                                <div align='center' class="errors">{{session('msg')}}</div>
                                <div align='center' class="errors">{{session('change_password')}}</div>
                                {{-- Errors end --}}
                                <p>Dont have account? <a
                                        href="{{ route('registration.register')}}">Sign Up</a> now
                                </p>
                            </div>
                        </div>
                   
     



</body>

</html>