<?php
include("include/Connection.php");
 $stdname="";
    $fname="";
    $rollno="";
    $registrationno="";
    $discipline="";
    $session="";
    $bloodgrou="Select Blood group";
    $dob="";
    $cnic="";
    $permanent_cno="";
    $emergency_cno="";
    $permanent_address="";
    $present_address="";
    $Domicile_district="Select Domicile District";
    $province= "Select Province";
    $quota="";
    $gender="Select Gender";
    $religion="Select Religion";
    $nationality="Select Nationality";
    $ssc_major="Select major";
    $ssc_ob_marks="";
    $ssc_t="";
    $ssc_percentage="";
    $ssc_board="Select Board";
	$hssc_major="Select Major";
    $hssc_ob_marks="";
    $hssc_total_marks="";
    $hssc_percentage="";
    $hssc_board="select Board";
	$IMAGE = "";
  if(isset($_POST['submit']))
  {
	  
    $stdname=$_POST['stdName'];
    $fname=$_POST['fname'];
    $rollno=$_POST['rollno'];
    $registrationno=$_POST['Registrationno'];
    $discipline=$_POST['discipline'];
    $session=$_POST['session'];
    $bloodgroup=$_POST['bg'];
    $dob=$_POST['dob'];
    $cnic=$_POST['cnic'];
    $permanent_cno=$_POST['pcno'];
    $emergency_cno=$_POST['ecno'];
    $permanent_address=$_POST['peraddress'];
    $present_address=$_POST['preaddress'];
    $Domicile_district=$_POST['Ddistrict'];
    $province=$_POST['province'];
    $quota=$_POST['quota'];
    $gender=$_POST['gender'];
    $religion=$_POST['religion'];
    $nationality=$_POST['nationality'];
    $ssc_major=$_POST['ssc_major'];
    $ssc_ob_marks=$_POST['ssc_ob_marks'];
    $ssc_t=$_POST['ssc_t'];
    $ssc_percentage=$_POST['ssc_percentage'];
    $ssc_board=$_POST['ssc_board'];
	$hssc_major=$_POST['hssc_major'];
    $hssc_ob_marks=$_POST['hssc_ob_marks'];
    $hssc_total_marks=$_POST['hssc_total_marks'];
    $hssc_percentage=$_POST['hssc_precentage'];
    $hssc_board=$_POST['hssc_board'];
    $photo=$_FILES["photo"]["name"];
    move_uploaded_file($_FILES["photo"]["tmp_name"],"studentimages/".$_FILES["photo"]["name"]);
	  
	
	  $query = mysqli_query($link, "insert into student(full_name,f_name,Roll_no,registration_no,Discipline, session, Blood, Dob, Cnic, Personal_c_no, Emergency_c_no, Permanent_address, Present_Address,Domicile_District, Province, Addmission_quota, Gender, Religion, Nationality,Metric_major, Ssc_ob_marks, Ssc_total_marks, Ssc_percentage,Ssc_board,Hssc_major,Hssc_ob_marks,Hssc_total_marks,Hssc_precentage,Hssc_board,Picture) values('$stdname','$fname','$rollno','$registrationno','$discipline','$session','$bloodgroup','$dob','$cnic','$permanent_cno','$emergency_cno','$permanent_address','$present_address','$Domicile_district','$province','$quota','$gender','$religion','$nationality','$ssc_major','$ssc_ob_marks','$ssc_t','$ssc_percentage','$ssc_board','$hssc_major','$hssc_ob_marks','$hssc_total_marks','$hssc_percentage','$hssc_board','$photo')");
//
	  if ($query) {
    echo "<script>alert('Student has been registered.');</script>"; 
    echo "<script>window.location.href = 'addstudent.php'</script>";   
    
}
	  else {
    // Use mysqli_errno to get the error number
   
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    echo (mysqli_errno($query));
	  
	  }
	  
	   }
 
