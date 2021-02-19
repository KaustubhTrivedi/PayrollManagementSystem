<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="col-lg-4"> 
  <h2>Basic database Connection</h2>
  <form action="" name="forml" method="post">
    <div class="form-group">
      <label for="firstname">First Name:</label>
      <input type="firstname" class="form-control" id="firstname" placeholder="Enter first name" name="firstname">
    </div>
    <div class="form-group">
      <label for="lasttname">Last Name:</label>
      <input type="lastname" class="form-control" id="lastname" placeholder="Enter last name" name="lastname">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="contact">Contact:</label>
      <input type="contact" class="form-control" id="contact" placeholder="Enter contact" name="contact">
    </div>
    <button type="submit" name="insert" class="btn btn-default">Insert</button>
    <button type="submit" name="update" class="btn btn-default">Update</button>
    <button type="submit" name="delete" class="btn btn-default">Delete</button>
    <li><a href="logout.php">LogOut</a></li>
  </form>
</div>
</div>

<div class="col-lg-12">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Conatct</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $res=mysqli_query($link,"select * from table1");
            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                echo "<td>";  echo $row["id"];  echo "</td>";
                echo "<td>";  echo $row["firstname"];  echo "</td>";
                echo "<td>";  echo $row["lastname"];  echo "</td>";
                echo "<td>";  echo $row["email"];  echo "</td>";
                echo "<td>";  echo $row["contact"];  echo "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
  </table>
</div>
</body>


<?php
if (isset($_POST["insert"]))
{
    mysqli_query($link,"insert into table1 values(NULL,'$_POST[firstname]','$_POST[lastname]',
                                                       '$_POST[email]','$_POST[contact]')");
}
?>
</html>