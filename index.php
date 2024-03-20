<!DOCTYPE html>
<html>
<head>
	<style>
		table{
	border: 2px solid whitesmoke;
	background-color: white;
	border-radius: 8px;
	width: 1200px;
	height: 700px;
	border-color: white;
	}
input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
input[type=email], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
input[type=number], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
input[type=submit] {
  background-color: blue;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
}
</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>

	<center><table align="center"><tr><td>
	<form action="register.php" method="POST"><center>
		<h1>Employee Registration Form</h1>
		</center>
		Name:<br>
		<input type="text" name="Name" size="20"><br>
		Email:<br>
		<input type="Email" name="Email" size="20"><br>
		Department:<br>
       <select name="Department">
       	<option value="IT">IT</option>
       	<option>HR</option>
       	<option>Finance</option>
       	<option>Marketing</option>
       </select><br>
       Salary:<br>
      <input type="text" name="Salary" size="20"><br><br>
       <input type="submit" name="Register" value="Register">
	</form>
</td></tr></table></center>
    
</body>
</html>