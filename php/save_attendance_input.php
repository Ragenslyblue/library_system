<?php
include('config.php');

$time_in=mysqli_real_escape_string($CON, $_POST['time_in']);
$student_idz=mysqli_real_escape_string($CON, $_POST['student_idz']);

$sql='INSERT INTO `attendance`(`student_student_id`, `time_in`) 
    VALUES ("'.$student_idz.'", "'.$time_in.'")';
$qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
?>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Successfully Time-in!!!</h4>

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
                    <!--<div class="panel-body">
                        
                        
                      
                    </div>-->
                    
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>    