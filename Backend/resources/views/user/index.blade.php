<?php

use Illuminate\Support\Facades\DB;
use App\Models\loginModel;
use App\Models\usersModel;

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
    
</body>

</html>