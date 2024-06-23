<?php 
include("include/Connection.php");
session_start();
$result = mysqli_query($link,"select count(*) from student");
  $row = mysqli_fetch_row($result);
$total = $row[0];
$result2 = mysqli_query($link,"select count(*) from student where Gender = 'Male'");
  $row2 = mysqli_fetch_row($result2);
$male = $row2[0];
$result3 = mysqli_query($link,"select count(*) from student where Gender = 'Female'");
  $row3 = mysqli_fetch_row($result3);
$female = $row3[0];

?>
 
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biodata</title> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: right; margin-top: 20px; }
    </style>
<!-- </head>
<body>
   
</body>
</html> -->





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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
	
	</div>
	
	  </div>

	  

	  
		   <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
             <h5 class="card-title">University Of Swat</h5>
             <br><h1 align="">Department of Computer and Software Technology</h1>
            </div>
          </div>

        </div>
	  <div class="row">
        <div class="col-lg-4">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Students</h5>
             <br><h1 align="right"><?php echo($total) ?></h1>
			</div>
          </div>

        </div>

        <div class="col-lg-4">

          <div class="card">
            <div class="card-body">
             <h5 class="card-title">Male Students</h5>
             <br><h1 align="right"><?php echo($male) ?></h1>
            </div>
          </div>

        </div>
		  
		  <div class="col-lg-4">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Female Students</h5>
             <br><h1 align="right"><?php echo($female) ?></h1>
            </div>
          </div>

        </div>
		  
		  
		  
		  
		  
      </div>
	  
	  
   

  </main><!-- End #main -->

<?php
include("include/footer.php");
?>

</body>

</html>