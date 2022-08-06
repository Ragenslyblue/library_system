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
                            List Of Available Books
                        </div>
                        
                        <div class="panel-body" id="page-wrap">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Book ID</th>
                                            <th>Accession No.</th>
                                            <th>Book Name</th>
                                            <th>Languange</th>
                                            <th>Book Type/Material</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php
                                    include('config.php');
                                    
										/*$sql='SELECT book.book_id, book.accession_number_id, language.language, book_type.book_type, book.status
											FROM book
											INNER JOIN language
											ON language.language_id=book.languange_id
											INNER JOIN book_type
											ON book_type.book_type_id=book.book_type_id
											WHERE book.status="Available..."';	
									*/
									$sql='SELECT book.book_id, book.book_number, category.category_name, book.status, author.first_name, author.last_name, book.publisher, book.book_name, book.number_of_copies, book_type.book_type, author.middle_name, book.accession_number_id, language.language
                                            FROM book
                                            INNER JOIN category
                                            ON category.category_id=book.category_id
                                            INNER JOIN author
                                            ON author.author_id=book.author_id
                                            INNER JOIN book_type
                                            ON book_type.book_type_id=book.book_type_id
                                            INNER JOIN language
                                            ON language.language_id=book.languange_id
                                            WHERE book.status="Available..."';
                                    $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
                                    while($row=mysqli_fetch_array($qry)){
                                        $book_id=$row['book_id'];
                                        $accession_number_id=$row['accession_number_id'];
										$book_number=$row['book_number'];
										$book_name=$row['book_name'];
                                        $language=$row['language'];
                                        $book_type=$row['book_type'];
                                        $status=$row['status'];
                                    
                                        if($book_type!='Textbooks'){
                                            echo '';
                                        }else{
                                        
                                    ?>
                                    
                                        <tr class="success">
                                            <td><?php echo $book_id; ?></td>
                                            <td><?php echo $book_number; ?></td>
                                            <td><?php echo $book_name; ?></td>
                                            <td><?php echo $language; ?></td>
                                            <td><?php echo $book_type; ?></td>
                                            <td><?php echo $status; ?></td>
                                        </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                    </tbody>
                                    
                                </table>
                               
                            </div>
                             <a href="<?php echo $BASE_URL;?>index.php?page=list_unreturned_books" style="margin-top: 50px;" class="btn btn-default">List of Unreturned Book</a>                  
                     
                        </div>
                        
                        <button onclick="print_content('page-wrap')" class="btn btn-warning" style="margin-left: 10px;">Print Here</button>
                       
                    </div>