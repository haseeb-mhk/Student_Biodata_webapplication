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
      <h1>Create CSV from filter results</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active"></li>
        </ol>
      </nav>




<!-- filter code start -->
<?php
$sess_val = "null";
$des_val = "null";

if(!isset($_POST['filter_btn']) || $_POST['filter'] == "null" ){
$query=mysqli_query($link,"select * from student order by Session asc");
$sess_val = "null";
}
// code for des
 if (!isset($_POST['filter_btn']) || $_POST['des'] == "null" ){
  $query=mysqli_query($link,"select * from student order by Discipline asc");
  $des_val = "null";
}

// code for selection  session and descipline
 if(isset($_POST['filter']) && isset($_POST['filter_btn']) && isset($_POST['des'])){
  $val = $_POST['filter'];
  $des = $_POST['des'];
  

  // $sess_val = $_POST['filter'];
$query=mysqli_query($link,"SELECT * FROM student
WHERE Session = '$val' AND Discipline LIKE '$des' ");
}

if(empty($_POST['filter_btn']) ||$_POST['filter'] == "null" ){
  $query=mysqli_query($link,"select * from student ");
  $sess_val = "null";
  }
//  if(isset($_POST['filter_btn']) ||$_POST['filter'] AND ($_POST['filter_btn']) ||$_POST['des'] == "" ){
//   $val = $_POST['filter'];
//   $des = $_POST['des'];

  // $sess_val = $_POST['filter'];
// $query=mysqli_query($conn,"SELECT * FROM student ");
// }
?>



	  <div class="row ">
        <div class="col-12">


<div class="card">
            <div class="card-body">
                <br>
             
<form method="POST" action="create_CSV.php">
 <!-- seesion code -->
 <select name="filter" class="col-5 " style="height: 50px">
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
<select name="des" class="col-5 m-3  " style="height: 50px "  > 
    <option value="null" <?php  if($des_val  ==  "null") {?> selected <?php } ?> >--select Discipline--</option>
  

  <?php
  $f_q=mysqli_query($link, "select distinct (Discipline) from student order by Discipline asc");
  while($f_row = mysqli_fetch_object($f_q)){

  
  ?>
   <option value="<?php  echo $f_row->Discipline ?>" <?php if($des_val  ==  $f_row->Discipline){ ?>selected <?php } ?>><?php  echo $f_row->Discipline;?></option>

<?php 
}
?>

</select>

   <div class="row">
<div class="col-2"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="full_name" > <label class="form-check-label">Full Name</label></div>
<div class="col-2"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="f_name" > <label class="form-check-label">Father Name</label></div>
<div class="col-2"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Roll_no" > <label class="form-check-label">Roll No</label></div>
<div class="col-2"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Registration_no" > <label class="form-check-label">Registration No</label></div>
<div class="col-2"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Discipline" > <label class="form-check-label">Discipline</label></div>
<div class="col-2"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="sess" > <label class="form-check-label">Session</label></div>

    </div>
   <div class="row">
<div class="col-2"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Blood" > <label class="form-check-label">Blood Group</label></div>
<div class="col-2"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Dob" > <label class="form-check-label">DOB</label></div>
<div class="col-2"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Cnic" > <label class="form-check-label">CNIC</label></div>
<div class="col-3"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Personal_c_no" > <label class="form-check-label">Personal Contact No</label></div>
<div class="col-3"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Emergency_c_no" > <label class="form-check-label">Emergency Contact No</label></div>

    </div>
  <div class="row">
    <div class="col-3"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Permanent_address" > <label class="form-check-label">Permanent Address</label></div>
<div class="col-3"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Present_address" > <label class="form-check-label">Present Address</label></div>
<div class="col-3"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Domicile_District" > <label class="form-check-label">Domicile District</label></div>
<div class="col-3"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Province" > <label class="form-check-label">Province</label></div>
</div>
<div class="row">
    <div class="col-3"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Addmission_quota" > <label class="form-check-label">Addmission Qouta</label></div>
<div class="col-2"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Gender" > <label class="form-check-label">Gender</label></div>
<div class="col-2"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Religion" > <label class="form-check-label">Religion</label></div>
<div class="col-2"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Nationality" > <label class="form-check-label">Nationality</label></div>
</div>
<div class="row">
    <div class="col-2"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Metric_major" > <label class="form-check-label">SSC Major</label></div>
<div class="col-3"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Ssc_ob_marks" > <label class="form-check-label">SSC Obtained Marks</label></div>
<div class="col-2"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Ssc_total_marks" > <label class="form-check-label">SSC total Marks</label></div>
<div class="col-3"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Ssc_percentage" > <label class="form-check-label">SSC percentages</label></div>
<div class="col-2"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Ssc_board" > <label class="form-check-label">SSC Board</label></div>
</div>
<div class="row">
    <div class="col-2"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Hssc_major" > <label class="form-check-label">HSSC Major</label></div>
<div class="col-3"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Hssc_ob_marks" > <label class="form-check-label">HSSC Obtained Marks</label></div>
<div class="col-3"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Hssc_total_marks" > <label class="form-check-label">HSSC total Marks</label></div>
<div class="col-3"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Hssc_precentage" > <label class="form-check-label">HSSC percentages</label></div>
<div class="col-3"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Hssc_board" > <label class="form-check-label">HSSC Board</label></div>
<!-- <div class="col-3"> <input type="checkbox" class="form-check-input"  name="selected_fields[]" value="Picture" > <label class="form-check-label">Picture</label></div> -->

</div>
<!-- dicipline  code end -->
<input type="submit" name="filter_btn" value="filter" />
</form>
<br>


              <!-- Table with stripped rows -->


              <br>
                <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
             
              <!-- Table with stripped rows -->
              <table class="table datatable table-responsive-lg" id="dataTable" border="1">
				  
                <thead>
                      <tr>
                        <?php  
                         if(isset($_POST["filter_btn"])){
                            // Get selected fields from the form
                            $selectedFields = $_POST["selected_fields"];
                            $disc = $_POST["des"];
                            $ses = $_POST["filter"];
                            
                            // Build the SQL query based on the selected fields
                            $sql = "SELECT " . implode(", ", $selectedFields) . " FROM student WHERE Discipline='$disc' AND session = '$ses'";
                            $result = mysqli_query($link, $sql);
                            if ($result) {
                            //     Output table headers based on the selected fields
                               foreach ($selectedFields as $field) {
                                //    echo "<th>" . $field . "</th>";
                               
                               
                       
                      
                        
                        ?>
						<th><?php echo "$field" ?></th>
						
                       <?php } ?>
                      </tr> 
                     
                    </thead> 
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) {
           
           
         ?>
                          <tr>
                             <?php  foreach ($selectedFields as $field) {?>
                
                <td><?php echo($row[$field]) ?> </td>
           <?php } ?>   

                          </tr>   
                       
                    <?php } }}?>
                    </tbody>
                 
              </table>
              <button id="btnExportToCsv" type="button" class="btn btn-success">Export to CSV</button>
              <!-- End Table with stripped rows -->

            </div>
  </div>
	  
	  
   


        </div>


    </div>


      </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>
  </main><!-- End #main -->
