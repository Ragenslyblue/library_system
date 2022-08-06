<?php
include('config.php');

$book_id=mysqli_real_escape_string($CON, $_POST['book_id']);
//$number_copies=mysqli_real_escape_string($CON, $_POST['number_copies']);
//$number_copies_curr=mysqli_real_escape_string($CON, $_POST['number_copies_curr']);
$btn_Submit=mysqli_real_escape_string($CON, $_POST['btn_Submit']);

$action='Available...';
if($btn_Submit=='Submit'){
    $action='Available...';
}
echo '<input type="hidden" value="'.$action.'" />';

//$num_val=$number_copies+$number_copies_curr;

$sql_update='UPDATE `book` SET book.status="'.$action.'" WHERE book.book_id="'.$book_id.'"';
$qry_update=mysqli_query($CON, $sql_update) or die(mysqli_error($qry_update));

?>

<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Successfully Replace!!!</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                </div>

            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <hr>
                     
                </div>
            </div>
        </div>
    </div>
    