<?php
    include 'connect.php';
if (isset($_POST['Register'])) {
	$a=$_POST['Name'];
	$b=$_POST['Email'];
	$c=$_POST['Salary'];
	$d=$_POST['Department'];

	$sql="INSERT INTO `employees`(`id`, `names`, `emails`, `salary`, `department`)  VALUES (null,'$a','$b','$c','$d')";
	$result=mysqli_query($conn,$sql);
if($result){
	echo "Data has inserted successfully!";
}
else{
	echo mysqli_error($conn);
}
}
    ?>