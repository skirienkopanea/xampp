<!doctype html>
<html lang="en">
	<?php $page_title = 'Add Nutrient - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");}?>
	<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$sql = "SELECT id,user FROM nutritionfacts WHERE user ='" . esc($_SESSION['user']) ."'";
	$query = mysqli_query($db,$sql);
	if (!$query) {
	exit("Database query failed: " . mysqli_error($db)); }
	$time_start = microtime(true);
	foreach($query as $record) {	
	ini_set('max_execution_time', '0');
	
	$description = '';
	$category = '';
	$weight_unit_g  = '';
	$kcals_amount = '';
	$protein_amount = '';
	$fat_amount = '';
	$carb_amount = '';
	$fiber_amount = '';
	$water_amount = '';
	$calcium_amount = '';
	$iron_amount = '';
	$magnesium_amount = '';
	$phosphorus_amount = '';
	$potassium_amount = '';
	$sodium_amount = '';
	$zinc_amount = '';
	$copper_amount = '';
	$fluoride_amount = '';
	$manganese_amount = '';
	$selenium_amount = '';
	$vitaminc_amount = '';
	$thiamin_amount = '';
	$riboflavin_amount = '';
	$niacin_amount = '';
	$pantothenicacid_amount = '';
	$vitaminb6_amount = '';
	$folate_amount = '';
	$choline_amount = '';
	$vitaminb12_amount = '';
	$vitamina_amount = '';
	$vitamine_amount = '';
	$vitamind_amount = '';
	$vitamink_amount = '';
	$ala183und_amount = '';
	$la182und_amount = '';
	$monofat_amount = '';
	$polyfat_amount = '';
	$satfat_amount = '';
	$transfat_amount = '';
	$phenylalanine_amount = '';
	$valine_amount = '';
	$threonine_amount = '';
	$tryptophan_amount = '';
	$methionine_amount = '';
	$leucine_amount = '';
	$isoleucine_amount = '';
	$lysine_amount = '';
	$histidine_amount = '';
	
	//web-scrap nutrients
$url = "https://api.nal.usda.gov/fdc/v1/" . $record['id'] . "?api_key=v73sWJouvAivvY4g6cbvp3PktGPdNRUJrNIMlRmm";
$json = file_get_contents($url);
$result = json_decode ($json);
$description = esc($result->description);
$category = $result->foodCategory;
$category =$category->description;

foreach($result->foodPortions as $portion) {
	if (substr(($portion->modifier),0,6) == "medium") {
	$weight_unit_g = $portion->gramWeight;
	}
}

foreach($result->foodNutrients as $nutrient) {
	foreach($nutrient->nutrient as $water => $value) {
		if ($value == 'Water'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_water = $value;
				//}
			//}
			$water_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $kcals => $value) {
		if ($value == 'kcal'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_kcal = $value;
				//}
			//}
			$kcals_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $protein => $value) {
		if ($value == 'Protein'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_protein = $value;
				//}
			//}
			$protein_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $fat => $value) {
		if ($value == 'Total lipid (fat)'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_fat = $value;
				//}
			//}
			$fat_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $carb => $value) {
		if ($value == 'Carbohydrate, by difference'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_carb = $value;
				//}
			//}
			$carb_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $fiber => $value) {
		if ($value == 'Fiber, total dietary'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_fiber = $value;
				//}
			//}
			$fiber_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $calcium => $value) {
		if ($value == 'Calcium, Ca'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_calcium = $value;
				//}
			//}
			$calcium_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $iron => $value) {
		if ($value == 'Iron, Fe'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_iron = $value;
				//}
			//}
			$iron_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $magnesium => $value) {
		if ($value == 'Magnesium, Mg'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_magnesium = $value;
				//}
			//}
			$magnesium_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $phosphorus => $value) {
		if ($value == 'Phosphorus, P'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_phosphorus = $value;
				//}
			//}
			$phosphorus_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $potassium  => $value) {
		if ($value == 'Potassium, K'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_potassium  = $value;
				//}
			//}
			$potassium_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $sodium => $value) {
		if ($value == 'Sodium, Na'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_sodium = $value;
				//}
			//}
			$sodium_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $zinc => $value) {
		if ($value == 'Zinc, Zn'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_zinc = $value;
				//}
			//}
			$zinc_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $copper => $value) {
		if ($value == 'Copper, Cu'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_copper = $value;
				//}
			//}
			$copper_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $fluoride => $value) {
		if ($value == 'Fluoride, F'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_fluoride = $value;
				//}
			//}
			$fluoride_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $manganese  => $value) {
		if ($value == 'Manganese, Mn'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_manganese  = $value;
				//}
			//}
			$manganese_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $selenium => $value) {
		if ($value == 'Selenium, Se'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_selenium = $value;
				//}
			//}
			$selenium_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $vitaminc => $value) {
		if ($value == 'Vitamin C, total ascorbic acid'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_vitaminc = $value;
				//}
			//}
			$vitaminc_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $thiamin => $value) {
		if ($value == 'Thiamin'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_thiamin = $value;
				//}
			//}
			$thiamin_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $riboflavin => $value) {
		if ($value == 'Riboflavin'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_riboflavin = $value;
				//}
			//}
			$riboflavin_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $niacin => $value) {
		if ($value == 'Niacin'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_niacin = $value;
				//}
			//}
			$niacin_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $pantothenicacid => $value) {
		if ($value == 'Pantothenic acid'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_pantothenicacid = $value;
				//}
			//}
			$pantothenicacid_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $vitaminb6 => $value) {
		if ($value == 'Vitamin B-6'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_vitaminb6 = $value;
				//}
			//}
			$vitaminb6_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $folate => $value) {
		if ($value == 'Folate, total'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_folate = $value;
				//}
			//}
			$folate_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $choline => $value) {
		if ($value == 'Choline, total'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_choline = $value;
				//}
			//}
			$choline_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $vitaminb12 => $value) {
		if ($value == 'Vitamin B-12'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_vitaminb12 = $value;
				//}
			//}
			$vitaminb12_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $vitamina => $value) {
		if ($value == 'Vitamin A, RAE'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_vitamina = $value;
				//}
			//}
			$vitamina_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $vitamine => $value) {
		if ($value == 'Vitamin E (alpha-tocopherol)'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_vitamine = $value;
				//}
			//}
			$vitamine_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $vitamind => $value) {
		if ($value == 'Vitamin D (D2 + D3)'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_vitamind = $value;
				//}
			//}
			$vitamind_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $vitamink => $value) {
		if ($value == 'Vitamin K (phylloquinone)'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_vitamink = $value;
				//}
			//}
			$vitamink_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $ala183und  => $value) {
		if ($value == '18:3'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_ala183und  = $value;
				//}
			//}
			$ala183und_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $la182und => $value) {
		if ($value == '18:2'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_la182und = $value;
				//}
			//}
			$la182und_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $monofat => $value) {
		if ($value == 'Fatty acids, total monounsaturated'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_monofat = $value;
				//}
			//}
			$monofat_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $polyfat => $value) {
		if ($value == 'Fatty acids, total polyunsaturated'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_polyfat = $value;
				//}
			//}
			$polyfat_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $satfat => $value) {
		if ($value == 'Fatty acids, total saturated'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_satfat = $value;
				//}
			//}
			$satfat_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $transfat => $value) {
		if ($value == 'Fatty acids, total trans'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_transfat = $value;
				//}
			//}
			$transfat_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $phenylalanine => $value) {
		if ($value == 'Phenylalanine'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_phenylalanine = $value;
				//}
			//}
			$phenylalanine_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $valine => $value) {
		if ($value == 'Valine'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_valine = $value;
				//}
			//}
			$valine_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $threonine => $value) {
		if ($value == 'Threonine'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_threonine = $value;
				//}
			//}
			$threonine_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $tryptophan => $value) {
		if ($value == 'Tryptophan'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_tryptophan = $value;
				//}
			//}
			$tryptophan_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $methionine => $value) {
		if ($value == 'Methionine'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_methionine = $value;
				//}
			//}
			$methionine_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $leucine => $value) {
		if ($value == 'Leucine'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_leucine = $value;
				//}
			//}
			$leucine_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $isoleucine => $value) {
		if ($value == 'Isoleucine'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_isoleucine = $value;
				//}
			//}
			$isoleucine_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $lysine => $value) {
		if ($value == 'Lysine'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_lysine = $value;
				//}
			//}
			$lysine_amount = $nutrient->amount;
		}
	}
	foreach($nutrient->nutrient as $histidine => $value) {
		if ($value == 'Histidine'){
			//foreach($nutrient->nutrient as $unit => $value) {
				//if ($unit == 'unitName'){
					//$unit_histidine = $value;
				//}
			//}
			$histidine_amount = $nutrient->amount;
		}
	}	
}
	//execute sql
	error_reporting(0);
	$sql = "UPDATE IGNORE nutritionfacts SET ";
	$sql .="name='" . $description . "',";
	$sql .="description='" . $description . "',";
	$sql .="category='" . $category . "',";
	$sql .="weight_unit_g=CAST('" . $weight_unit_g . "' AS DECIMAL(10,2)),";
	$sql .="kcals=CAST('" . $kcals_amount . "' AS DECIMAL(8,3)),";
	$sql .="protein=CAST('" . $protein_amount . "' AS DECIMAL(8,3)),";
	$sql .="fat=CAST('" . $fat_amount . "' AS DECIMAL(8,3)),";
	$sql .="carb=CAST('" . $carb_amount . "' AS DECIMAL(8,3)),";
	$sql .="fiber=CAST('" . $fiber_amount . "' AS DECIMAL(8,3)),";
	$sql .="water=CAST('" . $water_amount . "' AS DECIMAL(8,3)),";
	$sql .="calcium=CAST('" . $calcium_amount . "' AS DECIMAL(8,3)),";
	$sql .="iron=CAST('" . $iron_amount . "' AS DECIMAL(8,3)),";
	$sql .="magnesium=CAST('" . $magnesium_amount . "' AS DECIMAL(8,3)),";
	$sql .="phosphorus=CAST('" . $phosphorus_amount . "' AS DECIMAL(8,3)),";
	$sql .="potassium=CAST('" . $potassium_amount . "' AS DECIMAL(8,3)),";
	$sql .="sodium=CAST('" . $sodium_amount . "' AS DECIMAL(8,3)),";
	$sql .="zinc=CAST('" . $zinc_amount . "' AS DECIMAL(8,3)),";
	$sql .="copper=CAST('" . $copper_amount . "' AS DECIMAL(8,3)),";
	$sql .="fluoride=CAST('" . $fluoride_amount . "' AS DECIMAL(8,3)),";
	$sql .="manganese=CAST('" . $manganese_amount . "' AS DECIMAL(8,3)),";
	$sql .="selenium=CAST('" . $selenium_amount . "' AS DECIMAL(8,3)),";
	$sql .="vitaminc=CAST('" . $vitaminc_amount . "' AS DECIMAL(8,3)),";
	$sql .="thiamin=CAST('" . $thiamin_amount . "' AS DECIMAL(8,3)),";
	$sql .="riboflavin=CAST('" . $riboflavin_amount . "' AS DECIMAL(8,3)),";
	$sql .="niacin=CAST('" . $niacin_amount . "' AS DECIMAL(8,3)),";
	$sql .="pantothenicacid=CAST('" . $pantothenicacid_amount . "' AS DECIMAL(8,3)),";
	$sql .="vitaminb6=CAST('" . $vitaminb6_amount . "' AS DECIMAL(8,3)),";
	$sql .="folate=CAST('" . $folate_amount . "' AS DECIMAL(8,3)),";
	$sql .="choline=CAST('" . $choline_amount . "' AS DECIMAL(8,3)),";
	$sql .="vitaminb12=CAST('" . $vitaminb12_amount . "' AS DECIMAL(8,3)),";
	$sql .="vitamina=CAST('" . $vitamina_amount . "' AS DECIMAL(8,3)),";
	$sql .="vitamine=CAST('" . $vitamine_amount . "' AS DECIMAL(8,3)),";
	$sql .="vitamind=CAST('" . $vitamind_amount . "' AS DECIMAL(8,3)),";
	$sql .="vitamink=CAST('" . $vitamink_amount . "' AS DECIMAL(8,3)),";
	$sql .="ala183und=CAST('" . $ala183und_amount . "' AS DECIMAL(8,3)),";
	$sql .="la182und=CAST('" . $la182und_amount . "' AS DECIMAL(8,3)),";
	$sql .="monofat=CAST('" . $monofat_amount . "' AS DECIMAL(8,3)),";
	$sql .="polyfat=CAST('" . $polyfat_amount . "' AS DECIMAL(8,3)),";
	$sql .="satfat=CAST('" . $satfat_amount . "' AS DECIMAL(8,3)),";
	$sql .="transfat=CAST('" . $transfat_amount . "' AS DECIMAL(8,3)),";
	$sql .="phenylalanine=CAST('" . $phenylalanine_amount . "' AS DECIMAL(8,3)),";
	$sql .="valine=CAST('" . $valine_amount . "' AS DECIMAL(8,3)),";
	$sql .="threonine=CAST('" . $threonine_amount . "' AS DECIMAL(8,3)),";
	$sql .="tryptophan=CAST('" . $tryptophan_amount . "' AS DECIMAL(8,3)),";
	$sql .="methionine=CAST('" . $methionine_amount . "' AS DECIMAL(8,3)),";
	$sql .="leucine=CAST('" . $leucine_amount . "' AS DECIMAL(8,3)),";
	$sql .="isoleucine=CAST('" . $isoleucine_amount . "' AS DECIMAL(8,3)),";
	$sql .="lysine=CAST('" . $lysine_amount . "' AS DECIMAL(8,3)),";
	$sql .="histidine=CAST('" . $histidine_amount . "' AS DECIMAL(8,3)),";
	$sql .="timestamp = NOW() ";
	$sql .="WHERE id='" . esc($record['id']) . "' AND user ='" . $_SESSION['user'] . "' AND active = 1";
	
	$query = mysqli_query($db,$sql);
	if($query) {
		$time_end = microtime(true);
		$execution_time = ($time_end - $time_start)/60;
		$_SESSION['message'] = '<b>USDA update all Execution Time:</b> '.$execution_time.' Mins';
	} else {
		$_SESSION['message'] = '<b>Error on id: </b> ' . esc($record['id']);
		header("Location: " . "index.php");
	}

}
header("Location: " . "index.php");
}

?>
  <body>
  <h1>Do you want to overwrite all nutrient info with the latest available data?</h1>
	<h3><a class="action" href="index.php">Back to nutrients list</a></h3>
  <form action="update.php" method="post">
    <table class="list">
    </table>
	<input type="submit" value="Continue" />
	</form>
  </body>
<?php db_disconnect($db);?>
</html>