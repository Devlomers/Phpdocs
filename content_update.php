<?php
   //session_start();
   include('database.php');
   if(!isset($_SESSION['email_id'])){
      header('location:alogin.php');
      die();
    }
   if(isset($_POST['id']))
    {
      $id = $_POST['id'];
 

      $ar_no = $_POST['ar_no'];
      $place_id = $_POST['place_id'];
      $description = $_POST['description'];
      $photos = $_POST['photos'];
      $videos = $_POST['videos'];

   $sql = "UPDATE `content` SET ar_no='$ar_no' ,place_id='$place_id', `description`='$description',`photos`='$photos',`videos`='$videos' WHERE c_id ='" . $id . "'";
   $res = mysqli_query($conn, $sql);
   
   //echo $sql;ex
   if(!$res) {
    die('Could not update: ');
 }
}

 header("location:content_table.php");
 mysqli_close($conn);
 
 //  $arr = mysqli_fetch_array($res);
?>