if(!empty($_GET["EId"])){
	$_display="visible";
	$_display2="hidden";
	$eid = $_GET["EId"];
//	echo($Vid);
	$res=mysqli_query($link,"Select * from  student where S_no= '$eid'");

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
	$IMAGE = $r[30];
}
else{
	$_display="hidden";
	$_display2="visible";
}
if(isset($_POST["btnupd"])){
//	 echo "<script>alert('updated successfully');</script>"; 
	   $stdname=$_POST['stdName'];
    $fname=$_POST['fname'];
    $rollno=$_POST['rollno'];
    $registrationno=$_POST['Registrationno'];
    $discipline=$_POST['discipline'];
    $session=$_POST['session'];
    $bloodgroup=$_POST['bg'];
    $dob=$_POST['dob'];
    $cnic=$_POST['cnic'];
    $permanent_cno=$_POST['pcno'];
    $emergency_cno=$_POST['ecno'];
    $permanent_address=$_POST['peraddress'];
    $present_address=$_POST['preaddress'];
    $Domicile_district=$_POST['Ddistrict'];
    $province=$_POST['province'];
    $quota=$_POST['quota'];
    $gender=$_POST['gender'];
    $religion=$_POST['religion'];
    $nationality=$_POST['nationality'];
    $ssc_major=$_POST['ssc_major'];
    $ssc_ob_marks=$_POST['ssc_ob_marks'];
    $ssc_t=$_POST['ssc_t'];
    $ssc_percentage=$_POST['ssc_percentage'];
    $ssc_board=$_POST['ssc_board'];
	$hssc_major=$_POST['hssc_major'];
    $hssc_ob_marks=$_POST['hssc_ob_marks'];
    $hssc_total_marks=$_POST['hssc_total_marks'];
    $hssc_percentage=$_POST['hssc_precentage'];
    $hssc_board=$_POST['hssc_board'];
    $pimage = $_FILES['photo']['name'];
	$temp_name1=$_FILES['photo']['tmp_name'];
	  if(!empty($pimage)){
		  $IMAGE=$pimage;
	   }
		else{
			 
		}

	move_uploaded_file($temp_name1,"studentimages/$pimage");
	  $update=mysqli_query($link,"UPDATE student SET full_name ='$stdname',f_name='$fname',Roll_no='$rollno',Registration_no='$registrationno',Discipline='$discipline',session='$session',Blood='$bloodgroup',Dob='$dob',Cnic='$cnic',Personal_c_no='$permanent_cno',Emergency_c_no='$emergency_cno',Permanent_address='$permanent_address',Present_Address='$present_address',Domicile_District='$Domicile_district',Province='$province',Addmission_quota='$quota',Gender='$gender',Religion='$religion',Nationality='$nationality',Metric_major='$ssc_major',Ssc_ob_marks='$ssc_ob_marks',Ssc_total_marks='$ssc_t',Ssc_percentage='$ssc_percentage',Ssc_board='$ssc_board',Hssc_major='$hssc_major',Hssc_ob_marks='$hssc_ob_marks',Hssc_total_marks='$hssc_total_marks',Hssc_precentage='$hssc_percentage',Hssc_board='$hssc_board',Picture='$IMAGE' WHERE S_no='$eid'");

if($update){
	
	header("location:record.php");
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

    <div class="pagetitle">
      <h1>Add New Student</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Add New Student</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

	  <div class="card">
            <div class="card-body">
              <br>

              <!-- Custom Styled Validation -->
              <form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
              
                    <div class="card-body">
                      <span style="color: darkblue;"><h5>Student details</h5></span>
                      <hr>

                      <div class="row">
                        <div class="form-group col-md-4">
                          <label for="studentno">Full Name</label>
                          <input type="text" class="form-control" id="stdName"   onkeydown="return /[a-z A-Z]/i.test(event.key)" name="stdName" placeholder="Enter Full Name" value="<?php echo($stdname)?>" required>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="names">Father Name</label>
                          <input type="text" class="form-control"onkeydown="return /[a-z A-Z]/i.test(event.key)" id="F_name" name="fname" placeholder="Enter Father Name"  value="<?php echo($fname)?>"  >
                        </div>
                        <div class="form-group col-md-2">
                          <label for="age">Roll No</label>
                          <input type="text" class="form-control" id="Roll_no" name="rollno" placeholder="Enter Roll No" required oninput="this.value = this.value.replace([a-z A-Z]/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  value="<?php echo($rollno)?>" >
                        </div>
                        <div class="form-group col-md-3">
							<label for="age">Registration No</label>
                          <input type="text" class="form-control" id="R_no" name="Registrationno" placeholder="Enter R.No" required  oninput="this.value = this.value.replace([a-z A-Z]/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  value="<?php echo($registrationno)?>"  >

                        </div>
                      </div><br>
    <div class="row">
                        <div class="form-group col-md-3">
                          <label for="age">Discipline</label>
                             <input type="text" class="form-control" id="R_no" name="discipline" placeholder="Enter discipline" required  value="<?php echo($discipline)?>"  >
                        </div>
                        <div class="form-group col-md-3">
                          <label for="age">Session<span style="color: blue;"></span></label>
                          <input type="text" class="form-control" id="R_no" name="session" placeholder="Enter Session" required  value="<?php echo($session)?>"  >
                        </div>
                        <div class="form-group col-md-2">
							
							 <label for="age">Blood Group</label>
                          <select type="select" class="form-control" id="class" name="bg" >
                            <option selected> <?php echo($bloodgrou)?></option>
                            <option > A+</option>
                            <option >A-</option>
                            <option >B+</option>
                            <option >B-</option>
                            <option >AB+</option>
                            <option >AB-</option>
                            <option >O+</option>
                            <option >O-</option>
                            
                          </select>
                       
                        </div>
						  <div class="form-group col-md-4">
                          <label for="age">Date of Birth</label>
                          <input type="date" class="form-control" id="Dob" name="dob" placeholder="Enter Roll No" value="<?php echo($dob)?>">
                        </div>
</div>
						<br>

						<div class="row">
						 <div class="form-group col-md-3">
                          <label for="age">CNIC</label>
                          <input type="text" class="form-control"  onkeydown="return /[0-9][-]/i.test(event.key)" id="Roll_no" name="cnic" placeholder="Enter CNIC" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  value="<?php echo($cnic)?>">
                        </div> <div class="form-group col-md-3">
                          <label for="age">Personal Contact No</label>
                          <input type="number" class="form-control"   id="Roll_no" name="pcno" placeholder="Enter Permanent No" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  value="<?php echo($permanent_cno)?>" >
                        </div>
                        <div class="form-group col-md-3">
							<label for="age">Emergency Contact No</label>
                          <input type="number" class="form-control"  id="R_no" name="ecno" placeholder="Enter Emergency No " oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  value="<?php echo($emergency_cno)?>" >

                        </div>
							<div class="form-group col-md-3">
							<label for="exampleInputFile">Student Photo</label>
                          <div class="input-group">
                            <div  class="custom-file">
                              <input type="file" class="" name="photo" id="photo" >
                            </div>
                          </div>

                        </div>
                      </div><br>


						<div class="row">
						 <div class="form-group col-md-5">
                          <label for="age">permanent Address</label>
							 <textarea id="peraddress" name="peraddress" placeholder="Enter permanent Address" class="form-control" > <?php echo($permanent_address)?></textarea>

                        </div> <div class="form-group col-md-5">
                          
								<input type="checkbox" id="checkBox"  onclick="FillAddressInput()" alt="same as permanent" title="same as permanent"> 
							<label for="age">Present Address</label>
						 <textarea name="preaddress" placeholder="Enter present Address" class="form-control" id="preaddress"  > <?php echo($present_address)?></textarea>
                        </div>
                       
                      </div>
						
						
						</div>
						<br>

                     
                      <div class="row">
                        <div class="form-group col-md-3">
                          <label for="parentname">Domicile District</label>
                         <select type="select" class="form-control" id="relation" name="Ddistrict">
                            <option selected><?php echo($Domicile_district)?></option>
                            <option >Swat</option>
                            <option >Abbottabad</option>
                            <option >Bajaur</option>
                             <option >Bannu</option>
                            <option >Batagram</option>
                            <option >Buner</option>
                            <option >Charsadda</option>
                            <option >Chitral</option>
                            <option >Dera Ismail Khan </option>
                            <option >Hangu</option>
                            <option >Haripur</option>
                            <option >Karak</option>
                            <option >Khyber</option>
                            <option >Kohat</option>
                            <option >Kurram</option>
                            <option >Malakand</option>
                            <option >Mansehra</option>
                            <option >Mardan</option>
                            <option >Peshawar</option>
                            <option >Swabi</option>
                            <option >Upper Kohistan</option>
                            <option >Nowshera</option>
                            <option >Orakzai</option>
                            <option >Tank</option>
                            <option >Torghar</option>
                            <option >Mohmand</option>
                            <option >Lakki Marwat </option>
                            <option >Shangla</option>
                            <option >Buner</option>
                            <option >Upper Dir </option>
                            <option >mardan</option>
                            <option >other</option>
                          </select>
                        </div>
                        <div class="form-group col-md-5">
                          <label for="relation">Province</label>
                          <select type="select" class="form-control" id="relation" name="province">
                            <option selected><?php echo($province)?> </option>
                            <option >KHYBER-PAKHTUNKHAWA</option>
                            <option >SINDH</option>
                            <option >PUNJAB</option>
                            <option >BALUCHISTAN</option>
                            <option >GILGIT-BALTISTAN</option>
                            <option >AZAD KASHMIR</option>
                          
                   
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="age">Addmission Quota</label>
                        <input type="text" class="form-control" id="R_no" name="quota" placeholder="Enter Addmission quota" required  value="<?php echo($quota)?>"  >
                        </div>
                        
                      </div>
				 

				  <div class="row" style="margin-top: 20px">
                        <div class="form-group col-md-3">
                          <label for="parentname">Gender</label>
                          <select type="select" class="form-control" id="relation" name="gender" required="">
                            <option selected><?php echo($gender)?></option>
                            <option >Male</option>
                            <option >Female</option>
                            <option >other</option>
                           
                          </select>
                        </div>
                        <div class="form-group col-md-5">
                          <label for="relation">Religion</label>
                          <select type="select" class="form-control" id="relation" name="religion" >
                            <option selected><?php echo($religion)?></option>
                            <option >Islam</option>
                            <option >crystan</option>
                            <option >jew</option>
                            <option >other</option>
                   
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="age"> Nationality</label>
                         <select type="select" class="form-control" id="relation" name="nationality" >
                            <option selected><?php echo($nationality)?> </option>
                            <option >Pakistan</option>
                            <option >Us</option>
                            <option >Afghanistan</option>
                            <option >other</option>
                   
                          </select>
                        </div>
                        
                      </div><br>
                     
                      <hr>
                      <span style="color: brown"><h5>Matric</h5></span>
                      <div class="row">
                        <div class="form-group col-md-3 ">
                          <label for="phone1">major</label>
                          <select type="select" class="form-control" id="country" name="ssc_major" >
                            <option selected><?php echo($ssc_major)?></option>
                            <option >Science</option>
                            <option >Art/Humanites</option>
                            <option >others</option>
                           
                            
                          </select>
                        </div>
                        <div class="form-group col-md-3 ">
                          <label for="district">Obtained marks</label>
                         
                          <input type="text" class="form-control" onkeydown="return /[0-9]/i.test(event.key)" id="Roll_no" name="ssc_ob_marks" placeholder="Enter SSC obtained Marks" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo($ssc_ob_marks)?>" >
                      
                        </div>
						  <div class="form-group col-md-3 ">
                          <label for="district">Total Marks </label>
                         
                          <input type="text" class="form-control" id="" name="ssc_t" onkeydown="return /[0-9]/i.test(event.key)" placeholder="Enter SSC total Marks" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo($ssc_t)?>">
                      
                        </div>
                        <div class="form-group col-md-3 ">
                          <label for="">Percentage</label>
                          <input type="text" class="form-control" id="" name="ssc_percentage"    placeholder="%age" value="<?php echo($ssc_percentage)?>" >
                        </div>
                        <div class="form-group col-md-3 ">
                          <label for="">Board</label>
                          <select type="select" class="form-control"  name="ssc_board" >
                            <option selected><?php echo($ssc_board)?></option>
                            <option >BISE swat</option
                            <option >BISE Mardan</option>
                            <option >BISE Kohat</option>
                            <option >BISE Bannu</option>
                            <option >BISE Pesahwar</option>
                            <option >BISE Malakand</option>
                            <option >BISE DI khan</option>
                            <option >BISE Abbottabad</option>
                            <option >others</option>
                           
                            
                          </select>
                        </div>
                      </div>
				    <hr>
                      <span style="color: brown"><h5>Intermediate</h5></span>
				  <div class="row">
                        <div class="form-group col-md-3 ">
                          <label for="phone1">major</label>
                          <select type="select" class="form-control"  name="hssc_major" >
                            <option selected><?php echo($hssc_major)?></option>
                            <option >Medical</option>
                            <option >Engineering</option>
                            <option>Computer Science</option>
                            <option>Art/Humanites</option>
                            <option >others</option>
                           
                            
                          </select>
                        </div>
                        <div class="form-group col-md-3 ">
                          <label for="district">Obtained marks</label>
                         
                          <input type="text" class="form-control" onkeydown="return /[0-9]/i.test(event.key)" id="Roll_no" name="hssc_ob_marks" placeholder="Enter HSSC obtained Marks" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo($hssc_ob_marks)?>"  >
                      
                        </div>
						  <div class="form-group col-md-3 ">
                          <label for="district">Total</label>
                         
                          <input type="text" class="form-control" onkeydown="return /[0-9]/i.test(event.key)" id="Roll_no" name="hssc_total_marks" placeholder="Enter HSSC total Marks" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo($hssc_total_marks)?>"  >
                      
                        </div>
                        <div class="form-group col-md-3 ">
                          <label >Percentage</label>
                          <input type="text" class="form-control" name="hssc_precentage" placeholder="%age" value="<?php echo($hssc_percentage)?>" >
                        </div>
                        <div class="form-group col-md-3 ">
                          <label for="">Board</label>
                          <select type="select" class="form-control"  name="hssc_board" >
                            <option selected><?php echo($hssc_board)?></option>
                            <option >BISE swat</option
                            <option >BISE Mardan</option>
                            <option >BISE Kohat</option>
                            <option >BISE Bannu</option>
                            <option >BISE Pesahwar</option>
                            <option >BISE Malakand</option>
                            <option >BISE DI khan</option>
                            <option >BISE Abbottabad</option>
                            <option >others</option>
                           
                            
                          </select>
                        </div>
                      </div>
				  
				  
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="submit" class="btn btn-primary"  style="visibility: <?php echo($_display2)?>">Submit</button> 
						 <button type="submit" name="btnupd" class="btn btn-success"  style="visibility: <?php echo($_display)?>">Update</button>
                    </div>
                 
              </form><!-- End Custom Styled Validation -->

            </div>
          </div>
	  
	  
	  
   

  </main><!-- End #main -->

<?php
include("include/footer.php");
?>

</body>

<script type="text/javascript">

function FillAddressInput(){
		let checkBox= document.getElementById('checkBox');
       let peraddress = document.getElementById("peraddress");
       let preaddress = document.getElementById("preaddress");
		if (checkBox.checked == true)
        {
        
       let perval = peraddress.value;
			
       preaddress.value = perval;
	}
		else{
			  preaddress.value = "";
		}
}

</script>


</html>