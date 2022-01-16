<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ADD Article</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="art_insert.php">
                
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title" name="ar_title">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sub-Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter sub title" name="ar_sub">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="enter date" name="date">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDOB">Editor Name</label>
                    <input type="text" class="form-control" id="exampleInputDOB" placeholder="editor" name="editor_name">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="insert">Submit</button>
                </div>
              </form>
            </div>
           </div>
        </div>
        </div>
    </section>

<?php
  include('database.php');
  if(!isset($_SESSION['email_id'])){
    header('location:alogin.php');
    die();
  }
     //session_start();
   
   if(isset($_POST['insert']))
   {

    $ar_title = $_POST['ar_title'];
    $ar_sub = $_POST['ar_sub'];
    $date = $_POST['date'];
    $editor_name = $_POST['editor_name'];

   $sql = "INSERT INTO `article`(`ar_title`,`ar_sub`,`date`,`editor_name`) VALUES ('$ar_title','$ar_sub','$date','$editor_name')";
   $res = mysqli_query($conn, $sql);
   //echo $sql;ex
   if(!$res) {
    die('Data not inserted');
 }
 

    echo "inserting data";
    mysqli_close($conn);
   }
?>

</body>
</html>