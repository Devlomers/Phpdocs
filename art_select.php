<?php
 include('database.php');
 if(!isset($_SESSION['email_id'])){
    header('location:alogin.php');
    die();
  }
   $sql = "SELECT * from `article`";
   $res = mysqli_query($conn, $sql);
   
   //echo $sql;ex
   if(!$res) {
    die('Could not display');
 }
 echo "successfully\n";
 mysqli_close($conn);
 
//  $arr = mysqli_fetch_array($res);
?>

<html>
    <body>
        <table>
            <thead>
                <tr>
                    <td>Title</td>
                    <td>Sub-Title</td>
                    <td>Date</td>
                    <td>Editor-Name</td>
                </tr>
            </thead>
        <?php
        while($arr = $res->fetch_assoc())
        {?>
        <tr>
            <td><?php echo $arr['ar_no'];?></td>
            <td><?php echo $arr['ar_title'];?></td>
            <td><?php echo $arr['ar_sub'];?></td>
            <td><?php echo $arr['date'];?></td>
            <td><?php echo $arr['editor_name'];?></td>
            
            <td><a href="articleupdateform.php?id=<?php echo $arr['ar_no']; ?>">Edit</a></td>
            <td><a href="article_delete.php?id=<?php echo $arr['ar_no']; ?>">Delete</a></td>
        </tr> 
        <?php}?>
        </table>
        <?php } ?>
    </body>
</html>