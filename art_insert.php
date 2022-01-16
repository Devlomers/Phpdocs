<?php
   //session_start();
   include('database.php');
   if(!isset($_SESSION['email_id'])){
      header('location:alogin.php');
      die();
    }
   
   $ar_title = $_POST['ar_title'];
   $ar_sub = $_POST['ar_sub'];
   $date = $_POST['date'];
   $editor_name = $_POST['editor_name'];


   $sql = "INSERT INTO `article`(`ar_title`,`ar_sub`,`date`,`editor_name`) VALUES ('$ar_title','$ar_sub','$date','$editor_name')";
   $res = mysqli_query($conn, $sql);
   
   //echo $sql;ex
   if(!$res) {
    die('Not Inserted ');
 }
 
header('location:article_table');
mysqli_close($conn);
?>
