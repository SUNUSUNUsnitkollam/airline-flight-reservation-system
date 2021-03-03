<!DOCTYPE html>
<html>
<head>
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
.bi{
	background-image:url("../image/seat.jpg");
  background-size:cover;
  height:600px;
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
          <li><a href="<?php echo base_url()?>first/usernoti">NOTIFICATION</a></li>
          <li><a href="<?php echo base_url()?>first/searchf">CONTACT</a></li> 
         </ul>
    </div>
</nav>
<section class="bi">
		<?php 
		if($n->num_rows()>0)
		{
			foreach ($n->result() as $row)
			 {
				
		?>
			<center><form class="py-5" action="<?php echo base_url()?>first/demo" method="post">

			
		<table>
			<h1>SEE YOUR COST</h1>
			<tr><td>
				FLIGHT ID:</td><td><input type="text" name="flid"   value="<?php echo $row->flid;?>"></td></tr>
			<tr><td>
					
				 <tr><td>SEAT:</td><td>
				 	<?php

				 	if($o=='b')
				 	{
				 		?>

					<input type='text'name='seat' value='business' id='business'>
						<?php
					}
					else if($o=='e')
					{
					?>

					 <input type="text" name="seat" value="economic" id="economic">

					 <?php
								}
				else
					{

						?>

					 <input type="text" name="seat" value="first" id="economic">

					 <?php

					}

		

				


		if($m->num_rows()>0)
		{
			foreach ($m->result() as $row1)
			{
			
				
		?>

		<tr><td>
				name:</td><td><input type="text" name="name"   value="<?php echo $row1->fname;?>"></td></tr>
			<?php
			if((($row1->age))>10 or (($row1->age)>65))
			{
				?>
				<tr><td>COST:</td><td>
				 	<?php

				 	if($o=='b')
				 	{
				 		?>

					<input type='text'name='cost' value="<?php echo $row->bcost;?>"id='business'>
						<?php
					}
					else if($o=='e')
					{
					?>

					 <input type="text" name="cost" value="<?php echo $row->ecost;?>" id="economic">

					 <?php
								}
				else
					{

						?>

					 <input type="text" name="cost" value="<?php echo $row->fcost;?>" id="economic">

					 <?php

					}
				}
				else{
				if($o=='b')
				 	{
				 		?>

					<input type='text'name='cost' value="<?php echo $row->bccost;?>"id='business'>
						<?php
					}
					else if($o=='e')
					{
					?>

					 <input type="text" name="cost" value="<?php echo $row->eccost;?>" id="economic">

					 <?php

								}
				else
					{

						?>

					 <input type="text" name="cost" value="<?php echo $row->fccost;?>" id="economic">

					 <?php

					}
				}

					?>

			




			<?php
			}
		}
	}
}

		?>	

		<tr><td colspan="2" ><input type="submit" class="btn btn-primary mt-5" value="Are you ready for the payment" align="center"></td></tr>
		
		</table>
		</form>
	</section>	
</body>
</html>