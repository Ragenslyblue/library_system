<div class="panel panel-default">
                        <div class="panel-heading">
                            View Unpaid Borrowers
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form action="<?php echo $BASE_URL;?>index.php?page=paid_borrowers" method="post" enctype="multipart/form-data">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Borrower's Name</th>
                                            <th>Book Title</th>
                                            <th>Date Borrow</th>
                                            <th>Date To Return</th>
                                            <th>Date Late</th>
                                            <th>Fines</th>
                                            <!--<th>Action</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php
                                       include('config.php');
                                       
                                       $sql='SELECT fines_value.fines_value_id, book.book_id, book.book_name, student.student_id, student.first_name, student.last_name, book_borrow.date_today, book_borrow.date_return, book_borrow.date_value, fines_value.fines
                                            FROM fines_value
                                            INNER JOIN book
                                            ON book.book_id=fines_value.book_id
                                            INNER JOIN student
                                            ON student.student_id=fines_value.student_id
                                            INNER JOIN book_borrow
                                            ON book_borrow.book_borrow_id=fines_value.book_borrow_id';
                                       $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
                                       $book_items='';
                                       while($row=mysqli_fetch_array($qry)){
                                            $fines_value_id=$row['fines_value_id'];
                                            $book_id=$row['book_id'];
                                            $book_name=$row['book_name'];
                                            $student_id=$row['student_id'];
                                            $first_name=$row['first_name'];
                                            $last_name=$row['last_name'];
                                            $date_today=$row['date_today'];
                                            $date_return=$row['date_return'];
                                            $date_value=$row['date_value'];
                                            $fines=$row['fines'];
                                            
                                            $sql2='SELECT * FROM `payment_borrowers`';
                                            $qry2=mysqli_query($CON, $sql2) or die(mysqli_error($qry2));
                                            while($row=mysqli_fetch_array($qry2)){
                                                $payment_borrowers_id=$row['payment_borrowers_id'];
                                                $fines_value_id2=$row['fines_value_id'];
                                                $action=$row['action'];
                                            
                                            
                                            if($fines<1){
                                                echo '';
                                            }/*else if($action<='paid'){
                                                echo '';
                                            }*/else{
                                             
                                       ?>
                                    
                                        <tr>
                                        
                                            <td><?php echo $first_name.' '.$last_name; ?></td>
                                            <td><?php echo $book_name; ?></td>
                                            <td><?php echo $date_today; ?></td>
                                            <td><?php echo $date_return; ?></td>
                                            <td><?php echo $date_value; ?></td>
                                            <td class="odd"><div align="center"><?php echo $fines; ?></td>
                                            <!--<td class="odd"><div align="center">
                                            <button type="submit" value="Pay" name="btn_pay" class="btn btn-default">Pay</button>
                                            </td>-->
                                        
                                        <?php
                                                }
                                            }
                                        }
                                        ?>
                                        
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>