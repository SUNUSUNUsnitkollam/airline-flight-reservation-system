<!DOCTYPE html>
<html>
<head>
	<title>Flight Notification</title>

	<style>
		
		fieldset{
			width:500px;
			height: 400px;
		}
	</style>
</head>
<body>
<a href="<?php echo base_url()?>first/adminpage">GO HOME</a>
<form method="post" action="<?php echo base_url()?>first/notify_action">
	<center>
		
		<fieldset>
			<h1>Flight notification</h1>
			Select Flight: 
			<select name="flight">
			<?php 
			if($n->num_rows()>0)
			{
				foreach($n->result() as $row)
					{
			?>
                
				<option value="<?php echo $row->flid;?>"><?php echo $row->airline?>
					
				</option>
			
			<?php
				}
			}
			?>
			</select><br><br>
			<textarea placeholder="Notification" name="noti"></textarea><br><br>
			<input type="submit" name="submit" value="Notify">

		</fieldset>
		<a href="<?php echo base_url()?>first/notiadmin">DELETE</a>

	</center>

</form>

</body>
</html>