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
 

   $ar_title = $_POST['ar_title'];
   $ar_sub = $_POST['ar_sub'];
   $date = $_POST['date'];
   $editor_name = $_POST['editor_name'];

   $sql = "UPDATE `article` SET `ar_title`='$ar_title',`ar_sub`='$ar_sub',`date`='$date',`editor_name`='$editor_name' WHERE `ar_no` ='" . $id ."'";
   $res = mysqli_query($conn, $sql);
   
   //echo $sql;ex
   if(!$res) {
    die('Could not update: ');
 }
}

 echo " updated successfully\n";
 header('location:article_table.php');
 mysqli_close($conn);
 
 //  $arr = mysqli_fetch_array($res);
?>

