<?php
include('config.php');

if(isset($_POST['Submit'])){
    
$school_name=mysqli_real_escape_string($CON, $_POST['school_name']);
$currency=mysqli_real_escape_string($CON, $_POST['currency']);
$fines=mysqli_real_escape_string($CON, $_POST['fines']);
$school_address=mysqli_real_escape_string($CON, $_POST['school_address']);
$telephone_number=mysqli_real_escape_string($CON, $_POST['telephone_number']);
//$form_header=mysqli_real_escape_string($CON, $_POST['form_header']);
//$form_footer=mysqli_real_escape_string($CON, $_POST['form_footer']);

$sql_dup='SELECT * FROM `form` WHERE fines="'.$fines.'"';
$qry_dup=mysqli_query($CON, $sql_dup) or die(mysqli_error($qry_dup));
$num_rows=mysqli_num_rows($qry_dup);
if($num_rows==0){

$sql='INSERT INTO `form`(`school_name`, `currency`, `fines`, `school_address`, `telephone_number`) 
    VALUES ("'.$school_name.'", "'.$currency.'", "'.$fines.'", "'.$school_address.'", "'.$telephone_number.'")';
$qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));
    }
}
?>

<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Settings</h4>

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
                        
                        <label>School Name : </label>
                        <input class="form-control" value="Kings College" disabled="yes" type="text">
                        <input type="hidden" name="school_name" value="Kings College" />
                        <label>Currency :  </label>
                        <input disabled="yes" name="" value="Pesos" placeholder="" id="input-stock(units)" required="" class="form-control" type="text">
                        <input type="hidden" name="currency" value="Pesos" />
                        <label>Book Fines :  </label>
                        <input name="fines" value="" placeholder="Fines" id="input-price" required="" class="form-control" type="text">
                        <label>School Address :  </label>
                        <input name="school_address" value="" placeholder="School Address" id="input-price" required="" class="form-control" type="text">
                        <label>Telephone Number :  </label>
                        <input name="telephone_number" value="" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">
                        <hr>
                        <button type="submit" value="Submit" name="Submit" class="btn btn-default">Submit</button>
                      <button type="submit" class="btn btn-default">Reset</button>
                      
                      </form>
                      
                    </div>
                    
                    <label>To Be Filled With Others: </label>
                    <br /><br />
                    
<?php
include('config.php');

/*if(isset($_POST['btn_filing'])){
    $filing_book_type=mysqli_real_escape_string($CON, $_POST['filing_book_type']);
    
    $sql_filing='INSERT INTO `filing_book_type`(`filing_book_type`) 
        VALUES ("'.$filing_book_type.'")';
    $qry_filing=mysqli_query($CON, $sql_filing) or die(mysqli_error($qry_filing));
}

if(isset($_POST['btn_delete'])){
    $filing_book_idz=mysqli_real_escape_string($CON, $_POST['filing_book_idz']);
    
    $sql_delete='DELETE FROM `filing_book_type` WHERE filing_book_type.filing_book_type_id="'.$filing_book_idz.'"';
    $qry_delete=mysqli_query($CON, $sql_delete) or die(mysqli_error($qry_delete));
}*/

