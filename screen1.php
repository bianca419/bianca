<?php
if (isset($_POST["submit"])) {
	
	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Number = $_POST['number'];
	$Username1 = $_POST['Username1'];


//start db connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "climedb";

//check db connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

//check db connection
if (!$conn) {
	die("connection failed" .mysqli_connect_error());
	
}else{
	echo "";
}

//end db connection
if (empty($Name) && empty($Email) && empty($Number) && empty($Username1)) {
	echo "please submit";
}else{
	$sql="INSERT INTO `createaccounttbl`(`name`, `email`, `number`, `username1`) VALUES ('$Name','$Email','$Number','$Username1')";
	if (mysqli_query($conn,$sql) == true ) {
		header("location:screen2.php");
	}else{
		echo "oops try again";
	}
}

}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>the clime</title>
</head>
<body>
<img src="images/logo3.png" id="img">
<br>
<form action="" method="POST">
<br>
<h1 id="cat2">create account</h1>
<br>
<form method="POST">
<label><input type="text" name="name"placeholder="name"  id="na"></label>
<br><br>
<label><input type="email" name="email" placeholder="email"  id="ema"></label>
<br><br>
<label><input type="text" name="number" placeholder="number"  id="nu"></label>
<br><br>
<label><input type="text" name="username1" placeholder="username1"  id="na"></label>
<br>
<br>
<a href="screen2.php">
<input id="sin" type="submit" name="submit" value="submit"></a>
<h2 id="aha">Already have an account?</h2>
</form>
<br>
<button id="sgb">
	 sign up with      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#ffc107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C12.955 4 4 12.955 4 24s8.955 20 20 20s20-8.955 20-20c0-1.341-.138-2.65-.389-3.917"/><path fill="#ff3d00" d="m6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C16.318 4 9.656 8.337 6.306 14.691"/><path fill="#4caf50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238A11.9 11.9 0 0 1 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44"/><path fill="#1976d2" d="M43.611 20.083H42V20H24v8h11.303a12.04 12.04 0 0 1-4.087 5.571l.003-.002l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917"/></svg>      
</button>
</form>
</body>

<style type="text/css">
	label{
		color: white;
	}
	body{
		background-color: black;
		text-align: center;
	}
#img{
	text-align: center;
	width: 200px;
	height: 200px;
	border-radius: 50px;
	margin-left: 35px;
	margin-bottom: 50px;
}
#na{
	text-align: center;
	width: 150px;
	height: 20px;
	border-radius: 50px;
	border-color: forestgreen;


}
#ema{
	text-align: center;
	width: 150px;
	height: 20px;
	border-radius: 50px;
	border-color: forestgreen;

}
#nu{
	text-align: center;
	width: 150px;
	height: 20px;
	border-radius: 50px;
	border-color: forestgreen;

}
#cat2{
	color: white;
}
#aha{
	color: white;
}
#sin{
	border-radius: 50px;
	text-align: center;
	width: 70px;
	height: 40px;
	border-color: forestgreen;
}
#sgb{
	margin-bottom: 50px;
}
</style>
</html>