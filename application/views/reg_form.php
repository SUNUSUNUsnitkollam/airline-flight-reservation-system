

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Booking Form</title>
    <link rel="stylesheet" href="style.css">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<style>
    .bi{
    background-image: url("../image/reg.jpg");
    background-size: cover;
}
.menubar{
     background-color:rgba(178,34,34,0.7);
      text-align:center;
      height:100px;
}

.menubar ul{
    list-style:none;
    display:inline-flex;
    padding:5px;
}
.menubar ul li a{
      color:white;
      text-decoration:none;
      padding:10px;
      font-size:18px;
      font-stretch:expanded; 
      font-weight:bold; 
      font-family: "Times New Roman", Times, serif;
  
}
.menubar ul li{
       padding:10px; 
       
}
a:hover{
      background-color:grey;
      border-radius:10px;
}
.submenu{
      display:none;  
     border-radius:10px; 

}
.menubar ul li:hover .submenu{
       
         display:block;
         position:absolute;
         background-color:#B22222;
         color:white;
         margin-left:-25px;
         padding:10px;
}
.submenu ul{
           display:block;
}
.submenu ul li{
             
             border-radius:10px; 
}
  
.bgcolor
{
  color:#B22222;
}
.navbar-brand img
{
  height: 50px;
  padding-left:30px;
}
#nav-bar
{
  position: sticky;
  top: 0;
  z-index: 10;
}
#form{
    background-color: #000;
    height:500px;
    width:700px;
    margin:auto;
    padding:20px;
    opacity: 0.7;
}
#form h3{
    border-bottom: 2px solid #3399ff;
    width:210px;
    padding: 5px;
}
::placeholder{
    color:#fff
}
#input #input-group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
   
#input3 #input-group{
    margin-left: 50px;
}

#input6 #input-group{
    width:300px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
#input6 #input-group1{
    width:615px;
    margin:5px;
    border-top: none;
    border-left: none;
    border-right: none;
    outline: none;
    background: transparent;
    color:#fff
}
</style>
<body>
		<nav class="menubar navbar navbar-expand-lg navbar-light">
  			<div class="container-fluid">
        		<a class="navbar-brand" href="#"><img src="../image/log.png"></a>
        			<h2>VELS AIR SERVICES</h2>
         			<ul>
         				 <li><a href="<?php echo base_url()?>first/searchf">HOME </a> </li>
         				 <li><a href="<?php echo base_url()?>first/searchf">ABOUT</a> </li>
          				<li><a href="<?php echo base_url()?>first/searchf">CONTACT</a></li> 
         			</ul>
   			</div>
		</nav>
		<section class="bi">
    <div class="container"><!--container-->

        <form class="form-group" action="<?php echo base_url()?>first/registrationForm" method="POST"><!--form-->
            <h1 class="text-center">Airline Booking Form</h1>

            <div id="form"><!--form-->
                <h3 class="text-white">Personal Details</h3>

            <div id="input"><!--input-->
                <input type="text" id="input-group" placeholder="First Name" name="fname"
                 pattern=".{3,}" required title="3 characters minimum" maxlength="25">
                <input type="text" id="input-group" placeholder="Last Name" name="lname"
                pattern=".{3,}"   required title="3 characters minimum"  maxlength="25">
                <input type="text" id="input-group" placeholder="Age" name="age"
                required minlength="1"maxlength="3">
               
                </div><!--input-->

               

                <div id="input3"><!--input3-->
                    <span id="input-group" class="text-primary">gender</span>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female" class="text-white">female</label>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male" class="text-white">male</label>
                </div><!--input3-->

                <div id="input6"><!--input6-->
                    <input type="text" id="input-group" placeholder="Address" name="address"
                     required minlength="10"maxlength="50">
                    <input type="number" id="input-group" placeholder="Phone Number" name="phno" required minlength="10"maxlength="12">
                    <input type="number" id="input-group1" placeholder="ADHAAR NUMBER" name="aadhar" required minlength="12"maxlength="12">
                    <input type="email" id="input-group1" placeholder="email" name="email">
                    <input type="password" id="input-group1" placeholder="password" name="password"
                    required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">

                </div><!--input6-->
                <button type="submit" class="btn btn-warning text-white">Submit Form</button>
                <button type="reset" class="btn btn-primary">Clear Form</button>
            </div><!--form-->

        </form><!--form-->

	<div class="form-group">
    <p class="text-white">Already a User? <a href="<?php echo base_url();?>first/log"><input type="button"  value="Login" class="btn btn-success btn-lg form-control w-25"></a></p>
	</div>
    </div><!--container-->
    </section>
</body>
</html>