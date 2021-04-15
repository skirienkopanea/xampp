<!doctype html>
<html lang="en">
	<?php $page_title = 'Diet - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php include('../../private/simple_html_dom.php'); ?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");} ?>
	<?php if ($_SESSION['user'] != $_GET['user']){exit ("<h1>User restricted area</h1><h3>You are not logged in as " . $_GET['user'] . "</br><a href='javascript:history.back()'>Go back</a></h3>");} ?>

	<?php if(!isset($_GET['user'])){header("Location: " . "../../index.php");}?>
	<?php $user = $_GET['user'] ?? '';?>
	<?php
	$sql = "SELECT * FROM body WHERE user ='" . esc($user) . "'";
	$query = mysqli_query($db,$sql);
	if (!$query) {
	exit("Database query failed: " . mysqli_error($db));
}
if (!$user) {
	exit("<h1>Invalid username</h1><h3><a href='javascript:history.back()'>Go back and log in</a></h3>");
}
	?>
	<?php $record = mysqli_fetch_assoc($query)?>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$record = [];
	
	if ($_SESSION['GOAL'] == 'Bulk' || $_SESSION['GOAL'] == 'Mantain') {
		$record['kcals_max'] = number_format($_SESSION['kcals_bulk'],0,'.','');
	} else if ($_SESSION['GOAL'] == 'Cut') {
		$record['kcals_max'] = number_format($_SESSION['kcals'],0,'.','');
	}
	if ($_SESSION['GOAL'] == 'Cut' || $_SESSION['GOAL'] == 'Mantain') {
		$record['kcals_min'] =  number_format($_SESSION['kcals_cut'],0,'.','');
	} else if ($_SESSION['GOAL'] == 'Bulk') {
		$record['kcals_min'] =  number_format($_SESSION['kcals'],0,'.','');
	}
	
	$record['carb_min'] = $_SESSION['carb_min'] ?? 0;
	
	if ($_SESSION['ACTIVITY'] == 'Very Active') {
		$record['carb_max'] = round($_SESSION['carb_max_very_active'],0,PHP_ROUND_HALF_UP);
	} else {
		$record['carb_max'] = round($_SESSION['carb_max'],0,PHP_ROUND_HALF_UP);
	}
		
	$record['fiber_min'] = $_SESSION['fiber_min'] ?? 0;
	$record['fiber_max'] = $_SESSION['fiber_max'] ?? 0;
	
	if ($_SESSION['STRENGTH'] == 'Yes') {
			$record['protein_min'] = round($_SESSION['protein_min_strength'],0,PHP_ROUND_HALF_UP);
		} else if ($_SESSION['ACTIVITY'] == 'Very Active'){
			$record['protein_min'] = round($_SESSION['protein_min_very_active'],0,PHP_ROUND_HALF_UP);
		} else { $record['protein_min'] = round($_SESSION['protein_min'],0,PHP_ROUND_HALF_UP);
		}
	
	$record['protein_max'] = 0; //if ($_SESSION['STRENGTH'] == 'Yes') {$record['protein_max'] = round($_SESSION['protein_max_strength'],0,PHP_ROUND_HALF_UP);	} else {$record['protein_max'] = round($_SESSION['protein_max_very_active'],0,PHP_ROUND_HALF_UP);}
	
	$record['fat_min'] = $_SESSION['fat_min'] ?? 0;
	$record['fat_max'] = $_SESSION['fat_max'] ?? 0;
	
	$record['ala183und_min'] = $_SESSION['ala183und_min'] ?? 0;
	$record['ala183und_max'] = $_SESSION['ala183und_max'] ?? 0;
	$record['la182und_min'] = $_SESSION['la182und_min'] ?? 0;
	$record['la182und_max'] = $_SESSION['la182und_max'] ?? 0;
	$record['water_min'] = $_SESSION['water_min'] ?? 0;
	$record['water_max'] = $_SESSION['water_max'] ?? 0;
	
	$record['vitamina_min'] = $_SESSION['vitamina_min'] ?? 0;
	$record['vitamina_max'] = $_SESSION['vitamina_max'] ?? 0;
	$record['vitaminc_min'] = $_SESSION['vitaminc_min'] ?? 0;
	$record['vitaminc_max'] = $_SESSION['vitaminc_max'] ?? 0;
	$record['vitamind_min'] = $_SESSION['vitamind_min'] ?? 0;
	$record['vitamind_max'] = $_SESSION['vitamind_max'] ?? 0;
	$record['vitaminb6_min'] = $_SESSION['vitaminb6_min'] ?? 0;
	$record['vitaminb6_max'] = $_SESSION['vitaminb6_max'] ?? 0;
	$record['vitamine_min'] = $_SESSION['vitamine_min'] ?? 0;
	$record['vitamine_max'] = $_SESSION['vitamine_max'] ?? 0;
	$record['vitamink_min'] = $_SESSION['vitamink_min'] ?? 0;
	$record['vitamink_max'] = $_SESSION['vitamink_max'] ?? 0;
	$record['thiamin_min'] = $_SESSION['thiamin_min'] ?? 0;
	$record['thiamin_max'] = $_SESSION['thiamin_max'] ?? 0;
	$record['vitaminb12_min'] = $_SESSION['vitaminb12_min'] ?? 0;
	$record['vitaminb12_max'] = $_SESSION['vitaminb12_max'] ?? 0;
	$record['riboflavin_min'] = $_SESSION['riboflavin_min'] ?? 0;
	$record['riboflavin_max'] = $_SESSION['riboflavin_max'] ?? 0;
	$record['folate_min'] = $_SESSION['folate_min'] ?? 0;
	$record['folate_max'] = $_SESSION['folate_max'] ?? 0;
	$record['niacin_min'] = $_SESSION['niacin_min'] ?? 0;
	$record['niacin_max'] = $_SESSION['niacin_max'] ?? 0;
	$record['choline_min'] = $_SESSION['choline_min'] ?? 0;
	$record['choline_max'] = $_SESSION['choline_max'] ?? 0;
	$record['pantothenicacid_min'] = $_SESSION['pantothenicacid_min'] ?? 0;
	$record['pantothenicacid_max'] = $_SESSION['pantothenicacid_max'] ?? 0;
	$record['calcium_min'] = $_SESSION['calcium_min'] ?? 0;
	$record['calcium_max'] = $_SESSION['calcium_max'] ?? 0;
	$record['copper_min'] = $_SESSION['copper_min'] ?? 0;
	$record['copper_max'] = $_SESSION['copper_max'] ?? 0;
	$record['fluoride_min'] = $_SESSION['fluoride_min'] ?? 0;
	$record['fluoride_max'] = $_SESSION['fluoride_max'] ?? 0;
	$record['iron_min'] = $_SESSION['iron_min'] ?? 0;
	$record['iron_max'] = $_SESSION['iron_max'] ?? 0;
	$record['magnesium_min'] = $_SESSION['magnesium_min'] ?? 0;
	$record['magnesium_max'] = 0; //because it only amounts for intakes directly from suppliments
	$record['manganese_min'] = $_SESSION['manganese_min'] ?? 0;
	$record['manganese_max'] = $_SESSION['manganese_max'] ?? 0;
	$record['phosphorus_min'] = $_SESSION['phosphorus_min'] ?? 0;
	$record['phosphorus_max'] = $_SESSION['phosphorus_max'] ?? 0;
	$record['potassium_min'] = $_SESSION['potassium_min'] ?? 0;
	$record['potassium_max'] = $_SESSION['potassium_max'] ?? 0;
	$record['selenium_min'] = $_SESSION['selenium_min'] ?? 0;
	$record['selenium_max'] = $_SESSION['selenium_max'] ?? 0;
	$record['sodium_min'] = $_SESSION['sodium_min'] ?? 0;
	$record['sodium_max'] = $_SESSION['sodium_max'] ?? 0;
	$record['zinc_min'] = $_SESSION['zinc_min'] ?? 0;
	$record['zinc_max'] = $_SESSION['zinc_max'] ?? 0;
	$record['monofat_max'] = $_SESSION['monofat_max'] ?? 0;
	$record['polyfat_max'] = $_SESSION['polyfat_max'] ?? 0;
	$record['satfat_max'] = $_SESSION['satfat_max'] ?? 0;
	$record['transfat_max'] = $_SESSION['transfat_max'] ?? 0;
	$record['phenylalanine_min'] = $_SESSION['phenylalanine_min'] ?? 0;
	$record['valine_min'] = $_SESSION['valine_min'] ?? 0;
	$record['threonine_min'] = $_SESSION['threonine_min'] ?? 0;
	$record['tryptophan_min'] = $_SESSION['tryptophan_min'] ?? 0;
	$record['methionine_min'] = $_SESSION['methionine_min'] ?? 0;
	$record['leucine_min'] = $_SESSION['leucine_min'] ?? 0;
	$record['isoleucine_min'] = $_SESSION['isoleucine_min'] ?? 0;
	$record['lysine_min'] = $_SESSION['lysine_min'] ?? 0;
	$record['histidine_min'] = $_SESSION['histidine_min'] ?? 0;
	$record['phenylalanine_max'] = $_SESSION['phenylalanine_max'] ?? 0;
	$record['valine_max'] = $_SESSION['valine_max'] ?? 0;
	$record['threonine_max'] = $_SESSION['threonine_max'] ?? 0;
	$record['tryptophan_max'] = $_SESSION['tryptophan_max'] ?? 0;
	$record['methionine_max'] = $_SESSION['methionine_max'] ?? 0;
	$record['leucine_max'] = $_SESSION['leucine_max'] ?? 0;
	$record['isoleucine_max'] = $_SESSION['isoleucine_max'] ?? 0;
	$record['lysine_max'] = $_SESSION['lysine_max'] ?? 0;
	$record['histidine_max'] = $_SESSION['histidine_max'] ?? 0;



	
	//validate($record); //I havent valided this values yet
	
	$sql = "UPDATE diet_constraints SET ";
	$sql .="kcals_min='" . $record['kcals_min'] . "', ";
	$sql .="kcals_max='" . $record['kcals_max'] . "', ";	
	$sql .="carb_min='" . $record['carb_min'] . "', ";
	$sql .="carb_max='" . $record['carb_max'] . "', ";	
	$sql .="fiber_min='" . $record['fiber_min'] . "', ";
	$sql .="fiber_max='" . $record['fiber_max'] . "', ";	
	$sql .="protein_min='" . $record['protein_min'] . "', ";
	$sql .="protein_max='" . $record['protein_max'] . "', ";	
	$sql .="fat_min='" . $record['fat_min'] . "', ";
	$sql .="fat_max='" . $record['fat_max'] . "', ";	
	$sql .="ala183und_min='" . $record['ala183und_min'] . "', ";
	$sql .="la182und_min='" . $record['la182und_min'] . "', ";
	$sql .="ala183und_max='" . $record['ala183und_max'] . "', ";
	$sql .="la182und_max='" . $record['la182und_max'] . "', ";	
	$sql .="water_min='" . $record['water_min'] . "', ";
	$sql .="water_max='" . $record['water_max'] . "', ";	
	$sql .="vitamina_min='" . $record['vitamina_min'] . "', ";
	$sql .="vitamina_max='" . $record['vitamina_max'] . "', ";
	$sql .="vitaminc_min='" . $record['vitaminc_min'] . "', ";
	$sql .="vitaminc_max='" . $record['vitaminc_max'] . "', ";
	$sql .="vitamind_min='" . $record['vitamind_min'] . "', ";
	$sql .="vitamind_max='" . $record['vitamind_max'] . "', ";
	$sql .="vitaminb6_min='" . $record['vitaminb6_min'] . "', ";
	$sql .="vitaminb6_max='" . $record['vitaminb6_max'] . "', ";
	$sql .="vitamine_min='" . $record['vitamine_min'] . "', ";
	$sql .="vitamine_max='" . $record['vitamine_max'] . "', ";
	$sql .="vitamink_min='" . $record['vitamink_min'] . "', ";
	$sql .="vitamink_max='" . $record['vitamink_max'] . "', ";
	$sql .="thiamin_min='" . $record['thiamin_min'] . "', ";
	$sql .="thiamin_max='" . $record['thiamin_max'] . "', ";
	$sql .="vitaminb12_min='" . $record['vitaminb12_min'] . "', ";
	$sql .="vitaminb12_max='" . $record['vitaminb12_max'] . "', ";
	$sql .="riboflavin_min='" . $record['riboflavin_min'] . "', ";
	$sql .="riboflavin_max='" . $record['riboflavin_max'] . "', ";
	$sql .="folate_min='" . $record['folate_min'] . "', ";
	$sql .="folate_max='" . $record['folate_max'] . "', ";
	$sql .="niacin_min='" . $record['niacin_min'] . "', ";
	$sql .="niacin_max='" . $record['niacin_max'] . "', ";
	$sql .="choline_min='" . $record['choline_min'] . "', ";
	$sql .="choline_max='" . $record['choline_max'] . "', ";
	$sql .="pantothenicacid_min='" . $record['pantothenicacid_min'] . "', ";
	$sql .="pantothenicacid_max='" . $record['pantothenicacid_max'] . "', ";
	$sql .="calcium_min='" . $record['calcium_min'] . "', ";
	$sql .="calcium_max='" . $record['calcium_max'] . "', ";
	$sql .="copper_min='" . $record['copper_min'] . "', ";
	$sql .="copper_max='" . $record['copper_max'] . "', ";
	$sql .="fluoride_min='" . $record['fluoride_min'] . "', ";
	$sql .="fluoride_max='" . $record['fluoride_max'] . "', ";
	$sql .="iron_min='" . $record['iron_min'] . "', ";
	$sql .="iron_max='" . $record['iron_max'] . "', ";
	$sql .="magnesium_min='" . $record['magnesium_min'] . "', ";
	$sql .="magnesium_max='" . $record['magnesium_max'] . "', ";
	$sql .="manganese_min='" . $record['manganese_min'] . "', ";
	$sql .="manganese_max='" . $record['manganese_max'] . "', ";
	$sql .="phosphorus_min='" . $record['phosphorus_min'] . "', ";
	$sql .="phosphorus_max='" . $record['phosphorus_max'] . "', ";
	$sql .="potassium_min='" . $record['potassium_min'] . "', ";
	$sql .="potassium_max='" . $record['potassium_max'] . "', ";
	$sql .="selenium_min='" . $record['selenium_min'] . "', ";
	$sql .="selenium_max='" . $record['selenium_max'] . "', ";
	$sql .="sodium_min='" . $record['sodium_min'] . "', ";
	$sql .="sodium_max='" . $record['sodium_max'] . "', ";
	$sql .="zinc_min='" . $record['zinc_min'] . "', ";
	$sql .="zinc_max='" . $record['zinc_max'] . "', ";
	$sql .="monofat_max='" . $record['monofat_max'] . "', ";
	$sql .="polyfat_max='" . $record['polyfat_max'] . "', ";
	$sql .="satfat_max='" . $record['satfat_max'] . "', ";
	$sql .="transfat_max='" . $record['transfat_max'] . "', ";
	$sql .="phenylalanine_min='" . $record['phenylalanine_min'] . "', ";
	$sql .="valine_min='" . $record['valine_min'] . "', ";
	$sql .="threonine_min='" . $record['threonine_min'] . "', ";
	$sql .="tryptophan_min='" . $record['tryptophan_min'] . "', ";
	$sql .="methionine_min='" . $record['methionine_min'] . "', ";
	$sql .="leucine_min='" . $record['leucine_min'] . "', ";
	$sql .="isoleucine_min='" . $record['isoleucine_min'] . "', ";
	$sql .="lysine_min='" . $record['lysine_min'] . "', ";
	$sql .="histidine_min='" . $record['histidine_min'] . "', ";
	$sql .="phenylalanine_max='" . $record['phenylalanine_max'] . "', ";
	$sql .="valine_max='" . $record['valine_max'] . "', ";
	$sql .="threonine_max='" . $record['threonine_max'] . "', ";
	$sql .="tryptophan_max='" . $record['tryptophan_max'] . "', ";
	$sql .="methionine_max='" . $record['methionine_max'] . "', ";
	$sql .="leucine_max='" . $record['leucine_max'] . "', ";
	$sql .="isoleucine_max='" . $record['isoleucine_max'] . "', ";
	$sql .="lysine_max='" . $record['lysine_max'] . "', ";
	$sql .="histidine_max='" . $record['histidine_max'] . "' ";
	$sql .="WHERE user='" . $_GET['user'] . "'";

	$query = mysqli_query($db,$sql);
	
	unset($_SESSION['kcals_cut']);
	unset($_SESSION['kcals']);
	unset($_SESSION['kcals_bulk']);
	unset($_SESSION['carb_min']);
	unset($_SESSION['carb_max']);
	unset($_SESSION['carb_max_very_active']);
	unset($_SESSION['fiber_min']);
	unset($_SESSION['protein_min']);
	unset($_SESSION['protein_min_very_active']);
	unset($_SESSION['protein_max_very_active']);
	unset($_SESSION['protein_min_strength']);
	unset($_SESSION['protein_max_strength']);
	unset($_SESSION['fat_min']);
	unset($_SESSION['fat_max']);
	unset($_SESSION['ala183und_min']);
	unset($_SESSION['la182und_min']);
	unset($_SESSION['water_min']);
	unset($_SESSION['vitamina_min']);
	unset($_SESSION['vitamina_max']);
	unset($_SESSION['vitaminc_min']);
	unset($_SESSION['vitaminc_max']);
	unset($_SESSION['vitamind_min']);
	unset($_SESSION['vitamind_max']);
	unset($_SESSION['vitaminb6_min']);
	unset($_SESSION['vitaminb6_max']);
	unset($_SESSION['vitamine_min']);
	unset($_SESSION['vitamine_max']);
	unset($_SESSION['vitamink_min']);
	unset($_SESSION['vitamink_max']);
	unset($_SESSION['thiamin_min']);
	unset($_SESSION['thiamin_min']);
	unset($_SESSION['vitaminb12_min']);
	unset($_SESSION['vitaminb12_max']);
	unset($_SESSION['riboflavin_min']);
	unset($_SESSION['riboflavin_max']);
	unset($_SESSION['folate_min']);
	unset($_SESSION['folate_max']);
	unset($_SESSION['niacin_min']);
	unset($_SESSION['niacin_max']);
	unset($_SESSION['choline_min']);
	unset($_SESSION['choline_max']);
	unset($_SESSION['pantothenicacid_min']);
	unset($_SESSION['pantothenicacid_max']);
	unset($_SESSION['calcium_min']);
	unset($_SESSION['calcium_max']);
	unset($_SESSION['copper_min']);
	unset($_SESSION['copper_max']);
	unset($_SESSION['fluoride_min']);
	unset($_SESSION['fluoride_max']);
	unset($_SESSION['iron_min']);
	unset($_SESSION['iron_max']);
	unset($_SESSION['magnesium_min']);
	unset($_SESSION['magnesium_max']);
	unset($_SESSION['manganese_min']);
	unset($_SESSION['manganese_max']);
	unset($_SESSION['phosphorus_min']);
	unset($_SESSION['phosphorus_max']);
	unset($_SESSION['potassium_min']);
	unset($_SESSION['potassium_max']);
	unset($_SESSION['selenium_min']);
	unset($_SESSION['selenium_max']);
	unset($_SESSION['sodium_min']);
	unset($_SESSION['sodium_max']);
	unset($_SESSION['zinc_min']);
	unset($_SESSION['zinc_max']);
	unset($_SESSION['monofat_max']);
	unset($_SESSION['polyfat_max']);
	unset($_SESSION['satfat_max']);
	unset($_SESSION['transfat_max']);
	unset($_SESSION['phenylalanine_min']);
	unset($_SESSION['valine_min']);
	unset($_SESSION['threonine_min']);
	unset($_SESSION['tryptophan_min']);
	unset($_SESSION['methionine_min']);
	unset($_SESSION['leucine_min']);
	unset($_SESSION['isoleucine_min']);
	unset($_SESSION['lysine_min']);
	unset($_SESSION['histidine_min']);
	
	if($query) {	
		header("Location: " . ('index.php?user=' . url($_GET['user'])));
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}

} else {
}
?>
<body>
<h1>Save the scrapped data?</h1>
<h3><a class="action" href="<?php echo ('index.php?user=' . $_GET['user']); ?>">Back to diet plan</a></h3>
    <form action="<?php echo ('get_constraints.php?user=' . url($user)); ?>" method="post">
    <table class="list">
    </table>
	<input type="submit" value="Update Diet Constraints" />
	</form>
