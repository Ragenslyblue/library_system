<?php

/**
 * @author pakisab
 * @copyright 2017
 */

$student_id2=mysqli_real_escape_string($CON, $_POST['student_id2']);
$curr_date=mysqli_real_escape_string($CON, $_POST['curr_date']);
$month=mysqli_real_escape_string($CON, $_POST['month']);
$day=mysqli_real_escape_string($CON, $_POST['day']);
$year=mysqli_real_escape_string($CON, $_POST['year']);
$btn_submit=mysqli_real_escape_string($CON, $_POST['btn_submit']);

if($btn_submit=='BORROW BOOK'){
    $action3='borrow';
}
echo '<input type="hidden" value="'.$action3.'" />';

$val_return=$month.'/'.$day.'/'.$year;


foreach($_POST['check_books'] as $check_books){
  echo '<input type="hidden" value="'.$check_books.'" />';  

$sql='INSERT INTO `book_borrow`(`student_id`, `date_today`, date_return,`book_id`, status) 
    VALUES ("'.$student_id2.'", "'.$curr_date.'", "'.$val_return.'", "'.$check_books.'", "'.$action3.'")';
$qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
}

$sql_dates='SELECT * FROM `book_borrow`  WHERE book_borrow.student_id="'.$student_id2.'"';
$qry_dates=mysqli_query($CON, $sql_dates) or die(mysqli_error($qry_dates));
while($row=mysqli_fetch_array($qry_dates)){
    $book_borrow_id=$row['book_borrow_id'];
    $date_today=$row['date_today'];
    $date_return=$row['date_return'];
    
    $val_dates=$date_return-$date_today;
    //echo $val_dates;
}

$sql_select='SELECT * FROM `book` WHERE book.book_id="'.$check_books.'"';
$qry_select=mysqli_query($CON, $sql_select) or die(mysqli_error($qry_select));
while($row=mysqli_fetch_array($qry_select)){
    $book_id=$row['book_id'];
    $number_of_copies=$row['number_of_copies'];
    $status=$row['status'];
    }
    
foreach($_POST['check_books'] as $van){
        echo '<input type="hidden" value="'.$van.'" />';
    
    
$action2='Available...';
$action2='Not Available...';
    if($btn_submit=='BORROW BOOK'){
        $action2='Not Available...';
    }else{
        $action2='Available...';
    }
echo '<input type="hidden" value="'.$action2.'" />';

$sql_update='UPDATE `book` SET book.status="'.$action2.'" WHERE book.book_id="'.$van.'"';
$qry_update=mysqli_query($CON, $sql_update) or die(mysqli_error($qry_update));
}
?>

<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Successfully Borrow!!!</h4>

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
                        
                        <form action="<?php //echo $BASE_URL;?>index.php?page=search_book_borrower" method="post" enctype="multipart/form-data">
                        
                        <label>Borrow ID :  </label>
                        <input  name="student_id" value="" placeholder="Borrow ID" id="input-price" required="" class="form-control" type="text">
                        <br /><br />
                        <button type="submit" value="Search" name="Submit" class="btn btn-default">Search</button>&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="reset" class="btn btn-default">Reset</button>
                      
                      </form>
                      
                    </div>
                    
                </div>
                     </div>-->
                </div>
            </div>
        </div>
    </div>
    