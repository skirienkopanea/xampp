<!doctype html>
<html lang="en">
	<?php $page_title = 'Add Nutrient - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (empty($_SESSION['admin'])) {exit ("<h1>Admin area only</h1><h3><a href='javascript:history.back()'>Go back</a></h3>");} ?>
	<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	$sql2 = "SELECT * FROM sub_categories WHERE active = 1";
	$query2 = mysqli_query($db,$sql2);
	if (!$query2) {
	exit("Database query failed: " . mysqli_error($db));
	}
	
	$record2 = mysqli_fetch_assoc($query2);
	
	$records = [];
	$ids = array();
	$time_start = microtime(true);
	foreach($query2 as $record2) {
		ini_set('max_execution_time', '0');
		$opts = array(
		'http'=>array(
		'method'=>"GET",
		'header'=>array($auth)));
		$context = stream_context_create($opts); 
		$json = file_get_contents('https://storefront-prod.nl.picnicinternational.com/api/15/lists/' . $record2['id'] . '?depth=2',false,$context);
			
		$needle = "SINGLE_ARTICLE";
		$lastPos = 0;
		$positions = array();

		while (($lastPos = strpos($json, $needle, $lastPos))!== false) {
			$positions[] = $lastPos;
			$lastPos = $lastPos + strlen($needle);
		}

		$new_ids = array();
		foreach ($positions as $value) {
			$new_ids[] = array(
							'id' => substr($json,$value + 22,8),
							'sub_category' => $record2['name']
							);
		}
		$new_ids = array_unique($new_ids, SORT_REGULAR);
		
		foreach ($new_ids as $value) { 
		$ids[] = $value;
		}
	}//until here it will be run 123 times.

	foreach ($ids as $record) {
			$id = $record['id'] ?? '';
			$sub_category = $record['sub_category'] ?? '';
	
			//validate($record);
			
			$sql = "INSERT INTO scrap_products (id,sub_category,active) VALUES ('" . $id . "','" . esc(trim(str_replace(array("\n", "", "\n",",","'"), " ", $sub_category))) . "',1) ";
			$query = mysqli_query($db,$sql);
	} //this block will be run 123 times
	header("Location: " . "picnic_index.php");
	$time_end = microtime(true);
	$execution_time = ($time_end - $time_start)/60;
	$_SESSION['message'] = '<b>picnic_get_scrap Execution Time:</b> '.$execution_time.' Mins';
} else {
	header("Location: " . "picnic_index.php");
	}

?>
  <body>
  </body>
<?php db_disconnect($db);?>
</html>