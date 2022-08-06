<?php

/**
 * @author pakisab
 * @copyright 2017
 */
$book_id=mysqli_real_escape_string($CON, $_POST['book_id']);
$borrowers_id=mysqli_real_escape_string($CON, $_POST['borrowers_id']);
$book_cost=mysqli_real_escape_string($CON, $_POST['book_cost']);
//$number_of_copies=mysqli_real_escape_string($CON, $_POST['number_of_copies']);
@$btn_damage=mysqli_real_escape_string($CON, $_POST['btn_damage']);
@$btn_lost=mysqli_real_escape_string($CON, $_POST['btn_lost']);
//$book_cost=mysqli_real_escape_string($CON, $_POST['book_cost']);

//$sum=$book_cost*$number_of_copies;

if($btn_damage=='DAMAGE'){
    $action='Damage...';
}else if($btn_lost=='LOST'){
    $action='Lost...';
}else{
    $action='Available...';
}
echo '<input type="hidden" value="'.$action.'" />';

$sql='INSERT INTO `damage_lost_book`(`book_id`, `student_id`, `amount`) 
    VALUES ("'.$book_id.'", "'.$borrowers_id.'", "'.$book_cost.'")';
$qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));

$sql_update='UPDATE `book` SET `status`="'.$action.'" WHERE book.book_id="'.$book_id.'"';
$qry_update=mysqli_query($CON, $sql_update) or die(mysqli_error($qry_update));
?>

<?php
$sql_retrieve='SELECT student.student_id, student.first_name, student.last_name, staff_type.staff_type
    FROM student
    INNER JOIN staff_type
    ON staff_type.staff_type_id=student.staff_type_id
    WHERE student.student_id="'.$borrowers_id.'"';
$qry_retrieve=mysqli_query($CON, $sql_retrieve) or die(mysqli_error($qry_retrieve));
while($row=mysqli_fetch_array($qry_retrieve)){
    $student_id2=$row['student_id'];
    $first_name=$row['first_name'];
    $last_name=$row['last_name'];
    $staff_type=$row['staff_type'];
}

$sql_booky='SELECT * FROM `book` WHERE book.book_id="'.$book_id.'"';
$qry_booky=mysqli_query($CON, $sql_booky) or die(mysqli_error($qry_booky));
while($row=mysqli_fetch_array($qry_booky)){
    $book_id2=$row['book_id'];
    $book_price=$row['book_price'];
}
?>
<script type="text/javascript">
function print_content(el){
    var restore_page=document.body.innerHTML;
    var print_content=document.getElementById(el).innerHTML;
    document.body.innerHTML=print_content;
    window.print();
    document.body.innerHTML=restore_page;
}
</script>
<div id="page-wrap">
<h1>Borrower's Paid of Book Total Price</h1>
<strong>Cost of Book: <?php echo $book_price; ?></strong><br /><br />
<strong>Borrower's Name: <?php echo $first_name.' '.$last_name; ?></strong><br /><br />
<strong>Member Type: <?php echo $staff_type; ?></strong><br /><br />
<strong>Status: <?php echo $action; ?></strong>
</div>
<br /><br /><br /><br /><br />
<button onclick="print_content('page-wrap')" class="btn btn-warning" style="margin-left: 10px;">Print Here</button>
<br /><br /><br /><br /><br />