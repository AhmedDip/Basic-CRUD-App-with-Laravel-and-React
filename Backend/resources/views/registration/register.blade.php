<!DOCTYPE html>
<html lang="en">

@include('head.head', ['title' => 'Registration'])

<body>

    <style>
        .alert-danger {
            text-align: center;
        }
    </style


    <div>
        <div>
            <div>
                <div>
                    <div>
                        <div>
                            <div>

                                <a href="{{ route('registration.register')}}">
                                    <h4>Sign-in</h4>
                                </a>

                                <form method="post">

                                    @csrf
                                    <div>
                                        <input type="text" name="user_name" value="{{old('user_name')}}"
                                          {{old('')}} placeholder="User Name" required>
                                    </div>
                                    {{-- errors --}}
                                    <div>{{$errors -> first('user_name')}}</div>
                                    {{-- errors end --}}

                                    <div>
                                        <input type="text" value="{{old('phone_number')}}" name="phone_number"
                                             placeholder="Phone Number" required>
                                    </div>
                                    {{-- errors --}}
                                    <div>{{$errors -> first('phone_number')}}</div>
                                    {{-- errors end --}}

                                    <div>
                                        <input type="email" value="{{old('email')}}" name="email"
                                            placeholder="Email" required>
                                    </div>
                                    {{-- errors --}}
                                    <div>{{$errors -> first('email')}}</div>
                                    {{-- errors end --}}
                                    <div>
                                        <input type="password" name="password"
                                            placeholder="Password" required>
                                    </div>
                                    {{-- errors --}}
                                    <div>{{$errors -> first('password')}}</div>
                                    {{-- errors end --}}
                                    <div class="form-group">
                                        <input type="password" name="con_password"
                                            placeholder="Confirm password" required>
                                    </div>
                                    {{-- errors --}}
                                    <div>{{$errors -> first('con_password')}}</div>
                                    {{-- errors end --}}
                                    <div>
                                        <input type="text" name="address" value="{{old('address')}}"
                                            placeholder="Address" required>
                                    </div>
                                    {{-- errors --}}
                                    <div>{{$errors -> first('address')}}</div>
                                    {{-- errors end --}}
                                    <div>
                                        <label for="val-skill">User Type <span
                                                >*</span>
                                        </label>
                                        <div>
                                            <select id="val-skill" name="user_type">
                                                <option value="">User Type</option>
                                                <option value="student">Student</option>
                                                <option value="teacher">Teacher</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>{{$errors -> first('user_type')}}</div>
                                    <button submit w-100">Sign in</button>
                                </form>
                                <p>Have account <a href="{{ route('login.login')  }}"
                                        >Sign in
                                    </a>
                                    now</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


</body>

</html>