</body>
<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://fnic.nal.usda.gov/fnic/dri-calculator/results.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
	http_build_query(array(
		'MEAS_UNITS' => 'METRIC',
		'SEX' => $record['SEX'],
		'AGE' => $record['AGE'],
		'F_STATUS' => $record['F_STATUS'],
		'AGE_TYPE' => 'YRS',
		'height-centimeters' => $record['height-centimeters'],
		'WEIGHT' => $record['WEIGHT'],
		'ACTIVITY' => $record['ACTIVITY']
		))
	);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close ($ch);
?>

<?php
$html = new simple_html_dom();
$html->load($response);

$table1 = $html->find('table[class="results-table"]',0);
$array1 = [];
foreach($table1->find('td') as $element){
	$array1 [] = array('i' => count($array1), 'value' => $element->plaintext);
}

foreach ($array1 as $row) {
	if ($row['i'] == 0) {
		$SEX = strtoupper($row['value']);
	}
}

foreach ($array1 as $row) {
	if ($row['i'] == 1) {
		$AGE = (int) $row['value'];
	}
}

foreach ($array1 as $row) {
	if ($row['i'] == 2) {
		$height_centimeters = (int) $row['value'];
	}
}

foreach ($array1 as $row) {
	if ($row['i'] == 3) {
		$WEIGHT = (int) $row['value'];
	}
}

