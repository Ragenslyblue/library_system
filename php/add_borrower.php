<?php
include('config.php');

if(isset($_POST['Submit'])){
    $student_id=mysqli_real_escape_string($CON, $_POST['student_id']);
    $first_name=mysqli_real_escape_string($CON, $_POST['first_name']);
    $last_name=mysqli_real_escape_string($CON, $_POST['last_name']);
    $middle_name=mysqli_real_escape_string($CON, $_POST['middle_name']);
    //$birthdate=mysqli_real_escape_string($CON, $_POST['birthdate']);
    $age=mysqli_real_escape_string($CON, $_POST['age']);
    $gender=mysqli_real_escape_string($CON, $_POST['gender']);
    $year_level=mysqli_real_escape_string($CON, $_POST['year_level']);
    $address=mysqli_real_escape_string($CON, $_POST['address']);
    //$contemparary_year=mysqli_real_escape_string($CON, $_POST['contemparary_year']);
    //$uncontemporary_year=mysqli_real_escape_string($CON, $_POST['uncontemporary_year']);
    $course=mysqli_real_escape_string($CON, $_POST['course']);
    $contact_number=mysqli_real_escape_string($CON, $_POST['contact_number']);
    $email_address=mysqli_real_escape_string($CON, $_POST['email_address']);
    $member_type=mysqli_real_escape_string($CON, $_POST['member_type']);
    
    $month=mysqli_real_escape_string($CON, $_POST['month']);
    $day=mysqli_real_escape_string($CON, $_POST['day']);
    $year=mysqli_real_escape_string($CON, $_POST['year']);
    
    $birthdate2=$month.'/'.$day.'/'.$year;
    //echo $birthdate2;
    
    $sql_dup_stud='SELECT * FROM `student` WHERE student.first_name="'.$first_name.'" AND student.last_name="'.$last_name.'"';
    $qry_dup_stud=mysqli_query($CON, $sql_dup_stud) or die(mysqli_error($qry_dup_stud));
    $num_rows_stud=mysqli_num_rows($qry_dup_stud);
    if($num_rows_stud==0){
    
    $sql_student='INSERT INTO `student`(`first_name`, `last_name`, `middle_name`, `age`, `gender`, `student_num_id`, `year_level`, `address`, `course_id`, `contact_number`,`email_address`, `birthdate`, `staff_type_id`) 
        VALUES ("'.$first_name.'", "'.$last_name.'", "'.$middle_name.'", "'.$age.'", "'.$gender.'", "'.$student_id.'", "'.$year_level.'", "'.$address.'", "'.$course.'", "'.$contact_number.'", "'.$email_address.'", "'.$birthdate2.'", "'.$member_type.'")';
    $qry_student=mysqli_query($CON, $sql_student) or die(mysqli_error($qry_student));
    }
}

$sql_id='SELECT * FROM `student_num`';
$qry_id=mysqli_query($CON, $sql_id) or die(mysqli_error($qry_id));
while($row=mysqli_fetch_array($qry_id)){
    $student_num_id=$row['student_num_id'];
    $student_num=$row['student_num'];
}if(mysqli_num_rows($qry_id)==1){
    $sql_student_id='SELECT * FROM `student`';
    $qry_student_id=mysqli_query($CON, $sql_student_id) or die(mysqli_error($qry_student_id));
    
    $num_rows_id=mysqli_num_rows($qry_student_id);
    $date=date('y');
    $curr=$date.($num_rows_id+$student_num);
    $str=str_pad($curr, 7, 1, STR_PAD_LEFT);
    $id=$str+1;
}
?>


