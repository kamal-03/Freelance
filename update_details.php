<?php 
    include 'header.php';
?>
<?php
        if(isset($_POST['submit']))
        {
        session_start();
        $conn=mysqli_connect("localhost","root","KAMAL0310","Project");
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
            header('refresh: 0.1; http://localhost/WT/logout.php');
        }
        else
        {
            echo '<script language="javascript">';
            echo 'alert("Password is invalid")';
            echo '</script>';
        }   
        }
?>
<html>
	<head>
	 	<title>Update Details</title>
	 	<link href="css/style.css" rel="stylesheet">
	 	<link href="css/font-awesome_1.min.css" rel="stylesheet" type="text/css" media="all">
 	</head>
<body>
<div class="header-w3l">		
	</div><br><br>
<!--//header-->
<!--main-->
<div class="main-agileits"><br><br>
	<h2 class="sub-head">Reset Password</h2>
		<div class="sub-main">	
			<form action="" method="post">
				
				<input  placeholder="Old Password" name="OPassword" class="pass" type="password" required="">
					<span class="icon1"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
				<input  placeholder="New Password" name="Password" class="pass" type="password" required="">
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
				
				<input name="submit" type="submit" value="Reset Password"> <br>
               
            </form>
		</div>
		<div class="clear"></div>
</div>
<!--//main-->
</body>
</html>
