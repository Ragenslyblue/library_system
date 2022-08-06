<?php

/**
 * @author pakisab
 * @copyright 2017
 */

$student_id=mysqli_real_escape_string($CON, $_POST['student_id']);

$sql='SELECT * FROM student_student WHERE student_student.student_number_num_id="'.$student_id.'"';
$qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
while($row=mysqli_fetch_array($qry)){
    $student_student_id=$row['student_student_id'];
    $student_number_num_id=$row['student_number_num_id'];
    $first_name=$row['first_name'];
    $last_name=$row['last_name'];
    
}
if(mysqli_num_rows($qry)==0){
        echo '<h1 style="text-align: center;">No results Found!!!</h1>';
    }else{  
?>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Attendance</h4>

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
                        
                        <form action="<?php echo $BASE_URL;?>index.php?page=save_attendance_input" method="post" enctype="multipart/form-data">
                        
                        <h2>DateTime
                        <?php
                        $hourdiff=-8;
                        $site=date('l,  F d,  Y g:i a', time()+($hourdiff * 3600));
                        echo $site;
                        
                        //$curr_date=date('m/d/Y',time()+($hourdiff * 3600)); 
                        ?>
                        </h2>
                        
                        <input type="hidden" name="time_in" value="<?php echo $site; ?>" />
                        <label>Student ID :  </label>
                        <input name="" disabled="yes" placeholder="Book ID" value="<?php echo $student_number_num_id; ?>" placeholder="" id="input-stock(units)" required="" class="form-control" type="text">
                        <input type="hidden" name="student_idz" value="<?php echo $student_student_id; ?>" />
                        <label>First Name :  </label>
                        <input  name="" disabled="yes" value="<?php echo $first_name; ?>" placeholder="First Name" id="input-price" required="" class="form-control" type="text">
                        <input type="hidden" name="first_name" value=""/>
                        <label>Last Name :  </label>
                        <input name="" disabled="yes" value="<?php echo $last_name; ?>" placeholder="Last Name" id="input-price" required="" class="form-control" type="text">
                        <input type="hidden" name="last_name" value="" />
                        
                        <br /><br />
                        <button type="submit" style="margin-left: 200px;" value="Time In" name="btn_time_in" class="btn btn-default">Time In</button>
                        
                      </form>
                      
                      
                    </div>
                    
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>