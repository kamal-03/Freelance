<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MY Projects</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/lproject.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome_1.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body style="text-align:center;">
<?php
    include('header.php')
    ?>
    <br><div class="main-agileits">
    <h2 class="sub-head">MY Projects</h2>
    </div>
   
        <?php
            $no=1;
            $conn=mysqli_connect("localhost","root","KAMAL0310","Project");
            $user=$_SESSION["login_user"];
            $sql="select * from PDetails where udetails='$user'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
        
                while($row=$result->fetch_assoc())
                {
                   // echo $no .' )&nbsp<span class="proj_des">NAME: &nbsp</span> <span class="proj_val">'.$row['pname'].'</span><br>';
                    echo ' &nbsp &nbsp &nbsp &nbsp<span class="proj_des">CATEGORY: &nbsp</span> <span class="proj_val">'.$row['pcat'].'</span><br>';
                    echo ' &nbsp <span class="proj_des">AMOUNT: &nbsp </span> <span class="proj_val">Rs. &nbsp'.$row['budget'].'</span><br>';
                    $bname=$row['pname'];
                    $sql1="select uname from bdetails where pname='$bname'";
                    $res=mysqli_query($conn,$sql1);
                    if(mysqli_num_rows($res)>0)
                    {
                        while($row1=$res->fetch_assoc())
                        {   
                            $_SESSION['$aa['.$no.']']=$row1['uname'];
                            $_SESSION['$pp['.$no.']']=$row['pname'];
                            echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span class="proj_des">Bidder Name: &nbsp </span><span class="proj_val">'.$row1['uname'].'</span><br>';
                            echo "<form action='no.php' method='post'>";
                            echo '<input name="data" type="hidden" value='.$no.'>';
                            echo "&nbsp<input type='submit' value='Yes' name='Yes$no'>";
                            echo "&nbsp<input type='submit' value='No' name='No$no'>";
                            echo "</form>";
                            $no++;
                        }
                    }
                    echo '<hr style="background-color: grey; height:2px; width:50%; align:center;">';
                    $no++;
                }
            } 
        ?>
</body>
</html>


