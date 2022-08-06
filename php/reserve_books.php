<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Reserved Books</h4>

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
                        
<form action="<?php echo $BASE_URL;?>index.php?page=save_reserve_books" method="post" enctype="multipart/form-data">
                        
                        <label>
                        <h2>
                        Today
                        <?php
                        $hourdiff=-9;
                        $site=date('l,  F d,  Y g:i a', time()+($hourdiff * 3600));
                        echo $site;
                        
                        //$curr_date=date('m/d/Y',time()+($hourdiff * 3600)); 
            
                        ?>
                        </h2> 
                        </label>
                   
                  <div class="form-group">
                                            <label>Borrower's Name</label>
                                            <select class="form-control" name="borrowers_id">
                                            <option value="0">Please Select</option>
                                                <?php
                                                include('config.php');
                                                
                                                //$sql='SELECT * FROM `student`';
												/*$sql='SELECT student.student_id, student.student_num_id, student.first_name, student.last_name, staff_type.staff_type, student.contact_number
                                            FROM student
                                            
                                            INNER JOIN staff_type
                                            ON staff_type.staff_type_id=student.staff_type_id';*/
                                                $sql='SELECT student.student_id, student.student_num_id, student.first_name, student.last_name, staff_type.staff_type, student.contact_number, student.birthdate, student.age, student.gender, student.year_level, student.address, course.course, student.email_address
                                                    FROM student
                                                    
                                                    INNER JOIN staff_type
                                                    ON staff_type.staff_type_id=student.staff_type_id
                                                    INNER JOIN course
                                                    ON course.course_id=student.course_id';
                                                $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
                                                while($row=mysqli_fetch_array($qry)){
                                                    $student_id=$row['student_id'];
                                                    $first_name=$row['first_name'];
                                                    $last_name=$row['last_name'];
                                                
                                                ?>
                                                <option value="<?php echo $student_id; ?>"><?php echo $first_name.' '.$last_name; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                        </div>
                  
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
                                            <!--<th>No. of Copies</th>-->
                                            <th>Author</th>
                                            <th>Publisher</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                       include('config.php');
                                       
                                       $sql3='SELECT book.book_id, book.book_number, category.category_name, book.status, author.first_name, author.last_name, book.publisher, book.book_name, book.number_of_copies, book_type.book_type, book.number_of_copies
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
                                            <!--<input type="hidden" name="borrowers_id[]" value="<?php //echo $student_id; ?>" />-->
                                            <td><?php echo $book_name; ?></td>
                                            <td><?php echo $book_number; ?></td>
                                            <td><?php echo $category_name; ?></td>
                                            <td><?php echo $book_type; ?></td>
                                            <!--<td><?php //echo $number_of_copies; ?></td>-->
                                            <!--<input type="hidden" name="number_copies[]" value="<?php //echo $number_of_copies; ?>" />-->
                                            <td><?php echo $first_name.' '.$last_name; ?></td>
                                            <td><?php echo $publisher; ?></td>
                                            <td><?php echo $status; ?></td>
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
                                         <div align="right"><p style="text-align: center;">
                     
                                         <input type="hidden" name="book_id" value="<?php echo $book_id; ?>" />
                                         
                                         <input type="checkbox" name="check_books[]" value="<?php echo $book_id; ?>" />
                                         </div>
                                             <?php
                                            }
                                         }
                                         ?>
                                             </p>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                     <button type="submit" name="btn_reserved" value="RESERVED" class="btn btn-default">Reserved</button>&nbsp;&nbsp;&nbsp;&nbsp;
                      
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    </form>