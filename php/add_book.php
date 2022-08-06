<?php
if(isset($_POST['Submit_val'])){
    $Submit_val=mysqli_real_escape_string($CON, $_POST['Submit_val']);
    $book_number=mysqli_real_escape_string($CON, $_POST['book_number']);
    $book_title=mysqli_real_escape_string($CON, $_POST['book_title']);
    //$number_copies=mysqli_real_escape_string($CON, $_POST['number_copies']);
    //$accession_number=mysqli_real_escape_string($CON, $_POST['accession_number']);
    $publisher=mysqli_real_escape_string($CON, $_POST['publisher']);
    $author=mysqli_real_escape_string($CON, $_POST['author']);
    $category=mysqli_real_escape_string($CON, $_POST['category']);
    $isbn=mysqli_real_escape_string($CON, $_POST['isbn']);
    $language=mysqli_real_escape_string($CON, $_POST['language']);
    //$supplier_id=mysqli_real_escape_string($CON, $_POST['supplier_id']);
    $book_type_id=mysqli_real_escape_string($CON, $_POST['book_type_id']);
   // $filing_book_type_id=mysqli_real_escape_string($CON, $_POST['filing_book_type_id']);
    $book_price=mysqli_real_escape_string($CON, $_POST['book_price']);
    
    if($Submit_val=='Submit'){
        $action='Available...';
    }else{
        $action='Not available...';
    }
    //echo $action;
    echo '<input type="hidden" value="'.$action.'" />';    
    
    $sql_form='SELECT * FROM `form`';
    $qry_form=mysqli_query($CON, $sql_form) or die(mysqli_error($qry_form));
    while($row=mysqli_fetch_array($qry_form)){
        $form_id=$row['form_id'];
    }
    
$sql_dup_book='SELECT * FROM `book` WHERE book.book_name="'.$book_title.'"';
$qry_dup_book=mysqli_query($CON, $sql_dup_book) or die(mysqli_error($qry_dup_book));
$num_rows_book=mysqli_num_rows($qry_dup_book);
if($num_rows_book==0){
    
$sql='INSERT INTO `book`(`book_number`, `publisher`, `book_name`, `author_id`, `category_id`, `ISBN`, `form_id`, `languange_id`, `status`, `book_type_id`, `book_price`) 
    VALUES ("'.$book_number.'", "'.$publisher.'", "'.$book_title.'", "'.$author.'", "'.$category.'", "'.$isbn.'", "'.$form_id.'", "'.$language.'", "'.$action.'", "'.$book_type_id.'", "'.$book_price.'")';
$qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
    }
}

$sql_acc='SELECT * FROM `accession_number_num`';
$qry_acc=mysqli_query($CON, $sql_acc) or die(mysqli_error($qry_acc));
while($row=mysqli_fetch_array($qry_acc)){
    $accession_number_num_id=$row['accession_number_num_id'];
    $accession_number_num=$row['accession_number_num'];
}if(mysqli_num_rows($qry_acc)==1){
    $sql_book_acc='SELECT * FROM `book`';
    $qry_book_acc=mysqli_query($CON, $sql_book_acc) or die(mysqli_error($qry_book_acc));
    
    $num_rowz=mysqli_num_rows($qry_book_acc);
    $date=date('d');
    $current=$date.($num_rowz+$accession_number_num);
    $str_id=str_pad($current, 3, 0, STR_PAD_LEFT);
    $id_num=$str_id+1;
}

?>

