<!doctype html>
<html lang="en">
	<?php $page_title = 'Add Nutrient - Minimalist Diet & Workout'; ?>
	<?php require_once('private/functions.php'); ?>
	<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$record = [];
	$record['user'] = $_POST['user'] ?? '';
	$record['password'] = $_POST['password'] ?? '';
	$record['password_repeat'] = $_POST['password_repeat'] ?? '';
	validate($record);
	
	$hash_password = password_hash($record['password'],PASSWORD_DEFAULT);
	
	//execute sql
	$sql = "INSERT INTO users (user,hash_password) VALUES ('";
	$sql .= $record['user'] . "','";
	$sql .= esc($hash_password) . "') ";
	
	$query = mysqli_query($db,$sql);
	
	$sql2 = "INSERT INTO `body` (`user`) VALUES
	('" . $record['user'] . "');";
	
	$query2 = mysqli_query($db,$sql2);
	
	$sql3 = "INSERT INTO `diet_constraints` (`user`) VALUES
	('" . $record['user'] . "');";
	
	$query3 = mysqli_query($db,$sql3);
	
	$sql4 = "INSERT INTO `diet_plan` (`user`) VALUES
	('" . $record['user'] . "');";
	
	$query4 = mysqli_query($db,$sql4);
	
	$sql5 = "INSERT INTO `nutritionfacts` SELECT '" . $record['user'] . "' AS user
	,id
	,name
	,active
	,description
	,category
	,timestamp
	,weight_unit_g
	,kcals
	,protein
	,fat
	,carb
	,fiber
	,water
	,calcium
	,iron
	,magnesium
	,phosphorus
	,potassium
	,sodium
	,zinc
	,copper
	,fluoride
	,manganese
	,selenium
	,vitaminc
	,thiamin
	,riboflavin
	,niacin
	,pantothenicacid
	,vitaminb6
	,folate
	,choline
	,vitaminb12
	,vitamina
	,vitamine
	,vitamind
	,vitamink
	,ala183und
	,la182und
	,monofat
	,polyfat
	,satfat
	,transfat
	,phenylalanine
	,valine
	,threonine
	,tryptophan
	,methionine
	,leucine
	,isoleucine
	,lysine
	,histidine 
	FROM nutritionfacts WHERE user='sergio'";
	
	$query5 = mysqli_query($db,$sql5);
	
	$sql6 = "INSERT INTO products SELECT '" . $record['user'] . "' AS user
	,id
	,name
	,active
	,description
	,timestamp
	,usda_id
	,price
	,weight_g_net
	,price_per_kg
	,fresh_days
	,origin
	,image
	, '0' AS feedback
	FROM products WHERE user='sergio'";

	$query6 = mysqli_query($db,$sql6);
	
	//validate sql
	if (!$query || !$query2 || !$query3 || !$query4 || !$query5 || !$query6) {//notify if there is an error
	exit("Database query failed: " . mysqli_error($db));
	//then stop everything else
} else {//success brings you back
	$_SESSION['message'] = "Account created successfully, you may use the submitted credentials to log in";
	header("Location: " . "login.php");
}

} else { // if not a post go back
	header("Location: " . "new.php");
}

?>
  <body>
  </body>
<?php db_disconnect($db);?>
</html>