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
    
    $sql2='SELECT * FROM `author` WHERE author.author_id="'.$id.'"';
    $qry2=mysqli_query($CON, $sql2) or die(mysqli_error($qry2));
    while($row=mysqli_fetch_array($qry2)){
        $author_id=$row['author_id'];
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];
        $middle_name=$row['middle_name'];
        $age=$row['age'];
        $gender=$row['gender'];
        $author_num_id=$row['author_num_id'];
        $author_type_id=$row['author_type_id'];
        $birthdate=$row['birthdate'];
    }
}
if(isset($_POST['update'])){
    $first_name=mysqli_real_escape_string($CON, $_POST['first_name']);
    $last_name=mysqli_real_escape_string($CON, $_POST['last_name']);
    $middle_name=mysqli_real_escape_string($CON, $_POST['middle_name']);
    $birthdate=mysqli_real_escape_string($CON, $_POST['birthdate']);
    $age=mysqli_real_escape_string($CON, $_POST['age']);
    $gender=mysqli_real_escape_string($CON, $_POST['gender']);
    //$author_type=mysqli_real_escape_string($CON, $_POST['author_type']);
    
    $sql_updated='UPDATE `author` SET `first_name`="'.$first_name.'",`last_name`="'.$last_name.'",`middle_name`="'.$middle_name.'",`age`="'.$age.'",`gender`="'.$gender.'", `birthdate`="'.$birthdate.'" WHERE author.author_id="'.$id.'"';
    $qry_updated=mysqli_query($CON, $sql_updated) or die(mysqli_error($qry_updated));
    if($qry_updated){
        echo '<h1>Successfully Updated!!!</h1>';
        die();
    }
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
                        <input name="" disabled="yes" placeholder="Author ID" value="<?php echo $author_num_id; ?>" placeholder="" id="input-stock(units)" required="" class="form-control" type="text">
                        <input type="hidden" name="author_id" value="<?php echo $author_num_id; ?>" />
                        <label>First Name :  </label>
                        <input  name="first_name" value="<?php echo $first_name; ?>" placeholder="First Name" id="input-price" required="" class="form-control" type="text">
                        <label>Last Name :  </label>
                        <input name="last_name" value="<?php echo $last_name?>" placeholder="Last Name" id="input-price" required="" class="form-control" type="text">
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
                        
                        <button type="submit" value="Update" name="update" class="btn btn-default">Update</button>
                      <!--<button type="submit" class="btn btn-default">Reset</button>-->
                      
                      </form>
                      
                    </div>
                    <!--<div class="panel panel-default">
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
                                            <th>Author Type</th>
                                            <th>Gender</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        
                                        
                                        
                                        
                                            <td><?php //echo $author_num_id; ?></td>
                                            <td><?php //echo $first_name; ?></td>
                                            <td><?php //echo $last_name; ?></td>
                                            <td><?php //echo $author_type; ?></td>
                                            <td><?php //echo $gender; ?></td>
                                            <td class="odd"><div align="center">
                                                <a rel="facebox" href="<?php //echo 'php/edit_add_author.php?id='.$author_id; ?>">
                                                <i class="fa fa-edit fa-lg text-success"></i></a> | <a href="<?php echo 'php/delete_add_author.php?id='.$author_id;?>" id="84" class="delbutton" title="Click To Delete">
                                                <i class="fa fa-times-circle fa-lg text-danger" style="margin-right: -50px;padding-right: 45px;"></i></a></div>
                                            </td>
                                        </tr>
                                        <?php
                                        //}
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