<?php
header('Content-type: application/json');
$db = mysqli_connect("localhost","coolwork_db",".t66yKQ1B8@Nce","coolwork_db");
if(mysqli_connect_errno()) {
  $msg = "Database connection failed: ";
  $msg .= mysqli_connect_error();
  $msg .= " (" . mysqli_connect_errno() . ")";
  exit($msg);
}
$empty = "[{\"user\":\"\",\"kcals_min\":\"0.000\",\"carb_min\":\"0.000\",\"fiber_min\":\"0.000\",\"protein_min\":\"0.000\",\"fat_min\":\"0.000\",\"ala183und_min\":\"0.000\",\"la182und_min\":\"0.000\",\"water_min\":\"0.000\",\"vitamina_min\":\"0.000\",\"vitaminc_min\":\"0.000\",\"vitamind_min\":\"0.000\",\"vitaminb6_min\":\"0.000\",\"vitamine_min\":\"0.000\",\"vitamink_min\":\"0.000\",\"thiamin_min\":\"0.000\",\"vitaminb12_min\":\"0.000\",\"riboflavin_min\":\"0.000\",\"folate_min\":\"0.000\",\"niacin_min\":\"0.000\",\"choline_min\":\"0.000\",\"pantothenicacid_min\":\"0.000\",\"calcium_min\":\"0.000\",\"copper_min\":\"0.000\",\"fluoride_min\":\"0.000\",\"iron_min\":\"0.000\",\"magnesium_min\":\"0.000\",\"manganese_min\":\"0.000\",\"phosphorus_min\":\"0.000\",\"potassium_min\":\"0.000\",\"selenium_min\":\"0.000\",\"sodium_min\":\"0.000\",\"zinc_min\":\"0.000\",\"phenylalanine_min\":\"0.000\",\"valine_min\":\"0.000\",\"threonine_min\":\"0.000\",\"tryptophan_min\":\"0.000\",\"methionine_min\":\"0.000\",\"leucine_min\":\"0.000\",\"isoleucine_min\":\"0.000\",\"lysine_min\":\"0.000\",\"histidine_min\":\"0.000\",\"kcals_max\":\"0.000\",\"carb_max\":\"0.000\",\"fiber_max\":\"0.000\",\"protein_max\":\"0.000\",\"fat_max\":\"0.000\",\"ala183und_max\":\"0.000\",\"la182und_max\":\"0.000\",\"water_max\":\"0.000\",\"vitamina_max\":\"0.000\",\"vitaminc_max\":\"0.000\",\"vitamind_max\":\"0.000\",\"vitaminb6_max\":\"0.000\",\"vitamine_max\":\"0.000\",\"vitamink_max\":\"0.000\",\"thiamin_max\":\"0.000\",\"vitaminb12_max\":\"0.000\",\"riboflavin_max\":\"0.000\",\"folate_max\":\"0.000\",\"niacin_max\":\"0.000\",\"choline_max\":\"0.000\",\"pantothenicacid_max\":\"0.000\",\"calcium_max\":\"0.000\",\"copper_max\":\"0.000\",\"fluoride_max\":\"0.000\",\"iron_max\":\"0.000\",\"magnesium_max\":\"0.000\",\"manganese_max\":\"0.000\",\"phosphorus_max\":\"0.000\",\"potassium_max\":\"0.000\",\"selenium_max\":\"0.000\",\"sodium_max\":\"0.000\",\"zinc_max\":\"0.000\",\"phenylalanine_max\":\"0.000\",\"valine_max\":\"0.000\",\"threonine_max\":\"0.000\",\"tryptophan_max\":\"0.000\",\"methionine_max\":\"0.000\",\"leucine_max\":\"0.000\",\"isoleucine_max\":\"0.000\",\"lysine_max\":\"0.000\",\"histidine_max\":\"0.000\"}]";
if (empty($_GET['user'])){exit($empty);} else { $user = $_GET['user'];}

