<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!DOCTYPE html>
<html>
<head>
	<title>ticket generation</title>
</head>
<body>
		<?php 
		if($m->num_rows()>0)
		{
			foreach ($m->result() as $row)
			 {
				
		?>
			<form action="<?php echo base_url()?>first/storedetails" method="post">

			
		<table>
			
			<tr><td>
				FLIGHT ID:</td><td><input type="text" name="flid"   value="<?php echo $row->flid;?>"></td></tr>

			<tr><td>

				<tr><td>
				FLIGHT NAME:</td><td><input type="text" name="fname"   value="<?php echo $row->airline;?>"></td></tr>

			<tr><td>


				<?php

					
				 if($n->num_rows()>0)
		{
			foreach ($n->result() as $row1)
			{
			
				
		?>

		<tr><td>
				name:</td><td><input type="text" name="name"   value="<?php echo $row1->fname;?>"></td></tr>

				<tr><td>
				age:</td><td><input type="text" name="age"   value="<?php echo $row1->age;?>"></td></tr>


				<tr><td>
				amount:</td><td><input type="text" name="amount"   value="<?php echo $o;?>"></td></tr>

				<tr><td>
				seat:</td><td><input type="text" name="seat"   value="<?php echo $p;?>"></td></tr>
			<?php
			}
		}
	}
}

		?>	

		<tr><td colspan="2" ><input type="submit" value="generate my ticket" align="center"></td></tr>
		
		</table>
		</form>
		
</body>
</html>