<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Add Borrower</h4>

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
                        
                        <label>Borrower ID :  </label>
                        <input name="" disabled="yes" placeholder="Author ID" value="<?php echo $id; ?>" placeholder="" id="input-stock(units)" required="" class="form-control" type="text">
                        <input type="hidden" name="student_id" value="<?php echo $id; ?>" />
                        <label>First Name :  </label>
                        <input  name="first_name" value="" placeholder="First Name" id="input-price" required="" class="form-control" type="text">
                        <label>Last Name :  </label>
                        <input name="last_name" value="" placeholder="Last Name" id="input-price" required="" class="form-control" type="text">
                        <label>Middle Name :  </label>
                        <input name="middle_name" value="" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">
                        <label>Birthdate :  </label>
                        <!--<input name="birthdate" value="" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">-->
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
                  for($i2=1990; $i2<=2050; ++$i2){
                    
                  ?>
                        <option value="<?php echo $i2; ?>"><?php echo $i2; ?></option>
                        <?php } ?>
                  </select>
                  </div>
              		<input type="hidden" name="birthdate" value="<?php echo $i_date.' '.$i2.' '.$i; ?>" />
                       
                        
                        <label>Age :  </label>
                        <input name="age" value="" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">
                        <div class="form-group">
                                            <label>Gender</label>
                                            <select name="gender" class="form-control">
                                                <option value="0">Please Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                
                                            </select>
                        </div>
                        <div class="form-group">
                                            <label>Member Type</label>
                                            <select name="member_type" class="form-control">
                                                <option value="0">Please Select</option>
                                                <?php
                                                include('config.php');
                                                $sql_member='SELECT * FROM `staff_type`';
                                                $qry_member=mysqli_query($CON, $sql_member) or die(mysqli_error($qry_member));
                                                while($row=mysqli_fetch_array($qry_member)){
                                                    $staff_type_id=$row['staff_type_id'];
                                                    $staff_type=$row['staff_type'];
                                                
                                                ?>
                                                <option value="<?php echo $staff_type_id; ?>" selected="selected"><?php echo $staff_type; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                        </div>
                        
                        <div class="form-group">
                                            <label>Year Level</label>
                                            <select name="year_level" class="form-control">
                                                <option value="0">Please Select</option>
                                                <?php
                                                include('config.php');
                                                for($x=1; $x<=4; ++$x){
                                    
                                                ?>
                                                <option value="<?php echo $x; ?>"><?php echo $x.' '.'year'; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                        </div>
                        
                        <label>Address :  </label>
                        <input name="address" value="" placeholder="Address" id="input-price" required="" class="form-control" type="text">
                        
                        
                        <div class="form-group">
                                            <label>Course</label>
                                            <select name="course" class="form-control">
                                                <option value="0">Please Select</option>
                                                <?php
                                                include('config.php');
                                                $sql_courses='SELECT * FROM `course`';
                                                $qry_courses=mysqli_query($CON, $sql_courses) or die(mysqli_error($qry_courses));
                                                while($row=mysqli_fetch_array($qry_courses)){
                                                    $course_id=$row['course_id'];
                                                    $course=$row['course'];
                                                ?>
                                                <option value="<?php echo $course_id; ?>"><?php echo $course; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                        </div>
                        
                        <label>Contact Number :  </label>
                        <input name="contact_number" value="" placeholder="Contact Number" id="input-price" required="" class="form-control" type="text">
                        <label>Email-Address :  </label>
                        <input name="email_address" value="" placeholder="Email-Address" id="input-price" required="" class="form-control" type="text">
                        
                        
                        <button type="submit" value="Submit" name="Submit" class="btn btn-default">Submit</button>
                      <button type="submit" class="btn btn-default">Reset</button>
                      <a href="<?php echo $BASE_URL;?>index.php?page=admin_panel" style="float: right;" class="btn btn-default">Back</a>
                      
                      </form>
                      
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Borrower Information
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Borrower ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Member Type</th>
                                            <th>Contact Number</th>
                                            <th>Birthdate</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Year</th>
                                            <th>Address</th>
                                            <th>Course</th>
                                            <th>Email Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php
                                         include('config.php');
                                         
                                         $sql='SELECT student.student_id, student.student_num_id, student.first_name, student.last_name, staff_type.staff_type, student.contact_number, student.birthdate, student.age, student.gender, student.year_level, student.address, course.course, student.email_address
                                            FROM student
                                            
                                            INNER JOIN staff_type
                                            ON staff_type.staff_type_id=student.staff_type_id
                                            INNER JOIN course
                                            ON course.course_id=student.course_id';
                                         $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
                                         while($row=mysqli_fetch_array($qry)){
                                            $student_id=$row['student_id'];
                                            $student_num_id=$row['student_num_id'];
                                            $first_name=$row['first_name'];
                                            $last_name=$row['last_name'];
                                            $staff_type=$row['staff_type'];
                                            $contact_number=$row['contact_number'];
                                            $birthdate=$row['birthdate'];
                                            $age=$row['age'];
                                            $gender=$row['gender'];
                                            $year_level=$row['year_level'];
                                            $address=$row['address'];
                                            $course=$row['course'];
                                            $email_address=$row['email_address'];
                                         ?>  
                                            <td><?php echo $student_num_id; ?></td>
                                            <td><?php echo $first_name; ?></td>
                                            <td><?php echo $last_name; ?></td>
                                            <td><?php echo $staff_type; ?></td>
                                            <td><?php echo $contact_number; ?></td>
                                            <td><?php echo $birthdate; ?></td>
                                            <td><?php echo $age; ?></td>
                                            <td><?php echo $gender; ?></td>
                                            <td><?php echo $year_level; ?></td>
                                            <td><?php echo $address; ?></td>
                                            <td><?php echo $course; ?></td>
                                            <td><?php echo $email_address; ?></td>
                                            <td class="odd"><div align="center">
                                                <a rel="facebox" href="<?php echo 'php/edit_add_borrower.php?id='.$student_id; ?>">
                                                <i class="fa fa-edit fa-lg text-success"></i></a> | <a href="<?php echo 'php/delete_add_borrower.php?id='.$student_id; ?>" id="84" class="delbutton" title="Click To Delete">
                                                <i class="fa fa-times-circle fa-lg text-danger" style="margin-right: -50px;padding-right: 45px;"></i></a></div>
                                            </td>
                                        </tr>
                                        <?php
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
    