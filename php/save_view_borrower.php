<?php

/**
 * @author pakisab
 * @copyright 2017
 */

$fines_value_id=mysqli_real_escape_string($CON, $_POST['fines_value_id']);
$total_fines=mysqli_real_escape_string($CON, $_POST['total_fines']);
$btn_pay=mysqli_real_escape_string($CON, $_POST['btn_pay']);

if($btn_pay=='Pay'){
    $action='paid';
}else{
    $action='unpaid';
}
echo '<input type="hidden" value="'.$action.'" />';

foreach($_POST['student_id'] as $stud_stud){
    echo '<input type="hidden" value="'.$stud_stud.'" />';

foreach($_POST['book_id'] as $book_book){
    echo '<input type="hidden" value="'.$book_book.'" />';

$sql='INSERT INTO `payment_borrowers`(`fines_value_id`, `book_id`, `student_id`, `total_fines`) 
    VALUES ("'.$fines_value_id.'", "'.$book_book.'", "'.$stud_stud.'", "'.$total_fines.'")';
$qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
         //}
    }
}

foreach($_POST['fines_value_id7'] as $fines_val_val){
	//echo $fines_val_val;
    echo '<input type="hidden" value="'.$fines_val_val.'" />';
	
$sql_updated='UPDATE `fines_value` SET `status`="'.$action.'" WHERE fines_value.fines_value_id="'.$fines_val_val.'"';
$qry_updated=mysqli_query($CON, $sql_updated) or die(mysqli_error($qry_updated));
}
?>
<h1 style="text-align: center;">Successfully Paid!!!</h1>