$sql = "SELECT

	user,
	kcals_min,
	carb_min,
	fiber_min,
	protein_min,
	fat_min,
	ala183und_min,
	la182und_min,
	water_min,
	vitamina_min,
	vitaminc_min,
	vitamind_min,
	vitaminb6_min,
	vitamine_min,
	vitamink_min,
	thiamin_min,
	vitaminb12_min,
	riboflavin_min,
	folate_min,
	niacin_min,
	choline_min,
	pantothenicacid_min,
	calcium_min,
	copper_min,
	fluoride_min,
	iron_min,
	magnesium_min,
	manganese_min,
	phosphorus_min,
	potassium_min,
	selenium_min,
	sodium_min,
	zinc_min,
	phenylalanine_min,
	valine_min,
	threonine_min,
	tryptophan_min,
	methionine_min,
	leucine_min,
	isoleucine_min,
	lysine_min,
	histidine_min,
	kcals_max,
	carb_max,
	fiber_max,
	protein_max,
	fat_max,
	ala183und_max,
	la182und_max,
	water_max,
	vitamina_max,
	vitaminc_max,
	vitamind_max,
	vitaminb6_max,
	vitamine_max,
	vitamink_max,
	thiamin_max,
	vitaminb12_max,
	riboflavin_max,
	folate_max,
	niacin_max,
	choline_max,
	pantothenicacid_max,
	calcium_max,
	copper_max,
	fluoride_max,
	iron_max,
	magnesium_max,
	manganese_max,
	phosphorus_max,
	potassium_max,
	selenium_max,
	sodium_max,
	zinc_max,
	phenylalanine_max,
	valine_max,
	threonine_max,
	tryptophan_max,
	methionine_max,
	leucine_max,
	isoleucine_max,
	lysine_max,
	histidine_max
	
	FROM diet_constraints
	
	WHERE user='" . $user . "'";

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
	
	$constraints_record = array(
		'user' => $user,
'kcals_min'=> $kcals_min,
'carb_min'=> $carb_min,
'fiber_min'=> $fiber_min,
'protein_min'=> $protein_min,
'fat_min'=> $fat_min,
'ala183und_min'=> $ala183und_min,
'la182und_min'=> $la182und_min,
'water_min'=> $water_min,
'vitamina_min'=> $vitamina_min,
'vitaminc_min'=> $vitaminc_min,
'vitamind_min'=> $vitamind_min,
'vitaminb6_min'=> $vitaminb6_min,
'vitamine_min'=> $vitamine_min,
'vitamink_min'=> $vitamink_min,
'thiamin_min'=> $thiamin_min,
'vitaminb12_min'=> $vitaminb12_min,
'riboflavin_min'=> $riboflavin_min,
'folate_min'=> $folate_min,
'niacin_min'=> $niacin_min,
'choline_min'=> $choline_min,
'pantothenicacid_min'=> $pantothenicacid_min,
'calcium_min'=> $calcium_min,
'copper_min'=> $copper_min,
'fluoride_min'=> $fluoride_min,
'iron_min'=> $iron_min,
'magnesium_min'=> $magnesium_min,
'manganese_min'=> $manganese_min,
'phosphorus_min'=> $phosphorus_min,
'potassium_min'=> $potassium_min,
'selenium_min'=> $selenium_min,
'sodium_min'=> $sodium_min,
'zinc_min'=> $zinc_min,
'phenylalanine_min'=> $phenylalanine_min,
'valine_min'=> $valine_min,
'threonine_min'=> $threonine_min,
'tryptophan_min'=> $tryptophan_min,
'methionine_min'=> $methionine_min,
'leucine_min'=> $leucine_min,
'isoleucine_min'=> $isoleucine_min,
'lysine_min'=> $lysine_min,
'histidine_min'=> $histidine_min,
'kcals_max'=> $kcals_max,
'carb_max'=> $carb_max,
'fiber_max'=> $fiber_max,
'protein_max'=> $protein_max,
'fat_max'=> $fat_max,
'ala183und_max'=> $ala183und_max,
'la182und_max'=> $la182und_max,
'water_max'=> $water_max,
'vitamina_max'=> $vitamina_max,
'vitaminc_max'=> $vitaminc_max,
'vitamind_max'=> $vitamind_max,
'vitaminb6_max'=> $vitaminb6_max,
'vitamine_max'=> $vitamine_max,
'vitamink_max'=> $vitamink_max,
'thiamin_max'=> $thiamin_max,
'vitaminb12_max'=> $vitaminb12_max,
'riboflavin_max'=> $riboflavin_max,
'folate_max'=> $folate_max,
'niacin_max'=> $niacin_max,
'choline_max'=> $choline_max,
'pantothenicacid_max'=> $pantothenicacid_max,
'calcium_max'=> $calcium_max,
'copper_max'=> $copper_max,
'fluoride_max'=> $fluoride_max,
'iron_max'=> $iron_max,
'magnesium_max'=> $magnesium_max,
'manganese_max'=> $manganese_max,
'phosphorus_max'=> $phosphorus_max,
'potassium_max'=> $potassium_max,
'selenium_max'=> $selenium_max,
'sodium_max'=> $sodium_max,
'zinc_max'=> $zinc_max,
'phenylalanine_max'=> $phenylalanine_max,
'valine_max'=> $valine_max,
'threonine_max'=> $threonine_max,
'tryptophan_max'=> $tryptophan_max,
'methionine_max'=> $methionine_max,
'leucine_max'=> $leucine_max,
'isoleucine_max'=> $isoleucine_max,
'lysine_max'=> $lysine_max,
'histidine_max'=> $histidine_max,
	);
	//array_push($record_arr['data'],$constraints_record);
	$record_arr[] = $constraints_record;
}
	
	echo json_encode($record_arr);
	
} else {
	exit($empty);
}

mysqli_free_result($query);
mysqli_close($db);
?>