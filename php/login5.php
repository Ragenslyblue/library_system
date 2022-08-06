<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style4.css">
</head>
<body>

<?php
/*include('../config.php');
if(isset($_POST['submit'])){

	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	$username = stripslashes($username);
	$password = stripcslashes($password);
	//$username = mysql_real_escape_string($username);
	//$password = mysql_real_escape_string($password);
	
	mysql_connect("localhost", "root", "");
	mysql_select_db("kingscollegelibrary");
	
	$result = mysql_query("select * from admin where username = '$username' and password = '$password'")
				or die("Failed to Query" .mysql_error());
	$row = mysql_fetch_array($result);
	if($row['username'] == $username && $row['password'] == $password ){
		header("Location:".$BASE_URL);
	} else {
		echo "<h2><div style='text-align: center; color: red;'>---Failed to login---</div></h2>";
	}
}*/
	?>

<?php
include('../config.php');
if(isset($_POST['submit'])){

	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	$username = stripslashes($username);
	$password = stripcslashes($password);
	//$username = mysql_real_escape_string($username);
	//$password = mysql_real_escape_string($password);
	
	mysql_connect("localhost", "root", "");
	mysql_select_db("kingscollegelibrary");
	
	$result = mysql_query("select * from admin where username = '$username' and password = '$password'")
				or die("Failed to Query" .mysql_error());
	$row = mysql_fetch_array($result);
	if($row['username'] == $username && $row['password'] == $password ){
		//echo "Login success!!! Welcome".$row['username'];
		header("Location:./save_login.php");
	} else {
		echo "<h2><div style='text-align: center; color: red;'>---Failed to login---</div></h2>";
	}
}
?>

	<div id="frm">
		<center><h1> Login </h1></center>
		<form action="../save_login.php" method="POST">
			<p>
			<label>Username:</label>
			<input type="text" id="user" name="user" required="" />
		</p>
		<p>
			<label>Password:</label>
			<input type="password" id="pass" name="pass" required="" />
		</p>
		<p>
			<input type="submit" id="btn" name="submit" value="Login" />
		</p>
	</form>
</div>
</body>
</html>