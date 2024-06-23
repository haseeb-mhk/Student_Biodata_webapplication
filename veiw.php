	<?php

include("include/Connection.php");


if(!empty($_GET["VId"])){
	
	$Vid = $_GET["VId"];

	$res=mysqli_query($link,"Select * from  student where s_no= '$Vid'");
		$r = mysqli_fetch_row($res);


 $stdname=$r[1];
    $fname=$r[2];
    $rollno=$r[3];
    $registrationno=$r[4];
    $discipline=$r[5];
    $session=$r[6];
    $bloodgrou=$r[7];
    $dob=$r[8];
    $cnic=$r[9];
    $permanent_cno=$r[10];
    $emergency_cno=$r[11];
    $permanent_address=$r[12];
    $present_address=$r[13];
    $Domicile_district=$r[14];
    $province= $r[15];
    $quota=$r[16];
    $gender=$r[17];
    $religion=$r[18];
    $nationality=$r[19];
    $ssc_major=$r[20];
    $ssc_ob_marks=$r[21];
    $ssc_t=$r[22];
    $ssc_percentage=$r[23];
    $ssc_board=$r[24];
	$hssc_major=$r[25];
    $hssc_ob_marks=$r[26];
    $hssc_total_marks=$r[27];
    $hssc_percentage=$r[28];
    $hssc_board=$r[29];
	$Image_url = $r[30];
if (strpos($Image_url, "http://") === 0 || strpos($Image_url, "https://") === 0) {
		// It's a URL
		$imageID = "";
		if (preg_match('/id=([a-zA-Z0-9_\-]+)/', $Image_url, $matches)) {
			$imageID = $matches[1];
		}
		// Define the common part of the URL
		$baseURL = "https://drive.google.com/uc?export=download&id=";
		// Create the complete image URL
		$completeImageURL = $baseURL . $imageID;
} else {
		// It's not a URL, it's likely a picture name
		$folder = "studentimages/";
		$completeImageURL = $folder.$Image_url;
	    }



	
	
	
	
}
?>
<!DOCTYPE html>
<html lang="en">
	
	<?php
include("include/head.php");
?>

<body>
	
<?php
include("include/header.php");
include("include/sidebar.php");
?>
 



  <main id="main" class="main">
<div class="row">
	  <div class="col-6">
		   <div class="pagetitle">
      <h1>Individual Student Record</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item"><a href="record.php">Records</a></li>
          <li class="breadcrumb-item active">Individual Student Record</li>
        </ol>
      </nav>
		
    </div>
	
	</div>
	  <div class="col-6">
		 <div style="float: right; "><a href="record.php" class=" btn btn-danger btn-xs "  title="go back to record">Back To Record</i></a></div>
	</div>
	  </div>
   
	 <!-- End Page Title -->
