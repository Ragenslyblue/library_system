<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style3.css">
</head>
<body>

<?php
include('../config.php');
/*if(isset($_POST['submit5'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$username = stripslashes($username);
	$password = stripcslashes($password);
	//$username = mysql_real_escape_string($username);
	//$password = mysql_real_escape_string($password);
	
	mysqli_connect("localhost", "root", "");
	mysqli_select_db("library_system");
	
	$result = mysqli_query("SELECT * FROM `admin` WHERE username='".$username."' AND password='".$password."'")
				or die("Failed to Query" .mysql_error());
	$row = mysqli_fetch_array($result);
	if($row['username'] == $username && $row['password'] == $password ){
		//echo "Login success!!! Welcome".$row['username'];
		header("Location:".$BASE_URL."index.php?page=settings");
	} else {
		echo "<h2><div style='text-align: center; color: red;'>---Failed to login---</div></h2>";
	}
}
*/
?>
<div id="frm">
		<center><h1> Login </h1></center>
		<form action="login2.php" method="POST" enctype="multipart/form-data">
		<p>
			<label>Username:</label>
			<!--<input type="text" id="user" name="username" required />-->
            <input name="username" value="" placeholder="Username" id="input-price" required="" class="form-control" type="text">
		</p>
		<p>
			<label>Password:</label>
			<!--<input type="password" id="pass" name="password" required />-->
            <input name="password" value="" placeholder="Password" id="input-price" required="" class="form-control" type="text">
		</p>
        <p>
            
            <input type="reset" style="float: left;margin-left: -10px;" id="btn" name="reset" value="Reset" />
			<input type="submit" id="btn" name="submit5" style="margin-top: -42px;" value="Login" />
		</p>
	</form>
</div>
</body>
</html>