<?php

    include 'connect.php';
	$a=$_POST['Name'];
	$b=$_POST['Email'];
	$c=$_POST['Salary'];
	$d=$_POST['Department'];
	$id=$_POST['id'];
	$sql="UPDATE `employees` SET `names`='$a',`emails`='$b',`salary`='$c',`department`='$d' WHERE id='$id'";
	$result=mysqli_query($conn,$sql);
	?>