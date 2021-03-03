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
		if($n->num_rows()>0)
		{
			foreach ($n->result() as $row)
			 {
				
		?>
			<form action="<?php echo base_url()?>first/home" method="post">

			
		<table>

			<tr><td>
				TICKET NUMBER:</td><td><input type="text" name="flno"   value="<?php echo $row->id;?>"></td></tr>

			
			<tr><td>
				FLIGHT ID:</td><td><input type="text" name="flid"   value="<?php echo $row->flid;?>"></td></tr>

			<tr><td>

				<tr><td>
				FLIGHT NAME:</td><td><input type="text" name="fname"   value="<?php echo $row->fname;?>"></td></tr>

			<tr><td>

		<tr><td>
				name:</td><td><input type="text" name="name"   value="<?php echo $row->name;?>"></td></tr>

				<tr><td>
				age:</td><td><input type="text" name="age"   value="<?php echo $row->age;?>"></td></tr>


				<tr><td>
				amount:</td><td><input type="text" name="amount"   value="<?php echo $row->amount;?>"></td></tr>

				<tr><td>
				seat:</td><td><input type="text" name="seat"  value="<?php echo $row->seat;?>"></td></tr>
			<?php
			}
		
	
}

		?>	

		<tr><td colspan="2" ><input type="submit" value="Thank you" align="center"></td></tr>
		
		</table>
		</form>
		
</body>
</html>