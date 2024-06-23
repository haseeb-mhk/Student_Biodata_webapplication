	<?php

include("include/Connection.php");

if(!empty($_GET['status'])){
  switch($_GET['status']){
      case 'succ':
          $statusType = 'alert-success';
          echo "<script>alert('record Addedd successfully.');</script>"; 
          break;
      case 'err':
          $statusType = 'alert-danger';
          echo "<script>alert('Some problem occurred, please try again.');</script>"; 
          break;
      case 'invalid_file':
          $statusType = 'alert-danger';
          echo "<script>alert('Please upload a valid CSV file.');</script>"; 
          break;
      default:
          $statusType = '';
          $statusMsg = '';
  }
}
if(isset($_GET['del']))
{
  mysqli_query($link,"delete from student where S_no = '".$_GET['id']."'");
  $_SESSION['delmsg']="student deleted !!";
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
      <h1>IMPORT Multiple Records Through CSV</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">IMPORT CSV</li>
        </ol>
      </nav>



    </div><!-- End Page Title -->
<!-- Main content here -->

<div class="row">


    <!-- Import link -->
    <div class="col-md-12 head">
        <div class="float-right">
            <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>
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
<script>
function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>
</html>