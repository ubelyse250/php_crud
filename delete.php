<?php
$conn=mysqli_connect("localhost","root","","employee");
if(isset($_GET['del'])){
// $delete='id';
	$delete=$_GET['del'];
$sql=mysqli_query($conn,"DELETE FROM employees WHERE id=$delete");
if($sql==true){
header("location:select.php");
}
}
mysqli_close($conn);
?>

