<?php
    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    $connection = mysqli_connect("localhost", "root", "KAMAL0310");
    // Selecting Database
    $db = mysqli_select_db($connection,"Project");
    session_start();// Starting Session
    // Storing Session
    $user_check=$_SESSION['login_user'];
    // SQL Query To Fetch Complete Information Of User
    $ses_sql=mysqli_query( $connection,"select emailid from WData where emailid='$user_check'");
    $row = mysqli_fetch_assoc($ses_sql);
    $login_session =$row['emailid'];
    /*if(!isset($login_session))
    {
        mysql_close($connection); // Closing Connection
        header('Location: index.php'); // Redirecting To Home Page
    }*/
?>
