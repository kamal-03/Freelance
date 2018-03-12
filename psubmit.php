<?php
    include('session.php');
    if(isset($login_session))
    { 
        $conn=mysqli_connect("localhost","root","KAMAL0310","Project");
        $pcat=$_POST["pcat"];
        $pname=$_POST["Proj-Name"];
        $pdetails=$_POST["Description"];
        $budget=$_POST["budget"];
        $sql="insert into PDetails values ('$login_session','$pcat','$pname','$pdetails','$budget')";
        if(mysqli_query($conn,$sql))
        {
             echo '<script language="javascript">';
            echo 'alert("Project successfully submitted")';
            echo '</script>';
            header('refresh: 0.1; http://localhost/WT/hire.php');
        }
        else
        {
            echo $conn->error;
        }
    }
    else
    {
        header('index.php');
    }
?>
