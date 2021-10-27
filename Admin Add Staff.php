<?php
include('AdminPageHeader.php');
?>

<div class="modal-body align-w3">
        <form action="#" method="post" class="p-sm-3">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Name</label>
                <input type="text" class="form-control" placeholder="your name" name="Name" id="recipient-name"
                    required="">
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
						    $gender = $_REQUEST['phone'];
					  		$age=$_REQUEST['Email'];
					  		$district=$_REQUEST['Password'];
							  $qry="insert into staff_reg(sname,email,phone,password) values('$cname','$age','$gender','$district')";
					//  echo "saved";

					 		mysql_query($qry);
					 		$qry1="insert into login(uname,pass,utype) values('$age','$district','Staff')";
						  	
					  		mysql_query($qry1);
							echo "<script>alert('Registration completed successfully')</script>";
						 
					  					  
					 
					  }
					  
					  ?>	

<?php
include('CommonPageFooter.php');
?>