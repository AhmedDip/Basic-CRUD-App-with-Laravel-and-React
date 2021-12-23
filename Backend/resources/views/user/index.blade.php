<?php

use Illuminate\Support\Facades\DB;
use App\Models\loginModel;
use App\Models\usersModel;
// use App\Models\requestsModel;

// if (session('user_type') == 'admin') {
//                 //-----------------statistics--------------------------
//                 $client_number = usersModel::where('account_Status', '<=', 'active')
//                                              ->count();
             
//                 $pending_user = usersModel::where('account_Status',  'pending')->count();


//                 $data = [
//                     'client_number' =>  $client_number,
                
//                     'pending_user'   => $pending_user
//                 ];
             
//             }else {
//                $data = [
//                   'client_number' =>  0,
//                  'pending_user'   => 0
            
//               ];
//             }
?>


<!DOCTYPE html>
<html lang="en">

@include('head.head' , ['title' => " Welcome | Dashbord "] )

<body>
 

  
    <div>

      
        @include('head.nav_header')
        
        @include('head.header')
       
        @include('sideBar.sideBar')
     



    </div>
   
    @include('footer.footer')
   
    </div>
    
    @include('scripts.scripts')

</body>

</html>