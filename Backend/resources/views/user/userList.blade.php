<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " User Lists--Portal "] )

<body>

    <style>
        .message {
            text-align: center;
            font-size: 25px;
        }
        table,th,td,tr {
            border: 1px solid red;
            border-collapse: collapse;
        }
    </style>

    <div id="main-wrapper">

   
        <!-- @include('head.nav_header')
    
           
        @include('head.header')-->
   
        @include('sideBar.sideBar') 
     
        <div>

            <div>
                <div>
                    <ol>
                        <li><a href="javascript:void(0)">Dashboard</a></li>
                        <li><a href="javascript:void(0)">User List</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div>
                <div>{{session("edit")}}</div>
                <div>{{session("unblock")}}</div>
                <div>{{session("block")}}</div>
                <div>{{session("msg")}}</div>
                <div>{{session("approve")}}</div>

        
                <div>
                    <div>
                        <div>
                            <div>

                                <h4>User Lists</h4>
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
                                            </tr>
                                        </thead>
                                        <tbody id="table_body">
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
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!-- #/ container -->
    </div>
    <!--**********************************
            Content body end
        ***********************************-->


    <!--**********************************
            Footer start
        ***********************************-->
    @include('footer.footer')
    <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    @include('scripts.scripts')






</body>

</html>