foreach ($array1 as $row) {
	if ($row['i'] == 4) {
		$ACTIVITY = $row['value'];
	}
}

foreach ($array1 as $row) {
	if ($row['i'] == 5) {
		$F_STATUS = $row['value'];
	} else {
		$F_STATUS = NULL;
	}
}


$table2 = $html->find('table[class="results-table"]',1);
$array2 = [];
foreach($table2->find('td') as $element){
	$array2 [] = array('i' => count($array2), 'value' => $element->plaintext);
}

foreach ($array2 as $row) {
	if ($row['i'] == 0) {
		$BMI = $row['value'];
	}
}

foreach ($array2 as $row) {
	if ($row['i'] == 1) {
		$kcals = (int) $row['value'];
	}
}

$kcals_cut = $kcals * 0.85;
$kcals_bulk = $kcals * 1.10;


$table3 = $html->find('table[class="results-table"]',2);
$array3 = [];
foreach($table3->find('td') as $element){
	$array3 [] = array('i' => count($array3), 'value' => $element->plaintext);
}

foreach ($array3 as $row) {
	if ($row['i'] == 1) { //need to do jumps of 2 (the left column must be skipped)
		$carb_min = (int) $row['value'];
		$carb_max = (int) substr($row['value'],(strpos($row['value'], "- ")+2));
	}
}

