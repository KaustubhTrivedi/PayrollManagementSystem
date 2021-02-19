<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Employee</title>
  <!--<link rel="stylesheet" href="index.css">-->
  <link rel="stylesheet" href="assets/css/add_emp.css">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>

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
      <img src="admin.png" class="mobile_profile_image" alt="">
      <i class="fa fa-bars nav_btn"></i>
    </div>
    <div class="mobile_nav_items">

      <a href="#"><i class="fas fa-user-plus"></i><span>Add Employee</span></a>
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
    <a href="#"><i class="fas fa-user-plus"></i><span>Add Employee</span></a>
    <a href="allemp.php"><i class="fas fa-user-friends"></i><span>All Employees</span></a>
    <a href="salary.php"><i class="fas fa-credit-card"></i><span>Salary</span></a>
    <a href="add_user.php"><i class="fas fa-user-cog"></i><span>Add User</span></a>
  </div>
  <!--sidebar end-->

  <!--Add Employeee-->
  <form action="assets/backend/insertcode.php" method="POST">
    <table align="center" cellpadding="3">
      <th>
        <h1 style=" margin-bottom: 20px;">Employee details</h1>
      </th>
      <tr>
        <td>Employee Id :</td>
        <td><input type="text" name="EmployeeId" maxlength="10" placeholder="Employee Id"></td>
      </tr>
      <tr>
        <td>First Name :</td>
        <td><input type="text" name="FirstName" maxlength="50" placeholder="First Name"></td>
      </tr>
      <tr>
        <td>Last Name :</td>
        <td><input type="text" name="LastName" maxlength="50" placeholder="Last Name"></td>
      </tr>
      <tr>
        <td>Gender :</td>
        <td><input type="radio" name="Gender" value="Male" /> Male
          <input type="radio" name="Gender" value="Female" /> Female
        </td>
      </tr>
      <tr>
        <td>D.O.B. :</td>
        <td><input type="date" id="birthday" name="birthday"> </td>
      </tr>
      <tr>
        <td>Address :<br /><br /><br /></td>
        <td><textarea name="Address" rows="6" cols="50"></textarea></td>
      </tr>
      <tr>
        <td>Mobile Number :</td>
        <td><input type="text" name="MobileNumber" maxlength="10"></td>
      </tr>
      <tr>
        <td>Email ID :</td>
        <td><input type="email" name="EmailID" maxlength="50"></td>
      </tr>
      <tr>
        <td>Qualification : </td>
        <td><input type="text" name="Qualification"></td>
      </tr>
      <tr>
        <td>Department :</td>
        <td><select id="Department" name="Department">
            <option value="" disabled selected hidden>Choose option</option>
            <option value="Production">Production</option>
            <option value="Research and Development">Research and Development</option>
            <option value="Marketing">Marketing</option>
            <option value="Accounting and Finance.">Accounting and Finance</option>
          </select></td>
      </tr>
      <tr>
        <td>Employee Status :</td>
        <td><select id="Designation" name="Designation">
            <option value="" disabled selected hidden>Choose option</option>
            <option value="Manager">Former Employee</option>
            <option value="Manager">Employee</option>
          </select></td>
      </tr>

      <tr>
        <td colspan="2" align="center"> <input type="submit" value="Submit"></td>
      </tr>
    </table>
  </form>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.nav_btn').click(function() {
        $('.mobile_nav_items').toggleClass('active');
      });
    });
  </script>

</body>

</html>