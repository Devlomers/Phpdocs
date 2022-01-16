<?php
//session_start();
include('database.php');
if(!isset($_SESSION['email_id'])){
    header('location:alogin.php');
    die();
  }

$id = $_GET['id']; // get id through query string

$sql = "DELETE FROM `editor` WHERE e_id = '$id'";

$res = mysqli_query($conn, $sql);


if($res)
{
    mysqli_close($conn); // Close connection
    header("location:editor_table.php"); // redirects to all records page
    exit;	
}
// a href="delete.php?id=<?php echo $data['a_id'];
else
{
    echo "Error deleting record"; // display error message if not delete
}

?>