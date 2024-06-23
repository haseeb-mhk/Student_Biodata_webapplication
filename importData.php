<?php
// Load the database configuration file
include("include/Connection.php");

// if(isset($_POST['importSubmit'])){
    
//     // Allowed mime types
//     $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
//     // Validate whether selected file is a CSV file
//     if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
//         // If the file is uploaded
//         if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
//             // Open uploaded CSV file with read-only mode
//             $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
//             // Skip the first line
//             fgetcsv($csvFile);
            
//             // Parse data from CSV file line by line
//             while(($line = fgetcsv($csvFile)) !== FALSE){
//                 // Get row data
//                 $name   = $line[0];
//                 $email  = $line[1];
//                 $phone  = $line[2];
//                 $status = $line[3];
                
//                 // Check whether member already exists in the database with the same email
//                 $prevQuery = "SELECT id FROM members WHERE email = '".$line[1]."'";
//                 $prevResult = $db->query($prevQuery);
                
//                 if($prevResult->num_rows > 0){
//                     // Update member data in the database
//                     $db->query("UPDATE members SET name = '".$name."', phone = '".$phone."', status = '".$status."', modified = NOW() WHERE email = '".$email."'");
//                 }else{
//                     // Insert member data in the database
//                     $db->query("INSERT INTO members (name, email, phone, created, modified, status) VALUES ('".$name."', '".$email."', '".$phone."', NOW(), NOW(), '".$status."')");
//                 }
//             }
            
//             // Close opened CSV file
//             fclose($csvFile);
            
//             $qstring = '?status=succ';
//         }else{
//             $qstring = '?status=err';
//         }
//     }else{
//         $qstring = '?status=invalid_file';
//     }
// }
if(isset($_POST['btnSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $fullname   = $line[1];
                $fathername  = $line[2];
                $Rollno  = $line[3];
                $regno = $line[4];
                $Discipline = $line[5];
                $sess = $line[6];
                $bg = $line[7];
                $dob = $line[8];
                $cnic = $line[9];
                $personalcno = $line[10];
                $emergencycno = $line[11];
                $peraddress = $line[12];
                $domiciledist = $line[13];
                $province = $line[14];
                $quota = $line[15];
                $gender = $line[16];
                $religion = $line[17];
                $nationality = $line[18];
                $matricmajor = $line[19];
                $matric_ob_marks = $line[20];
                $matric_t_marks = $line[21];
                $matric_percentage = $line[22];
                $matric_board = $line[23];
                $hssc_major = $line[24];
                $hssc_ob_marks = $line[25];
                $hssc_t_marks = $line[26];
                $hssc_percentage = $line[27];
                $hssc_board = $line[28];
                $preaddress = $line[29];
                $photo = $line[30];
                // Check whether member already exists in the database with the same email
                $prevQuery = "SELECT S_no FROM student WHERE Roll_no = '".$line[3]."'";
                $prevResult = $link->query($prevQuery);
 
                if($prevResult->num_rows > 0){
                    // Update member data in the database
                    $link->query("UPDATE student SET full_name ='$fullname',f_name='$fathername',
                    Roll_no='$Rollno',Registration_no='$regno',Discipline='$Discipline',session='$session',Blood='$bg',
                    Dob='$dob',Cnic='$cnic',Personal_c_no='$personalcno',Emergency_c_no='$emergencycno',
                    Permanent_address='$peraddress',Present_Address='$preaddress',
                    Domicile_District='$domiciledist',Province='$province',Addmission_quota='$quota',
                    Gender='$gender',Religion='$religion',Nationality='$nationality',
                    Metric_major='$matricmajor',Ssc_ob_marks='$matric_ob_marks',Ssc_total_marks='$matric_t_marks',
                    Ssc_percentage='$matric_percentage',Ssc_board='$matric_board',Hssc_major='$hssc_major',
                    Hssc_ob_marks='$hssc_ob_marks',Hssc_total_marks='$hssc_t_marks',
                    Hssc_precentage='$hssc_percentage',Hssc_board='$hssc_board',
                    Picture='$photo' WHERE Roll_no='$Rollno'");
                }else{
                    // Insert member data in the database
                    $link->query("insert into student(full_name,f_name,Roll_no,registration_no,Discipline, session,
                     Blood, Dob, Cnic, Personal_c_no, Emergency_c_no, Permanent_address, Present_Address,
                     Domicile_District, Province, Addmission_quota, Gender, Religion, Nationality,
                     Metric_major, Ssc_ob_marks, Ssc_total_marks, Ssc_percentage,Ssc_board,
                     Hssc_major,Hssc_ob_marks,Hssc_total_marks,Hssc_precentage,Hssc_board,Picture)
                      values('$fullname','$fathername','$Rollno','$regno','$Discipline','$session',
                      '$bg','$dob','$cnic','$personalcno','$emergencycno','$peraddress',
                      '$preaddress','$domiciledist','$province','$quot','$gender','$religion',
                      '$nationality','$matricmajor','$matric_ob_marks','$matric_t_marks','$matric_percentage',
                      '$matric_board',
                      '$hssc_major','$hssc_ob_marks','$hssc_t_marks','$hssc_percentage','$hssc_board',
                      '$photo')");
                }
            }
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}
// Redirect to the listing page
header("Location: import_multiple_records.php".$qstring);