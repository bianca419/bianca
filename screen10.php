<?php
if (isset($_POST['signup'])) {	
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password=$_POST['password'];

// start database connection
$servername='localhost';
$username='root';
$password='';
$dbname='registerdb';

//check connection
$conn = mysqli_connect($servsename, $username, $password, $dbname);
//check connection
if (!$conn) {
die("connection failed:"
 msqli_connection_error());
}else{
	echo "success";
}

//end db connection
if (empty($fullname) && empty($email) && empty($password)) {
	echo "All failed are required";
}else{
	$sql="INSERT INTO `registerdb`(`fullname`, `email`, `password`) VALUES (,'$fullname','$email','$password')";
	if( mysqli_query($conn ,$sql) == true){
header("location:register.php");
	}else{
		echo "Something went wrong.please try again...!";
   }
}

}else{
	echo "please submit your form";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>registerfrom</title>
</head>
<body>
<h1>register</h1>
<from method="post">
	<lable>enter you full name</lable>
	<input type= "text"name="fullname"><br><br>
	<label>email</label>
	<input type="text" name="email"><br><br>
	<label>password</label>
	<input type="text" name="password"><br><br>
	<a href="index.php"><input type="submit" name="signup" value="submit"></a>
</from>
</body>
</html>