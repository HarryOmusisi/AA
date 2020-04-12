<?php
$server="localhost";
$username="root";
$password="";
$dbname="bills";

//connection to database
$conn=mysql_connect($server,$username,$password,$dbname);

if(!$conn){
	echo"error";
}
//fetch images and display them
$sql="SELECT * FROM 'images' ";
$result=$conn->query($sql);

//loop through the records 
while($row=mysqli_fetch_array($result)){
	$id=$row['id'];

	$image_name=$row['filename'];
	$image_source=$row['url'];
	$image_status=$row['status'];

	//for each image display interface
	//echo"<img src=."$image_source."style='height:40px;width:40px;'>".$image_name.;

	//check the current status


	//update status to 0
	$sql1="UPDATE images SET status='0' WHERE id=$id";
	$result1=$conn->query($sql1);
}
?>