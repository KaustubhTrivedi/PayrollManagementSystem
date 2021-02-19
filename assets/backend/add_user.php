
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add User</title>
      <link rel="stylesheet" href="add_user.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      </head>
   
    <body style="background-color: #dfe0df;">
  
      <input type="checkbox" id="check">
      <!--header area start-->
      <header>
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
        
          <a href="add_emp.php"><i class="fas fa-user-plus"></i><span>Add Employee</span></a>
          <a href="allemp.php"><i class="fas fa-user-friends"></i><span>All Employees</span></a>
          <a href="salary.php"><i class="fas fa-credit-card"></i><span>Salary</span></a>
          <a href="#"><i class="fas fa-user-cog"></i><span>Add User</span></a>
        </div>
      </div>
      <!--mobile navigation bar end-->
      <!--sidebar start-->
      <div class="sidebar">
        <div class="profile_info">
          <img src="admin.png" class="profile_image" alt="">
          <h4>Admin</h4>
        </div>
        <a href="add_emp.php"><i class="fas fa-user-plus"></i><span>Add Employee</span></a>
        <a href="allemp.php"><i class="fas fa-user-friends"></i><span>All Employees</span></a>
        <a href="salary.php"><i class="fas fa-credit-card"></i><span>Salary</span></a>
        <a href="#"><i class="fas fa-user-cog"></i><span>Add User</span></a>
      </div>
      <!--sidebar end-->
      
      <!--Add User-->
      <div class="container">
        
      <form action="/action_page.php" class="is-valid">
        <h1 style="text-align: center; margin-bottom: 30px;">Login</h1>
        <div class="form-group">
          <label for="uname">Username:</label>
          <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="pwd">Confirm Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember" required> I agree.
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Check this checkbox to continue.</div>
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Add User</button>
      </form> 
  </div>
      <script type="text/javascript">
      $(document).ready(function(){
        $('.nav_btn').click(function(){
          $('.mobile_nav_items').toggleClass('active');
        });
      });
      </script>
   </body>
  </html>
  