<br><br>
	  
	  
	 <div class="view" style="border: 2px solid black; background-color: white; margin: 20px; padding: 50px; border-radius: 10px;">
	 <!-- studentimages/-->
	 <!--   -->
	<!-- <img src="https://drive.google.com/open?id=1db7FRzw_ujbWlVMUHi5MOqnUkOjwcX2S"> -->
		<div class="row">
			<h3>Personal Details</h3><hr>
			<div class="col-4" style="border-right: 2px solid black;">
				<div class="img" >
					<img src="<?php echo ($completeImageURL);?>" style="align-content: center; border: 5px solid #7245F7; border-radius: 50%; width: 150px; height: 150px; margin: 32px 25px;" >
				</div>
			</div>
			<div class="col-8">
				<div class="row">
						<div class="col-6">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;" >Full NAME:&nbsp;</h4>
						</div>
						<div class="col-6">
							<h4><?php echo($stdname) ?></h4>
						</div>
					</div>
					
					<div class="row">
						<div class="col-6">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">Father Name:&nbsp;</h4>
						</div>
						<div class="col-6">
							<h4><?php echo($fname) ?></h4>
						</div>
					</div>
					
					<div class="row">
						<div class="col-6">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">Roll No:&nbsp;</h4>
						</div>
						<div class="col-6">
							<h4><?php echo($rollno) ?></h4>
						</div>
					</div>
				
				<div class="row">
						<div class="col-6">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">Registration No:&nbsp;</h4>
						</div>
						<div class="col-6">
							<h4><?php echo($registrationno) ?></h4>
						</div>
					</div>
					
					<div class="row">
						<div class="col-6">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px;margin-bottom: 5px; padding-left: 6px; ">Discipline:&nbsp;</h4>
						</div>
						<div class="col-6">
							<h4><?php echo($discipline) ?></h4>
						</div>
					</div>
					
					<div class="row">
						<div class="col-6">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">session&nbsp;</h4>
						</div>
						<div class="col-6">
							<h4><?php echo($session) ?></h4>
						</div>
					</div> 	
				<div class="row">
						<div class="col-6">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">Blood Group&nbsp;</h4>
						</div>
						<div class="col-6">
							<h4><?php echo($bloodgrou) ?></h4>
						</div>
					</div>
				<div class="row">
						<div class="col-6">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">Date of Birth&nbsp;</h4>
						</div>
						<div class="col-6">
							<h4><?php echo($dob) ?></h4>
						</div>
					</div> 
								<div class="row">
						<div class="col-6">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">CNIC&nbsp;</h4>
						</div>
						<div class="col-6">
							<h4><?php echo($cnic) ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">Domicile District&nbsp;</h4>
						</div>
						<div class="col-6">
							<h4><?php echo($Domicile_district) ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">Province&nbsp;</h4>
						</div>
						<div class="col-6">
							<h4><?php echo($province) ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">Addmission Quota&nbsp;</h4>
						</div>
						<div class="col-6">
							<h4><?php echo($quota) ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">Gender&nbsp;</h4>
						</div>
						<div class="col-6">
							<h4><?php echo($gender) ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">Religion&nbsp;</h4>
						</div>
						<div class="col-6">
							<h4><?php echo($religion) ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">Nationality&nbsp;</h4>
						</div>
						<div class="col-6">
							<h4><?php echo($nationality) ?></h4>
						</div>
					</div>
			</div>
		 </div>
		 
		 
		 
		 
	   <div class="row">
		<hr>	<h3>Contact Details </h3><hr>
		   
					<div class="row">
						<div class="col-4">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">Personal Phone No:&nbsp;</h4>
						</div>
						<div class="col-8">
							<h4><?php echo($permanent_cno) ?></h4>
						</div>
					</div>
		   
					<div class="row">
						<div class="col-4">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">Emergency Contact No:&nbsp;</h4>
						</div>
						<div class="col-8">
							<h4><?php echo($emergency_cno) ?></h4>
						</div>
					</div>
			
		 </div>
		
	  
		 
	   <div class="row">
			<hr><h3>Address Details</h3><hr>
		   
					
					<div class="row">
						<div class="col-4">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">Permanent Address:&nbsp;</h4>
						</div>
						<div class="col-8">
							<h4><?php echo($permanent_address) ?></h4>
						</div>
					</div>
					
					<div class="row">
						<div class="col-4">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">Present Address:&nbsp;</h4>
						</div>
						<div class="col-8">
							<h4><?php echo($present_address) ?></h4>
						</div>
					</div>
	
					
					
		 </div>
		 
		  <div class="row">
			<hr><h3>Eductaional  Details</h3><hr>
		   <div class="row">
			  <div class="col-6">
					 <div class="row">
			<h4>Metric Details</h4><hr>
		   
					
					<div class="row">
						<div class="col-4">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">Major :&nbsp;</h4>
						</div>
						<div class="col-8">
							<h4><?php echo($ssc_major) ?></h4>
						</div>
					</div>
					
					<div class="row">
						<div class="col-4">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;"> Obtain :&nbsp;</h4>
						</div>
						<div class="col-8">
							<h4><?php echo($ssc_ob_marks) ?></h4>
						</div>
					</div>
	<div class="row">
						<div class="col-4">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;"> Total :&nbsp;</h4>
						</div>
						<div class="col-8">
							<h4><?php echo($ssc_t) ?></h4>
						</div>
					</div>
	<div class="row">
						<div class="col-4">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;"> %age :&nbsp;</h4>
						</div>
						<div class="col-8">
							<h4><?php echo($ssc_percentage) ?></h4>
						</div>
					</div>
						 <div class="row">
						<div class="col-4">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;"> Board :&nbsp;</h4>
						</div>
						<div class="col-8">
							<h4><?php echo($ssc_board) ?></h4>
						</div>
					</div>
	
					
					
		 </div></div>
			  <div class="col-6">
					 <div class="row">
			<h4>Intermidiate Details</h4><hr>
		   
					
					
					<div class="row">
						<div class="col-4">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;">Major :&nbsp;</h4>
						</div>
						<div class="col-8">
							<h4><?php echo($hssc_major) ?></h4>
						</div>
					</div>
					
					<div class="row">
						<div class="col-4">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;"> Obtain :&nbsp;</h4>
						</div>
						<div class="col-8">
							<h4><?php echo($hssc_ob_marks) ?></h4>
						</div>
					</div>
	<div class="row">
						<div class="col-4">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;"> Total :&nbsp;</h4>
						</div>
						<div class="col-8">
							<h4><?php echo($hssc_total_marks) ?></h4>
						</div>
					</div>
	<div class="row">
						<div class="col-4">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;"> %age :&nbsp;</h4>
						</div>
						<div class="col-8">
							<h4><?php echo($hssc_percentage) ?></h4>
						</div>
					</div>
						 <div class="row">
						<div class="col-4">
							<h4 style="background-color: #7245F7; color: white; border-radius: 4px; margin-left: 4px; margin-bottom: 5px; padding-left: 6px;"> Board :&nbsp;</h4>
						</div>
						<div class="col-8">
							<h4><?php echo($hssc_board) ?></h4>
						</div>
					</div>
					
					
		 </div></div>
			  
			  </div>
			  
	
					
					
		 </div>
	
	  </div>
	  


  </main><!-- End #main -->

<?php
include("include/footer.php");
?>

  

</body>
<!--
How To Make A Popup Using HTML, CSS And JavaScript | Create a Modal Box In HTML Website

GreatStack
-->

</html>