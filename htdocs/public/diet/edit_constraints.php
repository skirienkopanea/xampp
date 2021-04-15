<!doctype html>
<html lang="en">
	<?php $page_title ='Diet Constraints - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");} ?>
	<?php if ($_SESSION['user'] != $_GET['user']){exit ("<h1>User restricted area</h1><h3>You are not logged in as" . $_GET['user'] ."</br><a href='javascript:history.back()'>Go back</a></h3>");} ?>
<?php
//By default create a diet plan whith 16 empty products, with date 0, then create one with all lifts -1, date current
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$record = [];
	$record['kcals_min'] = $_POST['kcals_min'] ?? 0;
	$record['carb_min'] = $_POST['carb_min'] ?? 0;
	$record['fiber_min'] = $_POST['fiber_min'] ?? 0;
	$record['protein_min'] = $_POST['protein_min'] ?? 0;
	$record['fat_min'] = $_POST['fat_min'] ?? 0;
	$record['ala183und_min'] = $_POST['ala183und_min'] ?? 0;
	$record['la182und_min'] = $_POST['la182und_min'] ?? 0;
	$record['water_min'] = $_POST['water_min'] ?? 0;
	$record['vitamina_min'] = $_POST['vitamina_min'] ?? 0;
	$record['vitaminc_min'] = $_POST['vitaminc_min'] ?? 0;
	$record['vitamind_min'] = $_POST['vitamind_min'] ?? 0;
	$record['vitaminb6_min'] = $_POST['vitaminb6_min'] ?? 0;
	$record['vitamine_min'] = $_POST['vitamine_min'] ?? 0;
	$record['vitamink_min'] = $_POST['vitamink_min'] ?? 0;
	$record['thiamin_min'] = $_POST['thiamin_min'] ?? 0;
	$record['vitaminb12_min'] = $_POST['vitaminb12_min'] ?? 0;
	$record['riboflavin_min'] = $_POST['riboflavin_min'] ?? 0;
	$record['folate_min'] = $_POST['folate_min'] ?? 0;
	$record['niacin_min'] = $_POST['niacin_min'] ?? 0;
	$record['choline_min'] = $_POST['choline_min'] ?? 0;
	$record['pantothenicacid_min'] = $_POST['pantothenicacid_min'] ?? 0;
	$record['calcium_min'] = $_POST['calcium_min'] ?? 0;
	$record['copper_min'] = $_POST['copper_min'] ?? 0;
	$record['fluoride_min'] = $_POST['fluoride_min'] ?? 0;
	$record['iron_min'] = $_POST['iron_min'] ?? 0;
	$record['magnesium_min'] = $_POST['magnesium_min'] ?? 0;
	$record['manganese_min'] = $_POST['manganese_min'] ?? 0;
	$record['phosphorus_min'] = $_POST['phosphorus_min'] ?? 0;
	$record['potassium_min'] = $_POST['potassium_min'] ?? 0;
	$record['selenium_min'] = $_POST['selenium_min'] ?? 0;
	$record['sodium_min'] = $_POST['sodium_min'] ?? 0;
	$record['zinc_min'] = $_POST['zinc_min'] ?? 0;
	$record['phenylalanine_min'] = $_POST['phenylalanine_min'] ?? 0;
	$record['valine_min'] = $_POST['valine_min'] ?? 0;
	$record['threonine_min'] = $_POST['threonine_min'] ?? 0;
	$record['tryptophan_min'] = $_POST['tryptophan_min'] ?? 0;
	$record['methionine_min'] = $_POST['methionine_min'] ?? 0;
	$record['leucine_min'] = $_POST['leucine_min'] ?? 0;
	$record['isoleucine_min'] = $_POST['isoleucine_min'] ?? 0;
	$record['lysine_min'] = $_POST['lysine_min'] ?? 0;
	$record['histidine_min'] = $_POST['histidine_min'] ?? 0;
	$record['kcals_max'] = $_POST['kcals_max'] ?? 0;
	$record['carb_max'] = $_POST['carb_max'] ?? 0;
	$record['fiber_max'] = $_POST['fiber_max'] ?? 0;
	$record['protein_max'] = $_POST['protein_max'] ?? 0;
	$record['fat_max'] = $_POST['fat_max'] ?? 0;
	$record['ala183und_max'] = $_POST['ala183und_max'] ?? 0;
	$record['la182und_max'] = $_POST['la182und_max'] ?? 0;
	$record['water_max'] = $_POST['water_max'] ?? 0;
	$record['vitamina_max'] = $_POST['vitamina_max'] ?? 0;
	$record['vitaminc_max'] = $_POST['vitaminc_max'] ?? 0;
	$record['vitamind_max'] = $_POST['vitamind_max'] ?? 0;
	$record['vitaminb6_max'] = $_POST['vitaminb6_max'] ?? 0;
	$record['vitamine_max'] = $_POST['vitamine_max'] ?? 0;
	$record['vitamink_max'] = $_POST['vitamink_max'] ?? 0;
	$record['thiamin_max'] = $_POST['thiamin_max'] ?? 0;
	$record['vitaminb12_max'] = $_POST['vitaminb12_max'] ?? 0;
	$record['riboflavin_max'] = $_POST['riboflavin_max'] ?? 0;
	$record['folate_max'] = $_POST['folate_max'] ?? 0;
	$record['niacin_max'] = $_POST['niacin_max'] ?? 0;
	$record['choline_max'] = $_POST['choline_max'] ?? 0;
	$record['pantothenicacid_max'] = $_POST['pantothenicacid_max'] ?? 0;
	$record['calcium_max'] = $_POST['calcium_max'] ?? 0;
	$record['copper_max'] = $_POST['copper_max'] ?? 0;
	$record['fluoride_max'] = $_POST['fluoride_max'] ?? 0;
	$record['iron_max'] = $_POST['iron_max'] ?? 0;
	$record['magnesium_max'] = $_POST['magnesium_max'] ?? 0;
	$record['manganese_max'] = $_POST['manganese_max'] ?? 0;
	$record['phosphorus_max'] = $_POST['phosphorus_max'] ?? 0;
	$record['potassium_max'] = $_POST['potassium_max'] ?? 0;
	$record['selenium_max'] = $_POST['selenium_max'] ?? 0;
	$record['sodium_max'] = $_POST['sodium_max'] ?? 0;
	$record['zinc_max'] = $_POST['zinc_max'] ?? 0;
	$record['phenylalanine_max'] = $_POST['phenylalanine_max'] ?? 0;
	$record['valine_max'] = $_POST['valine_max'] ?? 0;
	$record['threonine_max'] = $_POST['threonine_max'] ?? 0;
	$record['tryptophan_max'] = $_POST['tryptophan_max'] ?? 0;
	$record['methionine_max'] = $_POST['methionine_max'] ?? 0;
	$record['leucine_max'] = $_POST['leucine_max'] ?? 0;
	$record['isoleucine_max'] = $_POST['isoleucine_max'] ?? 0;
	$record['lysine_max'] = $_POST['lysine_max'] ?? 0;
	$record['histidine_max'] = $_POST['histidine_max'] ?? 0;
	
	//validate($record); //I havent valided this values yet
	
	$sql = "UPDATE diet_constraints SET ";
	$sql .="kcals_min='" . $record['kcals_min'] . "', ";
	$sql .="carb_min='" . $record['carb_min'] . "', ";
	$sql .="fiber_min='" . $record['fiber_min'] . "', ";
	$sql .="protein_min='" . $record['protein_min'] . "', ";
	$sql .="fat_min='" . $record['fat_min'] . "', ";
	$sql .="ala183und_min='" . $record['ala183und_min'] . "', ";
	$sql .="la182und_min='" . $record['la182und_min'] . "', ";
	$sql .="water_min='" . $record['water_min'] . "', ";
	$sql .="vitamina_min='" . $record['vitamina_min'] . "', ";
	$sql .="vitaminc_min='" . $record['vitaminc_min'] . "', ";
	$sql .="vitamind_min='" . $record['vitamind_min'] . "', ";
	$sql .="vitaminb6_min='" . $record['vitaminb6_min'] . "', ";
	$sql .="vitamine_min='" . $record['vitamine_min'] . "', ";
	$sql .="vitamink_min='" . $record['vitamink_min'] . "', ";
	$sql .="thiamin_min='" . $record['thiamin_min'] . "', ";
	$sql .="vitaminb12_min='" . $record['vitaminb12_min'] . "', ";
	$sql .="riboflavin_min='" . $record['riboflavin_min'] . "', ";
	$sql .="folate_min='" . $record['folate_min'] . "', ";
	$sql .="niacin_min='" . $record['niacin_min'] . "', ";
	$sql .="choline_min='" . $record['choline_min'] . "', ";
	$sql .="pantothenicacid_min='" . $record['pantothenicacid_min'] . "', ";
	$sql .="calcium_min='" . $record['calcium_min'] . "', ";
	$sql .="copper_min='" . $record['copper_min'] . "', ";
	$sql .="fluoride_min='" . $record['fluoride_min'] . "', ";
	$sql .="iron_min='" . $record['iron_min'] . "', ";
	$sql .="magnesium_min='" . $record['magnesium_min'] . "', ";
	$sql .="manganese_min='" . $record['manganese_min'] . "', ";
	$sql .="phosphorus_min='" . $record['phosphorus_min'] . "', ";
	$sql .="potassium_min='" . $record['potassium_min'] . "', ";
	$sql .="selenium_min='" . $record['selenium_min'] . "', ";
	$sql .="sodium_min='" . $record['sodium_min'] . "', ";
	$sql .="zinc_min='" . $record['zinc_min'] . "', ";
	$sql .="phenylalanine_min='" . $record['phenylalanine_min'] . "', ";
	$sql .="valine_min='" . $record['valine_min'] . "', ";
	$sql .="threonine_min='" . $record['threonine_min'] . "', ";
	$sql .="tryptophan_min='" . $record['tryptophan_min'] . "', ";
	$sql .="methionine_min='" . $record['methionine_min'] . "', ";
	$sql .="leucine_min='" . $record['leucine_min'] . "', ";
	$sql .="isoleucine_min='" . $record['isoleucine_min'] . "', ";
	$sql .="lysine_min='" . $record['lysine_min'] . "', ";
	$sql .="histidine_min='" . $record['histidine_min'] . "', ";
	$sql .="kcals_max='" . $record['kcals_max'] . "', ";
	$sql .="carb_max='" . $record['carb_max'] . "', ";
	$sql .="fiber_max='" . $record['fiber_max'] . "', ";
	$sql .="protein_max='" . $record['protein_max'] . "', ";
	$sql .="fat_max='" . $record['fat_max'] . "', ";
	$sql .="ala183und_max='" . $record['ala183und_max'] . "', ";
	$sql .="la182und_max='" . $record['la182und_max'] . "', ";
	$sql .="water_max='" . $record['water_max'] . "', ";
	$sql .="vitamina_max='" . $record['vitamina_max'] . "', ";
	$sql .="vitaminc_max='" . $record['vitaminc_max'] . "', ";
	$sql .="vitamind_max='" . $record['vitamind_max'] . "', ";
	$sql .="vitaminb6_max='" . $record['vitaminb6_max'] . "', ";
	$sql .="vitamine_max='" . $record['vitamine_max'] . "', ";
	$sql .="vitamink_max='" . $record['vitamink_max'] . "', ";
	$sql .="thiamin_max='" . $record['thiamin_max'] . "', ";
	$sql .="vitaminb12_max='" . $record['vitaminb12_max'] . "', ";
	$sql .="riboflavin_max='" . $record['riboflavin_max'] . "', ";
	$sql .="folate_max='" . $record['folate_max'] . "', ";
	$sql .="niacin_max='" . $record['niacin_max'] . "', ";
	$sql .="choline_max='" . $record['choline_max'] . "', ";
	$sql .="pantothenicacid_max='" . $record['pantothenicacid_max'] . "', ";
	$sql .="calcium_max='" . $record['calcium_max'] . "', ";
	$sql .="copper_max='" . $record['copper_max'] . "', ";
	$sql .="fluoride_max='" . $record['fluoride_max'] . "', ";
	$sql .="iron_max='" . $record['iron_max'] . "', ";
	$sql .="magnesium_max='" . $record['magnesium_max'] . "', ";
	$sql .="manganese_max='" . $record['manganese_max'] . "', ";
	$sql .="phosphorus_max='" . $record['phosphorus_max'] . "', ";
	$sql .="potassium_max='" . $record['potassium_max'] . "', ";
	$sql .="selenium_max='" . $record['selenium_max'] . "', ";
	$sql .="sodium_max='" . $record['sodium_max'] . "', ";
	$sql .="zinc_max='" . $record['zinc_max'] . "', ";
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
	if($query) {
		header("Location: " . "index.php?user=" . $_GET['user']);
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}

} else {
}
?>
	<?php
	$sql = "SELECT * FROM diet_constraints WHERE user ='" . $_GET['user'] ."'";
	$query = mysqli_query($db,$sql);
	if (!$query) {
	exit("Database query failed: " . mysqli_error($db));
}
	?>
	<?php $record = mysqli_fetch_assoc($query)?>
  <body>
	<h1>Edit Constraints</h1>
	<div>Upper Limits with value of 0 will be omitted in the linear programming model</div>
	<h3><a class="action" href="<?php echo ('index.php?user=' . $_GET['user']); ?>">Back to diet plan</a></h3>
    <form action="<?php echo ('edit_constraints.php?user=' . $_GET['user']); ?>" method="post">
      <div id="operations">
        <input type="submit" value="Update Constraints"/>
      </div>
	<table class="list">
		<tr><th></th><th>Lower Limit</th><th>Upper Limit</th></tr>
		<tr><th>kcals</th><td><input type="number" min="0" max="99999999" step="0.001" name="kcals_min" value="<?php echo htm($record['kcals_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="kcals_max" value="<?php echo htm($record['kcals_max']); ?>" /></td></tr>
		<tr><th>carb</th><td><input type="number" min="0" max="99999999" step="0.001" name="carb_min" value="<?php echo htm($record['carb_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="carb_max" value="<?php echo htm($record['carb_max']); ?>" /></td></tr>
		<tr><th>fiber</th><td><input type="number" min="0" max="99999999" step="0.001" name="fiber_min" value="<?php echo htm($record['fiber_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="fiber_max" value="<?php echo htm($record['fiber_max']); ?>" /></td></tr>
		<tr><th>protein</th><td><input type="number" min="0" max="99999999" step="0.001" name="protein_min" value="<?php echo htm($record['protein_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="protein_max" value="<?php echo htm($record['protein_max']); ?>" /></td></tr>
		<tr><th>fat</th><td><input type="number" min="0" max="99999999" step="0.001" name="fat_min" value="<?php echo htm($record['fat_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="fat_max" value="<?php echo htm($record['fat_max']); ?>" /></td></tr>
		<tr><th>ala183und</th><td><input type="number" min="0" max="99999999" step="0.001" name="ala183und_min" value="<?php echo htm($record['ala183und_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="ala183und_max" value="<?php echo htm($record['ala183und_max']); ?>" /></td></tr>
		<tr><th>la182und</th><td><input type="number" min="0" max="99999999" step="0.001" name="la182und_min" value="<?php echo htm($record['la182und_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="la182und_max" value="<?php echo htm($record['la182und_max']); ?>" /></td></tr>
		<tr><th>water</th><td><input type="number" min="0" max="99999999" step="0.001" name="water_min" value="<?php echo htm($record['water_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="water_max" value="<?php echo htm($record['water_max']); ?>" /></td></tr>
		<tr><th>vitamina</th><td><input type="number" min="0" max="99999999" step="0.001" name="vitamina_min" value="<?php echo htm($record['vitamina_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="vitamina_max" value="<?php echo htm($record['vitamina_max']); ?>" /></td></tr>
		<tr><th>vitaminc</th><td><input type="number" min="0" max="99999999" step="0.001" name="vitaminc_min" value="<?php echo htm($record['vitaminc_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="vitaminc_max" value="<?php echo htm($record['vitaminc_max']); ?>" /></td></tr>
		<tr><th>vitamind</th><td><input type="number" min="0" max="99999999" step="0.001" name="vitamind_min" value="<?php echo htm($record['vitamind_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="vitamind_max" value="<?php echo htm($record['vitamind_max']); ?>" /></td></tr>
		<tr><th>vitaminb6</th><td><input type="number" min="0" max="99999999" step="0.001" name="vitaminb6_min" value="<?php echo htm($record['vitaminb6_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="vitaminb6_max" value="<?php echo htm($record['vitaminb6_max']); ?>" /></td></tr>
		<tr><th>vitamine</th><td><input type="number" min="0" max="99999999" step="0.001" name="vitamine_min" value="<?php echo htm($record['vitamine_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="vitamine_max" value="<?php echo htm($record['vitamine_max']); ?>" /></td></tr>
		<tr><th>vitamink</th><td><input type="number" min="0" max="99999999" step="0.001" name="vitamink_min" value="<?php echo htm($record['vitamink_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="vitamink_max" value="<?php echo htm($record['vitamink_max']); ?>" /></td></tr>
		<tr><th>thiamin</th><td><input type="number" min="0" max="99999999" step="0.001" name="thiamin_min" value="<?php echo htm($record['thiamin_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="thiamin_max" value="<?php echo htm($record['thiamin_max']); ?>" /></td></tr>
		<tr><th>vitaminb12</th><td><input type="number" min="0" max="99999999" step="0.001" name="vitaminb12_min" value="<?php echo htm($record['vitaminb12_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="vitaminb12_max" value="<?php echo htm($record['vitaminb12_max']); ?>" /></td></tr>
		<tr><th>riboflavin</th><td><input type="number" min="0" max="99999999" step="0.001" name="riboflavin_min" value="<?php echo htm($record['riboflavin_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="riboflavin_max" value="<?php echo htm($record['riboflavin_max']); ?>" /></td></tr>
		<tr><th>folate</th><td><input type="number" min="0" max="99999999" step="0.001" name="folate_min" value="<?php echo htm($record['folate_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="folate_max" value="<?php echo htm($record['folate_max']); ?>" /></td></tr>
		<tr><th>niacin</th><td><input type="number" min="0" max="99999999" step="0.001" name="niacin_min" value="<?php echo htm($record['niacin_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="niacin_max" value="<?php echo htm($record['niacin_max']); ?>" /></td></tr>
		<tr><th>choline</th><td><input type="number" min="0" max="99999999" step="0.001" name="choline_min" value="<?php echo htm($record['choline_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="choline_max" value="<?php echo htm($record['choline_max']); ?>" /></td></tr>
		<tr><th>pantothenicacid</th><td><input type="number" min="0" max="99999999" step="0.001" name="pantothenicacid_min" value="<?php echo htm($record['pantothenicacid_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="pantothenicacid_max" value="<?php echo htm($record['pantothenicacid_max']); ?>" /></td></tr>
		<tr><th>calcium</th><td><input type="number" min="0" max="99999999" step="0.001" name="calcium_min" value="<?php echo htm($record['calcium_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="calcium_max" value="<?php echo htm($record['calcium_max']); ?>" /></td></tr>
		<tr><th>copper</th><td><input type="number" min="0" max="99999999" step="0.001" name="copper_min" value="<?php echo htm($record['copper_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="copper_max" value="<?php echo htm($record['copper_max']); ?>" /></td></tr>
		<tr><th>fluoride</th><td><input type="number" min="0" max="99999999" step="0.001" name="fluoride_min" value="<?php echo htm($record['fluoride_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="fluoride_max" value="<?php echo htm($record['fluoride_max']); ?>" /></td></tr>
		<tr><th>iron</th><td><input type="number" min="0" max="99999999" step="0.001" name="iron_min" value="<?php echo htm($record['iron_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="iron_max" value="<?php echo htm($record['iron_max']); ?>" /></td></tr>
		<tr><th>magnesium</th><td><input type="number" min="0" max="99999999" step="0.001" name="magnesium_min" value="<?php echo htm($record['magnesium_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="magnesium_max" value="<?php echo htm($record['magnesium_max']); ?>" /></td></tr>
		<tr><th>manganese</th><td><input type="number" min="0" max="99999999" step="0.001" name="manganese_min" value="<?php echo htm($record['manganese_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="manganese_max" value="<?php echo htm($record['manganese_max']); ?>" /></td></tr>
		<tr><th>phosphorus</th><td><input type="number" min="0" max="99999999" step="0.001" name="phosphorus_min" value="<?php echo htm($record['phosphorus_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="phosphorus_max" value="<?php echo htm($record['phosphorus_max']); ?>" /></td></tr>
		<tr><th>potassium</th><td><input type="number" min="0" max="99999999" step="0.001" name="potassium_min" value="<?php echo htm($record['potassium_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="potassium_max" value="<?php echo htm($record['potassium_max']); ?>" /></td></tr>
		<tr><th>selenium</th><td><input type="number" min="0" max="99999999" step="0.001" name="selenium_min" value="<?php echo htm($record['selenium_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="selenium_max" value="<?php echo htm($record['selenium_max']); ?>" /></td></tr>
		<tr><th>sodium</th><td><input type="number" min="0" max="99999999" step="0.001" name="sodium_min" value="<?php echo htm($record['sodium_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="sodium_max" value="<?php echo htm($record['sodium_max']); ?>" /></td></tr>
		<tr><th>zinc</th><td><input type="number" min="0" max="99999999" step="0.001" name="zinc_min" value="<?php echo htm($record['zinc_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="zinc_max" value="<?php echo htm($record['zinc_max']); ?>" /></td></tr>
		<tr><th>phenylalanine</th><td><input type="number" min="0" max="99999999" step="0.001" name="phenylalanine_min" value="<?php echo htm($record['phenylalanine_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="phenylalanine_max" value="<?php echo htm($record['phenylalanine_max']); ?>" /></td></tr>
		<tr><th>valine</th><td><input type="number" min="0" max="99999999" step="0.001" name="valine_min" value="<?php echo htm($record['valine_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="valine_max" value="<?php echo htm($record['valine_max']); ?>" /></td></tr>
		<tr><th>threonine</th><td><input type="number" min="0" max="99999999" step="0.001" name="threonine_min" value="<?php echo htm($record['threonine_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="threonine_max" value="<?php echo htm($record['threonine_max']); ?>" /></td></tr>
		<tr><th>tryptophan</th><td><input type="number" min="0" max="99999999" step="0.001" name="tryptophan_min" value="<?php echo htm($record['tryptophan_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="tryptophan_max" value="<?php echo htm($record['tryptophan_max']); ?>" /></td></tr>
		<tr><th>methionine</th><td><input type="number" min="0" max="99999999" step="0.001" name="methionine_min" value="<?php echo htm($record['methionine_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="methionine_max" value="<?php echo htm($record['methionine_max']); ?>" /></td></tr>
		<tr><th>leucine</th><td><input type="number" min="0" max="99999999" step="0.001" name="leucine_min" value="<?php echo htm($record['leucine_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="leucine_max" value="<?php echo htm($record['leucine_max']); ?>" /></td></tr>
		<tr><th>isoleucine</th><td><input type="number" min="0" max="99999999" step="0.001" name="isoleucine_min" value="<?php echo htm($record['isoleucine_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="isoleucine_max" value="<?php echo htm($record['isoleucine_max']); ?>" /></td></tr>
		<tr><th>lysine</th><td><input type="number" min="0" max="99999999" step="0.001" name="lysine_min" value="<?php echo htm($record['lysine_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="lysine_max" value="<?php echo htm($record['lysine_max']); ?>" /></td></tr>
		<tr><th>histidine</th><td><input type="number" min="0" max="99999999" step="0.001" name="histidine_min" value="<?php echo htm($record['histidine_min']); ?>" /></td><td><input type="number" min="0" max="99999999" step="0.001" name="histidine_max" value="<?php echo htm($record['histidine_max']); ?>" /></td></tr>
	</table>
      <div id="operations">
        <input type="submit" value="Update Constraints" />
      </div>
    </form>
  </body>
<?php db_disconnect($db); ?>
</html>
