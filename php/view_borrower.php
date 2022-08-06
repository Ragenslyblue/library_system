<?php
include('config.php');

$borrowers_name=mysqli_real_escape_string($CON, $_POST['borrowers_name']);

/*$sql='SELECT fines_value.fines_value_id, book.book_id, book.book_name, student.student_id, student.first_name, student.last_name, book_borrow.date_today, book_borrow.date_return, book_borrow.date_value, fines_value.fines, fines_value.status
                                            FROM fines_value
                                            INNER JOIN book
                                            ON book.book_id=fines_value.book_id
                                            INNER JOIN student
                                            ON student.student_id=fines_value.student_id
                                            INNER JOIN book_borrow
                                            ON book_borrow.book_borrow_id=fines_value.book_borrow_id 
                                            WHERE student.first_name="'.$borrowers_name.'" OR student.last_name="'.$borrowers_name.'"';*/
$sql='SELECT fines_value.fines_value_id, book.book_id, book.book_name, student.student_id, student.first_name, student.last_name, book_borrow.date_today, book_borrow.date_return, book_borrow.date_value, fines_value.fines, fines_value.status
                                            FROM fines_value
                                            INNER JOIN book
                                            ON book.book_id=fines_value.book_id
                                            INNER JOIN student
                                            ON student.student_id=fines_value.student_id
                                            INNER JOIN book_borrow
                                            ON book_borrow.book_borrow_id=fines_value.book_borrow_id 
                                            WHERE student.first_name="'.$borrowers_name.'" AND fines_value.status="unpaid"';
$qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
$book_items='';
$total_total='';
//$total_total2='';
$fetch=mysqli_fetch_array($qry);
$fines_value_id=$fetch['fines_value_id'];
$student_id=$fetch['student_id'];
$book_id=$fetch['book_id'];
$first_name=$fetch['first_name'];
$last_name=$fetch['last_name'];
$book_name=$fetch['book_name'];
$date_today=$fetch['date_today'];
$date_return=$fetch['date_return'];
$date_value=$fetch['date_value'];
$fines=$fetch['fines'];
$status=$fetch['status'];

                        /*foreach($qry as $book_totals):
                            $book_number_total=$book_totals['book_name'];
                            $book_items=$book_number_total.', '.$book_items;
                         endforeach;
                         */
						 
                        if($status!='unpaid'){
                            echo '<h1 style="text-align: center;">No results found!!!</h1>';
                         }else{ 
?>

<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">View Borrower</h4>

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
                        
                        
                        <tr>
                        <form action="<?php echo $BASE_URL;?>index.php?page=save_view_borrower" method="post" enctype="multipart/form-data">
                        
                        <tr>
                                        
                            <td><?php //echo $author_num_id; ?></td>
                            <input type="hidden" name="book_id[]" value="<?php echo $book_id; ?>" />
                            <input type="hidden" name="student_id[]" value="<?php echo $student_id; ?>" />
                            <td><?php //echo $first_name; ?></td>
                            <td><?php //echo $last_name; ?></td>
                            <td><?php //echo $author_type; ?></td>
                            <td><?php //echo $gender; ?></td>
                            
                        </tr>
                        
                        <td>
                        <label>Borrower's Name :  </label>
                        <input type="hidden" name="fines_value_id" value="<?php echo $fines_value_id; ?>" />
                        <input name="" disabled="yes" placeholder="" value="<?php echo $first_name.' '.$last_name; ?>" placeholder="" id="input-stock(units)" required="" class="form-control" type="text">
                        <!--<label>Book Title's :  </label>
                        <input  name="first_name" disabled="yes" value="<?php //echo $book_items; ?>" placeholder="" id="input-price" required="" class="form-control" type="text">-->
                        <input type="hidden" name="first_name" value="" />
                        <br />
                        <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Book ID</th>
                                            <!--<th>Accession No.</th>-->
                                            <th>Book Title</th>
                                            <!--<th>Author</th>
                                            <th>Category</th>
                                            <th>Status</th>-->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        
                                        <?php
                                       include('config.php');
									   
									   $borrowers_name=mysqli_real_escape_string($CON, $_POST['borrowers_name']);
                                       
										$sql='SELECT DISTINCT book.book_name, student.student_id, student.first_name, student.last_name, fines_value.fines, book.book_id, fines_value.fines_value_id
                                            FROM fines_value
                                            INNER JOIN book
                                            ON book.book_id=fines_value.book_id
                                            INNER JOIN student
                                            ON student.student_id=fines_value.student_id
                                            
                                            WHERE   fines_value.status="unpaid"';
                                       $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
                                       while($row=mysqli_fetch_array($qry)){
                                        $book_items='';
										$total_total='';
										$fines_value_id7=$row['fines_value_id'];
										$student_id=$row['student_id'];
										$book_id=$row['book_id'];
										$first_name=$row['first_name'];
										$last_name=$row['last_name'];
										$book_name=$row['book_name'];
										//$date_today=$row['date_today'];
										//$date_return=$row['date_return'];
										//$date_value=$row['date_value'];
										$fines=$row['fines'];
										//$status=$row['status'];
										//$book_number=$row['book_number'];

                                       ?>
                                        
                                            <!--<td><?php //echo $accession_number_id; ?></td>-->
                                            <td><?php echo $book_id; ?></td>
                                            <td><?php echo $book_name; ?></td>
                                            <td>
                                         	<div align="right"><p style="text-align: center;">
                     						<input type="checkbox" name="fines_value_id7[]" value="<?php echo $fines_value_id7; ?>" />
                                         	</div>
                                             </p>
                                            </td>
                                        </tr>
                                       <?php
                                            //}
                                       }
                                       ?> 
                                    </tbody>
                                </table>
                        
                        <label>Date Borrow :  </label>
                        <input name="last_name2" disabled="yes" value="<?php echo $date_today; ?>" placeholder="" id="input-price" required="" class="form-control" type="text">
                        <label>Date To Return :  </label>
                        <input name="middle_name" disabled="yes" value="<?php echo $date_return; ?>" placeholder="" id="input-price" required="" class="form-control" type="text">
                        <label>Date Late :  </label>
                        <input name="birthdate" disabled="yes" value="<?php echo $date_value; ?>" placeholder="" id="input-price" required="" class="form-control" type="text">
                        <label>Fines :  </label>
                        <input name="age" disabled="yes" value="<?php echo $fines; ?>" placeholder="" id="input-price" required="" class="form-control" type="text">
                        <input type="hidden" name="total_fines" value="<?php echo $fines; ?>" />
                        </td>
                        
                        <button type="submit" value="Pay" name="btn_pay" class="btn btn-default">Pay</button>
                                
                      </form>
                      </tr>
                      
                    </div>
                    <div class="panel panel-default">
                        
                    </div>
                    
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
<?php
	 //}
						 
}
?>