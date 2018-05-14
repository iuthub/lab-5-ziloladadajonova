

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 	D</title>
</head>
<body>
	<?php 



	if(isset($_POST['text'])){

		$input = $_POST["text"];
		$length = strlen($input);
		$regex = "/ /";
		$result="null";

		$j=0;
		for($i=0;$i<$length;$i++){
			if(preg_match($regex, $input[$i])){
				continue;
			}else{
				$result[$j] = $input[$i];
				$j++;
			}
		}

	}

		if(!empty($result)){
			echo "<h1>".$result."</h1>";
		}
	?>

	<form action="D.php" method="post">
		<label for="text">Enter Text</label>
		<br>
		<input type="text" name="text" id="text">
		<button type="submit">Remove the whitespaces</button>
	</form>

</body>
</html>
