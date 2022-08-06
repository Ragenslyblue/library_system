<?php

/**
 * @author pakisab
 * @copyright 2017
 */

include('config.php');

$book_borrow_id=mysqli_real_escape_string($CON, $_POST['book_borrow_id']);
//$book_book_id=mysqli_real_escape_string($CON, $_POST['book_book_id']);
$student_id=mysqli_real_escape_string($CON, $_POST['student_id']);
$fines_value=mysqli_real_escape_string($CON, $_POST['fines_value']);
$btn_return=mysqli_real_escape_string($CON, $_POST['btn_return']);

if($btn_return=='RETURN BOOK'){
    $action4='return';
}
echo '<input type="hidden" value="'.$action4.'" />';

if($btn_return=='RETURN BOOK'){
    $action7='unpaid';
}
echo '<input type="hidden" value="'.$action7.'" />';

foreach($_POST['check_books'] as $booky){
   echo '<input type="hidden" value="'.$booky.'" />';

$sql8='INSERT INTO `fines_value`(`book_id`, `student_id`, `book_borrow_id`, `fines`, `status`) 
        VALUES ("'.$booky.'", "'.$student_id.'", "'.$book_borrow_id.'", "'.$fines_value.'", "'.$action7.'")';
$qry8=mysqli_query($CON, $sql8) or die(mysqli_error($qry8));
}

foreach($_POST['check_books'] as $check_booksw){
    echo '<input type="hidden" value="'.$check_booksw.'" />';

$sql_updated='UPDATE `book_borrow` SET `status`="'.$action4.'" WHERE book_borrow.book_id="'.$check_booksw.'"';
$qry_updated=mysqli_query($CON, $sql_updated) or die(mysqli_error($qry_updated));
}

if($btn_return=='RETURN BOOK'){
    $action21='Available...';
}else{
    $action21='Not Available...';
}
echo '<input type="hidden" value="'.$action21.'" />';

foreach($_POST['check_books'] as $check_books){
    echo '<input type="hidden" value="'.$check_books.'" />';

$sql_updates='UPDATE `book` SET `status`="'.$action21.'" WHERE book.book_id="'.$check_books.'"';
$qry_updates=mysqli_query($CON, $sql_updates) or die(mysqli_error($qry_updates));
}

echo '<input type="hidden" value="'.$fines_value.'" />';

?>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">View Calculated Fines</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                </div>

            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <hr>
                     <div class="Compose-Message">               
                <div class="panel panel-success" style="margin-right: -300px;margin-left: 300px;">
                    <div class="panel-body">
                       
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Calculated Fines
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Book Title</th>
                                            <th>Borrower's Name</th>
                                            <th>Date Borrow</th>
                                            <th>Date to Return</th>
                                            <th>Date Late</th>
                                            <th>Fines</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        
                                        <?php
                                         include('config.php');
                                         
                                         $sql9='SELECT fines_value.fines_value_id, book.book_name, student.first_name, student.last_name, book_borrow.date_today, book_borrow.date_return,  book_borrow.date_value, fines_value.fines
                                            FROM fines_value
                                            INNER JOIN book
                                            ON book.book_id=fines_value.book_id
                                            INNER JOIN student
                                            ON student.student_id=fines_value.student_id
                                            INNER JOIN book_borrow
                                            ON book_borrow.book_borrow_id=fines_value.book_borrow_id
                                            
                                            WHERE fines_value.student_id="'.$student_id.'" AND book_borrow.status="return" AND fines_value.fines="'.$fines_value.'"';
                                         $qry9=mysqli_query($CON, $sql9) or die(mysqli_error($qry9));
                                         $total_fines=0;
                                         $book_items='';
                                         while($row=mysqli_fetch_array($qry9)){
                                            $fines_value_id=$row['fines_value_id'];
                                            $book_name=$row['book_name'];
                                            $first_name=$row['first_name'];
                                            $last_name=$row['last_name'];
                                            $date_today=$row['date_today'];
                                            $date_return=$row['date_return'];
                                            $date_value=$row['date_value'];
                                            $fines=$row['fines'];
                                            //$staff_type_id=$row['staff_type_id'];
                                            //$staff_type=$row['staff_type'];
                                            
                                            foreach($qry9 as $book_totals):
                                                $book_number_total=$book_totals['book_name'];
                                                $book_items=$book_number_total.', '.$book_items;
                                             endforeach;
                                            
                                            $total_fines+=$fines;
                                            
                                         }
                                         ?>
                                        
                                            <td><?php echo $book_items; ?></td>
                                            <td><?php echo $first_name.' '.$last_name; ?></td>
                                            <td><?php echo $date_today; ?></td>
                                            <td><?php echo $date_return; ?></td>
                                            <td><?php echo $date_value; ?></td>
                                            <td><?php echo $fines; ?></td>
                                        </tr>
                                        
                                    </tbody>
                                    
                                </table>
                                <!--<a href="<?php //echo $BASE_URL;?>index.php?page=unpaid_borrowers" style="float: right;" class="btn btn-default">Next Page</a>-->
                                
                                <div><h3 style="color: white;">Total Fines: <?php echo $total_fines; ?></h3></div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    