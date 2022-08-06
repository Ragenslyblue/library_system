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
                        
                        <form action="<?php echo $BASE_URL;?>index.php?page=create_account_input" method="post" enctype="multipart/form-data">
                        
                        <div class="col-sm-7 contact-form wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft; margin-left: 150px;">
                        
                        <label class="radio-inline">
                              <input type="radio" placeholder="here" name="admin_available" value="ADMIN">Admin
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="admin_available" value="USER">User
                            </label>
                            <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
                            </div>
                        <a href="<?php echo $BASE_URL;?>index.php?page=user_account" style="margin-left: 190px;margin-top: 50px;" class="btn btn-default">View User Account</a>
                     
                         </form>
                      
                    </div>
                    
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>    