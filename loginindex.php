<?php
    include('login.php'); // Includes Login Script
    if(isset($_SESSION['login_user']))
    {
        header("location: index.php");
    }
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
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
   
</head><!--/head-->

<body>
    <?php
        include('header.php');
    ?><!--/#header-->

<!-- Meta tag Keywords --
<!--header-->
	<div class="header-w3l">
		
	</div><br><br>
<!--//header-->
<!--main-->
<div class="main-agileits"><br><br>
	<h2 class="sub-head">Log In</h2>
		<div class="sub-main">	
			<form action="" method="post">
				
				<input placeholder="Email" id="name" name="username" class="mail" type="text" required="">
					<span class="icon1"><i class="fa fa-envelope" aria-hidden="true"></i></span><br>
				
				<input  placeholder="Password" id="password" name="password" class="pass" type="password" required="">
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
				
				
				<input type="submit" name="submit" value="login"> <br>
				<span><?php echo $error; ?></span>       
			</form>
		</div>
		<div class="clear"></div>
</div>
<!--//main-->
</body>
</html>
