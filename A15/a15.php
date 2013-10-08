<?php


$con=mysqli_connect("localhost","bryson","test","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$enteredUser = $_POST['userName'];
$enteredComment = $_POST['comment'];

setcookie("user","$enteredUser");

if(isset($_COOKIE["user"])){
	echo "Welcome ".$_COOKIE["user"]."<br>";
}
else{
	echo "Welcome Guest"."<br>";
}

$postUN = "INSERT INTO Comments(username,comment)
VALUES
('$enteredUser','$enteredComment')";


if (!mysqli_query($con,$postUN))
  {
  die('Error: ' . mysqli_error($con));
  }


$getUsernames = "Select username FROM comments";
$resultU = mysqli_query($con,$getUsernames);
if(!$resultU){
    echo 'Could not run query: ' . mysql_error();
    exit;
}

$userArray = Array();
while($uRow = mysqli_fetch_array($resultU, MYSQL_ASSOC)){
$userArray[] = $uRow['username'];
}
$nonDup = array_unique($userArray);

foreach($nonDup as $val){
	echo "$val : ";
	$count_array = array_count_values($userArray);
	$count = $count_array[$val];
	echo "$count <br>";
}
	


$getComments = "SELECT comment FROM comments";
$result = mysqli_query($con,$getComments);
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$newArray = Array();
while($row = mysqli_fetch_array($result, MYSQL_ASSOC)){
$newArray[] = $row['comment'];
}


foreach($newArray as $val){
	echo "$val <br>";
}
mysqli_close($con);
?>