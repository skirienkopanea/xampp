<!doctype html>
<html lang="en">
	<?php $page_title = 'Add Nutrient - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (empty($_SESSION['admin'])) {exit ("<h1>Admin area only</h1><h3><a href='javascript:history.back()'>Go back</a></h3>");} ?>
	<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	$sql2 = "SELECT * FROM main_categories WHERE active = 1";
	$query2 = mysqli_query($db,$sql2);
	if (!$query2) {
	exit("Database query failed: " . mysqli_error($db));
	}
	
	$record2 = mysqli_fetch_assoc($query2);
	
	$records = [];
	$x = 0;
	foreach($query2 as $record2) {
		$opts = array(
		'http'=>array(
		'method'=>"GET",
		'header'=>array($auth)));
		$context = stream_context_create($opts); 
		$json = file_get_contents('https://storefront-prod.nl.picnicinternational.com/api/15/lists/1?sublist=' . $record2['id'] ,false,$context);
		$sub_category = json_decode($json);

		$i = 0;
		foreach ($sub_category as $element) {
			$records [] = array(
							'id_' . $x => $sub_category[$i]->id,
							'name_' . $x => $sub_category[$i]->name,
							'main_category_' . $x => $record2['name']
							);
			$i += 1;
			$x += 1;
		}//this will be run the number of times there's a subcategory
		echo $record2['id'] . ' - ' . $record2['name'] . '<br>';
		
	} //until here it will be run 11 times.
	
	//here it's a nice records array with all sub_categories, run this loop for each element inside (123).
	
	$x = 0;
	foreach($records as $record) {
		if(is_numeric($record['id_' . $x] ?? '')) {
			$id = $record['id_' . $x] ?? '';
			$name = $record['name_' . $x] ?? '';
			$main_category = $record['main_category_' . $x] ?? '';
	
			//validate($record);
			
			$sql = "INSERT INTO sub_categories (id,name,main_category,active) VALUES ('" . $id . "','" . esc($name) . "','" . esc($main_category) . "',1) ";
			$query = mysqli_query($db,$sql);
		$x = $x + 1;
		}
	} //this block will be run 123 times
	header("Location: " . "picnic_index.php");
	var_dump($records);
} else {
	header("Location: " . "picnic_index.php");
	}

?>
  <body>
  </body>
<?php db_disconnect($db);?>
</html>