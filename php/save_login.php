<?php

/**
 * @author pakisab
 * @copyright 2017
 */

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

if($username=='ralph' && $password=='ralph'){
        
        echo '<div><h2>Welcome...</h2><a class="btn btn-primary" style="margin-left: -400px;margin-top: -60px;" href="index.php?page=room_rates">Admin</a></div>';

}

$result=mysqli_num_rows($qry);


if($result==1){
    //session_register();
    $_SESSION['username']=$txtUserName;
    //echo '<br /><br /><br /><br />';
    echo '<div><a class="btn btn-primary" style="margin-left: -20px;margin-top: -90px;" href="index.php?page=registration">User</a></div>';
    echo '<br /><br /><br /><br /><br /><br /><br />';
    
        
}else{
    $error='<br><p style="color: red; text-align: center; margin-left: -400px;">Your username and password is Invalid!!!</p></br>';
    echo $error;
    echo '<br /><br /><br /><br /><br /><br /><br />';
    }
}

?>