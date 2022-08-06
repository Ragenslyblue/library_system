<div class="panel panel-default">
                        <div class="panel-heading">
                            List Of Paid Borrowers
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Borrower's Name</th>
                                            <th>Date Borrow</th>
                                            <th>Date To Return</th>
                                            <th>Date Late</th>
                                            <th>Fines</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        
                                       <?php
                                       include('config.php');
                                       
                                       $sql='SELECT payment_borrowers.payment_borrowers_id, payment_borrowers.total_fines, fines_value.book_borrow_id, book_borrow.date_today, book_borrow.date_return, book_borrow.date_value, fines_value.student_id, student.first_name, student.last_name, fines_value.status
                                            FROM payment_borrowers
                                            INNER JOIN fines_value
                                            ON fines_value.fines_value_id=payment_borrowers.fines_value_id
                                            INNER JOIN book_borrow
                                            ON book_borrow.book_borrow_id=fines_value.book_borrow_id
                                            INNER JOIN student
                                            ON student.student_id=fines_value.student_id';
                                       $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
                                       while($row=mysqli_fetch_array($qry)){
                                            $payment_borrowers_id=$row['payment_borrowers_id'];
                                            $total_fines=$row['total_fines'];
                                            $book_borrow_id=$row['book_borrow_id'];
                                            $date_today=$row['date_today'];
                                            $date_return=$row['date_return'];
                                            $date_value=$row['date_value'];
                                            $first_name=$row['first_name'];
                                            $last_name=$row['last_name'];
                                            $status=$row['status'];
                                       ?>
                                        
                                            <td><?php echo $first_name.' '.$last_name; ?></td>
                                            <td><?php echo $date_today; ?></td>
                                            <td><?php echo $date_return; ?></td>
                                            <td><?php echo $date_value; ?></td>
                                            <td class="odd"><?php echo $total_fines; ?><div align="center">
                                            </td>
                                            <td class="odd"><?php echo $status; ?><div align="center">
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>