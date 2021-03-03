	<!DOCTYPE html>
<html>
<head>
<title>login</title>
<<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="css/style.css">
</head>
<style>
	form
	{
		border:2px solid;
		margin-left:400px;
		width:400px;
		text-align:center;

	}
	input
	{
		padding:10px;
		margin:20px;
	}
	*{
  padding:0px;
  margin:0px;
}
.bi{
  background-image:url(../image/f1.png);
  background-size:cover;
  height:500px;
  }
  td,tr{
  	padding:10px;
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
</style>
<body>
	<nav class="menubar navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../image/log.png"></a>
        <h2>VELS AIR SERVICES</h2>
         <ul>
          <li><a href="#">HOME </a> </li>
          <li><a href="#about">ABOUT</a> </li>
           <li><a href="<?php echo base_url()?>first/log">LOGIN</a> </li>
          <li><a href="#contact">CONTACT</a></li> 
         </ul>
    </div>
</nav>
<section class="py-5 bi">
	<div class="col-12">

     <marquee width="40%" direction="right" height="100px" vspace="30%">
            <p class="text-justify "><h2 class="bgcolor">Welcome to Vels Air Services</h2>
            	<h3>Fly Stress-Free,Stay Lavishly</h3><p>        
</marquee>  
 </div>

	<form method="post" action="<?php echo base_url()?>first/searchaction">
		<center><table class="h-10">
			<tr><td>
				DEPARTURE:</td><td><select name="dep">
					<option>TRIVANDRUM</option> 
					<option>KOCHI</option> 
					<option>KOZHIKODE</option> 
					<option>KANNUR</option> 
				</select>
				</td></tr>
			</tr>
			<tr><td>
				DESTINATION:</td><td><select name="dest">
					<option>TRIVANDRUM</option> 
					<option>KOCHI</option> 
					<option>KOZHIKODE</option> 
					<option>KANNUR</option> 
				</select>
				</td></tr>
		<tr>
				<td>DATE</td>
		<td><input type="date" name="sdate" placeholder="DATE OF JOURNEY"></td>
			</tr>
		<tr>
		<td><input type="submit" name="submit" value="ok"></td>
		</tr>
		</table>
	</form>
	</section>
	<section class="py-3">
	<div class="container">
		<div class="row">
			<h4 class="text-center py-3 text-danger">Partner Airlines</h4>
			<div class="col-3">
				<div class="card" style="width: 16rem;">
					<h4>IndiGo</h4>
  					<img src="../image/jet.jpg">
 				</div>
				
			</div>
			<div class="col-3">
				<div class="card" style="width: 16rem;">
					<h4>Jet Airways</h4>
  					<img src="../image/ind.png">
 				</div>
				
			</div>
			<div class="col-3">
				<div class="card" style="width: 16rem;">
					<h4>SpiceJet</h4>
  					<img src="../image/sp.jpeg">
 				</div>
				
			</div>
			<div class="col-3">
				<div class="card" style="width: 16rem;">
					<h4>Air India</h4>
  					<img src="../image/air.jpg">
 				</div>
			</div>
		</div>
	</div>
</section>
<section class="py-5 text-dark" id="about">
	<h2 class="text-center"> About Us</h2>
	<p class="text-justify col-12">Vels Air Services has a total destination count of 50 with 40 domestic destinations and 24 International. We primarily operate in India’s domestic air travel market as a low-cost carrier with focus on our three pillars – offering low fares, being on-time and delivering a courteous and hassle-free experience. IndiGo has become synonymous with being on-time. We are constantly enhancing our engagement with our passengers to augment their travel experience.Our Corporate Social Responsibility (CSR) initiative VelsReach focuses on three broad themes: Children and Education, Women Empowerment and Environment. We work towards upliftment of communities not just around us but also far-flung areas in the country. After all, India’s holistic progress is rooted in the collective aspirations of its people.
		
	</p>
</section>

<section id="contact" class="py-5 bg">
	<div class="container">
		<div class="row text-center">
			<h2>Contact Us</h2>
			<div class="col-6">
				<h3>Corporate Office</h3>
				<p>Upper Ground Floor, Takur House, Gate No. 2
				<p> Western Wing,130- Janpath, New Delhi – 256985 India.
				<p><i class="fas fa-phone-volume"></i> Fax : +91 11-43513200</p>
				<p>To share your feedback/complaints/suggestions or to reach out to our Customer Relations Team  +91 8086800203</p>
				<p><i class="fas fa-envelope-square"></i>contact@velsair.in</p>
			</div>
			<div class="col-6 text-left">
				<h2>Registered Office</h2>
				<p>MLR 44, Mangalam Lane,</p>
				<p> Global Business Park,Gurgaon – 122 002, Haryana, India.</p>
				<p><i class="fas fa-phone-volume"></i> +91 (0)124 435 2500</p>
				<p>Nodal Officer, Pareker Gera at nodalofficer@velsair.in</p>
				<p> <i class="fas fa-envelope-square"></i> contact@velsair.in</p>
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