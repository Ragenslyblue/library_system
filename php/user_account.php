<div class="panel panel-default">
                        <div class="panel-heading">
                            View User's Account
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Account Type</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Address</th>
                                            <th>Gender</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        
                                        
                                        <?php
                                       include('config.php');
                                       $sql='SELECT admin.admin_id, admin_available.admin_available, admin.first_name, admin.middle_name, admin.last_name, admin.address, admin.gender, admin.username, admin.password
                                            FROM admin
                                            INNER JOIN admin_available
                                            ON admin_available.admin_available_id=admin.admin_available_id
                                            ORDER BY admin.first_name ASC';
                                       $qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
                                       while($row=mysqli_fetch_array($qry)){
                                            $admin_id=$row['admin_id'];
                                            $admin_available=$row['admin_available'];
                                            $first_name=$row['first_name'];
                                            $middle_name=$row['middle_name'];
                                            $last_name=$row['last_name'];
                                            $address=$row['address'];
                                            $gender=$row['gender'];
                                            $username=$row['username'];
                                            $password=$row['password'];
                                       ?>
                                        
                                            <td><?php echo $admin_available; ?></td>
                                            <td><?php echo $first_name; ?></td>
                                            <td><?php echo $middle_name; ?></td>
                                            <td><?php echo $last_name; ?></td>
                                            <td><?php echo $address; ?></td>
                                            <td class="odd"><?php echo $gender; ?><div align="center">
                                            </td>
                                            <td><?php echo $username; ?></td>
                                            <td><?php echo $password; ?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                        
                                    </tbody>
                                </table>
                                
                      <a href="<?php echo $BASE_URL;?>index.php?page=change_account" style="float: left;" class="btn btn-default">Change Account</a>
                      <a href="<?php echo $BASE_URL;?>index.php?page=delete_account" style="float: right;" class="btn btn-default">Delete Account</a>
                               
                            </div>
                        </div>
                    </div>