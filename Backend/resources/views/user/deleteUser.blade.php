<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " Delete User "] )
<style>
        
        table,th,td,tr {
            border: 1px solid red;
            border-collapse: collapse;
        }
    </style>

<body>



    <div>

 
        @include('head.nav_header')
       
        @include('head.header')
    
        @include('sideBar.sideBar')
    
        

        
                            <div>
                                <h4>Delete</h4>
                                <div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>User Id</th>
                                                <th>User Name</th>
                                                <th>User type</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Acount Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)

                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->user_name}}</td>
                                                <td><span>{{$user->user_type}}</span>
                                                </td>
                                                <td>{{$user->address}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone_number}}</td>
                                                <td>
                                                    @if ($user->account_Status == 'pending')
                                                    <span>
                                                        {{$user->account_Status}}</span>

                                                    @elseif ($user->account_Status == 'Block')
                                                    <span>
                                                        {{$user->account_Status}}</span>

                                                    @else
                                                    <span>
                                                        {{$user->account_Status}}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <form method="POST" action="{{url('/dashbord/deleteUser')}}">
                                                        @csrf
                                                        {{-- @method('DELETE') --}}
                                                        <div class="bootstrap-modal">
                                                            <!-- Button trigger modal -->
                                                            <button type="submit" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#basicModal"
                                                                onclick="updateId('{{$user->id}}')">Delete</button>
                                                            <!-- Modal -->
                                                            <div>
                                                                <input type="hidden"
                                                                    name="delete_user_id" value="{{$user->id}}"></input>
                                                                <div class="modal-dialog" role="document">
                                                                    <div>
                                                                        
                                                                
                                                                        <!-- <div>
                                                                           
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Delete</button>


                                                                            {{-- <a type='submit' href="/dashbord/deleteUser"
                                                                                class="btn btn-primary">Delete</a> --}}
                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>

                                            @endforeach

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>User Id</th>
                                                <th>User Name</th>
                                                <th>User type</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Acount Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                                  </div>

        @include('footer.footer')

    </div>
   
   
    </div>

  
    <script>
        function updateId(id) {
            $('#delete_user_id').val(id)
        }
    </script>

</body>

</html>