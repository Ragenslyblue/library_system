<?php
include('config.php');

$student_id=mysqli_real_escape_string($CON, $_POST['student_id']);

$sql='SELECT * FROM `student` WHERE student.student_num_id="'.$student_id.'"';
$qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
while($row=mysqli_fetch_array($qry)){
    $student_id2=$row['student_id'];
    $first_name=$row['first_name'];
    $last_name=$row['last_name'];
    $student_num_id=$row['student_num_id'];
}
if(mysqli_num_rows($qry)==0){
    echo '<h1 style="text-align: center;">No results found!!!</h1>';
}else{
    
?>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Book Borrow</h4>

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
                        
<form action="<?php echo $BASE_URL;?>index.php?page=save_search_book_borrower" method="post" enctype="multipart/form-data">
                        
                        <label>
                        <h2>
                        Today
                        <?php
                        $hourdiff=-8;
                        $site=date('l,  F d,  Y g:i a', time()+($hourdiff * 3600));
                        echo $site;
                        
                        $curr_date=date('m/d/Y',time()+($hourdiff * 3600)); 
            
                        ?>
                        </h2> 
                        </label>
                        
                        <input type="hidden" name="curr_date" value="<?php echo $curr_date; ?>" />  
                        
                   <div>Date To Be Return</div>
                  <div class="form-group required">
                  <select name="month">
                  <?php
                  for($i_date=1; $i_date<=12; ++$i_date){
                  
                  ?>
                            <option value="<?php echo $i_date; ?>"><?php echo $i_date; ?></option>
                            <?php } ?>
                  </select>
                  
                  <select name="day">
                  <?php
                  include('config.php');
                  for($i=1; $i<=31; ++$i){
                  
                  ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  <?php } ?>
                  </select>
                  
                  <select name="year">
                  <?php
                  for($i2=2017; $i2<=2050; ++$i2){
                    
                  ?>
                        <option value="<?php echo $i2; ?>"><?php echo $i2; ?></option>
                        <?php } ?>
                  </select>
                  </div>
                  
                  <label>Borrower ID :  </label>
                  <input name="" disabled="yes" placeholder="Borrower ID" value="<?php echo $student_num_id; ?>" placeholder="" id="input-stock(units)" required="" class="form-control" type="text">
                   <input type="hidden" name="student_id2" value="<?php echo $student_id2; ?>" />     
                  
                  <label>Borrower Name :  </label>
                  <input name="" disabled="yes" placeholder="Borrower Name" value="<?php echo $first_name.' '.$last_name; ?>" placeholder="" id="input-stock(units)" required="" class="form-control" type="text">
                   
                       
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
                                            <th>Title</th>
                                            <th>Book Number</th>
                                            <th>Category</th>
                                            <th>Book Type/Material</th>
                                            <th>Status</th>
                                            <th>Author</th>
                                            <th>Publisher</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                       include('config.php');
                                       
                                       $sql3='SELECT book.book_id, book.book_number, category.category_name, book.status, author.first_name, author.last_name, book.publisher, book.book_name, book.number_of_copies, book_type.book_type
                                            FROM book
                                            INNER JOIN category
                                            ON category.category_id=book.category_id
                                            INNER JOIN author
                                            ON author.author_id=book.author_id
                                            INNER JOIN book_type
                                            ON book_type.book_type_id=book.book_type_id
                                            ORDER BY book.book_name ASC';
                                       $qry3=mysqli_query($CON, $sql3) or die(mysqli_error($qry3));
                                       while($row=mysqli_fetch_array($qry3)){
                                            $book_id=$row['book_id'];
                                            $book_number=$row['book_number'];
                                            $category_name=$row['category_name'];
                                            $status=$row['status'];
                                            $first_name=$row['first_name'];
                                            $last_name=$row['last_name'];
                                            $publisher=$row['publisher'];
                                            $book_name=$row['book_name'];
                                            //$number_of_copies=$row['number_of_copies'];
                                            $book_type=$row['book_type'];
                                       ?>
                                        
                                        
                                        <tr>
                                        
                                        
                                            <td><?php echo $book_name; ?></td>
                                            <td><?php echo $book_number; ?></td>
                                            <td><?php echo $category_name; ?></td>
                                            <td><?php echo $book_type; ?></td>
                                            <td><?php echo $status; ?></td>
                                            <td><?php echo $first_name.' '.$last_name; ?></td>
                                            <td><?php echo $publisher; ?></td>
                                            <td>
                                            <?php
                                             /*if($number_of_copies<1){
                                                echo '';
                                             }else*/ if($status>='Damage...'){
                                                echo '';
                                             }else if($book_type!='Textbooks'){
                                                echo '<span>Library use only...</span>';
                                             }else{
                                              
                                             ?>
                                             <div align="right">
                                             <p style="text-align: center;">
                                             
                                             <input type="checkbox" name="check_books[]" value="<?php echo $book_id; ?>" />
                                             </div>
                                             
                                             </p>
                                            </td>
                                        </tr>
                                        <?php
                                                }
                                             }
                                             ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                     <button type="submit" name="btn_submit" value="BORROW BOOK" class="btn btn-default">Book Borrow</button>&nbsp;&nbsp;&nbsp;&nbsp;
                      
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    </form>
<?php
}
?>