<?php


$con=mysqli_connect("localhost","bryson","test","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO Comments(comment)
VALUES
('$_POST[comment]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";



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