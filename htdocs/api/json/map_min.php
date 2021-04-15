<?php
header('Content-type: application/json');
$db = mysqli_connect("localhost","coolwork_db",".t66yKQ1B8@Nce","coolwork_db");
if(mysqli_connect_errno()) {
  $msg = "Database connection failed: ";
  $msg .= mysqli_connect_error();
  $msg .= " (" . mysqli_connect_errno() . ")";
  exit($msg);
}

$sql = "SELECT

	usda_id,
	usda_name,
	product_id,
	product_name,
	price_per_kg,
	kcals,
	protein,
	fat,
	carb,
	fiber,
	water,
	calcium,
	iron,
	magnesium,
	phosphorus,
	potassium,
	sodium,
	zinc,
	copper,
	fluoride,
	manganese,
	selenium,
	vitaminc,
	thiamin,
	riboflavin,
	niacin,
	pantothenicacid,
	vitaminb6,
	folate,
	choline,
	vitaminb12,
	vitamina,
	vitamine,
	vitamind,
	vitamink,
	ala183und,
	la182und,
	monofat,
	polyfat,
	satfat,
	transfat,
	phenylalanine,
	valine,
	threonine,
	tryptophan,
	methionine,
	leucine,
	isoleucine,
	lysine,
	histidine		
	
	FROM map_min WHERE user ='" . $_GET['user'] ."'";

$query = mysqli_query($db,$sql);
if (!$query) {
exit("Database query failed: " . mysqli_error($db));
}
$num = mysqli_num_rows($query);

if($num >0){
$record_arr = [];
//$record_arr['data'] = [];

while($record = mysqli_fetch_assoc($query)) { //same as for each query as record...
	extract($record);
	
	$nutrient_record = array(
		'usda_id'				=> $usda_id, //because I extract record I dont need to write $record['id'] I can just type $id. Its not necessary but makes the code cleaner. Be aware that extract() must not be used on untrusted data like user input (such as $_GET)... but hey, as long as the column names are set by me and I use htm and url cleaners then it's just like using htm(record['name']) =- htm($name).
		'usda_name'			=> htmlspecialchars($usda_name),
		'product_id'		=> $product_id,
		'product_name'		=> htmlspecialchars($product_name),
		'price_per_kg'		=> $price_per_kg,
		'kcals'				=> $kcals,
		'protein'			=> $protein,
		'fat'				=> $fat,
		'carb'				=> $carb,
		'fiber'				=> $fiber,
		'water'				=> $water,
		'calcium'			=> $calcium,
		'iron'				=> $iron,
		'magnesium'			=> $magnesium,
		'phosphorus'		=> $phosphorus,
		'potassium'			=> $potassium,
		'sodium'			=> $sodium,
		'zinc'				=> $zinc,
		'copper'			=> $copper,
		'fluoride'			=> $fluoride,
		'manganese'			=> $manganese,
		'selenium'			=> $selenium,
		'vitaminc'			=> $vitaminc,
		'thiamin'			=> $thiamin,
		'riboflavin'		=> $riboflavin,
		'niacin'			=> $niacin,
		'pantothenicacid'	=> $pantothenicacid,
		'vitaminb6'			=> $vitaminb6,
		'folate'			=> $folate,
		'choline'			=> $choline,
		'vitaminb12'		=> $vitaminb12,
		'vitamina'			=> $vitamina,
		'vitamine'			=> $vitamine,
		'vitamind'			=> $vitamind,
		'vitamink'			=> $vitamink,
		'ala183und'			=> $ala183und,
		'la182und'			=> $la182und,
		'monofat'			=> $monofat,
		'polyfat'			=> $polyfat,
		'satfat'			=> $satfat,
		'transfat'			=> $transfat,
		'phenylalanine'		=> $phenylalanine,
		'valine'			=> $valine,
		'threonine'			=> $threonine,
		'tryptophan'		=> $tryptophan,
		'methionine'		=> $methionine,
		'leucine'			=> $leucine,
		'isoleucine'		=> $isoleucine,
		'lysine'			=> $lysine,
		'histidine'			=> $histidine
	);
	//array_push($record_arr['data'],$nutrient_record);
	$record_arr[] = $nutrient_record;
}
	
	echo json_encode($record_arr);
	
} else {
	//0 rows
	echo json_encode(
		array('message' => 'No nutrients found')
	);
}
mysqli_free_result($query);
mysqli_close($db);
?>