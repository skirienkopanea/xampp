<!doctype html>
<html lang="en">
	<?php $page_title = 'Add Nutrient - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (empty($_SESSION['admin'])) {exit ("<h1>Admin area only</h1><h3><a href='javascript:history.back()'>Go back</a></h3>");} ?>
	<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>array($auth)));
	$context = stream_context_create($opts); 
	$json = file_get_contents('https://storefront-prod.nl.picnicinternational.com/api/15/lists/1' ,false,$context);
	$main_category = json_decode($json);
	
	$i = 0;
	$records = [];
	foreach ($main_category as $element) {
		$records [] = array(
						'id_' . $i => $main_category[$i]->id,
						'name_' . $i => $main_category[$i]->name,
						);
	$i += 1;
	}
	
	
	$i = 0;
	foreach($records as $record) {
		if(is_numeric($record['id_' . $i] ?? '')) {
			$id = $record['id_' . $i] ?? '';
			$name = $record['name_' . $i] ?? '';

			//validate($record);
			
			$sql = "INSERT INTO main_categories (id,name,active) VALUES ('" . $id . "','" . esc($name) . "',1) ";
			$query = mysqli_query($db,$sql);
		$i = $i + 1;
		}
	
	}
	header("Location: " . "picnic_index.php");

} else { header("Location: " . "picnic_index.php"); }

?>
  <body>
  </body>
<?php db_disconnect($db);?>
</html>