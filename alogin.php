<?php
include("database.php");
// if(!isset($_SESSION['email_id'])){
//   header('location:alogin.php');
//   die();
// }
    // $message="";
    // if(count($_POST)>0) 
    // {
    //     $result = mysqli_query($conn,"SELECT * FROM `admin` WHERE email_id ='" . $_POST["email_id"] . "' && (password = '". $_POST["password"]."')");
    //     $row=$result->fetch_assoc();
    //     if(is_array($row))
    //      {
    //       $_SESSION["email_id"] = $row['email_id'];
    //       $_SESSION["password"] = $row['password'];
    //      } else
    //     {
    //      $message = "Invalid Username or Password!";
    //     }
    // }
    // // $pass = password_hash($Password, PASSWORD_BCRYPT);
    // // $Cpass = password_hash($Cpassword, PASSWORD_BCRYPT);
    // if(isset($_SESSION["email_id"]))
    //  {

    //    header("Location:dashboard.php");

    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="E:\wamp62\www\travinfo\AdminLTE-master\plugins\fontawesome-free\css\all.min.css">
  <!-- Theme style -->
</head>
<link rel="stylesheet" href="css\adminlte.min.css">
<body class="hold-transition sidebar-mini">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h2 class="card-title">Admin Login</h2>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="authentication.php">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email_id">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="insert" href="dashboard.php"> Log In</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
