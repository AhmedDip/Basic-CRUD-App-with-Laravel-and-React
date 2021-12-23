<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " Complete Edit "] )

<body>

    <style>
        .errors {
            text-align: left;
            margin-top: 10px;
            color:red;
        }

        .top_error {
            text-align: center;
            margin: 10px;
            font-size: 1rem;
        }
    </style>

    <div id="main-wrapper">

      
        @include('head.nav_header')
        
        @include('head.header')
      

        @include('sideBar.sideBar')
     
        <div>


            <div>
                {{-- Erorrs --}}
                <div>
                    {{session('Add_user')}}
                </div>
                {{-- Errors ends --}}
                <div>
                
                                <div>
                                    <div>
                                        <form method="POST">
                                            @csrf
                                            <div>
                                                <label  for="val-skill">User Type <span
                                                       >*</span>
                                                </label>
                                                <div>
                                                    <select disabled name="user_type"
                                                        id="val-skill" name="val-skill">
                                                        <option value="">User Type</option>
                                                        <option value="clients">Clients</option>
                                                        <option value="bank_manager">Bank Manager</option>
                                                        <option value="noney_exchange_officer">Money exchange officer
                                                        </option>
                                                        <option value="admin">Admin</option>
                                                    </select>
                                                    {{-- Errors --}}
                                                    <div class="errors">
                                                        {{$errors->first('user_type')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>
                                            </div>

                                            <div >
                                                <label for="val-username">User Id <span
                                                class="errors">*</span>
                                                </label>
                                                <div >
                                                    <input type="text" id="val-username"
                                                        name="user_id" value="{{$users["id"]}}" disabled>
                                                </div>

                                            </div>

                                            <div >
                                                <label for="val-username">Username <span
                                                       >*</span>
                                                </label>
                                                <div>
                                                    <input type="text" id="val-username"
                                                        name="user_name" value="{{$users["user_name"]}}">
                                                    {{-- Errors --}}
                                                    <div class="errors">
                                                        {{$errors->first('user_name')}}
                                                    </div>
                                                    {{-- Errors End --}}
                                                </div>

                                            </div>
                                            <div>
                                                <label for="val-email">Email <span
                                                        >*</span>
                                                </label>
                                                <div >
                                                    <input type="text" id="val-email" name="email"
                                                        value="{{$users["email"]}}">
                                                    {{-- Errors --}}
                                                    <div class="errors">
                                                        {{$errors->first('email')}}
                                                    </div>
                                                    {{-- Errors End --}}
                                                </div>
                                            </div>


                                            <div>
                                                <label 
                                                    for="val-confirm-password">Address <span
                                                       >*</span>
                                                </label>
                                                <div>
                                                    <input type="text"id="val-confirm-password"
                                                        name="address" value="{{$users["address"]}}">
                                                    {{-- Errors --}}
                                                    <div class="errors">
                                                        {{$errors->first('address')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>
                                            </div>

                                            <div>
                                                <label for="val-phoneus">Phone (BD)
                                                    <span>*</span>
                                                </label>
                                                <div>
                                                    <input type="text"id="val-phoneus"
                                                        name="phone_number" value="{{$users["phone_number"]}}">
                                                    {{-- Errors --}}
                                                    <div class="errors">
                                                        {{$errors->first('phone_number')}}

                                                    </div>

                                                    {{-- Errors End --}}
                                                </div>
                                            </div>

                                            <div>
                                                <div>
                                                    <button type="submit"
                                                       >Edit User</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                  
                <!-- #/ container -->

            </div>
            <!-- #/ container -->
        </div>
    
        @include('footer.footer')
     
    </div>
 

</body>

</html>