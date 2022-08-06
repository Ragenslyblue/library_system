<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Search Borrower</h4>

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
                        
                        <form action="<?php echo $BASE_URL;?>index.php?page=view_borrower" method="post" enctype="multipart/form-data">
                        
                        <label>Borrower's Name :  </label>
                        <input  name="borrowers_name" value="" placeholder="Borrower's Name" id="input-price" required="" class="form-control" type="text">
                        <br /><br />
                        <button type="submit" value="Search" name="Submit" class="btn btn-default">Search</button>&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="reset" class="btn btn-default">Reset</button>
                      
                      <a href="<?php //echo $BASE_URL;?>index.php?page=paid_borrowers" style="float: right;" class="btn btn-default">Paid Borrowers</a>&nbsp;
                      <a href="<?php echo $BASE_URL;?>index.php?page=unpaid_borrowers" style="float: right;" class="btn btn-default">Unpaid Borrowers</a>
                      </form>
                      
                    </div>
                    
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    