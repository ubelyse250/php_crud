	<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	<?php
	$id=$_GET['id'];
	$conn=mysqli_connect("localhost","root","","employee");
	$sql=mysqli_query($conn,"SELECT * FROM employees where id='$id'");
	if($sql==true){
		while ($fet=mysqli_fetch_array($sql)) {
			?>
	<center><table align="center"><tr><td>
	<form action="updater.php" method="POST"><center>
		<h1>Employee Registration Form</h1>
		</center>
		Name:<br>
		<input type="text" name="Name" value="<?php echo $fet['names']?>"size="20"><br>
		Email:<br>
		<input type="Email" name="Email" value="<?php echo $fet['emails'];?>" size="20"><br>
		Department:<br>
       <select name="Department">
<option value="<?php echo $fet['department'];?>"><?php echo $fet['department'];?></option>
       	<option value="<?php echo $fet['emails'];?>">IT</option>
       	<option value="IT">IT</option>
       	<option value="HR">HR</option>
       	<option value="Finance">Finance</option>
       	<option value="Marketing">Marketing</option>
       </select><br>
       Salary:<br>
      <input type="text" name="Salary" size="20" value="<?php echo $fet['salary'];?>"><br><br>
      <input type="hidden" name="id" size="20" value="<?php echo $fet['id'];?>"><br><br>
       <input type="submit" name="update" value="update">
	</form>
</td></tr></table></center>
<?php
}}
?>

</body>
</html>

