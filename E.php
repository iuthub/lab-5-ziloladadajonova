

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 	E</title>
</head>
<body>
	<?php 



	if(isset($_POST['text'])){

		$input = $_POST["text"];
		$length = strlen($input);
			$regex = "/[0-9.,]/";
		$result = "";

		$j=0;
		for($i=0;$i<$length;$i++)
		{
			if(preg_match($regex, $input[$i]))
			{
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

	<form action="E.php" method="post">
		<label for="text">Enter Text</label>
		<br>
		<input type="text" name="text" id="text">
		<button type="submit">Remove the nonnumerics</button>
	</form>

</body>
</html>
