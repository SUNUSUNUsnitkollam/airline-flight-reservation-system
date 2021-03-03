<!DOCTYPE html>
<html>
<head>
<title> Login</title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
<style>
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
.log{
margin-top:150;
   }
   .btn{
    margin-left:170px;
   }
   /*.body{
    background-color:#;
   }*/
</style>
</head>
<body class="body">
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
<div class="container py-5">
<div class="row">
<div class="col-7">
<img src="../image/log.jpg" alt="sample" class="img-fluid">
</div>
<div class="col-5">
<form action="<?php echo base_url()?>first/login" method="post">
<fieldset class="form-group border p-3 log">
       <legend class=" px-2">Login</legend>
  <div class="row mb-3">
    <label for="Email" class="col-sm-2 col-form-label">Email</label>
     <div class="col-sm-10">
      <input type="email" class="form-control" id="Email" name="email">
     </div>
  </div>
  <div class="row mb-3">
       <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="password">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">LOGIN</button>
  </fieldset>
  </form>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">

</script>
<script src="js/script.js"></script>
</body>
</html>