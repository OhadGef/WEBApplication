
<!DOCTYPE html>
<html>
	
	<head>
		<title>iCOOK</title>
		<meta charset="UTF-8">
		<link href='https://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="includes/script.js"></script>	
		<link rel="stylesheet" type="text/css" href="includes/style.css">	
	</head>
	<body id="recipes">
		<div id="wrapper">
			<header>
				<a href="index.html" id="logo1"> </a>
				<p id="user">
					<span class="glyphicon glyphicon-user"> </span>
 					 <button type="button" class="btn btn-default btn-xs">Francis</button>
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
				
				<div id="my-recipe-main-left">
					<h1>Menu</h1>
					<a href="#" class="btn btn-default btn-lg" id="my-rec-b">My Recipes</a>
					<a href="my profile.html" class="btn btn-default btn-lg" id="my-rec">My Profile </a>
					<a href="add recipes.php" class="btn btn-default btn-lg" id="my-rec">Add recipes</a>
				</div>
				
				<div id="my-recipe-main-right">
					
					<h1>My Recipes</h1>
					
					
					<div id="recipe-scroll">
					<?php
					
			$imgNum = 1;
			require_once('connection.php');


			$query2 = "SELECT name, explanation FROM tbl_recipe_211";

			$response2 = @mysqli_query($dbc, $query2);


			if($response2){


			while($row = mysqli_fetch_array($response2)){

				echo '<div id="recipe-options">
				<a href="#">
						<h3 id="recipe-header">'. $row['name'] .'</h3>
						<img class="food-pic" src="images/img' ."$imgNum".'.jpg">
						<p>' . $row['explanation'] .'</p>
						<img id="hat" src="images/logo1.png">
						<span class="badge">52</span>
						</a>
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
					
					
					
					
					
					
					
					
					
				<!--	
				<div id="recipe-scroll">
					<div id="recipe-options">
						<a href="#">
						<h3 id="recipe-header">Pizza</h3>
						<img class="food-pic" src="images/img5.jpg">
						<p>Paragraphs are commonlyer and the fractional parts are arranged in each chapter in order of magnitude.</p>
						<img id="hat" src="images/logo1.png">
						<span class="badge">52</span>
						</a>
						<hr class="separator">
					</div>
					<div id="recipe-options">
						<a href="#">
						<h3 id="recipe-header">Milnese</h3>
						<img class="food-pic" src="images/milnese.jpg">
						<p>Paragraphs are commonly numbered using the decimal system, where (in books) the integral part of the decimal represents the number of the chapter and the fractional parts are arranged in each chapter in order of magnitude.</p>
						<img id="hat" src="images/logo1.png">
						<span class="badge">263</span>
						</a>
						<hr class="separator">
					</div>
					<div id="recipe-options">
						<a href="#">
						<h3 id="recipe-header">Spaghetti</h3>
						<img class="food-pic" src="images/Italian2.jpg">
						<p>Paragraphs are commonly numbered using the decimal system, where (in books) the integral part of the decimal represents the number of the chapter and the fractional parts are arranged in each chapter in order of magnitude.</p>
						<img id="hat" src="images/logo1.png">
						<span class="badge">24</span>
						</a>
						<hr class="separator">
					</div>
					<div id="recipe-options">
						<a href="recipe.html">
						<h3 id="recipe-header">Pie</h3>
						<img class="food-pic" src="images/cake.png">
						<p>Paragraphs are commonly numbered using the decimal system, where (in books) the integral part of the decimal represents the number of the chapter and the fractional parts are arranged in each chapter in order of magnitude.</p>
						<img id="hat" src="images/logo1.png">
						<span class="badge">39</span>
						</a>
						<hr class="separator">
					</div>
					<div id="recipe-options">
						<a href="#">
						<h3 id="recipe-header">Eggroll</h3>
						<img class="food-pic" src="images/thai.jpg">
						<p>Paragraphs are commonly numbered using the decimal system, where (in books) the integral part of the decimal represents the number of the chapter and the fractional parts are arranged in each chapter in order of magnitude.</p>
						<img id="hat" src="images/logo1.png">
						<span class="badge">424</span>
						</a>
						<hr class="separator">
					</div>
					<div id="recipe-options">
						<a href="#">
						<h3 id="recipe-header">Pancakes</h3>
						<img class="food-pic" src="images/pancakes.jpg">
						<p>Paragraphs are commonly numbered using the decimal system, where (in books) the integral part of the decimal represents the number of the chapter and the fractional parts are arranged in each chapter in order of magnitude.</p>
						<img id="hat" src="images/logo1.png">
						<span class="badge">73</span>
						</a>
						<hr class="separator">
					</div>
				</div>
  				-->
				</div>
				
  					
			</div>

			</div>
		
	
	</body>

</html>










	