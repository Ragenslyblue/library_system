<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Book Replace</h4>

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
                        
                        <form action="<?php echo $BASE_URL;?>index.php?page=save_book_replace_input" method="post" enctype="multipart/form-data">
                        
                        <?php
                        include('config.php');
                        
                        $book_name=mysqli_real_escape_string($CON, $_POST['book_name']);
                        
                        $sql='SELECT * FROM `book` WHERE book.book_name="'.$book_name.'"';
                        $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
                        $status='';
                        while($row=mysqli_fetch_array($qry)){
                            $book_id=$row['book_id'];
                            $book_number=$row['book_number'];
                            //$number_of_copies=$row['number_of_copies'];
                            $book_name=$row['book_name'];
                            $status=$row['status'];
                            
                        }
                        if($status!='Lost...' && $status!='Damage...'){
                            echo '<h1>This is not currently lost/damage...</h1>';
                        }else{
                          
                        ?>
                        
                        <label>Book ID :  </label>
                        <input name="book_num_id" disabled="yes" placeholder="Book ID" value="<?php echo $book_number; ?>" placeholder="" id="input-stock(units)" required="" class="form-control" type="text">
                        <input type="hidden" name="book_id" value="<?php echo $book_id; ?>" />
                        <label>Book Name :  </label>
                        <input  name="book_name" disabled="yes" value="<?php echo $book_name; ?>" placeholder="First Name" id="input-price" required="" class="form-control" type="text">
                        <label>Status :  </label>
                        <input name="status" disabled="yes" value="<?php echo $status; ?>" placeholder="Last Name" id="input-price" required="" class="form-control" type="text">
                        <!--<label>No. of Copies :  </label>
                        <input name="number_copies" value="" placeholder="Number of Copies" id="input-price" required="" class="form-control" type="text">
                        <input type="hidden" name="number_copies_curr" value="<?php //echo $number_of_copies; ?>" />-->
                        
                        <br /><br />
                        <button type="submit" value="Submit" name="btn_Submit" class="btn btn-default">Replace</button>
                      <button type="submit" class="btn btn-default">Reset</button>
                      
                      </form>
                      <?php
                      }
                      ?>
                      
                    </div>
                    
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    