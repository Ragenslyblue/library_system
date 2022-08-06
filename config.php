<?php

/**
 * @author pakisab
 * @copyright 2017
 */

global $CON;
global $BASE_URL;

//$BASE_URL='http://localhost/library_system2.com/login5.php';

$host='localhost';
$user='root';
$pass='';
//$database='kingscollegelibrary';
$database='library_system';

$CON=mysqli_connect($host, $user, $pass, $database);
if(!$CON){
    die('Error:'.mysqli_connect_error($CON));
}
?>