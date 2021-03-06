<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => "Edit User"] )

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
    
   
            </div>
           

           
                            <div>
                                <h4>Edit Users</h4>
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
                                                    <span class="badge badge-warning px-2">
                                                        {{$user->account_Status}}</span>
                                                    @elseif ($user->account_Status == 'Block')
                                                    <span class="badge badge-danger px-2">
                                                        {{$user->account_Status}}</span>
                                                    @else
                                                    <span class="badge badge-success px-2">
                                                        {{$user->account_Status}}</span>
                                                    @endif

                                                </td>
                                                <td>
                                                    {{-- @method('DELETE') --}}
                                                    <div class="bootstrap-modal">
                                                        <!-- Button trigger modal -->
                                                        <a href="{{url('/dashbord/completeEdit/'.$user->id)}}"
                                                            class="btn btn-primary">Edit</a>
                                                        {{-- onclick="updateId('{{$user->id}}')" --}}
                                                    </div>
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
           



        <!-- #/ container -->
    </div>
    
    @include('footer.footer')

    </div>
 


    {{-- <script>
        function updateId(id) {
            $('#delete_user_id').val(id)
        }
    </script> --}}

</body>

</html>