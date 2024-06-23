<?php

include("include/Connection.php");

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
      <h1>Create Google Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Create_Form</li>
        </ol>
      </nav>



    </div><!-- End Page Title -->
<!-- Main content here -->

<div class="row">
<div class="col-md-12 head">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Warning</h4><hr>
                <h5>Create the Google Form in the below manner</h5>
                <hr>
                <p class="mb-0">(full_name, f_name, Roll_no, Registration_no,  Discipline(BS-CS,BS-IT , Mphil,Ph.D (program name) etc)  , Session(201--2023)
                    
                   ,Blood, Dob, Cnic, Personal_c_no, Emergency_c_no, Permanent_address, Present_Address, Domicile_District, 
                   Province, Addmission_quota,Gender, Religion, Nationality, Metric_major, Ssc_ob_marks, Ssc_total_marks, Ssc_percentage,
                   Ssc_board, Hssc_major, Hssc_ob_marks,Hssc_total_marks, Hssc_precentage, Hssc_board, Picture)</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>


</div>

    <!-- Import link -->
    <div class="col-md-12 head">
        <div class="float-right">
            <a href="https://docs.google.com/forms/u/0/" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Create</a>
        </div>
    </div>
    <!-- CSV file upload form -->
    <div class="col-md-12" id="importFrm" style="display: none;">
        <form action="importData.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" class="btn btn-primary" name="btnSubmit" value="import students">
        </form>
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