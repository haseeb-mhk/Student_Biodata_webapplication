<?php

include("include/Connection.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>


<h1>All Student information</h1>
<!-- filter code start -->
<?php
$sess_val = "null";
$des_val = "null";

if(!isset($_POST['filter_btn']) ||$_POST['filter'] == "null" ){
$query=mysqli_query($link,"select * from student order by Session asc");
$sess_val = "null";
}
// code for des
else if (!isset($_POST['filter_btn']) ||$_POST['des'] == "null" ){
  $query=mysqli_query($link,"select * from student order by Discipline asc");
  $des_val = "null";
}
else if(isset($_POST['filter_btn']) ||$_POST['filter'] != "null"){
  $val = $_POST['filter'];
  $sess_val = $_POST['filter'];
$query=mysqli_query($link,"select * from student where Session = '$val'  order by Session asc");
}
?>





<div class="card">
            <div class="card-body">
             
<form method="POST" action="create_a_csv.php">
 <!-- seesion code -->
<select name="filter" >
 <option value="null" <?php  if($sess_val  ==  "null") {?> selected <?php } ?> >--select session--</option>  <br>
  

  <?php
  $f_q=mysqli_query($link, "select distinct (Session) from student order by Session asc");
  while($f_row = mysqli_fetch_object($f_q)){

  
  ?>
   <option value="<?php  echo $f_row->Session ?>" <?php if($sess_val  ==  $f_row->Session){ ?>selected <?php } ?>><?php  echo $f_row->Session;?></option>

<?php
}
?>

</select>
<!-- session code end -->

<!-- decipline code start -->
<select name="des" >
 <option value="null" <?php  if($des_val  ==  "null") {?> selected <?php } ?> >--select Discipline--</option>  <br>
  

  <?php
  $f_q=mysqli_query($link, "select distinct (Discipline) from student order by Discipline asc");
  while($f_row = mysqli_fetch_object($f_q)){

  
  ?>
   <option value="<?php  echo $f_row->Discipline ?>" <?php if($des_val  ==  $f_row->Discipline){ ?>selected <?php } ?>><?php  echo $f_row->Discipline;?></option>

<?php
}
?>

</select>
<!-- dicipline  code end -->
<input type="submit" name="filter_btn" value="filter" />
</form>
<br>


              <!-- Table with stripped rows -->


              <br>
              <table class="table datatable"  border="1">
				  
                <thead>
                      <tr>
						<th>S.No &nbsp;</th>
						<th>Student Image</th>
                        <th>Student Name</th>
                                                <th>Session</th>

                        <th>Student Roll No</th>
                        <th>Discipline </th>
                        <th>Action</th>
                      </tr> 
                    </thead> 
                    <tbody>

                    <?php 
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
                          <td class="align-middle"><a href="#"><img src="<?php echo ($completeImageURL)?>" width="40" height="40"> </a></td>
                          <td><?php echo htmlentities($row['full_name']);?></td>
                           <td><?php echo htmlentities($row['Session']);?></td>
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
	  
	  
</body>
</html>