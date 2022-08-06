<div class="panel panel-default">
                        <div class="panel-heading">
                            View Reserved Books
                        </div>
                        <br /><br />
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Date Reserved</th>
                                            <th>Borrower's ID</th>
                                            <th>Borrower's Name</th>
                                            <th>Book Name</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                        <?php
                                         include('config.php');
                                         
                                         /*$sql='SELECT DISTINCT book.book_name,  student.student_num_id, student.first_name, student.last_name,  book.status, book.book_id
                                            FROM reserve_book
                                            INNER JOIN student
                                            ON student.student_id=reserve_book.student_id
                                            INNER JOIN book
                                            ON book.book_id=reserve_book.book_id
                                            WHERE reserve_book.status="reserves"';*/
                                         $sql='SELECT reserve_book.reserve_book_id, reserve_book.date_reserved, student.student_num_id, student.first_name, student.last_name,  book.book_name, book.status, book.book_id
                                            FROM reserve_book
                                            INNER JOIN student
                                            ON student.student_id=reserve_book.student_id
                                            INNER JOIN book
                                            ON book.book_id=reserve_book.book_id
                                            WHERE reserve_book.status="reserves"';
                                         $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
                                         $book_items='';
                                         while($row=mysqli_fetch_array($qry)){
                                            $reserve_book_id=$row['reserve_book_id'];
                                            $book_id=$row['book_id'];
                                            $student_num_id=$row['student_num_id'];
                                            $first_name=$row['first_name'];
                                            $last_name=$row['last_name'];
                                            //$staff_type_id=$row['staff_type_id'];
                                            //$staff_type=$row['staff_type'];
                                            $book_name=$row['book_name'];
                                            $date_reserved=$row['date_reserved'];
                                            $status=$row['status'];
                                            
                                         ?>
                                            <td><?php echo $date_reserved; ?></td>
                                            <td><?php echo $student_num_id; ?></td>
                                            <td><?php echo $first_name.' '.$last_name; ?></td>
                                            <!--<td><?php //echo $staff_type; ?></td>-->
                                            <td><?php echo $book_name; ?></td>
                                       </tr>
                                             <?php
                                            //}
                                         }
                                         ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<br /><br /><br /><br /><br /><br /><br />