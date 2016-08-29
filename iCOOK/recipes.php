<html>
	
	<head>
		<title>iCOOK</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link href='https://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="includes/script.js"></script>	
		<link rel="stylesheet" type="text/css" href="includes/style.css">	
	</head>
	<body id="recipes">
		<div id="wrapper">
			
			<div id="mobileHead">
				<a href="index.html" class="logoM"> </a>
			</div>
			
			<header>
				<a href="index.html" id="logo1"> </a>
				<p id="user">
					<span class="glyphicon glyphicon-user"> </span>
 					 <button type="button" class="btn btn-default btn-xs">Shaked</button>
				</p>
			</header>
			
			
			<nav id="mainNav">
				<ul>
					<li><a href="#">Recipes</a></li>
					<li><a href="#">Chefs</a></li>
					<li><a href="#">Contact Us</a></li>
					<li>
        				<input type="search" class="nav-search" placeholder=" Search" />
					</li>
				</ul>
			</nav>
			<div id="main">
				
				<div id="main-left">
					<div id="list"> </div>
					<img src="images/grocery.png"/>	
					
					<button type="button" class="btn btn-default btn-lg" id="find-rec">Find recipe</button>
				</div>
				
				<div id="main-right">
					
					<h2>Recipes</h2>
					
					<div class="btn-group" id="btn-top" role="group" aria-label="...">
  						<div class="btn-group" role="group">
    						<button  type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     					 		Order By
     					 		<span class="caret"></span>
    						</button>
    							<ul class="dropdown-menu">
      								<li><a href="#">A-Z</a></li>
	      							<li><a href="#">Z-A</a></li>
	      							<li><a href="#">Most Popular</a></li>
	      							<li><a href="#">Chef</a></li>
	    						</ul>
  						</div>
  						<div class="btn-group" role="group">
    						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     					 		Preferences
     					 		<span class="caret"></span>
    						</button>
    						<ul class="dropdown-menu">
      								<li><a href="#">Kosher<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Vegetarian<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Gluten Free<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Sugar Free<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">No Peanuts<input class="checkb" type="checkbox"></a></li>
	    					</ul>
  						</div>
  						<div class="btn-group" role="group">
    						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     					 		Cuisine
     					 		<span class="caret"></span>
    						</button>
    							<ul class="dropdown-menu">
      								<li><a href="#">Mexican<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Italian<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Indian<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Cajun<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Thai<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Greek<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Chinese<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Japanese<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">American<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Mediterranean<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">French<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Caribbean<input class="checkb" type="checkbox"></a></li>
	    						</ul>
  						</div>
  						<div class="btn-group" role="group">
    						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     					 		Chef
     					 		<span class="caret"></span>
    						</button>
    							<ul class="dropdown-menu" id="dropdown-right">
      								<li><a href="#">Anthony Bourdain<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Wolfgang Puck<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Gordon Ramsay<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Massimo Bottura<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Alex Atala<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Alain Ducasse<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Jamie Oliver<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Jose Andres<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">David Chang<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Magnus Nilsson<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Nobu Matsuhisa<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Rene Redzepi<input class="checkb" type="checkbox"></a></li>
	      							<li><a href="#">Heston Blumenthal<input class="checkb" type="checkbox"></a></li>
	    						</ul>
  						</div>					
					</div>
					
					<div id="recipe-scroll">
					<?php
					
			$imgNum = 1;
			require_once('connection.php');


			$query2 = "SELECT name, explanation FROM tbl_recipe_211";

			$response2 = @mysqli_query($dbc, $query2);


			if($response2){


			while($row = mysqli_fetch_array($response2)){

				echo '<div id="recipe-options">
				<a href="recipe.html">
						<h3 id="recipe-header">'. $row['name'] .'</h3>
						<img class="food-pic" src="images/img' ."$imgNum".'.jpg">
						<p>' . $row['explanation'] .'</p>
						<img id="hat" src="images/logo1.png">
						<span class="badge">52</span>
						</a>
						<input type="image" src="images/empty.png" class="star" onclick="changepic('."$imgNum".')title="Add to favorites">
						<hr class="separator">
					</div>';
					
					$imgNum++;
			}

				

			} else {

			echo "Couldn't issue database query<br />";

			echo mysqli_error($dbc);

			}

			mysqli_close($dbc);
		?>
		</div>
			</div>
			<div id="mobileNav">
				<ul>
					<li><a href="index.html"><i class="material-icons">home</i><span>Home</span></a></li>
					<li><a href="#"><i class="material-icons">content_paste</i><span class="grocText">Groceries</span></a></li>
					<li><a href="#"><i class="material-icons">restaurant</i><span>Recipes</span></a></li>
					<li><a href="#"><i class="material-icons">account_box</i><span>Profile</span></a></li>
					<li><a href="#"><i class="material-icons">dehaze</i><span>Settings</span></a></li>
				</ul>
    		</div>
		
		</div>
	</body>

</html>