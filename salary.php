<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salary</title>
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="assets/css/salary.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link rel="stylesheet" href="node_modules/bootstrap/">
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
      <h3>PAYROLL MANAGEMENT</h3>
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

      <a href="add_emp.php"><i class="fas fa-user-plus"></i><span>Add Employee</span></a>
      <a href="allemp.php"><i class="fas fa-user-friends"></i><span>Employee Report</span></a>
      <a href="#"><i class="fas fa-credit-card"></i><span>Salary</span></a>
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
    <a href="allemp.php"><i class="fas fa-user-friends"></i><span>All Employee</span></a>
    <a href="#"><i class="fas fa-credit-card"></i><span>Salary</span></a>
    <a href="add_user.php"><i class="fas fa-user-cog"></i><span>Add User</span></a>
  </div>
  <!--sidebar end-->

  <!--Salary -->

=======
  <form action="assets/backend/salary_add.php" method="$_POST">
    <h1 style="margin: 40px;">Generate Salary</h1>
    <tr>
      <td>Employee Id :&ensp;</td>
      <td><input type="text" name="EmployeeId" maxlength="10"></td>
    </tr>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <tr>
      <td>First Name :&emsp;</td>
      <td><input type="text" name="FirstName" maxlength="50"></td><br>
    </tr>
    <br>
    <tr>
      <td>Last Name :&emsp;</td>
      <td><input type="text" name="LastName" maxlength="50"></td>
    </tr>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <tr>
      <td> Bank Name :&emsp;</td>
      <td><input type="text" name="BankName " maxlength="50"></td><br>
    </tr>
    <br>
    <tr>
      <td>Account no.:&emsp;</td>
      <td><input type="text" name="Accountno" maxlength="50"></td><br>
    </tr>
    <br><br>
  </form>


=======
    <div class="row">
      <div class="column" style="background-color:#D0D0D0;">
        <center>
          <table align="center">
            <th>
              <h2>Earnings</h2>
            </th>
            <tr>
              <td> Base Salary :</td>
              <td><input type="text" name="Basesalary " maxlength="10"></td><br>
            </tr>
            <tr>
              <td> Conveyance :</td>
              <td><input type="text" name="Conveyance " maxlength="10"></td><br>
            </tr>
            <tr>
              <td> Special allowance :</td>
              <td><input type="text" name="Specialallowance " maxlength="10"></td><br>
            </tr>
            <tr>
              <td> Overtime :</td>
              <td><input type="text" name="Overtime " maxlength="10"></td><br>
            </tr>

          </table>
        </center>
      </div>

      <div class="column" style="background-color:#BEBEBE;">
        <center>

          <table>
            <th>
              <h2>Deduction</h2>
            </th>
            <tr>
              <td> Leave :</td>
              <td><input type="text" name="Leave " maxlength="10"></td><br>
            </tr>
            <tr>
              <td> Providend Fund :</td>
              <td><input type="text" name="Providendfund " maxlength="10"></td><br>
            </tr>
            <tr>
              <td> Income Tax :</td>
              <td><input type="text" name="Incometax " maxlength="10"></td><br>
            </tr>

          </table>
        </center>
      </div>
      <center>
        <input class="btn btn-primary btn" type="submit" value="Generate Salary Slip">
      </center>
    </div>
  </div>

  </div>

  </div>


  <!--Salary end-->
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