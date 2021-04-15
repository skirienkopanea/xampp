<!doctype html>
<html lang="en">
	<?php $page_title = 'Add Nutrient - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");}?>
	<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$record = [];
	$record['id'] = $_POST['id'] ?? '';
	$record['name'] = $_POST['name'] ?? '';
	$record['active'] = $_POST['active'] ?? '';
	validate($record);
	
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
	
	$sql = "INSERT IGNORE INTO nutritionfacts (
		user
		,id
		,name
		,active
		,description
		,category
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
		,timestamp
		) VALUES ('"
		. $_SESSION['user'] . "','"
		. esc($record['id']) . "','"
		. esc($record['name']) . "','"
		. $record['active'] . "','"
		. esc($description) . "','"
		. esc($category) . "',"
		. "CAST('" . $weight_unit_g . "' AS DECIMAL(10,2)),"
		. "CAST('". $kcals_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $protein_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $fat_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $carb_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $fiber_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $water_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $calcium_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $iron_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $magnesium_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $phosphorus_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $potassium_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $sodium_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $zinc_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $copper_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $fluoride_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $manganese_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $selenium_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $vitaminc_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $thiamin_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $riboflavin_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $niacin_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $pantothenicacid_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $vitaminb6_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $folate_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $choline_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $vitaminb12_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $vitamina_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $vitamine_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $vitamind_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $vitamink_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $ala183und_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $la182und_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $monofat_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $polyfat_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $satfat_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $transfat_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $phenylalanine_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $valine_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $threonine_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $tryptophan_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $methionine_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $leucine_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $isoleucine_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $lysine_amount . "' AS DECIMAL(8,3)),"
		. "CAST('". $histidine_amount . "' AS DECIMAL(8,3)),"
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