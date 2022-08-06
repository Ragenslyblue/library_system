<?php

/**
 * @author pakisab
 * @copyright 2017
 */
ob_start();
include('../config.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $sql='DELETE FROM `book` WHERE book.book_id="'.$id.'"';
    $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
    
    if($qry){
        header('Location:'.$BASE_URL.'index.php?page=add_book');
    }
}
ob_end_flush();
?>