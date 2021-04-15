<!doctype html>
<html lang="en">
	<?php $page_title = 'Edit Nutrient - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if (!isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");}?>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$record = [];
	$record['id'] = $_POST['id'] ?? '';
	$record['name'] = $_POST['name'] ?? '';
	$record['active'] = $_POST['active'] ?? '';
	$record['description'] = $_POST['description'] ?? '';
	$record['category'] = $_POST['category'] ?? '';
	$record['kcals'] = $_POST['kcals'] ?? '';
	$record['protein'] = $_POST['protein'] ?? '';
	$record['fat'] = $_POST['fat'] ?? '';
	$record['carb'] = $_POST['carb'] ?? '';
	$record['fiber'] = $_POST['fiber'] ?? '';
	$record['water'] = $_POST['water'] ?? '';
	$record['calcium'] = $_POST['calcium'] ?? '';
	$record['iron'] = $_POST['iron'] ?? '';
	$record['magnesium'] = $_POST['magnesium'] ?? '';
	$record['phosphorus'] = $_POST['phosphorus'] ?? '';
	$record['potassium'] = $_POST['potassium'] ?? '';
	$record['sodium'] = $_POST['sodium'] ?? '';
	$record['zinc'] = $_POST['zinc'] ?? '';
	$record['copper'] = $_POST['copper'] ?? '';
	$record['fluoride'] = $_POST['fluoride'] ?? '';
	$record['manganese'] = $_POST['manganese'] ?? '';
	$record['selenium'] = $_POST['selenium'] ?? '';
	$record['vitaminc'] = $_POST['vitaminc'] ?? '';
	$record['thiamin'] = $_POST['thiamin'] ?? '';
	$record['riboflavin'] = $_POST['riboflavin'] ?? '';
	$record['niacin'] = $_POST['niacin'] ?? '';
	$record['pantothenicacid'] = $_POST['pantothenicacid'] ?? '';
	$record['vitaminb6'] = $_POST['vitaminb6'] ?? '';
	$record['folate'] = $_POST['folate'] ?? '';
	$record['choline'] = $_POST['choline'] ?? '';
	$record['vitaminb12'] = $_POST['vitaminb12'] ?? '';
	$record['vitamina'] = $_POST['vitamina'] ?? '';
	$record['vitamine'] = $_POST['vitamine'] ?? '';
	$record['vitamind'] = $_POST['vitamind'] ?? '';
	$record['vitamink'] = $_POST['vitamink'] ?? '';
	$record['ala183und'] = $_POST['ala183und'] ?? '';
	$record['la182und'] = $_POST['la182und'] ?? '';
	$record['monofat'] = $_POST['monofat'] ?? '';
	$record['polyfat'] = $_POST['polyfat'] ?? '';
	$record['satfat'] = $_POST['satfat'] ?? '';
	$record['transfat'] = $_POST['transfat'] ?? '';
	$record['phenylalanine'] = $_POST['phenylalanine'] ?? '';
	$record['valine'] = $_POST['valine'] ?? '';
	$record['threonine'] = $_POST['threonine'] ?? '';
	$record['tryptophan'] = $_POST['tryptophan'] ?? '';
	$record['methionine'] = $_POST['methionine'] ?? '';
	$record['leucine'] = $_POST['leucine'] ?? '';
	$record['isoleucine'] = $_POST['isoleucine'] ?? '';
	$record['lysine'] = $_POST['lysine'] ?? '';
	$record['histidine'] = $_POST['histidine'] ?? '';
	validate($record);
	
	$sql = "UPDATE nutritionfacts SET ";
	$sql .="id='" . $record['id'] . "', ";
	$sql .=" name='" . esc($record['name']) . "', ";
	$sql .="active='" . $record['active'] . "', ";
	$sql .="description='" . esc($record['description']) . "', ";
	$sql .="category='" . esc($record['category']) . "', ";
	$sql .="kcals='" . $record['kcals'] . "', ";
	$sql .="protein='" . $record['protein'] . "', ";
	$sql .="fat='" . $record['fat'] . "', ";
	$sql .="carb='" . $record['carb'] . "', ";
	$sql .="fiber='" . $record['fiber'] . "', ";
	$sql .="water='" . $record['water'] . "', ";
	$sql .="calcium='" . $record['calcium'] . "', ";
	$sql .="iron='" . $record['iron'] . "', ";
	$sql .="magnesium='" . $record['magnesium'] . "', ";
	$sql .="phosphorus='" . $record['phosphorus'] . "', ";
	$sql .="potassium='" . $record['potassium'] . "', ";
	$sql .="sodium='" . $record['sodium'] . "', ";
	$sql .="zinc='" . $record['zinc'] . "', ";
	$sql .="copper='" . $record['copper'] . "', ";
	$sql .="fluoride='" . $record['fluoride'] . "', ";
	$sql .="manganese='" . $record['manganese'] . "', ";
	$sql .="selenium='" . $record['selenium'] . "', ";
	$sql .="vitaminc='" . $record['vitaminc'] . "', ";
	$sql .="thiamin='" . $record['thiamin'] . "', ";
	$sql .="riboflavin='" . $record['riboflavin'] . "', ";
	$sql .="niacin='" . $record['niacin'] . "', ";
	$sql .="pantothenicacid='" . $record['pantothenicacid'] . "', ";
	$sql .="vitaminb6='" . $record['vitaminb6'] . "', ";
	$sql .="folate='" . $record['folate'] . "', ";
	$sql .="choline='" . $record['choline'] . "', ";
	$sql .="vitaminb12='" . $record['vitaminb12'] . "', ";
	$sql .="vitamina='" . $record['vitamina'] . "', ";
	$sql .="vitamine='" . $record['vitamine'] . "', ";
	$sql .="vitamind='" . $record['vitamind'] . "', ";
	$sql .="vitamink='" . $record['vitamink'] . "', ";
	$sql .="ala183und='" . $record['ala183und'] . "', ";
	$sql .="la182und='" . $record['la182und'] . "', ";
	$sql .="monofat='" . $record['monofat'] . "', ";
	$sql .="polyfat='" . $record['polyfat'] . "', ";
	$sql .="satfat='" . $record['satfat'] . "', ";
	$sql .="transfat='" . $record['transfat'] . "', ";
	$sql .="phenylalanine='" . $record['phenylalanine'] . "', ";
	$sql .="valine='" . $record['valine'] . "', ";
	$sql .="threonine='" . $record['threonine'] . "', ";
	$sql .="tryptophan='" . $record['tryptophan'] . "', ";
	$sql .="methionine='" . $record['methionine'] . "', ";
	$sql .="leucine='" . $record['leucine'] . "', ";
	$sql .="isoleucine='" . $record['isoleucine'] . "', ";
	$sql .="lysine='" . $record['lysine'] . "', ";
	$sql .="histidine='" . $record['histidine'] . "', ";
	$sql .="`timestamp` = NOW() ";
	$sql .="WHERE id='" . $_GET['id'] . "' AND user ='" . $_SESSION['user'] . "'";

	$query = mysqli_query($db,$sql);
	if($query) {
		header("Location: " . "show.php?id=" . url($record['id']));
	} else {
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}

} else {
}
?>

	<?php if(!isset($_GET['id'])){header("Location: " . "index.php");}?>
	<?php $id = $_GET['id'] ?? '';?>
	<?php
	$sql = "SELECT * FROM nutritionfacts WHERE id ='" . $_GET['id'] . "' AND user ='" . $_SESSION['user'] . "'";
	$query = mysqli_query($db,$sql);
	if (!$query) {
	exit("Database query failed: " . mysqli_error($db));
}
if (!$id) {
	exit("Please provide an id");
}
	?>
	<?php $record = mysqli_fetch_assoc($query)?>
  <body>
	<h1>Edit nutrient</h1>
	<h3><a class="action" href="index.php">Back to nutrients list</a></h3>
    <form action="<?php echo ('edit.php?id=' . url($id)); ?>" method="post">
      <div id="operations">
        <input type="submit" value="Update Nutrient" />
      </div>
	<table class="list">
        <tr><th>USDA ID</th><td><input type="text" name="id" value="<?php echo htm($record['id']); ?>" /></td></tr>
		<tr><th>name</th><td><input type="text" name="name" value="<?php echo htm($record['name']); ?>" /></td></tr>
		<tr><th>Active</th><td><input type="hidden" name="active" value="0" />
          <input type="checkbox" name="active" value="1" <?php echo (htm($record['active'])==1 ? 'checked' : '');?>></td></tr>
		<tr><th>description</th><td><input type="text" name="description" value="<?php echo htm($record['description']); ?>" /></td></tr>
		<tr><th>category</th><td><input type="text" name="category" value="<?php echo htm($record['category']); ?>" /></td></tr>
		<tr><th>kcals</th><td><input type="number" min="0.000" step="0.001" name="kcals" value="<?php echo htm($record['kcals']); ?>" /></td></tr>
		<tr><th>protein</th><td><input type="number" min="0.000" step="0.001" name="protein" value="<?php echo htm($record['protein']); ?>" /></td></tr>
		<tr><th>fat</th><td><input type="number" min="0.000" step="0.001" name="fat" value="<?php echo htm($record['fat']); ?>" /></td></tr>
		<tr><th>carb</th><td><input type="number" min="0.000" step="0.001" name="carb" value="<?php echo htm($record['carb']); ?>" /></td></tr>
		<tr><th>fiber</th><td><input type="number" min="0.000" step="0.001" name="fiber" value="<?php echo htm($record['fiber']); ?>" /></td></tr>
		<tr><th>water</th><td><input type="number" min="0.000" step="0.001" name="water" value="<?php echo htm($record['water']); ?>" /></td></tr>
		<tr><th>calcium</th><td><input type="number" min="0.000" step="0.001" name="calcium" value="<?php echo htm($record['calcium']); ?>" /></td></tr>
		<tr><th>iron</th><td><input type="number" min="0.000" step="0.001" name="iron" value="<?php echo htm($record['iron']); ?>" /></td></tr>
		<tr><th>magnesium</th><td><input type="number" min="0.000" step="0.001" name="magnesium" value="<?php echo htm($record['magnesium']); ?>" /></td></tr>
		<tr><th>phosphorus</th><td><input type="number" min="0.000" step="0.001" name="phosphorus" value="<?php echo htm($record['phosphorus']); ?>" /></td></tr>
		<tr><th>potassium</th><td><input type="number" min="0.000" step="0.001" name="potassium" value="<?php echo htm($record['potassium']); ?>" /></td></tr>
		<tr><th>sodium</th><td><input type="number" min="0.000" step="0.001" name="sodium" value="<?php echo htm($record['sodium']); ?>" /></td></tr>
		<tr><th>zinc</th><td><input type="number" min="0.000" step="0.001" name="zinc" value="<?php echo htm($record['zinc']); ?>" /></td></tr>
		<tr><th>copper</th><td><input type="number" min="0.000" step="0.001" name="copper" value="<?php echo htm($record['copper']); ?>" /></td></tr>
		<tr><th>fluoride</th><td><input type="number" min="0.000" step="0.001" name="fluoride" value="<?php echo htm($record['fluoride']); ?>" /></td></tr>
		<tr><th>manganese</th><td><input type="number" min="0.000" step="0.001" name="manganese" value="<?php echo htm($record['manganese']); ?>" /></td></tr>
		<tr><th>selenium</th><td><input type="number" min="0.000" step="0.001" name="selenium" value="<?php echo htm($record['selenium']); ?>" /></td></tr>
		<tr><th>vitaminc</th><td><input type="number" min="0.000" step="0.001" name="vitaminc" value="<?php echo htm($record['vitaminc']); ?>" /></td></tr>
		<tr><th>thiamin</th><td><input type="number" min="0.000" step="0.001" name="thiamin" value="<?php echo htm($record['thiamin']); ?>" /></td></tr>
		<tr><th>riboflavin</th><td><input type="number" min="0.000" step="0.001" name="riboflavin" value="<?php echo htm($record['riboflavin']); ?>" /></td></tr>
		<tr><th>niacin</th><td><input type="number" min="0.000" step="0.001" name="niacin" value="<?php echo htm($record['niacin']); ?>" /></td></tr>
		<tr><th>pantothenicacid</th><td><input type="number" min="0.000" step="0.001" name="pantothenicacid" value="<?php echo htm($record['pantothenicacid']); ?>" /></td></tr>
		<tr><th>vitaminb6</th><td><input type="number" min="0.000" step="0.001" name="vitaminb6" value="<?php echo htm($record['vitaminb6']); ?>" /></td></tr>
		<tr><th>folate</th><td><input type="number" min="0.000" step="0.001" name="folate" value="<?php echo htm($record['folate']); ?>" /></td></tr>
		<tr><th>choline</th><td><input type="number" min="0.000" step="0.001" name="choline" value="<?php echo htm($record['choline']); ?>" /></td></tr>
		<tr><th>vitaminb12</th><td><input type="number" min="0.000" step="0.001" name="vitaminb12" value="<?php echo htm($record['vitaminb12']); ?>" /></td></tr>
		<tr><th>vitamina</th><td><input type="number" min="0.000" step="0.001" name="vitamina" value="<?php echo htm($record['vitamina']); ?>" /></td></tr>
		<tr><th>vitamine</th><td><input type="number" min="0.000" step="0.001" name="vitamine" value="<?php echo htm($record['vitamine']); ?>" /></td></tr>
		<tr><th>vitamind</th><td><input type="number" min="0.000" step="0.001" name="vitamind" value="<?php echo htm($record['vitamind']); ?>" /></td></tr>
		<tr><th>vitamink</th><td><input type="number" min="0.000" step="0.001" name="vitamink" value="<?php echo htm($record['vitamink']); ?>" /></td></tr>
		<tr><th>ala183und</th><td><input type="number" min="0.000" step="0.001" name="ala183und" value="<?php echo htm($record['ala183und']); ?>" /></td></tr>
		<tr><th>la182und</th><td><input type="number" min="0.000" step="0.001" name="la182und" value="<?php echo htm($record['la182und']); ?>" /></td></tr>
		<tr><th>monofat</th><td><input type="number" min="0.000" step="0.001" name="monofat" value="<?php echo htm($record['monofat']); ?>" /></td></tr>
		<tr><th>polyfat</th><td><input type="number" min="0.000" step="0.001" name="polyfat" value="<?php echo htm($record['polyfat']); ?>" /></td></tr>
		<tr><th>satfat</th><td><input type="number" min="0.000" step="0.001" name="satfat" value="<?php echo htm($record['satfat']); ?>" /></td></tr>
		<tr><th>transfat</th><td><input type="number" min="0.000" step="0.001" name="transfat" value="<?php echo htm($record['transfat']); ?>" /></td></tr>
		<tr><th>phenylalanine</th><td><input type="number" min="0.000" step="0.001" name="phenylalanine" value="<?php echo htm($record['phenylalanine']); ?>" /></td></tr>
		<tr><th>valine</th><td><input type="number" min="0.000" step="0.001" name="valine" value="<?php echo htm($record['valine']); ?>" /></td></tr>
		<tr><th>threonine</th><td><input type="number" min="0.000" step="0.001" name="threonine" value="<?php echo htm($record['threonine']); ?>" /></td></tr>
		<tr><th>tryptophan</th><td><input type="number" min="0.000" step="0.001" name="tryptophan" value="<?php echo htm($record['tryptophan']); ?>" /></td></tr>
		<tr><th>methionine</th><td><input type="number" min="0.000" step="0.001" name="methionine" value="<?php echo htm($record['methionine']); ?>" /></td></tr>
		<tr><th>leucine</th><td><input type="number" min="0.000" step="0.001" name="leucine" value="<?php echo htm($record['leucine']); ?>" /></td></tr>
		<tr><th>isoleucine</th><td><input type="number" min="0.000" step="0.001" name="isoleucine" value="<?php echo htm($record['isoleucine']); ?>" /></td></tr>
		<tr><th>lysine</th><td><input type="number" min="0.000" step="0.001" name="lysine" value="<?php echo htm($record['lysine']); ?>" /></td></tr>
		<tr><th>histidine</th><td><input type="number" min="0.000" step="0.001" name="histidine" value="<?php echo htm($record['histidine']); ?>" /></td></tr>

	</table>
      <div id="operations">
        <input type="submit" value="Update Nutrient" />
      </div>
    </form>
  </body>
<?php db_disconnect($db); ?>
</html>
