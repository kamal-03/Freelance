<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "","Project");
    $noo=1;
    while(true)
    {
        echo $_SESSION['$aa['.$noo.']'];
        if($_POST["data"]==$noo)
        {
            $temp=$_SESSION['$aa['.$noo.']'];
            $temp1=$_SESSION['$pp['.$noo.']'];
            $sql2="update bdetails set decision='Yes' where uname='$temp' and pname='$temp1'";
            if(mysqli_query($conn,$sql2))
            {
                echo "Success";
                break;
            }
            break;
        }
        $noo++;
    }
?> 