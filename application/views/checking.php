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
			<center><form class="py-5" action="<?php echo base_url()?>first/cost" method="post">

			
		<table>
			<h1>CHECK SEAT AVAILABILITY</h1>
			<tr><td>
				FLIGHT ID:</td><td><input type="text" name="flid"   value="<?php echo $row->flid;?>"></td></tr>
			<tr><td>
				AVAILABLE BUSINESS SEAT:</td><td><input type="text" name="baseat"   value="<?php echo $row->baseat;?>"></td></tr>
			<tr><td>
				AVAILABLE ECONOMIC SEAT:</td><td><input type="text" name="easeat"value="<?php echo $row->easeat;?>"></td></tr>
				<tr><td>
				AVAILABLE FIRSTCLASS SEAT:</td><td><input type="text" name="faseat" value="<?php echo $row->faseat;?>" id="male"></td></tr>

				<?php
					if($row->seatsa>0)
					{
						?>
					
				 <tr><td>SELECT YOUR SEAT:</td>

					<?php
					if($row->baseat>0)
					{
						?>

					<td><input type='radio'name='seat' value='b' id='business'>
					<label for='business'>business</label>
					 
					<?php
				
								}
				if($row->easeat>0)
					{

						?>

					 <input type="radio" name="seat" value="e" id="economic">
					<label for="economic">economic</label>

					<?php
				
				}
				if($row->faseat>0)
					{
						?>
					
					<input type='radio' name='seat'value='f' id='first'>
					<label for='first'>first</label></td>
					<?php
				}

			}

					else
					{
						?>
						<tr><td>NO SEATS AVAILABLE:</td>
				
					<?php
					}
					?>
				</tr>
				<?php
		
		}
	}
		
		?>

				<tr><td colspan="2" ><input type="submit" value="click to view your cost" align="center"></td></tr>


				
					
		</table>
		</form>
		</section>
			<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">
		
</body>
</html>