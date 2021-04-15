<!doctype html>
<html lang="en">
	<?php $page_title = 'Update prices - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (empty($_SESSION['admin'])) {exit ("<h1>Admin area only</h1><h3><a href='javascript:history.back()'>Go back</a></h3>");} ?>
	<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$sql = "SELECT id,sub_category FROM scrap_products";
	$query = mysqli_query($db,$sql);
	if (!$query) {
	exit("Database query failed: " . mysqli_error($db)); }
	$time_start = microtime(true);
	foreach($query as $record) {	
	ini_set('max_execution_time', '0');
	error_reporting(0);
	
	//web-scrap nutrients
	$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>array($auth)));
	$context = stream_context_create($opts); 
	$json = file_get_contents('https://storefront-prod.nl.picnicinternational.com/api/15/product/' . $record['id'],false,$context);
	$product = json_decode($json);
	$product_details = $product->product_details ?? '';
	$product_name = $product_details->name ?? '';
	$product_price = ($product_details->price)/100 ?? 0;
	$product_image = $product_details->image_id ?? '';
	$unit_quantity = $product_details->unit_quantity ?? '';
	$product_ingridients = $product_details->ingredients_blob ?? '';
	$fresh = $product_details->fresh_label ?? '';
	$fresh_number = $fresh->number ?? '';
	
	//reset variables with err
	
	
	if (strpos($unit_quantity, 'x') !== false) {
	$product_quantity = (int) $unit_quantity * (int) str_replace(',', '.', substr($unit_quantity,strpos($unit_quantity,'x')+1));
	} else {
		$product_quantity = (int) str_replace(',', '.',$unit_quantity);
	}		
	
	if (strpos($unit_quantity, 'gram') !== false && is_numeric((int) $unit_quantity)) {
    $product_quantity_g = $product_quantity;
	} else if (strpos($unit_quantity, 'ml') !== false && is_numeric((int) $unit_quantity)) {
		$product_quantity_g = $product_quantity;
	} else if (strpos($unit_quantity, 'kilo') !== false && is_numeric((int) $unit_quantity)) {
		$product_quantity_g = 1000 * $product_quantity;
	} else if (strpos($unit_quantity, 'liter') !== false && is_numeric((int) $unit_quantity)) {
		$product_quantity_g = 1000 * $product_quantity;
	} else {
		$product_quantity_g = $unit_quantity;
	}
	
	if(is_numeric($product_quantity_g) && $product_quantity_g>0.0001 && $product_price>0.0001){
	$product_price_per_kg = $product_price/($product_quantity_g/1000);
	} else {
		$product_price_per_kg = "invalid weight";
	}
	
	if(isset($product_details->items)){
		$items = $product_details->items;
		$i = 0;
		foreach ($items as $item) {
			if(isset($items[$i]->id)){
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
		}
	}
	
	//execute sql
	$sql = "UPDATE IGNORE scrap_products SET ";
	$sql .="name='" . esc(trim(str_replace(array("\n", "", "\n",",","'"), " ", $product_name))) . "', ";
	if(isset($product_ingridients)){
		$sql .="ingridients='" . esc(trim(str_replace(array("\n", "", "\n",",","'"), " ", $product_ingridients))) . "', ";
	}
	$sql .="price='" . esc(trim(str_replace(array("\n", "", "\n",",","'"), " ", $product_price))) . "', ";
	$sql .="weight_g_net='" . esc(trim(str_replace(array("\n", "", "\n",",","'"), " ", $product_quantity_g))) . "', ";
	$sql .="price_per_kg='" . esc(trim(str_replace(array("\n", "", "\n",",","'"), " ", $product_price_per_kg))) . "', ";
	if(isset($fresh_number)){
		$sql .="fresh_days='" . esc(trim(str_replace(array("\n", "", "\n",",","'"), " ", $fresh_number))) . "', ";
	}
	//if(isset($origin){
		$sql .="origin='" . esc(trim(str_replace(array("\n", "", "\n",",","'"), " ", $origin))) . "', ";
	//}
	$sql .="image='" . esc(trim(str_replace(array("\n", "", "\n",",","'"), " ", $product_image))) . "' ";
	$sql .="WHERE id='" . esc($record['id']) . "'";
	
	$query = mysqli_query($db,$sql);
	if($query) {
	} else {
		return;
	}

}
// Display Script End time
$time_end = microtime(true);
$execution_time = ($time_end - $time_start)/60;
$_SESSION['message'] = '<b>Total Execution Time:</b> '.$execution_time.' Mins';
header("Location: " . "picnic_index.php");
}

//Web scrapping notes:
//All lists are here https://storefront-prod.nl.picnicinternational.com/api/15/lists/1


?>
  <body>
  <h1>Update more</h1>
	<h3><a class="action" href="../../index.php">Back to products list</a></h3>
  <form action="update_more.php" method="post">
    <table class="list">
    </table>
	<input type="submit" value="Continue" />
	</form>
  </body>
<?php db_disconnect($db);?>
</html>