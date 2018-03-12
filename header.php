<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Freelancer</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
   
<style>
.dropbtn {
    background-color: #FFFFFF;
    color: #999;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    margin : 9% auto;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    font-family: 'Lato', sans-serif;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #80c9f1;
							}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #52b6ec; 
    color:white;
}
</style>
</head>
<?php
include('session.php');
if(!isset($login_session))
{ ?>
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" ></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li><a href="lproject.php">Projects</a></li>
                        <li><a href="projects.php">Post a Project</a></li>
                        <li><a href="learn.php">Learn</a></li>
                    <!--   <li><a href="#pricing">Pricing</a></li> -->
                        <li><a href="index.php#about-us">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="signup.php" class="btn btn-primary btn-sm">Signup</a></li>
                    	<li><a href="loginindex.php" class="btn btn-primary btn-sm">Log In</a></li>
                    </ul>                  
                </div>
            </div>
        </div>
    </header>
 <?php  }
   else
   { ?>
   	<header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" ></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php"><i class="icon-home"></i></a></li>
                         <?php
                                        $user=$_SESSION["login_user"];
                                        $conn = mysqli_connect("localhost", "root", "KAMAL0310","Project");
                                        $sql="select * from WData where emailid='$user' and jtype='Hire'";
                                        $result=mysqli_query($conn,$sql);
                                        if($result->num_rows > 0)
                                        {?>
    								<li><a href="projects.php">Post a Project</a></li>
                                    	<?php }else{?>
                                    				<li><a href="lproject.php">Projects</a></li>
                          
                                    	<?php }?>
   									

  								<!--</div>
					<!--	</div> <li><a href="lproject.php">Projects</a></li>
                        <li><a href="projects.php">Post a Project</a></li> -->
                        <li><a href="learn.php">Learn</a></li>
                    <!--    <li><a href="#pricing">Pricing</a></li> -->
                        <li><a href="index.php#about-us">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>&nbsp &nbsp                      
                    </ul>  
                     <div class="dropdown" >
  							<button class="dropbtn">My Account</button>
  								<div class="dropdown-content">
                                    <?php
                                        $user=$_SESSION["login_user"];
                                        $conn = mysqli_connect("localhost", "root", "KAMAL0310","Project");
                                        $sql="select * from WData where emailid='$user' and jtype='Hire'";
                                        $result=mysqli_query($conn,$sql);
                                        if($result->num_rows > 0)
                                        {?>
    								<a href="hire.php">My Projects(Hire)</a>
                                    <?php }else{?>
                                    <a href="job.php">My Projects(Work)</a>      
                                    <?php }?>
   									<a href="update_details.php">Reset Password</a>
    								<a href="logout.php">Logout</a>
  								</div>
						</div>             
                </div>
            </div>
        </div>
    </header>
 <?php   }
    ?>
</html>
