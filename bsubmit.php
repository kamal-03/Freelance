<?php
        session_start();// Starting Session
        $conn = mysqli_connect("localhost", "root", "KAMAL0310","Project");
        
        $login_session=$_SESSION['login_user'];
        $noo=1;
        while(true)
        {
            if($_POST["data"]==$noo)
            {
                $temp=$_SESSION['$a['.$noo.']'];
                $sql="insert into bdetails(pname,uname) values ('$temp','$login_session')";
                if(mysqli_query($conn,$sql))
                { 
                    echo '<script language="javascript">';
            		echo 'alert("Bid submitted successfully")';
           		 echo '</script>';
            		header('refresh: 0.1; http://localhost/WT/job.php');
                }
                else 
                {
                    echo "Data not inserted<br>".$conn->error;
                }
             break;
            }
            $noo++;
         
        }
?>
