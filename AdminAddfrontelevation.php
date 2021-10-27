<?php
include('AdminPageHeader.php');
?>
<div class="modal-body align-w3">
        <form action="#" method="post" class="p-sm-3" enctype="multipart/form-data">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Plan Name</label>
                <input type="text" class="form-control" placeholder="Enter the plan name" name="name" id="recipient-name"
                    required="">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Plot Size</label>
                <input type="text" class="form-control" placeholder="Enter the plot size" name="plot" id="recipient-name"
                    required="">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Dimensions</label>
                <input type="text" class="form-control" placeholder="Enter Dimensions" name="dimension" id="recipient-name"
                    required="">
            </div>
             <div class="form-group">
                <label for="recipient-email" class="col-form-label">Bedrooms</label>
                <input type="text" class="form-control" placeholder="Number of bedroooms" name="bedrooms" id="recipient-email"
                    required="">
            </div>
             <div class="form-group">
                <label for="recipient-email" class="col-form-label">Floors</label>
                <input type="text" class="form-control" placeholder="Floors" name="Floors" id="recipient-email"
                    required="">
            </div>
            
            <div class="form-group">
                <label for="recipient-email" class="col-form-label">Plan</label>
                <input type="file" class="form-control" placeholder="Floors" name="file" id="recipient-email"
                    required="">
            </div>
            
            <div class="right-w3l">
                <input type="submit" name="submit" class="form-control bg-theme" value="Add Now">
            </div>
        </form>
    </div>
    <?php
	include('dbconnect.php');
					  if(isset($_REQUEST['submit']))
					  {
						  $name=$_REQUEST['name'];
						  	$cname=$_REQUEST['plot'];
					  		$address=$_REQUEST['dimension'];
						  	$pincode = $_REQUEST['bedrooms'];
						    $gender = $_REQUEST['Floors'];
					  		$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];


//Restriction to the image. You can upload any types of file for example video file, mp3 file, .doc or .pdf just mention here in OR condition. 

if($file_name!="" && ($file_type="image/jpeg"||$file_type="image/png"||$file_type="image/gif"))

if(move_uploaded_file ($file_path,'3DFront/'.$file_name))//"images" is just a folder name here we will load the file.
					  		
					  					  $qry="insert into 3dfront(planname,plotsize,dimension,floor,bedroom,plan) values('$name','$cname','$address','$pincode','$gender','$file_name')";
					//  echo "saved";

					 		mysql_query($qry);
					 		
							echo "<script>alert('Plan added successfully')</script>";
					 
					  }
					  
					  ?>	


<?php
include('CommonPageFooter.php');
?>