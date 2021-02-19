<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payroll management system</title>
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>


<body style="background-color: #dfe0df;">

  <input type="checkbox" id="check">
  <!--header area start-->
  <header>
    <!--<label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>-->
    <div class="left_area">
      <h3>Payroll <span> Management System </span></h3>
    </div>
    <div class="right_area">
      <a href="#" class="logout_btn">Logout</a>
    </div>
  </header>
  <!--header area end-->
  <!--mobile navigation bar start-->
  <div class="mobile_nav">
    <div class="nav_bar">
      <img src="images/admin.png" class="mobile_profile_image" alt="image of an admin">
      <i class="fa fa-bars nav_btn"></i>
    </div>
    <div class="mobile_nav_items">

      <a href="add_emp.php"><i class="fas fa-user-plus"></i><span>Add Employee</span></a>
      <a href="allemp.php"><i class="fas fa-user-friends"></i><span>All Employees</span></a>
      <a href="salary.php"><i class="fas fa-credit-card"></i><span>Salary</span></a>
      <a href="add_user.php"><i class="fas fa-user-cog"></i><span>Add User</span></a>
    </div>
  </div>
  <!--mobile navigation bar end-->
  <!--sidebar start-->
  <div class="sidebar">
    <div class="profile_info">
      <img src="images/admin.png" class="profile_image" alt="">
      <h4>Admin</h4>
    </div>
    <a href="add_emp.php"><i class="fas fa-user-plus"></i><span>Add Employee</span></a>
    <a href="allemp.php"><i class="fas fa-user-friends"></i><span>All Employees</span></a>
    <a href="#"><i class="fas fa-credit-card"></i><span>Salary</span></a>
    <a href="add_user.php"><i class="fas fa-user-cog"></i><span>Add User</span></a>
  </div>
  <!--sidebar end-->

  <script type="text/javascript">
    $(document).ready(function() {
      $('.nav_btn').click(function() {
        $('.mobile_nav_items').toggleClass('active');
      });
    });
  </script>

</body>

</html>