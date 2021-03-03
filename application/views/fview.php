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
  width:1420px;
  }

  td,tr,th{
  	
  	border:2px solid;
  }
.menubar{
     background-color:rgba(178,34,34,0.7);
      text-align:center;
      height:100px;
      width: 1420px;
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
	<form class="py-5" method="get" >
	<table>
		<tr>
			<th>FLIGHT ID</th>
			<th>FLIGHT NAME</th>
			<th>FLIGHT NUMBER</th>
			<th>DEPARTURE</th>
			<th>DEPARTURE DATE</th>
			<th>DEPARTURE TIME</th>
			<th>DESTINATION</th>
			<th>DESTINATION DATE</th>
			<th>DESTINATION TIME</th>
			<th>TOTAL BUSSINESS SEATS</th>
			<th>TOTAL FIRST CLASS SEATS</th>
			<th>TOTAL ECONOMIC SEATS</th>
			<th>TVAILABLE BUSSINESS SEATS</th>
			<th>AVAILABLE  FIRST CLASS SEATS</th>
			<th>AVAILABLE ECONOMIC SEATS</th>
			<th>COST</th>
			<th>CLICK</th>
			

			
		</tr>
	</thead>
	
		<?php 
		if($n->num_rows()>0)
		{
			foreach ($n->result() as $row)
			 {
				
		?>
				<tr>
					<td><?php echo $row->flid;?></td>
					<td><?php echo $row->airline;?></td>
					<td><?php echo $row->fl_number;?></td>
					<td><?php echo $row->departure;?></td>
					<td><?php echo $row->dep_date;?></td>
					<td><?php echo $row->dep_time;?></td>
					<td><?php echo $row->destination;?></td>
					<td><?php echo $row->dest_date;?></td>
					<td><?php echo $row->dest_time;?></td>
					<td><?php echo $row->btseats;?></td>
					<td><?php echo $row->ftseats;?></td>
					<td><?php echo $row->etseats;?></td>
					<td><?php echo $row->baseat;?></td>
					<td><?php echo $row->faseat;?></td>
					<td><?php echo $row->easeat;?></td>
					<td><?php echo $row->cost;?></td>
					<input type="hidden" value="<?php echo $row->flid;?>" name="id">
					<td><a href="<?php echo base_url();?>/first/idsave/<?php echo $row->flid;?>">register now</a></td>
					

				</tr>
					<?php
		
		}
	}
		
		?>
		</table>
		</form>
		<div class="container text-center py-5">
			<div class="row text-white">
				<div class="col-4">
					<div class="bg-dark">
						<i class="fas fa-plane fa-5x"></i>
						<h5>500 Daily flights</h5>
					</div>
				</div>
				<div class="col-4">
					<div class="bg-dark">
						<i class="fas fa-globe-africa fa-5x"></i>
						<h5>50 Domestic Destinations</h5>
					</div>
				</div>
				<div class="col-4">
					<div class="bg-dark">
						<i class="fas fa-walking fa-5x"></i>
						<h5>100+ Million happy customers</h5>
					</div>
				</div>
		</div>
	</div>

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