<?php
include("include/footer.php");
?>

  
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
<script>


class TableCSVExporter {
    constructor (table, includeHeaders = true) {
        this.table = table;
        this.rows = Array.from(table.querySelectorAll("tr"));

        if (!includeHeaders && this.rows[0].querySelectorAll("th").length) {
            this.rows.shift();
        }
    }

    convertToCSV () {
        const lines = [];
        const numCols = this._findLongestRowLength();

        for (const row of this.rows) {
            let line = "";

            for (let i = 0; i < numCols; i++) {
                if (row.children[i] !== undefined) {
                    line += TableCSVExporter.parseCell(row.children[i]);
                }

                line += (i !== (numCols - 1)) ? "," : "";
            }

            lines.push(line);
        }

        return lines.join("\n");
    }

    _findLongestRowLength () {
        return this.rows.reduce((l, row) => row.childElementCount > l ? row.childElementCount : l, 0);
    }

    static parseCell (tableCell) {
        let parsedValue = tableCell.textContent;

        // Replace all double quotes with two double quotes
        parsedValue = parsedValue.replace(/"/g, `""`);

        // If value contains comma, new-line or double-quote, enclose in double quotes
        parsedValue = /[",\n]/.test(parsedValue) ? `"${parsedValue}"` : parsedValue;

        return parsedValue;
    }
}

        const dataTable = document.getElementById("dataTable");
        const btnExportToCsv = document.getElementById("btnExportToCsv");

        btnExportToCsv.addEventListener("click", () => {
            const exporter = new TableCSVExporter(dataTable);
            const csvOutput = exporter.convertToCSV();
            const csvBlob = new Blob([csvOutput], { type: "text/csv" });
            const blobUrl = URL.createObjectURL(csvBlob);
            const anchorElement = document.createElement("a");

            anchorElement.href = blobUrl;
            anchorElement.download = "table-export.csv";
            anchorElement.click();

            setTimeout(() => {
                URL.revokeObjectURL(blobUrl);
            }, 500);
        });
    </script>

</body>
</html>