$carb_max_very_active = ($kcals * 0.7)/4;
//source usda for atheletes
foreach ($array3 as $row) {
	if ($row['i'] == 3) { 
		$fiber_min = (int) $row['value'];
	}
}

foreach ($array3 as $row) {
	if ($row['i'] == 5) { 
		$protein_min= (int) $row['value'];
	}
}

$protein_min_very_active = 1.2 * $record['WEIGHT'];
$protein_max_very_active = 1.4 * $record['WEIGHT'];
$protein_min_strength = 1.6 * $record['WEIGHT'];
$protein_max_strength = 1.8 * $record['WEIGHT'];//for people who lift weights
//source usda for atheletes

foreach ($array3 as $row) {
	if ($row['i'] == 7) {
		$fat_min = (int) $row['value'];
		$fat_max = (int) substr($row['value'],(strpos($row['value'], "- ")+2));
	}
}

foreach ($array3 as $row) {
	if ($row['i'] == 13) {//skipped the saturated and trans fatty acids ("as low as possible")
		$ala183und_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
	}
}

foreach ($array3 as $row) {
	if ($row['i'] == 15) {//skipped the saturated and trans fatty acids ("as low as possible")
		$la182und_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
	}
}

foreach ($array3 as $row) {
	if ($row['i'] == 19) {//skipped cholesterol fatty acids ("as low as possible")
		$water_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '') * 1000;
	}
}

