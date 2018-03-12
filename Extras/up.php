<html>
<?php
    session_start();
        $conn=mysqli_connect("localhost","root","","Project");
        $oldpass=$_POST['OPassword'];
        $newpass=$_POST['Password'];
        $user=$_SESSION["login_user"];
        $sql="select * from WData where emailid='$user' AND pass='$oldpass'";
        $result=mysqli_query($conn,$sql);
        if($result->num_rows > 0)
        {
            $sql1="update WData set pass='$newpass' where emailid='$user' AND pass='$oldpass'";
            mysqli_query($conn,$sql1);
            echo '<script language="javascript">';
            echo 'alert("Password updated successfully")';
            echo '</script>';
        }
        else
        {
            echo '<script language="javascript">';
            echo 'alert("Password is invalid")';
            echo '</script>';
        }   
?>
</html>