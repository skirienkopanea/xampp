<!doctype html>
<html lang="en">
	<?php $page_title = 'View Nutrient - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if(!isset($_GET['id']) || !isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");}?>
	<?php $id = $_GET['id'] ?? '';?>
	<?php
	$sql = "SELECT * FROM nutritionfacts WHERE id ='" . esc($id) ."' AND user ='" . esc($_SESSION['user']) ."'";
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
  <h1>100g of
  <?php
	if (!$record['description']) {
	echo htm($record['name']);
	} else { echo htm($record['description']);}
?>
	</h1>
	<h3><a class="action" href="index.php">Back to nutrients list</a></h3>
	<table class="div">
	<tr>
	<td valign="top">
	<div class="actions">
	<a class="action" href="<?php echo ('edit.php?id=' . url($record['id'])); ?>">Edit</a>
	<a class="action" href="<?php echo ('delete.php?id=' . url($record['id'])); ?>">Delete</a>
	</div>
  	<table class="list">
		<tr><th>last updated</th><td><?php echo htm($record['timestamp']); ?></td></tr>
		<tr><th>FDC ID</th><td><?php echo htm($record['id']); //To do: be able to sort by headers and apply search filters?></td></tr>
		<tr><th>name</th><td><?php echo htm($record['name']); ?></td></tr>
		<tr><th>active</th><td><?php echo $record['active'] == 1 ? 'True' : 'False'; ?></td></tr>
		<tr><th>description</th><td><?php echo htm($record['description']); ?></td></tr>
		<tr><th>category</th><td><?php echo htm($record['category']); ?></td></tr>
		<tr><th>kcals</th><td><?php echo htm($record['kcals']); ?></td></tr>
		<tr><th>protein</th><td><?php echo htm($record['protein']); ?></td></tr>
		<tr><th>fat</th><td><?php echo htm($record['fat']); ?></td></tr>
		<tr><th>carb</th><td><?php echo htm($record['carb']); ?></td></tr>
		<tr><th>fiber</th><td><?php echo htm($record['fiber']); ?></td></tr>
		<tr><th>water</th><td><?php echo htm($record['water']); ?></td></tr>
		<tr><th>calcium</th><td><?php echo htm($record['calcium']); ?></td></tr>
		<tr><th>iron</th><td><?php echo htm($record['iron']); ?></td></tr>
		<tr><th>magnesium</th><td><?php echo htm($record['magnesium']); ?></td></tr>
		<tr><th>phosphorus</th><td><?php echo htm($record['phosphorus']); ?></td></tr>
		<tr><th>potassium</th><td><?php echo htm($record['potassium']); ?></td></tr>
		<tr><th>sodium</th><td><?php echo htm($record['sodium']); ?></td></tr>
		<tr><th>zinc</th><td><?php echo htm($record['zinc']); ?></td></tr>
		<tr><th>copper</th><td><?php echo htm($record['copper']); ?></td></tr>
		<tr><th>fluoride</th><td><?php echo htm($record['fluoride']); ?></td></tr>
		<tr><th>manganese</th><td><?php echo htm($record['manganese']); ?></td></tr>
		<tr><th>selenium</th><td><?php echo htm($record['selenium']); ?></td></tr>
		<tr><th>vitaminc</th><td><?php echo htm($record['vitaminc']); ?></td></tr>
		<tr><th>thiamin</th><td><?php echo htm($record['thiamin']); ?></td></tr>
		<tr><th>riboflavin</th><td><?php echo htm($record['riboflavin']); ?></td></tr>
		<tr><th>niacin</th><td><?php echo htm($record['niacin']); ?></td></tr>
		<tr><th>pantothenicacid</th><td><?php echo htm($record['pantothenicacid']); ?></td></tr>
		<tr><th>vitaminb6</th><td><?php echo htm($record['vitaminb6']); ?></td></tr>
		<tr><th>folate</th><td><?php echo htm($record['folate']); ?></td></tr>
		<tr><th>choline</th><td><?php echo htm($record['choline']); ?></td></tr>
		<tr><th>vitaminb12</th><td><?php echo htm($record['vitaminb12']); ?></td></tr>
		<tr><th>vitamina</th><td><?php echo htm($record['vitamina']); ?></td></tr>
		<tr><th>vitamine</th><td><?php echo htm($record['vitamine']); ?></td></tr>
		<tr><th>vitamind</th><td><?php echo htm($record['vitamind']); ?></td></tr>
		<tr><th>vitamink</th><td><?php echo htm($record['vitamink']); ?></td></tr>
		<tr><th>ala183und</th><td><?php echo htm($record['ala183und']); ?></td></tr>
		<tr><th>la182und</th><td><?php echo htm($record['la182und']); ?></td></tr>
		<tr><th>monofat</th><td><?php echo htm($record['monofat']); ?></td></tr>
		<tr><th>polyfat</th><td><?php echo htm($record['polyfat']); ?></td></tr>
		<tr><th>satfat</th><td><?php echo htm($record['satfat']); ?></td></tr>
		<tr><th>transfat</th><td><?php echo htm($record['transfat']); ?></td></tr>
		<tr><th>phenylalanine</th><td><?php echo htm($record['phenylalanine']); ?></td></tr>
		<tr><th>valine</th><td><?php echo htm($record['valine']); ?></td></tr>
		<tr><th>threonine</th><td><?php echo htm($record['threonine']); ?></td></tr>
		<tr><th>tryptophan</th><td><?php echo htm($record['tryptophan']); ?></td></tr>
		<tr><th>methionine</th><td><?php echo htm($record['methionine']); ?></td></tr>
		<tr><th>leucine</th><td><?php echo htm($record['leucine']); ?></td></tr>
		<tr><th>isoleucine</th><td><?php echo htm($record['isoleucine']); ?></td></tr>
		<tr><th>lysine</th><td><?php echo htm($record['lysine']); ?></td></tr>
		<tr><th>histidine</th><td><?php echo htm($record['histidine']); ?></td></tr>
  	</table>
	</td>
	<td valign="top">
		<table id="map">
		<h3>Mapped products</h3>
		<?php 
		$sql = "SELECT * FROM map WHERE usda_id ='" . esc($id) . "' AND user ='" . esc($_SESSION['user']) ."'";
		$query = mysqli_query($db,$sql);		
		foreach ($query as $record) {
			echo '<a href="../products/show.php?id=' . $record['product_id'] . '">' . $record['product_name'] . '</a><br>' . $record['product_id'] . '<br>';
			echo '<a href="../products/show.php?id=' . $record['product_id'] . '"><img src="' . 'https://storefront-prod.nl.picnicinternational.com/static/images/' .  htm($record['image']) . '/small.png' . '" onerror="this.style.display=\'none\'"></a><br>';
			
		}
		?>
		
		
		
		</table>
	</td>
	</tr>
	</table>
	
  </body>
<?php mysqli_free_result($query); ?> 
<?php db_disconnect($db); ?>
</html>
