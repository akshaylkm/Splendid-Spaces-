<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Splendid Spaces</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Splendid Spaces Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header id="home">
        <div class="container">
            <div class="header d-lg-flex justify-content-between align-items-center py-sm-3 py-2 px-sm-2 px-1">
                <!-- logo -->
                <div id="logo">
                    <h1><a href="index.html">Splendid Spaces</a></h1>
                </div>
                <!-- //logo -->
                <!-- nav -->
                <div class="nav_w3ls ml-lg-5">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href="index.html">Home</a></li>
                            
                            <li class="nav-right-sty mt-lg-0 mt-sm-4 mt-3">
                                <a href="Signin.php" class="reqe-button text-uppercase">Login</a>
                                <a href="Signup.php" class="reqe-button text-uppercase active">Register</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- //nav -->
            </div>
        </div>
    </header>
    <!-- //header -->
    <!-- inner banner -->
    <div class="inner-banner-w3ls d-flex flex-column justify-content-center align-items-center">
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
                <a href="index.html" class="m-0">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Register</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- register  -->
    <div class="modal-body align-w3">
        <form action="#" method="post" class="p-sm-3">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Name</label>
                <input type="text" class="form-control" placeholder="your name" name="Name" id="recipient-name"
                    required="">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Address</label>
                <input type="text" class="form-control" placeholder="your address" name="adrs" id="recipient-name"
                    required="">
            </div>
            <div class="form-group">
            	<?php
				include('dbconnect.php');
            									$sql=mysql_query("select * from `district`");
		    									echo "<select id='sel' name='sel' class='form-control'  '>";
		    									echo "<option>.....Select District......</option>";
		    									if(mysql_num_rows($sql))
												{		
													while($rs=mysql_fetch_array($sql))
													{
														echo'<option value="'.$rs['did'].'">'.$rs['dname'].'</option>';
													}
												}
											echo "</select>";?>
            </div>
             <div class="form-group">
                <label for="recipient-email" class="col-form-label">Phone</label>
                <input type="text" class="form-control" placeholder="Your Phonenumber" name="phone" id="recipient-email"
                    required="">
            </div>
            <div class="form-group">
                <label for="recipient-email" class="col-form-label">Email</label>
                <input type="email" class="form-control" placeholder="loremipsum@email.com" name="Email" id="recipient-email"
                    required="">
            </div>
            <div class="form-group">
                <label for="password1" class="col-form-label">Password</label>
                <input type="password" class="form-control" placeholder="******" name="Password" id="password1"
                    required="">
            </div>
            <div class="form-group">
                <label for="password1" class="col-form-label">Confirm Password</label>
                <input type="password" class="form-control" placeholder="******" name="CPassword" id="password1" required="">
            </div>
            <div class="sub-w3l">
                <div class="sub-w3layouts_hub">
                    <input type="checkbox" id="brand2" value="">
                    <label for="brand2" class="mb-3 text-secondary">
                        <span></span>I Accept to the Terms & Conditions</label>
                </div>
            </div>
            <div class="right-w3l">
                <input type="submit" name="submit" class="form-control bg-theme" value="Register">
            </div>
        </form>
    </div>
    <?php
	include('dbconnect.php');
					  if(isset($_REQUEST['submit']))
					  {
						  	$cname=$_REQUEST['Name'];
					  		$address=$_REQUEST['adrs'];
						  	$pincode = $_REQUEST['sel'];
						    $gender = $_REQUEST['phone'];
					  		$age=$_REQUEST['Email'];
					  		$district=$_REQUEST['Password'];
						  $d=$_REQUEST['CPassword'];
						  if($district == $d)
						  {
							  $qry="insert into customer_reg(cname,address,district,phone,email,password) values('$cname','$address','$pincode','$gender','$age','$district')";
					//  echo "saved";

					 		mysql_query($qry);
					 		$qry1="insert into login(uname,pass,utype) values('$age','$district','Customer')";
						  	
					  		mysql_query($qry1);
							echo "<script>alert('Registration completed successfully')</script>";
						  }
					  	  else
						  {
							  echo "<script>alert('Password Mismatch')</script>";
						  }
					  					  
					 
					  }
					  
					  ?>	
    <!-- //register -->

    <!-- footer -->
    <footer class="footer py-md-5 pt-md-3 pb-sm-5">
        <div class="container">
            <div class="row p-sm-4 px-3 py-3">
                <div class="col-lg-4 footer-top mt-md-0 mt-sm-5">
                    <h2>
                        <a class="navbar-brand" href="index.html">
                            Splendid Spaces
                        </a>
                    </h2>
                    <div class="fv3-contact mt-2">
                        <p>
                            <a href="mailto:example@email.com">info@example.com</a>
                        </p>
                    </div>
                    <div class="fv3-contact my-2">
                        <p>+456 123 7890</p>
                    </div>
                    <div class="fv3-contact">
                        <p>+90 nsequursu dsdesdc,
                            <br>xxx Street State 34789.</p>
                    </div>
                </div>
                <div class="col-lg-2  col-md-6 mt-lg-0 mt-4">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Navigation</h3>
                        <hr>
                        <ul class="list-w3pvtits">
                            <li>
                                <a href="index.html">
                                    Home
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="about.html">
                                    About Us
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="portfolio.html">
                                    Portfolio
                                </a>
                            </li>
                            <li class="mb-2">

                                <a href="single.html">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  col-md-6 mt-lg-0 mt-4">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Links</h3>
                        <hr>
                        <ul class="list-w3pvtits">
                            <li>
                                <a href="about.html">
                                    Our Mission
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="single.html">
                                    Latest posts
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="portfolio.html">
                                    Explore
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="contact.html">
                                    Find us
                                </a>
                            </li>
                            <li>
                                <a href="index.html">
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mt-lg-0 mt-4">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Links</h3>
                        <hr>
                        <ul class="list-w3pvtits">
                            <li>
                                <a href="single.html">
                                    more
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="portfolio.html">
                                    our work
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="about.html">
                                    Explore
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="contact.html">
                                    contact us
                                </a>
                            </li>
                            <li>
                                <a href="index.html">
                                    references
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  col-md-6 mt-lg-0 mt-4">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Links</h3>
                        <hr>
                        <ul class="list-w3pvtits">
                            <li class="my-2">
                                <a href="portfolio.html">
                                    Explore
                                </a>
                            </li>
                            <li>
                                <a href="about.html">
                                    Our Mission
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="single.html">
                                    Latest posts
                                </a>
                            </li>

                            <li class="mb-2">
                                <a href="contact.html">
                                    Find us
                                </a>
                            </li>
                            <li>
                                <a href="index.html">
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //footer bottom -->
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="cpy-right text-center">
        <p class="text-wh">© 2019 Splendid Spaces. All rights reserved | Design by
            <a href="http://w3layouts.com"> W3layouts.</a>
        </p>
    </div>
    <!-- //copyright -->
    <!-- move top icon -->
    <a href="#home" class="move-top text-center">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </a>
    <!-- //move top icon -->

</body>

</html>