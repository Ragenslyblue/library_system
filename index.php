<?php

/**
 * @author pakisab
 * @copyright 2017
 */

include('./config.php');

include('php/header.php');

if(isset($_GET['page'])){
    $page=$_GET['page'];
}else{
    $page='admin_panel';
}
include('php/'.$page.'.php');

include('php/footer.php');

?>