<?php
 //session_start();
 include('database.php');
 if(!isset($_SESSION['email_id'])){
  header('location:alogin.php');
  die();
}
 if(isset($_GET['id']))
 {
 $id = $_GET['id'];
 $sql = "SELECT * FROM `content` WHERE c_id ='" . $id . "'";
$result = $conn->query($sql);
// LOOP TILL END OF DATA 

                $rows=$result->fetch_assoc();
                
                $ar_no = $rows['ar_no'];
                $place_id = $rows['place_id'];
                $description = $rows['description'];
                $photos = $rows['photos'];
                $videos = $rows['videos'];

}
?>


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
                <h3 class="card-title">Content Page</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="content_update.php">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">ar_no</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="article no" name="ar_no" value="<?php echo $ar_no; ?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Place ID</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter PlaceID " name="place_id" value="<?php echo $place_id; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">description</label>
                    <textarea class="form-control" id="exampleInputPassword1" placeholder="description" name="description" value="<?php echo $description; ?>"></textarea>
                    <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="descrpition" name="password"> -->
                  </div>

                  <div class="form-group">
                    <!-- <label for="exampleInputFile">File input</label> -->
                    <label for="exampleInputFile">Photos</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input accept="image/*" type="file" class="custom-file-input" id="exampleInputFile" name="photos">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <!-- <label for="exampleInputFile">File input</label> -->
                    <label for="exampleInputFile">Videos</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input accept="video/*" type="file" class="custom-file-input" id="exampleInputFile" name="videos" >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
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
     //session_start();
   
   if(isset($_POST['insert']))
   {

   $ar_no = $_POST['ar_no'];
   $place_id = $_POST['place_id'];
   $description = $_POST['description'];
   $photos = $_POST['photos'];
   $videos = $_POST['videos'];

   $sql = "INSERT INTO `content`(`ar_no`,`place_id`,`description`,`photos`,`videos`) VALUES ('$ar_no','$place_id','$description','$photos','$videos')";
   $res = mysqli_query($conn, $sql);
   //echo $sql;ex
   if(!$res) {
    die('Data not inserted');
 }
 

    mysqli_close($conn);
   }
?>

</body>
</html>