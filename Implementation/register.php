<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Register</title>
  <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-----  Custom css  ------>
      <link rel="stylesheet" href="style/admin.css">

</head>
<body>

  <div  class="container">
    <form action="register.php" method="post">
      <h3>ADMIN REGISTER</h3>
           <div class="form-group">
             <label for="email">Email address:</label>
                 <input type="email" name="email" class="form-control" id="email">
              </div>
           <div class="form-group">
             <label for="email">Name:</label>
                 <input type="text" name="name" class="form-control" id="email">
              </div>
          <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" id="pwd">
  </div>
  <input type="submit" class="btn btn-primary" name="submit" value="Register"/>

</form>
    
  </div>

  <?php
  
       include('db/connection.php');

       if(isset($_POST['submit']))
       {

        $email=$_POST['email'];
        $name=$_POST['name'];
        $password=$_POST['password'];

        $query=mysqli_query($conn,"insert into register (email,name,password) values('$email','$name','$password')");

        if($query)
        {
          echo"<script> alert ('Admin registered') </script>>";
          header('location:admin_login.php');
        }
        else
        {
          echo"<script> alert ('Try again') </script>>";
        }
       }






  ?>

</body>
</html>