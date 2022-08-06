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
                        
                        <form action="<?php echo $BASE_URL;?>index.php?page=attendance_input" method="post" enctype="multipart/form-data">
                        
                        <label>Student ID :  </label>
                        <input  name="student_id" value="" placeholder="Student ID" id="input-price" required="" class="form-control" type="text">
                        <br /><br />
                        <button type="submit" value="Search" name="Submit" class="btn btn-default">Search</button>&nbsp;&nbsp;&nbsp;&nbsp;
                      <!--<button type="reset" class="btn btn-default">Reset</button>-->
                      <a href="<?php echo $BASE_URL;?>index.php?page=time_record" class="btn btn-default">View Student Time Records</a>&nbsp;&nbsp;&nbsp;
                      <a href="<?php echo $BASE_URL;?>index.php?page=admin_panel" class="btn btn-default">Back</a>
                      
                      </form>
                      
                    </div>
                    
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>    