$table4 = $html->find('table[class="results-table"]',3);
$array4 = [];
foreach($table4->find('td') as $element){
	$array4 [] = array('i' => count($array4), 'value' => $element->plaintext);
}

foreach ($array4 as $row) {
	if ($row['i'] == 1) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$vitamina_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$vitamina_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 2) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$vitamina_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$vitamina_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 4) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$vitaminc_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$vitaminc_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 5) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$vitaminc_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$vitaminc_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 7) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$vitamind_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$vitamind_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 8) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$vitamind_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$vitamind_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 10) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$vitaminb6_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$vitaminb6_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 11) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$vitaminb6_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$vitaminb6_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 13) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$vitamine_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$vitamine_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 14) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$vitamine_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$vitamine_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 16) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$vitamink_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$vitamink_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 17) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$vitamink_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 19) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$thiamin_min= number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$thiamin_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 20) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$thiamin_min= number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$thiamin_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 22) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$vitaminb12_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$vitaminb12_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 23) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$vitaminb12_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$vitaminb12_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 25) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$riboflavin_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$riboflavin_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 26) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$riboflavin_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$riboflavin_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}


foreach ($array4 as $row) {
	if ($row['i'] == 28) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$folate_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$folate_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 29) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$folate_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$folate_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 31) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$niacin_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$niacin_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 32) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$niacin_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$niacin_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 34) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$choline_min= number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$choline_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
		if (substr(($choline_min_unit),1,1) == "g") {
		$choline_min*= 1000; $choline_min_unit = "mg";
		}
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 35) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$choline_max= number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$choline_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
		if (substr(($choline_max_unit),1,1) == "g") {
		$choline_max*= 1000; $choline_max_unit = "mg";
		}
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 37) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$pantothenicacid_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$pantothenicacid_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array4 as $row) {
	if ($row['i'] == 38) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$pantothenicacid_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$pantothenicacid_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

$table5 = $html->find('table[class="results-table"]',4);
$array5 = [];
foreach($table5->find('td') as $element){
	$array5 [] = array('i' => count($array5), 'value' => $element->plaintext);
}

foreach ($array5 as $row) {
	if ($row['i'] == 2) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$calcium_min= number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$calcium_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 3) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$calcium_max= number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$calcium_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 11) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$copper_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$copper_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
		if (substr(($copper_min_unit),1,3) == "mcg") {
		$copper_min /= 1000; $copper_min_unit = "mg";
		}
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 12) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$copper_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$copper_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
		if (substr(($copper_max_unit),1,3) == "mcg") {
		$copper_max /= 1000; $copper_max_unit = "mg";
		}
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 14) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$fluoride_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$fluoride_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
		if (substr(($fluoride_min_unit),1,2) == "mg") {
		$fluoride_min *= 1000; $fluoride_min_unit = "mcg";
		}
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 15) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$fluoride_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$fluoride_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
		if (substr(($fluoride_max_unit),1,2) == "mg") {
		$fluoride_max *= 1000; $fluoride_max_unit = "mcg";
		}
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 20) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$iron_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$iron_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 21) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$iron_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$iron_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 23) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$magnesium_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$magnesium_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 24) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$magnesium_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$magnesium_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 26) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$manganese_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$manganese_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 27) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$manganese_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$manganese_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 32) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$phosphorus_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$phosphorus_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
		if (substr(($phosphorus_min_unit),1,1) == "g") {
		$phosphorus_min *= 1000; $phosphorus_min_unit = "mg";
		}
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 33) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$phosphorus_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$phosphorus_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
		if (substr(($phosphorus_max_unit),1,1) == "g") {
		$phosphorus_max *= 1000; $phosphorus_max_unit = "mg";
		}
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 35) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$potassium_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$potassium_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 36) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$potassium_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$potassium_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 38) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$selenium_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$selenium_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 39) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$selenium_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$selenium_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 41) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$sodium_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$sodium_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 42) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$sodium_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$sodium_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 44) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$zinc_min = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$zinc_min_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

