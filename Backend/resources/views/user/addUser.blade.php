<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " Add User "] )

<body>

    <style>
        .errors {
            
            margin-top: 10px;
            color:red;
        }

        .top_error {
            
            margin: 10px;
            font-size: 1rem;
        }
    </style>

   


   
    <div>

        
        @include('head.nav_header')
       
        @include('head.header')
      
        @include('sideBar.sideBar')
    
      
            <!-- row -->

            <div>
                {{-- Erorrs --}}
                <div>
                    {{session('Add_user')}}
                </div>
                {{-- Errors ends --}}
                <div>
                  
                                        <form method="POST" style="margin:30px">
                                            @csrf
                                            <div>
                                                <label for="val-skill">User Type <span
                                                        >*</span>
                                                </label>
                                                <div>
                                                     <select name="user_type" id="val-skill">
                                                    
                                                        <option value="">User Type</option>
                                                        <option value="student">Student</option>
                                                        <option value="teacher">Teacher</option>
                            
                                                        <option value="admin">Admin</option>
                                                    </select>

                                                    {{-- Errors --}}
                                                    <div class="errors">
                                                        {{$errors->first('user_type')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>
                                            </div>

                                            <div>
                                                <label for="val-username">Username <span
                                                       >*</span>
                                                </label>
                                                <div >
                                                    <input type="text" id="val-username"
                                                        name="user_name" placeholder="Enter a username..">
                                                    {{-- Errors --}}
                                                    <div class="errors">
                                                        {{$errors->first('user_name')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>

                                            </div>
                                            <div >
                                                <label for="val-email">Email <span
                                                       >*</span>
                                                </label>
                                                <div>
                                                    <input type="text" id="val-email" name="email"
                                                        placeholder="Your valid email..">
                                                    {{-- Errors --}}
                                                    <div class="errors">
                                                        {{$errors->first('email')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>
                                            </div>

                                            <div>
                                                <label for="val-password">Password <span
                                                        >*</span>
                                                </label>
                                                <div>
                                                    <input type="password" id="val-password"
                                                        name="password" placeholder="Choose a safe one..">
                                                    {{-- Errors --}}
                                                    <div class="errors">
                                                        {{$errors->first('password')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>

                                            </div>

                                            <div>
                                                <label>
                                                    <for="val-confirm-password">Confirm Password <span
                                                       >*</span>
                                                </label>
                                                <div>
                                                    <input type="password" class="form-control"
                                                        id="val-confirm-password" name="con_password"
                                                        placeholder="..and confirm it!">
                                                    {{-- Errors --}}
                                                    <div class="errors">
                                                        {{$errors->first('con_password')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>
                                            </div>

                                            <div>
                                                <label 
                                                    for="val-confirm-password">Address <span
                                                        >*</span>
                                                </label>
                                                <div >
                                                    <input type="text" id="val-confirm-password"
                                                        name="address" placeholder="Address">
                                                    {{-- Errors --}}
                                                    <div class="errors">
                                                        {{$errors->first('address')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>
                                            </div>

                                            <div>
                                                <label for="val-phoneus">Phone (BD)
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div>
                                                    <input type="text" id="val-phoneus"
                                                        name="phone_number" placeholder="+88 01XXXXXXX">
                                                    {{-- Errors --}}
                                                    <div class="errors">
                                                        {{$errors->first('phone_number')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>
                                            </div>

                                            <div>
                                                <div >
                                                    <button type="submit">Add Users</button>
                                                </div>
                                            </div>
                                        </form>
                               
                    </div>
                </div>
           

            </div>
         
        </div>
     
        @include('footer.footer')
       
    </div>


</body>

</html>