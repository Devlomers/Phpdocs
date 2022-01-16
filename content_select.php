<?php
include('database.php');
if(!isset($_SESSION['email_id'])){
    header('location:alogin.php');
    die();
  }
   $sql = "SELECT * from `content`";
   $res = mysqli_query($conn, $sql);
   
   //echo $sql;ex
   if(!$res) {
    die('Could not create database: ');
 }
 echo "Database travinfo shown successfully\n";
 mysqli_close($conn);
 
//  $arr = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
</head>
    <body>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <td>C_id</td>
                    <td>Ar_no</td>
                    <td>Place_id</td>
                    <td>Description</td>
                    <td>Photos</td>
                    <td>Videos</td>
                </tr>
            </thead>
        <?php
        while($arr = $res->fetch_assoc())
        {?>
        <tr>
            <td><?php echo $arr['c_id'];?></td>
            <td><?php echo $arr['ar_no'];?></td>
            <td><?php echo $arr['place_id'];?></td>
            <td><?php echo $arr['description'];?></td>
            <td><?php echo $arr['photos'];?></td>
            <td><?php echo $arr['videos'];?></td>
            <td><a href="contentupdateform.php?id=<?php echo $arr['c_id']; ?>">Edit</a></td>
            <td><a href="content_delete.php?id=<?php echo $arr['c_id']; ?>">Delete</a></td>
        </tr>
        <?php }?>
        </table>
    </body>
</html>