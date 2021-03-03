<!DOCTYPE html>
<html>
<head>
  <title> FLIGHT VIEW</title>
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
.bi{
  background-color:#E0FFFF;
  background-size:cover;
  height:500px;
  }
   td,tr,th{
    
    border:2px solid;
  }
.menubar{
     background-color:rgba(178,34,34,0.7);
      text-align:center;
      height:100px;
}

.menubar ul{
    list-style:none;
    display:inline-flex;
    padding:10px;
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
       padding:5px; 
       
}
a:hover{
      background-color:grey;
      border-radius:5px;
}
.submenu{
      display:none;  
     border-radius:5px; 

}
.menubar ul li:hover .submenu{
       
         display:block;
         position:absolute;
         background-color:#B22222;
         color:white;
         margin-left:-15px;
         padding:5px;
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
<center> <table>
      <thead>
       <h1> UPDATE PROFILE</h1>
      </thead>
      <tbody>
      <body>

    <center><form method="post" action="<?php echo base_url()?>first/update">

        <?php 
    if(isset($user_data)) 
    {
      foreach($user_data->result() as $row1)
      {
      ?>
      <tr>
     <h1>Updation form</h1>
      <tr><td>
        FIRST NAME:</td><td><input type="text" name="fname" placeholder="firstname" pattern=".{3,}"  value="<?php echo $row1->fname;?>" required title="3 characters minimum" maxlength="25"></td></tr>
      <tr><td>
        LAST NAME:</td><td><input type="text" name="lname"  placeholder="lastname" pattern=".{3,}"  value="<?php echo $row1->lname;?>" required title="3 characters minimum"  maxlength="25"></td></tr>
      <tr><td>
        AGE:</td><td><input type="text" name="age" placeholder="age"  value="<?php echo $row1->age;?>"required minlength="1"maxlength="3"></td></tr>
        <tr><td>
               GENDER:</td><td><select name="gender">
              <option><?php echo $row1->gender;?></option>
              <option>Male</option>
              <option>Female</option>
            </select> </td></tr>
            <tr><td>
        ADDRESS:</td><td><textarea name="address"> <?php echo $row1->address;?></textarea></td></tr>
      <tr><td>  
        PHONE NUMBER:</td><td><input type="text" name="phno"  placeholder="phoneno" value="<?php echo $row1->phno;?>"required minlength="10"maxlength="12"></td></tr>
      <tr><td>  
        AADHHAR NUMBER:</td><td><input type="text" name="aadhar"  placeholder="Aadhar number"  value="<?php echo $row1->aadhar;?>"required minlength="12"maxlength="12"></td></tr>
      <tr><td>  
        EMAIL ID:</td><td><input type="email" name="email" value="<?php echo $row1->email;?>" required></td></tr>
    <tr><td>
        </td><td><input type="SUBMIT" name="update" value="update"align="center"> </td>  
        </tr> 
  </form>
  </tbody>
</body>
</table>
<?php
          }
        } 
        ?>
</section>
  </html>




