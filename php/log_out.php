<?php

/**
 * @author pakisab
 * @copyright 2017
 */
include('../config.php');

session_start();
if(session_destroy()){
    header('Location: login5.php');
}


?>