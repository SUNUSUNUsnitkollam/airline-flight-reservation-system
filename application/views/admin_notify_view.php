<!DOCTYPE html>
<html>
<head>
	<title>Admin Notification View</title>
	<style>
		table,th,td{
			border:1px solid;
			border-collapse: collapse;
		}
	</style>
</head>
<body>

	<table>
		<thead>
			<tr>
				<th>Flight Number</th>
				<th>Flight  Name</th>
				<th>Notification</th>
				<th>DELETE</th>
				<!--<th>UPDATE</th>-->
			</tr>
		</thead>

		<tbody>
			<?php
		if($n->num_rows()>0)
		{
			foreach($n->result() as $row)
					{
		?>
						<tr>
							<td><?php echo $row->fl_number ;?></td>
							<td><?php echo $row->airline;?></td>
							<td><?php echo $row->notification;?></td>
							<td><a href="<?php echo base_url()?>first/notify_delete/<?php echo $row->flid;?>">Delete</a></td>
							<!--<td><a href="<?php echo base_url()?>first/admin_update/<?php echo $row->flid;?>">Update</a></td>-->
							</tr>
			<?php
				}
			}
			?>

			
		</tbody>
	</table>

</body>
</html>