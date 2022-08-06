<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Kings College</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/style2.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <!--<div class="col-md-12">
                    <strong>Email: </strong>info@yourdomain.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+90-897-678-44
                </div>-->

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <!--<img src="assets/img/logo.png" />-->
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown"><h1 style="color: #e8e8f5; font-family: century-gothic;text-align: center;margin-bottom: -55px;margin-left: -650px;">Online Library System</h1>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <!--<span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>-->
                                <img src="./assets/img/kings.jpg" style="margin-left: -20px;margin-top: -15px;border-radius: 20px;" width="2000" height="954" />
                            </a>
                            <!--<div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="assets/img/64-64.jpg" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jhon Deo Alex </h4>
                                        <h5>Developer & Designer</h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Personal Bio : </strong></h5>
                                Anim pariatur cliche reprehen derit.
                                <hr />
                                <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="login.html" class="btn btn-danger btn-sm">Logout</a>

                            </div>-->
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <!--<li><a href="<?php echo $BASE_URL;?>index.php?page=settings">Settings</a></li>
                            
                            <li class="dropdown" style="margin-top: 10px;margin-left: 10px;">
                              <span style="color: white;">ATTENDANCE</span>
                              <div class="dropdown-content" style="background-color: black;">
                                <a href="<?php echo $BASE_URL;?>index.php?page=add_student"><p style="color: white; font-style: italic;">Add Student</p></a>
                                <a href="<?php echo $BASE_URL;?>index.php?page=attendance"><p style="color: white; font-style: italic;">Attendance</p></a>
                                <a href="<?php echo $BASE_URL;?>index.php?page=time_record"><p style="color: white; font-style: italic;">Student Time Records</p></a>
                              </div>
                            </li>
                            
                            <li><a href="<?php echo $BASE_URL;?>index.php?page=add_book">Add Book</a></li>
                            <li><a href="<?php echo $BASE_URL;?>index.php?page=add_author">Add Author</a></li>
                            <li><a href="<?php echo $BASE_URL;?>index.php?page=add_borrower">Add Borrower</a></li>
                            <li class="dropdown" style="margin-top: 10px;margin-left: 10px;">
                              <span style="color: white;">BORROW OR RETURN</span>
                              <div class="dropdown-content" style="background-color: black;">
                                <a href="<?php echo $BASE_URL;?>index.php?page=book_borrow"><p style="color: white; font-style: italic;">Book Borrow</p></a>
                                <a href="<?php echo $BASE_URL;?>index.php?page=return_book"><p style="color: white; font-style: italic;">Book Return</p></a>
                              </div>
                            </li>-->
                            
                            <li><a href="<?php echo $BASE_URL;?>index.php?page=reserve_books">Reserve Books</a></li>
                            <li><a href="<?php echo $BASE_URL;?>index.php?page=view_reserved">View Reserved Books</a></li>
                            <li><a href="<?php echo $BASE_URL;?>index.php?page=cancel_reserved">Cancel Reserved Books</a></li>
                            <!--<li><a href="<?php //echo $BASE_URL;?>index.php?page=admin_panel">Log-out</a></li>-->
                            <!--<li><a href="<?php //echo $BASE_URL;?>index.php?page=damage_lost_books">Damage or Lost Books</a></li>-->
                            <!--<li><a href="<?php //echo $BASE_URL;?>index.php?page=book_replace">Book Replace</a></li>-->
                            
                            <!--<li class="dropdown" style="margin-top: 10px;margin-left: 10px;">
                              <span style="color: white;">RESERVE</span>
                              <div class="dropdown-content" style="background-color: black;">
                                <a href="<?php echo $BASE_URL;?>index.php?page=reserve_books"><p style="color: white; font-style: italic;">Reserve Books</p></a>
                                <a href="<?php echo $BASE_URL;?>index.php?page=view_reserved"><p style="color: white; font-style: italic;">View Reserved Books</p></a>
                              </div>
                            </li>
                            
                          <li class="dropdown" style="margin-top: 10px;margin-left: 10px;">
                          <span style="color: white;">OTHER ENTRIES</span>
                          <div class="dropdown-content" style="background-color: black;">
                            <a href="<?php echo $BASE_URL;?>index.php?page=cancel_reserved"><p style="color: white; font-style: italic;">Cancel Reserved Books</p></a>
                            <a href="<?php echo $BASE_URL;?>index.php?page=damage_lost_books"><p style="color: white; font-style: italic;">Damage or Lost Books</p></a>
                            <a href="<?php echo $BASE_URL;?>index.php?page=book_replace"><p style="color: white; font-style: italic;">Book Replace</p></a>
                          </div>
                        </li>-->
                        
                        <!--<li class="dropdown" style="margin-top: 10px;margin-left: 10px;">
                          <span style="color: white;">REPORTS</span>
                          <div class="dropdown-content" style="background-color: black;">
                            <a href="<?php echo $BASE_URL;?>index.php?page=available_book_reports"><p style="color: white; font-style: italic;">Available Books</p></a>
                            <a href="<?php echo $BASE_URL;?>index.php?page=list_unreturned_books"><p style="color: white; font-style: italic;">List of Unreturned Books</p></a>
                            <a href="<?php echo $BASE_URL;?>index.php?page=list_damage_lost"><p style="color: white; font-style: italic;">List of Damage/Lost Books</p></a>
                            <a href="php/log_out.php"><p style="color: white; font-style: italic;">Log-out</p></a>
                          </div>
                        </li>-->
                        
                        <!--<li class="dropdown" style="margin-top: 10px;margin-left: 10px;">
                          <span style="color: white;">PAYMENT</span>
                          <div class="dropdown-content" style="background-color: black;">
                             <a href="<?php echo $BASE_URL;?>index.php?page=unpaid_borrowers"><p style="color: white; font-style: italic;">Unpaid Borrower's</p></a>
                            <a href="<?php echo $BASE_URL;?>index.php?page=search_borrower"><p style="color: white; font-style: italic;">Search Borrower</p></a>
                           <a href="<?php echo $BASE_URL;?>index.php?page=paid_borrowers"><p style="color: white; font-style: italic;">Paid Borrower's</p></a>
                            <a href="php/log_out.php"><p style="color: white; font-style: italic;">Log-out</p></a>
                          </div>
                        </li>
                        
                        <li class="dropdown" style="margin-top: 10px;margin-left: 10px;">
                          <span style="color: white;">UTILITY</span>
                          <div class="dropdown-content" style="background-color: black;">
                            <a href="<?php echo $BASE_URL;?>index.php?page=create_account"><p style="color: white; font-style: italic;">Create Account Type</p></a>
                            <a href="<?php echo $BASE_URL;?>index.php?page=user_account"><p style="color: white; font-style: italic;">View User Accounts</p></a>
                            <a href="<?php //echo $BASE_URL;?>index.php?page=change_account"><p style="color: white; font-style: italic;">Change Account</p></a>
                            <a href="<?php //echo $BASE_URL;?>index.php?page=delete_account"><p style="color: white; font-style: italic;">Delete Account</p></a>
                          </div>
                        </li>-->
                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    