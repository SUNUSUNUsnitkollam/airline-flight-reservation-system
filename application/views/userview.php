
<!DOCTYPE html>
<html>
<head>
	<title>new</title>
</head>
<style>
	body{
		background-image:url("../img/6.jpg");
		background-size:cover;
		color:white;

	}
table,td,th{
	
	padding:10px;
	margin:80px;
	border-collapse:collapse;
	text-align:center;
	background-color: black;
	}
	h1{
		text-align:center;
		color:black;
	}	
</style>
<body>
	<a href="<?php echo base_url()?>first/adminpage">GO HOME</a>
	<h1>USERS</h1>
	<form method="post" action="">
	
	
	
		<table border="1">
		<thead>
		<tr>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>age</th>
		<th>Gender</th>
		<th>Address</th>
		<th>phone no</th>
		<th>Aadhar</th>
		<th>email</th>
		
</thead></tr>
<?php
if($n->num_rows()>0)
{
	foreach($n->result() as $row)
{
?>
<tr>
<td><?php echo $row->fname;?></td>
<td><?php echo $row->lname;?></td>
<td><?php echo $row->age;?></td>
<td><?php echo $row->gender;?></td>
<td><?php echo $row->address;?></td>
<td><?php echo $row->phno;?></td>
<td><?php echo $row->aadhar;?></td>
<td><?php echo $row->email;?></td>

<?php
}
}
else
{
	?>
	<tr>
		<td>no data found </td></tr>
		<?php


}
    ?>
</table>
</form>
</body>