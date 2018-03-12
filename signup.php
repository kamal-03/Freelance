<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sign Up Form </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
	</div>
<!--//header-->
<!--main-->
<div class="main-agileits"><br><br>
	<h2 class="sub-head">Sign Up</h2>
		<div class="sub-main">	
			<form name="signupForm" action="register1.php" method="post" onsubmit="checkuser()">
				<input placeholder="First Name" name="fname" class="name" type="text" pattern= "^[a-zA-Z]+$" title="Only alphabets allowed"required="">
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				
                <input placeholder="Last Name" name="lname" class="name2" type="text" pattern= "^[a-zA-Z]+$" title="Only alphabets allowed"required="">
					<span class="icon2"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				
                <input placeholder="Phone Number" name="Number" class="number" type="text"  pattern="[789][0-9]{9}" title="10 digits starting with 7/8/9"required="">
					<span class="icon3"><i class="fa fa-phone" aria-hidden="true"></i></span><br>
				
                <input placeholder="Email" name="mail" id="mail" class="mail" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="format: abc@xyz.com" required="">
					<span class="icon4"><i class="fa fa-envelope" aria-hidden="true"></i></span><br>
				
                <input  placeholder="Password" name="Password" id="new-pass" class="pass" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.Password.pattern = this.value;" >
					<span class="icon5"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
				
                <input  placeholder="Confirm Password" id= "Password" name="Password" class="pass" type="password"  pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');"required="">
					<span class="icon6"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
				
                <select name="jtype" id=sel_style  required>
				 	<option value="" disabled selected>Select your profile type</option>
  					<option value="Work">Want to work</option>
  					<option value="Hire">Want to hire</option>
				</select><br>
				<input type="submit" value="sign up"> <br>
                 <h3>Already a member?<h3>
                  <a href="loginindex.php">
                     <input type="submit" value="login here">
                  </a>
			</form>
		</div>
		<div class="clear"></div>
</div>
<!--//main-->
</body>
</html>