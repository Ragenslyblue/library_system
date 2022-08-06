<form action="<?php echo $BASE_URL;?>index.php?page=save_cencel_reserved" method="post" enctype="multipart/form-data">

<div class="panel panel-default">
                        <div class="panel-heading">
                            View Reserved Books
                        </div>
                        <br /><br />
                        <div class="panel-body">
                            <div class="table-responsive">
                            
<?php
@$borrower_name=mysqli_real_escape_string($CON, $_POST['borrower_name']);
                                         
?>
<div>
<h1><?php echo $borrower_name; ?></h1>
</div>

<br />
                            
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date Reserved</th>
                                            <th>Borrower's ID</th>
                                            <th>Borrower's Name</th>
                                            <th>Book Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        <tr>
                                        
                                        <?php
                                         include('config.php');
                                         
                                         /*$sql2='SELECT DISTINCT book.book_name,  student.student_num_id, student.first_name, student.last_name,  book.status, book.book_id
                                            FROM reserve_book
                                            INNER JOIN student
                                            ON student.student_id=reserve_book.student_id
                                            INNER JOIN book
                                            ON book.book_id=reserve_book.book_id
                                            WHERE book.status="Reserved..." AND student.first_name="'.$borrower_name.'"';*/
                                         $sql2='SELECT reserve_book.reserve_book_id, reserve_book.date_reserved, student.student_num_id, student.first_name, student.last_name,  book.book_name, book.status, book.book_id
                                            FROM reserve_book
                                            INNER JOIN student
                                            ON student.student_id=reserve_book.student_id
                                            INNER JOIN book
                                            ON book.book_id=reserve_book.book_id
                                            WHERE reserve_book.status="reserves" AND student.first_name="'.$borrower_name.'"';
                                         $qry2=mysqli_query($CON, $sql2) or die(mysqli_error($qry2));
                                         $book_items='';
                                         while($row=mysqli_fetch_array($qry2)){
                                            $reserve_book_id=$row['reserve_book_id'];
                                            $date_reserved=$row['date_reserved'];
                                            $student_num_id2=$row['student_num_id'];
                                            $first_name=$row['first_name'];
                                            $last_name=$row['last_name'];
                                            $book_name=$row['book_name'];
                                            $status=$row['status'];
                                            $book_id=$row['book_id'];
                                            
                                            
                                         if($status=='Available...'){
                                            echo '';
                                         }else{
                                            ?>
                                        
                                            <td><?php echo $date_reserved; ?></td>
                                            <td><?php echo $student_num_id2; ?></td>
                                            <td><?php echo $first_name.' '.$last_name; ?></td>
                                            <td><?php echo $book_name; ?></td>
                                            <td>
                                            <input type="checkbox" name="check_book2[]" value="<?php echo $book_id; ?>" />
                                            <!--<input />-->
                                            </td>
                                       
                                        </tr>
                                            <?php
                                        }
                                     }
                                     if(mysqli_num_rows($qry2)==0){
                                        echo '<h2>No results...</h2>';
                                     }
                                     ?> 
                                        
                                    </tbody>
                                </table>
                                
                                <button type="submit" name="btn_cancel" value="Cancel Book Reservation" class="btn btn-default">Cancel Book Reservation</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                
                            </div>
                        </div>
                    </div>
</form>
<br /><br /><br /><br /><br /><br /><br />
