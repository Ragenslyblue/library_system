<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Book Borrow</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                </div>

            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <hr/>
                     <div class="Compose-Message">               
                <div class="panel panel-success" style="margin-right: -300px;margin-left: 300px;">
                    <div class="panel-body">
                        
                        <form action="<?php echo $BASE_URL;?>index.php?page=search_book_borrower" method="post" enctype="multipart/form-data">
                        
                        <label>Borrower ID :  </label>
                        <input  name="student_id" value="" placeholder="Borrower ID" id="input-price" required="" class="form-control" type="text">
                        <br /><br />
                        <button type="submit" value="Search" name="Submit" class="btn btn-default">Search</button>&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="reset" class="btn btn-default">Reset</button>
                      <a href="<?php echo $BASE_URL;?>index.php?page=admin_panel" style="float: right;" class="btn btn-default">Back</a>
                      
                      </form>
                      
                    </div>
                    
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>    