foreach ($array5 as $row) {
	if ($row['i'] == 45) {
		if (substr(($row['value']),0,2) == "ND" || substr(($row['value']),0,2) == "NA") {break;}
		$zinc_max = number_format(substr(str_replace(',', '', $row['value']),0,(strpos(str_replace(',', '', $row['value']), " "))), 2,'.', '');
		$zinc_max_unit = substr($row['value'],strpos($row['value']," ",1),4);
	}
}

$histidine_min = $record['WEIGHT'] * 0.010;
$isoleucine_min= $record['WEIGHT'] * 0.020;
$leucine_min= $record['WEIGHT'] * 0.039;
$lysine_min = $record['WEIGHT'] * 0.030;
$methionine_min = $record['WEIGHT'] * 0.015;
$phenylalanine_min = $record['WEIGHT'] * 0.025;
$valine_min = $record['WEIGHT'] * 0.026;
$threonine_min = $record['WEIGHT'] * 0.015;
$tryptophan_min = $record['WEIGHT'] * 0.004;
//source: https://en.wikipedia.org/wiki/Essential_amino_acid

?>

SEX: <?php if(isset($SEX)){echo $SEX; }?></br>
AGE: <?php if(isset($AGE)){echo $AGE; }?></br>
height_centimeters: <?php if(isset($height_centimeters)){echo $height_centimeters; }?></br>
WEIGHT: <?php if(isset($WEIGHT)){echo $WEIGHT; }?></br>
ACTIVITY: <?php if(isset($ACTIVITY)){echo $ACTIVITY; $_SESSION['ACTIVITY'] = $ACTIVITY;}?></br>
BMI: <?php if(isset($BMI)){echo $BMI; }?></br>
<?php if(isset($SEX)){
	if($SEX == "FEMALE"){
	echo "Pregnancy/Lactation status: " . $F_STATUS . "</br>";
}
}?>
GOAL: <?php if(isset($record['GOAL'])){echo $record['GOAL']; $_SESSION['GOAL'] = $record['GOAL'];}?></br>
STRENGTH: <?php if(isset($record['STRENGTH'])){echo $record['STRENGTH']; $_SESSION['STRENGTH'] = $record['STRENGTH'];}?></br>

