<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Projects</title>
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
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome_1.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
   
</head>
<body>
<?php
    include('header.php')
    ?>
    <div><br><br><br><br><br>
        <h2><font size=8>Projects</font></h2>
        <?php
            $conn=mysqli_connect("localhost","root","","Project");
            $sql="select * from PDetails";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
                echo "<br><br> Username Project Name Project Details Budget";
                while($row=$result->fetch_assoc())
                {
                    echo "<br><br>".$row["udetails"]." ".$row["pname"]."  ".$row["pdetails"]."  ".$row["budget"];
                }
            }
        ?>
    </div>
</body>
</html>