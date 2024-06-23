	<?php

include("include/Connection.php");


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
      <h1> MPhil Students Records</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">MPhil Students Records</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

	  
	  
	 
	  

	  
    <div class="card">
            <div class="card-body">
             
              <!-- Table with stripped rows -->
              <table class="table datatable"  border="1">
				  
                <thead>
                      <tr>
						<th>S.No &nbsp;</th>
						<th>Student Image</th>
                        <th>Student Name</th>
                        <th>Student Roll No</th>
                        <th>Discipline </th>
                        <th>Action</th>
                      </tr> 
                    </thead> 
                    <tbody>
                      <?php $query=mysqli_query($link,"select * from student where Discipline = 'MPhil' ");
                      $cnt=1;
                      while($row=mysqli_fetch_array($query))
                      {
                        $img =$row['Picture'];
                        if (strpos($img, "http://") === 0 || strpos($img, "https://") === 0) {
                          // It's a URL
                          // $u= "This image is in url";
                          $imageID = "";
                          if (preg_match('/id=([a-zA-Z0-9_\-]+)/', $img, $matches)) {
                            $imageID = $matches[1];
                          }
                          // Define the common part of the URL
                          $baseURL = "https://drive.google.com/uc?export=download&id=";
                          // Create the complete image URL
                          $completeImageURL = $baseURL . $imageID;
                      } else {
                          // It's not a URL, it's likely a picture name
                          // $u = "This image is not in url";
                          $folder = "studentimages/";
                          $completeImageURL = $folder.$img;
                            }
                        ?>                  
                        <tr>
                          <td><?php echo htmlentities($cnt);?></td>
                          <td class="align-middle"><a href="#"><img src="<?php echo($completeImageURL)?>" width="40" height="40"> </a></td>
                          <td><?php echo htmlentities($row['full_name']);?></td>
                          <td><?php echo htmlentities($row['Roll_no']);?></td>
                          <td><?php echo htmlentities($row['Discipline']);?></td>
                          <td>
                            <a href="addstudent.php?EId=<?php echo $row['S_no']?>" class=" btn btn-primary btn-xs edit_data"  title="click for edit">Edit</i></a>
                             <a href="veiw.php?VId=<?php echo $row['S_no']?>" class=" btn btn-secondary btn-xs edit_data"  title="click for edit">View</i></a>
                            <a href="record.php?id=<?php echo $row['S_no']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class=" btn btn-danger btn-xs ">Delete</a>

                          </td>
                        </tr>
                        <?php $cnt=$cnt+1;
                      } ?>
                    </tbody>
              </table>
              <!-- End Table with stripped rows -->

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