<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style3.css">
</head>
<body>

<?php

/**
 * @author pakisab
 * @copyright 2017
 */
include('../config.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $txtUserName=addslashes($_POST['username']);
    $txtPassword=addslashes($_POST['password']);
    
$sql='SELECT * FROM `admin` WHERE username="'.$txtUserName.'" AND password="'.$txtPassword.'"';
$qry=mysqli_query($CON, $sql);
$row=mysqli_fetch_array($qry);
//$active=$row['username'];
$admin_id=$row['admin_id'];
$username=$row['username'];
$password=$row['password'];
$admin_available_id2=$row['admin_available_id'];

if($username==$txtUserName && $password==$txtPassword){
        /*$action='Log-out';
    
    
    $sql9='UPDATE `admin` SET `status`="'.$action.'" WHERE admin_id="'.$admin_id.'"';
    $qry9=mysqli_query($CON, $sql9) or die(mysqli_error($qry9));*/
}

/*if($username=='ralph' && $password=='ralph'){
        
    //echo '<div><h2>Welcome...</h2><a class="btn btn-primary" style="margin-left: -400px;margin-top: -60px;" href="index.php?page=room_rates">Admin</a></div>';
	

}*/

$result=mysqli_num_rows($qry);


//if($result==1){
    //session_register();
//    $_SESSION['username']=$txtUserName;
    
    /*echo '<div id="frm">
		  <a class="btn btn-primary" style="margin-left: -20px;margin-top: -90px;" href="'.$BASE_URL.'">User</a>
        </div>';*/
    
        
//}*/else{
    /*$error='<br><p style="color: red; text-align: center; margin-left: -400px;">Your username and password is Invalid!!!</p></br>';
    echo $error;
    echo '<br /><br /><br /><br /><br /><br /><br />';*/
    //}
//}

?>
<?php
if($result==0){
    $error='<br><p style="color: red; text-align: center; margin-left: -400px;">Your username and password is Invalid!!!</p></br>';
    echo $error;
    echo '<br /><br /><br /><br /><br /><br /><br />';
    
}else{
    
?>

	<div id="frm">
		<a id="btn" style="margin-left: 15px;/*! margin-bottom: 0px; */padding: 20px;" href="<?php echo $BASE_URL;?>index.php?page=reserve_books">USER</a>
    </div>

<?php
    }
}
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $txtUserName=addslashes($_POST['username']);
    $txtPassword=addslashes($_POST['password']);


//$sql='SELECT * FROM `admin` WHERE username="'.$txtUserName.'" AND password="'.$txtPassword.'"';
$sql='SELECT admin.admin_id, admin.username, admin.password, admin_available.admin_available
    FROM admin
    INNER JOIN admin_available
    ON admin_available.admin_available_id=admin.admin_available_id
    WHERE admin_available.admin_available="ADMIN"';
$qry=mysqli_query($CON, $sql);
$row=mysqli_fetch_array($qry);
//$active=$row['username'];
$admin_id=$row['admin_id'];
$username=$row['username'];
$password=$row['password'];
//$admin_available_id2=$row['admin_available_id'];
$admin_available=$row['admin_available'];

if($txtUserName==$username && $txtPassword==$username){
    //header('Location:'.$BASE_URL);
?>

<div id="frm">
		<a id="btn" style="margin-left: 15px;/*! margin-bottom: 0px; */padding: 20px;" href="<?php echo $BASE_URL;?>">ADMIN</a>
</div>
    
<?php
    }
}
?>    

</body>
</html>