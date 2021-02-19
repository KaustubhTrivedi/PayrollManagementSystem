<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PAYROLL MANAGEMENT</title>
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="emp_report.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

  <input type="checkbox" id="check">
  <!--header area start-->
  <header>
    <!--<label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>-->
    <div class="left_area">
      <h3>PAYROLL <span>MANAGEMENT</span></h3>
    </div>
    <div class="right_area">
      <a href="#" class="logout_btn">Logout</a>
    </div>
  </header>
  </div>
  <!--header area end-->
  <!--mobile navigation bar start-->
  <div class="mobile_nav">
    <div class="nav_bar">
      <img src="admin.png" class="mobile_profile_image" alt="">
      <i class="fa fa-bars nav_btn"></i>
    </div>
    <div class="mobile_nav_items">

      <a href="add_emp.html"><i class="fas fa-user-plus"></i><span>Add Employee</span></a>
      <a href="emp_report.html"><i class="fas fa-user-friends"></i><span>Employee Report</span></a>
      <a href="salary.html"><i class="fas fa-credit-card"></i><span>Salary</span></a>
      <a href="add_user.html"><i class="fas fa-user-cog"></i><span>Add User</span></a>
    </div>
  </div>
  <!--mobile navigation bar end-->
  <!--sidebar start-->
  <div class="sidebar">
    <div class="profile_info">
      <img src="admin.png" class="profile_image" alt="">
      <h4>Admin</h4>
    </div>
    <a href="add_emp.html"><i class="fas fa-user-plus"></i><span>Add Employee</span></a>
    <a href="emp_report.html"><i class="fas fa-user-friends"></i><span>Employee Report</span></a>
    <a href="salary.html"><i class="fas fa-credit-card"></i><span>Salary</span></a>
    <a href="add_user.html"><i class="fas fa-user-cog"></i><span>Add User</span></a>
  </div>
  <!--sidebar end-->

  <!--Add Employeee-->
  <div class="jumbotron" style="margin:100px 100px 100px 250px;">
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Employee Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="insertcode.php" method="POST">
            <div class="modal-body">

              <div class="form-group">
                <label>Employee Id</label>
                <input type="text" name="employeeid" class="form-control" placeholder="Enter Employee ID">
              </div>
              <div class="form-group">
                <label>Employee Name</label>
                <input type="text" name="employeename" class="form-control" placeholder="Enter Employee Full name">
              </div>
              <div class="form-group">
                <label>Designation</label>
                <input type="text" name="designation" class="form-control" placeholder="Enter Employee Designation">
              </div>

              <div class="form-group">
                <label>Department</label>
                <input type="text" name="department" class="form-control" placeholder="Enter Department">
              </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="insertdata" class="btn btn-primary">Save Data </button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <!-- Table starts here -->
    <div class="card">
      <h2>Employee Report</h2>
    </div>
    <div class="card">
      <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
          Add Data
        </button>
      </div>
    </div>

    <div class="card">
      <div class="card-body">

        <?php
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, 'emp_report');
        $query = "SELECT * FROM `employee_report` ";
        $query_run = mysqli_query($connection, $query);
        ?>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th>Employee Id</th>
              <th>Employee Name</th>
              <th>Designation</th>
              <th>Department</th>
            </tr>
          </thead>


          <tbody>
            <tr>
              <?php
              include('insertdata.php');
              ?>
              <td><?php echo $row['Emp_id']; ?></td>
              <td><?php echo $row['Emp_name']; ?></td>
              <td><?php echo $row['Designation']; ?></td>
              <td><?php echo $row['Department']; ?></td>
              <?php
              include('insertdata.php');
              ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.nav_btn').click(function() {
        $('.mobile_nav_items').toggleClass('active');
      });
    });
  </script>

</body>

</html>