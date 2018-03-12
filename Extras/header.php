<html>
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
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
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
                        <li><a href="lproject.php">Projects</a></li>
                        <li><a href="projects.php">Post a Project</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="logout.php" class="btn btn-primary btn-sm">Logout</a></li>
			<li><div class="dropdown">
  				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    				Dropdown button
  				</button>
    				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    				<a class="dropdown-item" href="#">Action</a>
    				<a class="dropdown-item" href="#">Another action</a>
    				<a class="dropdown-item" href="#">Something else here</a>
  				</div>
			    </div>
                    </ul>                  
                </div>
            </div>
        </div>

    </header>
 <?php   }
    ?>
</html>