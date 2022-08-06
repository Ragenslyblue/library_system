<?php

/**
 * @author pakisab
 * @copyright 2017
 */
include('../config.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $sql='DELETE FROM `student_student` WHERE student_student.student_student_id="'.$id.'"';
    $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
    
    if($qry==1){
        header('Location:'.$BASE_URL.'index.php?page=add_student');
    }
}

?>