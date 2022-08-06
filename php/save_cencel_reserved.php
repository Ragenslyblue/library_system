<?php

/**
 * @author pakisab
 * @copyright 2017
 */

$btn_cancel=mysqli_real_escape_string($CON, $_POST['btn_cancel']);

//$action2='Available...';
if($btn_cancel=='Cancel Book Reservation'){
    $action2='Available...';
}
echo '<input type="hidden" value="'.$action2.'" />';

foreach($_POST['check_book2'] as $book_bookr2){
    echo '<input type="hidden" value="'.$book_bookr2.'" />';
    
$sql='UPDATE `book` SET `status`="'.$action2.'" WHERE book.book_id="'.$book_bookr2.'"';
$qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
}

if($btn_cancel=='Cancel Book Reservation'){
    $action7='unreserves';
}
echo '<input type="hidden" value="'.$action7.'" />';

foreach($_POST['check_book2'] as $book_bookr3){
    echo '<input type="hidden" value="'.$book_bookr3.'" />';

$sql5='UPDATE `reserve_book` SET `status`="'.$action7.'" WHERE reserve_book.book_id="'.$book_bookr3.'"';
$qry5=mysqli_query($CON, $sql5) or die(mysqli_error($qry5));
}

?>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Cancel Reservation Successful!!!</h4>

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
                        
                        <label>Borrower ID :  </label>
                        <input  name="student_id" value="" placeholder="Borrower ID" id="input-price" required="" class="form-control" type="text">
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
    