kcals_cut: <?php if(isset($kcals_cut)){echo $kcals_cut; $_SESSION['kcals_cut'] = $kcals_cut;}?></br>
kcals: <?php if(isset($kcals)){echo $kcals; $_SESSION['kcals'] = $kcals;}?></br>
kcals_bulk: <?php if(isset($kcals_bulk)){echo $kcals_bulk; $_SESSION['kcals_bulk'] = $kcals_bulk;}?></br>
carb_min: <?php if(isset($carb_min)){echo $carb_min; $_SESSION['carb_min'] = $carb_min;}?></br>
carb_max: <?php if(isset($carb_max)){echo $carb_max; $_SESSION['carb_max'] = $carb_max;}?></br>
carb_max_very_active: <?php if(isset($carb_max_very_active)){echo $carb_max_very_active; $_SESSION['carb_max_very_active'] = $carb_max_very_active;}?></br>
fiber_min: <?php if(isset($fiber_min)){echo $fiber_min; $_SESSION['fiber_min'] = $fiber_min;}?></br>
rotein_min: <?php if(isset($protein_min)){echo $protein_min; $_SESSION['protein_min'] = $protein_min;}?></br>
protein_min_very_active: <?php if(isset($protein_min_very_active)){echo $protein_min_very_active; $_SESSION['protein_min_very_active'] = $protein_min_very_active;}?></br>
protein_max_very_active: <?php if(isset($protein_max_very_active)){echo $protein_max_very_active; $_SESSION['protein_max_very_active'] = $protein_max_very_active;}?></br>
protein_min_strength: <?php if(isset($protein_min_strength)){echo $protein_min_strength; $_SESSION['protein_min_strength'] = $protein_min_strength;}?></br>
protein_max_strength: <?php if(isset($protein_max_strength)){echo $protein_max_strength; $_SESSION['protein_max_strength'] = $protein_max_strength;}?></br>
fat_min: <?php if(isset($fat_min)){echo $fat_min; $_SESSION['fat_min'] = $fat_min;}?></br>
fat_max: <?php if(isset($fat_max)){echo $fat_max; $_SESSION['fat_max'] = $fat_max;}?></br>
ala183und_min: <?php if(isset($ala183und_min)){echo $ala183und_min; $_SESSION['ala183und_min'] = $ala183und_min;}?></br>
la182und_min: <?php if(isset($la182und_min)){echo $la182und_min; $_SESSION['la182und_min'] = $la182und_min;}?></br>
water_min: <?php if(isset($water_min)){echo $water_min; $_SESSION['water_min'] = $water_min;}?></br>
vitamina_min: <?php if(isset($vitamina_min)){echo $vitamina_min; $_SESSION['vitamina_min'] = $vitamina_min;}?></br>
vitamina_max: <?php if(isset($vitamina_max)){echo $vitamina_max; $_SESSION['vitamina_max'] = $vitamina_max;}?></br>
vitaminc_min: <?php if(isset($vitaminc_min)){echo $vitaminc_min; $_SESSION['vitaminc_min'] = $vitaminc_min;}?></br>
vitaminc_max: <?php if(isset($vitaminc_max)){echo $vitaminc_max; $_SESSION['vitaminc_max'] = $vitaminc_max;}?></br>
vitamind_min: <?php if(isset($vitamind_min)){echo $vitamind_min; $_SESSION['vitamind_min'] = $vitamind_min;}?></br>
vitamind_max: <?php if(isset($vitamind_max)){echo $vitamind_max; $_SESSION['vitamind_max'] = $vitamind_max;}?></br>
vitaminb6_min: <?php if(isset($vitaminb6_min)){echo $vitaminb6_min; $_SESSION['vitaminb6_min'] = $vitaminb6_min;}?></br>
vitaminb6_max: <?php if(isset($vitaminb6_max)){echo $vitaminb6_max; $_SESSION['vitaminb6_max'] = $vitaminb6_max;}?></br>
vitamine_min: <?php if(isset($vitamine_min)){echo $vitamine_min; $_SESSION['vitamine_min'] = $vitamine_min;}?></br>
vitamine_max: <?php if(isset($vitamine_max)){echo $vitamine_max; $_SESSION['vitamine_max'] = $vitamine_max;}?></br>
vitamink_min: <?php if(isset($vitamink_min)){echo $vitamink_min; $_SESSION['vitamink_min'] = $vitamink_min;}?></br>
vitamink_max: <?php if(isset($vitamink_max)){echo $vitamink_max; $_SESSION['vitamink_max'] = $vitamink_max;}?></br>
thiamin_min: <?php if(isset($thiamin_min)){echo $thiamin_min; $_SESSION['thiamin_min'] = $thiamin_min;}?></br>
thiamin_max: <?php if(isset($thiamin_max)){echo $thiamin_max; $_SESSION['thiamin_max'] = $thiamin_max;}?></br>
vitaminb12_min: <?php if(isset($vitaminb12_min)){echo $vitaminb12_min; $_SESSION['vitaminb12_min'] = $vitaminb12_min;}?></br>
vitaminb12_max: <?php if(isset($vitaminb12_max)){echo $vitaminb12_max; $_SESSION['vitaminb12_max'] = $vitaminb12_max;}?></br>
riboflavin_min: <?php if(isset($riboflavin_min)){echo $riboflavin_min; $_SESSION['riboflavin_min'] = $riboflavin_min;}?></br>
riboflavin_max: <?php if(isset($riboflavin_max)){echo $riboflavin_max; $_SESSION['riboflavin_max'] = $riboflavin_max;}?></br>
folate_min: <?php if(isset($folate_min)){echo $folate_min; $_SESSION['folate_min'] = $folate_min;}?></br>
folate_max: <?php if(isset($folate_max)){echo $folate_max; $_SESSION['folate_max'] = $folate_max;}?></br>
niacin_min: <?php if(isset($niacin_min)){echo $niacin_min; $_SESSION['niacin_min'] = $niacin_min;}?></br>
niacin_max: <?php if(isset($niacin_max)){echo $niacin_max; $_SESSION['niacin_max'] = $niacin_max;}?></br>
choline_min: <?php if(isset($choline_min)){echo $choline_min; $_SESSION['choline_min'] = $choline_min;}?></br>
choline_max: <?php if(isset($choline_max)){echo $choline_max; $_SESSION['choline_max'] = $choline_max;}?></br>
pantothenicacid_min: <?php if(isset($pantothenicacid_min)){echo $pantothenicacid_min; $_SESSION['pantothenicacid_min'] = $pantothenicacid_min;}?></br>
pantothenicacid_max: <?php if(isset($pantothenicacid_max)){echo $pantothenicacid_max; $_SESSION['pantothenicacid_max'] = $pantothenicacid_max;}?></br>
calcium_min: <?php if(isset($calcium_min)){echo $calcium_min; $_SESSION['calcium_min'] = $calcium_min;}?></br>
calcium_max: <?php if(isset($calcium_max)){echo $calcium_max; $_SESSION['calcium_max'] = $calcium_max;}?></br>
copper_min: <?php if(isset($copper_min)){echo $copper_min; $_SESSION['copper_min'] = $copper_min;}?></br>
copper_max: <?php if(isset($copper_max)){echo $copper_max; $_SESSION['copper_max'] = $copper_max;}?></br>
fluoride_min: <?php if(isset($fluoride_min)){echo $fluoride_min; $_SESSION['fluoride_min'] = $fluoride_min;}?></br>
fluoride_max: <?php if(isset($fluoride_max)){echo $fluoride_max; $_SESSION['fluoride_max'] = $fluoride_max;}?></br>
iron_min: <?php if(isset($iron_min)){echo $iron_min; $_SESSION['iron_min'] = $iron_min;}?></br>
iron_max: <?php if(isset($iron_max)){echo $iron_max; $_SESSION['iron_max'] = $iron_max;}?></br>
magnesium_min: <?php if(isset($magnesium_min)){echo $magnesium_min; $_SESSION['magnesium_min'] = $magnesium_min;}?></br>
magnesium_max: <?php if(isset($magnesium_max)){echo $magnesium_max; $_SESSION['magnesium_max'] = $magnesium_max;}?></br>
manganese_min: <?php if(isset($manganese_min)){echo $manganese_min; $_SESSION['manganese_min'] = $manganese_min;}?></br>
manganese_max: <?php if(isset($manganese_max)){echo $manganese_max; $_SESSION['manganese_max'] = $manganese_max;}?></br>
phosphorus_min: <?php if(isset($phosphorus_min)){echo $phosphorus_min; $_SESSION['phosphorus_min'] = $phosphorus_min;}?></br>
phosphorus_max: <?php if(isset($phosphorus_max)){echo $phosphorus_max; $_SESSION['phosphorus_max'] = $phosphorus_max;}?></br>
potassium_min: <?php if(isset($potassium_min)){echo $potassium_min; $_SESSION['potassium_min'] = $potassium_min;}?></br>
potassium_max: <?php if(isset($potassium_max)){echo $potassium_max; $_SESSION['potassium_max'] = $potassium_max;}?></br>
selenium_min: <?php if(isset($selenium_min)){echo $selenium_min; $_SESSION['selenium_min'] = $selenium_min;}?></br>
selenium_max: <?php if(isset($selenium_max)){echo $selenium_max; $_SESSION['selenium_max'] = $selenium_max;}?></br>
sodium_min: <?php if(isset($sodium_min)){echo $sodium_min; $_SESSION['sodium_min'] = $sodium_min;}?></br>
sodium_max: <?php if(isset($sodium_max)){echo $sodium_max; $_SESSION['sodium_max'] = $sodium_max;}?></br>
zinc_min: <?php if(isset($zinc_min)){echo $zinc_min; $_SESSION['zinc_min'] = $zinc_min;}?></br>
zinc_max: <?php if(isset($zinc_max)){echo $zinc_max; $_SESSION['zinc_max'] = $zinc_max;}?></br>
monofat_max: <?php if(isset($monofat_max)){echo $monofat_max; $_SESSION['monofat_max'] = $monofat_max;}?></br>
polyfat_max: <?php if(isset($polyfat_max)){echo $polyfat_max; $_SESSION['polyfat_max'] = $polyfat_max;}?></br>
satfat_max: <?php if(isset($satfat_max)){echo $satfat_max; $_SESSION['satfat_max'] = $satfat_max;}?></br>
transfat_max: <?php if(isset($transfat_max)){echo $transfat_max; $_SESSION['transfat_max'] = $transfat_max;}?></br>
phenylalanine_min: <?php if(isset($phenylalanine_min)){echo $phenylalanine_min; $_SESSION['phenylalanine_min'] = $phenylalanine_min;}?></br>
valine_min: <?php if(isset($valine_min)){echo $valine_min; $_SESSION['valine_min'] = $valine_min;}?></br>
threonine_min: <?php if(isset($threonine_min)){echo $threonine_min; $_SESSION['threonine_min'] = $threonine_min;}?></br>
tryptophan_min: <?php if(isset($tryptophan_min)){echo $tryptophan_min; $_SESSION['tryptophan_min'] = $tryptophan_min;}?></br>
methionine_min: <?php if(isset($methionine_min)){echo $methionine_min; $_SESSION['methionine_min'] = $methionine_min;}?></br>
leucine_min: <?php if(isset($leucine_min)){echo $leucine_min; $_SESSION['leucine_min'] = $leucine_min;}?></br>
isoleucine_min: <?php if(isset($isoleucine_min)){echo $isoleucine_min; $_SESSION['isoleucine_min'] = $isoleucine_min;}?></br>
lysine_min: <?php if(isset($lysine_min)){echo $lysine_min; $_SESSION['lysine_min'] = $lysine_min;}?></br>
histidine_min: <?php if(isset($histidine_min)){echo $histidine_min; $_SESSION['histidine_min'] = $histidine_min;}?></br>


<?php
//validate usa and my database output
if($record['SEX'] != $SEX) {
	echo "Local is " . $record['SEX'] . " but external will be used: " . $SEX;
}
if($record['AGE'] != $AGE) {
	echo "Local is " . $record['AGE'] . " but external will be used: " . $AGE;
}
if($record['height-centimeters'] != $height_centimeters) {
	echo "Local is " . $record['height-centimeters'] . " but external will be used: " . $height_centimeters;
}
if($record['WEIGHT'] != $WEIGHT) {
	echo "Local is " . $record['WEIGHT'] . " but external will be used: " . $WEIGHT;
}
if($record['ACTIVITY'] != $ACTIVITY) {
	echo "Local is " . $record['ACTIVITY'] . " but external will be used: " . $ACTIVITY;
}
?>
</html>
