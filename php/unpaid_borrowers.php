<div class="panel panel-default">
                        <div class="panel-heading">
                            View Book Returned
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Borrower's Name</th>
                                            <th>Date Borrow</th>
                                            <th>Date To Return</th>
                                            <th>Fines</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        
                                       <?php
                                       include('config.php');
                                       
                                       $sql='SELECT fines_value.fines_value_id, student.first_name, student.last_name, book_borrow.date_today, book_borrow.date_return, fines_value.fines, fines_value.status
                                            FROM fines_value
                                            INNER JOIN student
                                            ON student.student_id=fines_value.student_id
                                            INNER JOIN book_borrow
                                            ON book_borrow.book_borrow_id=fines_value.book_borrow_id
                                            WHERE fines_value.status="unpaid"';
                                       $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
                                       while($row=mysqli_fetch_array($qry)){
                                            $fines_value_id=$row['fines_value_id'];
											$first_name=$row['first_name'];
											$last_name=$row['last_name'];
											$date_today=$row['date_today'];
											$date_return=$row['date_return'];
											$fines=$row['fines'];
											$status=$row['status'];
											
											//}
                                       ?>
                                        
                                            <td><?php echo $first_name.' '.$last_name; ?></td>
                                            <td><?php echo $date_today; ?></td>
                                            <td><?php echo $date_return; ?></td>
                                            <td><?php echo $fines; ?></td>
                                            <td class="odd"><?php echo $status; ?><div align="center">
                                            </td>
                                            <!--<td class="odd"><?php //echo $status; ?><div align="center">
                                            </td>-->
                                        </tr>
                                        <?php
											//}
                                        }
                                        ?>
                                        
                                    </tbody>
                                </table>
                                
                                <a href="<?php echo $BASE_URL;?>index.php?page=search_borrower" style="float: right;" class="btn btn-default">Next Page</a>
                                
                                
                            </div>
                        </div>
                    </div>