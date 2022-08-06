   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Student Time Record
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
                                            <th>Course</th>
                                            <th>Section</th>
                                            <th>Time In</th>
                                            <!--<th>Action</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        
                                        
                                        <?php
                                       include('config.php');
                                       $sql='SELECT attendance.attendance_id, student_student.student_number_num_id, student_student.first_name, student_student.last_name, student_student.middle_name, student_student.course_id, course.course, student_student.section_id, section.section, attendance.time_in
                                            FROM attendance
                                            INNER JOIN student_student
                                            ON student_student.student_student_id=attendance.student_student_id
                                            INNER JOIN course
                                            ON course.course_id=student_student.course_id
                                            INNER JOIN section
                                            ON section.section_id=student_student.section_id
                                            ORDER BY student_student.student_number_num_id ASC';
                                       $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
                                       while($row=mysqli_fetch_array($qry)){
                                            $attendance_id=$row['attendance_id'];
                                            $student_number_num_id=$row['student_number_num_id'];
                                            $first_name=$row['first_name'];
                                            $last_name=$row['last_name'];
                                            $middle_name=$row['middle_name'];
                                            $course=$row['course'];
                                            $section=$row['section'];
                                            $time_in=$row['time_in'];
                                       ?>
                                        
                                            <td><?php echo $student_number_num_id; ?></td>
                                            <td><?php echo $first_name; ?></td>
                                            <td><?php echo $last_name; ?></td>
                                            <td><?php echo $middle_name; ?></td>
                                            <td><?php echo $course; ?></td>
                                            <td><?php echo $section; ?></td>
                                            <td><?php echo $time_in; ?></td>
                                            <!--<td class="odd"><div align="center">
                                                <a rel="facebox" href="<?php //echo 'php/edit_add_author.php?id='.$author_id; ?>">
                                                <i class="fa fa-edit fa-lg text-success"></i></a> | <a href="<?php //echo 'php/delete_add_author.php?id='.$author_id;?>" id="84" class="delbutton" title="Click To Delete">
                                                <i class="fa fa-times-circle fa-lg text-danger" style="margin-right: -50px;padding-right: 45px;"></i></a></div>
                                            </td>-->
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
    