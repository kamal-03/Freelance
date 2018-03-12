<html>
<body>
<?php
	$servername="localhost";
	$username="root";
	$password="KAMAL0310";
	$dbname="Studata";
	$name=$_POST["name"];
	$age=$_POST["age"];
	$conn=mysqli_connect($servername,$username,$password);
	if(!$conn)
	{
		die("Connection failed: ".mysqli_connect_error());
	}
	echo "Connection successful<br>";
	$sql1="CREATE DATABASE Studata";
	if(mysqli_query($conn,$sql1))
	{
		echo "Database created successfully<br>";
	}
	else 
	{
		echo "Database not created<br>";
	}
    $conn=mysqli_connect($servername,$username,$password,$dbname);
	$sql2="CREATE TABLE Student(
		name VARCHAR(10) NOT NULL,
		age INT(2),
		reg_date TIMESTAMP)";
	if(mysqli_query($conn,$sql2))
	{ 
		echo "Table created successfully<br>";
	}
	else 
	{
		echo "Table not created<br>".$conn->error;
	}
	$sql3=" INSERT INTO Student (name,age) values ('$name',$age)";
	if(mysqli_query($conn,$sql3))
	{ 
		echo "<br>Insertion successful<br>";
	}
	else 
	{
		echo "Data not inserted<br>".$conn->error;
	}
	$sql4="select * from Student";
	$result=mysqli_query($conn,$sql4);
	if(mysqli_num_rows($result)>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo "<br>Name: ".$row["name"]." Age: ".$row["age"]." Reg Date: ".$row["reg_date"];
		}
	}
	else
	{
		echo "0 results";
	}
	$sql5="update Student set Name='Akshay' where Age=19";
	if(mysqli_query($conn,$sql5))
	{
		echo "<br>Record updated successfully";
	}
	else
	{
		echo "<br>Error updating record: ".$conn->error;
	}
	$sql6 = "delete from Student where Name='Kamal'";
	if (mysqli_query($conn,$sql6)) 
	{
   		echo "<br>Record deleted successfully";
	} 
	else 
	{
    		echo "<br>Error deleting record: ".$conn->error;
	}
	mysqli_close($conn);
?>
</body>
</html>
