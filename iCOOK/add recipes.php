<html>
	<head>
		<title>iCOOK</title>
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
					<a href="my recipes.php" class="btn btn-default btn-lg" id="my-rec">My Recipes</a>
					<a href="my profile.html" class="btn btn-default btn-lg" id="my-rec">My Profile </a>
					<a href="#" class="btn btn-default btn-lg" id="my-rec-b">Add recipes</a>
				</div>
				
				<div id="my-recipe-main-right">
					
					<h1>New Recipe</h1>
					
					<form class="cForm" method="POST" action="">
				  		<section id="sec-left">
							
							<h5>*Recipe Name:</h5>
								<input id="input-a" type="text" size="18" name="recipe_name" required="required" placeholder="Title...">
							
							<br>
							
							
							<h5>Explanation (100 characters):</h5>
								<textarea class="explain" name="exp" rows="5" cols="25" required="required"> </textarea>
							
							<br>
							<h5>Preferences:</h5>
								<div id="bob">
									<label><input type="checkbox" name="preferences[]" value="Kosher"/>Kosher</label>
									<label><input type="checkbox" name="preferences[]" value="Gluten Free"/>Gluten Free</label>
									<br><label><input type="checkbox" name="preferences[]" value="No Peanuts"/>No Peanuts</label>
									<label><input type="checkbox" name="preferences[]" value="Vegetarion"/> Vegetarion</label>
									<br><label><input type="checkbox" name="preferences[]" value="Suger Free"/>Suger Free</label>
								</div>
						</section>
					
								
						<section id="sec-right">
							
							<h5>Cuisine:</h5>
							<div id="bob">
								<label><input type="checkbox" name="cuisine[]" value="Thai"/>Thai</label>
								<label><input type="checkbox" name="cuisine[]" value="Italian"/>Italian</label>
							<br><label><input type="checkbox" name="cuisine[]" value="Israeli"/>Israeli</label>
								<label><input type="checkbox" name="cuisine[]" value="Indian"/> Indian</label>
							<br><label><input type="checkbox" name="cuisine[]" value="Mexican"/>Mexican</label>
								<label><input type="checkbox" name="cuisine[]" value="German"/>German</label>
							</div>
							<h5>Ingredients:</h5>
								<input id="input-a" type="text" size="18" name="ingredients" placeholder=""  value=" ">
							
							<br>
							<br>
							<h5>Directions:</h5>
								<div id="add-step" >
									<input id="input-a" type="text" size="18" name="dir1" placeholder="Step..." value=" ">
									<a class="add-pic-but" onclick="add_step()" href="#" >
										<i class="material-icons">add</i><h6>Add step</h6>
									</a>
								</div>
								
								 <div id="add-step" class="add-steps">
									<input id="input-a"class="tt" type="text" size="18"name="dir2" placeholder="Step..." value=" ">
								</div>
								 <div id="add-step" class="add-steps">
									<input id="input-a"class="tt" type="text" size="18"name="dir3" placeholder="Step..." value=" ">
								</div>
								 <div id="add-step" class="add-steps">
									<input id="input-a"class="tt" type="text" size="18"name="dir4" placeholder="Step..." value=" ">
								</div>
								 <div id="add-step" class="add-steps">
									<input id="input-a"class="tt" type="text" size="18"name="dir5" placeholder="Step..." value=" ">
								</div>
								<a href="#"id="add-pic">
									<i class="material-icons">panorama</i><h6>Add pic</h6>
								</a>		
												
													
								

						</section>					
					  	<section >
					  		<input type="submit" id="submit" name="submit" value="Submit" />
	  					</section>
								
				  			</form>
				</div>
				

			</div>
			
			
			
			<?php
require_once('connection.php');

if(isset($_POST['submit'])){
	

	$value=$_POST['recipe_name'];
	$value1=$_POST['exp'];	
	$value2=$_POST['preferences'];	
	$value3=$_POST['cuisine'];
	$value4=$_POST['ingredients'];
	$value5=$_POST['dir1'];
	$value6=$_POST['dir2'];
	$value7=$_POST['dir3'];
	$value8=$_POST['dir4'];
	$value9=$_POST['dir5'];
	
	if(!empty($value2)){
		$prefArray = implode(",", $value2);
	}
	
	if(!empty($value2)){
		$cuisArray = implode(",", $value3);
	}
	
	$query5 = "INSERT INTO tbl_recipe_211 (name, explanation, preferences,
        cuisine, ingredients, direction1, direction2, direction3, direction4, direction5) VALUES (?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = mysqli_prepare($dbc, $query5);
        
        
        mysqli_stmt_bind_param($stmt, "ssssssssss", $value, $value1, $prefArray, $cuisArray, $value4, $value5, $value6, $value7, $value8, $value9);
        
        mysqli_stmt_execute($stmt);
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        } else {
            
            echo '<h2>Error Occurred</h2><br>';
            echo mysqli_error();
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        }
 

}


else {

			echo mysqli_error($dbc);

}

		
		?>	
			
			
			
			
			
			
			
		
		</div>
	</body>

</html>










	