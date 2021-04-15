<!doctype html>
<html lang="en">
	<?php $page_title = 'View Product - Minimalist Diet & Workout'; ?>
	<?php require_once('../../private/functions.php'); ?>
	<?php if(!isset($_GET['id']) || !isset($_SESSION['user'])){exit ("<h1>User restricted area</h1><h3>You are not logged in</br><a href='javascript:history.back()'>Go back</a></h3>");}?>
	<?php $id = $_GET['id'] ?? '';?>
	<?php
	$sql = "SELECT * FROM products WHERE id ='" . esc($id) ."' AND user ='" . esc($_SESSION['user']) ."'";
	$query = mysqli_query($db,$sql);
	if (!$query) {
	exit("Database query failed: " . mysqli_error($db));
}
if (!$id) {
	exit("Please provide an id");
}
	?>
	<?php $record = mysqli_fetch_assoc($query)?>
	<?php
	
	$sql2 = "SELECT id,name FROM nutritionfacts WHERE id ='" . esc($record['usda_id']) . "' AND user ='" . esc($_SESSION['user']) ."'";
	$query2 = mysqli_query($db,$sql2);
	$record2 = mysqli_fetch_assoc($query2);	
	?>
  <body>
  <!--<h1>Product: <?php echo htm($record['name']);?>-->
	</h1>
	<h3><a class="action" href="index.php">Back to products list</a></h3>
	<div class="actions">
	<a class="action" href="<?php echo ('edit.php?id=' . url($record['id'])); ?>">Edit</a>
	<a class="action" href="<?php echo ('delete.php?id=' . url($record['id'])); ?>">Delete</a>
	</div>
  	<table class="div">
	<tr>
	<td>
		<table class="list">
		<tr><th>Udated</th><td><?php echo htm($record['timestamp']); ?></td></tr>
		<tr><th>Picnic ID</th><td><?php echo htm($record['id']); //To do: be able to sort by headers and apply search filters?></td></tr>
		<tr><th>Name</th><td><?php echo htm($record['name']); ?></td></tr>
		<tr><th>Active</th><td><?php echo $record['active'] == 1 ? 'True' : 'False'; ?></td></tr>
		<tr><th>Description</th><td><?php echo htm($record['description']); ?></td></tr>
		<tr><th>USDA Name</th><td><a href="../usda/show.php?id=<?php echo htm($record['usda_id']); ?>">"<?php echo htm($record2['name']); ?>"</td></tr>
		<tr><th>Price</th><td><?php echo htm($record['price']); ?></td></tr>
		<tr><th>Weight</th><td><?php echo htm($record['weight_g_net']); ?></td></tr>
		<tr><th>Price per kg</th><td><?php echo htm($record['price_per_kg']); ?></td></tr>
		<tr><th>Fresh days</th><td><?php echo htm($record['fresh_days']) == 0 ? '' : htm($record['fresh_days']); ?></td></tr>
		<tr><th>Origin</th><td><?php echo htm($record['origin']); ?></td></tr>
		<tr><th>Feedback</th><td><?php echo $record['feedback'] == 1 ? 'Bad' : 'Good'; ?></td></tr>
		</table>
	</td>
		<td><img src="<?php echo 'https://storefront-prod.nl.picnicinternational.com/static/images/' .  htm($record['image'] . '/small.png'); ?>" onerror="this.style.display='none'"></td>
	</tr>
  	</table>
	
  </body>
<?php mysqli_free_result($query); ?> 
<?php db_disconnect($db); ?>
</html>