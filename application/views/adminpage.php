<!DOCTYPE html>
<html>
    <head>
        <title>ADMIN HOMEPAGE</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="css/style.css">
    </head>
    <style>
        .top1{
        background-color:white;
      }  
      .back{
        background-color:rgba(0,0,0,0.7);
        width:50%;


      }
      body{
        background-image:url("../image/adm.jpg");
        background-size:cover; 
        background-repeat:no-repeat;
        }
        h2{
            text-align:center;
        }
    </style>
<body>
    
    <!---menu-section--->
<nav class="navbar navbar-expand-lg top1">
    <div class="container">
        <a href="" class="text-decoration-none text-dark">Online Flight Booking
        <i class="fas fa-plane-departure"></i></a>
        <div>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="<?php echo base_url()?>first/log" class="nav-link text-dark">Logout
                <i class="fas fa-sign-out-alt text-dark"></i></a></li>
                
            </ul>
            
        </div>
    </div>
</nav>

       
            <div class="col-2">
                <div class="back">
                    <ul style="list-style:none">
                        <li><a href="<?php echo base_url()?>first/searchf" class="nav-link text-white"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="<?php echo base_url()?>first/flight"class="nav-link text-white"> <i class="fas fa-plane-departure"></i> Flight</a></li>
                        <li><a href="<?php echo base_url()?>first/airport" class="nav-link text-white"><i class="fa fa-map-marked-alt"></i> Airport</a></li>
                        <li><a href="<?php echo base_url()?>first/fllview" class="nav-link text-white"><i class="fa fa-building"></i> Airline</a></li>
                        <li><a href="<?php echo base_url()?>first/User" class="nav-link text-white"><i class="fa fa-users"></i>Users</a></li>
                        <li><a href="<?php echo base_url()?>first/flightname" class="nav-link text-white"><i class="fa fa-users"></i>Notification</a></li>
                    </ul>

                 </div>

             </div>
            <h1 class="text-dark text-end text-white">Welcome Back Administrator!</h1>  
</body>
</html>