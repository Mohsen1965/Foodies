<!DOCTYPE html>
<html>

<head>
	<title>
		How to call PHP function
		on the click of a Button ?
	</title>
</head>

<body style="text-align:center;">

	<h1 style="color:green;">
		GeeksforGeeks
	</h1>

	<h4>
		How to call PHP function
		on the click of a Button ?
	</h4>

	<?php
		if(array_key_exists('page0', $_POST)) {
			page0();
		}
		else if(array_key_exists('page1', $_POST)) {
			page1();
		}
		function page0() {
      header('Location:acc.php');
      exit();
		}
		function page1() {
      header('Location:index1.php');
      exit();
		}
	?>

	<form method="post">
		<input type="submit" name="page0"
				class="button" value="page0" />

		<input type="submit" name="page1"
				class="button" value="page1" />
	</form>
</head>

</html>
