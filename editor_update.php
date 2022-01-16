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
 

   $editor_name = $_POST['editor_name'];
   $email_id = $_POST['email_id'];
   $password = $_POST['password'];
   $occupation = $_POST['occupation'];
   $city = $_POST['city'];

   $sql = "UPDATE `editor` SET `editor_name`='$editor_name',`email_id`='$email_id',`password`='$password',`occupation`='$occupation',`city`='$city' WHERE `e_id` ='" . $id . "'";
   $res = mysqli_query($conn, $sql);
   
   //echo $sql;ex
   if(!$res) {
    die('Could not update: ');
 }
}

 echo " updated successfully\n";
 header("location:editor_table.php");
 mysqli_close($conn);
 
 //  $arr = mysqli_fetch_array($res);
?>

