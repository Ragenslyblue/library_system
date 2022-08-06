<link href="../assets/css/bootstrap.css" rel="stylesheet" />
<!-- FONT AWESOME ICONS  -->
<link href="../assets/css/font-awesome.css" rel="stylesheet" />
<!-- CUSTOM STYLE  -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/style2.css" rel="stylesheet" />     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php
include('../config.php');
include('header.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    if(isset($_POST['btn_update'])){
        
    $student_id=mysqli_real_escape_string($CON, $_POST['student_id']);
    $first_name=mysqli_real_escape_string($CON, $_POST['first_name']);
    $last_name=mysqli_real_escape_string($CON, $_POST['last_name']);
    $middle_name=mysqli_real_escape_string($CON, $_POST['middle_name']);
    $gender=mysqli_real_escape_string($CON, $_POST['gender']);
    $course_id=mysqli_real_escape_string($CON, $_POST['course_id']);
    $section_id=mysqli_real_escape_string($CON, $_POST['section_id']);
    
    $sql='UPDATE `student_student` SET `student_number_num_id`="'.$student_id.'",`first_name`="'.$first_name.'",`last_name`="'.$last_name.'",`middle_name`="'.$middle_name.'",`gender`="'.$gender.'",`course_id`="'.$course_id.'",`section_id`="'.$section_id.'" 
        WHERE student_student.student_student_id="'.$id.'"';
    $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
    if($qry){
        //header('Location:'.$BASE_URL.'index.php?page=add_student');
        echo '<h1>Successfully Updated!!!</h1>';
        die();
        }
    }
    
    $sql2='SELECT * FROM `student_student` WHERE student_student.student_student_id="'.$id.'"';
    $qry2=mysqli_query($CON, $sql2) or die(mysqli_error($qry2));
    while($row=mysqli_fetch_array($qry2)){
        $student_student_id=$row['student_student_id'];
        $student_number_num_id=$row['student_number_num_id'];
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];
        $middle_name=$row['middle_name'];
        }    
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
                        <input name="student_id" value="<?php echo $student_number_num_id; ?>" placeholder="Student ID" id="input-price" required="" class="form-control" type="text">
                        <label>First Name :  </label>
                        <input name="first_name" placeholder="Book Number" value="<?php echo $first_name; ?>" id="input-stock(units)" required="" class="form-control" type="text">
                        <label>Last Name :  </label>
                        <input name="last_name" value="<?php echo $last_name; ?>" placeholder="Book Title" id="input-price" required="" class="form-control" type="text">
                        <label>Middle Name :  </label>
                        <input name="middle_name" value="<?php echo $middle_name; ?>" placeholder="School Address" id="input-price" required="" class="form-control" type="text">
                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control" name="gender">
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
                        <button type="submit" value="Update" name="btn_update" class="btn btn-default">Update</button>
                      <!--<button type="submit" class="btn btn-default">Reset</button>-->
                      
                      </form>
                      
                    </div>
                    <div class="panel panel-default">
                        
                    </div>
                    
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
<?php
include('footer.php');
?>