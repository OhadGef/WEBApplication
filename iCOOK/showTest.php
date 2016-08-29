<!DOCTYPE html>
<html>
	<head>
		<title>iCOOK</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link href='https://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="includes/style.css">
		<link rel="stylesheet" href="mystyle.php">
	</head>
	<body id="index_body">
		<div id="wrapper">
			<?php

			require_once('connection.php');


			$query = "SELECT name, explanation, preferences, cuisine, ingredients, direction1, direction2, direction3 FROM tbl_recipe_211";

			$response = @mysqli_query($dbc, $query);


			if($response){

			echo '<table id="table">

			<tr><th align="left"><b>name</b></th>
			<th align="left"><b>explanation</b></th>
			<th align="left"><b>preferences</b></th>
			<th align="left"><b>cuisine</b></th>
			<th align="left"><b>ingredients</b></th>
			<th align="left"><b>direction1</b></th>
			<th align="left"><b>direction2</b></th>
			<th align="left"><b>direction3</b></th></tr>';
			
			
			
			while($row = mysqli_fetch_array($response)){

				echo '<tr><td align="left">' . 
				$row['name'] . '</td><td align="left">' . 
				$row['explanation'] . '</td><td align="left">' . 
				$row['preferences'] . '</td><td align="left">' .
				$row['cuisine'] . '</td><td align="left">' .
				$row['ingredients'] . '</td><td align="left">' .
				$row['direction1'] . '</td><td align="left">' .
				$row['direction2'] . '</td><td align="left">' .
				$row['direction3'] . '</td>';

				echo '</tr>';
			}

				echo '</table>';

			} else {

			echo "Couldn't issue database query<br />";

			echo mysqli_error($dbc);

			}
			
		
		?>
			
			
		</div>
	</body>
</html>