if(isset($_POST['btn_delete_material'])){
    $book_type_id_mat=mysqli_real_escape_string($CON, $_POST['book_type_id_mat']);
    
    $sql_delete2='DELETE FROM `book_type` WHERE book_type.book_type_id="'.$book_type_id_mat.'"';
    $qry_delete2=mysqli_query($CON, $sql_delete2) or die(mysqli_error($qry_delete2));
}
if(isset($_POST['btn_delete_member'])){
    $staff_type_id=mysqli_real_escape_string($CON, $_POST['staff_type_id']);
    
    $sql_staff4='DELETE FROM `staff_type` WHERE staff_type.staff_type_id="'.$staff_type_id.'"';
    $qry_staff4=mysqli_query($CON, $sql_staff4) or die(mysqli_error($qry_staff4));
}
?>

                    
                    <!--<form action="" method="post" enctype="multipart/form-data">
                    <label>Filing Book Type</label>
                    <input name="filing_book_type" value="" placeholder="filing_book_type" id="input-price" required="" class="form-control" type="text">
                    <button type="submit" name="btn_filing" class="btn btn-default">Add</button>
                    </form>-->
                      
                    <!--<form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                                            <label>View Filing Book Type</label>
                                            <select multiple="" name="filing_book_idz" class="form-control">
                                                <?php
                                              /*include('config.php');
                                              $sql_filing2='SELECT * FROM `filing_book_type`';
                                              $qry_filing2=mysqli_query($CON, $sql_filing2) or die(mysqli_error($qry_filing2));
                                              while($row=mysqli_fetch_array($qry_filing2)){
                                                $filing_book_type_id=$row['filing_book_type_id'];
                                                $filing_book_type=$row['filing_book_type'];
                                              */
                                              ?>
                                                <option value="<?php //echo $filing_book_type_id; ?>"><?php //echo $filing_book_type; ?></option>
                                                <?php
                                                //}
                                                ?>
                                            </select>
                    </div>
                    
                    <button type="submit" name="btn_delete" class="btn btn-default">Delete</button>
                    </form>-->

<?php
include('config.php');

