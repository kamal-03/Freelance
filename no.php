<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "KAMAL0310","Project");
    $noo=1;
    while(true)
    {
        if(isset($_POST["Yes$noo"]) && !empty($_POST["Yes$noo"]))
        {
            $temp=$_SESSION['$aa['.$noo.']'];
            $temp1=$_SESSION['$pp['.$noo.']'];
            $sql2="update bdetails set decision='Yes' where uname='$temp' and pname='$temp1'";
            if(mysqli_query($conn,$sql2))
            {
                echo '<script language="javascript">';
                echo 'alert("Bid accepted")';
                echo '</script>';
            }
            break;
        }
        else if(isset($_POST["No$noo"]) && !empty($_POST["No$noo"]))
        {
            $temp=$_SESSION['$aa['.$noo.']'];
            $temp1=$_SESSION['$pp['.$noo.']'];
            $sql2="update bdetails set decision='No' where uname='$temp' and pname='$temp1'";
            if(mysqli_query($conn,$sql2))
            {
                echo '<script language="javascript">';
                echo 'alert("Bid rejected")';
                echo '</script>';
            }
            break;
        }
        $noo++;
    }
    header('refresh: 1; http://localhost/WT/index.php');
?> 
