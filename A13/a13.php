<!DOCTYPE html>
<html>
<body>
<?php
$break = "\r\n";
	if(count($_POST) > 0){
		if(file_exists("comments.txt")){
			$test = $_POST["comments"];
			$file = "comments.txt";
			$writer = fopen($file, 'a+');
			fwrite($writer,$test);
			fwrite($writer, $break);
			$page = file($file);
			foreach($page as $value){
			echo $value;
			}
			fclose($writer); 
			}
	
		else{
			$test = $_POST["comments"];
			$file = "comments.txt";
			$writer = fopen($file, 'w');
			fwrite($writer,$test);
			fwrite($writer, $break);
			$page = file($file);
			fclose($writer); 
		}
	}	
?>

<form name="exampleform" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<p>Enter comments: <input type="text" name="comments"></p>
<button type="submit">Submit</button>
</form>

</body>
</html>