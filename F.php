
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 	F</title>
</head>
<body>
	<?php 



	if(isset($_POST['text'])){

		$input = $_POST["text"];
		$length = strlen($input);
			$regex = "/[<br>|<\/br>]/";
		$result = "";

		$j=0;
		for($i=0;$i<$length;$i++){
			if(!preg_match($regex, $input[$i])){
				$result[$j] = $input[$i];
				$j++;
			}else{
				continue;
			}
		}

	}

		if(!empty($result)){
			echo "<h1>".$result."</h1>";
		}
	?>

	<form action="F.php" method="post">
		<label for="text">Enter Text</label>
		<br>
		<textarea name="text" rows="5" id="text"></textarea> <br>
		<button type="submit">Remove the new lines</button>
	</form>

</body>
</html>
