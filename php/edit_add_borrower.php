<link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/style2.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


<?php

/**
 * @author pakisab
 * @copyright 2017
 */

include('../config.php');
include('header.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $sql='SELECT * FROM `student` WHERE student.student_id="'.$id.'"';
    $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
    while($row=mysqli_fetch_array($qry)){
        $student_id=$row['student_id'];
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];
        $middle_name=$row['middle_name'];
        $age=$row['age'];
        $gender=$row['gender'];
        $student_num_id=$row['student_num_id'];
        $year_level=$row['year_level'];
        $address=$row['address'];
        $course_id=$row['course_id'];
        $contact_number=$row['contact_number'];
        $email_address=$row['email_address'];
        $birthdate=$row['birthdate'];
        $staff_type_id=$row['staff_type_id'];
    }  
}
if(isset($_POST['update'])){
    $first_name=mysqli_real_escape_string($CON, $_POST['first_name']);
    $last_name=mysqli_real_escape_string($CON, $_POST['last_name']);
    $middle_name=mysqli_real_escape_string($CON, $_POST['middle_name']);
    $birthdate=mysqli_real_escape_string($CON, $_POST['birthdate']);
    $age=mysqli_real_escape_string($CON, $_POST['age']);
    $gender=mysqli_real_escape_string($CON, $_POST['gender']);
    $member_type=mysqli_real_escape_string($CON, $_POST['member_type']);
    $year_level=mysqli_real_escape_string($CON, $_POST['year_level']);
    $address=mysqli_real_escape_string($CON, $_POST['address']);
    $course=mysqli_real_escape_string($CON, $_POST['course']);
    $contact_number=mysqli_real_escape_string($CON, $_POST['contact_number']);
    $email_address=mysqli_real_escape_string($CON, $_POST['email_address']);
    
    $sql_updated='UPDATE `student` SET `first_name`="'.$first_name.'",`last_name`="'.$last_name.'",`middle_name`="'.$middle_name.'",`age`="'.$age.'",`gender`="'.$gender.'", `year_level`="'.$year_level.'",`address`="'.$address.'",`course_id`="'.$course.'",`contact_number`="'.$contact_number.'", `email_address`="'.$email_address.'",`birthdate`="'.$birthdate.'",`staff_type_id`="'.$member_type.'" WHERE student.student_id="'.$id.'"';
    $qry_updated=mysqli_query($CON, $sql_updated) or die(mysqli_error($qry_updated));
    if($qry_updated){
        //header('Location:'.$BASE_URL.'index.php?page=add_borrower');
        echo '<h1>Successfully Updated!!!</h1>';
        die();
    }
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
                        <input name="" disabled="yes" placeholder="Author ID" value="<?php echo $student_num_id ?>" placeholder="" id="input-stock(units)" required="" class="form-control" type="text">
                        <input type="hidden" name="student_id" value="<?php echo $student_num_id; ?>" />
                        <label>First Name :  </label>
                        <input  name="first_name" value="<?php echo $first_name; ?>" placeholder="First Name" id="input-price" required="" class="form-control" type="text">
                        <label>Last Name :  </label>
                        <input name="last_name" value="<?php echo $last_name; ?>" placeholder="Last Name" id="input-price" required="" class="form-control" type="text">
                        <label>Middle Name :  </label>
                        <input name="middle_name" value="<?php echo $middle_name; ?>" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">
                        <label>Birthdate :  </label>
                        <input name="birthdate" value="<?php echo $birthdate; ?>" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">
                        <label>Age :  </label>
                        <input name="age" value="<?php echo $age; ?>" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">
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
                                                <option value="<?php echo $staff_type_id; ?>"><?php echo $staff_type; ?></option>
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
                        <input name="address" value="<?php echo $address; ?>" placeholder="Address" id="input-price" required="" class="form-control" type="text">
                        
                        
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
                        <input name="contact_number" value="<?php echo $contact_number; ?>" placeholder="Contact Number" id="input-price" required="" class="form-control" type="text">
                        <label>Email-Address :  </label>
                        <input name="email_address" value="<?php echo $email_address; ?>" placeholder="Email-Address" id="input-price" required="" class="form-control" type="text">
                        
                        
                        <button type="submit" value="Update" name="update" class="btn btn-default">Update</button>
                      <!--<button type="submit" class="btn btn-default">Reset</button>-->
                      
                      </form>
                      
                    </div>
                    <!--<div class="panel panel-default">
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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                         
                                            <td><?php //echo $student_num_id; ?></td>
                                            <td><?php //echo $first_name; ?></td>
                                            <td><?php //echo $last_name; ?></td>
                                            <td><?php //echo $staff_type; ?></td>
                                            <td><?php //echo $contact_number; ?></td>
                                            <td class="odd"><div align="center">
                                                <a rel="facebox" href="<?php //echo 'php/edit_add_borrower.php?id='.$student_id; ?>">
                                                <i class="fa fa-edit fa-lg text-success"></i></a> | <a href="<?php //echo 'php/delete_add_borrower.php?id='.$student_id; ?>" id="84" class="delbutton" title="Click To Delete">
                                                <i class="fa fa-times-circle fa-lg text-danger" style="margin-right: -50px;padding-right: 45px;"></i></a></div>
                                            </td>
                                        </tr>
                                        <?php
                                       // }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>-->
                    
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
<?php
include('footer.php');
?>