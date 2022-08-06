<?php

/**
 * @author pakisab
 * @copyright 2017
 */

$borrower_id=mysqli_real_escape_string($CON, $_POST['borrower_id']);

$sql='SELECT book_borrow.book_borrow_id, book.book_name, book_borrow.date_today, book_borrow.date_return, student.first_name, student.last_name, book_borrow.date_value, book.book_id, student.student_id, book_borrow.status
                        FROM book_borrow
                        INNER JOIN book
                        ON book.book_id=book_borrow.book_id
                        INNER JOIN student
                        ON student.student_id=book_borrow.student_id
                        WHERE student.student_num_id="'.$borrower_id.'" AND book_borrow.status="borrow"';
$qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));

$book_items='';
while($row=mysqli_fetch_array($qry)){
                        $book_borrow_id=$row['book_borrow_id'];
                        $book_name=$row['book_name'];
                        $date_today=$row['date_today'];
                        $date_return=$row['date_return'];
                        $first_name=$row['first_name'];
                        $last_name=$row['last_name'];
                        $date_value=$row['date_value'];
                        $book_id=$row['book_id'];
                        $student_id=$row['student_id'];
                        $status=$row['status'];
                        
                        foreach($qry as $book_totals):
                            $book_number_total=$book_totals['book_name'];
                            $book_items=$book_number_total.', '.$book_items;
                         endforeach;
                         
                        $sql7='SELECT * FROM `form`';
                        $qry7=mysqli_query($CON, $sql7) or die(mysqli_error($qry7));
                        $val_exp='';
                        while($row=mysqli_fetch_array($qry7)){
                            $form_id=$row['form_id'];
                            $currency=$row['currency'];
                            $fines=$row['fines'];
                        
                            //Solve the fines
                            $hourdiff=-9;
                            $site=date('Y-m-d H:i:s', time()+($hourdiff * 3600));
                            //echo $site;
                            
                            //$same_week=$date_return*0.50;
                            
                            $then=new DateTime($site);
                            $now=new DateTime($date_return); 
                            $since=$now->diff($then);
                            $fines2=$since->d;
                            $fines3=$fines2*$fines;
                            //echo $fines3.' '.$since->h.'in hours'; 
                            
                            //Here's the status expirations
                            echo '<br><br>';
                            
                            $cal_return=new DateTime($date_return);
                            $cal_today=new DateTime($date_today);
                            $since_val=$cal_today->diff($cal_return);
                            $expiration_date=$since_val->d;
                            //echo $fines2;
                            //$val_exp+=$expiration_date;//*$fines2;
                            //echo $val_exp;
                            }
}
if(mysqli_num_rows($qry)==0){
    echo '<h1 style="text-align: center; ">People hasnt borrowed books yet...</h1>';
}else{
    
?>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Return Book</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                </div>

            </div>
<form action="<?php echo $BASE_URL;?>index.php?page=view_calculated_fines" method="post" style="
    margin-top: -120px;
" enctype="multipart/form-data" class="form-horizontal" enctype="multipart/form-data">
          
          <br />
          
          <div>
          <div><input type="hidden" name="book_borrow_id" value="<?php echo $book_borrow_id; ?>"/></div>
          </div>
          
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-stock(units)" >Borrower Name</label>
            <div class="col-sm-10">
              <label><h2><?php echo $first_name.' '.$last_name; ?></h2></label>
              <input type="hidden" name="student_id" value="<?php echo $student_id; ?>"/>
              </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-price" >Book Titles</label>
            <div class="col-sm-10">
              <!--<label><h2><?php //echo $book_items; ?></h2></label>-->
              <input type="hidden" name="book_id[]" value="<?php echo $book_id; ?>"/>
              <input type="hidden" name="book_book_id" value="<?php echo $book_id; ?>" />
              
              <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                       include('config.php');
                                       
                                       $sql='SELECT book_borrow.book_borrow_id, book.book_name, book_borrow.date_today, book_borrow.date_return, student.first_name, student.last_name, book_borrow.date_value, book.book_id, student.student_id
                                        FROM book_borrow
                                        INNER JOIN book
                                        ON book.book_id=book_borrow.book_id
                                        INNER JOIN student
                                        ON student.student_id=book_borrow.student_id
                                        WHERE student.student_num_id="'.$borrower_id.'" AND book_borrow.status="borrow"';
                                    $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
                                    
                                    $book_items='';
                                    while($row=mysqli_fetch_array($qry)){
                                        $book_borrow_id=$row['book_borrow_id'];
                                        $book_name=$row['book_name'];
                                        $date_today=$row['date_today'];
                                        $date_return=$row['date_return'];
                                        $first_name=$row['first_name'];
                                        $last_name=$row['last_name'];
                                        $date_value=$row['date_value'];
                                        $book_id=$row['book_id'];
                                        $student_id=$row['student_id'];

                                       ?>
                                        
                                        
                                        <tr>
                                        
                                        
                                            <td><?php echo $book_name; ?></td>
                                            <td>
                                            <?php
                                             ?>
                                             <div align="right">
                                             <p style="text-align: center;">
                                             
                                             <input type="checkbox" name="check_books[]" value="<?php echo $book_id; ?>" />
                                             </div>
                                             
                                             </p>
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
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-price" >Expiration Date</label>
            <div class="col-sm-10">
              <label><h2><?php echo $expiration_date.' '.'days expiration'; ?></h2></label>
           </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-price" >Overdue fines</label>
            <div class="col-sm-10">
              <label><h2><?php echo $fines3; ?></h2></label>
              <input type="hidden" name="fines_value" value="<?php echo $fines3; ?>" />
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-price" >Date Borrow</label>
            <div class="col-sm-10">
              <label><h2><?php echo $date_today; ?></h2></label>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-price" >Date To Return</label>
            <div class="col-sm-10">
              <label><h2><?php echo $date_return; ?></h2></label>
            </div>
          </div>
          
          <button type="submit" name="btn_return" value="RETURN BOOK" class="btn btn-default">RETURN BOOK</button>&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="reset" class="btn btn-default">Reset</button>
                     
</form>

<?php
}
?>
</div>
</div>
    