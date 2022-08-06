<?php

/**
 * @author pakisab
 * @copyright 2017
 */
$book_name=mysqli_real_escape_string($CON, $_POST['book_name']);

$sql_book='SELECT * FROM `book` WHERE book.book_name="'.$book_name.'"';
$qry_book=mysqli_query($CON, $sql_book) or die(mysqli_error($qry_book));
$status='';
while($row=mysqli_fetch_array($qry_book)){
	$book_id=$row['book_id'];
    $book_number=$row['book_number'];
    $book_name=$row['book_name'];
    $book_price=$row['book_price'];
    $status=$row['status'];
}
if($status!='Available...' && $status!='Reserved...'){
    echo '<h1 style="text-align: center;">This is currently lost or damage...</h1>';
}else{

if(mysqli_num_rows($qry_book)==0){
    echo '<h1>Wrong Inputted Characters.</h1>';
}else{

?>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Damage/Lost Books</h4>

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
                        
                        <form action="<?php echo $BASE_URL;?>index.php?page=save_search_damage_lost_books" method="post" enctype="multipart/form-data">
                        
                        <label>Book ID<em></em> :  </label>
                        <input  name="book_name" disabled="yes" value="<?php echo $book_number; ?>" placeholder="Borrower's Name" id="input-price" required="" class="form-control" type="text">
                        <input type="hidden" name="book_id" value="<?php echo $book_id; ?>" />
                        
                        <label>Book Name<em></em> :  </label>
                        <input  name="book_name" disabled="yes" value="<?php echo $book_name; ?>" placeholder="Borrower's Name" id="input-price" required="" class="form-control" type="text">
                        
                        <div class="form-group">
                                            <label>Borrower's Name</label>
                                            <select class="form-control" name="borrowers_id">
                                                <?php
                                                include('config.php');
                                                
                                                //$sql_borrower='SELECT * FROM `student`';
												/*$sql_borrower='SELECT student.student_id, student.student_num_id, student.first_name, student.last_name, staff_type.staff_type, student.contact_number
                                            FROM student
                                            
                                            INNER JOIN staff_type
                                            ON staff_type.staff_type_id=student.staff_type_id';*/
                                                $sql_borrower='SELECT student.student_id, student.student_num_id, student.first_name, student.last_name, staff_type.staff_type, student.contact_number, student.birthdate, student.age, student.gender, student.year_level, student.address, course.course, student.email_address
                                            FROM student
                                            
                                            INNER JOIN staff_type
                                            ON staff_type.staff_type_id=student.staff_type_id
                                            INNER JOIN course
                                            ON course.course_id=student.course_id';
                                                $qry_borrower=mysqli_query($CON, $sql_borrower) or die(mysqli_error($qry_borrower));
                                                while($row=mysqli_fetch_array($qry_borrower)){
                                                    $student_id=$row['student_id'];
                                                    $first_name=$row['first_name'];
                                                    $last_name=$row['last_name'];
                                                
                                                ?>
                                                <option value="<?php echo $student_id; ?>"><?php echo $first_name.' '.$last_name; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                        </div>
                        
                        <label>Cost of Book Amount<em></em> :  </label>
                        <input name="book_cost" value="<?php echo $book_price; ?>" placeholder="Borrower's Name" id="input-price" required="" class="form-control" type="text">
                        
                        <!--<label>Number of Copies<em></em> :  </label>
                        <input  name="number_of_copies"  value="" placeholder="Number of Copies" id="input-price" required="" class="form-control" type="text">-->
                        
                        <br /><br />
                        <button type="submit" name="btn_damage" value="DAMAGE" class="btn btn-default">Damage</button>&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="submit" name="btn_lost" value="LOST" class="btn btn-default">Lost</button>
                      
                      </form>
                      
                    </div>
                    
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    
<?php
    }
}
?>