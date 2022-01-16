<?php
include('database.php');
if(!isset($_SESSION['email_id'])){
    header('location:alogin.php');
    die();
  }

   $sql = "SELECT * from `editor`";
   $res = mysqli_query($conn, $sql);
   
   //echo $sql;ex
   if(!$res) {
    die('Not displayed ');
    mysqli_close($conn);
 
 }
 echo " successfully\n";
 
//  $arr = mysqli_fetch_array($res);
?>

<html>
    <body>
        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>Occupation</td>
                    <td>City</td>
                </tr>
            </thead>
        <?php
        while($arr = $res->fetch_assoc())
        {?>
        <tr>
            <td><?php echo $arr['e_id'];?></td>
            <td><?php echo $arr['editor_name'];?></td>
            <td><?php echo $arr['email_id'];?></td>
            <td><?php echo $arr['password'];?></td>
            <td><?php echo $arr['occupation'];?></td>
            <td><?php echo $arr['city'];?></td>
            <br>
            <td><a href="editorupdateform.php?id=<?php echo $arr['e_id']; ?>">Edit</a></td>
            <td><a href="delete_editor.php?id=<?php echo $arr['e_id']; ?>">Delete</a></td>
        </tr> 
        <?php}?>
        </table>
        <?php } ?>
    </body>
</html>