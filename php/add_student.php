<?php
include('config.php');

if(isset($_POST['Submit_val'])){
    $student_id=mysqli_real_escape_string($CON, $_POST['student_id']);
    $first_name=mysqli_real_escape_string($CON, $_POST['first_name']);
    $last_name=mysqli_real_escape_string($CON, $_POST['last_name']);
    $middle_name=mysqli_real_escape_string($CON, $_POST['middle_name']);
    $gender=mysqli_real_escape_string($CON, $_POST['gender']);
    $course_id=mysqli_real_escape_string($CON, $_POST['course_id']);
    $section_id=mysqli_real_escape_string($CON, $_POST['section_id']);
    
    $sql='INSERT INTO `student_student`(`student_number_num_id`, `first_name`, `last_name`, `middle_name`, `gender`, `course_id`, `section_id`) 
        VALUES ("'.$student_id.'", "'.$first_name.'", "'.$last_name.'", "'.$middle_name.'", "'.$gender.'", "'.$course_id.'", "'.$section_id.'")';
    $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
    
}
?>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Add Student</h4>

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
                        
                        <label>Student ID :  </label>
                        <input name="student_id" value="<?php //echo $id_num; ?>" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">
                        <label>First Name :  </label>
                        <input name="first_name" placeholder="First Name" value="" id="input-stock(units)" required="" class="form-control" type="text">
                        <label>Last Name :  </label>
                        <input name="last_name" value="" placeholder="Last Name" id="input-price" required="" class="form-control" type="text">
                        <label>Middle Name :  </label>
                        <input name="middle_name" value="" placeholder="Middle Name" id="input-price" required="" class="form-control" type="text">
                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control" name="gender">
                                                <option value="0">Please Select</option>
                                                <option value="male">Male</option>
                                                 <option value="female">Female</option>
                                           </select>
                        </div>
                        <div class="form-group">
                                            <label>Course</label>
                                            <select class="form-control" name="course_id">
                                            
                                                <?php
                                                include('config.php');
                                                $sql_course='SELECT * FROM `course`';
                                                $qry_course=mysqli_query($CON, $sql_course) or die(mysqli_error($qry_course));
                                                while($row=mysqli_fetch_array($qry_course)){
                                                    $course_id=$row['course_id'];
                                                    $course=$row['course'];
                                                ?>
                                                <option value="<?php echo $course_id; ?>"><?php echo $course; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                        </div>
                        
                        <div class="form-group">
                                            <label>Section</label>
                                            <select class="form-control" name="section_id">
                                                <?php
                                                include('config.php');
                                                $sql_sec='SELECT * FROM `section`';
                                                $qry_sec=mysqli_query($CON, $sql_sec) or die(mysqli_error($qry_sec));
                                                while($row=mysqli_fetch_array($qry_sec)){
                                                    $section_id=$row['section_id'];
                                                    $section=$row['section'];
                                                ?>
                                               <option value="<?php echo $section_id; ?>"><?php echo $section; ?></option>
                                               <?php
                                               }
                                               ?>
                                            </select>
                        </div>
                        
                        <hr>
                        <button type="submit" value="Submit" name="Submit_val" class="btn btn-default">Submit</button>
                      <button type="submit" class="btn btn-default">Reset</button>
                      <a href="<?php echo $BASE_URL;?>index.php?page=admin_panel" style="float: right;" class="btn btn-default">Back</a>
                      </form>
                      
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Student Information
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Middle Name</th>
                                            <th>Gender</th>
                                            <th>Course</th>
                                            <th>Section</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        
                                        <?php
                                        include('config.php');
                                        
                                        $sql_student='SELECT student_student.student_student_id, student_student.student_number_num_id, student_student.first_name, student_student.last_name, student_student.middle_name, student_student.gender, course.course, section.section
                                            FROM student_student
                                            INNER JOIN course
                                            ON course.course_id=student_student.course_id
                                            INNER JOIN section
                                            ON section.section_id=student_student.section_id';
                                        $qry_student=mysqli_query($CON, $sql_student) or die(mysqli_error($qry_student));
                                        while($row=mysqli_fetch_array($qry_student)){
                                            $student_student_id=$row['student_student_id'];
                                            $student_number_num_id=$row['student_number_num_id'];
                                            $first_name=$row['first_name'];
                                            $last_name=$row['last_name'];
                                            $middle_name=$row['middle_name'];
                                            $gender=$row['gender'];
                                            $course=$row['course'];
                                            $section=$row['section'];
                                        ?>
                                        
                                            <td><?php echo $student_number_num_id; ?></td>
                                            <td><?php echo $first_name; ?></td>
                                            <td><?php echo $last_name; ?></td>
                                            <td><?php echo $middle_name; ?></td>
                                            <td><?php echo $gender; ?></td>
                                            <td><?php echo $course; ?></td>
                                            <td><?php echo $section; ?></td>
                                            <td class="odd"><div align="center">
                                                <a rel="facebox" href="<?php echo 'php/edit_add_student.php?id='.$student_student_id; ?>">
                                                <i class="fa fa-edit fa-lg text-success"></i></a> | <a href="<?php echo 'php/delete_add_student.php?id='.$student_student_id; ?>" id="84" class="delbutton" title="Click To Delete">
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
    