<?php

/**
 * @author pakisab
 * @copyright 2017
 */

$account_type_id=mysqli_real_escape_string($CON, $_POST['account_type_id']);
$user_name=mysqli_real_escape_string($CON, $_POST['user_name']);
$password=mysqli_real_escape_string($CON, $_POST['password']);
$first_name=mysqli_real_escape_string($CON, $_POST['first_name']);
$middle_name=mysqli_real_escape_string($CON, $_POST['middle_name']);
$last_name=mysqli_real_escape_string($CON, $_POST['last_name']);
$address=mysqli_real_escape_string($CON, $_POST['address']);
$gender=mysqli_real_escape_string($CON, $_POST['gender']);

$sql='INSERT INTO `admin`(`username`, `password`, `admin_available_id`, `first_name`, `middle_name`, `last_name`, `address`, `gender`) 
    VALUES ("'.$user_name.'", "'.$password.'", "'.$account_type_id.'", "'.$first_name.'", "'.$middle_name.'", "'.$last_name.'", "'.$address.'", "'.$gender.'")';
$qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
?>
<h1 style="text-align: center;">Successfully Save!!!</h1>