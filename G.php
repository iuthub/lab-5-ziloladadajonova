


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 	G</title>
</head>
<body>
	<?php 



	if(isset($_POST['text'])){

		$input = $_POST["text"];
		$length = strlen($input);
		$regex_start = "/\[|\{/";
		$regex_end = "/\]|\}/";
		$result = "";
		$flag = false;

		$j=0;
		for($i=0;$i<$length;$i++){
			if(preg_match($regex_end, $input[$i])){
				$flag = false;
				continue;
			}

			if($flag){
				$result[$j] = $input[$i];
				$j++;
			}

			if(preg_match($regex_start, $input[$i])){
				$flag = true;
				continue;
			}else{
				continue;
			}
		}

	}

		if(!empty($result)){
			echo "<h1>".$result."</h1>";
		}
	?>

	<form action="G.php" method="post">
		<label for="text">Enter Text</label>
		<br>
		<input type="text" name="text" id="text">
		<button type="submit">Extract</button>
	</form>

</body>
</html>