if(isset($_POST['btn_material'])){
    $book_material=mysqli_real_escape_string($CON, $_POST['book_material']);
    
    $sql_material='INSERT INTO `book_type`(`book_type`) 
        VALUES ("'.$book_material.'")';
    $qry_material=mysqli_query($CON, $sql_material) or die(mysqli_error($qry_material));
}
?>

                    <form action="" method="post" enctype="multipart/form-data">
                    <label>Book Type/Material</label>
                    <input name="book_material" value="" placeholder="Book Type/Material" id="input-price" required="" class="form-control" type="text">
                    <button type="submit" name="btn_material" class="btn btn-default">Add</button>
                    </form>
                      
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                                            <label>View Book Type/Material</label>
                                            <select multiple="" name="book_type_id_mat" class="form-control">
                                                <?php
                                              include('config.php');
                                              $sql_book_type='SELECT * FROM `book_type`';
                                              $qry_book_type=mysqli_query($CON, $sql_book_type) or die(mysqli_error($qry_book_type));
                                              while($row=mysqli_fetch_array($qry_book_type)){
                                                  $book_type_id=$row['book_type_id'];
                                                  $book_type=$row['book_type'];
                                              ?>
                                                <option value="<?php echo $book_type_id; ?>"><?php echo $book_type; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                    </div>
                    
                    <button type="submit" name="btn_delete_material" class="btn btn-default">Delete</button>
                    </form>

<?php
include('config.php');

if(isset($_POST['btn_staff'])){
    $staff_type=mysqli_real_escape_string($CON, $_POST['staff_type']);
    
    $sql_staff='INSERT INTO `staff_type`(`staff_type`) 
        VALUES ("'.$staff_type.'")';
    $qry_staff=mysqli_query($CON, $sql_staff) or die(mysqli_error($qry_staff));
}
?>                    
                               
                    <form action="" method="post" enctype="multipart/form-data">
                    <label>Member Type/Designation</label>
                    <input name="staff_type" value="" placeholder="Member Type/Designation" id="input-price" required="" class="form-control" type="text">
                    <button type="submit" name="btn_staff" class="btn btn-default">Add</button>
                    </form>
                      
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                                            <label>View Member Type</label>
                                            <select multiple="" name="staff_type_id" class="form-control">
                                                <?php
                                              include('config.php');
                                              $sql_staff2='SELECT * FROM `staff_type`';
                                              $qry_staff2=mysqli_query($CON, $sql_staff2) or die(mysqli_error($qry_staff2));
                                              while($row=mysqli_fetch_array($qry_staff2)){
                                                $staff_type_id=$row['staff_type_id'];
                                                $staff_type=$row['staff_type'];
                                              
                                              ?>
                                                <option value="<?php echo $staff_type_id; ?>"><?php echo $staff_type; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                    </div>
                    
                    <button type="submit" name="btn_delete_member" class="btn btn-default">Delete</button>
                    </form>
                    
<?php
/*include('config.php');

if(isset($_POST['Submit2'])){
    
$author_type=mysqli_real_escape_string($CON, $_POST['author_type']);

$sql_dup_auth='SELECT * FROM `author_type` WHERE author_type="'.$author_type.'"';
$qry_dup_auth=mysqli_query($CON, $sql_dup_auth) or die(mysqli_error($qry_dup_auth));

$num_rows=mysqli_num_rows($qry_dup_auth);
if($num_rows==0){
    
$sql_author_type='INSERT INTO `author_type`(`author_type`) 
    VALUES ("'.$author_type.'")';
$qry_author_type=mysqli_query($CON, $sql_author_type) or die(mysqli_error($qry_author_type));
    }
}

if(isset($_POST['btn_delete_author_type'])){
    $author_type_id=mysqli_real_escape_string($CON, $_POST['author_type_id']);
    
    $sql_delete_auth='DELETE FROM `author_type` WHERE author_type.author_type_id="'.$author_type_id.'"';
    $qry_delete_auth=mysqli_query($CON, $sql_delete_auth) or die(mysqli_error($qry_delete_auth));
}*/
?>


                    <!--<form action="" method="post" enctype="multipart/form-data">
                    <label>Author Type</label>
                    <input name="author_type" value="" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">
                    <button type="submit" name="Submit2" class="btn btn-default">Add</button>
                    </form>-->
                    
                      
                    <!--<form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                                            <label>View Author Type</label>
                                            <select multiple="" name="author_type_id" class="form-control">
                                            <?php
                                          /*include('config.php');
                                          $sql_view_auth='SELECT * FROM `author_type`';
                                          $qry_view_auth=mysqli_query($CON, $sql_view_auth) or die(mysqli_error($qry_view_auth));
                                          while($row=mysqli_fetch_array($qry_view_auth)){
                                            $author_type_id=$row['author_type_id'];
                                            $author_type=$row['author_type'];*/
                                          ?>
                                                <option value="<?php //echo $author_type_id; ?>"><?php //echo $author_type; ?></option>
                                          <?php
                                          //}
                                          ?>
                                            </select>
                    </div>
                    
                    <button type="submit" name="btn_delete_author_type" class="btn btn-default">Delete</button>
                    </form>-->

<?php
include('config.php');

if(isset($_POST['Submit3'])){
    
$category=mysqli_real_escape_string($CON, $_POST['category']);

$sql_dup_cat='SELECT * FROM `category` WHERE category.category_name="'.$category.'"';
$qry_dup_cat=mysqli_query($CON, $sql_dup_cat) or die(mysqli_error($qry_dup_cat));
$num_rows_cat=mysqli_num_rows($qry_dup_cat);
if($num_rows_cat==0){

$sql_cat='INSERT INTO `category`(`category_name`) 
    VALUES ("'.$category.'")';
$qry_cat=mysqli_query($CON, $sql_cat) or die(mysqli_error($qry_cat));
    }
}
if(isset($_POST['btn_delete_cat'])){
    $view_category=mysqli_real_escape_string($CON, $_POST['view_category']);
    
    $sql_delete_cat='DELETE FROM `category` WHERE category.category_id="'.$view_category.'"';
    $qry_delete_cat=mysqli_query($CON, $sql_delete_cat) or die(mysqli_error($qry_delete_cat));
}
?>

      
                    <form action="" method="post" enctype="multipart/form-data">
                    <label>Category</label>
                    <input name="category" value="" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">
                    <button type="submit" name="Submit3" class="btn btn-default">Add</button>
                    </form>
                      
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                                            <label>View Category</label>
                                            <select multiple="" name="view_category" class="form-control">
                                                <?php
                                                  include('config.php');
                                                  $sql_cat2='SELECT * FROM `category`';
                                                  $qry_cat2=mysqli_query($CON, $sql_cat2) or die(mysqli_error($qry_cat2));
                                                  while($row=mysqli_fetch_array($qry_cat2)){
                                                    $category_id=$row['category_id'];
                                                    $category_name=$row['category_name'];
                                                  
                                                  ?>
                                                <option value="<?php echo $category_id; ?>"><?php echo $category_name; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                    </div>
                    
                    <button type="submit" name="btn_delete_cat" class="btn btn-default">Delete</button>
                    </form>

<?php
include('config.php');

/*if(isset($_POST['btn_supplier'])){
    
$supplier=mysqli_real_escape_string($CON, $_POST['supplier']);

$sql_supplier='INSERT INTO `supplier`(`supplier`) 
    VALUES ("'.$supplier.'")';
$qry_supplier=mysqli_query($CON, $sql_supplier) or die(mysqli_error($qry_supplier));
}
if(isset($_POST['btn_delete_sup'])){
    $supplier_id=mysqli_real_escape_string($CON, $_POST['supplier_id']);
    
    $sql_delete_sup='DELETE FROM `supplier` WHERE supplier.supplier_id="'.$supplier_id.'"';
    $qry_delete_sup=mysqli_query($CON, $sql_delete_sup) or die(mysqli_error($qry_delete_sup));
}*/
?>
                    
                    <!--<form action="" method="post" enctype="multipart/form-data">
                    <label>Supplier</label>
                    <input name="supplier" value="" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">
                    <button type="submit" name="btn_supplier" class="btn btn-default">Add</button>
                    </form>-->
                      
                    <!--<form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                                            <label>View Supplier</label>
                                            <select multiple="" name="supplier_id" class="form-control">
                                                <?php
                                              /*include('config.php');
                                              $sql_view='SELECT * FROM `supplier`';
                                              $qry_view=mysqli_query($CON, $sql_view) or die(mysqli_error($qry_view));
                                              while($row=mysqli_fetch_array($qry_view)){
                                                $supplier_id=$row['supplier_id'];
                                                $supplier=$row['supplier'];
                                              */
                                              ?>
                                                <option value="<?php //echo $supplier_id; ?>"><?php //echo $supplier; ?></option>
                                              <?php
                                              //}
                                              ?>
                                            </select>
                    </div>
                    
                    <button type="submit" name="btn_delete_sup" class="btn btn-default">Delete</button>
                    </form>-->

<?php
include('config.php');

if(isset($_POST['Submit4'])){
    $course=mysqli_real_escape_string($CON, $_POST['course']);
    
    $sql_dup_course='SELECT * FROM `course` WHERE course="'.$course.'"';
    $qry_dup_course=mysqli_query($CON, $sql_dup_course) or die(mysqli_error($qry_dup_course));
    $num_rows_course=mysqli_num_rows($qry_dup_course);
    if($num_rows_course==0){
    
    $sql_course='INSERT INTO `course`(`course`) 
        VALUES ("'.$course.'")';
    $qry_course=mysqli_query($CON, $sql_course) or die(mysqli_error($qry_course));
}
}
if(isset($_POST['Submit2'])){
    $view_course=mysqli_real_escape_string($CON, $_POST['view_course']);
    
    $sql_delete_course='DELETE FROM `course` WHERE course.course_id="'.$view_course.'"';
    $qry_delete_course=mysqli_query($CON, $sql_delete_course) or die(mysqli_error($qry_delete_course));
}
?>


                    <form action="" method="post" enctype="multipart/form-data">
                    <label>Courses</label>
                    <input name="course" value="" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">
                    <button type="submit" name="Submit4" class="btn btn-default">Add</button>
                    </form>
                      
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                                            <label>View Courses</label>
                                            <select multiple="" name="view_course" class="form-control">
                                                <?php
                                              include('config.php');
                                              $sql_course_slc='SELECT * FROM `course`';
                                              $qry_course_slc=mysqli_query($CON, $sql_course_slc) or die(mysqli_error($qry_course_slc));
                                              while($row=mysqli_fetch_array($qry_course_slc)){
                                                    $course_id=$row['course_id'];
                                                    $course=$row['course']; 
                                              ?>
                                                <option value="<?php echo $course_id; ?>"><?php echo $course; ?></option>
                                              <?php
                                              }
                                              ?>  
                                            </select>
                    </div>
                    
                    <button type="submit" name="Submit2" class="btn btn-default">Delete</button>
                    </form>

<?php
if(isset($_POST['btn_section'])){
    $section=mysqli_real_escape_string($CON, $_POST['section']);
    
    $sql_dup_sec='SELECT * FROM `section` WHERE section.section="'.$section.'"';
    $qry_dup_sec=mysqli_query($CON, $sql_dup_sec) or die(mysqli_error($qry_dup_sec));
    $num_rows_sec=mysqli_num_rows($qry_dup_sec);
    if($num_rows_sec==0){
        
    $sql_section='INSERT INTO `section`(`section`) 
        VALUES ("'.$section.'")';
    $qry_section=mysqli_query($CON, $sql_section) or die(mysqli_error($qry_section));
    }
    
}
if(isset($_POST['btn_delete_sec'])){
    $view_section=mysqli_real_escape_string($CON, $_POST['view_section']);
    
    $sql_sec_sec='DELETE FROM `section` WHERE section.section_id="'.$view_section.'"';
    $qry_sec_sec=mysqli_query($CON, $sql_sec_sec) or die(mysqli_error($qry_sec_sec));
}
?>
                    
                    <form action="" method="post" enctype="multipart/form-data">
                    <label>Section</label>
                    <input name="section" value="" placeholder="Section" id="input-price" required="" class="form-control" type="text">
                    <button type="submit" name="btn_section" class="btn btn-default">Add</button>
                    </form>
                      
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                                            <label>View Section</label>
                                            <select multiple="" name="view_section" class="form-control">
                                                <?php
                                                include('config.php');
                                                $sql_view_sec='SELECT * FROM `section`';
                                                $qry_view_sec=mysqli_query($CON, $sql_view_sec) or die(mysqli_error($qry_view_sec));
                                                while($row=mysqli_fetch_array($qry_view_sec)){
                                                    $section_id=$row['section_id'];
                                                    $section=$row['section'];
                                                ?>
                                                <option value="<?php echo $section_id; ?>"><?php echo $section; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                    </div>
                    
                    <button type="submit" name="btn_delete_sec" class="btn btn-default">Delete</button>
                    </form>
<?php
include('config.php');

if(isset($_POST['Submit_book_lang'])){
    $book_language=mysqli_real_escape_string($CON, $_POST['book_language']);
    
    $sql_dup_lang='SELECT * FROM `language` where language="'.$book_language.'"';
    $qry_dup_lang=mysqli_query($CON, $sql_dup_lang) or die(mysqli_error($qry_dup_lang)); 
    $num_rows_lang=mysqli_num_rows($qry_dup_lang);
    if($num_rows_lang==0){
    
    $sql_ins_lang='INSERT INTO `language`(`language`) 
        VALUES ("'.$book_language.'")';
    $qry_ins_lang=mysqli_query($CON, $sql_ins_lang) or die(mysqli_error($qry_ins_lang));  
    }
}
if(isset($_POST['btn_delelte_book_lang'])){
    $view_book_language_id=mysqli_real_escape_string($CON, $_POST['view_book_language_id']);
    
    $sql_delete_book_lang='DELETE FROM `language` WHERE language.language_id="'.$view_book_language_id.'"';
    $qry_delete_book_lang=mysqli_query($CON, $sql_delete_book_lang) or die(mysqli_error($qry_delete_book_lang));
}
?>
                    
                    <form action="" method="post" enctype="multipart/form-data">
                    <label>Book Language</label>
                    <input name="book_language" value="" placeholder="Telephone Number" id="input-price" required="" class="form-control" type="text">
                    <button type="submit" name="Submit_book_lang" class="btn btn-default">Add</button>
                    </form>
                      
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                                            <label>View Book Language</label>
                                            <select multiple="" name="view_book_language_id" class="form-control">
                                                <?php
                                                include('config.php');
                                                $sql_view='SELECT * FROM `language`';
                                                $qry_view=mysqli_query($CON, $sql_view) or die(mysqli_error($qry_view));
                                                while($row=mysqli_fetch_array($qry_view)){
                                                    $language_id=$row['language_id'];
                                                    $language=$row['language'];
                                                ?>
                                                <option value="<?php echo $language_id; ?>"><?php echo $language; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                    </div>
                    
                    <button type="submit" name="btn_delelte_book_lang" class="btn btn-default">Delete</button>
                    <a href="<?php echo $BASE_URL;?>index.php?page=admin_panel" style="float: right;" class="btn btn-default">Back</a>
                    </form>
                    
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    