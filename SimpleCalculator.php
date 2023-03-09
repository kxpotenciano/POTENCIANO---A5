<html>

<head>

	<title> Sample web form </title>

</head>

<body>

	<div>

		<h2> Simple Calculator </h2>

		<hr />

		<form>
			<p> Please enter first number: </p>
			<input type = "text" name = "Value1" autofocus>
			<p> Please enter second number: </p>
			<input type = "text" name = "Value2" autofocus>

			<input type = "submit" value = "Add">

		</form>

		<?php
		//Retrieve naem from querystring. Check the parameter
		//is in querystring or may get "Undefied index" error

	
			$a = $_GET['Value1'];
			$b = $_GET['Value2'];

			echo "Sum is: ", $a + $b;

		?>

	</div>

</body>

</html>