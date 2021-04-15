<!doctype html>
<html lang="en">
	<?php $page_title = 'Add Nutrient - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");}?>
	<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$record = [];
	$record['id'] = $_POST['id'] ?? '';
	$record['active'] = $_POST['active'] ?? '';
	$record['description'] = $_POST['description'] ?? '';
	$record['usda_id'] = $_POST['usda_id'] ?? '';
	//validate($record);
	
	//web-scrap nutrients
	$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>array($auth)));
	$context = stream_context_create($opts); 
	$json = file_get_contents('https://storefront-prod.nl.picnicinternational.com/api/15/product/' . $record['id'],false,$context);
	$product = json_decode($json);
	$product_details = $product->product_details;
	$product_name = esc($product_details->name);
	$product_price = ($product_details->price)/100;
	$product_image = $product_details->image_id;
	$unit_quantity = $product_details->unit_quantity;
	
	if (strpos($unit_quantity, 'x') !== false) {
	$product_quantity = $unit_quantity * str_replace(',', '.', substr($unit_quantity,strpos($unit_quantity,'x')+1));
	} else {
	$product_quantity = (int) str_replace(',', '.', $unit_quantity);
	}
	$invalid_weight = false; 
	if (strpos($unit_quantity, 'gram') !== false) {
    $product_quantity_g = $product_quantity;
	} else if (strpos($unit_quantity, 'ml') !== false) {
		$product_quantity_g = $product_quantity;
	} else if (strpos($unit_quantity, 'kilo') !== false) {
		$product_quantity_g = 1000 * $product_quantity;
	} else if (strpos($unit_quantity, 'liter') !== false) {
		$product_quantity_g = 1000 * $product_quantity;
	} else {
	$invalid_weight = true;
	$product_description = '! Error: weight = ' . $product_details->unit_quantity;
	$product_quantity_g = $product_details->unit_quantity;
	}
	 
	$product_price_per_kg = $product_price/($product_quantity_g/1000);
	if ($invalid_weight && $product_details->unit_quantity_sub == 0) {
		$product_price_per_kg = "invalid weight";
	} else if ($invalid_weight) {
		$product_price_per_kg = str_replace(',', '.', $product_details->unit_quantity_sub);
	}
	$fresh = $product_details->fresh_label;
	//$fresh_unit = $fresh->unit;
	$fresh_number = $fresh->number;
	$items = $product_details->items;

	if(!is_numeric($product_price_per_kg)){
		$feedback = 1;
	} else {
		$feedback = 0;
	}
	$i = 0;
	foreach ($items as $item) {
		if($items[$i]->id == "additional_info"){
			$items_items = $items[$i]->items;
			$i = 0;
			foreach ($items_items as $items_item) {
				if($items_items[$i]->id == "countries_of_origin"){
					$origin = $items_items[$i]->text;
				}
				$i += 1;
			}
		}
		$i += 1;
	}
	//execute sql
	$sql = "INSERT IGNORE INTO products (
		user
		,id
		,name
		,active
		,description
		,usda_id
		,price
		,weight_g_net
		,price_per_kg
		,origin
		,fresh_days
		,image
		,feedback
		,timestamp
		) VALUES ('"
		. $_SESSION['user'] . "','"
		. $record['id'] . "','"
		. $product_name . "','"
		. $record['active'] . "','"
		. $record['description'] . $product_description . "','"
		. $record['usda_id'] . "','"
		. $product_price . "','"
		. $product_quantity_g . "','"
		. $product_price_per_kg . "','"
		. $origin . "','"
		. $fresh_number . "','"
		. $product_image . "','"
		. $feedback . "',"
		. "NOW())";
	$query = mysqli_query($db,$sql);
	//validate sql
	if (!$query) {//notify if there is an error
	exit("Database query failed: " . mysqli_error($db));
	//then stop everything else
} else {//success brings you back
	header("Location: " . "show.php?id=" . url($record['id']));
}

} else { // if not a post go back
	header("Location: " . "new.php");
}

?>
  <body>
  </body>
<?php db_disconnect($db);?>
</html>