<?php 
$connection = mysqli_connect("localhost","root");
mysqli_select_db($connection,'emp_report');

if(isset($_POST['insertdata']))
{
     $employeeid = $_POST['employeeid'];
     $employeename = $_POST['employeename'];
     $designation = $_POST['designation'];
     $department = $_POST['department'];

     $query = "INSERT INTO `employee_report`(`Emp_id`, `Emp_name`, `Designation`, `Department`) VALUES ('$employeeid','$employeename','$designation','$department')";
     $query_run = mysqli_query($connection, $query);

     if($query_run)
        {
            echo '<script> alert("Data Saved"); </script>';
            header('Location:emp_report.php');
        }

     else{
            echo '<script> alert("Data Saved"); </script>';
          }
        }

 ?>