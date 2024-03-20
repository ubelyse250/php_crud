<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>select</title>
	<style >
		#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: blue;
  color: white;
}
	</style>
</head>
<body>
	<table id="customers">
		<tr><th>name</th>
		<th>email</th>
	    <th>salary</th>
        <th>department</th>
        <th>action</th></tr>
	<?php
	$conn=mysqli_connect("localhost","root","","employee");
	$sql=mysqli_query($conn,"SELECT * FROM employees");
	if($sql==true){
		while ($fet=mysqli_fetch_array($sql)) {
			?>
			<tr>
				<td><?php echo $fet['names'];?></td>
				<td><?php echo $fet['emails'];?></td>
				<td><?php echo $fet['salary'];?></td>
				<td><?php echo $fet['department'];?></td>
				<td><a  href="delete.php ? del=<?php echo $fet['id'];?>">Delete
				<a href="update.php ? id=<?php echo $fet['id'];?>">Edit</a></td>
				<?php
						}
	              }
	               mysqli_fetch_array($sql);
	            ?>
                 
			</tr>

	</table>


</body>
</html>