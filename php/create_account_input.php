<?php
include('config.php');

$admin_available=mysqli_real_escape_string($CON, $_POST['admin_available']);

$sql2='INSERT INTO `admin_available`(`admin_available`) 
    VALUES ("'.$admin_available.'")';
$qry2=mysqli_query($CON, $sql2) or die(mysqli_error($qry2));
?>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Account Type</h4>

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
                        
                        <?php
                        include('config.php');
                        
                        $sql3='SELECT * FROM `admin_available`';
                        $qry3=mysqli_query($CON, $sql3) or die(mysqli_error($qry3));
                        while($row=mysqli_fetch_array($qry3)){
                            $admin_available_id=$row['admin_available_id'];
                            $admin_available2=$row['admin_available'];
                        }
                        ?>
                        
                        <form action="<?php echo $BASE_URL;?>index.php?page=save_create_account_input" method="post" enctype="multipart/form-data">
                        
                        <label>Account Type :  </label>
                        <input name="" disabled="yes" placeholder="" value="<?php echo $admin_available2; ?>" id="input-stock(units)" required="" class="form-control" type="text">
                        <input type="hidden" name="account_type_id" value="<?php echo $admin_available_id; ?>" />
                        <label>Username :  </label>
                        <input  name="user_name" value="" placeholder="First Name" id="input-price" required="" class="form-control" type="text">
                        <label>Password :  </label>
                        <input name="password" value="" placeholder="Last Name" id="input-price" required="" class="form-control" type="password">
                        <label>First Name :  </label>
                        <input name="first_name" value="" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">
                        <label>Middle Name :  </label>
                        <input name="middle_name" value="" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">
                        <label>Last Name :  </label>
                        <input name="last_name" value="" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">
                        <label>Address :  </label>
                        <input name="address" value="" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">
                        <div class="form-group">
                                            <label>Gender</label>
                                            <select name="gender" class="form-control">
                                                <option value="0">Please Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                        </div>
                        
                        <button type="submit" value="Save" name="Submit" class="btn btn-default">Save</button>
                      <!--<button type="submit" class="btn btn-default">Reset</button>-->
                      <a href="<?php echo $BASE_URL;?>index.php?page=admin_panel" style="float: right;" class="btn btn-default">Back</a>
                      
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
                                        
                                        
                                        <?php
                                       /*include('config.php');
                                       $sql='SELECT author.author_id, author.author_num_id, author.first_name, author.last_name, author_type.author_type, author.gender
                                            FROM author
                                            INNER JOIN author_type
                                            ON author_type.author_type_id=author.author_type_id
                                            ORDER BY author.author_num_id ASC';
                                       $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
                                       while($row=mysqli_fetch_array($qry)){
                                            $author_id=$row['author_id'];
                                            $author_num_id=$row['author_num_id'];
                                            $first_name=$row['first_name'];
                                            $last_name=$row['last_name'];
                                            $author_type=$row['author_type'];
                                            $gender=$row['gender'];*/
                                       ?>
                                        
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