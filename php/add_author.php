<?php
include('config.php');

if(isset($_POST['Submit'])){
    $author_id=mysqli_real_escape_string($CON, $_POST['author_id']);
    $first_name=mysqli_real_escape_string($CON, $_POST['first_name']);
    $last_name2=mysqli_real_escape_string($CON, $_POST['last_name2']);
    $middle_name=mysqli_real_escape_string($CON, $_POST['middle_name']);
    //$birthdate=mysqli_real_escape_string($CON, $_POST['birthdate']);
    $age=mysqli_real_escape_string($CON, $_POST['age']);
    $gender=mysqli_real_escape_string($CON, $_POST['gender']);
    //$author_type=mysqli_real_escape_string($CON, $_POST['author_type']);
    $month=mysqli_real_escape_string($CON, $_POST['month']);
    $day=mysqli_real_escape_string($CON, $_POST['day']);
    $year=mysqli_real_escape_string($CON, $_POST['year']);
    
    $birthdate2=$month.'/'.$day.'/'.$year;
    
    $sql_dup_author='SELECT * FROM `author` WHERE author.first_name="'.$first_name.'" AND author.last_name="'.$last_name2.'"';
    $qry_dup_author=mysqli_query($CON, $sql_dup_author) or die(mysqli_error($qry_dup_author));
    $num_rows13=mysqli_num_rows($qry_dup_author);
    if($num_rows13==0){
        
    $sql_auth='INSERT INTO `author`(`first_name`, `last_name`, `middle_name`, `age`, `gender`, `author_num_id`, `birthdate`) 
        VALUES ("'.$first_name.'", "'.$last_name2.'", "'.$middle_name.'", "'.$age.'", "'.$gender.'", "'.$author_id.'", "'.$birthdate2.'")';
    $qry_auth=mysqli_query($CON, $sql_auth) or die(mysqli_error($qry_auth));
    }
}

$sql='SELECT * FROM `author_num`';
$qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
while($row=mysqli_fetch_array($qry)){
    $author_num_id=$row['author_num_id'];
    $author_num=$row['author_num'];
}if(mysqli_num_rows($qry)==1){
    $sql_sql='SELECT * FROM `author`';
    $qry_qry=mysqli_query($CON, $sql_sql) or die(mysqli_error($qry_qry));
    
    $num_rows12=mysqli_num_rows($qry_qry);
    $date=date('y');
    $curr=$date.($num_rows12+$author_num);
    $str=str_pad($curr, 9, 1, STR_PAD_LEFT);
    $id=$str+1;
}

?>

<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Add Author</h4>

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
                        
                        <label>Author ID :  </label>
                        <input name="" disabled="yes" placeholder="Author ID" value="<?php echo $id; ?>" placeholder="" id="input-stock(units)" required="" class="form-control" type="text">
                        <input type="hidden" name="author_id" value="<?php echo $id; ?>" />
                        <label>First Name :  </label>
                        <input  name="first_name" value="" placeholder="First Name" id="input-price" required="" class="form-control" type="text">
                        <label>Last Name :  </label>
                        <input name="last_name2" value="" placeholder="Last Name" id="input-price" required="" class="form-control" type="text">
                        <label>Middle Name :  </label>
                        <input name="middle_name" value="" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">

<script type="text/javascript">
function getAge(){
	var now=new Date();
	
	function isLeap(year){
		return year%4==0&&(year%100!=0||year%400==0);
		}
		
		var days=Math.floor((now.getTime()-birthDate.getTime())/1000/60/60/24);
		var age=0;
		
		for(var y=birthDate.getFullYear(); y<=now.getFullYear(); y++){
			var daysInYear=isLeap(y)?366:365;
			if(days>=daysInYear){
				days-=daysInYear;
				age++;
				}
			}
			return age;
	}
</script>          

                        <label>Birthdate :  </label>
                        <!--<input name="birthdate" onblur="getAge()" value="" placeholder="MM/DD/YYY" id="birthdate required="" class="form-control" type="text">-->
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
              		<!--<input type="hidden" name="birthdate" value="<?php //echo $i_date.'/'.$i2.'/'.$i; ?>" />
                       --> 
                
                       
                        <label>Age :  </label>
                        <input name="age" value="" placeholder="Age" id="age" required="" class="form-control" type="text">
                        <div class="form-group">
                                            <label>Gender</label>
                                            <select name="gender" class="form-control">
                                                <option value="0">Please Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                
                                            </select>
                        </div>
                        <!--<div class="form-group">
                                            <label>Author Type</label>
                                            <select name="author_type" class="form-control">
                                                <option value="0">Please Select</option>
                                                <?php
                                                /*include('config.php');
                                                $sql_type='SELECT * FROM `author_type`';
                                                $qry_type=mysqli_query($CON, $sql_type) or die(mysqli_error($qry_type));
                                                while($row=mysqli_fetch_array($qry_type)){
                                                    $author_type_id=$row['author_type_id'];
                                                    $author_type=$row['author_type'];
                                                */
                                                ?>
                                                <option value="<?php //echo $author_type_id; ?>"><?php //echo $author_type; ?></option>
                                                <?php
                                                //}
                                                ?>
                                            </select>
                        </div>-->
                        
                        <button type="submit" value="Submit" name="Submit" class="btn btn-default">Submit</button>
                      <button type="submit" class="btn btn-default">Reset</button>
                      <a href="<?php echo $BASE_URL;?>index.php?page=admin_panel" style="float: right;" class="btn btn-default">Back</a>
                      
                      </form>
                      
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Author Information
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Author ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <!--<th>Author Type</th>-->
                                            <th>Birthdate</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        
                                        
                                        <?php
                                       include('config.php');
                                       $sql='SELECT * FROM `author`';
                                       $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
                                       while($row=mysqli_fetch_array($qry)){
                                            $author_id=$row['author_id'];
                                            $author_num_id=$row['author_num_id'];
                                            $first_name=$row['first_name'];
                                            $last_name=$row['last_name'];
                                            //$author_type=$row['author_type'];
                                            $gender=$row['gender'];
                                            $birthdate=$row['birthdate'];
                                            $age=$row['age'];
                                       ?>
                                        
                                            <td><?php echo $author_num_id; ?></td>
                                            <td><?php echo $first_name; ?></td>
                                            <td><?php echo $last_name; ?></td>
                                            <!--<td><?php //echo $author_type; ?></td>-->
                                            <td><?php echo $birthdate; ?></td>
                                            <td><?php echo $age; ?></td>
                                            <td><?php echo $gender; ?></td>
                                            <td class="odd"><div align="center">
                                                <a rel="facebox" href="<?php echo 'php/edit_add_author.php?id='.$author_id; ?>">
                                                <i class="fa fa-edit fa-lg text-success"></i></a> | <a href="<?php echo 'php/delete_add_author.php?id='.$author_id;?>" id="84" class="delbutton" title="Click To Delete">
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
    