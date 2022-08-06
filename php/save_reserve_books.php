<?php

/**
 * @author pakisab
 * @copyright 2017
 */

$borrowers_id=mysqli_real_escape_string($CON, $_POST['borrowers_id']);
$btn_reserved=mysqli_real_escape_string($CON, $_POST['btn_reserved']);
//$btn_reserved2=mysqli_real_escape_string($CON, $_POST['btn_reserved']);

/*$sql_book='SELECT * FROM `book`';
$qry_book=mysqli_query($CON, $sql_book) or die(mysqli_error($qry_book));
while($row=mysqli_fetch_array($qry_book)){
    $book_idz=$row['book_id'];
    $number_of_copies=$row['number_of_copies'];
}

$action7='Not Available...';
$action7='Available...';
if($number_of_copies<1){
    $action7='Not Available...';
}
echo $action7;*/

if($btn_reserved=='RESERVED'){
    $action5='Reserved...';
}
echo '<input type="hidden" value="'.$action5.'" />';

if($btn_reserved=='RESERVED'){
    $action9='reserves';
}
//echo $action9;
echo '<input type="hidden" value="'.$action9.'" />';

foreach($_POST['check_books'] as $book_id2){
    echo '<input type="hidden" value="'.$book_id2.'" />';
    
/*$sql_dup='SELECT * FROM reserve_book WHERE reserve_book.book_id="'.$book_id2.'"';
$qry_dup=mysqli_query($CON, $sql_dup) or die(mysqli_error($qry_dup));
$num_rows=mysqli_num_rows($qry_dup);
if($num_rows==0){*/
    
$sql='INSERT INTO `reserve_book`(`book_id`, `student_id`, `status`) 
    VALUES ("'.$book_id2.'", "'.$borrowers_id.'", "'.$action9.'")';
$qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
    //}
}

foreach($_POST['check_books'] as $check_book_id){
    echo '<input type="hidden" value="'.$check_book_id.'" />';
    //echo $check_book_id;
    
    
$sql_update='UPDATE `book` SET `status`="'.$action5.'" WHERE book.book_id="'.$check_book_id.'"';
$qry_update=mysqli_query($CON, $sql_update) or die(mysqli_error($qry_update));
//}

$sql_dupp='SELECT * FROM `reserve_copies` WHERE reserve_copies.student_id="'.$borrowers_id.'" OR reserve_copies.book_id="'.$check_book_id.'"';
$qry_dupp=mysqli_query($CON, $sql_dupp) or die(mysqli_error($qry_dupp));
$num_rows7=mysqli_num_rows($qry_dupp);
if($num_rows7==0){
           
        }  
    }
//}

?>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Successfully Reserved!!!</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                </div>

            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <hr>
                     <!--<div class="Compose-Message">               
                <div class="panel panel-success" style="margin-right: -300px;margin-left: 300px;">
                    <div class="panel-body">
                        
                    </div>
                    
                </div>
                     </div>-->
                </div>
            </div>
        </div>
    </div>