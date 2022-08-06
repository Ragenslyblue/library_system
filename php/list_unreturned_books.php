<div class="panel panel-default">

<script type="text/javascript">
function print_content(el){
    var restore_page=document.body.innerHTML;
    var print_content=document.getElementById(el).innerHTML;
    document.body.innerHTML=print_content;
    window.print();
    document.body.innerHTML=restore_page;
}
</script>
                       
                        <div class="panel-heading">
                            List Of Unreturned Books
                        </div>
                        
                        <div class="panel-body" id="page-wrap">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Borrower's Name</th>
                                            <th>Date Borrow</th>
                                            <th>Date To Return</th>
                                            <th>Book Type/Material</th>
                                            <!--<th>Status</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php
                                    include('config.php');
                                    
                                    $sql='SELECT book_borrow.book_borrow_id, student.first_name, student.last_name, book_borrow.date_today, book_borrow.date_return, book.book_name
                                        FROM book_borrow
                                        INNER JOIN student
                                        ON student.student_id=book_borrow.student_id
                                        INNER JOIN book
                                        ON book.book_id=book_borrow.book_id
                                        WHERE book_borrow.status="borrow"';
                                    $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
                                    while($row=mysqli_fetch_array($qry)){
                                        $book_borrow_id=$row['book_borrow_id'];
                                        $first_name=$row['first_name'];
                                        $last_name=$row['last_name'];
                                        $date_today=$row['date_today'];
                                        $date_return=$row['date_return'];
                                        $book_name=$row['book_name'];
                                    ?>
                                    
                                        <tr class="success">
                                            <td><?php echo $first_name.' '.$last_name; ?></td>
                                            <td><?php echo $date_today; ?></td>
                                            <td><?php echo $date_return; ?></td>
                                            <td><?php echo $book_name; ?></td>
                                            <!--<td><?php //echo $status; ?></td>-->
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <button onclick="print_content('page-wrap')" class="btn btn-warning" style="margin-left: 10px;">Print Here</button>
                        
                    </div>