<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Add Book</h4>

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
                        
                        <form action="" method="post" enctype="multipart/form-data">
                        
                        <!--<label>Book ID :  </label>
                        <input name="accession_number" value="" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">-->
                        <label>Accession No. :  </label>
                        <input name="" disabled="yes" value="<?php echo $id_num; ?>" placeholder="Book Number" value="" id="input-stock(units)" required="" class="form-control" type="text">
                        <input type="hidden" name="book_number" value="<?php echo $id_num; ?>" />
                        <label>Book Title :  </label>
                        <input name="book_title" value="" placeholder="Book Title" id="input-price" required="" class="form-control" type="text">
                        <!--<label>Number of Copies :  </label>
                        <input name="number_copies" value="" placeholder="School Address" id="input-price" required="" class="form-control" type="text">
                        -->
                        <label>Publisher :  </label>
                        <input name="publisher" value="" placeholder="Publisher" id="input-price" required="" class="form-control" type="text">
                        <div class="form-group">
                                            <label>Author</label>
                                            <select class="form-control" name="author">
                                                <?php
                                                include('config.php');
                                                $sql='SELECT * FROM author';
                                                $qry=mysqli_query($CON, $sql);
                                                while($row=mysqli_fetch_array($qry)){
                                                    $author_id=$row['author_id'];
                                                    $first_name=$row['first_name'];
                                                    $last_name=$row['last_name'];
                                                    $middle_name=$row['middle_name'];
                                                ?>
                                                <option value="<?php echo $author_id; ?>"><?php echo $first_name.' '.$middle_name.' '.$last_name; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                        </div>
                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category">
                                                <?php
                                                $sql_cat='SELECT * FROM category';
                                                $qry_cat=mysqli_query($CON, $sql_cat) or die(mysqli_error($qry_cat));
                                                while($row=mysqli_fetch_array($qry_cat)){
                                                    $category_id=$row['category_id'];
                                                    $category_name=$row['category_name'];
                                                ?>
                                                <option value="<?php echo $category_id; ?>"><?php echo $category_name; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                        </div>
                        <label>ISBN :  </label>
                        <input name="isbn" value="" placeholder="ISBN" id="input-price" required="" class="form-control" type="text">
                        
                        <div class="form-group">
                                            <label>Language</label>
                                            <select class="form-control" name="language">
                                                <?php
                                                include('config.php');
                                                $sql_lang='SELECT * FROM `language`';
                                                $qry_lang=mysqli_query($CON, $sql_lang) or die(mysqli_error($qry_lang));
                                                while($row=mysqli_fetch_array($qry_lang)){
                                                    $language_id=$row['language_id'];
                                                    $language=$row['language'];
                                                
                                                ?>
                                                <option value="<?php echo $language_id; ?>"><?php echo $language; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                        </div>
                        
                        <!--<div class="form-group">
                                            <label>Supplier</label>
                                            <select class="form-control" name="supplier_id">
                                                <?php
                                                /*include('config.php');
                                                
                                                $sql_sup='SELECT * FROM `supplier`';
                                                $qry_sup=mysqli_query($CON, $sql_sup) or die(mysqli_error($qry_sup));
                                                while($row=mysqli_fetch_array($qry_sup)){
                                                    $supplier_id=$row['supplier_id'];
                                                    $supplier=$row['supplier'];*/
                                                ?>
                                                <option value="<?php //echo $supplier_id; ?>"><?php //echo $supplier; ?></option>
                                                <?php
                                               //}
                                                ?>
                                            </select>
                        </div>-->
                        
                        <div class="form-group">
                                            <label>Book Type/Material</label>
                                            <select class="form-control" name="book_type_id">
                                                <?php
                                                $sql_book_type='SELECT * FROM `book_type`';
                                                $qry_book_type=mysqli_query($CON, $sql_book_type) or die(mysqli_error($qry_book_type));
                                                while($row=mysqli_fetch_array($qry_book_type)){
                                                    $book_type_id=$row['book_type_id'];
                                                    $book_type=$row['book_type'];
                                                
                                                ?>
                                                <option value="<?php echo $book_type_id; ?>"><?php echo $book_type; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                        </div>
                        <!--<div class="form-group">
                                            <label>Filing Book Type</label>
                                            <select class="form-control" name="filing_book_type_id">
                                                <?php
                                                /*$sql_filing='SELECT * FROM `filing_book_type`';
                                                $qry_filing=mysqli_query($CON, $sql_filing) or die(mysqli_error($qry_filing));
                                                while($row=mysqli_fetch_array($qry_filing)){
                                                    $filing_book_type_id=$row['filing_book_type_id'];
                                                    $filing_book_type=$row['filing_book_type'];
                                                */
                                                ?>
                                                <option value="<?php //echo $filing_book_type_id; ?>"><?php //echo $filing_book_type; ?></option>
                                                <?php
                                                //}
                                                ?>
                                            </select>
                        </div>-->
                        <label>Book Price :  </label>
                        <input name="book_price" value="" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">
                        <hr>
                        <button type="submit" value="Submit" name="Submit_val" class="btn btn-default">Submit</button>
                      <button type="submit" class="btn btn-default">Reset</button>
                      
                      <a href="<?php echo $BASE_URL;?>index.php?page=admin_panel" style="float: right;" class="btn btn-default">Back</a>
                      <a href="<?php echo $BASE_URL;?>index.php?page=add_author" style="float: right;" class="btn btn-default">Add Author</a>
                      
                      </form>
                      
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Book Information
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Book ID</th>
                                            <th>Accession No.</th>
                                            <th>Book Title</th>
                                            <th>Author</th>
                                            <th>Category</th>
                                            <th>Publisher</th>
                                            <th>ISBN</th>
                                            <th>Language</th>
                                            <th>Book Type/Material</th>
                                            <th>Book Price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        
                                        <?php
                                       include('config.php');
                                       $sql='SELECT book.book_id, book.book_number, category.category_name, book.status, author.first_name, author.last_name, book.publisher, book.book_name, book.number_of_copies, book_type.book_type, author.middle_name, book.accession_number_id, book.publisher, book.ISBN, language.language, book_type.book_type, book.book_price
                                            FROM book
                                            INNER JOIN category
                                            ON category.category_id=book.category_id
                                            INNER JOIN author
                                            ON author.author_id=book.author_id
                                            INNER JOIN book_type
                                            ON book_type.book_type_id=book.book_type_id
                                            INNER JOIN language
                                            ON language.language_id=book.languange_id
                                            ORDER BY book.accession_number_id ASC';
                                       $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
                                       while($row=mysqli_fetch_array($qry)){
                                        $book_id=$row['book_id'];
                                        $book_number=$row['book_number'];
                                        $book_name=$row['book_name'];
                                        $first_name=$row['first_name'];
                                        $last_name=$row['last_name'];
                                        $middle_name=$row['middle_name'];
                                        $category_name=$row['category_name'];
                                        $status=$row['status'];
                                        $publisher=$row['publisher'];
                                        //$number_of_copies=$row['number_of_copies'];
                                        $ISBN=$row['ISBN'];
                                        $language=$row['language'];
                                        $book_type=$row['book_type'];
                                        $book_price=$row['book_price'];
                                        $accession_number_id=$row['accession_number_id'];
                                       ?>
                                        
                                            <td><?php echo $book_id; ?></td>
                                            <td><?php echo $book_number; ?></td>
                                            <td><?php echo $book_name; ?></td>
                                            <td><?php echo $first_name.' '.$middle_name.' '.$last_name; ?></td>
                                            <td><?php echo $category_name; ?></td>
                                            <td><?php echo $publisher; ?></td>
                                            <td><?php echo $ISBN; ?></td>
                                            <td><?php echo $language; ?></td>
                                            <td><?php echo $book_type; ?></td>
                                            <td><?php echo $book_price; ?></td>
                                            <td><?php echo $status; ?></td>
                                            <td class="odd"><div align="center">
                                                <a rel="facebox" href="<?php echo 'php/edit_add_book.php?id='.$book_id; ?>">
                                                <i class="fa fa-edit fa-lg text-success"></i></a> | <a href="<?php echo 'php/delete_add_book.php?id='.$book_id;?>" id="84" class="delbutton" title="Click To Delete">
                                                <i class="fa fa-times-circle fa-lg text-danger" style="margin-right: -50px;padding-right: 45px;"></i></a></div>
                                            </td>
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
                    
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    