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
                            List Of Damage/Lost Books
                        </div>
                        
                        <div class="panel-body" id="page-wrap">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Book ID</th>
                                            <th>Accession No.</th>
                                            <th>Book Title</th>
                                            <th>Author</th>
                                            <th>Book Type/Material</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php
                                    include('config.php');
                                    
                                    $sql='SELECT book.book_id, book.book_number, book.accession_number_id, book.book_type_id, book_type.book_type, book.status, book.book_name, author.first_name, author.last_name
                                        FROM book
                                        INNER JOIN book_type
                                        ON book_type.book_type_id=book.book_type_id
                                        INNER JOIN author
                                        ON author.author_id=book.author_id
                                        WHERE book.status="Damage..." OR book.status="Lost..."';
                                    $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
                                    while($row=mysqli_fetch_array($qry)){
                                        $book_id=$row['book_id'];
                                        $book_number=$row['book_number'];
                                        $accession_number_id=$row['accession_number_id'];
                                        $book_type_id=$row['book_type_id'];
                                        $book_type=$row['book_type'];
                                        $status=$row['status'];
                                        $book_name=$row['book_name'];
                                        $first_name=$row['first_name'];
                                        $last_name=$row['last_name'];
                                        /*if($book_type!='Textbooks'){
                                            echo '';
                                        }else{*/
                                        
                                    ?>
                                    
                                        <tr class="success">
                                            <td><?php echo $book_number; ?></td>
                                            <td><?php echo $accession_number_id; ?></td>
                                            <td><?php echo $book_name; ?></td>
                                            <td><?php echo $first_name.' '.$last_name; ?></td>
                                            <td><?php echo $book_type; ?></td>
                                            <td><?php echo $status; ?></td>
                                        </tr>
                                    <?php
                                        //}
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        
                        <button onclick="print_content('page-wrap')" class="btn btn-warning" style="margin-left: 10px;">Print Here</button>
                       
                    </div>